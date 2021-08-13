<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<?php $validation = service('validation') ?>
<div class="content mb-3 pb5">
    <div class="row shadow-lg border-20 mnya-5 px-0" style="height: 90vh;">
        <div class="col-7 h-100 px-5">
            <div id="daftar" class="carousel slide" data-ride="carousel" data-interval="false" data-pause="hover">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center align-self-center w-100 mx-0">
                            <h3 class="text-center font-weight-bold w-100 mt5" style="color: darkblue;">Tata Cara Pendaftaran</h3>
                            <div class="border border-20 mx-1 p-3">
                                <div style="max-height: 400px; overflow-y: auto;">
                                    <h5 class="bg-primary text-white rounded my-1 px-3 py-1 fs-12">Buat akun kamu disini atau bisa langsung menghubungi admin</h5>
                                    <h5 class="my-1 px-3 py-1 fs-12" style="color: darkblue;">melalui WhatsApp ke nomor berikut <a href="http://wa.me/6281353378068" class="btn font-weight-bold border-0 p-0" style="color: darkblue;">0813 5337 8068</a></h5>
                                    <h5 class="bg-primary text-white rounded my-1 px-3 py-1 fs-12">Lakukan pengisian informasi akun selengkap mungkin</h5>
                                    <h5 class="bg-primary text-white rounded my-1 px-3 py-1 fs-12">Pada isian kelas, jika telah lulus SMA/SMK maka bisa diisikan dengan</h5>
                                    <h5 class="my-1 px-3 py-1 fs-12" style="color: darkblue;">keterangan alumni</h5>
                                    <h5 class="bg-primary text-white rounded my-1 px-3 py-1 fs-12">Pembayaran bisa dikosongkan terlebih dahulu. Maksimal pembayaran</h5>
                                    <h5 class="my-1 px-3 py-1 fs-12" style="color: darkblue;">dilakukan dalam jangka waktu 3x24 jam setelah pembuatan akun</h5>
                                    <h5 class="bg-primary text-white rounded my-1 px-3 py-1 fs-12">Pilihan metode pembayaran yang tersedia</h5>
                                    <h5 class="my-1 px-3 py-1 fs-12" style="color: darkblue;">
                                        BRI : 0344-0110-5184-503 a.n Ivan Masduqi Mahfuds<br/>
                                        OVO : 0812-1647-3536 a.n Ivan<br/>
                                        Gopay : 0812-1647-3536 a.n Ivan<br/>
                                        Dana : 0812-1647-3536 a.n Ivan<br/>
                                        Link Aja : 0812-1647-3536 a.n Ivan Masduqi Mahfuds
                                    </h5>
                                    <h5 class="bg-primary text-white rounded my-1 px-3 py-1 fs-12">Admin akan mengonfirmasi melalui WhatsApp jika kamu telah</h5>
                                    <h5 class="my-1 px-3 py-1 fs-12" style="color: darkblue;">menunggah bukti pembayaran</h5>
                                    <h5 class="bg-primary text-white rounded my-1 px-3 py-1 fs-12">Selesai dan selamat bergabung dengan kami</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center align-self-center w-100 mx-0">
                            <h3 class="font-weight-bold w-100 mt5" style="color: darkblue;">Buat akun baru (1/2)</h3>
                            <div class="border border-20 w-100 mx-1 p-3">
                                <div style="height: 400px;">
                                    <form class="d-flex flex-column masuk" method="POST" action="" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="email" class="font-weight-bold h5 fs-18" style="color: darkblue;">Email</label>
                                            <input type="email" value="<?= old('email'); ?>" class="form-control fs-16 <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="Email">
                                            <div class="invalid-feedback">
                                                <?= service('validation')->getError('email'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="username" class="font-weight-bold h5 fs-18" style="color: darkblue;">Username</label>
                                            <input type="text" value="<?= old('username'); ?>" class="form-control fs-16 <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>" id="username" name="username" placeholder="Username">
                                            <div class="invalid-feedback">
                                                <?= service('validation')->getError('username'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="password" class="font-weight-bold h5 fs-18" style="color: darkblue;">Password</label>
                                            <input type="password" class="form-control fs-16 <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" id="password" name="password" placeholder="Password">
                                            <div class="invalid-feedback">
                                                <?= service('validation')->getError('password'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="konfirmasi-password" class="font-weight-bold h5 fs-18" style="color: darkblue;">Konfirmasi Password</label>
                                            <input type="password" class="form-control fs-16 <?= ($validation->hasError('konfirmasi-password')) ? 'is-invalid' : '' ?>" id="konfirmasi-password" name="konfirmasi-password" placeholder="Konfirmasi Password">
                                            <div class="invalid-feedback">
                                                <?= service('validation')->getError('konfirmasi-password'); ?>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center align-self-center w-100 mx-0">
                            <h3 class="font-weight-bold w-100 mt5" style="color: darkblue;">Buat akun baru (2/2)</h3>
                            <div class="border border-20 w-100 mx-1 p-3">
                                <div style="height: 400px; overflow-y: auto;">
                                        <div class="form-group">
                                            <label for="nama" class="font-weight-bold h5 fs-18" style="color: darkblue;">Nama</label>
                                            <input type="text" value="<?= old('nama'); ?>" class="form-control fs-16 <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" id="nama" name="nama" placeholder="Nama">
                                            <div class="invalid-feedback">
                                                <?= service('validation')->getError('nama'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="kode-paket" class="font-weight-bold h5 fs-18" style="color: darkblue;">Kelas</label>
                                            <select class="form-control fs-18 <?= ($validation->hasError('jurusan')) ? 'is-invalid' : '' ?>" name="jurusan" id="jurusan">
                                                <option value="none" selected disabled hidden>Pilih kelas</option>
                                                <option class="fs-16" value="Kelas 10" onclick="ubahPaket('kelas');">Kelas 10</option>
                                                <option class="fs-16" value="Kelas 11" onclick="ubahPaket('kelas');">Kelas 11</option>
                                                <option class="fs-16" value="Kelas 12" onclick="ubahPaket('kelas');">Kelas 12</option>
                                                <option class="fs-16" value="Intensif" onclick="ubahPaket('intensif');">Intensif</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?= service('validation')->getError('jurusan'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="telepon" class="font-weight-bold h5 fs-18" style="color: darkblue;">Nomor Whatsapp</label>
                                            <input type="text" value="<?= old('telepon'); ?>" class="form-control fs-16 <?= ($validation->hasError('telepon')) ? 'is-invalid' : '' ?>" id="telepon" name="telepon" placeholder="Nomor Whatsapp">
                                            <div class="invalid-feedback">
                                                <?= service('validation')->getError('telepon'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="kode-paket" class="font-weight-bold h5 fs-18" style="color: darkblue;">Pilih Paket</label>
                                            <select class="form-control fs-18 <?= ($validation->hasError('kode-paket')) ? 'is-invalid' : '' ?>" name="kode-paket" id="kode-paket" disabled></select>
                                            <div class="invalid-feedback">
                                                <?= service('validation')->getError('kode-paket'); ?>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <button type="submit" name="submit" class="btn btn-primary btn-sm text-white px-4" style="border-radius: 10px;">Daftar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-around w-100 mt5">
                    <a class="btn btn-sm btn-primary text-white px-2 fs-12" style="border-radius: 10px;" href="#daftar" role="button" data-slide="prev"><span class="fas fa-arrow-left"></span>&nbsp;&nbsp;Sebelumnya</a>
                    <a class="btn btn-sm btn-primary text-white px-2 fs-12" style="border-radius: 10px;" href="#daftar" role="button" data-slide="next">Selanjutnya&nbsp;&nbsp;<span class="fas fa-arrow-right"></span></a>
                </div>
            </div>
        </div>
        <div class="col-5 d-flex justify-content-center align-self-center bg-primary h-100 px-5" style="border-radius: 0 20px 20px 0;">
            <img src="<?= base_url() ?>/img/Aset/Asset 4@300x.png" alt="" class="w-100 mx-3" style="object-fit: contain;">
        </div>
    </div>

    <script>
        document.getElementById('jurusan').addEventListener('change', function(){
            var paket = document.getElementById('kode-paket');
            paket.removeAttribute('disabled');

            var kelas = this.value;
            if (kelas != 'Intensif') {
                paket.innerHTML=`<option class="fs-16" value="1" selected>Reguler</option>
                                <option class="fs-16" value="2">Premium</option>
                                <option class="fs-16" value="3">Premium+</option>`;
            } else {
                paket.innerHTML=`<option class="fs-16" value="4" selected>1 Semester</option>
                                <option class="fs-16" value="5">1 Tahun</option>`;
            }
        });
    </script>
</div>
<?= $this->endSection(); ?>