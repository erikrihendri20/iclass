<?php

namespace App\Models;

use CodeIgniter\Model;

class SKD_Model extends Model
{
    protected $table      = 'skd';

    protected $allowedFields = ['event_id', 'nomor', 'jenis', 'a', 'b', 'c', 'd', 'e'];

    protected $returnType     = 'array';
}