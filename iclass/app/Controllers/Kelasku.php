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

    public function rekaman($id = NULL)
    {
        if ($id == NULL) $id = 1;

        $model = new Rekaman_Model();
		$data['rekamans'] = $model->getAll();
        $data['rekamanPilihan'] = $model->getById($id);

        $data['css'] = ['rekaman.css'];
		$data['active'] = 'rekaman';
		return view('kelasku/rekaman', $data);
    }
    
    public function latihan()
    {
        $data['css'] = ['kelasku.css'];
		$data['active'] = 'latihan';
        return view('kelasku/latihan',$data);
    }
}
