<?php

namespace App\Models;

use CodeIgniter\Model;

class Paket_model extends Model
{
    protected $table      = 'paket';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['nama'];

    
}
