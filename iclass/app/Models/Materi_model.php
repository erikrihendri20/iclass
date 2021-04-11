<?php

namespace App\Models;

use CodeIgniter\Model;

class Materi_Model extends Model
{
    protected $table      = 'materi';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    public function getAll()
    {
        return $this->findAll();
    }

    public function getById($id)
    {
        return $this->where('id', $id)->first();
    }
}