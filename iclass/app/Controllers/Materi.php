<?php

namespace App\Controllers;

use App\Models\Materi_Model;

class Materi extends BaseController
{
	public function index()
	{
		$model = new Materi_Model();
		$data['materis'] = $model->getAll();
        $data['materiPilihan'] = $model->getById(1);
        $data['part'] = 1;

		$data['css'] = ['peserta/index.css'];
		$data['active'] = 'beranda';
		return view('peserta/materi', $data);
	}

    public function materi($id = NULL, $part = NULL)
    {
        if ($id == NULL) $id = 1;
        if ($part == NULL) $part = 1;

        $model = new Materi_Model();
		$data['materis'] = $model->getAll();
        $data['materiPilihan'] = $model->getById($id);
        $data['part'] = $part;

		$data['css'] = ['peserta/index.css'];
		$data['active'] = 'beranda';
		return view('peserta/materi', $data);
    }
}