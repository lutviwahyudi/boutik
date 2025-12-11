<?php

namespace App\Models;

use CodeIgniter\Model;

class MessageModel extends Model
{
    protected $table      = 'tb_message';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'email', 'nomer', 'message', 'date'];

    public function getAll()
    {
        return $this->findAll();
    }
}