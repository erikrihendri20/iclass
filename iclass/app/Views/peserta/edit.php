<?= $this->extend('templates/peserta'); ?>
<?= $this->section('content'); ?>

<?php if (session('flash')) : ?>
    <?= session('flash'); ?>
<?php endif; ?>

<?php $validation = service('validation') ?>
<div class="content w-100 mb-0">
    <div class="row border-20 shadow mnya-5" style="height: 950px; margin-top: -25px;">
        <div class="col-3 bg-primary pr-0 py5" style="height: 950px; padding-left: 100px; border-radius: 0 0 0 20px;">
            <div class="row mx-0 py5">
                <img src="<?= base_url() ?>/img/Aset/Asset 45@300x.png" alt="" class="w-75">
                <div class="col-12 px-0 py5">
                    <p class="row align-items-center h5 text-white font-weight-bold mx-0 mt5" style="cursor: pointer;" onclick="editProfil();">
                        <img src="<?= base_url() ?>/img/Aset/Asset 267@300x.png" alt="" class="p-2" style="width: 20%;">
                        <span class="ml-2">Edit Profil</span>
                    </p>
                    <!-- <p class="row align-items-center h5 text-white font-weight-bold mx-0 mt-4" style="cursor: pointer;">
                        <img src="<?= base_url() ?>/img/Aset/Asset 264@300x.png" alt=""class="p-2" style="width: 20%;">
                        <span class="ml-2">Ganti Paket</span>
                    </p> -->
                    <p class="row align-items-center h5 text-white font-weight-bold mx-0 mt-4" style="cursor: pointer;" onclick="editAkun();">
                        <img src="<?= base_url() ?>/img/Aset/Asset 263@300x.png" alt=""class="p-2" style="width: 20%;">
                        <span class="ml-2">Edit Akun</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-9 mt5 px5 py5">
            <div id="div-profil" class="row mx-0 px5">
                <div class="col-10 px-0">
                    <div class="row justify-content-center mx-0">
                        <div class="col-3 position-relative px-0">
                            <img src="<?= base_url() ?>/img/profil.png" alt="" class="w-100 rounded-circle position-relative p-4">
                            <img src="<?= base_url() ?>/img/profil/<?= $user['username'] ?>.jpg" alt="" class="w-100 h-100 rounded-circle position-absolute p-4" style="left: 0; object-fit: cover;" onerror='this.style.display = "none"'>
                            <button id="uploadProfpic" class="btn btn-primary border-0 rounded-circle position-absolute p-0" style="width: 40px; bottom: 20px; right: 20px;">
                                <img src="<?= base_url() ?>/img/Aset/Asset 265@300x.png" alt="" class="w-100">
                            </button>
                        </div>
                    </div>
                    <div class="row mx-0 mt5">
                        <form id="formProfil" class="row w-100 mx-0" method="post" action="<?= base_url() ?>/peserta/editProfil" enctype="multipart/form-data">
                            <div class="col-6 pl-0">
                                <input type="file" id="imgprofpic" name="imgprofpic" style="display:none" form="formProfil"> 
                                <div class="form-group">
                                    <label class="h4 font-weight-bold fs-18" style="color: #12336D;" for="nama">Nama</label>
                                    <input type="text" style="border-radius: 10px;" class="form-control font-weight-bold bg-white fs-18<?= (service('validation')->hasError('nama')) ? ' is-invalid' : '' ?>" id="nama" name="nama" value="<?= $user['nama']; ?>">
                                    <div class="invalid-feedback">
                                        <?= service('validation')->getError('nama'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="h4 font-weight-bold fs-18" style="color: #12336D;" for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" style="border-radius: 10px;" class="form-control font-weight-bold bg-white fs-18<?= (service('validation')->hasError('tanggal_lahir')) ? ' is-invalid' : '' ?>" id="tanggal_lahir" name="tanggal_lahir" value="<?= $user['tanggal_lahir']; ?>">
                                    <div class="invalid-feedback">
                                        <?= service('validation')->getError('tanggal_lahir'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="h4 font-weight-bold fs-18" style="color: #12336D;" for="jenis_kelamin">Jenis Kelamin</label>
                                    <select class="form-control font-weight-bold fs-18 <?= ($validation->hasError('jenis_kelamin')) ? ' is-invalid' : '' ?>" style="border-radius: 10px;" name="jenis_kelamin" id="jenis_kelamin">
                                        <option value="none" selected disabled hidden>Jenis Kelamin</option>
                                        <option class="font-weight-bold fs-16" value="Laki-laki"<?php echo $user['jenis_kelamin']=='Laki-laki' ? ' selected' : ''; ?>>Laki-laki</option>
                                        <option class="font-weight-bold fs-16" value="Perempuan"<?php echo $user['jenis_kelamin']=='Perempuan' ? ' selected' : ''; ?>>Perempuan</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= service('validation')->getError('jenis_kelamin'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="h4 font-weight-bold fs-18" style="color: #12336D;" for="domisili">Domisili (Kota)</label>
                                    <input type="text" style="border-radius: 10px;" class="form-control font-weight-bold bg-white fs-18<?= (service('validation')->hasError('domisili')) ? ' is-invalid' : '' ?>" id="domisili" name="domisili" value="<?= $user['domisili']; ?>">
                                    <div class="invalid-feedback">
                                        <?= service('validation')->getError('domisili'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="h4 font-weight-bold fs-18" style="color: #12336D;" for="sekolah">Sekolah</label>
                                    <input type="text" style="border-radius: 10px;" class="form-control font-weight-bold bg-white fs-18<?= (service('validation')->hasError('sekolah')) ? ' is-invalid' : '' ?>" id="sekolah" name="sekolah" value="<?= $user['sekolah']; ?>">
                                    <div class="invalid-feedback">
                                        <?= service('validation')->getError('sekolah'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="h4 font-weight-bold fs-18" style="color: #12336D;" for="kelas_jurusan">Kelas dan Jurusan</label>
                                    <input type="text" style="border-radius: 10px;" class="form-control font-weight-bold bg-white fs-18<?= (service('validation')->hasError('kelas_jurusan')) ? ' is-invalid' : '' ?>" id="kelas_jurusan" name="kelas_jurusan" value="<?= $user['kelas_jurusan']; ?>">
                                    <div class="invalid-feedback">
                                        <?= service('validation')->getError('kelas_jurusan'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 pr-0">
                                <div class="row mx-0">
                                    <h5 class="bg-primary text-white font-weight-bold mb-0 px-4 py-2" style="border-radius: 10px 10px 0 0;">Deskripsi</h5>
                                    <textarea class="border shadow w-100 px-3 py-2<?= (service('validation')->hasError('deskripsi')) ? ' border-danger' : '' ?>" style="border-radius: 0 10px 10px 10px;"
                                        name="deskripsi" id="deskripsi" cols="30" rows="8" value="<?= $user['deskripsi']; ?>"><?= $user['deskripsi']; ?></textarea>
                                </div>
                                <div class="row bg-primary mx-0 mt-3 px-3 py-2" style="border-radius: 10px;">
                                    <div class="col-12 px-0">
                                        <h5 class="text-white font-weight-bold">Media Sosial</h5>
                                    </div>

                                    <div class="col-2 mt-2 px-2 py-1"><img src="<?= base_url() ?>/img/Aset/Asset 282@300x.png" alt="" class="w-100 p-1"></div>
                                    <div class="col-10 mt-2 px-0 py-1">
                                        <div class="row align-content-center h-100 mx-0">
                                            <input type="text" class="bg-white font-weight-bold px-2 py-1<?= (service('validation')->hasError('instagram')) ? ' border border-danger' : ' border-0' ?>" style="border-radius: 35px;" name="instagram" id="instagram" value="<?= $user['instagram']; ?>">
                                        </div>
                                    </div>

                                    <div class="col-2 mt-2 px-2 py-1"><img src="<?= base_url() ?>/img/Aset/Asset 283@300x.png" alt="" class="w-100 p-1"></div>
                                    <div class="col-10 mt-2 px-0 py-1">
                                        <div class="row align-content-center h-100 mx-0">
                                            <input type="text" class="bg-white font-weight-bold px-2 py-1<?= (service('validation')->hasError('telepon')) ? ' border border-danger' : ' border-0' ?>" style="border-radius: 35px;" name="telepon" id="telepon" value="<?= $user['telepon']; ?>">
                                        </div>
                                    </div>

                                    <div class="col-2 mt-2 px-2 py-1"><img src="<?= base_url() ?>/img/Aset/Asset 276@300x.png" alt="" class="w-100 p-1"></div>
                                    <div class="col-10 mt-2 px-0 py-1">
                                        <div class="row align-content-center h-100 mx-0">
                                            <input type="text" class="bg-white font-weight-bold px-2 py-1<?= (service('validation')->hasError('tiktok')) ? ' border border-danger' : ' border-0' ?>" style="border-radius: 35px;" name="tiktok" id="tiktok" value="<?= $user['tiktok']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-end mt-3 mx-0">
                                    <button type="submit" name="submit" class="btn btn-primary text-white font-weight-bold">Simpan Perubahan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="div-akun" class="row mx-0 px5" style="display: none;">
                <h2 class="col-12 font-weight-bold mb-3" style="color: #12336D;">Akun</h2>
                <div class="col-6">
                    <form class="w-100 mx-0" method="post" action="<?= base_url() ?>/peserta/editAkun">
                        <div class="form-group">
                            <label class="h4 font-weight-bold fs-18" style="color: #12336D;" for="nama">Email</label>
                            <input type="text" style="border-radius: 10px;" class="form-control font-weight-bold bg-white fs-18<?= (service('validation')->hasError('email')) ? ' is-invalid' : '' ?>" id="email" name="email" value="<?= $user['email']; ?>">
                            <div class="invalid-feedback">
                                <?= service('validation')->getError('email'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="h4 font-weight-bold fs-18" style="color: #12336D;" for="nama">Username</label>
                            <input type="text" style="border-radius: 10px;" class="form-control font-weight-bold bg-white fs-18<?= (service('validation')->hasError('username')) ? ' is-invalid' : '' ?>" id="username" name="username" value="<?= $user['username']; ?>">
                            <div class="invalid-feedback">
                                <?= service('validation')->getError('username'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="h4 font-weight-bold fs-18" style="color: #12336D;" for="nama">Password (password lama)</label>
                            <input type="password" style="border-radius: 10px;" class="form-control font-weight-bold bg-white fs-18<?= (service('validation')->hasError('password')) ? ' is-invalid' : '' ?>" id="password" name="password">
                            <div class="invalid-feedback">
                                <?= service('validation')->getError('email'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="h4 font-weight-bold fs-18" style="color: #12336D;" for="nama">Password Baru</label>
                            <input type="password" style="border-radius: 10px;" class="form-control font-weight-bold bg-white fs-18<?= (service('validation')->hasError('pass-baru')) ? ' is-invalid' : '' ?>" id="pass-baru" name="pass-baru" placeholder="dapat dikosongkan...">
                            <div class="invalid-feedback">
                                <?= service('validation')->getError('pass-baru'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="h4 font-weight-bold fs-18" style="color: #12336D;" for="nama">Konfirmasi Password Baru</label>
                            <input type="password" style="border-radius: 10px;" class="form-control font-weight-bold bg-white fs-18<?= (service('validation')->hasError('konf-pass-baru')) ? ' is-invalid' : '' ?>" id="konf-pass-baru" name="konf-pass-baru" placeholder="dapat dikosongkan...">
                            <div class="invalid-feedback">
                                <?= service('validation')->getError('konf-pass-baru'); ?>
                            </div>
                        </div>
                        <div class="row justify-content-end mt-3 mx-0">
                            <button type="submit" name="submit" class="btn btn-primary text-white font-weight-bold">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
                <div class="col-6">
                    <div class="row justify-content-center align-content-center h-100 mx-0 px5">
                        <img src="<?= base_url() ?>/img/Aset/Asset 326@300x.png" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function editProfil() {
            document.getElementById('div-profil').style.display="block";
            document.getElementById('div-akun').style.display="none";
        }

        function editAkun() {
            document.getElementById('div-akun').style.display="flex";
            document.getElementById('div-profil').style.display="none";
        }

        $('#uploadProfpic').click(function(){ $('#imgprofpic').trigger('click'); });
    </script>
</div>
<?= $this->endSection(); ?>