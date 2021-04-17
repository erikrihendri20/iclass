<?php

namespace App\Models;

use CodeIgniter\Model;

class Users_Model extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['nama', 'kode_kelas' , 'jurusan' , 'kode_paket' , 'telepon' , 'email' , 'username' , 'password' , 'bukti-pembayaran' , 'status'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getByUserName($identitas)
    {
        $this->builder()->where('username',$identitas)->orWhere('email',$identitas);
        return $this->builder()->get()->getResultArray();
    }

    public function tampilkanPeserta($kode_paket)
    {
        $this->builder()->where('kode_paket',$kode_paket);
        return $this->builder()->get()->getResultArray();
    }

    public function jumlahPeserta($id)
    {
        $this->builder()->where('kode_kelas',$id);
        return $this->builder()->countAllResults();
    }
}