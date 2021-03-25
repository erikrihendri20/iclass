<?php

namespace App\Controllers;

class Peserta extends BaseController
{
	public function index()
	{
		$data['css'] = ['peserta/index.css'];
		$data['active'] = 'beranda';
		return view('peserta/index', $data);
	}

	
}
