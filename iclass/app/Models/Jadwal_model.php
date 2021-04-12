<?php

namespace App\Models;

use CodeIgniter\Model;

class Jadwal_Model extends Model
{
    protected $table      = 'events';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['title', 'start_event', 'url', 'kode_kelas' , 'end_event' ,'jenis', 'class_name' , 'allDay'];

    public function getJadwal($kode_kelas=null,$jenis=null)
    {
        $this->builder()->join('kelas','kelas.id=events.kode_kelas');
        $this->builder()->select('events.id as id , title , start_event as start , end_event as end , class_name as className , allDay');
        if($kode_kelas==null){
            return $this->builder()->get()->getResultArray();
        }
        if($jenis!=null){
            $this->builder()->where('jenis',$jenis);
        }else{
            $this->builder()->select('link-meeting as url');
        }
        $this->builder()->where('kelas.id',$kode_kelas);
        return $this->builder()->get()->getResultArray();
    }


}