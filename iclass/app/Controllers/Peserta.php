<?php

namespace App\Controllers;

use App\Models\Materi_Model;
use App\Models\Users_Model;

class Peserta extends BaseController
{
	public function index()
	{
		$data['css'] = ['peserta/index.css'];
		$data['active'] = 'beranda';
		return view('peserta/index', $data);
	}

	public function profil()
	{
		$model = new Users_Model;
		$user = $model->getByUserName(session('username'));

		if ($user[0]['pilih-paket'] == '3') {
			$paket = 'Premium';
		} else {
			$paket = 'Reguler';
		};

		$data = [
			'nama' => $user[0]['nama'],
			'kelas' => $user[0]['kelas_id'],
			'jurusan' => $user[0]['jurusan'],
			'paket' => $paket,
			'username' => $user[0]['username'],
			'email' => $user[0]['email'],
			'no_wa' => $user[0]['telepon'],
			'password' => $user[0]['password'],
		];
		$data['css'] = ['peserta/profil.css'];
		$data['active'] = 'profil';
		return view('peserta/profil', $data);
	}

	public function edit()
	{
		$model = new Users_Model;
		$user = $model->getByUserName(session('username'));

		if ($user[0]['pilih-paket'] == '3') {
			$paket = 'Premium';
		} else {
			$paket = 'Reguler';
		};

		$data = [
			'nama' => $user[0]['nama'],
			'kelas' => $user[0]['kelas_id'],
			'jurusan' => $user[0]['jurusan'],
			'paket' => $paket,
			'username' => $user[0]['username'],
			'email' => $user[0]['email'],
			'no_wa' => $user[0]['telepon'],
			'password' => $user[0]['password'],
		];

		$data['css'] = ['peserta/edit.css'];
		$data['active'] = 'edit';
		return view('peserta/edit', $data);
	}
}
