<?php

namespace App\Models;

use CodeIgniter\Model;

class Kuis_Model extends Model
{
    protected $table      = 'kuis';

    protected $allowedFields = ['kode_kuis', 'event_id', 'soal', 'jawaban', 'pembahasan', 'materi', 
        'poin_1', 'poin_2', 'poin_3', 'poin_4', 'poin_5',
        'poin_6', 'poin_7', 'poin_8', 'poin_9', 'poin_10'];

    protected $returnType     = 'array';

    public function getByCode($code)
    {
        $this->builder()->where('kode_kuis', $code);
        return $this->builder()->get()->getResultArray();
    }

    public function getById($id)
    {
        $this->builder()->where('id', $id);
        return $this->builder()->get()->getResultArray();
    }

    public function getByMateri($materi)
    {
        $this->builder()->where('materi', $materi);
        return $this->builder()->get()->getResultArray();
    }
}
