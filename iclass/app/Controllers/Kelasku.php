<?php

namespace App\Controllers;
use App\Models\Jadwal_Model;
use App\Models\Rekaman_Model;

class Kelasku extends BaseController
{
	public function jadwal()
	{
		$data['css'] = ['kelasku/jadwal.css'];
		$data['active'] = 'jadwal';
		return view('kelasku/jadwal', $data);
	}

    public function lihatJadwal()
    {
        $kode_kelas=session('kelas_id');
        $model = new Jadwal_Model();
        $result = $model->getJadwal($kode_kelas);
        return json_encode($result);
    }

    public function rekaman()
    {
        $model = new Rekaman_Model();
		$data['rekamans'] = $model->getAll();
        $data['id'] = 0;

        $data['javascript'] = ['rekaman.js'];
        $data['css'] = ['rekaman.css'];
		$data['active'] = 'rekaman';
		return view('kelasku/rekaman', $data);
    }

    public function pindahRekaman($id)
    {
        $model = new Rekaman_Model();
        $data['rekaman'] = $model->where('id', $id)->first();
        $data['thumbnail1'] = $model->where('id', $id+1)->first();
        $data['thumbnail2'] = $model->where('id', $id+2)->first();
        $data['thumbnail3'] = $model->where('id', $id+3)->first();

        echo json_encode($data);

    }
    
    public function latihan()
    {
        $data['css'] = ['kelasku.css'];
		$data['active'] = 'latihan';
        return view('kelasku/latihan',$data);
    }
}
