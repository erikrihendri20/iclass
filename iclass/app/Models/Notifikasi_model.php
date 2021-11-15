<?php

namespace App\Models;

use CodeIgniter\Model;

class Notifikasi_Model extends Model
{
    protected $table      = 'notifikasi';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['username', 'pesan'];
}
