<?php

namespace App\Models;

use CodeIgniter\Model;

class Rekaman_Model extends Model
{
    protected $table      = 'rekaman';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['id', 'materi', 'ext_tn'];

    public function getAll()
    {
        return $this->findAll();
    }

    public function getById($id)
    {
        return $this->where('id', $id)->first();
    }

    public function postRekaman($data)
    {
        $this->insert($data);
    }
}