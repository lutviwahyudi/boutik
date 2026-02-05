<?php

namespace App\Models;

use CodeIgniter\Model;

class ClothesModel extends Model
{
    protected $table      = 'tb_clothes';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'image', 'description', 'price'];

    public function getAll()
    {
        return $this->findAll();
    }

    public function updateProducts($id, $data)
    {
        return $this->update($id, $data);
    }
}
