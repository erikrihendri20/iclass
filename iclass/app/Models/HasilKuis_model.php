<?php

namespace App\Models;

use CodeIgniter\Model;

class HasilKuis_Model extends Model
{
    protected $table      = 'hasil_kuis';

    protected $allowedFields = ['username', 'kuis', 'jawaban', 'benar', 'salah', 'kosong'];

    protected $returnType     = 'array';
}