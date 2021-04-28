<?php

namespace App\Controllers;

use App\Models\Materi_Model;
use App\Models\Users_Model;
use App\Models\Kelas_Model;
use App\Models\Paket_Model;
use App\Models\Jadwal_Model;
use App\Models\Kuis_Model;

class Peserta extends BaseController
{
	public function index()
	{
		$model = new Jadwal_Model;
		$event = $model->getClosestEvents(session('kode-kelas'), '3');

		if (count($event) > 0) {
			$model = new Kuis_Model;
			$kuis = $model->getByMateri($event[0]['title']);

			$code = $kuis[0]['kode_kuis'];
			$end = '0';

			date_default_timezone_set("Asia/Bangkok");
			$now = date("Y-m-d H:i:s");

			if (count($event) > 1) {
				$end = strtotime($event[1]['start_event']) - strtotime($now);
			} else {
				$end = strtotime($event[0]['end_event']) - strtotime($now);
			}
		} else {
			$code = "";
			$end = '0';
		}
		$data = [
			'end'		=> $end,
			'code'		=> $code,
			'css'		=> 'peserta/index.css',
			'active'	=> 'beranda'
		];
		$userModel = new Users_Model();
		$user = $userModel->find(session('id'));
		$jadwalModel = new Jadwal_Model;
		$meetingDate = $jadwalModel->getJadwalMeeting($user['kode_kelas']);
		if ($meetingDate != null) {
			$data['meetingDate'] = $meetingDate[0];
		} else {
			$data['meetingDate'] = null;
		}
		return view('peserta/index', $data);
	}

	public function profil()
	{
		$model = new Users_Model;
		$paket_model = new Paket_Model();
		$user = $model->getByUserName(session('username'));

		$paket = $paket_model->getById($user[0]['kode_paket']);

		if ($user[0]['kode_kelas'] == "0") {
			$kelas = "Belum ada kelas";
		} else {
			$class = new Kelas_Model;
			$userClass = $class->getByid($user[0]['kode_kelas']);
			$kelas = $userClass[0]['nama'];
		}

		$data = [
			'nama' => $user[0]['nama'],
			'kelas' => $kelas,
			'jurusan' => $user[0]['jurusan'],
			'paket' => $paket[0]['nama'],
			'username' => $user[0]['username'],
			'email' => $user[0]['email'],
			'no_wa' => $user[0]['telepon'],
			'password' => $user[0]['password'],
		];
		$data['css'] = 'peserta/profil.css';
		$data['active'] = 'profil';
		return view('peserta/profil', $data);
	}

	public function edit()
	{
		$model = new Users_Model;
		$paket_model = new Paket_Model();
		$user = $model->getByUserName(session('username'));

		if (session('flash') != null) {
			if (session('flash') == "sukses") {
				$flash = '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Edit sukses!</strong> penggantian informasi telah berhasil dilakukan.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>';
			} elseif (session('flash') == "gagal") {
				$flash = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Edit gagal!</strong> password lama salah.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>';
			} else {
				$flash = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Edit gagal!</strong> format data pengisian salah.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>';
			}
			session()->setFlashdata('flash', $flash);
		}

		$paket = $paket_model->getById($user[0]['kode_paket']);

		if ($user[0]['kode_kelas'] == "0") {
			$kelas = "Belum ada kelas";
		} else {
			$class = new Kelas_Model;
			$userClass = $class->getByid($user[0]['kode_kelas']);
			$kelas = $userClass[0]['nama'];
		}
		$data = [
			'nama' => $user[0]['nama'],
			'kelas' => $kelas,
			'jurusan' => $user[0]['jurusan'],
			'paket' => $paket[0]['nama'],
			'username' => $user[0]['username'],
			'email' => $user[0]['email'],
			'no_wa' => $user[0]['telepon'],
			'password' => $user[0]['password'],
		];

		$data['css'] = 'peserta/edit.css';
		$data['active'] = 'edit';
		return view('peserta/edit', $data);
	}

	public function editProfil()
	{
		if (isset($_POST['submit'])) {
			$rules = [
				'nama' => [
					'label'  => 'Nama',
					'rules'  => 'required',
					'errors' => [
						'required' => 'Nama harus diisi'
					]
				],
				'jurusan' => [
					'label'  => 'Jurusan',
					'rules'  => 'required',
					'errors' => [
						'required' => 'Jurusan harus diisi'
					]
				],
				// 'pilih-paket' => [
				// 	'label'  => 'Pilihan paket',
				// 	'rules'  => 'required',
				// 	'errors' => [
				// 		'required' => 'Pilihan Paket harus diisi'
				// 	]
				// ],
				'telepon' => [
					'label'  => 'Nomor Whatsapp',
					'rules'  => 'required|numeric',
					'errors' => [
						'required' => 'Nomor whatsapp harus diisi',
						'numeric' => 'Masukan whatsapp dengan benar',
					]
				],
				'email' => [
					'label'  => 'Email',
					'rules'  => 'required|valid_email',
					'errors' => [
						'required' => 'Email harus diisi',
						'valid_email' => 'Isikan email dengan format yang sesuai',
						'is_unique' => 'Email sudah pernah digunakan',
					]
				],
				'username' => [
					'label'  => 'Username',
					'rules'  => 'required|min_length[5]',
					'errors' => [
						'required' => 'Username harus diisi',
						'min_length' => 'Username harus terdiri dari 5 karakter',
						'is_unique' => 'Username sudah pernah digunakan',
					]
				],
				'pass-lama' => [
					'label'  => 'Password',
					'rules'  => 'required|min_length[8]',
					'errors' => [
						'required' => 'Password harus diisi',
						'min_length' => 'Password salah!',
					]
				],
			];
			if ($this->request->getPost('pass-baru') != null) {
				$rules = [
					'pass-baru' => [
						'label'  => 'Password',
						'rules'  => 'required|min_length[8]',
						'errors' => [
							'required' => 'Password harus diisi',
							'min_length' => 'Password harus terdiri dari 8 karakter',
						]
					],
					'pass-konfirmasi' => [
						'label'  => 'Konfirmasi password',
						'rules'  => 'matches[pass-baru]',
						'errors' => [
							'matches' => 'Konfirmasi password tidak cocok',
						]
					],
				];
			}
			if ($this->validate($rules)) {
				$model = new Users_Model();

				$username = $this->request->getPost('username');
				$password = $this->request->getPost('pass-lama');
				$user = $model->getByUserName($username);

				if (password_verify($password, $user[0]['password'])) {
					date_default_timezone_set("Asia/Bangkok");
					$now = date("Y-m-d H:i:s");

					$user = [
						'nama' => $this->request->getPost('nama'),
						'jurusan' => $this->request->getPost('jurusan'),
						// 'pilih-paket' => $this->request->getPost('pilih-paket'),
						'telepon' => $this->request->getPost('telepon'),
						'email' => $this->request->getPost('email'),
						'username' => $this->request->getPost('username'),
						'updated_at' => $now,
					];
					if ($this->request->getPost('pass-baru') != null) {
						$user['password'] = password_hash($this->request->getPost('pass-baru'), PASSWORD_DEFAULT);
					} else {
						$user['password'] = password_hash($password, PASSWORD_DEFAULT);
					}

					$model->db->table('users')->set($user)->where('username', $username)->update();

					session()->setFlashdata('flash', 'sukses');
					return redirect()->to(base_url('peserta/edit'));
				} else {
					session()->setFlashdata('flash', 'gagal');
					return redirect()->to(base_url('peserta/edit'));
				}
			} else {
				session()->setFlashdata('flash', 'gagal_isi');
				return redirect()->back()->withInput();
			}
		}

		return redirect()->to(base_url('peserta/edit'));
	}

	public function after_tryout()
	{
		$data['css'] = 'peserta/index.css';
		$data['active'] = 'beranda';
		return view('peserta/tryout/after', $data);
	}
}
