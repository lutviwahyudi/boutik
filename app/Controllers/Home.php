<?php

namespace App\Controllers;

use App\Models\ClothesModel;
use App\Models\BrandModel;
use App\Models\BlogModel;
use App\Models\MessageModel;

class Home extends BaseController
{
    protected $clothesModel;
    protected $brandModel;
    protected $blogModel;
    protected $messageModel;

    public function __construct() {
        $this->clothesModel = new ClothesModel();
        $this->brandModel = new BrandModel();
        $this->blogModel = new BlogModel();
        $this->messageModel = new MessageModel();
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

    public function allProduct(){
        $data = [
            'title' => 'All Products',
            'clothes' => $this->clothesModel->findAll(),
        ];
        return view('pages/allProduct', $data);
    }
}
