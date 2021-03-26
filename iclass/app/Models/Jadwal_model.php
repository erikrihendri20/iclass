<?php

namespace App\Models;

use CodeIgniter\Model;

class Jadwal_Model extends Model
{
    protected $table      = 'events';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['title', 'start_event' , 'end_event'];
}