<?= $this->extend('templates/peserta'); ?>
<?= $this->section('content'); ?>

<?php if (session('flash')) : ?>
    <?= session('flash'); ?>
<?php endif; ?>

<?php $validation = service('validation') ?>
<div class="content mb-0">
    <div class="mx-5 pt-5 border rounded">
        <form class="w-75 mx-auto" method="post" action="<?= base_url('peserta/editProfil') ?>">
            <img class="mx-auto d-block" style="max-width: 20em;" class="" src="<?= base_url('') ?>/img/4.png" alt="Card image cap">

            <div class="form-group">
                <label class="text-primary font-weight-bold" for="nama">Nama</label>
                <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" id="nama" name="nama" value="<?= $nama; ?>">
                <div class="invalid-feedback">
                    <?= service('validation')->getError('nama'); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold" for="kelas">Kelas</label>
                <input type="text" class="form-control <?= ($validation->hasError('kelas')) ? 'is-invalid' : '' ?>" id="kelas" name="kelas" value="<?= $kelas ?>" disabled="true" readonly>
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold" for="jurusan">Jurusan</label>
                <input type="text" class="form-control <?= ($validation->hasError('jurusan')) ? 'is-invalid' : '' ?>" id="jurusan" name="jurusan" value="<?= $jurusan; ?>">
                <div class="invalid-feedback">
                    <?= service('validation')->getError('jurusan'); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold" for="pilih-paket">Pilihan Paket</label>
                <input type="text" class="form-control <?= ($validation->hasError('pilih-paket')) ? 'is-invalid' : '' ?>" id="pilih-paket" name="pilih-paket" value="<?= $paket; ?>" disabled="true" readonly>

                <!-- <select class="custom-select form-control <?= ($validation->hasError('pilih-paket')) ? 'is-invalid' : '' ?>" id="pilih-paket" name="pilih-paket">
                    <option value="1" <?php if ($paket == 1) echo 'selected'; ?>>Paket Reguler</option>
                    <option value="2" <?php if ($paket == 2) echo 'selected'; ?>>Paket Premium</option>
                    <option value="3" <?php if ($paket == 3) echo 'selected'; ?>>Paket Premium*</option>
                </select> -->
                <div class="invalid-feedback">
                    <?= service('validation')->getError('pilih-paket'); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold" for="username">Username</label>
                <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>" id="username" name="username" value="<?= $username; ?>">
                <div class="invalid-feedback">
                    <?= service('validation')->getError('username'); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold" for="email">Email</label>
                <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" id="email" name="email" value="<?= $email; ?>">
                <div class="invalid-feedback">
                    <?= service('validation')->getError('email'); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold" for="telepon">No WhatsApps</label>
                <input type="text" class="form-control <?= ($validation->hasError('telepon')) ? 'is-invalid' : '' ?>" id="telepon" name="telepon" value="<?= $no_wa; ?>">
                <div class="invalid-feedback">
                    <?= service('validation')->getError('telepon'); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold" for="pass-lama">Password Lama</label>
                <input type="password" class="form-control <?= ($validation->hasError('pass-lama')) ? 'is-invalid' : '' ?>" id="pass-lama" name="pass-lama">
                <div class="invalid-feedback">
                    <?= service('validation')->getError('pass-lama'); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold" for="pass-baru">Password Baru</label>
                <input type="password" class="form-control <?= ($validation->hasError('pass-baru')) ? 'is-invalid' : '' ?>" id="pass-baru" name="pass-baru" placeholder="isi jika anda akan mengganti password, kosongi jika tidak">
                <div class="invalid-feedback">
                    <?= service('validation')->getError('pass-baru'); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold" for="pass-konfirmasi">Konfirmasi Password</label>
                <input type="password" class="form-control <?= ($validation->hasError('pass-konfirmasi')) ? 'is-invalid' : '' ?>" id="pass-konfirmasi" name="pass-konfirmasi" placeholder="isi jika anda akan mengganti password, kosongi jika tidak">
                <div class="invalid-feedback">
                    <?= service('validation')->getError('pass-konfirmasi'); ?>
                </div>
            </div>

            <div class="text-right p-2">
                <button type="submit" name="batal" class="btn btn-primary align-self-center mx-1">Batalkan</button>
                <button type="submit" name="submit" class="btn btn-primary align-self-center mx-1">Simpan</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>