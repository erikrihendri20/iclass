<?php

namespace App\Models;

use CodeIgniter\Model;

class Latihan_Model extends Model
{
    protected $table      = 'latihan';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';

    public function getMateri($id)
    {
        $this->builder()->groupBy($id)->orderBy('id', 'ASC');
        return $this->builder()->get()->getResultArray();
    }

    public function getByMateri($id)
    {
        $this->builder()->where('materi', $id);
        return $this->builder()->get()->getResultArray();
    }

    public function getById($id)
    {
        $this->builder()->where('id', $id);
        return $this->builder()->get()->getResultArray();
    }

    public function getSpecific($name, $kelas)
    {
        $this->builder()->where('materi', $name)->where('kelas_id', $kelas);
        return $this->builder()->get()->getResultArray();
    }
}
