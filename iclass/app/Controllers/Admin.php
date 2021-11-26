<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;
use App\Models\Kehadiran_Model;
use App\Models\Users_Model;
use App\Models\Jadwal_Model;
use App\Models\Kelas_Model;
use App\Models\Rekaman_Model;
use App\Models\Paket_Model;
use App\Models\Kuis_Model;
use App\Models\KuisHasil_Model;
use App\Models\KuisSoalJawaban_Model;
use App\Models\Latihan_Model;
use App\Models\Admin_Model;
use App\Models\Materi_Model;
use App\Models\HasilKuis_Model;
use App\Models\Tryout_Model;
use App\Models\UbahPaket_Model;
use App\Models\Notifikasi_Model;

class Admin extends BaseController
{
    public function index()
    {
        $user_model = new Users_Model();
        $data['peserta'] = $user_model->jumlahPesertaByStatus();
        $data['belumMembayar'] = $user_model->jumlahPesertaByStatus(0);
        $data['sudahMembayar'] = $user_model->jumlahPesertaByStatus(1);
        $data['sudahDikonfirmasi'] = $user_model->jumlahPesertaByStatus(2);
        
        $data['pesertaTidakAktif'] = $user_model->pesertaTidakAktif();
        $data['active'] = 'dashboard';
        $data['title'] = 'Dashboard Admin';
        return view('admin/index', $data);
    }

    public function aturJadwalPertemuan()
    {
        $data['active'] = 'atur jadwal pertemuan';
        $model = new Kelas_Model();
        $user = new Users_Model();

        $data['kelas'] = $model->findAll();
        $data['title'] = 'Atur Jadwal Pertemuan';
        return view('admin/aturJadwalPertemuan', $data);
    }

    public function aturJadwalTryout()
    {
        $model = new Jadwal_Model();
        $db = \Config\Database::connect();

        $tryout = $model->where('events.jenis', '2')->findAll();

        $class = array();
        $i = 0;

        $model = new Kelas_Model;
        foreach ($tryout as $id) {
            $kelas="";
            $j=0;
            foreach (explode(',', $id['kode_kelas']) as $kls) {
                $cls = $model->getByid($kls);
                if ($j==0) {
                    $kelas = $cls[0]['nama'];
                } else {
                    $kelas = $kelas.','.$cls[0]['nama'];
                }
                $j++;
            }
            $class[$i] = $kelas;
            $i++;
        }

        $kelas = $model->findAll();

        $data = [
            'kelas'         => $class,
            'data'          => $tryout,
            'list_kelas'    => $kelas,
            'submateris'    => $db->table('submateri')->get()->getResultArray(),
            'active'        => 'tryout_jadwal',
        ];
        $data['title'] = 'Jadwal Try Out';
        return view('admin/jadwal_tryout', $data);
    }

    public function daftarKelas()
    {
        $kelas_model = new Kelas_Model();
        $paket_model = new Paket_Model();
        $data['kelas'] = $kelas_model->tampilkanKelas();
        $user_model = new Users_Model();
        for ($i = 0; $i < count($data['kelas']); $i++) {
            $data['kelas'][$i]['jumlah-peserta'] = $user_model->jumlahPeserta($data['kelas'][$i]['id']);
        }
        $data['paket'] = $paket_model->findAll();
        $data['active'] = 'daftar kelas';
        $data['title'] = 'Daftar Kelas';
        return view('admin/daftarKelas', $data);
    }

    public function lihatJadwal($kode_kelas, $jenis = null)
    {
        $model = new Jadwal_Model();
        $result = $model->getJadwal($kode_kelas, $jenis);
        echo json_encode($result);
    }

    public function tambahKelas()
    {
        if (isset($_POST['submit'])) {
            $data = [
                'id' => $this->request->getPost('id'),
                'nama' => $this->request->getPost('nama'),
                'link-meeting' => $this->request->getPost('link-meeting'),
                'kode_paket' => $this->request->getPost('kode-paket')
            ];
            $rules = [
                'nama' => [
                    'label'  => 'Nama|is_unique[kelas.nama]',
                    'rules'  => 'required',
                    'errors' => [
                        'required' => 'Nama harus diisi',
                        'is_unique' => 'Nama sudah digunakan'
                    ]
                ]
            ];
            if ($this->validate($rules)) {
                $model = new Kelas_Model();
                $model->save($data);
                $flash = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            Kelas <strong>berhasil</strong> ditambahkan
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                session()->setFlashdata('flash', $flash);
                return redirect()->to(base_url() . '/admin/daftarKelas');
            } else {
                $flash = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Gagal</strong>, pastikan nama kelas belum digunakan sebelumnya
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                session()->setFlashdata('flash', $flash);
                return redirect()->to(base_url() . '/admin/daftarKelas');
            }
        }
    }



    public function hapusKelas($id)
    {
        if (isset($id)) {
            $model = new Kelas_Model();
            $model->delete($id);
            $flash = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            Kelas <strong>berhasil</strong> dihapus
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url() . '/admin/daftarKelas');
        } else {
            $flash = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Gagal</strong>, pastikan nama kelas belum digunakan sebelumnya
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url() . '/admin/daftarKelas');
        }
    }

    public function tambahJadwal()
    {
        if (isset($_POST["title"])) {
            $data = [
                'title' => $this->request->getPost('title'),
                'start_event' => $this->request->getPost('start'),
                'end_event' => $this->request->getPost('end'),
                'kode_kelas' => $this->request->getPost('kode_kelas'),
                'link-meeting' => $this->request->getPost('url'),
                'jenis' => $this->request->getPost('jenis'),
                'class_name' => $this->request->getPost('class_name'),
            ];
            
            if (isset($_POST['id'])) {
                $data['id'] = $this->request->getPost('id');
                
                if (!empty($this->request->getFile('thumbnailPertemuan'))) {
                    $thumbnail = $this->request->getFile('thumbnailPertemuan');
                    $thumbnail->move('./img/pertemuan', $data['id'].'.jpg', true);
                }
            }
            
            $model = new Jadwal_Model();
            $model->save($data);
            $data = $model->where('title', $data['title'])->orderBy('id', 'desc')->findAll();
            
            if (!empty($this->request->getFile('thumbnailPertemuan')) && !isset($_POST['id'])) {
                $thumbnail = $this->request->getFile('thumbnailPertemuan');
                $thumbnail->move('./img/pertemuan', $data[0]['id'].'.jpg');
            }
            
            if ($this->request->getPost('jenis') == '1' && !isset($_POST['id'])) {
                $user = new Users_Model();
                $siswas = $user->where('kode_kelas', $this->request->getPost('kode_kelas'))->findAll();
                $pertemuan = $this->request->getPost('pertemuan');
                foreach ($siswas as $siswa) {
                    $bolos = (int)$siswa['bolos'];
                    $sisa = (int)$siswa['sisa'];
                    $data1 = [
                        'bolos' => $bolos+1,
                        'sisa' => $sisa-1,
                    ];
                    $user->where('id', $siswa['id'])->set($data1)->update();

                    $data2 = [
                        'username'  => $siswa['username'],
                        'kelas'     => $siswa['kode_kelas'],
                        'event'     => (isset($_POST['id'])) ? $this->request->getPost('id') : $model->orderBy('id', 'desc')->first()['id'],
                        'hadir'     => '0',
                        'pertemuan' => (string)$pertemuan,
                    ];
                    $kehadiran = new Kehadiran_Model();
                    $kehadiran->save($data2);
                }
            }
        }
    }

    public function hapusJadwal()
    {
        $id = $this->request->getPost('id');
        $model = new Jadwal_Model();
        $event = $model->where('id', $id)->first();
        $model->delete($id);

        if ($event['jenis'] == '1') {
            $user = new Users_Model();
            $siswas = $user->where('kode_kelas', $event['kode_kelas'])->findAll();
            
            $kehadiran = new Kehadiran_Model();
            foreach ($siswas as $siswa) {
                $bolos = (int)$siswa['bolos'];
                $sisa = (int)$siswa['sisa'];
                $data1 = [
                    'bolos' => $bolos-1,
                    'sisa' => $sisa+1,
                ];
                $user->where('id', $siswa['id'])->set($data1)->update();
                
                $kehadiran->where('event', $this->request->getPost('id'))->where('username', $siswa['username'])->delete();
            }
        }
    }

    public function renderJadwal($kode_kelas)
    {
        $model = new Jadwal_Model();
        return json_encode($model->getJadwal($kode_kelas));
    }

    public function jadwalAdmin()
    {
        $model = new Jadwal_Model();
        return json_encode($model->findAll());
    }

    public function rekaman()
    {   
        $kelas_model = new Kelas_Model();
        $admin_model = new Admin_Model();
        $db = \Config\Database::connect();

        $data['kelases'] = $kelas_model->findAll();
        $data['admins'] = $admin_model->findAll();

        $model = new Rekaman_Model();

        $data['materis'] = $db->table('materi')->get()->getResultArray();
        $data['rekamans'] = $model->findAll();
        $data['active'] = 'rekaman';
        $data['css'] = 'admin/rekaman.css';
        $data['title'] = 'Rekaman';
        return view('admin/rekaman', $data);
    }

    public function tampilkanRekaman()
    {
        $kelas_model = new Kelas_Model();
        $admin_model = new Admin_Model();
        $data['kelases'] = $kelas_model->findAll();
        $data['admins'] = $admin_model->findAll();

        $model = new Rekaman_Model();

        $data['rekamans'] = $model->findAll();
        return view('admin/tampilkanRekaman', $data);
    }

    public function tambahRekaman()
    {
        if (!empty($this->request->getPost())) {
            $data['kelas'] = strval($this->request->getPost('kelas'));
            $data['admin'] = $this->request->getPost('admin');
            $data['materi'] = $this->request->getPost('materi');
            
            $data['rekaman'] = $this->request->getFile('rekaman');
            $data['thumbnailRekaman'] = $this->request->getFile('thumbnailRekaman');
            $data['ppt'] = $this->request->getFile('ppt');
        
            $rules = [
                'materi' => [
                    'label'  => 'Materi',
                    'rules'  => 'required|max_length[250]',
                    'errors' => [
                        'required' => 'Materi harus diisi',
                        'max_length' => 'Nama materi berisi maksimal 250 karakter (termasuk spasi)'
                    ]
                ],
                'rekaman' => [
                    'label' => 'Video',
                    'rules' => 'uploaded[rekaman]|ext_in[rekaman,mp4]|max_size[rekaman,100000]',
                    'errors' => [
                        'uploaded' => 'Silahkan pilih video rekaman kelas',
                        'ext_in' => 'Pilih file dengan format Mp4',
                        'max_size' => 'Ukuran file video tidak boleh melebihi 100 Mb'
                    ]
                ],
                'thumbnailRekaman' => [
                    'label' => 'Tumbnail',
                    'rules' => 'uploaded[thumbnailRekaman]|is_image[thumbnailRekaman]|max_size[thumbnailRekaman,5120]',
                    'errors' => [
                        'uploaded' => 'Silahkan pilih gambar thumbnail video rekaman kelas',
                        'is_image' => 'Pilih gambar dengan jenis gambar',
                        'max_size' => 'Ukuran file thumbnail tidak boleh melebihi 5 Mb'
                    ]
                ],
                'ppt' => [
                    'label' => 'PowerPoint',
                    'rules' => 'uploaded[ppt]|ext_in[ppt,ppt,pptx,pdf]',
                    'errors' => [
                        'uploaded' => 'Silahkan pilih file powerpoint yang digunakan pada rekaman kelas',
                        'ext_in' => 'Pilih file dengan jenis pptx atau pdf'
                    ]
                ],
                'admin' => [
                    'label' => 'Admin',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Silahkan pilih pengajar untuk rekaman ini'
                    ]
                ]
            ];

            if (empty($data['kelas'])) {
                $data2['kelas'] = 'Silahkan pilih kelas yang diinginkan';
                $data2['judul'] = 'Upload Gagal!';
                $data2['pesan'] = 'Rekaman Kelas Gagal Diupload. Pastikan Anda telah memasukkan data dan memilih file dengan benar';
                $data2['tipe'] = 'error';
                return json_encode($data2);
            }

            if ($this->validate($rules, $data)) {
                $data1 = [
                    'kelas' => $data['kelas'],
                    'materi' => $data['materi'],
                    'ext_tn' => $data['thumbnailRekaman']->guessExtension(),
                    'ext_ppt' => $data['ppt']->guessExtension(),
                    'admin' => $data['admin'],
                    'uploaded' => date("Y-m-d")
                ];

                $model = new Rekaman_Model();
                $model->insert($data1);
                
                $data['rekaman']->move("./vid/Rekaman Kelas/{$data1['admin']}", "{$data['materi']} - 1.mp4", true);
                $data['thumbnailRekaman']->move("./img/Rekaman Kelas/{$data1['admin']}", "{$data['materi']}.{$data['thumbnailRekaman']->guessExtension()}", true);
                $data['ppt']->move("./ppt/Rekaman Kelas/{$data1['admin']}", "{$data['materi']}.{$data['ppt']->guessExtension()}", true);
            
                $data2['judul'] = 'Upload Berhasil!';
                $data2['pesan'] = 'Rekaman Kelas Berhasil Diupload';
                $data2['tipe'] = 'success';
                return json_encode($data2);
            } else {
                $data2 = $this->validator->getErrors();

                $data2['judul'] = 'Upload Gagal!';
                $data2['pesan'] = 'Rekaman Kelas Gagal Diupload. Pastikan Anda telah memasukkan data dan memilih file dengan benar';
                $data2['tipe'] = 'error';
                return json_encode($data2);
            }
        }
    }

    public function tambahRekaman2() {
        if (!empty($this->request->getPost())) {
            $data['part'] = $this->request->getPost('part');
            $data['rekaman'] = $this->request->getFile('rekaman');

            $admin = $this->request->getPost('admin');
            $materi = $this->request->getPost('materi');
            $parts = $this->request->getPost('parts');

            $rules = [
                'part' => [
                    'label' => 'Part',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Part harus diisi'
                    ]
                ],
                'rekaman' => [
                    'label' => 'Video',
                    'rules' => 'uploaded[rekaman]|ext_in[rekaman,mp4]|max_size[rekaman,100000]',
                    'errors' => [
                        'uploaded' => 'Silahkan pilih video rekaman kelas',
                        'ext_in' => 'Pilih file dengan format Mp4',
                        'max_size' => 'Ukuran file video tidak boleh melebihi 100 Mb'
                    ]
                ]
            ];

            if ($this->validate($rules, $data)) {
                $model = new Rekaman_Model();
                $model->where('admin', $admin)->where('materi', $materi)->set('parts', $parts.','.$data['part'])->update();

                $data['rekaman']->move("./vid/Rekaman Kelas/{$admin}", "{$materi} - {$data['part']}.mp4");

                $data2['judul'] = 'Upload Berhasil!';
                $data2['pesan'] = 'Rekaman Kelas Berhasil Diupload';
                $data2['tipe'] = 'success';
                return json_encode($data2);
            } else {
                $data2 = $this->validator->getErrors();

                $data2['judul'] = 'Upload Gagal!';
                $data2['pesan'] = 'Rekaman Kelas Gagal Diupload. Pastikan Anda telah memasukkan data dan memilih file dengan benar';
                $data2['tipe'] = 'error';
                return json_encode($data2);
            }
        }
    }

    public function hapusRekaman($admin, $materi, $part) {
        $admin = str_replace("_", " ", $admin);
        $materi = str_replace("_", " ", $materi);
        $part = str_replace("_", " ", $part);
        
        $model = new Rekaman_Model();
        $rekaman = $model->where('admin', $admin)->where('materi', $materi)->first();
        $parts = $rekaman['parts'];
        
        $hapus = strpos($parts, ',');
        if ($hapus == false ) {
            $model->where('admin', $admin)->where('materi', $materi)->delete();
            
            $file = "./vid/Rekaman Kelas/{$admin}/{$materi} - {$part}.mp4";
            unlink($file);
            
            $file = "./img/Rekaman Kelas/{$admin}/{$materi}.{$rekaman['ext_tn']}";
            unlink($file);
            
            $file = "./ppt/Rekaman Kelas/{$admin}/{$materi}.{$rekaman['ext_ppt']}";
            unlink($file);
            
            return $part;
        } else {
            if (strpos($parts, $part) == 0) {
                $parts = substr($parts, 2);
            } else {
                $parts = str_replace(','.$part, '', $parts);
            }
            $file = "./vid/Rekaman Kelas/{$admin}/{$materi} - {$part}.mp4";
            unlink($file);
        }

        $model->where('admin', $admin)
            ->where('materi', $materi)
            ->set('parts', $parts)
            ->update();
        
        if ($parts == $model->where('admin', $admin)->where('materi', $materi)->first()['parts']) {
            return $materi;
        } else {
            return "gagal";
        }
    }
    
    public function ubahKelasRekaman() {
        $id = $this->request->getPost('id');
        $kelas = $this->request->getPost('kelas');
        $cek = $this->request->getPost('cek');

        $model = new Rekaman_Model();
        $kelases = strval($model->where('id', $id)->first()['kelas']);
        
        if ($cek == '1') {
            if (strpos($kelases, $kelas) == false) {
                $kelases = $kelases.",".$kelas;
            }
        } else if ($cek == '0') {
            $hapus = strpos($kelases, $kelas);
            if ($hapus !== false) {
                if ($hapus == 0) {
                    $kelases = substr($kelases, strlen($kelas)+1);
                } else {
                    $kelases = substr($kelases, 0, strlen($kelases)-strlen($kelas)-1);
                }
            }
        }

        $model->where('id', $id)
            ->set('kelas', $kelases)
            ->update();
            
        if ($kelases == $model->where('id', $id)->first()['kelas']) {
            return $kelas;
        } else {
            return "gagal";
        }
    }

    public function ubahAdminRekaman($id, $admin) {
        $model = new Rekaman_Model();
        
        $model->where('id', $id)
            ->set('admin', $admin)
            ->update();

        if ($admin == $model->where('id', $id)->first()['admin']) {
            return $admin;
        } else {
            return "gagal";
        }
    }

    public function numberValidation(string $str, string $fields, array $data)
    {
        if (preg_match('/^[0-9]+/', $data['pertemuan'])) {
            return true;
        } else {
            return false;
        }
    }

    public function daftarPeserta()
    {
        $data['active'] = 'daftar peserta';
        $model = new Paket_Model();
        $data['paket'] = $model->findAll();
        $data['title'] = 'Daftar Peserta';
        return view('admin/daftarPeserta', $data);
    }

    public function tampilkanPeserta($kode_paket)
    {
        $user_model = new Users_Model();
        $kelas_model = new Kelas_Model();
        $paket_model = new Paket_Model();
        $data['user'] = $user_model->tampilkanPeserta($kode_paket);
        $data['kelas'] = $kelas_model->findAll();
        $data['paket'] = $paket_model->findAll();
        $data['title'] = 'Tampilkan Peserta';
        return view('admin/tampilkanPeserta', $data);
    }

    public function ubahKelasPeserta()
    {
        $id = $this->request->getPost('id');
        $kode_kelas = $this->request->getPost('kode_kelas');
        $user = new Users_Model();

        $model = new Jadwal_Model();
        $events = $model->where('jenis', '1')->like('kode_kelas', $kode_kelas)->findAll();
        
        $pertemuan=0;
        switch ($user->where('id', $id)->first()['kode_paket']) {
            case '1': $pertemuan=0; break;
            case '2': $pertemuan=8; break;
            case '3': $pertemuan=12; break;
            case '4': $pertemuan=27; break;
            case '5': $pertemuan=60; break;
        }

        $u2 = $user->where('kode_kelas', $u['kode_kelas'])->first()['username'];

        $jumlah = !empty($events) ? sizeof($events) : 0;
        $user->update($id, [
            'kode_kelas' => $kode_kelas,
            'sisa' => (string)($pertemuan-$jumlah),
            'bolos' => (string)$jumlah
        ]);

        if ($jumlah!==0) {
            $u = $user->where('id', $id)->first();

            $kehadiran = new Kehadiran_Model();
            $hadir = $kehadiran->where('username', $u['username'])->where('kelas', $kode_kelas)->findAll();
            $hadir2 = $kehadiran->where('username', $u2)->findAll();

            if (!empty($hadir)) {
                $kehadiran->where('username', $u['username'])->delete();
            }

            for ($i=0; $i<sizeof($hadir2); $i++) {
                $data = [
                    'username' => $u['username'],
                    'kelas' => $u['kode_kelas'],
                    'event' => $hadir2['event'],
                    'hadir' => '0',
                    'pertemuan' => $hadir2['pertemuan'],
                ];

                $kehadiran->insert($data);
            }
        }
        
        $flash = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            kelas <strong>berhasil</strong> diubah
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
        return $flash;
    }

    public function hapusPeserta($id)
    {
        if (isset($id)) {
            $model = new Users_Model();
            $model->delete($id);
            $flash = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            Peserta <strong>berhasil</strong> dihapus
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->back();
        } else {
            $flash = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Gagal</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->back();
        }
    }

    public function hapusSemua($id)
    {
        $id = json_decode($id);
        if($id==null){
            $flash = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Gagal</strong>, tidak ada peserta
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->back();
        }
        $model = new Users_Model();
        $model->delete($id);
        $flash = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            Peserta <strong>berhasil</strong> dihapus
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
        session()->setFlashdata('flash', $flash);
        return redirect()->back();
    }

    public function editPeserta($id)
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
                'telepon' => [
                    'label'  => 'Nomor Whatsapp',
                    'rules'  => 'required|numeric',
                    'errors' => [
                        'required' => 'Nomor whatsapp harus diisi',
                        'numeric' => 'Masukan whatsapp dengan benar',
                    ]
                ]
            ];
            if ($this->validate($rules)) {
                $model = new Users_Model();
                $newuser = [
                    'nama' => $this->request->getPost('nama'),
                    'jurusan' => $this->request->getPost('jurusan'),
                    'telepon' => $this->request->getPost('telepon'),
                    'email' => $this->request->getPost('email'),
                    'username' => $this->request->getPost('username'),
                    'kode_paket' => $this->request->getPost('kode-paket')
                ];
                $model->update($id, $newuser);
                $flash = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            ' . $newuser['nama'] . ' <strong>berhasil</strong> diubah <br>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                session()->setFlashdata('flash', $flash);
                return redirect()->to(base_url() . '/admin/daftarPeserta');
            } else {
                return redirect()->back()->withInput();
            }
        }
        $user_model = new Users_Model();
        $data['user'] = $user_model->find($id);
        $paket_model = new Paket_Model();
        $data['paket'] = $paket_model->findAll();
        $data['active'] = 'edit peserta';
        $data['css'] = 'auth/edit-peserta.css';
        $data['title'] = 'Edit Peserta';
        return view('admin/editPeserta', $data);
    }

    public function tampilkanKonfirmasiPeserta($kode_paket = null)
    {
        $user_model = new Users_Model();
        $kelas_model = new Kelas_Model();
        $paket_model = new Paket_Model();
        $data['user'] = $user_model->tampilkanPeserta($kode_paket);
        $data['kelas'] = $kelas_model->findAll();
        $data['paket'] = $paket_model->findAll();
        $data['title'] = 'Konfirmasi Peserta';
        return view('admin/tampilkanKonfirmasiPeserta', $data);
    }

    public function konfirmasiPeserta()
    {
        $paket_model = new Paket_Model();
        $data['paket'] = $paket_model->findAll();
        $data['active'] = 'konfirmasi peserta';
        $data['title'] = 'Konfirmasi Peserta';
        return view('admin/konfirmasiPeserta', $data);
    }

    public function ubahStatus($id, $status)
    {
        $user_model = new Users_Model();
        $user_model->update($id, ['status' => $status]);
        $user = $user_model->find($id);
        if ($user['status'] == 0) {
            unlink('./img/bukti-pembayaran/' . $user['bukti_pembayaran']);
            return '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        berhasil menonaktifkan user ' . $user['nama'] . '
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
        }
        return '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    berhasil mengaktifkan user ' . $user['nama'] . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
    }

    public function kuis_soal()
    {
        helper('kode');

        $kode = generate_kode(5, false, 'set');

        $data = [
            'kode'      => $kode,
            'active'    => 'kuis_soal',
            'css'       => 'admin/kuis_soal.css'
        ];

        $data['title'] = 'Upload Kuis';
        return view('admin/upload_soal_kuis', $data);
    }

    public function upload_kuis_soal()
    {
        $rules = [
            'materi' => [
                'label'  => 'Materi',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Materi harus diisi'
                ]
            ],
            'kode' => [
                'label'  => 'Kode',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Kode harus diisi'
                ]
            ],
            'kode' => [
                'label'  => 'Kode',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Kode harus diisi'
                ]
            ],
            'file' => 'uploaded[file]|mime_in[file,image/jpg,image/jpeg,image/png]'
        ];
        if ($this->validate($rules)) {
            $materi = $this->request->getPost('materi');
            $kode = $this->request->getPost('kode');
            $imagefile = $this->request->getFileMultiple('file');

            $model = new Kuis_Model();

            $i = 1;

            $check = $model->getByMateri($materi);
            if ($check == NULL) {
                $check = $model->getByCode($kode);
                if ($check == NULL) {
                    $data = [
                        'materi'        => $materi,
                        'kode_kuis'     => $kode,
                    ];
                    $model->db->table('kuis')->insert($data);
                } else {
                    $kode = generate_kode(5, false, 'set');
                    $data = [
                        'materi'        => $materi,
                        'kode_kuis'     => $kode,
                    ];
                    $model->db->table('kuis')->insert($data);
                }

                $path = ROOTPATH . "/../public_html/img/kuis/" . $kode;

                if (!is_dir($path)) {
                    mkdir($path . '/soal', 0755, true);
                    mkdir($path . '/pembahasan', 0755, true);
                }

                foreach ($imagefile as $img) {
                    $name = "jawaban_" . $i;
                    $no = explode(".", $img->getName())[0];

                    if ($this->request->getPost($name) == NULL) {
                        $flash = '<div class="mx-5 alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Upload terganggu!</strong> jawaban no ' . $no . ' belum terisi.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                        session()->setFlashdata('flash', $flash);
                        return redirect()->to(base_url('admin/kuis_soal'));
                    }

                    $data = [
                        'kode_kuis' => $kode,
                        'no_kuis'   => $no,
                        'soal'      => $img->getName(),
                        'jawaban'   => $this->request->getPost($name)
                    ];
                    $model->db->table('kuis_soal_jawaban')->insert($data);
                    $img->move($path . '/soal');

                    $i++;
                }

                $flash = '<div class="mx-5 alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Upload sukses!</strong> soal berhasil ditambahkan.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
                session()->setFlashdata('flash', $flash);
                return redirect()->to(base_url('admin/kuis_soal'));
            } else {
                $check = $model->getByCode($kode);
                if ($check == NULL) {
                    $flash = '<div class="mx-5 alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Upload gagal!</strong> kode salah (apabila anda menambahkan soal ke materi sebelumnya).
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
                    session()->setFlashdata('flash', $flash);
                    return redirect()->to(base_url('admin/kuis_soal'));
                } else {
                    $path = ROOTPATH . "/../public_html/img/kuis/" . $kode;
                    $path = $path . '/soal';

                    foreach ($imagefile as $img) {

                        $name = "jawaban_" . $i;
                        $no = explode(".", $img->getName())[0];
                        $data = [
                            'kode_kuis' => $kode,
                            'no_kuis'   => $no,
                            'soal'      => $img->getName(),
                            'jawaban'   => $this->request->getPost($name)
                        ];
                        $model->db->table('kuis_soal_jawaban')->insert($data);
                        $img->move($path);

                        $i++;
                    }
                    $flash = '<div class="mx-5 alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Upload sukses!</strong> soal berhasil ditambahkan.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
                    session()->setFlashdata('flash', $flash);
                    return redirect()->to(base_url('admin/kuis_soal'));
                }
            }
        } else {
            $flash = '<div class="mx-5 alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Upload gagal!</strong> format input salah.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url('admin/kuis_soal'))->withInput();
        }
    }

    public function kuis_pembahasan()
    {
        helper('kode');
        $model = new Kuis_Model();

        $kuis = $model->findAll();

        $data = [
            'data'      => $kuis,
            'active'    => 'kuis_pembahasan',
            'css'       => 'admin/kuis_soal.css'
        ];

        $data['title'] = 'Pembahasan';
        return view('admin/upload_pembahasan_kuis', $data);
    }

    function get_kode()
    {
        $rules = [
            'materi' => 'required'
        ];
        if ($this->validate($rules)) {
            $materi = $this->request->getPost('materi');
            $model = new Kuis_Model();

            $kode = $model->getByMateri($materi);

            $status['kode'] = $kode[0]['kode_kuis'];
            $status['status'] = 1;
            $status['pesan'] = '';
        } else {
            $status['status'] = 0;
            $status['pesan'] = "Materi harus dipilih";
        }
        echo json_encode($status);
    }

    public function upload_kuis_pembahasan()
    {
        $rules = [
            'kode' => [
                'label'  => 'Kode',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Kode harus diisi'
                ]
            ],
            'kode' => [
                'label'  => 'Kode',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Kode harus diisi'
                ]
            ],
            'file' => 'uploaded[file]|mime_in[file,image/jpg,image/jpeg,image/png]'
        ];
        if ($this->validate($rules)) {
            $kode = $this->request->getPost('kode');
            $imagefile = $this->request->getFileMultiple('file');
            $path = ROOTPATH . "/../public_html/img/kuis/" . $kode;
            $path = $path . '/pembahasan';

            $model = new KuisSoalJawaban_Model();

            $check = $model->getByCode($kode);

            if ($check == NULL) {
                $flash = '<div class="mx-5 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Upload gagal!</strong> tidak ada soal yang sesuai kode.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
                session()->setFlashdata('flash', $flash);
                return redirect()->to(base_url('admin/kuis_pembahasan'));
            } else {
                foreach ($imagefile as $img) {

                    $no = explode(".", $img->getName())[0];
                    $check = $model->getSoal($kode, $no);

                    if ($check == NULL) {
                        $flash = '<div class="mx-5 alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Upload gagal!</strong> tidak ada soal no ' . $no . '. Mohon upload soal tersebut sebelum mengupload pembahasan.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                        session()->setFlashdata('flash', $flash);
                        return redirect()->to(base_url('admin/kuis_pembahasan'));
                    } else {
                        if ($check[0]['pembahasan'] == NULL) {
                            $model->db->table('kuis_soal_jawaban')
                                ->set('pembahasan', $img->getName())
                                ->where('id', $check[0]['id'])
                                ->update();
                            $img->move($path);
                        } else {
                            $flash = '<div class="mx-5 alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Upload gagal!</strong> pembahasan untuk no ' . $no . ' sudah tersedia.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
                            session()->setFlashdata('flash', $flash);
                            return redirect()->to(base_url('admin/kuis_pembahasan'))->withInput();
                        }
                    }
                }
                $flash = '<div class="mx-5 alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Upload sukses!</strong> pembahasan berhasil ditambahkan.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
                session()->setFlashdata('flash', $flash);
                return redirect()->to(base_url('admin/kuis_pembahasan'));
                die();
            }
        } else {
            $flash = '<div class="mx-5 alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Upload gagal!</strong> format input salah.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url('admin/kuis_pembahasan'))->withInput();
        }
    }

    public function edit_soal_kuis()
    {
        if ($this->request->getPost('kode') == null) {
            $model = new Kuis_Model();

            $kuis = $model->findAll();
            $data = [
                'data'      => $kuis,
                'active'    => 'kuis_edit',
            ];
            $data['title'] = 'Edit Kuis';
            return view('admin/edit_kuis', $data);
        } else {
            $kode = $this->request->getPost('kode');

            $model = new KuisSoalJawaban_Model();
            $kuis = $model->getByCode($kode);
            $data = [
                'data'      => $kuis,
                'active'    => 'kuis_edit',
            ];
            $data['title'] = 'Edit Soal';
            return view('admin/edit_soal_kuis', $data);
        }
    }

    public function edit_jawaban()
    {
        $id = $this->request->getPost('id');
        $jawaban = $this->request->getPost('edit_jawaban');

        $model = new Kuis_Model();

        try {
            $model->db->table('kuis_soal_jawaban')
                ->set('jawaban', $jawaban)
                ->where('id', $id)
                ->update();

            $flash = '<div class="mx-5 alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Edit jawaban sukses!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url('admin/edit_soal_kuis'));
        } catch (Throwable $th) {
            $flash = '<div class="mx-5 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Edit jawaban gagal!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url('admin/edit_soal_kuis'));
        }
    }

    public function hapus_kuis($kode)
    {
        function removedir($path)
        {
            $files = glob($path . '/*');
            foreach ($files as $file) {
                is_dir($file) ? removedir($file) : unlink($file);
            }
            rmdir($path);
        }

        $path = ROOTPATH . "/../public_html/img/kuis/" . $kode;

        if (is_dir($path)) {
            removedir($path);
        }

        $model = new Kuis_Model();

        try {
            $model->db->table('kuis')
                ->where('kode_kuis', $kode)
                ->delete();

            $flash = '<div class="mx-5 alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Hapus kuis sukses!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url('admin/edit_soal_kuis'));
        } catch (Throwable $e) {
            $flash = '<div class="mx-5 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Penambahan jadwal kuis gagal!</strong> (' . $e . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url('admin/edit_soal_kuis'));
        }
    }

    public function add_jadwal_tryout()
    {
        $title = $this->request->getPost('title');
        $start = new Time($this->request->getPost('datetime'));
        $end = date( "Y-m-d H:i:s", strtotime( "$start + 4 hours" ));

        $id_kelases = $this->request->getPost('kelas[]');
        $id_kelas = "";
        for ($i=0; $i<sizeof($id_kelases); $i++) {
            if ($i==0) {
                $id_kelas=$id_kelases[$i];
            } else {
                $id_kelas=$id_kelas.','.$id_kelases[$i];
            }
        }

        try {
            $model = new Jadwal_Model();

            $data = [
                'title'         => $title,
                'kode_kelas'    => $id_kelas,
                'start_event'   => $start,
                'end_event'     => $end,
                'jenis'         => 2,
                'class_name'    => 'success',
            ];
            $model->insert($data);
            
            if (!empty($this->request->getFile('thumbnailTryOut'))) {
                $data = $model->where('title', $title)->orderBy('id', 'desc')->findAll();
                $thumbnail = $this->request->getFile('thumbnailTryOut');
                $thumbnail->move('./img/tryout/Thumbnail', $data[0]['id'].'.jpg');
            }

            $flash = '<div class="mx-5 alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Penambahan jadwal kuis sukses!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);

            return redirect()->to(base_url('admin/aturJadwalTryout'));
        } catch (Throwable $e) {
            $flash = '<div class="mx-5 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Penambahan jadwal kuis gagal!</strong> (' . $e . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url('admin/aturJadwalTryout'));
        }
    }
    
    public function soal_tryout()
    {
        if (isset($_POST['submit'])) {
            $rules = [
                'soal[]' => [
                    'label' => 'Soal',
                    'rules' => 'uploaded[soal]',
                    'errors' => [
                        'uploaded' => 'File soal gagal diunggah'
                    ]
                ],
                'bagian' => [
                    'label' => 'Bagian',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Pilih bagian'
                    ]
                ]
            ];
            
            if ($this->validate($rules)) {
                $model = new Tryout_Model();
                $soals = $this->request->getFiles()['soal'];

                $tryout = [
                    'event_id' => $this->request->getPost('event_id'),
                    'soal' => $this->request->getPost('materi'),
                ];

                $bagian = explode('-', $this->request->getPost('bagian'));

                $j=1;
                $i=$bagian[0];
                foreach ($soals as $soal) {
                    $jawab = (!empty($this->request->getPost('jawaban'.(string)$j))) ? $this->request->getPost('jawaban'.(string)$j) : 'A';
                    $tryout['jawaban'] = $jawab;
                    $tryout['nomor'] = $i;
                    $tryout['materi'] = $this->request->getPost('subbab'.$j);
                    $model->save($tryout);
                    $soal->move('img/tryout/'.$tryout['soal'].' - '.$tryout['event_id'].'/soal', $i.'.jpg', true);
                    $j++;
                    $i++;
                }

                session()->setFlashdata('flash', "<script>swal('Sukses', 'Berhasil mengunggah soal & pembahasan', 'success')</script>");
				return redirect()->to(base_url('admin/aturJadwalTryout'));
            } else {
                session()->setFlashdata('flash', "<script>swal('Gagal', 'Form tidak diisi dengan sempurna', 'error')</script>");
				return redirect()->to(base_url('admin/aturJadwalTryout'));
            }
        }

        return redirect()->to(base_url('admin/aturJadwalTryout'));
    }

    public function edit_jadwal_tryout()
    {
        $id = $this->request->getPost('id');
        $start = new Time($this->request->getPost('datetime'));
        $end = date( "Y-m-d H:i:s", strtotime( "$start + 23 hours 59 Minutes" ));
        $kelases = $this->request->getPost('kelas[]');
        $kelas="";
        for ($i=0; $i<sizeof($kelases); $i++) {
            if ($i==0) {
                $kelas=$kelases[$i];
            } else {
                $kelas=$kelas.','.$kelases[$i];
            }
        }

        $model = new Jadwal_Model();

        try {
            $model->set('start_event', $start)
                ->set('end_event', $end)
                ->set('kode_kelas', $kelas)
                ->where('id', $id)
                ->update();

            $flash = '<div class="mx-5 alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Edit jadwal kuis sukses!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url('admin/aturJadwalTryout'));
        } catch (Throwable $e) {
            $flash = '<div class="mx-5 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Edit jadwal kuis gagal!</strong> (' . $e . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url('admin/aturJadwalTryout'));
        }
    }

    public function kuis_jadwal()
    {
        $model = new Jadwal_Model();
        $db = \Config\Database::connect();

        $kuis = $db->table('kuis')->join('events', 'events.id=kuis.event_id', 'right')
                    ->where('events.jenis', '3')
                    ->orderBy('events.start_event', 'asc')->get()->getResultArray();

        $class = array();
        $i = 0;

        $model = new Kelas_Model;
        foreach ($kuis as $id) {
            $kelas="";
            $j=0;
            foreach (explode(',', $id['kode_kelas']) as $kls) {
                $cls = $model->getByid($kls);
                if ($j==0) {
                    $kelas = $cls[0]['nama'];
                } else {
                    $kelas = $kelas.','.$cls[0]['nama'];
                }
                $j++;
            }
            $class[$i] = $kelas;
            $i++;
        }

        $materi = new Materi_Model();

        $kelas = $model->findAll();

        $submateri = $db->table('submateri')->get()->getResultArray();

        $data = [
            'kelas'         => $class,
            'data'          => $kuis,
            'list_kelas'    => $kelas,
            'list_materi'   => $materi->findAll(),
            'subbabs'       => $submateri,
            'active'        => 'kuis_jadwal',
        ];
        $data['title'] = 'Jadwal Kuis';
        return view('admin/jadwal_kuis', $data);
    }

    public function add_jadwal_kuis()
    {
        $materi = $this->request->getPost('materi');
        $start = new Time($this->request->getPost('datetime'));
        $end = new Time($start . ' + 23 Hours 59 Minutes');

        $id_kelases = $this->request->getPost('kelas[]');
        if (is_array($id_kelases)===false) {
            $id_kelases[0]=$id_kelases;
        }
        $id_kelas = "";
        for ($i=0; $i<sizeof($id_kelases); $i++) {
            if ($i==0) {
                $id_kelas=$id_kelases[$i];
            } else {
                $id_kelas=$id_kelas.','.$id_kelases[$i];
            }
        }

        try {
            $model = new Jadwal_Model();

            // $check = $model->where('title', $materi)->where('kode_kelas', $id_kelases)->first();
            // if ($check != NULL) {
            //     $flash = '<div class="mx-5 alert alert-danger alert-dismissible fade show" role="alert">
            //         <strong>Penambahan jadwal kuis gagal!</strong> jadwal kuis ' . $materi . ' untuk kelas tersebut sudah ada.
            //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            //             <span aria-hidden="true">&times;</span>
            //         </button>
            //     </div>';
            //     session()->setFlashdata('flash', $flash);

            //     return redirect()->to(base_url('admin/kuis_jadwal'));
            // }

            $data = [
                'title'         => $materi,
                'kode_kelas'    => $id_kelas,
                'start_event'   => $start,
                'end_event'     => $end,
                'jenis'         => 3,
                'class_name'    => 'important',
                'allDay'        => 1,
            ];
            $model->insert($data);
            
            if (!empty($this->request->getFile('thumbnailKuis'))) {
                $data = $model->where('title', $materi)->orderBy('id', 'desc')->findAll();
                $thumbnail = $this->request->getFile('thumbnailKuis');
                $thumbnail->move('./img/kuis/Thumbnail', $data[0]['id'].'.jpg');
            }

            $flash = '<div class="mx-5 alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Penambahan jadwal kuis sukses!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);

            return redirect()->to(base_url('admin/kuis_jadwal'));
        } catch (Throwable $e) {
            $flash = '<div class="mx-5 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Penambahan jadwal kuis gagal!</strong> (' . $e . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url('admin/kuis_jadwal'));
        }
    }

    public function hapus_jadwal($id)
    {
        $model = new Jadwal_Model();

        try {
            $model->db->table('events')
                ->where('id', $id)
                ->delete();

            $flash = '<div class="mx-5 alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Hapus jadwal sukses!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url('admin'));
        } catch (Throwable $e) {
            $flash = '<div class="mx-5 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Penghapusan jadwal kuis gagal!</strong> (' . $e . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url('admin'));
        }
    }

    public function edit_jadwal_kuis()
    {
        $id = $this->request->getPost('id');
        $start = new Time($this->request->getPost('datetime'));
        $end = new Time($start . ' + 23 Hours 59 Minutes');
        $kelases = $this->request->getPost('kelas[]');
        $kelas="";
        for ($i=0; $i<sizeof($kelases); $i++) {
            if ($i==0) {
                $kelas=$kelases[$i];
            } else {
                $kelas=$kelas.','.$kelases[$i];
            }
        }

        $model = new Jadwal_Model();

        try {
            $model->set('start_event', $start)
                ->set('end_event', $end)
                ->set('kode_kelas', $kelas)
                ->where('id', $id)
                ->update();

            $flash = '<div class="mx-5 alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Edit jadwal kuis sukses!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url('admin/kuis_jadwal'));
        } catch (Throwable $e) {
            $flash = '<div class="mx-5 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Edit jadwal kuis gagal!</strong> (' . $e . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url('admin/kuis_jadwal'));
        }
    }

    public function soal_kuis()
    {
        if (isset($_POST['submit'])) {
            $rules = [
                'subbab' => [
                    'label' => 'Subbab',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Subbab harus dipilih'
                    ]
                ],
                'soal[]' => [
                    'label' => 'Soal',
                    'rules' => 'uploaded[soal]',
                    'errors' => [
                        'uploaded' => 'File soal gagal diunggah'
                    ]
                ],
                'pembahasan[]' => [
                    'label' => 'Soal',
                    'rules' => 'uploaded[pembahasan]',
                    'errors' => [
                        'uploaded' => 'File soal gagal diunggah'
                    ]
                ],
                'jawaban1' => [
                    'label' => 'Jawaban 1',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Jawaban nomor 1 belum dipilih'
                    ]
                ],
                'jawaban2' => [
                    'label' => 'Jawaban 2',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Jawaban nomor 2 belum dipilih'
                    ]
                ],
                'jawaban3' => [
                    'label' => 'Jawaban 3',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Jawaban nomor 3 belum dipilih'
                    ]
                ],
                'jawaban4' => [
                    'label' => 'Jawaban 4',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Jawaban nomor 4 belum dipilih'
                    ]
                ],
                'jawaban5' => [
                    'label' => 'Jawaban 5',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Jawaban nomor 5 belum dipilih'
                    ]
                ],
                'jawaban6' => [
                    'label' => 'Jawaban 6',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Jawaban nomor 6 belum dipilih'
                    ]
                ],
                'jawaban7' => [
                    'label' => 'Jawaban 7',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Jawaban nomor 7 belum dipilih'
                    ]
                ],
                'jawaban8' => [
                    'label' => 'Jawaban 8',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Jawaban nomor 8 belum dipilih'
                    ]
                ],
                'jawaban9' => [
                    'label' => 'Jawaban 9',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Jawaban nomor 9 belum dipilih'
                    ]
                ],
                'jawaban10' => [
                    'label' => 'Jawaban 10',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Jawaban nomor 10 belum dipilih'
                    ]
                ],
            ];
            
            if ($this->validate($rules)) {
                $model = new Kuis_Model();
                $jawaban = "";
                $soals = $this->request->getFiles()['soal'];
                $pembahasans = $this->request->getFiles()['pembahasan'];

                for ($i=1; $i<=10; $i++) {
                    if ($i!=10) {
                        $jawaban=$jawaban.$this->request->getPost('jawaban'.(string)$i).",";
                    } else {
                        $jawaban=$jawaban.$this->request->getPost('jawaban'.(string)$i);
                    }
                }

                $kuis = [
                    'event_id' => $this->request->getPost('event_id'),
                    'soal' => $this->request->getPost('materi'),
                    'jawaban' => $jawaban,
                    'pembahasan' => $this->request->getPost('materi'),
                    'materi' => $this->request->getPost('subbab'),
                ];

                if (empty($model->where('event_id', $kuis['event_id'])->first())) {
                    $model->save($kuis);
                } else {
                    $model->where('event_id', $kuis['event_id'])->set($kuis)->update();
                }

                $i=1;
                foreach ($soals as $soal) {
                    $soal->move('img/kuis/'.$kuis['soal'].' - '.$kuis['event_id'].'/soal', $i.'.jpg', true);
                    $i++;
                }

                $i=1;
                foreach ($pembahasans as $pembahasan) {
                    $pembahasan->move('img/kuis/'.$kuis['soal'].' - '.$kuis['event_id'].'/pembahasan', $i.'.jpg', true);
                    $i++;
                }

                session()->setFlashdata('flash', "<script>swal('Sukses', 'Berhasil mengunggah soal & pembahasan', 'success')</script>");
				return redirect()->to(base_url('admin/kuis_jadwal'));
            } else {
                session()->setFlashdata('flash', "<script>swal('Gagal', 'Form tidak diisi dengan sempuran', 'error')</script>");
				return redirect()->to(base_url('admin/kuis_jadwal'));
            }
        }

        return redirect()->to(base_url('admin/kuis_jadwal'));
    }

    public function hasil_kuis()
    {
        $model = new HasilKuis_Model();

        $hasil = $model->findAll();

        $id = array();
        $user = array();
        $kelas = array();
        $event = array();
        $benar = array();
        $salah = array();
        $kosong = array();
        $skor = array();
        $i = 0;
        foreach ($hasil as $k) {
            $user_model = new Users_Model();
            $users = $user_model->getByUsername($k['username']);
            $event_model = new Jadwal_Model();
            $events = $event_model->join('kuis', 'kuis.event_id=events.id')->where('kuis.id', $k['kuis'])->findAll();
            $kelas_model = new Kelas_Model();
            $class = $kelas_model->getById($users[0]['kode_kelas']);

            $id[$i] = $k['id'];
            $user[$i] = $users[0]['nama'];
            $kelas[$i] = $class[0]['nama'];
            $event[$i] = $events[0]['title'];
            $benar[$i] = $k['benar'];
            $salah[$i] = $k['salah'];
            $kosong[$i] = $k['kosong'];
            $skor[$i] = $k['benar'].'/10';

            $i++;
        }
        $data = [
            'id'        => $id,
            'user'      => $user,
            'kelas'     => $kelas,
            'event'     => $event,
            'benar'     => $benar,
            'salah'     => $salah,
            'kosong'    => $kosong,
            'skor'      => $skor,
            'active'    => 'kuis_hasil',
        ];
        $data['title'] = 'Hasil Kuis';
        return view('admin/hasil_kuis', $data);
    }

    public function hapus_hasil($id)
    {
        $model = new KuisHasil_Model();

        try {
            $model->db->table('kuis_hasil')
                ->where('id', $id)
                ->delete();

            $flash = '<div class="mx-5 alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Hapus hasil kuis sukses!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url('admin/hasil_kuis'));
        } catch (Throwable $e) {
            $flash = '<div class="mx-5 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Penghapusan hasil kuis gagal!</strong> (' . $e . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url('admin/hasil_kuis'));
        }
    }

    public function latihan()
    {
        $model = new Latihan_Model();
        $materi = $model->getMateri('materi');

        $latihan = array();
        $i = 0;

        foreach ($materi as $mt) {
            $model = new Latihan_Model();
            $result = $model->getByMateri($mt['materi']);
            $latihan[$i] = $result;
            $i++;
        }

        $model = new Kelas_Model();
        $kelas = $model->findAll();

        $kelas_out = array();
        $j = 0;
        foreach ($latihan as $dt) {
            $i = 0;
            foreach ($dt as $d) {
                // dd($d);
                $result = $model->getById($d['kelas_id']);
                $latihan[$j][$i]['kelas'] = $result[0]['nama'];
                $i++;
            }
            $j++;
        }
        $model = new Materi_Model();

        $data = [
            'materi'    => $model->findAll(),
            'latihan'   => $latihan,
            'kelas'     => $kelas,
            'active'    => 'latihan',
        ];

        // dd($data);
        $data['title'] = 'Latihan';
        return view('admin/latihan', $data);
    }

    public function view_pdf($file)
    {
        if (is_file(ROOTPATH . "/../public_html/latihan/" . $file)) {
            $data = [
                'file'      => $file,
                'active'    => 'latihan',
            ];
            $data['title'] = 'Latihan';
            return view('admin/view_latihan', $data);
        } else {
            $flash = '<div class="alert alert-danger alert-dismissible fade show w-50 mx-auto" role="alert">
                    <strong>File tidak ada!</strong> hubungi admin untuk informasi lebih lanjut.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);

            $model = new Latihan_Model();
            $latihan = $model->findAll();
            $data = [
                'data'      => $latihan,
                'active'    => 'latihan',
            ];
            $data['title'] = 'Latihan';
            return view('admin/view_latihan', $data);
        }
    }

    public function hapus_latihan($id)
    {
        $model = new Latihan_Model();

        try {
            $latihan = $model->getById($id);
            $path = ROOTPATH . "/../public_html/latihan/" . $latihan[0]['pdf_path'];

            if (is_file($path)) {
                unlink($path);
            }

            $model->where('id', $id)
                ->delete();

            $flash = '<div class="mx-5 alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Hapus latihan sukses!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url('admin/latihan'));
        } catch (Throwable $e) {
            $flash = '<div class="mx-5 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Hapus latihan gagal!</strong> (' . $e . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url('admin/latihan'));
        }
    }

    public function hapus_materi($id)
    {
        $model = new Latihan_Model();

        try {
            $latihan = $model->getByMateri($id);
            foreach ($latihan as $lt) {
                $path = ROOTPATH . "/../public_html/latihan/" . $lt['pdf_path'];

                if (is_file($path)) {
                    unlink($path);
                }
            }

            $model->where('materi', $id)
                ->delete();

            $flash = '<div class="mx-5 alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Hapus latihan sukses!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url('admin/latihan'));
        } catch (Throwable $e) {
            $flash = '<div class="mx-5 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Hapus latihan gagal!</strong> (' . $e . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url('admin/latihan'));
        }
    }

    public function add_latihan()
    {
    
        $materi = $this->request->getPost('materi');
        $files = $this->request->getFiles('files')['files'];
        $kelas = $this->request->getPost('kelas');
        $path = ROOTPATH . "/../public_html/latihan";
        $model = new Latihan_Model();
        
        foreach ($kelas as $k) {
            $i = 0;
            foreach ($files as $file) {
                $i++;
                
                if ($file->isValid() && ($file->getClientExtension() == "pdf")) {
                    $check = $model->getSpecific($materi, $k);
        
                    if ($check == NULL) {
                        $data = [
                            'materi'        => $materi,
                            'pdf_path'      => $file->getName(),
                            'kelas_id'      => $k
                        ];
                        $model->db->table('latihan')->insert($data);
        
                        $flash = '<div class="mx-5 alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Upload sukses!</strong> latihan berhasil ditambahkan.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>';
                        session()->setFlashdata('flash', $flash);
                    } else {
                        if ($check[0]['pdf_path'] == $file->getName()) {
                            $flash = '<div class="mx-5 alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Upload gagal!</strong> latihan sudah ada atau nama file sama.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>';
                            session()->setFlashdata('flash', $flash);
                        } else {
                            $data = [
                                'materi'        => $materi,
                                'pdf_path'      => $file->getName(),
                                'kelas_id'      => $k
                            ];
                            $model->db->table('latihan')->insert($data);
        
                            $flash = '<div class="mx-5 alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Upload sukses!</strong> latihan berhasil ditambahkan.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>';
                            session()->setFlashdata('flash', $flash);
                        }
                    }
                } else {
                    $flash = '<div class="mx-5 alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Upload gagal!</strong> format input salah.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
                    session()->setFlashdata('flash', $flash);
                    return redirect()->to(base_url('admin/latihan'))->withInput();
                }
            }
        }
        foreach($files as $file) {
            $file->move($path);
        }
        return redirect()->to(base_url('admin/latihan'));
    }

    public function daftarAdmin()
    {
        $data['active'] = 'daftar admin';
        $data['title'] = 'Daftar Admin';
        return view('admin/daftarAdmin', $data);
    }

    public function tampilkanAdmin()
    {
        $admin_model = new Admin_model();
        $data['admin'] = $admin_model->findAll();
        $data['title'] = 'Tampilkan Admin';
        return view('admin/tampilkanAdmin', $data);
    }

    public function ubahStatusAdmin($id, $status)
    {
        $user_model = new Admin_model();
        $user_model->update($id, ['status' => $status]);
        $user = $user_model->find($id);
        if ($user['status'] == 0) {
            return '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        berhasil menonaktifkan admin ' . $user['nama'] . '
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
        }
        return '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    berhasil mengaktifkan admin ' . $user['nama'] . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
    }

    public function tolakPembayaran($id) {
        $model = new Users_model();
        
        $bukti = $model->where('id', $id)->first()['bukti_pembayaran'];
        unlink('./img/bukti-pembayaran/'.$bukti);
        
        $model->update($id, ['status' => '0', 'bukti_pembayaran' => '']);
        if ($model->where('id', $id)->first()['status']=='0') {
            return '1';
        } else {
            return '0';
        }
    }
    
    public function tampilkanUbahPaket()
    {
        $db = \Config\Database::connect();
        $data['user'] = $db->table('ubahpaket')->join('users', 'users.username=ubahpaket.user')->get()->getResultArray();
        $data['title'] = 'Konfirmasi Pengajuan Ubah Paket';
        return view('admin/tampilkanUbahPaket', $data);
    }

    public function ubahPaket()
    {
        $paket_model = new Paket_Model();
        $data['paket'] = $paket_model->findAll();
        $data['active'] = 'ubah paket';
        $data['title'] = 'Konfirmasi Pengajuan Ubah Paket';
        return view('admin/konfirmasiUbahPaket', $data);
    }

    public function konfirmasiUbahPaket($id, $kode)
    {
        $model = new Users_Model();
        $model->update($id, ['kode_paket' => $kode, 'kode_kelas' => '']);
        $user = $model->where('id', $id)->first();

        $model = new UbahPaket_Model();
        $ubahpaket = $model->where('user', $user['username'])->first();
        $model->where('user', $user['username'])->delete();

        unlink('./img/ubahpaket/'.$ubahpaket['buktiPembayaran']);

        $model = new Notifikasi_Model();
        $model->save(['username' => $user['username'], 'pesan' => 'Selamat, pengajuan ubah paketmu disetujui.']);

        if (($user['kode_paket'] == $kode) && (empty($model->where('user', $user['username'])->first()))) {
            return '1';
        } else {
            return '0';
        }
    }

    public function tolakUbahPaket($username)
    {
        $model = new UbahPaket_Model();
        $ubahpaket = $model->where('user', $username)->first();
        $model->where('user', $username)->delete();
        unlink('./img/ubahpaket/'.$ubahpaket['buktiPembayaran']);

        $model = new Notifikasi_Model();
        $model->save(['username' => $username, 'pesan' => 'Mohon maaf, pengajuan ubah paketmu ditolak karena satu dan lain hal.']);

        if (empty($model->where('user', $user['username'])->first())) {
            return '1';
        } else {
            return '0';
        }
    }
}