<?php

namespace App\Controllers;

use App\Models\ClothesModel;
use CodeIgniter\Controller;

class EditProducts extends Controller
{
    protected $clothesModel;

    public function __construct() {
        $this->clothesModel = new ClothesModel();
    }
    
    public function index()
    {
        return view('edit/products');
    }
}

?>