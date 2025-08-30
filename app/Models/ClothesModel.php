<?php

namespace App\Models;

use CodeIgniter\Model;

class ClothesModel extends Model
{
    protected $table      = 'tb_clothes';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'image', 'describe', 'price'];

    public function getAll()
    {
        return $this->findAll();
    }
}
