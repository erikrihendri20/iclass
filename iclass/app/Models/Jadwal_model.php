<?php

namespace App\Models;

use CodeIgniter\Model;

class Jadwal_Model extends Model
{
    protected $table      = 'events';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['title', 'start_event', 'url', 'kode_kelas' , 'end_event'];

    public function getJadwal($kode_kelas)
    {
        $this->builder()->join('kelas','kelas.id=events.kode_kelas');
        $this->builder()->where('kelas.id',$kode_kelas);
        return $this->builder()->get()->getResultArray();
    }
}