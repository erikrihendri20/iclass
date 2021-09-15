<?php

namespace App\Models;

use CodeIgniter\Model;

class Tryout_Model extends Model
{
    protected $table      = 'tryout';

    protected $allowedFields = ['event_id', 'soal', 'nomor', 'jawaban', 'materi'];

    protected $returnType     = 'array';
}