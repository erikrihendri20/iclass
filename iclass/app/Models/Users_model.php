<?php

namespace App\Models;

use CodeIgniter\Model;

class Users_Model extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['nama', 'kode_kelas', 'jurusan', 'kode_paket', 'telepon', 'email', 'username', 'password', 'bukti_pembayaran', 'status', 'bolos', 'sisa', 'last_login', 'updated_at', 'deleted_at', 'tanggal_lahir', 'jenis_kelamin', 'domisili', 'sekolah', 'kelas_jurusan', 'deskripsi', 'instagram', 'tiktok'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getById($id)
    {
        $this->builder()->select('nama, kode_kelas')->where('id', $id);
        return $this->builder()->get()->getResultArray();
    }

    public function getByUserName($identitas)
    {
        $this->builder()->where('username', $identitas)->orWhere('email', $identitas);
        return $this->builder()->get()->getResultArray();
    }

    public function tampilkanPeserta($kode_paket)
    {
        $this->builder()->where('kode_paket', $kode_paket);
        return $this->builder()->get()->getResultArray();
    }

    public function jumlahPeserta($id)
    {
        $this->builder()->where('kode_kelas', $id);
        return $this->builder()->countAllResults();
    }

    public function jumlahPesertaByStatus($status=3)
    {
        if($status==0||$status==1||$status==2){
            $this->builder()->where('status', $status);
            return $this->builder()->countAllResults();
        }else{
            return $this->builder()->countAllResults();
        }
    }

    public function pesertaTidakAktif()
    {
        $date = date('Y-m-d H:i:s',strtotime(date('Y-m-d H:i:s').' -3 days'));
        $this->builder()->where('created_at<=',$date);
        $this->builder()->where('status<=',0);
        return $this->builder()->get()->getResultArray();
    }
}
