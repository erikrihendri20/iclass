<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content pb-5">
    <div class="row mx-auto mt-5" style="width: 80%;">
        <div class="row w-75 mx-0 mt-5 pl-3">
            <div class="row align-content-start w-100 mx-0">
                <div class="position-relative border-20 position-relative" style="width: 20%;">
                    <img src="<?= base_url() ?>/img/profil.png" alt="" class="w-100 border-50 position-relative" style="object-fit: cover;">
                    <img id="imgprof" src="<?= base_url() ?>/img/profil/<?= $user['username'] ?>.jpg" alt="" 
                        class="w-100 h-100 border-50 position-absolute" style="top: 0; left: 0; object-fit: cover;" 
                        onerror='this.style.display = "none"'>
                    <button id="uploadProfpic" class="btn bg-white border-0 position-absolute" style="padding: 2px; border-radius: 15px; width: 40px; top: 20px; right: 20px;">
                        <img src="<?= base_url() ?>/img/Aset/Asset 2222.png" alt="" class="w-100 p-2">
                    </button>
                    <input type="file" id="imgprofpic" name="imgprofpic" style="display:none">                            
                </div>
                <div class="row align-content-around w-75 mx-0 pl-5">
                    <div class="w-100 pl-3">
                        <h5 class="font-weight-bold"><?= $user['nama'] ?></h5>
                        <h6 style="color: #828282;"><?= $user['kelas_jurusan'] ?></h6>
                    </div>
                    <div class="w-100 pl-3">
                        <div class="row w-100 mx-0">
                            <img src="<?= base_url() ?>/img/Aset/Asset 3.png" class="mr-2" style="height: 19.2px; object-fit: contain;" alt="">
                            <h6 style="color: #828282;" class="align-bottom"><?= (!empty($user['domisili'])) ? $user['domisili'] : '-' ?></h6>
                        </div>
                        <div class="row w-75 mx-0 mt-2">
                            <div class="row w-50 text-truncate mx-0">
                                <img src="<?= base_url() ?>/img/Aset/Asset 4.png" class="mr-2" style="height: 19.2px; object-fit: contain;" alt="">
                                <h6 style="color: #828282;" class="align-bottom"><?= (!empty($user['instagram'])) ? '@'.$user['instagram'] : '-' ?></h6>
                            </div>
                            <div class="row w-50 text-truncate mx-0">
                                <img src="<?= base_url() ?>/img/Aset/Asset 5.png" class="mr-2" style="height: 19.2px; object-fit: contain;" alt="">
                                <a href="https://wa.me/<?= $user['telepon'] ?>" style="color: #828282;" class="h6 align-bottom w-75"><?= (!empty($user['telepon'])) ? $user['telepon'] : '-' ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row w-100 mx-0 mt-5">
                <button id="btnProfil" onclick="editProfil();"
                    class="btn bg-white text-dark text-left rounded-0 px-3">
                    <h5 style="font-size: 20px;" class=" font-weight-bold">Profil</h5>
                </button>
                <?php if ($user['username'] == session('username')) { ?>
                    <button id="btnAkun" onclick="editAkun();"
                        class="btn bg-white text-secondary text-left rounded-0 px-3">
                        <h5 style="font-size: 20px;" class=" font-weight-bold">Akun</h5>
                    </button>
                    <button id="btnPaket" onclick="editPaket();"
                        class="btn bg-white text-secondary text-left rounded-0 px-3">
                        <h5 style="font-size: 20px;" class=" font-weight-bold">Upgrade Paket</h5>
                    </button>
                <?php } ?>
            </div>
            <div class="row w-100 mx-0 mt-4">
                <div class="bg-primary border-30 pt-2" style="width: 30%;">
                    <h5 style="<?php if ($user['username'] != session('username')) echo "visivility:hidden; " ?>font-size: 22px;" class="text-white font-weight-bold font-italic mt-4 mb-0 ml-3 pl-3">Customize</h5>
                    <h5 style="<?php if ($user['username'] != session('username')) echo "visivility:hidden; " ?>font-size: 22px;" class="text-white ml-3 pl-3">your account</h5>
                    <img src="<?= base_url() ?>/img/Aset/Asset 6.png" class="mt-auto" style="width: 90%;">
                </div>
                <div class="px-4 mt-4" style="width: 60%; max-height: 300px; overflow-y: auto;">
                    <div id="div-profil" class="row mx-0">
                        <form id="formProfil" class="row w-100 mx-0" method="post" action="<?= base_url() ?>/peserta/editProfil" enctype="multipart/form-data">
                            <div class="form-group border-bottom w-100 ml-3">
                                <label class="h5" style="color: #12336D;" for="nama">Nama</label>
                                <input type="text" style="border-radius: 10px; font-size: 18px;" class="form-control border-0 font-weight-bold  bg-white pl-0<?= (service('validation')->hasError('nama')) ? ' is-invalid' : '' ?>" id="nama" name="nama" value="<?= $user['nama']; ?>" <?php if ($user['username'] != session('username')) echo "disabled" ?>>
                                <div class="invalid-feedback">
                                    <?= service('validation')->getError('nama'); ?>
                                </div>
                            </div>
                            <div class="form-group border-bottom w-100 ml-3">
                                <label class="h5" style="color: #12336D;" for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" style="border-radius: 10px; font-size: 18px;" class="form-control border-0 font-weight-bold  bg-white pl-0<?= (service('validation')->hasError('tanggal_lahir')) ? ' is-invalid' : '' ?>" id="tanggal_lahir" name="tanggal_lahir" value="<?= $user['tanggal_lahir']; ?>" <?php if ($user['username'] != session('username')) echo "disabled" ?>>
                                <div class="invalid-feedback">
                                    <?= service('validation')->getError('tanggal_lahir'); ?>
                                </div>
                            </div>
                            <div class="form-group border-bottom w-100 ml-3">
                                <label class="h5" style="color: #12336D;" for="jenis_kelamin">Jenis Kelamin</label>
                                <select class="form-control border-0 font-weight-bold  pl-0<?= (service('validation')->hasError('jenis_kelamin')) ? ' is-invalid' : '' ?>" style="border-radius: 10px; font-size: 18px;" name="jenis_kelamin" id="jenis_kelamin" <?php if ($user['username'] != session('username')) echo "disabled" ?>>
                                    <option class="font-weight-bold fs-16" value="Laki-laki"<?php echo $user['jenis_kelamin']=='Laki-laki' ? ' selected' : ''; ?>>Laki-laki</option>
                                    <option class="font-weight-bold fs-16" value="Perempuan"<?php echo $user['jenis_kelamin']=='Perempuan' ? ' selected' : ''; ?>>Perempuan</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?= service('validation')->getError('jenis_kelamin'); ?>
                                </div>
                            </div>
                            <div class="form-group border-bottom w-100 ml-3">
                                <label class="h5" style="color: #12336D;" for="domisili">Domisili ( Kota )</label>
                                <input type="text" style="border-radius: 10px; font-size: 18px;" class="form-control border-0 font-weight-bold  bg-white pl-0<?= (service('validation')->hasError('domisili')) ? ' is-invalid' : '' ?>" id="domisili" name="domisili" value="<?= $user['domisili']; ?>" <?php if ($user['username'] != session('username')) echo "disabled" ?>>
                                <div class="invalid-feedback">
                                    <?= service('validation')->getError('domisili'); ?>
                                </div>
                            </div>
                            <div class="form-group border-bottom w-100 ml-3">
                                <label class="h5" style="color: #12336D;" for="sekolah">Sekolah</label>
                                <input type="text" style="border-radius: 10px; font-size: 18px;" class="form-control border-0 font-weight-bold  bg-white pl-0<?= (service('validation')->hasError('sekolah')) ? ' is-invalid' : '' ?>" id="sekolah" name="sekolah" value="<?= $user['sekolah']; ?>" <?php if ($user['username'] != session('username')) echo "disabled" ?>>
                                <div class="invalid-feedback">
                                    <?= service('validation')->getError('sekolah'); ?>
                                </div>
                            </div>
                            <div class="form-group border-bottom w-100 ml-3">
                                <label class="h5" style="color: #12336D;" for="kelas_jurusan">Kelas dan Jurusan</label>
                                <input type="text" style="border-radius: 10px; font-size: 18px;" class="form-control border-0 font-weight-bold  bg-white pl-0<?= (service('validation')->hasError('kelas_jurusan')) ? ' is-invalid' : '' ?>" id="kelas_jurusan" name="kelas_jurusan" value="<?= $user['kelas_jurusan']; ?>" <?php if ($user['username'] != session('username')) echo "disabled" ?>>
                                <div class="invalid-feedback">
                                    <?= service('validation')->getError('kelas_jurusan'); ?>
                                </div>
                            </div>
                            <div class="form-group border-bottom w-100 ml-3">
                                <label class="h5" style="color: #12336D;" for="instagram">Instagram</label>
                                <input type="text" style="border-radius: 10px; font-size: 18px;" class="form-control border-0 font-weight-bold  bg-white pl-0<?= (service('validation')->hasError('instagram')) ? ' is-invalid' : '' ?>" id="instagram" name="instagram" value="<?= $user['instagram']; ?>" <?php if ($user['username'] != session('username')) echo "disabled" ?>>
                                <div class="invalid-feedback">
                                    <?= service('validation')->getError('instagram'); ?>
                                </div>
                            </div>
                            <div class="form-group border-bottom w-100 ml-3">
                                <label class="h5" style="color: #12336D;" for="telepon">Telepon</label>
                                <input type="text" style="border-radius: 10px; font-size: 18px;" class="form-control border-0 font-weight-bold  bg-white pl-0<?= (service('validation')->hasError('telepon')) ? ' is-invalid' : '' ?>" id="telepon" name="telepon" value="<?= $user['telepon']; ?>" <?php if ($user['username'] != session('username')) echo "disabled" ?>>
                                <div class="invalid-feedback">
                                    <?= service('validation')->getError('telepon'); ?>
                                </div>
                            </div>
                            <?php if ($user['username'] == session('username')) { ?>
                                <div class="row justify-content-end w-100 mt-3 mx-0">
                                    <button type="submit" name="submit" class="btn btn-primary text-white border-30 px-3">Simpan</button>
                                </div>
                            <?php } ?>
                        </form>
                    </div>
                    <?php if ($user['username'] == session('username')) { ?>
                        <div id="div-akun" class="row mx-0" style="display: none;">
                            <form id="formAkun" class="w-100 ml-3" method="post" action="<?= base_url() ?>/peserta/editAkun">
                                <div class="form-group border-bottom w-100">
                                    <label class="h5" style="color: #12336D;" for="nama">Email</label>
                                    <input type="text" form="formAkun" style="border-radius: 10px; font-size: 18px;" class="form-control border-0 font-weight-bold bg-white pl-0<?= (service('validation')->hasError('email')) ? ' is-invalid' : '' ?>" id="email" name="email" value="<?= $user['email']; ?>">
                                    <div class="invalid-feedback">
                                        <?= service('validation')->getError('email'); ?>
                                    </div>
                                </div>
                                <div class="form-group border-bottom w-100">
                                    <label class="h5" style="color: #12336D;" for="nama">Username</label>
                                    <input type="text" form="formAkun" style="border-radius: 10px; font-size: 18px;" class="form-control border-0 font-weight-bold bg-white pl-0<?= (service('validation')->hasError('username')) ? ' is-invalid' : '' ?>" id="username" name="username" value="<?= $user['username']; ?>">
                                    <div class="invalid-feedback">
                                        <?= service('validation')->getError('username'); ?>
                                    </div>
                                </div>
                                <div class="form-group border-bottom w-100">
                                    <label class="h5" style="color: #12336D;" for="nama">Password ( password lama )</label>
                                    <input type="password" form="formAkun" style="border-radius: 10px; font-size: 18px;" class="form-control border-0 font-weight-bold bg-white pl-0<?= (service('validation')->hasError('password')) ? ' is-invalid' : '' ?>" id="password" name="password">
                                    <div class="invalid-feedback">
                                        <?= service('validation')->getError('email'); ?>
                                    </div>
                                </div>
                                <div class="form-group border-bottom w-100">
                                    <label class="h5" style="color: #12336D;" for="nama">Password Baru</label>
                                    <input type="password" form="formAkun" style="border-radius: 10px; font-size: 18px;" class="form-control border-0 font-weight-bold bg-white pl-0<?= (service('validation')->hasError('pass-baru')) ? ' is-invalid' : '' ?>" id="pass-baru" name="pass-baru" placeholder="dapat dikosongkan...">
                                    <div class="invalid-feedback">
                                        <?= service('validation')->getError('pass-baru'); ?>
                                    </div>
                                </div>
                                <div class="form-group border-bottom w-100">
                                    <label class="h5" style="color: #12336D;" for="nama">Konfirmasi Password Baru</label>
                                    <input type="password" form="formAkun" style="border-radius: 10px; font-size: 18px;" class="form-control border-0 font-weight-bold bg-white pl-0<?= (service('validation')->hasError('konf-pass-baru')) ? ' is-invalid' : '' ?>" id="konf-pass-baru" name="konf-pass-baru" placeholder="dapat dikosongkan...">
                                    <div class="invalid-feedback">
                                        <?= service('validation')->getError('konf-pass-baru'); ?>
                                    </div>
                                </div>
                                <div class="row justify-content-end w-100 mt-3 mx-0">
                                    <button type="submit" form="formAkun" name="submit" class="btn btn-primary text-white border-30 px-3">Simpan</button>
                                </div>
                            </form>
                        </div>
                        <div id="div-paket" class="row mx-0" style="display: none;">
                            <div class="form-group border-bottom w-100 ml-3">
                                <label class="h5" style="color: #12336D;" for="paketSaatIni">Paket Saat Ini</label>
                                <input type="text" style="border-radius: 10px; font-size: 18px; cursor: default;" class="form-control border-0 font-weight-bold bg-white pl-0" id="paketSaatIni" name="paketSaatIni" value="<?php
                                        switch ($user['kode_paket']) {
                                            case '1': echo "Reguler"; break;
                                            case '2': echo "Premium"; break;
                                            case '3': echo "Premium+"; break;
                                            case '4': echo "Intensif"; break;
                                            case '5': echo "Intensif+"; break;
                                            case '6': echo "Try Out"; break;
                                            case '7': echo "SKD"; break;
                                        }
                                    ?>" readonly>
                            </div>
                            <div class="form-group border-bottom w-100 ml-3">
                                <label class="h5" style="color: #12336D;" for="pilihanPaketBaru">Pilihan Paket Baru</label>
                                <select name="pilihanPaketBaru" id="pilihanPaketBaru" class="form-control border-0 font-weight-bold bg-white pl-0" style="border-radius: 10px; font-size: 18px;">
                                    <option value="Reguler"<?php echo ($user['kode_paket']=='1') ? ' selected' : ''; ?>>Reguler</option>
                                    <option value="Premium"<?php echo ($user['kode_paket']=='2') ? ' selected' : ''; ?>>Premium</option>
                                    <option value="Premium+"<?php echo ($user['kode_paket']=='3') ? ' selected' : ''; ?>>Premium+</option>
                                    <option value="Intensif"<?php echo ($user['kode_paket']=='4') ? ' selected' : ''; ?>>Intensif</option>
                                    <option value="Intensif+"<?php echo ($user['kode_paket']=='5') ? ' selected' : ''; ?>>Intensif+</option>
                                    <option value="SKD"<?php echo ($user['kode_paket']=='7') ? ' selected' : ''; ?>>SKD</option>
                                </select>
                            </div>
                            <div class="form-group border-bottom w-100 ml-3">
                                <label class="h5" style="color: #12336D;" for="kekuranganPembayaran">Kekurangan Pembayaran</label>
                                <input type="text" style="border-radius: 10px; font-size: 18px; cursor: default;" class="form-control border-0 font-weight-bold bg-white pl-0"
                                    id="kekuranganPembayaran" name="kekuranganPembayaran" value="0" readonly>
                            </div>
                            <div class="row w-100 pl-3 mx-0 mt-3">
                                <select id="ubahMetodePembayaran" class="form-control w-100" style="border-radius: 10px; font-size: 18px;">
                                    <option value="none" selected disabled hidden>Metode Pembayaran</option>
                                    <option>BRI</option>
                                    <option>OVO</option>
                                    <option>GoPay</option>
                                    <option>Dana</option>
                                    <option>Link Aja</option>
                                </select>
                                <p id="nomorPembayaran" class="text-white bg-primary border-10 w-100 mt-3 mb-0 px-3 py-1">
                                    &nbsp;
                                </p>
                            </div>
                            <div class="form-group border-bottom w-100 ml-3">
                                <label class="h5 text-white font-weight-bold" style="color: #12336D;" for="buktiPembayaran">Upload Bukti Pembayaran</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="buktiPembayaran" name="buktiPembayaran" required>
                                    <label class="custom-file-label" for="customFile">...</label>
                                </div>
                            </div>
                            <div class="row justify-content-end w-100 mx-0 mb-3">
                                <button type="button" name="submit" class="btn bg-primary border-30 px-3"
                                    onclick="$('#modalBuktiPembayaran').modal('show');">
                                    Lanjutkan
                                </button>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        
        <div class="row align-content-start w-25 mx-0 mt-5 px-3">
            <h5 class="font-weight-bold w-100 my-auto">Your plan</h5>
            <div class="row bg-primary border-20 w-100 mx-0 mt-4 px-4 py-4">
                <div class="row justify-content-between w-100 mx-0">
                    <img src="<?= base_url() ?>/img/Background/Asset 38@300x.png" class="w-25">
                    <h6 class="text-white font-weight-bold mb-0 my-auto">
                        <?php switch ($user['kode_paket']) {
                            case '1': echo 'Reguler'; break;
                            case '2': echo 'Premium'; break;
                            case '3': echo 'Premium+'; break;
                            case '4': echo 'Intensif'; break;
                            case '5': echo 'Intensif+'; break;
                            case '6': echo 'TryOut'; break;
                            case '7': echo 'SKD'; break;
                        } ?>
                    </h6>
                </div>
                <h6 class="text-white font-weight-bold w-100 mt-5"><?= $user['nama'] ?></h6>
                <h6 class="text-white mb-0"><?= $user['id'] ?></h6>
            </div>
            <h5 class="font-weight-bold w-100 mt-5">Temanmu</h5>
            <div class="row mx-0 mt-4" style="height: 350px; overflow-y:auto;">
                <?php foreach ($others as $other) : ?>
                    <a href="<?= base_url() ?>/peserta/profil/<?= $other['username'] ?>" class="d-flex aling-content-center rounded w-100 mb-2">
                        <div class="row align-content-center justify-content-center mx-0" style="width: 20%;">
                            <img src="<?= base_url() ?>/img/profil/<?= $other['username'] ?>.jpg" alt="" class="bg-white border-30" style="object-fit:cover; width: 40px; height: 40px;" onerror="this.src='<?= base_url() ?>/img/profil.png'">
                        </div>
                        <div class="row align-content-center mx-0" style="width: 80%;">
                            <h6 class="font-weight-bold text-truncate w-100 ml-2 mb-0" style="color: #12336D;"><?= $other['nama'] ?></h6>
                            <h6 class="text-truncate text-capitalize ml-2 mb-0" style="color: #12336D;"><?= $other['jurusan'] ?></h6>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <?php if ($user['username'] == session('username')) { ?>
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
    <?php } ?>

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
            btn = document.getElementById('btnProfil');
            btn.setAttribute('class', 'btn bg-white text-dark font-weight-bold text-left rounded-0 px-3');
            btn = document.getElementById('btnAkun');
            btn.setAttribute('class', 'btn bg-white text-secondary font-weight-bold text-left rounded-0 px-3');
            btn.style="";
            btn = document.getElementById('btnPaket');
            btn.setAttribute('class', 'btn bg-white text-secondary font-weight-bold text-left rounded-0 px-3');
            btn.style="";

            document.getElementById('div-profil').style.display="flex";
            document.getElementById('div-akun').style.display="none";
            document.getElementById('div-paket').style.display="none";
        }

        function editAkun() {
            btn = document.getElementById('btnAkun');
            btn.setAttribute('class', 'btn bg-white text-dark font-weight-bold text-left rounded-0 px-3');
            btn = document.getElementById('btnProfil');
            btn.setAttribute('class', 'btn bg-white text-secondary font-weight-bold text-left rounded-0 px-3');
            btn.style="";
            btn = document.getElementById('btnPaket');
            btn.setAttribute('class', 'btn bg-white text-secondary font-weight-bold text-left rounded-0 px-3');
            btn.style="";

            document.getElementById('div-akun').style.display="flex";
            document.getElementById('div-profil').style.display="none";
            document.getElementById('div-paket').style.display="none";
        }

        function editPaket() {
            btn = document.getElementById('btnPaket');
            btn.setAttribute('class', 'btn bg-white text-dark font-weight-bold text-left rounded-0 px-3');
            btn = document.getElementById('btnProfil');
            btn.setAttribute('class', 'btn bg-white text-secondary font-weight-bold text-left rounded-0 px-3');
            btn.style="";
            btn = document.getElementById('btnAkun');
            btn.setAttribute('class', 'btn bg-white text-secondary font-weight-bold text-left rounded-0 px-3');
            btn.style="";

            document.getElementById('div-paket').style.display="flex";
            document.getElementById('div-profil').style.display="none";
            document.getElementById('div-akun').style.display="none";
        }

        document.getElementById('ubahMetodePembayaran').addEventListener(
            'change',
            function() {
                switch (this.value) {
                    case 'BRI':
                        document.getElementById('nomorPembayaran').innerHTML="BRI: 0344-0110-5184-503 a.n Ivan Masduqi Mahfuds";
                        break;
                    case 'OVO':
                        document.getElementById('nomorPembayaran').innerHTML="OVO: 0812-1647-3556 a.n Ivan";
                        break;
                    case 'GoPay':
                        document.getElementById('nomorPembayaran').innerHTML="GoPay: 0812-1647-3556 a.n Ivan";
                        break;
                    case 'Dana':
                        document.getElementById('nomorPembayaran').innerHTML="Dana: 0812-1647-3556 a.n Ivan";
                        break;
                    case 'Link Aja':
                        document.getElementById('nomorPembayaran').innerHTML="Link Aja: 0812-1647-3556 a.n Ivan Masduqi Mahfuds";
                        break;

                }
        });

        $('#uploadProfpic').click(function(){ $('#imgprofpic').trigger('click'); });

        document.getElementById('imgprofpic').addEventListener(
            'change',
            function() {
                var formData = new FormData();
                formData.append('imgprofpic', $('input[type=file]')[0].files[0]); 
                $.ajax({
                    url : '<?= base_url(); ?>'+'/peserta/simpanProfPic',
                    data : formData,
                    type : 'POST',
                    processData: false,
                    contentType: false,
                    success : function(data){
                        alert(data);
                        document.getElementById("imgprof").src="<?= base_url() ?>/img/profil/<?= session('username') ?>.jpg"
                    }
                });
        });
    </script>
</div>
<?= $this->endSection(); ?>