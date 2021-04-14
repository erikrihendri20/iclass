<?php

namespace App\Controllers;

use App\Models\Jadwal_Model;
use App\Models\Rekaman_Model;
use App\Models\Kuis_Model;

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
        $kode_kelas = session('kelas_id');
        $model = new Jadwal_Model();
        $result = $model->getJadwal($kode_kelas);
        return json_encode($result);
    }

    public function rekaman($id = NULL)
    {
        if ($id == NULL) $id = 1;

        $model = new Rekaman_Model();
        $data['rekamans'] = $model->getAll();
        $data['rekamanPilihan'] = $model->getById($id);

        $data['css'] = ['rekaman.css'];
        $data['active'] = 'kelasku';
        return view('kelasku/rekaman', $data);
    }

    public function latihan_kode()
    {
        // session()->remove('kode_kuis');
        if ($this->request->getPost('kode_kuis') != null) {
            $kode = $this->request->getPost('kode_kuis');
            $model = new Kuis_Model();

            $kuis = $model->getByCode($kode);
            if ($kuis == NULL) {

                $flash = '<div class="alert alert-danger alert-dismissible fade show w-50 mx-auto" role="alert">
				<strong>Kode salah!</strong> kode tidak terdaftar.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>';

                session()->setFlashdata('flash', $flash);
            } else {
                // dd($kuis);

                session()->set([
                    'kode_kuis' => $this->request->getPost('kode_kuis'),
                    'no'   => 1,
                ]);
            }
        }

        if (session('kode_kuis') != NULL) {
            return redirect()->to(base_url('kelasku/latihan_soal'));
        }

        $data['css'] = ['kelasku.css'];
        $data['active'] = 'kelasku';
        return view('kelasku/latihan_kode', $data);
    }

    public function latihan_soal()
    {
        if (session('kode_kuis') == NULL) {
            return redirect()->to(base_url('kelasku/latihan_kode'));
        }

        if (session('hasil') != null) {
            $hasil = explode(",", session('hasil'));
            if (session('no') < count($hasil))
                session()->set([
                    'no'   => count($hasil),
                ]);
        }

        if ($this->request->getPost('no') !== null) {
            session()->set([
                'no'   => $this->request->getPost('no') + 1,
            ]);
        }

        $kode = session('kode_kuis');
        $no = session('no');
        $model = new Kuis_Model();

        $kuis = $model->getSoal($kode, $no);

        if ($kuis == null) {
            return redirect()->to(base_url('kelasku/latihan_hasil'));
        }

        // dd($kuis);

        $data = [
            'css'       => ['kelasku.css'],
            'active'    => 'kelasku',
            'kuis'      => $kuis
        ];

        return view('kelasku/latihan_soal', $data);
    }

    public function latihan_pembahasan()
    {
        if (session('kode_kuis') == NULL) {
            return redirect()->to(base_url('kelasku/latihan_kode'));
        }

        if ($this->request->getPost('jawaban') != null) {
            $jawaban = $this->request->getPost('jawaban');
            $kode = session('kode_kuis');
            $no = session('no');
            $model = new Kuis_Model();

            $kuis = $model->getSoal($kode, $no);

            if ($jawaban != 'kosong') {

                $kunci = $kuis[0]['jawaban'];
                if ($kunci != $jawaban) {
                    if (session('hasil') != null) {
                        $hasil = session('hasil') . ',salah';
                        session()->set([
                            'hasil'   => $hasil,
                        ]);
                    } else {
                        session()->set([
                            'hasil'   => 'salah',
                        ]);
                    }
                } else {
                    if (session('hasil') != null) {
                        $hasil = session('hasil') . ',benar';
                        session()->set([
                            'hasil'   => $hasil,
                        ]);
                    } else {
                        session()->set([
                            'hasil'   => 'benar',
                        ]);
                    }
                }
            } else {
                if (session('hasil') != null) {
                    $hasil = session('hasil') . ',kosong';
                    session()->set([
                        'hasil'   => $hasil,
                    ]);
                } else {
                    session()->set([
                        'hasil'   => 'kosong',
                    ]);
                }
            }
        } else {
            return redirect()->to(base_url('kelasku/latihan_kode'));
        }

        $data = [
            'css'       => ['kelasku.css'],
            'active'    => 'kelasku',
            'kuis'      => $kuis
        ];

        return view('kelasku/latihan_pembahasan', $data);
    }


    public function latihan_hasil()
    {
        if (session('hasil') == NULL) {
            return redirect()->to(base_url('kelasku/latihan_kode'));
        }
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
            'css'           => ['kelasku.css'],
            'active'        => 'kelasku',
            'benar'         => $benar,
            'salah'         => $salah,
            'kosong'        => $kosong,
            'jumlah'        => $jumlah,
            'skor'          => $skor,
            'pass_grade'    => $pass_grade
        ];

        session()->remove('kode_kuis');
        session()->remove('no');
        session()->remove('hasil');

        return view('kelasku/latihan_hasil', $data);
    }
}
