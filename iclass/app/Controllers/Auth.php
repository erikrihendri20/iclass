<?php

namespace App\Controllers;
use App\Models\Users_Model;

class Auth extends BaseController
{
    protected $validation;
    public function __construct()
    {
        $validation =  \Config\Services::validation();
    }

    public function text()
    {
        $model= new Users_Model();
        $data=$model->findAll();
        dd($data);
    }

	public function masuk()
	{
        $data['active'] = 'masuk';
		$data['css'] = ['landingpage/masuk.css'];
		return view('landingpage/masuk',$data);
	}
	public function daftar()
	{
        if(isset($_POST['submit'])){
            $rules = [
                'nama' => [
                    'label'  => 'Nama',
                    'rules'  => 'required',
                    'errors' => [
                        'required' => 'Nama harus diisi'
                    ]
                ],
                'kelas' => [
                    'label'  => 'Kelas',
                    'rules'  => 'required',
                    'errors' => [
                        'required' => 'Kelas harus diisi'
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
            if($this->validate($rules)){
                $model = new Users_Model();
                $newuser = [
                    'nama' => $this->request->getPost('nama'),
                    'kelas' => $this->request->getPost('kelas'),
                    'jurusan' => $this->request->getPost('jurusan'),
                    'pilih-paket' => $this->request->getPost('pilih-paket'),
                    'telepon' => $this->request->getPost('telepon'),
                    'email' => $this->request->getPost('email'),
                    'username' => $this->request->getPost('username'),
                    'password' => $this->request->getPost('password'),
                ];
                $model->save($newuser);
                session()->setFlashdata('terdaftar', $newuser['nama'] . 'berhasil terdaftar <br> selesaikan pendaftaran untuk mendapatkan layanan kami');
                return redirect()->to('masuk');
            }else{
                return redirect()->back()->withInput();
            }
        }else if(isset($_POST['kembali'])){
            dd($this->request->getVar());
        }
        $data['active'] = 'daftar';
		$data['css'] = ['landingpage/daftar.css'];
		return view('landingpage/daftar',$data);
	}
}
