<?php
namespace App\Models;


use CodeIgniter\Model;


class UserModel extends Model
{
protected $table = 'tb_users';
protected $primaryKey = 'id';
protected $allowedFields = ['name', 'image', 'email', 'nomer', 'password'];

    public function updateUser($id, $data)
    {
        return $this->update($id, $data);
    }

}

