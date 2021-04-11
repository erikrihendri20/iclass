<?php

namespace App\Controllers;

use App\Models\Materi_Model;

class Peserta extends BaseController
{
	public function index()
	{
		$data['css'] = ['peserta/index.css'];
		$data['active'] = 'beranda';
		return view('peserta/index', $data);
	}
}
