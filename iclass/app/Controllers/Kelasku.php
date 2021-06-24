<?php

namespace App\Controllers;

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
    public function jadwal()
    {
        $data = [
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

    public function rekaman()
    {

        $data['id'] = 0;
        $user = new Users_Model;
        $user = $user->getByUserName(session('username'));

        if ($user[0]['kode_kelas'] == "0") {
            session()->setFlashdata('info', "<script>swal('Maaf, kamu belum tergabung ke dalam kelas manapun.','','error')</script>");
            return redirect()->to(base_url() . '/peserta');
        } else {
            $class = new Kelas_Model;
            $userClass = $class->getByid($user[0]['kode_kelas']);
            $data['kelas'] = $userClass[0]['nama'];
        }

        $model = new Rekaman_Model();
        $data['rekamans'] = $model->where('kelas', $data['kelas'])->findAll();

        if (empty($data['rekamans'])) {
            session()->setFlashdata('info', "<script>swal('Maaf, kelas mu belum punya rekaman pertemuan.','','error')</script>");
            return redirect()->to(base_url() . '/peserta');
        } else {
            $data['javascript'] = ['rekaman.js'];
            $data['css'] = 'rekaman.css';
            $data['active'] = 'kelasku';
            $data['title'] = 'Rekaman';

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
        $model = new Rekaman_Model();
        $data['rekamanes'] = $model->where('kelas', $kelas)->findAll();
        $data['rekaman'] = (!empty($data['rekamanes'][$id])) ? $data['rekamanes'][$id] : null;
        $data['thumbnail1'] = (!empty($data['rekamanes'][$id+1])) ? $data['rekamanes'][$id+1] : null;
        $data['thumbnail2'] = (!empty($data['rekamanes'][$id+2])) ? $data['rekamanes'][$id+2] : null;
        $data['thumbnail3'] = (!empty($data['rekamanes'][$id+3])) ? $data['rekamanes'][$id+3] : null;

        echo json_encode($data);
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

        $data['title'] = 'Pembahasan';
        return view('kelasku/kuis_pembahasan', $data);
    }


    public function kuis_hasil()
    {
        // Jika tidak terdapat session('kode_kuis), maka diarahkan ke pengisian kode kuis
        if (session('hasil') == NULL) {
            return redirect()->to(base_url('kelasku/kuis_kode'));
        }

        // Penghitungan hasil (benar, salah, kosong, skor, passing grade)
        $hasil = session('hasil');
        $hasil = explode(",", session('hasil'));
        $jumlah = count($hasil);
        $count = array_count_values($hasil);

        if (isset($count['benar']))
            $benar = $count['benar'];
        else
            $benar = '0';

        if (isset($count['salah']))
            $salah = $count['salah'];
        else
            $salah = '0';

        if (isset($count['kosong']))
            $kosong = $count['kosong'];
        else
            $kosong = 0;

        $skor = [
            'skor'  => ($benar * 4) - ($salah * 1),
            'max'   => $jumlah * 4
        ];
        $pass_grade = $skor['skor'] / $skor['max'] * 100;

        $model = new Kuis_Model();
        $kuis = $model->getByCode(session('kode_kuis'));

        $model = new Jadwal_Model();
        $event = $model->getKuis($kuis[0]['materi'], session('kode-kelas'));

        $data = [
            'kuis_id'           => $kuis[0]['id'],
            'events_id'         => $event[0]['id'],
            'users_id'          => session('id'),
            'jawaban_benar'     => $benar,
            'jawaban_salah'     => $salah,
            'jawaban_kosong'    => $kosong,
            'jawaban_jumlah'    => $jumlah,
            'skor'              => $skor['skor'],
        ];
        $model->db->table('kuis_hasil')->insert($data);

        $data = [
            'active'        => 'kelasku',
            'benar'         => $benar,
            'salah'         => $salah,
            'kosong'        => $kosong,
            'jumlah'        => $jumlah,
            'skor'          => $skor,
            'pass_grade'    => $pass_grade
        ];

        // Menghapus semua session untuk kuis 
        session()->remove('kode_kuis');
        session()->remove('hasil');

        $data['title'] = 'Hasil';
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
                'file'      => $file,
                'active'    => 'kelasku',
                'title'     => 'Kelasku',
            ];
            return view('kelasku/viewer_pdf', $data);
        } else {
            $flash = '<div class="alert alert-danger alert-dismissible fade show w-50 mx-auto" role="alert">
                    <strong>File tidak ada!</strong> hubungi admin untuk informasi lebih lanjut.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);

            $model = new Materi_Model();
            $materi = $model->findAll();
            $data = [
                'materi'      => $latihan,
                'active'    => 'kelasku',
            ];
            $data['title'] = 'Latihan';
            return view('kelasku/latihan', $data);
        }
    }
}
