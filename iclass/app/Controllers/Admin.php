<?php

namespace App\Controllers;

use App\Models\Users_Model;
use App\Models\Jadwal_Model;
use App\Models\Kelas_Model;

class Admin extends BaseController
{
    public function index()
    {
        $data['active']='dashboard';
        return view('admin/index',$data);
    }
    
    public function aturJadwal()
    {
        $data['active'] = 'atur jadwal';
        return view('admin/aturJadwal',$data);
    }

    public function daftarKelas()
    {
        $model=new Kelas_Model();
        $data['user']=$model->findAll();
        $data['active']='daftar kelas';
        return view('admin/daftarKelas',$data);
    }

    public function tambahKelas()
    {
        
        if(isset($_POST['submit'])){
            $data=[
                'nama'=>$this->request->getPost('nama'),
                'link-meeting'=>$this->request->getPost('link-meeting')
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
                $model=new Kelas_Model();
                $model->save($data);
                $flash = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            Kelas <strong>berhasil</strong> ditambahkan
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                session()->setFlashdata('flash', $flash);
                return redirect()->to(base_url().'/admin/daftarKelas');
            }else{
               $flash = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Gagal</strong>, pastikan nama kelas belum digunakan sebelumnya
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                session()->setFlashdata('flash', $flash);
                return redirect()->to(base_url().'/admin/daftarKelas'); 
            }
        }
    }

    public function hapusKelas($id)
    {
        if(isset($id)){
            $model=new Kelas_Model();
            $model->delete($id);
            $flash = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            Kelas <strong>berhasil</strong> dihapus
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url().'/admin/daftarKelas');
        }else{
            $flash = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Gagal</strong>, pastikan nama kelas belum digunakan sebelumnya
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
            session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url().'/admin/daftarKelas'); 
        }
    }

    public function tambahJadwal()
    {
        if(isset($_POST["title"]))
        {
                $data=[
                    'title' => $this->request->getPost('title'),
                    'start_event' => $this->request->getPost('start'),
                    'end_event' => $this->request->getPost('end'),
                ];
                $model = new Jadwal_Model();
                $model->save($data);
                return 'sadsad';
        }
    }

    public function jadwalAdmin()
    {
        $model = new Jadwal_Model();
        return json_encode($model->findAll());
    }
    
}
