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

    public function allProduct(){
        $data = [
            'title' => 'All Products',
            'clothes' => $this->clothesModel->findAll(),
        ];
        return view('pages/allProduct', $data);
    }

    public function postMessage(){

         $messageModel = new MessageModel();

    $name  = session()->get('name');
    $nomer = session()->get('nomer');

    $data = [
        'name'    => $name,
        'email'   => $this->request->getPost('email'),
        'nomer'   => $nomer,
        'message' => $this->request->getPost('message'),
        'date'    => date('Y-m-d H:i:s'),
    ];

    $messageModel->insert($data);
        
    }

    public function contact(){
        $data = [
            'title' => 'Contact Us',
        ];
        return view('pages/contact', $data);
    }
}
