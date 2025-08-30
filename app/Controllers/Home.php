<?php

namespace App\Controllers;

use App\Models\ClothesModel;
use App\Models\BrandModel;

class Home extends BaseController
{
    protected $clothesModel;
    protected $brandModel;

    public function __construct() {
        $this->clothesModel = new ClothesModel();
        $this->brandModel = new BrandModel();
    }

    public function index(){
    $data = [
        'title' => 'Home',
        'clothes' => $this->clothesModel->findAll(),
        'brand' => $this->brandModel->findAll()
    ];
    return view('pages/home', $data);
    }
}
