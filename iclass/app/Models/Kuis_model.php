<?php

namespace App\Models;

use CodeIgniter\Model;

class Kuis_Model extends Model
{
    protected $table      = 'kuis';

    protected $returnType     = 'array';



    public function getByCode($code)
    {
        $this->builder()->where('kode_kuis', $code);
        return $this->builder()->get()->getResultArray();
    }

    public function getSoal($code, $no)
    {
        $this->builder()->where('kode_kuis', $code)->where('no_kuis', $no);
        return $this->builder()->get()->getResultArray();
    }
}
