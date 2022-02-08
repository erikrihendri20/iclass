<?= $this->extend('templates/peserta'); ?>
<?= $this->section('content'); ?>

<?php if (session('flash')) : ?>
    <?= session('flash'); ?>
<?php endif; ?>

<?php $validation = service('validation') ?>
<div class="content w-100 mb-0">
    <div class="row shadow mnya-5" style="position: relative; border-radius: 0 0 20px 20px; height: 950px; margin-top: -25px;">
        <div class="col-3 bg-primary pr-0 py5" style="height: 950px; padding-left: 100px; border-radius: 0 0 0 20px;">
            <div class="row mx-0 py5">
                <img src="<?= base_url() ?>/img/Aset/Asset 45@300x.png" alt="" class="w-75">
                <div class="col-12 px-0 py5">
                    <p class="row align-items-center h5 text-white font-weight-bold mx-0 mt5" style="cursor: pointer;" onclick="editProfil();">
                        <img src="<?= base_url() ?>/img/Aset/Asset 267@300x.png" alt="" class="p-2" style="width: 20%;">
                        <span class="ml-2">Edit Profil</span>
                    </p>
                    <p class="row align-items-center h5 text-white font-weight-bold mx-0 mt-4" style="cursor: pointer;" onclick="editPaket();">
                        <img src="<?= base_url() ?>/img/Aset/Asset 264@300x.png" alt=""class="p-2" style="width: 20%;">
                        <span class="ml-2">Jenis Paket</span>
                    </p>
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
                    <form id="formAkun" class="w-100 mx-0" method="post" action="<?= base_url() ?>/peserta/editAkun">
                        <div class="form-group">
                            <label class="h4 font-weight-bold fs-18" style="color: #12336D;" for="nama">Email</label>
                            <input type="text" form="formAkun" style="border-radius: 10px;" class="form-control font-weight-bold bg-white fs-18<?= (service('validation')->hasError('email')) ? ' is-invalid' : '' ?>" id="email" name="email" value="<?= $user['email']; ?>">
                            <div class="invalid-feedback">
                                <?= service('validation')->getError('email'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="h4 font-weight-bold fs-18" style="color: #12336D;" for="nama">Username</label>
                            <input type="text" form="formAkun" style="border-radius: 10px;" class="form-control font-weight-bold bg-white fs-18<?= (service('validation')->hasError('username')) ? ' is-invalid' : '' ?>" id="username" name="username" value="<?= $user['username']; ?>">
                            <div class="invalid-feedback">
                                <?= service('validation')->getError('username'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="h4 font-weight-bold fs-18" style="color: #12336D;" for="nama">Password (password lama)</label>
                            <input type="password" form="formAkun" style="border-radius: 10px;" class="form-control font-weight-bold bg-white fs-18<?= (service('validation')->hasError('password')) ? ' is-invalid' : '' ?>" id="password" name="password">
                            <div class="invalid-feedback">
                                <?= service('validation')->getError('email'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="h4 font-weight-bold fs-18" style="color: #12336D;" for="nama">Password Baru</label>
                            <input type="password" form="formAkun" style="border-radius: 10px;" class="form-control font-weight-bold bg-white fs-18<?= (service('validation')->hasError('pass-baru')) ? ' is-invalid' : '' ?>" id="pass-baru" name="pass-baru" placeholder="dapat dikosongkan...">
                            <div class="invalid-feedback">
                                <?= service('validation')->getError('pass-baru'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="h4 font-weight-bold fs-18" style="color: #12336D;" for="nama">Konfirmasi Password Baru</label>
                            <input type="password" form="formAkun" style="border-radius: 10px;" class="form-control font-weight-bold bg-white fs-18<?= (service('validation')->hasError('konf-pass-baru')) ? ' is-invalid' : '' ?>" id="konf-pass-baru" name="konf-pass-baru" placeholder="dapat dikosongkan...">
                            <div class="invalid-feedback">
                                <?= service('validation')->getError('konf-pass-baru'); ?>
                            </div>
                        </div>
                        <div class="row justify-content-end mt-3 mx-0">
                            <button type="submit" form="formAkun" name="submit" class="btn btn-primary text-white font-weight-bold">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
                <div class="col-6">
                    <div class="row justify-content-center align-content-center h-100 mx-0 px5">
                        <img src="<?= base_url() ?>/img/Aset/Asset 326@300x.png" alt="" class="w-100">
                    </div>
                </div>
            </div>
            <div id="div-paket" class="row mx-0" style="display: none;">
                <div class="col-8">
                    <h2 class="font-weight-bold mb-3" style="color: #12336D;">Jenis Akun</h2>
                    <div class="row mx-0 px-3">
                        <div class="form-group w-100">
                            <label class="h4 font-weight-bold fs-18" style="color: #12336D;" for="nama">Nama</label>
                            <input type="text" style="border-radius: 10px;" class="form-control font-weight-bold bg-white fs-18<?= (service('validation')->hasError('nama')) ? ' is-invalid' : '' ?>" id="nama" name="nama" value="<?= $user['nama']; ?>" disabled>
                        </div>
                        <div class="form-group w-100">
                            <label class="h4 font-weight-bold fs-18" style="color: #12336D;" for="kelas_jurusan">Kelas dan Jurusan</label>
                            <input type="text" style="border-radius: 10px;" class="form-control font-weight-bold bg-white fs-18<?= (service('validation')->hasError('kelas_jurusan')) ? ' is-invalid' : '' ?>" id="kelas_jurusan" name="kelas_jurusan" value="<?= $user['kelas_jurusan']; ?>" disabled>
                        </div>
                        <div class="col-12 px-0">
                            <h4 class="font-weight-bold fs-18" style="color: #12336D;">Jenis Paket</h4>
                            <div class="row mx-0">
                                <div class="col-4 mx-0 p-1">
                                    <div class="row justify-content-center shadow-sm h-100 mx-0 py-3" style="background-color: lightgrey; border-radius: 15px;">
                                        <h5 class="font-weight-bold text-center w-100 px-3" style="color: #12336D;">Reguler</h5>
                                        <img src="<?= base_url() ?>/img/Aset/Asset 311@300x.png" alt="" class="" style="object-fit: contain; max-width: 80%;">
                                    </div>
                                </div>
                                <div class="col-4 mx-0 p-1">
                                    <div class="row justify-content-center bg-warning shadow-sm h-100 mx-0 py-3" style="border-radius: 15px;">
                                        <h5 class="font-weight-bold text-center w-100 px-3" style="color: #12336D;">Premium</h5>
                                        <img src="<?= base_url() ?>/img/Aset/Asset 310@300x.png" alt="" class="" style="object-fit: contain; max-width: 80%;">
                                    </div>
                                </div>
                                <div class="col-4 mx-0 p-1">
                                    <div class="row justify-content-center shadow-sm h-100 mx-0 py-3" style="background-color: lightgrey; border-radius: 15px;">
                                        <h5 class="font-weight-bold text-center w-100 px-3" style="color: #12336D;">Premium+</h5>
                                        <img src="<?= base_url() ?>/img/Aset/Asset 309@300x.png" alt="" class="" style="object-fit: contain; max-width: 80%;">
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-0">
                                <div class="col-6 mx-0 p-1">
                                    <div class="row justify-content-center shadow-sm h-100 mx-0 py-3" style="background-color: lightgrey; border-radius: 15px;">
                                        <h5 class="font-weight-bold text-center w-100 px-3" style="color: #12336D;">Intensif</h5>
                                        <img src="<?= base_url() ?>/img/Aset/Asset 307@300x.png" alt="" class="" style="object-fit: contain; max-width: 60%;">
                                    </div>
                                </div>
                                <div class="col-6 mx-0 p-1">
                                    <div class="row justify-content-center shadow-sm h-100 mx-0 py-3" style="background-color: lightgrey; border-radius: 15px;">
                                        <h5 class="font-weight-bold text-center w-100 px-3" style="color: #12336D;">Intensif+</h5>
                                        <img src="<?= base_url() ?>/img/Aset/Asset 305@300x.png" alt="" class="" style="object-fit: contain; max-width: 60%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="div-paket-2" class="h-100 bg-primary" style="display: none; position: absolute; border-radius: 0 0 20px 0; width: 25%; top: 0; right: 0;">
            <div class="row justify-content-center align-content-center mx-0">
                <img src="<?= base_url() ?>/img/Aset/Asset 295@300x.png" alt="" style="object-fit: contain; width: 60%;">
                <div class="form-group" style="width: 80%;">
                    <label class="h6 text-white font-weight-bold fs-18" for="paketSaatIni">Paket Saat Ini</label>
                    <input type="text" style="border-radius: 10px; cursor: default;" class="form-control form-control-sm font-weight-bold bg-white" id="paketSaatIni" name="paketSaatIni" value="<?php
                            switch ($user['kode_paket']) {
                                case '1':
                                    echo "Reguler";
                                    break;
                                case '2':
                                    echo "Premium";
                                    break;
                                case '3':
                                    echo "Premium+";
                                    break;
                                case '4':
                                    echo "Intensif";
                                    break;
                                case '5':
                                    echo "Intensif+";
                                    break;
                                case '6':
                                    echo "Try Out";
                                    break;
                            }
                        ?>" readonly>
                </div>
                <div class="form-group" style="width: 80%;">
                    <label class="h6 text-white font-weight-bold fs-18" for="pilihanPaketBaru">Pilihan Paket Baru</label>
                    <select name="pilihanPaketBaru" id="pilihanPaketBaru" class="form-control form-control-sm font-weight-bold bg-white" style="border-radius: 10px;">
                        <option value="Reguler"<?php echo ($user['kode_paket']=='1') ? ' selected' : ''; ?>>Reguler</option>
                        <option value="Premium"<?php echo ($user['kode_paket']=='2') ? ' selected' : ''; ?>>Premium</option>
                        <option value="Premium+"<?php echo ($user['kode_paket']=='3') ? ' selected' : ''; ?>>Premium+</option>
                        <option value="Intensif"<?php echo ($user['kode_paket']=='4') ? ' selected' : ''; ?>>Intensif</option>
                        <option value="Intensif+"<?php echo ($user['kode_paket']=='5') ? ' selected' : ''; ?>>Intensif+</option>
                    </select>
                </div>
                <div class="form-group" style="width: 80%;">
                    <label class="h6 text-white font-weight-bold fs-18" for="kekuranganPembayaran">Kekurangan Pembayaran</label>
                    <input type="text" style="border-radius: 10px; cursor: default;" class="form-control form-control-sm font-weight-bold bg-white"
                        id="kekuranganPembayaran" name="kekuranganPembayaran" value="0" readonly>
                </div>
                <div class="form-group" style="width: 80%;">
                    <label class="h6 text-white font-weight-bold fs-18" for="buktiPembayaran">Upload Bukti Pembayaran</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="buktiPembayaran" name="buktiPembayaran" required>
                        <label class="custom-file-label" for="customFile">...</label>
                    </div>
                </div>
                <div class="row justify-content-end mx-0 mb-3" style="width: 80%;">
                    <button type="button" name="submit" class="btn btn-sm btn-warning font-weight-bold" style="color: #12336D; border-radius: 10px;"
                        onclick="$('#modalBuktiPembayaran').modal('show');">
                        Lanjutkan
                    </button>
                </div>
                <div class="row mx-0" style="width: 80%;">
                    <p class="font-weight-bold bg-white mb-0 px-2 py-1" style="font-size: 12px; color: #12336D; border-radius: 10px 10px 0 0;">
                        Pilihan metode pembayaran yang tersedia
                    </p>
                    <div class="row mx-0 px-2 py-1" style="background-color: #12336D; border-radius: 0 10px 10px 10px;">
                        <p class="text-white mb-1" style="font-size: 12px;">BRI: 0344-0110-5184-503 a.n Ivan Masduqi Mahfuds</p>
                        <p class="text-white mb-1" style="font-size: 12px;">OVO: 0812-1647-3556 a.n Ivan</p>
                        <p class="text-white mb-1" style="font-size: 12px;">GoPay: 0812-1647-3556 a.n Ivan</p>
                        <p class="text-white mb-1" style="font-size: 12px;">Dana: 0812-1647-3556 a.n Ivan</p>
                        <p class="text-white mb-1" style="font-size: 12px;">Link Aja: 0812-1647-3556 a.n Ivan Masduqi Mahfuds</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="modalBuktiPembayaran" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <p>Upload bukti pembayaran</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-success" onclick="uploadBuktiPembayaran();">Ya</button>
                    <button type="button" class="btn btn-sm btn-danger" onclick="$('#modalBuktiPembayaran').modal('hide');">Tidak</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('pilihanPaketBaru').addEventListener('change', function(e) {
            var bayar = parseInt(<?php switch ($user['kode_paket']) {
                case '1':
                    echo "79000";
                    break;
                case '2':
                    echo "109000";
                    break;
                case '3':
                    echo "129000";
                    break;
                case '4':
                    echo "299000";
                    break;
                case '5':
                    echo "499000";
                    break;
            } ?>);

            let harga;
            switch (e.target.value) {
                case 'Reguler':
                    harga = parseInt(79000);
                    break;
                case 'Premium':
                    harga = parseInt(109000);
                    break;
                case 'Premium+':
                    harga = parseInt(129000);
                    break;
                case 'Intensif':
                    harga = parseInt(299000);
                    break;
                case 'Intensif+':
                    harga = parseInt(499000);
                    break;
            }
            let selisih = harga-bayar;

            document.getElementById('kekuranganPembayaran').value=selisih;
        });

        function uploadBuktiPembayaran() {
            $('#modalBuktiPembayaran').modal('hide');

            var fd = new FormData();
            var files = $('#buktiPembayaran')[0].files[0];

            fd.append('paketSaatIni', document.getElementById('paketSaatIni').value);
            fd.append('pilihanPaketBaru', document.getElementById('pilihanPaketBaru').value);
            fd.append('kekuranganPembayaran', document.getElementById('kekuranganPembayaran').value);
            fd.append('buktiPembayaran', files);

            $.ajax({
                url: '<?= base_url()?>/peserta/ubahPaket',
                type: 'POST',
                data: fd,
                enctype: 'multipart/form-data',
                contentType: false,
                cache: false,
                processData: false,
                success: function(response){
                    res = JSON.parse(response);
                    if (res.status==='1') {
                        Swal.fire({icon: 'success', title: '', text: 'Bukti pembayaran berhasil diunggah'});
                    } else {
                        Swal.fire({icon: 'error', title: '', text: res.pesan});
                    }
                },
            });

            document.getElementsByClassName('content')[0].focus();
        }

        document.getElementById('buktiPembayaran').addEventListener('change', function(e) {
            console.log(e.target.value);
        })

        function editProfil() {
            document.getElementById('div-profil').style.display="block";
            document.getElementById('div-akun').style.display="none";
            document.getElementById('div-paket').style.display="none";
            document.getElementById('div-paket-2').style.display="none";
        }

        function editAkun() {
            document.getElementById('div-akun').style.display="flex";
            document.getElementById('div-profil').style.display="none";
            document.getElementById('div-paket').style.display="none";
            document.getElementById('div-paket-2').style.display="none";
        }

        function editPaket() {
            document.getElementById('div-paket').style.display="flex";
            document.getElementById('div-paket-2').style.display="flex";
            document.getElementById('div-profil').style.display="none";
            document.getElementById('div-akun').style.display="none";
        }

        $('#uploadProfpic').click(function(){ $('#imgprofpic').trigger('click'); });
    </script>
</div>
<?= $this->endSection(); ?>