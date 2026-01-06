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
        $id = session()->get('id');
        $data = [
            'title' => 'Edit Profile',
            'user' => $this->UserModel->find($id)
        ];


        return view('edit/profile', $data);
  
    }

    public function editUser($id)
    {
            $data = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'nomer' => $this->request->getPost('nomer')
            ];

            $file = $this->request->getFile('image');

            if ($file && $file->isValid()) {
                $newName = $file->getRandomName();
                $file->move('uploads/profile', $newName);
                $data['image'] = 'uploads/profile/' . $newName;
            }

            if ($this->request->getPost('password')) {
                $data['password'] = password_hash(
                    $this->request->getPost('password'), PASSWORD_DEFAULT
                );
            }

            $this->UserModel->updateUser($id, $data);
            return redirect()->to('/profile');
    }
 }

?>