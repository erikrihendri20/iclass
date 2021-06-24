<?php

namespace App\Models;

use CodeIgniter\Model;

class Rekaman_Model extends Model
{
    protected $table      = 'rekaman';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['kelas', 'pertemuan', 'materi', 'ext_tn', 'ext_ppt', 'admin'];

    public function getAll()
    {
        return $this->findAll();
    }

    public function getById($id)
    {
        return $this->where('id', $id)->first();
    }

    public function getByClass($kelas)
    {
        $this->builder()->where('kelas', $kelas);
        return $this->builder()->get()->getResultArray();
    }

    public function postRekaman($data)
    {
        $this->insert($data);
    }
}
