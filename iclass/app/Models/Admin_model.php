<?php

namespace App\Models;

use CodeIgniter\Model;

class Admin_model extends Model
{
    protected $table      = 'admin';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['nama', 'username' , 'password' , 'status' , 'role'];

    public function getByUserName($identitas)
    {
        $this->builder()->where('username',$identitas);
        return $this->builder()->get()->getResultArray();
    }
}