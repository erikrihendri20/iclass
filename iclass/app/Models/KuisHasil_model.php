<?php

namespace App\Models;

use CodeIgniter\Model;

class KuisHasil_Model extends Model
{
    protected $table      = 'kuis_hasil';

    protected $returnType     = 'array';

    public function getHasil($event, $id)
    {
        $this->builder()->where('events_id', $event)->where('users_id', $id);
        return $this->builder()->get()->getResultArray();
    }
}
