<?php

namespace App\Controllers;

use App\Models\Catatan_Model;
use App\Models\Quote_Model;
use App\Models\Materi_Model;
use App\Models\Users_Model;
use App\Models\Kelas_Model;
use App\Models\Paket_Model;
use App\Models\Jadwal_Model;
use App\Models\Kehadiran_Model;
use App\Models\Kuis_Model;
use App\Models\Latihan_Model;
use App\Models\Mindmap_model;
use App\Models\Rekaman_Model;
use App\Models\HasilTryout_Model;
use App\Models\Nilai_Model;
use App\Models\Tingkatan_Model;

class Peserta extends BaseController
{
	public function index()
	{
		$db = \Config\Database::connect();
		$model = new Jadwal_Model;

		$catatan = new Catatan_Model();
		$userModel = new Users_Model();
		$quote = new Quote_Model();
		$quotes = $quote->findAll();
		$uname = $userModel->where('username', session('username'))->first()['username'];

		$pertemuan=0;
		switch (session('kode-paket')) {
			case '1': $pertemuan=0; break;
			case '2': $pertemuan=8; break;
			case '3': $pertemuan=12; break;
			case '4': $pertemuan=27; break;
			case '5': $pertemuan=60; break;
		}

		$kuis = $db->table('events')->join('kuis', 'events.id=kuis.event_id', 'left')->like('kode_kelas', session('kode-kelas'))->where('start_event>=', date('Y-m-d'))->where('events.jenis', '3')->orderBy('start_event', 'asc')->get()->getResultArray();
		$kuis = !empty($kuis) ? $kuis[0] : null;
		
		$bolos = $db->table('kehadiran')
					->selectCount('id')->join('events', 'events.id = kehadiran.event')
					->where('kehadiran.username', session('username'))
					->where('kehadiran.hadir', '0')
					->where('events.start_event <', date('y-m-d'))->countAllResults();

		$sisa = $db->table('kehadiran')
					->selectCount('id')->join('events', 'events.id = kehadiran.event')
					->where('kehadiran.username', session('username'))
					->where('events.start_event <', date('y-m-d'))->countAllResults();
		$sisa += $db->table('kehadiran')
					->selectCount('id')->join('events', 'events.id = kehadiran.event')
					->where('kehadiran.username', session('username'))
					->where('kehadiran.hadir', '1')
					->where('events.start_event =', date('y-m-d'))->countAllResults();

		$data = [
			'css'		=> 'peserta/index.css',
			'title'		=> 'Beranda',
			'active'	=> 'beranda',
			'kuis'		=> $kuis,
			'bolos'		=> $bolos,
			'sisa'		=> $pertemuan - (int)$sisa,
			'pertemuan' => $pertemuan,
			'catatan'	=> $catatan->where('user', session('username'))->first(),
			'quote'		=> $quotes[array_rand($quotes)]['quote'],
			'others'	=> $db->query('SELECT * FROM  `users` WHERE (`last_login` >= DATE_ADD(CURDATE(), INTERVAL -3 DAY)) AND (`username` != "'.$uname.'") ORDER BY `last_login` DESC')->getResultArray(),
		];
		$data['pertKuis'] = !empty($kuis) ? $db->table('events')->like('kode_kelas', session('kode-kelas'))->where('jenis', '3')->countAllResults() : null;
		
		$user = $userModel->find(session('id'));
		$jadwalModel = new Jadwal_Model;
		$meetingDate = $jadwalModel->getJadwalMeeting($user['kode_kelas']);
		$jadwalTo = $jadwalModel->like('kode_kelas', $user['kode_kelas'])->where('start_event >=', date('y-m-d'))->where('jenis', '2')->orderBy('start_event', 'asc')->first();
		$data['meetingDate'] = (!empty($meetingDate)) ? $meetingDate[0] : null;
		$data['jadwalTo'] = (!empty($jadwalTo)) ? $jadwalTo : null;

		$nilai = $db->table('nilai')->where('username', session('username'))->like('bulan', date('Y-m'))->get()->getResultArray();
		$nilai = !empty($nilai) ? $nilai[0] : 0;
		$submateri = $db->table('submateri')->get()->getResultArray();

		$materi = [];
		$j=0; $k=0;
		for ($i=0; $i<sizeof($submateri); $i++) {
			if (!empty($nilai[preg_replace('/\s+/', '_', $submateri[$i]['submateri'])])) {
				$submateri[$i]['nilai'] = explode('-',$nilai[preg_replace('/\s+/', '_', $submateri[$i]['submateri'])]);
				if ($i==0) {
					$materi[$j]['materi']=$submateri[$i]['materi'];
					$materi[$j]['nilai']=(int)$submateri[$i]['nilai'][0]*(int)$submateri[$i]['nilai'][1];
					$materi[$j]['jumlah']=(int)$submateri[$i]['nilai'][1];
				} else if ($submateri[$i]['materi']==$submateri[$i-1]['materi']) {
					if (!empty($materi[$j]['nilai']) && $submateri[$i]['materi']==$materi[$j]['materi']) {
						$materi[$j]['nilai']+=(int)$submateri[$i]['nilai'][0]*(int)$submateri[$i]['nilai'][1];
						$materi[$j]['jumlah']+=(int)$submateri[$i]['nilai'][1];
					} else {
						$j++;
						$materi[$j]['materi']=$submateri[$i]['materi'];
						$materi[$j]['nilai']=(int)$submateri[$i]['nilai'][0]*(int)$submateri[$i]['nilai'][1];
						$materi[$j]['jumlah']=(int)$submateri[$i]['nilai'][1];
					}
				} else {
					$j++;
					$materi[$j]['materi']=$submateri[$i]['materi'];
					$materi[$j]['nilai']=(int)$submateri[$i]['nilai'][0]*(int)$submateri[$i]['nilai'][1];
					$materi[$j]['jumlah']=(int)$submateri[$i]['nilai'][1];
				}
			}
		}

		for ($i=0; $i<sizeof($materi); $i++) {
			$materi[$i]['nilai']=(int)($materi[$i]['nilai']/$materi[$i]['jumlah']);
		}
		usort($materi, function($a, $b) {
			return $a['nilai'] <=> $b['nilai'];
		});
		$data['nilai'] = [];
		if (!empty($materi)) {
			for ($i=0; $i<4; $i++) {
				if (!empty($materi[$i])) array_push($data['nilai'], $materi[$i]);
			}
		}
		
		if (!empty($data['nilai'])) {
			$data['rekomendasi'] = $db->table('submateri')->join('materi', 'materi.materi=submateri.materi')->where('submateri.materi', $data['nilai'][0]['materi'])->get()->getResultArray();
		} else {
			$data['rekomendasi'] = [];
		}
		
		return view('peserta/index', $data);
	}

	public function profil($user=null)
	{
		$user = $user==null ? session('username') : $user;
		$db = \Config\Database::connect();
		$model = new Users_Model;
		$paket_model = new Paket_Model();
		$user = $model->getByUserName($user);

		$paket = $paket_model->getById($user[0]['kode_paket']);

		if ($user[0]['kode_kelas'] == "0") {
			$kelas = "Belum ada kelas";
		} else {
			$class = new Kelas_Model;
			$userClass = $class->getByid($user[0]['kode_kelas']);
			$kelas = $userClass[0]['nama'];
		}

		$data['user'] = $user[0];
		$data['users'] = $db->table('users')->where('username !=', $user[0]['username'])->get()->getResultArray();
		$data['others']	= $db->query('SELECT * FROM  `users` WHERE (`last_login` >= DATE_ADD(CURDATE(), INTERVAL -3 DAY)) AND (`username` != "'.$user[0]['username'].'") ORDER BY `last_login` DESC')->getResultArray();
		$data['css'] = 'peserta/profil.css';
		$data['active'] = 'profil';
		$data['title'] = 'Profil';

		if (session('flash') == "sukses") {
			$flash = "<script>Swal.fire({icon: 'success', title: 'Edit Sukses', text: 'Penggantian informasi berhasil dilakukan'});</script>";
		} elseif (session('flash') == "gagal") {
			$flash = "<script>Swal.fire({icon: 'error', title: 'Edit Gagal', text: 'Password lama salah'})</script>";
		} else {
			$flash = "<script>Swal.fire({icon: 'error', title: 'Edit Gagal', text: 'Format pengisian data salah'})</script>";
		}

		return view('peserta/profil', $data);
	}

	public function edit()
	{
		$model = new Users_Model;
		$paket_model = new Paket_Model();
		$user = $model->getByUserName(session('username'));
		$data['title'] = 'Edit';
		if (session('flash') != null) {
			if (session('flash') == "sukses") {
				$flash = "<script>Swal.fire({icon: 'success', title: 'Edit Sukses', text: 'Penggantian informasi berhasil dilakukan'});</script>";
			} elseif (session('flash') == "gagal") {
				$flash = "<script>Swal.fire({icon: 'error', title: 'Edit Gagal', text: 'Password lama salah'})</script>";
			} else {
				$flash = "<script>Swal.fire({icon: 'error', title: 'Edit Gagal', text: 'Format pengisian data salah'})</script>";
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
		$data['user'] = $user[0];
		$data['title'] = 'Edit Profil/Akun';
		$data['css'] = 'peserta/profil.css';
		$data['active'] = 'edit';
		return view('peserta/edit', $data);
	}

	public function editProfPic()
	{
		$profpic = $this->request->getFile('profpic');
		$profpic->move('./img/profil/', session('username').'.jpg');

		session()->setFlashdata('flash', 'sukses');
		return redirect()->to(base_url('peserta/profil'));
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
				'telepon' => [
					'label'  => 'WhatsApp',
					'rules'  => 'required',
					'errors' => [
						'required' => 'Nomor whatsapp harus diisi'
					]
				],
			];

			if ($this->validate($rules)) {
				$model = new Users_Model();
				$user = [
					'nama' => $this->request->getPost('nama'),
					'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
					'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
					'domisili' => $this->request->getPost('domisili'),
					'sekolah' => $this->request->getPost('sekolah'),
					'kelas_jurusan' => $this->request->getPost('kelas_jurusan'),
					'deskripsi' => $this->request->getPost('deskripsi'),
					'instagram' => $this->request->getPost('instagram'),
					'telepon' => $this->request->getPost('telepon'),
					'tiktok' => $this->request->getPost('tiktok'),
					'updated_at' => date("Y-m-d H:i:s"),
				];
				
				$model->where('username', session('username'))->set($user)->update();
				session()->set('nama', $user['nama']);

				$profpic = $this->request->getFile('imgprofpic');
				if ($this->request->getPost('imgprofpic')) {
					$profpic->move('./img/profil/', session('username').'.jpg', true);
				}

				session()->setFlashdata('flash', 'sukses');
				return redirect()->to(base_url('peserta/profil'));
			} else {
				session()->setFlashdata('flash', 'gagal_isi');
				return redirect()->back()->withInput();
			}
		}

		return redirect()->to(base_url('peserta/edit'));
	}

	public function editAkun() {
		if (isset($_POST['submit'])) {
			$rules = [
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
				'password' => [
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
					'konf-pass-baru' => [
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

				$password = $this->request->getPost('password');
				$user = $model->getByUserName(session('username'));

				if (password_verify($password, $user[0]['password'])) {
					$data = [
						'email' => $this->request->getPost('email'),
						'username' => $this->request->getPost('username'),
						'updated_at' => date("Y-m-d H:i:s"),
					];

					if ($this->request->getPost('pass-baru') != null) {
						$data['password'] = password_hash($this->request->getPost('pass-baru'), PASSWORD_DEFAULT);
					}

					$model->where('username', session('username'))->set($data)->update();
					session()->set('username', $data['username']);
					session()->set('email', $data['email']);

					session()->setFlashdata('flash', 'sukses');
					return redirect()->to(base_url('peserta/profil'));
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
		$data['title'] = 'Try out';
		return view('peserta/tryout/after', $data);
	}

	public function cari($cari) {
		$data = [];
		$db = \Config\Database::connect();
		$user = $db->table('users')->where('username', session('username'))->get()->getResultArray()[0];

		if ($user['jurusan'] == 'intensif') {
			$data = [
				'materi' => $db->table('materi')->like('materi', $cari)->get()->getResultArray(),
				'mindmap' => $db->table('mindmap')->like('materi', $cari)->get()->getResultArray(),
				'rekaman' => $db->table('rekaman')->like('materi', $cari)->get()->getResultArray(),
			];
		} else {
			$data['materi'] = $db->table('materi')->like('materi', $cari)->like('kelas', $user['jurusan'])->get()->getResultArray();
			if (!empty($data['materi'])) {
				$data = [
					'materi' => $db->table('materi')->like('materi', $cari)->like('kelas', $user['jurusan'])->get()->getResultArray(),
					'mindmap' => $db->table('mindmap')->like('materi', $data['materi'][0]['materi'])->get()->getResultArray(),
					'rekaman' => $db->table('rekaman')->like('materi', $data['materi'][0]['materi'])->get()->getResultArray(),
				];
			} else {
				$data = [
					'materi' => [],
					'mindmap' => [],
					'rekaman' => [],
				];
			}
		}
		
		if (!empty($data['materi'])) {
			$data['tingkatan'] = $db->table('tingkatan')->where('username', session('username'))->where('materi', $data['materi'][0]['materi'])->get()->getResultArray();
			if (empty($data['tingkatan'])) {
				$model = new Tingkatan_Model();
				$tingkatan = [
					'username' => session('username'),
					'dasar' => '0',
					'sedang' => '0',
					'rumit' => '0',
					'materi' => $data['materi'][0]['materi']
				];
				$model->save($tingkatan);
				$db->table('tingkatan')->where('username', session('username'))->where('materi', $data['materi'][0]['materi'])->get()->getResultArray()[0];
			} else {
				$data['tingkatan'] = $data['tingkatan'][0];
			}
		}
		return json_encode($data);
	}

	public function simpanCatatan($catatan = '', $tanggal = '') {
		$data = [
			'catatan' => $catatan,
			'tanggal' => $tanggal
		];

		$model = new Catatan_Model();
		$balik = $model->where('user', session('username'))->set($data)->update();

		$data1['catatan'] = [
			'catatan' => $catatan,
			'tanggal' => $tanggal,
		];

		return $data1;
	}
	
	public function hadir($thatDay) {
		$today = date('y-m-d');
		$thatDay = date('y-m-d', $thatDay);

		$jadwal = new Jadwal_Model();
		$kehadiran = new Kehadiran_Model();
		$event = $jadwal->where('kode_kelas', session('kode-kelas'))->where('start_event', $today)->where('jenis', '1')->orderBy('id', 'desc')->first()['id'];
		
		if ($today == $thatDay) {
			if ($kehadiran->where('username', session('username'))->where('event', $event)->first()['hadir'] != '1') {
				$model = new Users_Model();
				$user = $model->where('username', session('username'))->first();
				$bolos = ((int)$user['bolos'] == 0) ? 1 : (int)$user['bolos'];
				$bolos-=1;
				$model->where('username', session('username'))->set('bolos', (string)$bolos)->update();

				$kehadiran->where('username', session('username'))->where('event', $event)->set('hadir', '1')->update();

				return (string)$bolos;
			} else {
				return 'X';
			}
		} else {
			return 'X';
		}
	}

	public function latihan($materi, $paket)
	{
		$db = \Config\Database::connect();
        $data = [
            'latihan' => $materi,
			'paket' => $paket,
            'title' => 'Latihan',
            'active' => 'latihan',
            'css' => 'kelasku/kuis.css',
        ];
        return view('peserta/latihan', $data);
	}

	public function tryout($id)
	{
		$db = \Config\Database::connect();

		$data = [
			'event' => $db->table('events')->where('id', $id)->get()->getResultArray()[0],
			'tryout' => $db->table('tryout')->where('event_id', $id)->orderBy('nomor', 'asc')->get()->getResultArray(),
			'title' => 'Try Out',
			'active' => 'tryout',
			'css' => 'kelasku/kuis.css'
		];

		if ($data['event']['end_event'] > date('Y-m-d G:i:s')) {
			if (!empty($db->table('hasil_tryout')->where('username', session('username'))->where('event_id', $id)->get()->getResultArray())) {
				session()->setFlashdata('salah', "<script>Swal.fire({icon: 'warning', title: '', text: 'Kamu sudah menyelesaikan try out ini'});</script>");
				return redirect()->to(base_url('peserta'));
			}
		}
		
		if (!empty($data['tryout'])) {
			return view('peserta/tryout', $data);
		} else {
			session()->setFlashdata('salah', "<script>Swal.fire({icon: 'error', title: '', text: 'Maaf, soal try out ini belum tersedia.'});</script>");
			return redirect()->to(base_url('peserta'));
		}

		return redirect()->to(base_url('peserta'));
	}

	public function tryout_hasil($id)
	{
		$db = \Config\Database::connect();
        $tryout = $db->table('hasil_tryout')->where('event_id', $id)->get()->getResultArray();
        if (!empty($tryout)) {
            $tryout = $tryout[0];
        } else {
            return redirect()->to(base_url().'/kelasku');
        }
        $data = [
            'kuis' => $db->table('hasil_tryout')->join('events', 'events.id=hasil_tryout.event_id')->where('hasil_tryout.event_id', $id)->where('username', session('username'))->get()->getResultArray()[0],
            'persentase' => $tryout['benar']/40*100,
            'title' => 'Hasil Kuis',
            'active' => 'kelasku',
            'css' => 'kelasku/kuis.css'
        ];

        return view('kelasku/kuis_hasil', $data);
	}

	public function jawabTryout($id, $jawaban, $selesai=null)
	{
		$model = new HasilTryout_Model();
		$db = \Config\Database::connect();

		$jawabanBenar = $db->table('tryout')->where('event_id', $id)->orderBy('nomor', 'asc')->get()->getResultArray();
		$jawabanKu = explode(',', $jawaban);

		$benar=0;
		$salah=0;
		$kosong=0;

		$subbab = [];
		for ($i=0; $i<sizeof($jawabanBenar); $i++) {
			if ($i>0) {
				if ($jawabanBenar[$i]['materi']==$jawabanBenar[$i-1]['materi']) {
					$subbab[$jawabanBenar[$i]['materi']][0]+=1;
				} else {
					$subbab[$jawabanBenar[$i]['materi']][0]=1;
					$subbab[$jawabanBenar[$i]['materi']][1]=0;
				}
			} else {
				$subbab[$jawabanBenar[$i]['materi']][0]=1;
				$subbab[$jawabanBenar[$i]['materi']][1]=0;
			}
		}

		for ($i=0; $i<sizeof($jawabanBenar); $i++) {
			if ($jawabanKu[$i]==$jawabanBenar[$i]['jawaban']) {
				$benar+=1;
				$subbab[$jawabanBenar[$i]['materi']][1]+=1;
			} else if ($jawabanKu[$i]!='') {
				$salah+=1;
			} else {
				$kosong+=1;
			}
		}
		
		$data = [
			'username' => session('username'),
			'event_id' => $id,
			'jawaban' => $jawaban,
			'benar' => $benar,
			'salah' => $salah,
			'kosong' => $kosong
		];

		if (!empty($model->where('event_id', $id)->where('username', session('username'))->first())) {
			$model->where('event_id', $id)->where('username', session('username'))->set($data)->update();
		} else {
			$model->save($data);
		}

		if ($selesai==null) {
			return (string)$benar;
		} else {
			$model = new Nilai_Model();
			$transkrip = $model->where('username', session('username'))->like('bulan', date('Y-m'))->first();
			if (empty($transkrip)) {
				$model->save(['username' => session('username'), 'bulan' => date('Y-m-d')]);
				$transkrip = $model->where('username', session('username'))->like('bulan', date('Y-m'))->first();
			}
			for ($i=0; $i<sizeof($jawabanBenar); $i++) {
				if ($i>0) {
					if ($jawabanBenar[$i]['materi']==$jawabanBenar[$i-1]['materi']) {
						continue;
					} else {
						$nilai_sebelumnya = (!empty($transkrip[preg_replace('/\s+/', '_', $jawabanBenar[$i]['materi'])])) ? explode('-', $transkrip[preg_replace('/\s+/', '_', $jawabanBenar[$i]['materi'])]) : [0, 0];
						$sebelumnya = (int)$nilai_sebelumnya[1]+1;
						$nilai_sebelumnya = ($nilai_sebelumnya[1]!=0) ? (int)$nilai_sebelumnya[0]*(int)$nilai_sebelumnya[1] : 0;

						$nilai = $subbab[$jawabanBenar[$i]['materi']][1]/$subbab[$jawabanBenar[$i]['materi']][0]*100;
						$nilai = ($sebelumnya!=1) ? (int)(((int)$nilai+(int)$nilai_sebelumnya)/$sebelumnya) : (int)$nilai;
						$model->where('username', session('username'))->like('bulan', date('Y-m'))->set(preg_replace('/\s+/', '_', $jawabanBenar[$i]['materi']), (string)$nilai."-".(string)$sebelumnya)->update();
					}
				} else {
					$nilai_sebelumnya = (!empty($transkrip[preg_replace('/\s+/', '_', $jawabanBenar[$i]['materi'])])) ? explode('-', $transkrip[preg_replace('/\s+/', '_', $jawabanBenar[$i]['materi'])]) : [0, 0];
					$sebelumnya = (int)$nilai_sebelumnya[1]+1;
					$nilai_sebelumnya = ($nilai_sebelumnya[1]!=0) ? (int)$nilai_sebelumnya[0]*(int)$nilai_sebelumnya[1] : 0;

					$nilai = $subbab[$jawabanBenar[$i]['materi']][1]/$subbab[$jawabanBenar[$i]['materi']][0]*100;
					$nilai = ($sebelumnya!=1) ? (int)(((int)$nilai+(int)$nilai_sebelumnya)/$sebelumnya) : (int)$nilai;
					$model->where('username', session('username'))->like('bulan', date('Y-m'))->set(preg_replace('/\s+/', '_', $jawabanBenar[$i]['materi']), (string)$nilai."-".(string)$sebelumnya)->update();
				}
			}
			return "selesai";
		}
	}

	public function nilai($bulan=null) 
	{
		if ($bulan!=null) {
			switch($bulan) {
				case 'January': $b='01'; break; case 'February': $b='02'; break; case 'March': $b='03'; break;
				case 'April': $b='04'; break; case 'Mey': $b='05'; break; case 'June': $b='06'; break;
				case 'July': $b='07'; break; case 'August': $b='08'; break; case 'September': $b='09'; break;
				case 'October': $b='10'; break; case 'November': $b='11'; break; case 'December': $b='12'; break;
			}
			$bulanIni=date('Y').'-'.$b;
		} else {
			$bulan=date('F');
			$bulanIni=date('Y-m');
		}
		$model = new Nilai_Model();
		$db = \Config\Database::connect();

		$user = $db->table('users')->where('username', session('username'))->get()->getResultArray()[0];
		$nilai = $model->Where('username', session('username'))->like('bulan', $bulanIni)->first();
		if (empty($nilai)) {
			$nilai = [
				'username' => session('username'),
				'bulan' => date('Y-m-d')
			];
			$model->save($nilai);
			$nilai = $model->Where('username', session('username'))->like('bulan', $bulanIni)->first();
		}

		$submateri = $db->table('submateri')->get()->getResultArray();

		$materi = [];
		$j=0; $k=0;
		for ($i=0; $i<sizeof($submateri); $i++) {
			if (!empty($nilai[preg_replace('/\s+/', '_', $submateri[$i]['submateri'])])) {
				$submateri[$i]['nilai'] = explode('-',$nilai[preg_replace('/\s+/', '_', $submateri[$i]['submateri'])]);
				if ($i==0) {
					$materi[$j]['materi']=$submateri[$i]['materi'];
					$materi[$j]['nilai']=(int)$submateri[$i]['nilai'][0]*(int)$submateri[$i]['nilai'][1];
					$materi[$j]['jumlah']=(int)$submateri[$i]['nilai'][1];
				} else if ($submateri[$i]['materi']==$submateri[$i-1]['materi']) {
					if (!empty($materi[$j]['nilai']) && $submateri[$i]['materi']==$materi[$j]['materi']) {
						$materi[$j]['nilai']+=(int)$submateri[$i]['nilai'][0]*(int)$submateri[$i]['nilai'][1];
						$materi[$j]['jumlah']+=(int)$submateri[$i]['nilai'][1];
					} else {
						$j++;
						$materi[$j]['materi']=$submateri[$i]['materi'];
						$materi[$j]['nilai']=(int)$submateri[$i]['nilai'][0]*(int)$submateri[$i]['nilai'][1];
						$materi[$j]['jumlah']=(int)$submateri[$i]['nilai'][1];
					}
				} else {
					$j++;
					$materi[$j]['materi']=$submateri[$i]['materi'];
					$materi[$j]['nilai']=(int)$submateri[$i]['nilai'][0]*(int)$submateri[$i]['nilai'][1];
					$materi[$j]['jumlah']=(int)$submateri[$i]['nilai'][1];
				}
			}
		}

		for ($i=0; $i<sizeof($materi); $i++) {
			$materi[$i]['nilai']=(int)($materi[$i]['nilai']/$materi[$i]['jumlah']);
		}
		usort($materi, function($a, $b) {
			return $a['nilai'] <=> $b['nilai'];
		});

		for ($i=0; $i<sizeof($submateri); $i++) {
			$kuis = $db->table('events')->join('kuis', 'kuis.event_id=events.id')->join('hasil_kuis', 'hasil_kuis.kuis=kuis.id')
					->where('hasil_kuis.username', session('username'))->where('kuis.materi', $submateri[$i]['submateri'])
					->like('kode_kelas', session('kode-kelas'))->like('start_event', $bulanIni)->get()->getResultArray();
			if (!empty($kuis)) {
				$kuis=$kuis[0];
				$j=0;
				$submateri[$i]['kuis']=0;
				foreach ($kuis as $k) {
					$j+=1;
					$submateri[$i]['kuis']+=(int)$kuis['benar']*10;
				}
				$submateri[$i]['kuis']/=$j;
			}
		}

		$event = $db->table('events')->join('hasil_tryout', 'hasil_tryout.event_id=events.id')
				->where('jenis', '2')->like('kode_kelas', session('kode-kelas'))->like('start_event', $bulanIni)
				->get()->getResultArray();
		if (!empty($event)) {
			$event = $event[0];
			$jawaban = $db->table('hasil_tryout')->where('username', session('username'))->where('event_id', $event['event_id'])->get()->getResultArray();
			if (!empty($jawaban)) {
				$jawaban = $jawaban[0];
				$jawaban['jawaban'] = explode(',', $jawaban['jawaban']);
			}

			$j=0;
			for ($i=0; $i<sizeof($submateri); $i++) {
				$tryout = $db->table('tryout')->where('event_id', $event['event_id'])->where('materi', $submateri[$i]['submateri'])->get()->getResultArray();
				if (!empty($tryout)) {
					$benar=0; $total=0;
					foreach ($tryout as $t) {
						if ($jawaban['jawaban'][$j]==$t['jawaban']) $benar+=1;
						$total+=1;
						$j+=1;
					}
					$submateri[$i]['tryout']=(string)(int)($benar/$total*100);
				}
			}
		}

		$lama = (int)date('m')-(int)date('m', strtotime($user['created_at']));
		$bulannya =[];
		for ($i=0; $i<=$lama; $i++) {
			$b=(int)strtotime($user['created_at'])+$i*2592000;
			$bulannya[$i]=date('F', (string)$b);
		}

		$data= [
			'materi' => $materi,
			'submateri' => $submateri,
			'bulan' => $bulannya,
			'bulanPilih' => $bulan,
			'css' => 'peserta/index.css',
			'title' => 'Transkrip Nilai',
			'active' => 'Kelasku'
		];
		return view('peserta/nilai', $data);
	}

	public function simpanBanner() {
		$banner = $this->request->getFile('imgbanner');
		$banner->move('./img/banner/', session('username').'.jpg');

		return "succes";
	}
}
