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
    
    public function aturJadwalPertemuan()
    {
        $data['active'] = 'atur jadwal pertemuan';
        $model=new Kelas_Model();
        $data['kelas']=$model->findAll();
        return view('admin/aturJadwalPertemuan',$data);
    }

    public function aturJadwalTryout()
    {
        $data['active'] = 'atur jadwal tryout';
        $model=new Kelas_Model();
        $data['kelas']=$model->findAll();
        return view('admin/aturJadwalTryout',$data);
    }

    public function daftarKelas()
    {
        $model=new Kelas_Model();
        $data['user']=$model->findAll();
        $data['active']='daftar kelas';
        return view('admin/daftarKelas',$data);
    }

    public function lihatJadwal($kode_kelas,$jenis=null)
    {
        $model = new Jadwal_Model();
        $result = $model->getJadwal($kode_kelas,$jenis);
        echo json_encode($result);
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
                    'kode_kelas' => $this->request->getPost('kode_kelas'),
                    'link-meeting' => $this->request->getPost('url'),
                    'jenis' => $this->request->getPost('jenis'),
                    'class_name' => $this->request->getPost('class_name'),
                ];
                if(isset($_POST['id'])){
                    $data['id']=$this->request->getPost('id');
                }
                $model = new Jadwal_Model();
                $model -> save($data);
        }
    }

    public function hapusJadwal()
    {
        $id=$this->request->getPost('id');
        $model = new Jadwal_Model();
        $model -> delete($id);
    }

    public function renderJadwal($kode_kelas)
    {
        $model=new Jadwal_Model();
        return json_encode($model->getJadwal($kode_kelas));
    }

    public function jadwalAdmin()
    {
        $model = new Jadwal_Model();
        return json_encode($model->findAll());
    }
    
    public function uploadRekaman()
    {
        $data['active'] = 'Kelas';
        return view('admin/uploadRekaman', $data);
    }

    public function tambahRekaman()
    {
        if(isset($_POST['submit'])){
            $data=[
                'pertemuan' => $this->request->getPost('pertemuan'),
                'materi' => $this->request->getPost('materi'),
                'rekaman' => $this->request->getFile('rekaman'),
                'thumbnailRekaman' => $this->request->getFile('thumbnailRekaman')
            ];
            $rules = [
                'pertemuan' => [
                    'label'  => 'Pertemuan',
                    'rules'  => 'required|max_length[3]',
                    'errors' => [
                        'required' => 'Pertemuan harus diisi',
                        'max_length' => 'Pertemuan maksimal terdiri dari 3 digit'
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
                    'rules' => 'uploaded[rekaman]|ext_in[rekaman,mp4]',
                    'errors' => [
                        'uploaded' => 'Silahkan pilih video rekaman kelas',
                        'ext_in' => 'Pilih file dengan format Mp4'
                    ]
                ],
                'thumbnailRekaman' => [
                    'label' => 'upload',
                    'rules' => 'uploaded[thumbnailRekaman]|is_image[thumbnailRekaman]',
                    'errors' => [
                        'uploaded' => 'Silahkan pilih gambar thumbnail video rekaman kelas',
                        'is_image' => 'Pilih gambar dengan jenis gambar'
                    ]
                ]
            ];
            
            $rekaman = $this->request->getFile('rekaman');
            $thumbnailRekaman = $this->request->getFile('thumbnailRekaman');

            if ($this->validate($rules)) {
                // $model=new Rekaman_Model();
                // $model->postRekaman($data);
                $rekaman->move('./vid/Rekaman Kelas/', 'Pertemuan '.$data['pertemuan'].' - '.$data['materi'].'.mp4');
                $thumbnailRekaman->move('./img/Rekaman Kelas/', 'Pertemuan '.$data['pertemuan'].' - '.$data['materi'].'.'.$thumbnailRekaman->guessExtension());
                session()->setFlashdata('flash', "<script>swal('Upload Berhasil!','Rekaman Kelas Berhasil Diupload','success')</script>");
                return redirect()->to(base_url().'/admin/uploadRekaman');
            } else {
                $errors = $this->validator->getErrors();
                session()->setFlashdata($errors);
                session()->setFlashdata('flash', "<script>swal('Upload Gagal!','Rekaman Kelas Gagal Diupload. Pastikan Anda telah memasukkan data dan memilih file dengan benar','error')</script>");
                return redirect()->to(base_url().'/admin/uploadRekaman');
            }
        }
    }

    public function numberValidation(string $str, string $fields, array $data)
    {
        if (preg_match( '/^[0-9]+/', $data['pertemuan'])) {
            return true;
        } else {
            return false;
        }
    }
}
