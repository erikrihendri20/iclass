<?php

namespace App\Controllers;

use App\Models\Users_Model;
use App\Models\Admin_Model;
use App\Models\Paket_Model;
use App\Models\Catatan_Model;
use App\Models\Nilai_Model;
use App\Models\Notifikasi_model;

class Auth extends BaseController
{
    public function masuk()
    {
        if (isset($_POST['submit'])) {
            $model = new Users_Model();
            $identitas = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $user = $model->getByUserName($identitas);
            if ($user) {
                if (password_verify($password, $user[0]['password'])) {
                    if ($user[0]['status'] == 0) {
                        $data = [
                            'is_upload' => true,
                            'id' => $user[0]['id'],
                            'status' => $user[0]['status'],
                        ];
                        session()->set($data);
                        $flash = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            Silahkan mengupload bukti pembayaran untuk menikmati layanan kami
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                        session()->setFlashdata('flash', $flash);
                        return redirect()->to(base_url().'/auth/uploadBuktiPembayaran');
                    } elseif ($user[0]['status'] == 1) {
                        $data = [
                            'is_waiting' => true,
                            'id' => $user[0]['id'],
                            'status' => $user[0]['status'],
                        ];
                        session()->set($data);
                        $flash = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            Terimakasih telah melakukan pembayaran, admin akan segera memeriksa akun anda:D
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                        session()->setFlashdata('flash', $flash);
                        return redirect()->to(base_url().'/auth/ruangTunggu');
                    } else {
                        $model->where('id', $user[0]['id'])->set('last_login', date('y-m-d'))->update();

                        $data = [
                            'log' => true,
                            'id' => $user[0]['id'],
                            'nama' => $user[0]['nama'],
                            'kode-kelas' => $user[0]['kode_kelas'],
                            'jurusan' => $user[0]['jurusan'],
                            'kode-paket' => $user[0]['kode_paket'],
                            'telepon' => $user[0]['telepon'],
                            'email' => $user[0]['email'],
                            'username' => $user[0]['username'],
                            'bukti-pembayaran' => $user[0]['bukti_pembayaran'],
                            'status' => $user[0]['status'],
                            'sisa' => $user[0]['sisa'],
                            'bolos' => $user[0]['bolos'],
                        ];
                        session()->set($data);
                        
                        $model = new Notifikasi_model();
                        $notifikasi = $model->where('username', $data['username'])->first();

                        if (!empty($notifikasi)) {
                            $flash = "<script>Swal.fire({icon: 'warning', title: '', text: '".$notifikasi['pesan']."'});</script>";
                            $model->where('username', $notifikasi['username'])->delete();
                        }
                        session()->setFlashdata('flash', $flash);
                        return redirect()->to('peserta');
                    }
                } else {
                    $flash = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            password salah!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                    session()->setFlashdata('flash', $flash);
                    return redirect()->to('masuk');
                }
            } else {
                $flash = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            user tidak ditemukan!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                session()->setFlashdata('flash', $flash);
                return redirect()->to('masuk');
            }
        }
        $data['title'] = 'Masuk';
        $data['active'] = 'masuk';
        $data['css'] = 'auth/masuk.css';
        return view('auth/masuk', $data);
    }


    public function keluarAdmin()
    {
        session()->remove('logadmin');
        session()->remove('admin_id');
        session()->remove('admin_nama');
        $flash = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            sukses keluar:(
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
        session()->setFlashdata('flash', $flash);
        return redirect()->to('masukAdmin');
    }

    public function masukAdmin()
    {
        if (isset($_POST['submit'])) {
            $model = new Admin_model();
            $identitas = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $user = $model->getByUserName($identitas);
            if ($user) {
                if ($password == $user[0]['password']) {
                    $data = [
                        'logadmin' => true,
                        'admin_id' => $user[0]['id'],
                        'admin_nama' => $user[0]['nama'],
                        'admin_username' => $user[0]['username'],
                        'role' => $user[0]['role'],
                        'admin_status' => $user['0']['status']
                    ];
                    session()->set($data);
                    $flash = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            anda berhasil masuk:D
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                    session()->setFlashdata('flash', $flash);
                    return redirect()->to(base_url() . '/admin');
                } else {
                    $flash = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            password salah!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                    session()->setFlashdata('flash', $flash);
                    return redirect()->to('masukAdmin');
                }
            } else {
                $flash = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            user tidak ditemukan!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                session()->setFlashdata('flash', $flash);
                return redirect()->to('masukAdmin');
            }
        }
        $data['title'] = 'Masuk';
        return view('auth/masukAdmin');
    }

    public function daftarAdmin()
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
                'username' => [
                    'label'  => 'Username',
                    'rules'  => 'required|min_length[5]|is_unique[users.username]',
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
                        'min_length' => 'Password harus terdiri dari 8 karakter',
                    ]
                ],
                'konfirmasi-password' => [
                    'label'  => 'Konfirmasi password',
                    'rules'  => 'matches[password]',
                    'errors' => [
                        'matches' => 'Konfirmasi password tidak cocok',
                    ]
                ],
            ];
            if ($this->validate($rules)) {
                $model = new Admin_model();
                $newuser = [
                    'nama' => $this->request->getPost('nama'),
                    'username' => $this->request->getPost('username'),
                    'password' => $this->request->getPost('password'),
                    'role' => 2,
                    'status' => 0
                ];
                $model->save($newuser);
                $flash = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            ' . $newuser['nama'] . ' <strong>berhasil</strong> terdaftar <br>
                            selesaikan pembayaran untuk mendapatkan layanan iclass
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                session()->setFlashdata('flash', $flash);
                return redirect()->to('masukAdmin');
            } else {
                return redirect()->back()->withInput();
            }
        }
        $data['title'] = 'Daftar';
        return view('auth/daftarAdmin');
    }

    public function keluar()
    {
        session()->remove('log');
        session()->remove('id');
        session()->remove('nama');
        session()->remove('kelas_id');
        session()->remove('jurusan');
        session()->remove('pilih-paket');
        session()->remove('telepon');
        session()->remove('email');
        session()->remove('username');
        session()->remove('bukti-pembayaran');
        session()->remove('status');
        $flash = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            sukses keluar:(
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
        session()->setFlashdata('flash', $flash);
        return redirect()->to('masuk');
    }

    public function daftar()
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
                'kode-paket' => [
                    'label'  => 'Pilihan paket',
                    'rules'  => 'required',
                    'errors' => [
                        'required' => 'Pilihan Paket harus diisi'
                    ]
                ],
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
                    'rules'  => 'required|valid_email|is_unique[users.email]',
                    'errors' => [
                        'required' => 'Email harus diisi',
                        'valid_email' => 'Isikan email dengan format yang sesuai',
                        'is_unique' => 'Email sudah pernah digunakan',
                    ]
                ],
                'username' => [
                    'label'  => 'Username',
                    'rules'  => 'required|min_length[5]|is_unique[users.username]',
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
                        'min_length' => 'Password harus terdiri dari 8 karakter',
                    ]
                ],
                'konfirmasi-password' => [
                    'label'  => 'Konfirmasi password',
                    'rules'  => 'matches[password]',
                    'errors' => [
                        'matches' => 'Konfirmasi password tidak cocok',
                    ]
                ],
            ];
            if ($this->validate($rules)) {
                $model = new Users_Model();
                $sisa = 0;
                switch ($this->request->getPost('kode-paket')) {
                    case '2': $sisa = 8;
                    case '3': $sisa = 12;
                    case '4': $sisa = 27;
                    case '5': $sisa = 60;
                }
                $newuser = [
                    'nama' => $this->request->getPost('nama'),
                    'jurusan' => $this->request->getPost('jurusan'),
                    'kode_paket' => $this->request->getPost('kode-paket'),
                    'telepon' => $this->request->getPost('telepon'),
                    'email' => $this->request->getPost('email'),
                    'username' => $this->request->getPost('username'),
                    'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                    'sisa' => $sisa,
                    'last_login' => date('y-m-d'),
                ];
                $model->save($newuser);

                $model = new Nilai_Model();
                $model->save(['username' => $newuser['username'], 'bulan' => date('Y-m-d')]);

                $catatan = new Catatan_Model();
                $catat = [
                    'user' => $this->request->getPost('username'),
                    'catatan' => '',
                    'tanggal' => '',
                ];
                $catatan->save($catat);
                $flash = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            ' . $newuser['nama'] . ' <strong>berhasil</strong> terdaftar <br>
                            selesaikan pembayaran untuk mendapatkan layanan iclass
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                session()->setFlashdata('flash', $flash);
                return redirect()->to('masuk');
            } else {
                return redirect()->back()->withInput();
            }
        } else if (isset($_POST['kembali'])) {
            return redirect()->back()->withInput();
        }
        $data['active'] = 'daftar';
        $data['pilihPaket'] = $this->request->getGet('paket');
        $data['css'] = 'auth/daftar.css';
        $paket_model = new Paket_model();
        $data['title'] = 'Daftar';
        $data['paket'] = $paket_model->findAll();
        return view('auth/daftar', $data);
    }

    public function caraDaftar()
    {
        $data['active'] = 'daftar';
        $data['css'] = 'auth/daftar.css';
        $data['title'] = 'Cara Daftar';
        return view('auth/caraDaftar', $data);
    }

    public function lupaPassword()
    {
        $data['active'] = 'masuk';
        $data['css'] = 'auth/masuk.css';
        $data['title'] = 'Lupa Password';
        return view('auth/forgotPassword', $data);
    }

    public function uploadBuktiPembayaran()
    {
        $id = session()->id;
        if (isset($_POST['submit'])) {
            $rules = [
                'bukti-pembayaran' => 'uploaded[bukti-pembayaran]|max_size[bukti-pembayaran,1024]|is_image[bukti-pembayaran]'
            ];
            if ($this->validate($rules)) {
                $file = $this->request->getFile('bukti-pembayaran');
                $nama = $file->getRandomName();
                $file->move('./img/bukti-pembayaran/', $nama);
                $user_model = new Users_Model();
                $user_model->update($id, ['bukti_pembayaran' => $nama, 'status' => 1]);
                $data = [
                    'is_waiting' => true,
                    'id' => $id,
                    'status' => 1,
                ];
                $this->keluarUpload();
                session()->set($data);
                $flash = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            Terimakasih telah melakukan pembayaran, admin akan segera memeriksa akun anda:D
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                session()->setFlashdata('flash', $flash);
                return redirect()->to('ruangTunggu');
            }
        }
        $user_model = new Users_Model();
        $data['user'] = $user_model->find($id);
        $data['active'] = 'upload bukti pembayaran';
        $data['css'] = 'auth/masuk.css';
        $paket_model = new Paket_model();
        $data['paket'] = $paket_model->findAll();
        $data['title'] = 'Upload Bukti Pembayaran';
        return view('auth/uploadBuktiPembayaran', $data);
    }

    public function ruangTunggu()
    {
        $id = session()->id;
        $data['active'] = 'ruang tunggu';
        $data['css'] = 'auth/masuk.css';
        $user_model = new Users_Model();
        $user = $user_model->find($id);
        if ($user['status'] == 2) {
            session()->remove('is_waiting');
            session()->remove('id');
            session()->remove('status');
            $data = [
                'log' => true,
                'id' => $user['id'],
                'nama' => $user['nama'],
                'kode-kelas' => $user['kode_kelas'],
                'jurusan' => $user['jurusan'],
                'kode-paket' => $user['kode_paket'],
                'telepon' => $user['telepon'],
                'email' => $user['email'],
                'username' => $user['username'],
                'bukti-pembayaran' => $user['bukti_pembayaran'],
                'status' => $user['status'],
            ];
            session()->set($data);
            $flash = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                anda berhasil masuk:D
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->to('../peserta');
        }
        $data['user'] = $user;
        $data['title'] = 'Ruang Tunggu';
        return view('auth/ruangTunggu', $data);
    }

    public function keluarUpload()
    {
        session()->remove('is_upload');
        session()->remove('id');
        session()->remove('status');
        return redirect()->to(base_url() . '/masuk');
    }

    public function keluarRuangTunggu()
    {
        session()->remove('is_waiting');
        session()->remove('id');
        session()->remove('status');
        return redirect()->to(base_url() . '/masuk');
    }
}
