<?php

namespace App\Models;

use CodeIgniter\Model;

class BrandModel extends Model
{
    protected $table      = 'tb_brand';
    protected $primaryKey = 'id';

    protected $allowedFields = ['image'];

    public function getAll()
    {
        return $this->findAll();
    }
}
