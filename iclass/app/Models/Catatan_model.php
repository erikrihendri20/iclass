<?php

namespace App\Models;

use CodeIgniter\Model;

class Catatan_Model extends Model
{
    protected $table      = 'catatan';

    protected $allowedFields = ['user', 'catatan' , 'tanggal'];

    protected $returnType     = 'array';
}