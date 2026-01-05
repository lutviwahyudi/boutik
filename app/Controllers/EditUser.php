<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

 class EditUser extends Controller {

    protected $UserModel;

    public function __construct() {
        $this->UserModel = new UserModel();
    }
    public function index()
    {

        $model = new UserModel();
        $data = [
            'title' => 'Edit Profile',
            'user' => $model->find(session()->get('id'))
        ];


        return view('edit/profile', $data);
  
    }
 }

?>