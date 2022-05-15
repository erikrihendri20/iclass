<?php

namespace App\Controllers;

use App\Models\Catatan_Model;
use App\Models\Quote_Model;
use App\Models\HasilKuis_Model;
use App\Models\Nilai_Model;
use App\Models\Jadwal_Model;
use App\Models\Rekaman_Model;
use App\Models\Kelas_Model;
use App\Models\Kuis_Model;
use App\Models\KuisHasil_Model;
use App\Models\KuisSoalJawaban_Model;
use App\Models\Users_Model;
use App\Models\Latihan_Model;
use App\Models\Mindmap_Model;
use App\Models\Materi_Model;

class Kelasku extends BaseController
{
    public function index()
    {
        $catatan = new Catatan_Model();
		$jadwalModel = new Jadwal_Model;
		$userModel = new Users_Model();
		$db = \Config\Database::connect();
		$quote = new Quote_Model();
		$quotes = $quote->findAll();
		$user = $userModel->where('username', session('username'))->first();

        $pertemuan=0;
		switch (session('kode-paket')) {
			case '1': $pertemuan=0; break;
			case '2': $pertemuan=8; break;
			case '3': $pertemuan=12; break;
			case '4': $pertemuan=27; break;
			case '5': $pertemuan=36; break;
            case '6': $pertemuan=0; break;
		}

        $bolos = $db->table('kehadiran')
					->selectCount('id')->join('events', 'events.id = kehadiran.event')
					->where('kehadiran.username', session('username'))
					->where('kehadiran.hadir', '0')
                    ->where('events.jenis', '1')
					->where('events.start_event <', date('y-m-d'))->countAllResults();

		$sisa = $db->table('kehadiran')
					->selectCount('id')->join('events', 'events.id = kehadiran.event')
					->where('kehadiran.username', session('username'))
                    ->where('events.jenis', '1')
					->where('events.start_event <', date('y-m-d'))->countAllResults();
		$sisa += $db->table('kehadiran')
					->selectCount('id')->join('events', 'events.id = kehadiran.event')
					->where('kehadiran.username', session('username'))
					->where('kehadiran.hadir', '1')
                    ->where('events.jenis', '1')
					->where('events.start_event =', date('y-m-d'))->countAllResults();

        $data = [
            'css'		=> 'peserta/index.css',
            'active'	=> 'kelasku',
            'bolos'		=> $bolos,
            'sisa'		=> $pertemuan - (int)$sisa,
            'pertemuan' => $pertemuan,
            'kelasku'     => $user['jurusan'],
            'kelasBolos'=> $db->table('kehadiran')->select('*')->join('events', 'events.id = kehadiran.event')->where('kehadiran.username', session('username'))->where('kehadiran.hadir', '0')->where('events.start_event <', date('y-m-d'))->where('events.jenis', '1')->orderBy('kehadiran.pertemuan', 'asc')->get()->getResultArray(),
            'kelasDatang' => $db->table('kehadiran')->select('*')->join('events', 'events.id = kehadiran.event')->where('kehadiran.username', session('username'))->where('events.start_event >=', date('y-m-d'))->where('events.jenis', '1')->orderBy('kehadiran.pertemuan', 'asc')->get()->getResultArray(),
            'zoomMeeting' => $db->table('events')->join('kehadiran', 'kehadiran.event=events.id')->where('kehadiran.username', session('username'))->where('kode_kelas', $user['kode_kelas'])->where('jenis', '1')->orderBy('events.start_event', 'desc')->get()->getResultArray(),
            'jadwalTryout' => $db->table('events')->like('kode_kelas', session('kode-kelas'))->where('jenis', '2')->orderBy('start_event', 'desc')->get()->getResultArray(),
            'kuisHarian' => $jadwalModel->like('kode_kelas', $user['kode_kelas'])->where('jenis', '3')->orderBy('start_event', 'desc')->findAll(),
            'catatan'	=> $catatan->where('user', session('username'))->first(),
            'quote'		=> $quotes[array_rand($quotes)]['quote'],
            'materis'   => ($user['jurusan']=='intensif' || $user['jurusan']=='tryout') ? $db->table('mindmap')->join('materi', 'materi.materi=mindmap.materi', 'right')->get()->getResultArray() : $db->table('mindmap')->join('materi', 'materi.materi=mindmap.materi', 'right')->like('kelas', $user['jurusan'])->get()->getResultArray(),
        ];
        
        $materi = $db->table('materi')->get()->getResultArray();
        foreach ($materi as $m) {
            $j=1;
            for ($i=sizeof($data['kuisHarian'])-1; $i>=0; $i--) {
                if ($data['kuisHarian'][$i]['title']==$m['materi']) {
                    $data['kuisHarian'][$i]['title']=$data['kuisHarian'][$i]['title']." ".$j;
                    $j++;
                }  
            }
        }
        
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
    					$materi[$j]['nilai']=!empty($submateri[$i]['nilai'][1]) ? (int)$submateri[$i]['nilai'][0]*(int)$submateri[$i]['nilai'][1] : 0;
    					$materi[$j]['jumlah']=!empty($submateri[$i]['nilai'][1]) ? (int)$submateri[$i]['nilai'][1] : 0;
    				} else if ($submateri[$i]['materi']==$submateri[$i-1]['materi']) {
    					if (!empty($materi[$j]['nilai']) && $submateri[$i]['materi']==$materi[$j]['materi']) {
    						$materi[$j]['nilai']+=!empty($submateri[$i]['nilai'][1]) ? (int)$submateri[$i]['nilai'][0]*(int)$submateri[$i]['nilai'][1] : 0;
    						$materi[$j]['jumlah']+=!empty($submateri[$i]['nilai'][1]) ? (int)$submateri[$i]['nilai'][1] : 0;
    					} else {
    						$j++;
    						$materi[$j]['materi']=$submateri[$i]['materi'];
    						$materi[$j]['nilai']=!empty($submateri[$i]['nilai'][1]) ? (int)$submateri[$i]['nilai'][0]*(int)$submateri[$i]['nilai'][1] : 0;
    						$materi[$j]['jumlah']=!empty($submateri[$i]['nilai'][1]) ? (int)$submateri[$i]['nilai'][1] : 0;
    					}
    				} else {
    					$j++;
    					$materi[$j]['materi']=$submateri[$i]['materi'];
    					$materi[$j]['nilai']=!empty($submateri[$i]['nilai'][1]) ? (int)$submateri[$i]['nilai'][0]*(int)$submateri[$i]['nilai'][1] : 0;
    					$materi[$j]['jumlah']=!empty($submateri[$i]['nilai'][1]) ? (int)$submateri[$i]['nilai'][1] : 0;
    				}
    				if ($materi[$j]['jumlah']==0) $materi[$j]['jumlah']=1;
    			}
    		}
		}

		for ($i=0; $i<sizeof($materi); $i++) {
			$materi[$i]['nilai'] = empty($materi[$i]['jumlah']) ? 0 : (int)($materi[$i]['nilai']/$materi[$i]['jumlah']);
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
        
		$data['title'] = 'Kelasku';
		return view('kelasku/index', $data);
    }
    
    public function jadwal()
    {
        $data = [
            'css' => 'kelasku/jadwal.css',
            'active' => 'kelasku',
            'page'  => 'jadwal'
        ];
        $data['title'] = 'Jadwal';
        return view('kelasku/jadwal', $data);
    }

    public function lihatJadwal()
    {
        $user_model = new Users_Model();
        $kode_kelas = $user_model->find(session('id'))['kode_kelas'];
        $model = new Jadwal_Model();
        $result = $model->getJadwal($kode_kelas);
        return json_encode($result);
    }

    public function rekaman($id = NULL, $part = NULL)
    {
        $data['id'] = 0;
        $model1 = new Users_Model;
        $user = $model1->getByUserName(session('username'));

        if ($user[0]['kode_kelas'] == "0") {
            session()->setFlashdata('info', "<script>Swal.fire({text: 'Maaf, kamu belum tergabung ke dalam kelas manapun.', title: '', icon: 'error')</script>");
            return redirect()->to(base_url() . '/peserta');
        } else {
            $class = new Kelas_Model();
            $userClass = $class->getByid($user[0]['kode_kelas']);
            $data['kelas'] = $userClass[0]['nama'];
        }

        $model = new Rekaman_Model();
        $model->builder()->like('kelas', $data['kelas']);
        $data['rekamans'] = $model->builder()->get()->getResultArray();

        if ($id == NULL) $id = $data['rekamans'][0]['id'];
        $data['rekamanPilihan'] = $model->where('id', $id)->first();

        if (empty($data['rekamans'])) {
            session()->setFlashdata('info', "<script>Swal.fire({text: 'Maaf, kelas mu belum punya rekaman pertemuan.', title: '', icon: 'error'})</script>");
            return redirect()->to(base_url() . '/peserta');
        } else {
            $data['javascript'] = ['rekaman.js'];
            $data['css'] = 'rekaman.css';
            $data['active'] = 'kelasku';
            $data['title'] = 'Rekaman';
            $data['part'] = ($part != NULL) ? $part : '1';

            return view('kelasku/rekaman', $data);   
        }
    }

    public function downloadPpt($kelas, $pertemuan, $materi, $ext_ppt)
    {
        header('Content-Description: File Transfer');
        header('Content-Type: application/force-download');
        header("Content-Disposition: attachment; filename=\"" . base_url() . "/ppt/Rekaman Kelas/{$kelas}/Pertemuan {$pertemuan} - {$materi}.{$ext_ppt}\";");
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        ob_clean();
        flush();
        exit;
    }

    public function pindahRekaman($kelas, $id)
    {
        $k = new Kelas_model();
        $kelas = $k->where('id', $kelas)->first();
        $kelas = $kelas['nama'];
        $model = new Rekaman_Model();
        $model->builder()->like('kelas', $kelas);
        $data['rekamanes'] = $model->builder()->get()->getResultArray();
        $data['rekaman'] = (!empty($data['rekamanes'][$id])) ? $data['rekamanes'][$id] : null;
        $data['thumbnail1'] = (!empty($data['rekamanes'][$id+1])) ? $data['rekamanes'][$id+1] : null;
        $data['thumbnail2'] = (!empty($data['rekamanes'][$id+2])) ? $data['rekamanes'][$id+2] : null;
        $data['thumbnail3'] = (!empty($data['rekamanes'][$id+3])) ? $data['rekamanes'][$id+3] : null;

        echo json_encode($data);
    }
    
    public function kuis($id, $pertemuan)
    {
        if ($id=='none') {
            session()->setFlashdata('salah', "<script>Swal.fire({icon: 'error', title: '', text: 'Maaf, soal kuis ini belum tersedia.'});</script>");
            return redirect()->to(base_url() . '/peserta');
            
        }

        $db = \Config\Database::connect();
        $kuis = $db->table('events')->join('kuis', 'kuis.event_id=events.id')->where('events.id', $id)->get()->getResultArray();
        if (!empty($kuis)) {
            $kuis=$kuis[0];
        } else {
            $flash = "<script>Swal.fire({icon: 'error', title: '', text: 'Maaf, soal kuis ini belum tersedia.'
            });</script>";
            session()->setFlashdata('flash', $flash);

            return redirect()->to(base_url() . '/kelasku');
        }
        
        $data = [
            'hasil' => $db->table('hasil_kuis')->where('kuis', $kuis['id'])->where('username', session('username'))->get()->getResultArray(),
            'kuis' => $kuis,
            'pertemuan' => $pertemuan,
            'title' => 'Kuis',
            'active' => 'Kuis',
            'css' => 'kelasku/kuis.css',
        ];
        $data['lewat'] = ((substr($data['kuis']['start_event'],0,10) < date('Y-m-d')) || ($db->table('hasil_kuis')->where('kuis', $data['kuis']['id'])->countAllResults()!=0))  ? 1 : 0;
        return view('kelasku/kuis.php', $data);
    }

    public function kuisJawab($kuis, $jawaban) {
        $model = new Kuis_Model();
        $hasil = new HasilKuis_Model();
        $event = $model->where('id', $kuis)->first();
        $jawabanBenar = explode(',', $event['jawaban']);
        $jawabanUser = explode(',', $jawaban);
        $benar=0;
        $salah=0;
        $kosong=0;

        if ($event['materi']!='TKP') {
            for ($i=0; $i<10; $i++) {
                if ($jawabanBenar[$i]==$jawabanUser[$i]) {
                    $benar+=1;
                } else if ($jawabanUser[$i]!='') {
                    $salah+=1;
                } else {
                    $kosong+=1;
                }
            }
        } else {
            for ($i=1; $i<=10; $i++) {
                $poin=explode(',', $event['poin_'.$i]);
                switch ($jawabanUser[$i-1]) {
                    case 'A': $benar+=$poin[0]; $salah+=(5-$poin[0]); break;
                    case 'B': $benar+=$poin[1]; $salah+=(5-$poin[1]); break;
                    case 'C': $benar+=$poin[2]; $salah+=(5-$poin[2]); break;
                    case 'D': $benar+=$poin[3]; $salah+=(5-$poin[3]); break;
                    case 'E': $benar+=$poin[4]; $salah+=(5-$poin[4]); break;
                    case '': $kosong+=1;
                }
            }
        }

        $data = [
            'username' => session('username'),
            'kuis' => $kuis,
            'jawaban' => $jawaban,
            'benar' => $benar,
            'salah' => $salah,
            'kosong' => $kosong,
        ];
        if (empty($hasil->where('kuis', $kuis)->where('username', session('username'))->first())) {
            $hasil->save($data);
        } else {
            $hasil->where('kuis', $id)->where('username', session('username'))->set($data)->update();
        }
        
        $model = new Nilai_Model();
        $transkrip = $model->where('username', session('username'))->like('bulan', date('Y-m'))->first();
        if (empty($transkrip)) {
            $model->save(['username' => session('username'), 'bulan' => date('Y-m-d')]);
            $transkrip = $model->where('username', session('username'))->like('bulan', date('Y-m'))->first();
        }
        $nilai_sebelumnya = (!empty($transkrip[preg_replace('/\s+/', '_', $event['materi'])])) ? explode('-', $transkrip[preg_replace('/\s+/', '_', $event['materi'])]) : [0, 0];
        $sebelumnya = (int)$nilai_sebelumnya[1]+1;
        $nilai_sebelumnya = ($nilai_sebelumnya[1]!=0) ? (int)$nilai_sebelumnya[0]*(int)$nilai_sebelumnya[1] : 0;

        $nilai = $benar*10;
        $nilai = ($sebelumnya!=1) ? ((int)$nilai+(int)$nilai_sebelumnya)/$sebelumnya : (int)$nilai;
        $model->where('username', session('username'))->set(preg_replace('/\s+/', '_', $event['materi']), (string)$nilai."-".(string)$sebelumnya)->update();
        
        return ((string)$nilai."-".(string)$sebelumnya);
    }
    
    public function kuis_kode()
    {
        // dd($_SESSION);
        // session()->remove('kode_kuis');

        if (isset($_GET['materi'])) {
            $model = new Kuis_Model;
            $kuis = $model->getByMateri($_GET['materi']);

            return redirect()->to(base_url('kelasku/kuis_kode?code=' . $kuis[0]['kode_kuis']));
        }

        // Pengecekan kode kuis
        if ($this->request->getPost('kode_kuis') != null) {
            $kode = $this->request->getPost('kode_kuis');
            $model = new KuisSoalJawaban_Model();

            $kuis = $model->getByCode($kode);

            if ($kuis == NULL) {
                // jika tidak terdapat kode kuis yang diinputkan

                $flash = '<div class="alert alert-danger alert-dismissible fade show w-50 mx-auto" role="alert">
                    <strong>Kode salah!</strong> kode tidak terdaftar.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';

                session()->setFlashdata('flash', $flash);
            } else {
                // jika terdapat kode kuis yang diinputkan

                $model = new Kuis_Model();
                $kuis = $model->getByCode($kode);

                $model = new Jadwal_Model();
                $kuis = $model->getKuis($kuis[0]['materi'], session('kode-kelas'));

                $model = new KuisHasil_Model();

                $check = $model->getHasil($kuis[0]['id'], session('id'));
                // dd($check);
                if ($check == NULL) {
                    if ($kuis == NULL) {
                        $flash = '<div class="alert alert-danger alert-dismissible fade show w-50 mx-auto" role="alert">
                            <strong>Jadwal kuis belum terdaftar!</strong> hubungi admin untuk informasi lebih lanjut.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';

                        session()->setFlashdata('flash', $flash);
                    } else {
                        date_default_timezone_set("Asia/Bangkok");
                        $now = date("Y-m-d H:i:s");

                        if (strtotime($now) > strtotime($kuis[0]['start_event'])) {
                            if (strtotime($now) < strtotime($kuis[0]['end_event'])) {
                                session()->set([
                                    'kode_kuis' => $this->request->getPost('kode_kuis'),
                                ]);
                            } else {
                                $flash = '<div class="alert alert-danger alert-dismissible fade show w-50 mx-auto" role="alert">
                                    <strong>Jadwal kuis telah melewati batas!</strong> hubungi admin untuk informasi lebih lanjut.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>';

                                session()->setFlashdata('flash', $flash);
                            }
                        } else {
                            $flash = '<div class="alert alert-warning alert-dismissible fade show w-50 mx-auto" role="alert">
                                    <strong>Jadwal kuis belum dimulai!</strong> hubungi admin untuk informasi lebih lanjut.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>';

                            session()->setFlashdata('flash', $flash);
                        }
                    }
                } else {
                    $flash = '<div class="alert alert-danger alert-dismissible fade show w-50 mx-auto" role="alert">
                                <strong>Gagal memasuki kuis!</strong> anda sudah pernah mengerjakan kuis tersebut.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';

                    session()->setFlashdata('flash', $flash);
                }
            }
        }

        // Jika sudah pernah mengisi kode kuis dan kuis belum selesai, maka diarahkan ke soal
        if (session('kode_kuis') != NULL) {
            return redirect()->to(base_url('kelasku/kuis_soal'));
        }

        $data['css'] = 'kelasku/kuis.css';
        $data['active'] = 'kelasku';
        $data['title'] = 'Kuis';
        return view('kelasku/kuis_kode', $data);
    }

    public function kuis_soal()
    {
        // Jika tidak terdapat session('kode_kuis), maka diarahkan ke pengisian kode kuis
        if (session('kode_kuis') == NULL) {
            return redirect()->to(base_url('kelasku/kuis_kode'));
        }

        if ($this->request->getPost('no_kuis') == null) {
            // Jika tidak terdapat data (post) no_soal

            if (session('hasil') != null) {
                // jika session hasil tidak kosong

                $hasil = explode(",", session('hasil'));
                $no = count($hasil) + 1;
            } else {
                // jika session hasil kosong

                $no = 1;
            }
        } else {
            // Jika tidak terdapat data (post) no_soal

            $no = $this->request->getPost('no_kuis') + 1;
        }

        $kode = session('kode_kuis');
        // $no = session('no');
        $model = new KuisSoalJawaban_Model();

        // pengambilan soal berdasarkan kode dan no soal (untuk mengambil soal)
        $kuis = $model->getSoal($kode, $no);

        // jika soal sudah melebihi no soal yang terdaftar di database, maka diarahkan ke laman hasil
        if ($kuis == null) {
            return redirect()->to(base_url('kelasku/kuis_hasil'));
        }

        $data = [
            'active'    => 'kelasku',
            'kuis'      => $kuis
        ];

        $data['css'] = 'kelasku/kuis.css';
        $data['title'] = 'Soal';
        return view('kelasku/kuis_soal', $data);
    }

    public function kuis_pembahasan()
    {
        // Jika tidak terdapat session('kode_kuis), maka diarahkan ke pengisian kode kuis
        if (session('kode_kuis') == NULL) {
            return redirect()->to(base_url('kelasku/kuis_kode'));
        }

        // Jika terdapat data jawaban
        if ($this->request->getPost('jawaban') != null) {
            $jawaban = $this->request->getPost('jawaban');
            $no = $this->request->getPost('no_kuis');
            // $no = session('no');

            $kode = session('kode_kuis');
            $model = new KuisSoalJawaban_Model();

            // pengambilan soal berdasarkan kode dan no soal (untuk mengambil jawaban)
            $kuis = $model->getSoal($kode, $no);

            if ($jawaban != 'kosong') {
                // jika jawaban bukan kosong (A, B, C, D, E)
                $kunci = $kuis[0]['jawaban'];
                if ($kunci != $jawaban) {

                    if (session('hasil') != null) {
                        // jika sudah ada session hasil
                        $hasil = session('hasil') . ',salah';
                        session()->set([
                            'hasil'   => $hasil,
                        ]);
                    } else {
                        // jika belum terdapat session hasil
                        session()->set([
                            'hasil'   => 'salah',
                        ]);
                    }
                } else {
                    if (session('hasil') != null) {
                        // jika sudah ada session hasil
                        $hasil = session('hasil') . ',benar';
                        session()->set([
                            'hasil'   => $hasil,
                        ]);
                    } else {
                        // jika belum terdapat session hasil
                        session()->set([
                            'hasil'   => 'benar',
                        ]);
                    }
                }
            } else {
                // jika jawaban kosong
                if (session('hasil') != null) {
                    // jika sudah ada session hasil
                    $hasil = session('hasil') . ',kosong';
                    session()->set([
                        'hasil'   => $hasil,
                    ]);
                } else {
                    // jika belum terdapat session hasil
                    session()->set([
                        'hasil'   => 'kosong',
                    ]);
                }
            }
        } else {
            return redirect()->to(base_url('kelasku/kuis_kode'));
        }

        $data = [
            'active'    => 'kelasku',
            'kuis'      => $kuis
        ]; 

        $data['css'] = 'kelasku/kuis.css';
        $data['title'] = 'Pembahasan';
        return view('kelasku/kuis_pembahasan', $data);
    }

    public function kuis_hasil($id)
    {
        $db = \Config\Database::connect();
        $model = new HasilKuis_Model();
        $kuis = $model->where('kuis', $id)->first();
        $hasil = $db->table('hasil_kuis')->join('kuis', 'kuis.id=hasil_kuis.kuis')->join('events', 'events.id=kuis.event_id')->where('hasil_kuis.username', session('username'))->where('hasil_kuis.kuis', $id)->get()->getResultArray();
        if (!empty($hasil)) {
            $hasil = $hasil[0];
        } else {
            return redirect()->to(base_url().'/kelasku');
        }

        $soal = $hasil['materi']!='TKP' ? 10 : 50;

        $data = [
            'kuis' => $db->table('hasil_kuis')->join('kuis', 'kuis.id=hasil_kuis.kuis')->join('events', 'events.id=kuis.event_id')->where('username', session('username'))->where('hasil_kuis.kuis', $id)->get()->getResultArray()[0],
            'title' => 'Hasil Kuis',
            'active' => 'kelasku',
            'persentase' => (int)$hasil['benar']/$soal*100,
            'css' => 'kelasku/kuis.css'
        ];
        
        return view('kelasku/kuis_hasil', $data);
    }

    public function latihan()
    {
        $model = new Materi_Model();
        $materi = $model->findAll();
        $model_Mindmap = new Mindmap_model();
        $mindmap = $model_Mindmap->findAll();
        $data = [
            'materi'    => $materi,
            'css'       => 'kelasku/latihan.css',
            'active'    => 'kelasku',
            'mindmaps'  => $mindmap
        ];
        $data['title'] = 'Latihan';
        return view('kelasku/latihan', $data);
    }

    function get_latihan($materi)
    {
        $model = new Latihan_Model();
        $result = $model->getSpecific($materi, session('kode-kelas'));
        return json_encode($result);
    }

    public function view_pdf($file)
    {
        if (is_file(ROOTPATH . "/../public_html/latihan/" . $file)) {
            $data = [
                'css'       => 'kelasku/kuis.css',
                'file'      => $file,
                'title'     => 'Kelasku',
                'active'    => 'kelasku',
            ];
            return view('kelasku/viewer_pdf', $data);
        } else {
            if (session('kode-kelas') == '0') {
                session()->setFlashdata('flash', '<script>Swal.fire({icon: "error", title: "", text: "Maaf, file tersebut belum tersedia."});</script>');
                return redirect()->to(base_url().'/kelasku');
            } else {
                session()->setFlashdata('flash', '<script>Swal.fire({icon: "error", title: "", text: "Maaf, file tersebut belum tersedia."});</script>');
                return redirect()->to(base_url().'/peserta');
            }
        }
    }
}
