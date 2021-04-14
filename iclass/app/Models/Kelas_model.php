<?php

namespace App\Models;

use CodeIgniter\Model;

class Kelas_Model extends Model
{
    protected $table      = 'kelas';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['nama', 'link-meeting'];

    public function getById($id)
    {
        $this->builder()->where('id', $id);
        return $this->builder()->get()->getResultArray();
    }
}
