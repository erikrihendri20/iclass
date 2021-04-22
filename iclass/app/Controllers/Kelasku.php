<?php

namespace App\Controllers;

use App\Models\Jadwal_Model;
use App\Models\Rekaman_Model;
use App\Models\KuisSoalJawaban_Model;
use App\Models\Users_Model;

class Kelasku extends BaseController
{
    public function jadwal()
    {
        $data = [
            'css' => ['kelasku/jadwal.css'],
            'active' => 'kelasku',
            'page'  => 'jadwal'
        ];
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
        $model = new Rekaman_Model();
        $data['rekamans'] = $model->getAll();
        $data['id'] = 0;

        $data['javascript'] = ['rekaman.js'];
        $data['css'] = ['rekaman.css'];
        $data['active'] = 'kelasku';
        return view('kelasku/rekaman', $data);
    }

    public function pindahRekaman($id)
    {
        $model = new Rekaman_Model();
        $data['rekaman'] = $model->where('id', $id)->first();
        $data['thumbnail1'] = $model->where('id', $id + 1)->first();
        $data['thumbnail2'] = $model->where('id', $id + 2)->first();
        $data['thumbnail3'] = $model->where('id', $id + 3)->first();

        echo json_encode($data);
    }

    public function kuis_kode()
    {
        // session()->remove('kode_kuis');

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

                session()->set([
                    'kode_kuis' => $this->request->getPost('kode_kuis'),
                ]);
            }
        }

        // Jika sudah pernah mengisi kode kuis dan latihan belum selesai, maka diarahkan ke soal
        if (session('kode_kuis') != NULL) {
            return redirect()->to(base_url('kelasku/kuis_soal'));
        }

        $data = [
            'active'    => 'kelasku',
        ];
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
            $kosong = '0';

        $skor = [
            'skor'  => $benar * 4,
            'max'   => $jumlah * 4
        ];
        $pass_grade = $skor['skor'] / $skor['max'] * 100;

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

        return view('kelasku/kuis_hasil', $data);
    }
}
