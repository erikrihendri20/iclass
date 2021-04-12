<?php

namespace App\Controllers;
use App\Models\Jadwal_Model;

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
        echo json_encode($result);
    }
}
