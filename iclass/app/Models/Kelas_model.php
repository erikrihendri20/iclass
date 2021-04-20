<?php

namespace App\Models;

use CodeIgniter\Model;

class Kelas_Model extends Model
{
    protected $table      = 'kelas';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['id','nama', 'link-meeting' , 'kode_paket'];

    public function getById($id)
    {
        $this->builder()->where('id', $id);
        return $this->builder()->get()->getResultArray();
    }

    public function tampilkanKelas()
    {
        $this->builder()->join('paket','kode_paket=paket.id');
        $this->builder()->select('kelas.id , kelas.nama , paket.id as kode_paket , paket.nama as nama-paket, link-meeting');
        return $this->builder()->get()->getResultArray();
    }
}
