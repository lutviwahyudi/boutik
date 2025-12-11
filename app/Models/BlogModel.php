<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table      = 'tb_blog';
    protected $primaryKey = 'id';

    protected $allowedFields = ['image', 'title', 'description'];

    public function getAll()
    {
        return $this->findAll();
    }
}