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
use App\Models\UbahPaket_Model;
use App\Models\HasilSKD_Model;

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
			case '5': $pertemuan=36; break;
			case '6': $pertemuan=0; break;
			case '7': $pertemuan=13; break;
		}

		$kuis = $db->table('events')->join('kuis', 'events.id=kuis.event_id', 'left')->like('kode_kelas', session('kode-kelas'))->where('start_event>=', date('Y-m-d'))->where('events.jenis', '3')->orderBy('start_event', 'asc')->get()->getResultArray();
		$kuis = !empty($kuis) ? $kuis[0] : null;
		
		$bolos = $db->table('kehadiran')
					->selectCount('id')->join('events', 'events.id = kehadiran.event')
					->where('kehadiran.username', session('username'))
					->where('kehadiran.hadir', '0')
					->where('events.start_event <', date('Y-m-d'))->countAllResults();

		$sisa = $db->table('kehadiran')
					->selectCount('id')->join('events', 'events.id = kehadiran.event')
					->where('kehadiran.username', session('username'))
					->where('events.start_event <', date('Y-m-d'))->countAllResults();
		$sisa += $db->table('kehadiran')
					->selectCount('id')->join('events', 'events.id = kehadiran.event')
					->where('kehadiran.username', session('username'))
					->where('kehadiran.hadir', '1')
					->where('events.start_event =', date('Y-m-d G:i:s'))->countAllResults();

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
		$meetingDate = $db->table('kelas')->join('events', 'kelas.id=events.kode_kelas')->where('start_event >=', date('Y-m-d'))->where('jenis', '1')->where('kode_kelas', $user['kode_kelas'])->orderBy('start_event', 'asc')->get()->getResultArray();
		$jadwalTo = $jadwalModel->like('kode_kelas', $user['kode_kelas'])->where('start_event >=', date('Y-m-d'))->where('jenis', '2')->orderBy('start_event', 'asc')->first();
		$data['meetingDate'] = (!empty($meetingDate)) ? $meetingDate[0] : null;
		$data['jadwalTo'] = (!empty($jadwalTo)) ? $jadwalTo : null;
		$data['panduan'] = (strtotime($user['last_login']) <= strtotime('2022-02-03')) ? true : false;

		$nilai = $db->table('nilai')->where('username', session('username'))->get()->getResultArray();
		$submateri = $db->table('submateri')->get()->getResultArray();

		$materi = [];
		foreach ($nilai as $n) {
		    $j=0; $k=0;
    		for ($i=0; $i<sizeof($submateri); $i++) {
    		    if (empty($materi[$j]['nilai'])) {
    		        $materi[$j]['nilai']=0;
    		    }
    			if (!empty($n[preg_replace('/\s+/', '_', $submateri[$i]['submateri'])])) {
    				$submateri[$i]['nilai'] = empty($n[preg_replace('/\s+/', '_', $submateri[$i]['submateri'])]) ? [0,0] : explode('-',$n[preg_replace('/\s+/', '_', $submateri[$i]['submateri'])]);
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
    				if ($materi[$j]['jumlah']==0) $materi[$j]['jumlah']=1;
    			}
    		}
		}

		for ($i=0; $i<sizeof($materi); $i++) {
			$materi[$i]['nilai'] = $materi[$i]['jumlah']==0 ? 0 : (int)($materi[$i]['nilai']/$materi[$i]['jumlah']);
		}
		usort($materi, function($a, $b) {
			return $a['nilai'] <=> $b['nilai'];
		});
		
		$data['nilai'] = [];
		if (!empty($materi)) {
		    $j=0;
			for ($i=0; $i<sizeof($materi); $i++) {
				if ($j==4) break;
				if (!empty($materi[$i]) && $materi[$i]['nilai']!=0) {
				    array_push($data['nilai'], $materi[$i]);
				    $j++;
				}
			}
		}
		
		if (session('kode-paket')!='7') {
			if (!empty($data['nilai'])) {
				$data['rekomendasi'] = $db->table('submateri')->join('materi', 'materi.materi=submateri.materi')->where('submateri.materi', $data['nilai'][0]['materi'])->get()->getResultArray();
			} else {
				$data['rekomendasi'] = $db->table('submateri')->join('materi', 'materi.materi=submateri.materi')->get()->getResultArray();
			}
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
		$data['others']	= $db->query('SELECT * FROM  `users` WHERE (`username` != "'.session('username').'") ORDER BY `last_login` DESC')->getResultArray();
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
		$profpic->move('./img/profil/', session('username').'.jpg', true);

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
				$rules['pass-baru'] = [
					'label'  => 'Password',
					'rules'  => 'required|min_length[8]',
					'errors' => [
						'required' => 'Password harus diisi',
						'min_length' => 'Password harus terdiri dari 8 karakter',
					],
				];
				$rules['konf-pass-baru'] = [
					'label'  => 'Konfirmasi password',
					'rules'  => 'matches[pass-baru]',
					'errors' => [
						'matches' => 'Konfirmasi password tidak cocok',
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

		if (($user['jurusan'] == 'intensif' || $user['jurusan'] == 'tryout') && $user['kode_paket'] != '7') {
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
				$data['tingkatan'] = $db->table('tingkatan')->where('username', session('username'))->where('materi', $data['materi'][0]['materi'])->get()->getResultArray()[0];
			} else {
				$data['tingkatan'] = $data['tingkatan'][0];
			}
		}
		return json_encode($data);
	}

	public function simpanCatatan($catatan = '', $tanggal = '') {
		$model = new Catatan_Model();
		if (!empty($model->where('user', session('username'))->first())) {
		    $data = [
    			'catatan' => $catatan,
    			'tanggal' => $tanggal
    		];
		    $model->where('user', session('username'))->set($data)->update();
		} else {
		    $data = [
		        'user' => session('username'),
    			'catatan' => $catatan,
    			'tanggal' => $tanggal
    		];
    		$model->save($data);
		}

		$data1['catatan'] = [
			'catatan' => $catatan,
			'tanggal' => $tanggal,
		];

		return $data1;
	}
	
	public function hadir($id=NULL) {
	    if ($id!=NULL) {
    	    $db = \Config\Database::connect();
    	    $pertemuan = $db->table('kelas')->join('events', 'events.kode_kelas=kelas.id')->where('events.id', $id)->get()->getResultArray()[0];
    	    
    		$today = date('Y-m-d');
    		$thatDay = date('Y-m-d', strtotime($pertemuan['start_event']));
    
    		$jadwal = new Jadwal_Model();
    		$kehadiran = new Kehadiran_Model();
    		$event = $jadwal->where('kode_kelas', session('kode-kelas'))->where('jenis', '1')->like('start_event', $today)->orderBy('id', 'desc')->first()['id'];
    		
    		if ($today == $thatDay) {
    			if ($kehadiran->where('username', session('username'))->where('event', $event)->first()['hadir'] != '1') {
    				$model = new Users_Model();
    				$user = $model->where('username', session('username'))->first();
    				$bolos = ((int)$user['bolos'] == 0) ? 1 : (int)$user['bolos'];
    				$bolos-=1;
    				$model->where('username', session('username'))->set('bolos', (string)$bolos)->update();
    
    				$kehadiran->where('username', session('username'))->where('event', $event)->set('hadir', '1')->update();
    			}
    			
    			return redirect()->to($pertemuan['link-meeting']);
    		} else {
    			return redirect()->to(base_url().'/peserta');
    		}
	    } else {
	        return redirect()->to(base_url().'/peserta');
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
		$model = new HasilTryout_Model();
		
		if (empty($model->where('event_id', $id)->where('username', session('username'))->first())) {
		    $hasil = [
		        'username' => session('username'),
		        'event_id' => $id,
		        'jawaban' => NULL,
		        'benar' => NULL,
		        'salah' => NULL,
		        'kosong' => NULL,
		        'mulai' => date('Y-m-d G:i:s'),
		        'selesai' => '0'
		    ];
			$model->save($hasil);
		}
		
		$now = $model->where('event_id', $id)->where('username', session('username'))->first()['mulai'];
        $now = date('Y-m-d G:i:s', strtotime("$now + 2 hours"));

		$data = [
			'event' => $db->table('events')->where('id', $id)->get()->getResultArray()[0],
			'tryout' => $db->table('tryout')->where('event_id', $id)->orderBy('nomor', 'asc')->get()->getResultArray(),
			'peserta' => $db->table('hasil_tryout')->where('event_id', $id)->where('username', session('username'))->get()->getResultArray()[0],
			'now' => $now,
			'title' => 'Try Out',
			'active' => 'tryout',
			'css' => 'kelasku/kuis.css'
		];
		$data['jawaban'] = !empty($data['peserta']['jawaban']) ? explode(',', $data['peserta']['jawaban']) : null;
		
		$data['terisi'] = 0;
		if (!empty($data['jawaban'])) {
			foreach ($data['jawaban'] as $jawaban) {
				if ($jawaban!="") {
					$data['terisi']++;
				}
			}
		}
		$data['kosong'] = 40-$data['terisi'];
		
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
        $tryout = $db->table('hasil_tryout')->where('username', session('username'))->where('event_id', $id)->get()->getResultArray();
        if (!empty($tryout) && !empty($tryout[0]['jawaban'])) {
            $tryout = $tryout[0];
        } else {
            session()->setFlashData('flash', "<script>Swal.fire({icon: 'error', title: '', text: 'Kamu tidak mengikuti try out ini'});</script>");
            return redirect()->to(base_url().'/kelasku');
        }
        $data = [
            'kuis' => $db->table('hasil_tryout')->join('events', 'events.id=hasil_tryout.event_id')->where('hasil_tryout.event_id', $id)->where('username', session('username'))->get()->getResultArray()[0],
            'persentase' => (int)$tryout['benar']/40*100,
            'title' => 'Hasil Try Out',
            'active' => 'kelasku',
            'css' => 'kelasku/kuis.css'
        ];

        return view('peserta/tryout_hasil', $data);
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
			'jawaban' => $jawaban,
			'benar' => $benar,
			'salah' => $salah,
			'kosong' => $kosong
		];

		$model->where('event_id', $id)->where('username', session('username'))->set($data)->update();

		if ($selesai==null) {
			return (string)$benar;
		} else {
		    $model->where('event_id', $id)->where('username', session('username'))->set(['selesai' => '1'])->update();
		    
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
						if (strpos($jawabanBenar[$i]['materi'], 'Latihan') === false) {
						    $model->where('username', session('username'))->like('bulan', date('Y-m'))->set(preg_replace('/\s+/', '_', $jawabanBenar[$i]['materi']), (string)$nilai."-".(string)$sebelumnya)->update();
						}
					}
				} else {
					$nilai_sebelumnya = (!empty($transkrip[preg_replace('/\s+/', '_', $jawabanBenar[$i]['materi'])])) ? explode('-', $transkrip[preg_replace('/\s+/', '_', $jawabanBenar[$i]['materi'])]) : [0, 0];
					$sebelumnya = (int)$nilai_sebelumnya[1]+1;
					$nilai_sebelumnya = ($nilai_sebelumnya[1]!=0) ? (int)$nilai_sebelumnya[0]*(int)$nilai_sebelumnya[1] : 0;

					$nilai = $subbab[$jawabanBenar[$i]['materi']][1]/$subbab[$jawabanBenar[$i]['materi']][0]*100;
					$nilai = ($sebelumnya!=1) ? (int)(((int)$nilai+(int)$nilai_sebelumnya)/$sebelumnya) : (int)$nilai;
				    if (strpos($jawabanBenar[$i]['materi'], 'Latihan') === false) {
					    $model->where('username', session('username'))->like('bulan', date('Y-m'))->set(preg_replace('/\s+/', '_', $jawabanBenar[$i]['materi']), (string)$nilai."-".(string)$sebelumnya)->update();
					}
				}
			}
			return "selesai";
		}
        return "coba2";
	}

	public function skd($id)
	{
		$db = \Config\Database::connect();
		$model = new HasilSKD_Model();
		
		if (empty($model->where('event_id', $id)->where('username', session('username'))->first())) {
		    $hasil = [
		        'username' => session('username'),
		        'event_id' => $id,
		        'jawaban_twk' => NULL,
				'hasil_twk' => 0,
				'jawaban_tiu' => NULL,
				'hasil_tiu' => 0,
				'jawaban_tkp' => NULL,
				'hasil_tkp' => 0,
		        'mulai' => date('Y-m-d G:i:s'),
		        'selesai' => '0'
		    ];
			$model->save($hasil);
		}
		
		$now = $model->where('event_id', $id)->where('username', session('username'))->first()['mulai'];
        $now = date('Y-m-d G:i:s', strtotime("$now + 100 minutes"));

		$data = [
			'event' => $db->table('events')->where('id', $id)->get()->getResultArray()[0],
			'twk' => $db->table('skd')->where('jenis', 'TWK')->where('event_id', $id)->orderBy('nomor', 'asc')->get()->getResultArray(),
			'tiu' => $db->table('skd')->where('jenis', 'TIU')->where('event_id', $id)->orderBy('nomor', 'asc')->get()->getResultArray(),
			'tkp' => $db->table('skd')->where('jenis', 'TKP')->where('event_id', $id)->orderBy('nomor', 'asc')->get()->getResultArray(),
			'peserta' => $db->table('hasil_skd')->where('event_id', $id)->where('username', session('username'))->get()->getResultArray()[0],
			'now' => $now,
			'title' => 'Try Out SKD',
			'active' => 'tryout',
			'css' => 'kelasku/kuis.css'
		];

		$data['terisi'] = 0;
		if (!empty($data['peserta']['jawaban_twk'])) {
			$data['jawaban_twk'] = explode(',', $data['peserta']['jawaban_twk']);
			foreach ($data['jawaban_twk'] as $jawaban) {
				if ($jawaban!='') $data['terisi']++;
			}
		} else {
			$data['jawaban_twk'] = null;
		}

		if (!empty($data['peserta']['jawaban_tiu'])) {
			$data['jawaban_tiu'] = explode(',', $data['peserta']['jawaban_tiu']);
			foreach ($data['jawaban_tiu'] as $jawaban) {
				if ($jawaban!='') $data['terisi']++;
			}
		} else {
			$data['jawaban_tiu'] = null;
		}

		if (!empty($data['peserta']['jawaban_tkp'])) {
			$data['jawaban_tkp'] = explode(',', $data['peserta']['jawaban_tkp']);
			foreach ($data['jawaban_tkp'] as $jawaban) {
				if ($jawaban!='') $data['terisi']++;
			}
		} else {
			$data['jawaban_tkp'] = null;
		}

		$data['kosong'] = sizeof($data['twk'])+sizeof($data['tiu'])+sizeof($data['tkp'])-$data['terisi'];
		
		if (!empty($data['event'])) {
			return view('peserta/skd', $data);
		} else {
			session()->setFlashdata('salah', "<script>Swal.fire({icon: 'error', title: '', text: 'Maaf, soal try out ini belum tersedia.'});</script>");
			return redirect()->to(base_url('peserta'));
		}

		return redirect()->to(base_url('peserta'));
	}

	public function jawabSKD($id, $jawabanTwk, $jawabanTiu, $jawabanTkp, $selesai=null)
	{
		$model = new HasilSKD_Model();
		$db = \Config\Database::connect();

		$jawabanTwkBenar = $db->table('skd')->where('event_id', $id)->where('jenis', 'TWK')->orderBy('nomor', 'asc')->get()->getResultArray();
		$jawabanTiuBenar = $db->table('skd')->where('event_id', $id)->where('jenis', 'TIU')->orderBy('nomor', 'asc')->get()->getResultArray();
		$jawabanTkpBenar = $db->table('skd')->where('event_id', $id)->where('jenis', 'TKP')->orderBy('nomor', 'asc')->get()->getResultArray();
		$jawabanTwkKu = explode(',', $jawabanTwk);
		$jawabanTiuKu = explode(',', $jawabanTiu);
		$jawabanTkpKu = explode(',', $jawabanTkp);
		
		$hasil_twk = 0;
		$hasil_tiu = 0;
		$hasil_tkp = 0;

		for ($i=0; $i<sizeof($jawabanTwkBenar); $i++) {
			$hasil_twk += !empty($jawabanTwkKu[$i]) ? (int)$jawabanTwkBenar[$i][strtolower($jawabanTwkKu[$i])] : 0;
		}

		for ($i=0; $i<sizeof($jawabanTiuBenar); $i++) {
			$hasil_tiu += !empty($jawabanTiuKu[$i]) ? (int)$jawabanTiuBenar[$i][strtolower($jawabanTiuKu[$i])] : 0;
		}

		for ($i=0; $i<sizeof($jawabanTkpBenar); $i++) {
			$hasil_tkp += !empty($jawabanTkpKu[$i]) ? (int)$jawabanTkpBenar[$i][strtolower($jawabanTkpKu[$i])] : 0;
		}
		
		$data = [
			'jawaban_twk' => $jawabanTwk,
			'jawaban_tiu' => $jawabanTiu,
			'jawaban_tkp' => $jawabanTkp,
			'hasil_twk' => $hasil_twk,
			'hasil_tiu' => $hasil_tiu,
			'hasil_tkp' => $hasil_tkp
		];

		$model->where('event_id', $id)->where('username', session('username'))->set($data)->update();

		if ($selesai==null) {
			return "belum";
		} else {
		    $model->where('event_id', $id)->where('username', session('username'))->set(['selesai' => '1'])->update();
			return "selesai";
		}
        return "coba2";
	}

	public function skd_hasil($id)
	{
		$db = \Config\Database::connect();
        $tryout = $db->table('hasil_skd')->where('username', session('username'))->where('event_id', $id)->get()->getResultArray();
        if (!empty($tryout) && !empty($tryout[0]['selesai'])) {
            $tryout = $tryout[0];
        } else {
            session()->setFlashData('flash', "<script>Swal.fire({icon: 'error', title: '', text: 'Kamu tidak mengikuti try out ini'});</script>");
            return redirect()->to(base_url().'/kelasku');
        }
        
        $twk = $db->table('skd')->where('jenis', 'TWK')->where('event_id', $id)->orderBy('nomor', 'asc')->get()->getResultArray();
		$tiu = $db->table('skd')->where('jenis', 'TIU')->where('event_id', $id)->orderBy('nomor', 'asc')->get()->getResultArray();
		$tkp = $db->table('skd')->where('jenis', 'TKP')->where('event_id', $id)->orderBy('nomor', 'asc')->get()->getResultArray();
		$total = (sizeof($twk)*5)+(sizeof($tiu)*5)+(sizeof($tkp)*15);
		if (empty($total)) $total=550;
        
        $data = [
            'kuis' => $db->table('hasil_skd')->join('events', 'events.id=hasil_skd.event_id')->where('hasil_skd.event_id', $id)->where('username', session('username'))->get()->getResultArray()[0],
            'persentase' => ((int)$tryout['hasil_twk']+(int)$tryout['hasil_tiu']+(int)$tryout['hasil_tkp'])/$total*100,
            'title' => 'Hasil Try Out SKD',
            'active' => 'kelasku',
            'css' => 'kelasku/kuis.css'
        ];

        return view('peserta/skd_hasil', $data);
	}

	public function nilai($bulan=null) 
	{
		if ($bulan!=null) {
			switch(substr($bulan,5)) {
				case 'January': $b='01'; break; case 'February': $b='02'; break; case 'March': $b='03'; break;
				case 'April': $b='04'; break; case 'Mey': $b='05'; break; case 'June': $b='06'; break;
				case 'July': $b='07'; break; case 'August': $b='08'; break; case 'September': $b='09'; break;
				case 'October': $b='10'; break; case 'November': $b='11'; break; case 'December': $b='12'; break;
			}
			$bulanIni=substr($bulan,0,4).'-'.$b;
		} else {
			$bulan=date('Y F');
			$bulanIni=date('Y-m');
		}
		$model = new Nilai_Model();
		$db = \Config\Database::connect();

		$user = $db->table('users')->where('username', session('username'))->get()->getResultArray()[0];
		$nilai = $model->where('username', session('username'))->like('bulan', $bulanIni)->first();
		if (empty($nilai)) {
			$nilai = [
				'username' => session('username'),
				'bulan' => date('Y-m-d')
			];
			$model->save($nilai);
			$nilai = $model->where('username', session('username'))->like('bulan', $bulanIni)->first();
		}

		$submateri = $db->table('submateri')->get()->getResultArray();

		$materi = [];
		$j=0; $k=0;
		for ($i=0; $i<sizeof($submateri); $i++) {
			if (!empty($nilai[preg_replace('/\s+/', '_', $submateri[$i]['submateri'])])) {
				$submateri[$i]['nilai'] = empty($nilai[preg_replace('/\s+/', '_', $submateri[$i]['submateri'])]) ? [0,0] : explode('-',$nilai[preg_replace('/\s+/', '_', $submateri[$i]['submateri'])]);
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
					if ($j!=0) $j++;
					$materi[$j]['materi']=$submateri[$i]['materi'];
					$materi[$j]['nilai']=(int)$submateri[$i]['nilai'][0]*(int)$submateri[$i]['nilai'][1];
					$materi[$j]['jumlah']=(int)$submateri[$i]['nilai'][1];
				}
				if ($materi[$j]['jumlah']==0) $materi[$j]['jumlah']=1;
			}
		}
		
		for ($i=0; $i<sizeof($materi); $i++) {
			$materi[$i]['nilai'] = $materi[$i]['jumlah']==0 ? 0 : (int)($materi[$i]['nilai']/$materi[$i]['jumlah']);
		}
		usort($materi, function($a, $b) {
			return $a['nilai'] <=> $b['nilai'];
		});

		for ($i=0; $i<sizeof($submateri); $i++) {
			$kuis = $db->table('events')->join('kuis', 'kuis.event_id=events.id')->join('hasil_kuis', 'hasil_kuis.kuis=kuis.id')
					->where('hasil_kuis.username', session('username'))->where('kuis.materi', $submateri[$i]['submateri'])
					->like('start_event', $bulanIni)->get()->getResultArray();
			if (!empty($kuis)) {
				$j=0;
				$submateri[$i]['kuis']=0;
				foreach ($kuis as $k) {
					$j+=1;
					$submateri[$i]['kuis']+=(int)$k['benar']*10;
				}
				$submateri[$i]['kuis']/=$j;
			}
		}

		$events = $db->table('events')->join('hasil_tryout', 'hasil_tryout.event_id=events.id')
				->where('events.jenis', '2')->where('hasil_tryout.username', session('username'))
				->like('events.start_event', $bulanIni)
				->get()->getResultArray();
		if (!empty($events)) {
		    foreach ($events as $event) {
    			$jawaban = $db->table('hasil_tryout')->where('username', session('username'))->where('event_id', $event['event_id'])->get()->getResultArray();
    			if (!empty($jawaban)) {
    				$jawaban = $jawaban[0];
					if (!empty($jawaban['jawaban'])) {
    					$jawaban['jawaban'] = explode(',', $jawaban['jawaban']);

						for ($i=0; $i<sizeof($submateri); $i++) {
							$tryout = $db->table('tryout')->where('event_id', $event['event_id'])->where('materi', $submateri[$i]['submateri'])->get()->getResultArray();
							if (!empty($tryout)) {
								$benar=0; $total=0;
								foreach ($tryout as $t) {
									if ($jawaban['jawaban'][(int)$t['nomor']-1]==$t['jawaban']) $benar+=1;
									$total+=1;
								}
								if (!array_key_exists('tryout', $submateri[$i])) {
									$submateri[$i]['tryout']=(int)($benar/$total*100);   
								} else {
									$submateri[$i]['tryout']+=(int)($benar/$total*100);
								}
							}
						}
					}
    			}
		    }
		}

        $d1 = strtotime(date('Y-m-d H:i:s'));
        $d2 = strtotime($user['created_at']);
		$lama = ceil(abs($d1-$d2)/60/60/24/30);
		$bulannya =[];
		for ($i=0; $i<=$lama; $i++) {
			$b=(int)strtotime($user['created_at'])+$i*2592000;
			$bulannya[$i]=date('Y F', (string)$b);
		}

		$data = [
			'materi' => $materi,
			'submateri' => $submateri,
			'bulan' => $bulannya,
			'bulanPilih' => $bulan,
			'css' => 'peserta/index.css',
			'title' => 'Transkrip Nilai',
			'active' => 'Kelasku',
			'others' => $db->query('SELECT * FROM  `users` WHERE (`last_login` >= DATE_ADD(CURDATE(), INTERVAL -3 DAY)) AND (`username` != "'.session('username').'") ORDER BY `last_login` DESC')->getResultArray(),
		];
		return view('peserta/nilai', $data);
	}
	
	public function simpanBanner() {
		$banner = $this->request->getFile('imgbanner');
		$banner->move('./img/banner/', session('username').'.jpg', true);

		return "succes";
	}

	public function simpanProfPic() {
		$banner = $this->request->getFile('imgprofpic');
		$banner->move('./img/profil/', session('username').'.jpg', true);

		return "succes";
	}
	
	public function ubahPaket() {
		if ((int)$this->request->getPost('kekuranganPembayaran') > 0) {
			if (!empty($_POST['pilihanPaketBaru'])) {
				if (!empty($this->request->getFile('buktiPembayaran'))) {
					$data = [
						'user' => session('username'),
						'paketSaatIni' => $this->request->getPost('paketSaatIni'),
						'pilihanPaketBaru' => $this->request->getPost('pilihanPaketBaru'),
						'kekuranganPembayaran' => $this->request->getPost('kekuranganPembayaran'),
						'buktiPembayaran' => $this->request->getFile('buktiPembayaran')->getName(),
					];

					$model = new UbahPaket_Model();
					if (empty($model->where('user', session('username'))->first())) {
						$model->save($data);
					} else {
						$model->where('user', session('username'))->set($data)->update();
					}					

					$bukti = $this->request->getFile('buktiPembayaran');
					$bukti->move('./img/ubahpaket/', $bukti->getName(), true);

					return json_encode(['status' => '1', 'pesan' => 'berhasil']);
				} else {
					return json_encode(['status' => '0', 'pesan' => 'Silahkan upload bukti pembayaran kekurangan terlebih dahulu']);
				}
			} else {
				return json_encode(['status' => '0', 'pesan' => 'Silahkan pilih pilihan paket yang baru terlebih dahulu']);
			}
		} else {
			return json_encode(['status' => '0', 'pesan' => 'Pilihan paket yang baru tidak diperbolehkan']);
		}
	}
}
