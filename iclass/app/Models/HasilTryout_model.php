<?php

namespace App\Models;

use CodeIgniter\Model;

class HasilTryout_Model extends Model
{
    protected $table      = 'hasil_tryout';

    protected $allowedFields = ['username', 'event_id', 'jawaban', 'benar', 'salah', 'kosong', 'mulai', 'selesai'];

    protected $returnType     = 'array';
}