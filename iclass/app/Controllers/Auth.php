<?php

namespace App\Controllers;

use App\Models\Users_Model;

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
                    $data = [
                        'log' => true,
                        'id' => $user[0]['id'],
                        'nama' => $user[0]['nama'],
                        'kelas_id' => $user[0]['kelas_id'],
                        'jurusan' => $user[0]['jurusan'],
                        'pilih_paket' => $user[0]['pilih-paket'],
                        'telepon' => $user[0]['telepon'],
                        'email' => $user[0]['email'],
                        'username' => $user[0]['username'],
                        'bukti_pembayaran' => $user[0]['bukti-pembayaran'],
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
                'pilih-paket' => [
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
                    'pilih-paket' => $this->request->getPost('pilih-paket'),
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
        return view('auth/daftar', $data);
    }
}
