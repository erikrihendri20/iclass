<?php

namespace App\Models;

use CodeIgniter\Model;

class Tingkatan_Model extends Model
{
    protected $table      = 'tingkatan';

    protected $allowedFields = ['username', 'dasar' , 'sedang', 'rumit', 'materi'];

    protected $returnType     = 'array';
}