<?php

namespace App\Controllers;

use App\Models\ClothesModel;
use App\Models\BrandModel;
use App\Models\BlogModel;
use App\Models\MessageModel;
use App\Models\UserModel;

class Home extends BaseController
{
    protected $clothesModel;
    protected $brandModel;
    protected $blogModel;
    protected $messageModel;
    protected $userModel;

    public function __construct() {
        $this->clothesModel = new ClothesModel();
        $this->brandModel = new BrandModel();
        $this->blogModel = new BlogModel();
        $this->messageModel = new MessageModel();
        $this->userModel = new UserModel();
    }

    public function index(){
    $data = [
        'title' => 'Home',
        'clothes' => $this->clothesModel 
        ->orderBy('id', 'DESC')
        ->limit(5)
        ->find(),
        'brand' => $this->brandModel->findAll(),
        'blog' => $this->blogModel->findAll(),
        'message' => $this->messageModel->findAll()
    ];
    return view('pages/home', $data);
    }

    public function profile(){
        $data = [
            'title' => 'My Profile',
            'user' => $this->userModel->find(session()->get('id'))
        ];
        return view('pages/profile', $data);
    }

    public function blogStatus(){
        $data = [
            'title' => 'Blog Status',
            'blog' => $this->blogModel->findAll()
        ];
        return view('pages/comingsoon', $data);
    }


    public function allProduct(){
        
        $data = [
            'title' => 'All Products',
            'clothes' => $this->clothesModel->findAll(),
        ];
        return view('pages/allProduct', $data);
    }

    public function products(){
        
        $data = [
            'title' => 'Products',
            'clothes' => $this->clothesModel->findAll()
        ];
        return view('dashboard/products', $data);
    }

    public function search()
    {
    $q = $this->request->getGet('q');

    if ($q) {
        $produk = $this->clothesModel
            ->like('name', $q)
            ->orLike('description', $q)
            ->findAll();
    } else {
        $produk = $this->clothesModel->findAll();
    }

    return view('dashboard/_tableProducts', [
        'clothes' => $produk
    ]);
    }

    public function ulasan(){
        $data = [
            'title' => 'Ulasan',
            'message' => $this->messageModel->findAll()
        ];

        return view('pages/ulasan', $data);
    }

    public function postMessage()
    {
        $rules = [
            'message' => 'required|min_length[5]',
        ];

        if (!$this->validate($rules)) {
            session()->setFlashdata('error', 'Isi dulu semua data dengan benar.');

            return redirect()->to('contact')->withInput();
        }

        $messageModel = new MessageModel();

        $data = [
            'name'    => session()->get('name'),
            'email'   => session()->get('email'),
            'nomer'   => session()->get('nomer'),
            'message' => $this->request->getPost('message'),
            'date'    => date('Y-m-d H:i:s'),
        ];

        $messageModel->insert($data);

        session()->setFlashdata(
            'success',
            'Terima kasih banyak atas saran dan masukannya 🙏'
        );

        return redirect()->to('contact');
    }


    public function contact(){
        $data = [
            'title' => 'Contact Us',
        ];
        return view('pages/contact', $data);
    }
}
