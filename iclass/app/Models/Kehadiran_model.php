<?php

namespace App\Models;

use CodeIgniter\Model;

class Kehadiran_Model extends Model
{
    protected $table      = 'kehadiran';

    protected $allowedFields = ['username', 'kelas' , 'event', 'hadir', 'pertemuan'];

    protected $returnType     = 'array';
}