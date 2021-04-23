<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;
use App\Models\Users_Model;
use App\Models\Jadwal_Model;
use App\Models\Kelas_Model;
use App\Models\Rekaman_Model;
use App\Models\Paket_Model;
use App\Models\Kuis_Model;
use App\Models\KuisSoalJawaban_Model;

class Admin extends BaseController
{
    public function index()
    {
        $data['active'] = 'dashboard';
        return view('admin/index', $data);
    }

    public function aturJadwalPertemuan()
    {
        $data['active'] = 'atur jadwal pertemuan';
        $model = new Kelas_Model();
        $data['kelas'] = $model->findAll();
        return view('admin/aturJadwalPertemuan', $data);
    }

    public function aturJadwalTryout()
    {
        $data['active'] = 'atur jadwal tryout';
        $model = new Kelas_Model();
        $data['kelas'] = $model->findAll();
        return view('admin/aturJadwalTryout', $data);
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
            }
            $model = new Jadwal_Model();
            $model->save($data);
        }
    }

    public function hapusJadwal()
    {
        $id = $this->request->getPost('id');
        $model = new Jadwal_Model();
        $model->delete($id);
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
        $model = new Rekaman_Model();
        $data['rekamans'] = $model->getAll();
        $data['active'] = 'Kelas';

        $data['css'] = 'admin/rekaman.css';

        return view('admin/rekaman', $data);
    }

    public function uploadRekaman()
    {
        $data['active'] = 'Kelas';
        return view('admin/uploadRekaman', $data);
    }

    public function tambahRekaman()
    {
        if (isset($_POST['submit'])) {
            $data = [
                'pertemuan' => $this->request->getPost('pertemuan'),
                'materi' => $this->request->getPost('materi'),
                'rekaman' => $this->request->getFile('rekaman'),
                'thumbnailRekaman' => $this->request->getFile('thumbnailRekaman')
            ];
            $rules = [
                'pertemuan' => [
                    'label'  => 'Pertemuan',
                    'rules'  => 'required|max_length[3]|is_unique[rekaman.id]',
                    'errors' => [
                        'required' => 'Pertemuan harus diisi',
                        'max_length' => 'Pertemuan maksimal terdiri dari 3 digit',
                        'is_unique' => 'Pertemuan tersebut telah diunggah'
                    ]
                ],
                'materi' => [
                    'label'  => 'Materi',
                    'rules'  => 'required|max_length[50]',
                    'errors' => [
                        'required' => 'Materi harus diisi',
                        'max_length' => 'Nama materi berisi maksimal 50 karakter (termasuk spasi)'
                    ]
                ],
                'rekaman' => [
                    'label' => 'upload',
                    'rules' => 'uploaded[rekaman]|ext_in[rekaman,mp4]|max_size[rekaman,100000]',
                    'errors' => [
                        'uploaded' => 'Silahkan pilih video rekaman kelas',
                        'ext_in' => 'Pilih file dengan format Mp4',
                        'max_size' => 'Ukuran file video tidak boleh melebihi 100 Mb'
                    ]
                ],
                'thumbnailRekaman' => [
                    'label' => 'upload',
                    'rules' => 'uploaded[thumbnailRekaman]|is_image[thumbnailRekaman]|max_size[rekaman,5120]',
                    'errors' => [
                        'uploaded' => 'Silahkan pilih gambar thumbnail video rekaman kelas',
                        'is_image' => 'Pilih gambar dengan jenis gambar',
                        'max_size' => 'Ukuran file thumbnail tidak boleh melebihi 5 Mb'
                    ]
                ]
            ];

            $rekaman = $this->request->getFile('rekaman');
            $thumbnailRekaman = $this->request->getFile('thumbnailRekaman');

            if ($this->validate($rules)) {
                $data1 = [
                    'id' => $this->request->getPost('pertemuan'),
                    'materi' => $this->request->getPost('materi'),
                    'ext_tn' => $thumbnailRekaman->guessExtension()
                ];

                $model = new Rekaman_Model();
                $model->postRekaman($data1);

                $rekaman->move('./vid/Rekaman Kelas/', 'Pertemuan ' . $data['pertemuan'] . ' - ' . $data['materi'] . '.mp4');
                $thumbnailRekaman->move('./img/Rekaman Kelas/', 'Pertemuan ' . $data['pertemuan'] . ' - ' . $data['materi'] . '.' . $thumbnailRekaman->guessExtension());

                session()->setFlashdata('flash', "<script>swal('Upload Berhasil!','Rekaman Kelas Berhasil Diupload','success')</script>");
                return redirect()->to(base_url() . '/admin/rekaman');
            } else {
                $errors = $this->validator->getErrors();
                session()->setFlashdata($errors);

                session()->setFlashdata('flash', "<script>swal('Upload Gagal!','Rekaman Kelas Gagal Diupload. Pastikan Anda telah memasukkan data dan memilih file dengan benar','error')</script>");
                return redirect()->to(base_url() . '/admin/rekaman');
            }
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
        return view('admin/tampilkanPeserta', $data);
    }

    public function ubahKelasPeserta()
    {
        $id = $this->request->getPost('id');
        $kode_kelas = $this->request->getPost('kode_kelas');
        $model = new Users_Model();
        $model->update($id, ['kode_kelas' => $kode_kelas]);
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
            return redirect()->to(base_url() . '/admin/daftarPeserta');
        } else {
            $flash = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Gagal</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url() . '/admin/daftarPeserta');
        }
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
        return view('admin/tampilkanKonfirmasiPeserta', $data);
    }

    public function konfirmasiPeserta()
    {
        $paket_model = new Paket_Model();
        $data['paket'] = $paket_model->findAll();
        $data['active'] = 'konfirmasi peserta';
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
                    mkdir($path . '/soal', 0700, true);
                    mkdir($path . '/pembahasan', 0700, true);
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
                        return redirect()->back();
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
                return redirect()->back();
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
                    return redirect()->back();
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
                    return redirect()->back();
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
            return redirect()->back()->withInput();
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
                return redirect()->back();
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
                        return redirect()->back();
                    } else {
                        if ($check[0]['pembahasan'] == NULL) {
                            $model->db->table('kuis_soal_jawaban')
                                ->set('pembahasan', $img->getName())
                                ->where('id', $check[0]['id'])
                                ->update();
                            $img->move($path);
                        } else {
                            $flash = '<div class="mx-5 alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Upload gagal!</strong> pembahasan untuk no ' . $no . ' sudah tersedia. Apabila anda akan mengeditnya, mohon melalui <a href="' . base_url('admin/edit_kuis') . '">edit kuis</a>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
                            session()->setFlashdata('flash', $flash);
                            return redirect()->back()->withInput();
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
                return redirect()->back();
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
            return redirect()->back()->withInput();
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
            return view('admin/edit_kuis', $data);
        } else {
            $kode = $this->request->getPost('kode');

            $model = new KuisSoalJawaban_Model();
            $kuis = $model->getByCode($kode);
            $data = [
                'data'      => $kuis,
                'active'    => 'kuis_edit',
            ];
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
            return redirect()->back();
        } catch (Throwable $th) {
            $flash = '<div class="mx-5 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Edit jawaban gagal!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->back();
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
            return redirect()->back();
        } catch (Throwable $e) {
            $flash = '<div class="mx-5 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Penambahan jadwal kuis gagal!</strong> (' . $e . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->back();
        }
    }

    public function kuis_jadwal()
    {
        $model = new Jadwal_Model();

        $kuis = $model->getByJenis('3');

        $class = array();
        $i = 0;

        $model = new Kelas_Model;
        foreach ($kuis as $id) {
            $cls = $model->getByid($id['kode_kelas']);
            $kelas = $cls[0]['nama'];
            $class[$i] = $kelas;
            $i++;
        }

        $kelas = $model->findAll();

        $code = array();
        $i = 0;

        $model = new Kuis_Model;
        foreach ($kuis as $id) {
            $cd = $model->getByMateri($id['title']);
            $kode = $cd[0]['kode_kuis'];
            $code[$i] = $kode;
            $i++;
        }

        $kode = $model->findAll();

        $data = [
            'kelas'         => $class,
            'kode'          => $code,
            'data'          => $kuis,
            'list_kelas'    => $kelas,
            'list_materi'   => $kode,
            'active'        => 'kuis_jadwal',
        ];
        return view('admin/jadwal_kuis', $data);
    }

    public function add_jadwal_kuis()
    {
        $id_kelas = $this->request->getPost('kelas');
        $materi = $this->request->getPost('materi');
        $start = new Time($this->request->getPost('datetime'));
        $end = new Time($start . ' + 23 Hours 59 Minutes');

        try {
            $model = new Jadwal_Model();

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

            $flash = '<div class="mx-5 alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Penambahan jadwal kuis sukses!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);

            return redirect()->back();
        } catch (Throwable $e) {
            $flash = '<div class="mx-5 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Penambahan jadwal kuis gagal!</strong> (' . $e . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->back();
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
                    <strong>Hapus kuis sukses!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->back();
        } catch (Throwable $e) {
            $flash = '<div class="mx-5 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Penghapusan jadwal kuis gagal!</strong> (' . $e . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->back();
        }
    }

    public function edit_jadwal_kuis()
    {
        $id = $this->request->getPost('id');
        $start = new Time($this->request->getPost('datetime'));
        $end = new Time($start . ' + 23 Hours 59 Minutes');

        $model = new Jadwal_Model();

        try {
            $model->set('start_event', $start)
                ->set('end_event', $end)
                ->where('id', $id)
                ->update();

            $flash = '<div class="mx-5 alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Edit jadwal kuis sukses!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->back();
        } catch (Throwable $e) {
            $flash = '<div class="mx-5 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Edit jadwal kuis gagal!</strong> (' . $e . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->back();
        }
    }
}
