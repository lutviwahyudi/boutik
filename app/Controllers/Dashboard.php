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
}

?>