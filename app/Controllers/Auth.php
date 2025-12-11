<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function register()
    {
        return view('auth/register');
    }

    public function registerPost()
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|valid_email|is_unique[tb_users.email]',
            'password' => 'required|min_length[5]'
        ];

        if (!$this->validate($rules)) {
            return view('auth/register', [
                'validation' => $this->validator
            ]);
        }

        $model = new UserModel();
        $model->save([
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ]);

        return redirect()->to('/login');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function loginPost()
    {
        $session = session();
        $model = new UserModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $model->where('email', $email)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $session->set([
                    'id' => $user['id'],
                    'name' => $user['name'],
                    'email' => $user['email'],
                    'logged_in' => true
                ]);
                return redirect()->to('/');
            } else {
                return redirect()->back()->with('error', 'Password salah');
            }
        } else {
            return redirect()->back()->with('error', 'Email tidak ditemukan');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
    

    public function profile()
{
if (!session()->get('logged_in')) {
return redirect()->to('/login');
}


$model = new UserModel();
$data['user'] = $model->find(session()->get('id'));


return view('auth/profile', $data);
}
}
