<?php

namespace App\Models;

use CodeIgniter\Model;

class Jadwal_Model extends Model
{
    protected $table      = 'events';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['title', 'start_event', 'url', 'kode_kelas', 'end_event', 'jenis', 'class_name', 'allDay'];

    public function getById($id)
    {
        $this->builder()->select('title')->where('id', $id);
        return $this->builder()->get()->getResultArray();
    }

    public function getJadwal($kode_kelas = null, $jenis = null)
    {
        $this->builder()->join('kelas', 'kelas.id=events.kode_kelas');
        $this->builder()->select('events.id as id , title , start_event as start , end_event as end , class_name as className , allDay');
        if ($kode_kelas == null) {
            return $this->builder()->get()->getResultArray();
        }
        if ($jenis != null) {
            $this->builder()->where('jenis', $jenis);
        } else {
            $this->builder()->select('link-meeting as url');
        }
        $this->builder()->where('kelas.id', $kode_kelas);
        return $this->builder()->get()->getResultArray();
    }

    public function getByJenis($id)
    {
        $this->builder()->where('jenis', $id);
        return $this->builder()->get()->getResultArray();
    }

    public function getKuis($title, $kelas)
    {
        $this->builder()->where('title', $title)->where('kode_kelas', $kelas);
        return $this->builder()->get()->getResultArray();
    }

    public function getClosestEvents($class, $event)
    {
        $query = "SELECT * FROM events WHERE `kode_kelas` = '$class' AND `jenis` = '$event' AND `end_event` > NOW() ORDER BY `start_event` LIMIT 2";
        return $this->db->query($query)->getResultArray();
    }

    public function getJadwalMeeting($kode_kelas = null)
    {
        if ($kode_kelas != null) {
            $this->builder()->join('kelas', 'kelas.id=kode_kelas');
            $this->builder()->where('kode_kelas', $kode_kelas);
            $this->builder()->where('jenis', 1);
            $this->builder()->where('start_event>=', $now = date("Y-m-d"));
            $this->builder()->orderBy('start_event');
            return $this->builder()->get()->getResultArray();
        }
    }
}
