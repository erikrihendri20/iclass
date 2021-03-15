<?php

namespace App\Models;

use CodeIgniter\Model;

class Users_Model extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['name', 'kelas' , 'jurusan' , 'pilih-paket' , 'telepon' , 'email' , 'username' , 'password' , 'bukti-pembayaran' , 'status'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}