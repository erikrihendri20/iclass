<?php

namespace App\Models;

use CodeIgniter\Model;

class HasilSKD_Model extends Model
{
    protected $table      = 'hasil_skd';

    protected $allowedFields = ['username', 'event_id', 'hasil_twk', 'jawaban_twk', 'hasil_tiu', 'jawaban_tiu', 'hasil_tkp', 'jawaban_tkp', 'mulai', 'selesai'];

    protected $returnType     = 'array';
}