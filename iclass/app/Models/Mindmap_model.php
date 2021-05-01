<?php

namespace App\Models;

use CodeIgniter\Model;

class Mindmap_model extends Model
{
    protected $table      = 'mindmap';
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