<?php

namespace App\Controllers;

use App\Models\Users_Model;
use App\Models\Admin_model;
use App\Models\Paket_model;

class Auth extends BaseController
{

    public function text()
    {
        dd(session()->pilih_paket);
    }

    public function masuk()
    {
        if (isset($_POST['submit'])) {
            $model = new Users_Model();
            $identitas = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $user = $model->getByUserName($identitas);
            if ($user) {
                if (password_verify($password, $user[0]['password'])) {
                    if($user[0]['status']==0){
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
                        return redirect()->to('Auth/uploadBuktiPembayaran');
                    }elseif($user[0]['status']==1){
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
                        return redirect()->to('Auth/ruangTunggu');
                    }else{
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
                        ];
                        session()->set($data);
                        $flash = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            anda berhasil masuk:D
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                        session()->setFlashdata('flash', $flash);
                        return redirect()->to('peserta');
                    }
                    // $flash = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    //         anda berhasil masuk:D
                    //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    //             <span aria-hidden="true">&times;</span>
                    //         </button>
                    //     </div>';
                    // session()->setFlashdata('flash', $flash);
                    // return redirect()->to('peserta');
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

        $data['active'] = 'masuk';
        $data['css'] = ['auth/masuk.css'];
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
        return view('auth/masukAdmin');
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
                $newuser = [
                    'nama' => $this->request->getPost('nama'),
                    'jurusan' => $this->request->getPost('jurusan'),
                    'kode_paket' => $this->request->getPost('kode-paket'),
                    'telepon' => $this->request->getPost('telepon'),
                    'email' => $this->request->getPost('email'),
                    'username' => $this->request->getPost('username'),
                    'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
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
                return redirect()->to('masuk');
            } else {
                return redirect()->back()->withInput();
            }
        } else if (isset($_POST['kembali'])) {
            dd($this->request->getVar());
        }
        $data['active'] = 'daftar';
        $data['css'] = ['auth/daftar.css'];
        $paket_model = new Paket_model();
        $data['paket'] = $paket_model->findAll();
        return view('auth/daftar', $data);
    }

    public function caraDaftar()
    {
        $data['active'] = 'daftar';
        $data['css'] = ['auth/daftar.css'];
        return view('auth/caraDaftar', $data);
    }

    public function lupaPassword()
    {
        $data['active'] = 'masuk';
        $data['css'] = ['auth/masuk.css'];
        return view('auth/forgotPassword', $data);
    }

    public function uploadBuktiPembayaran()
    {
        $id=session()->id;
        if(isset($_POST['submit'])){
            $rules=[
                'bukti-pembayaran' => 'uploaded[bukti-pembayaran]|max_size[bukti-pembayaran,1024]|is_image[bukti-pembayaran]'
            ];
            if($this->validate($rules)){
                $file = $this->request->getFile('bukti-pembayaran');
                $nama = $file->getRandomName();
                $file->move('./img/bukti-pembayaran/', $nama);
                $user_model = new Users_Model();
                $user_model->update($id , ['bukti_pembayaran' => $nama , 'status' => 1]);
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
        $data['css'] = ['auth/masuk.css'];
        $paket_model = new Paket_model();
        $data['paket'] = $paket_model->findAll();
        return view('auth/uploadBuktiPembayaran', $data);
    }

    public function ruangTunggu()
    {
        $id = session()->id;
        $data['active'] = 'ruang tunggu';
        $data['css'] = ['auth/masuk.css'];
        $user_model = new Users_Model();
        $user = $user_model->find($id);
        if($user['status']==2){
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
        return view('auth/ruangTunggu', $data);
    }

    public function keluarUpload()
    {
        session()->remove('is_upload');
        session()->remove('id');
        session()->remove('status');
        return redirect()->to(base_url().'/masuk');
    }

    public function keluarRuangTunggu()
    {
        session()->remove('is_waiting');
        session()->remove('id');
        session()->remove('status');
        return redirect()->to(base_url().'/masuk');
    }
}
