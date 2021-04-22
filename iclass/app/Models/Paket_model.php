<?php

namespace App\Models;

use CodeIgniter\Model;

class Paket_model extends Model
{
    protected $table      = 'paket';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['nama'];

    public function getById($id)
    {
        $this->builder()->where('id', $id);
        return $this->builder()->get()->getResultArray();
    }
}
