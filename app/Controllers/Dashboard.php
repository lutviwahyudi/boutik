<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ClothesModel;
use App\Models\MessageModel;
use CodeIgniter\Controller;

class Dashboard extends Controller
{

    protected $clothesModel;
    protected $userModel;
    protected $messageModel;
    public function __construct() {
        $this->clothesModel = new ClothesModel();
        $this->userModel = new UserModel();
        $this->messageModel = new MessageModel();
    }
    public function index()
    {

        $data = [
            'title' => 'Dashboard',
            'user' => $this->userModel->findAll(),
            'clothes' => $this->clothesModel->findAll(),
            'message' => $this->messageModel->findAll()

        ];

        return view('dashboard/index', $data);
    }

    public function addProducts()
    {
        $data = [
            'title' => 'Add Products'
        ];
        return view('dashboard/addProducts', $data);
    }

    public function submitProducts()

    {
        $name = $this->request->getPost('name');
        $price = $this->request->getPost('price');
        $description = $this->request->getPost('description');  
        $file = $this->request->getFile('image');
        if ($file && $file->isValid() && !$file->hasMoved()) {
        $newName = $file->getRandomName();
        $file->move('uploads/', $newName);
        $imagePath = 'uploads/' . $newName;
    } else {
        $imagePath = null;
    }

    $data = [   
        'name' => $name,
        'price' => $price,
        'description' => $description,
        'image' => $imagePath
    ];

    $this->clothesModel->insert($data);
    return redirect()->to('dashboard');
    }
}

?>