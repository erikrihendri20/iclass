<?= $this->extend('templates/peserta'); ?>
<?= $this->section('content'); ?>

<?php if (session('flash')) : ?>
    <?= session('flash'); ?>
<?php endif; ?>

<?php $validation = service('validation') ?>
<div class="content mb-0">
    <div class="mx-5 pt-5 mb-3 border" style="border-radius: 30px;">
        <form class="w-75 mx-auto" method="post" action="<?= base_url('peserta/editProfil') ?>">
            <img class="mx-auto d-block" style="max-width: 20em;" class="" src="<?= base_url('') ?>/img/4.png" alt="Card image cap">

            <div class="form-group">
                <label class="text-primary font-weight-bold h4 fs-18" for="nama">Nama</label>
                <input type="text" style="border-radius: 10px;" class="form-control bg-white w-75 fs-18<?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" id="nama" name="nama" value="<?= $nama; ?>">
                <div class="invalid-feedback">
                    <?= service('validation')->getError('nama'); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold h4 fs-18" for="kelas">Kelas</label>
                <input type="text" style="border-radius: 10px;" class="form-control bg-white w-75 fs-18<?= ($validation->hasError('kelas')) ? 'is-invalid' : '' ?>" id="kelas" name="kelas" value="<?= $kelas ?>" disabled="true" readonly>
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold h4 fs-18" for="jurusan">Jurusan</label>
                <input type="text" style="border-radius: 10px;" class="form-control bg-white w-75 fs-18<?= ($validation->hasError('jurusan')) ? 'is-invalid' : '' ?>" id="jurusan" name="jurusan" value="<?= $jurusan; ?>">
                <div class="invalid-feedback">
                    <?= service('validation')->getError('jurusan'); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold h4 fs-18" for="pilih-paket">Pilihan Paket</label>
                <input type="text" style="border-radius: 10px;" class="form-control bg-white w-75 fs-18<?= ($validation->hasError('pilih-paket')) ? 'is-invalid' : '' ?>" id="pilih-paket" name="pilih-paket" value="<?= $paket; ?>" disabled="true" readonly>

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
                <label class="text-primary font-weight-bold h4 fs-18" for="username">Username</label>
                <input type="text" style="border-radius: 10px;" class="form-control bg-white w-75 fs-18<?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>" id="username" name="username" value="<?= $username; ?>">
                <div class="invalid-feedback">
                    <?= service('validation')->getError('username'); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold h4 fs-18" for="email">Email</label>
                <input type="text" style="border-radius: 10px;" class="form-control bg-white w-75 fs-18<?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" id="email" name="email" value="<?= $email; ?>">
                <div class="invalid-feedback">
                    <?= service('validation')->getError('email'); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold h4 fs-18" for="telepon">No WhatsApps</label>
                <input type="text" style="border-radius: 10px;" class="form-control bg-white w-75 fs-18<?= ($validation->hasError('telepon')) ? 'is-invalid' : '' ?>" id="telepon" name="telepon" value="<?= $no_wa; ?>">
                <div class="invalid-feedback">
                    <?= service('validation')->getError('telepon'); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold h4 fs-18" for="pass-lama">Password Lama</label>
                <input type="password" style="border-radius: 10px;" class="form-control bg-white w-75 fs-18<?= ($validation->hasError('pass-lama')) ? 'is-invalid' : '' ?>" id="pass-lama" name="pass-lama">
                <div class="invalid-feedback">
                    <?= service('validation')->getError('pass-lama'); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold h4 fs-18" for="pass-baru">Password Baru</label>
                <input type="password" style="border-radius: 10px;" class="form-control bg-white w-75 fs-18<?= ($validation->hasError('pass-baru')) ? 'is-invalid' : '' ?>" id="pass-baru" name="pass-baru" placeholder="isi jika anda akan mengganti password, kosongi jika tidak">
                <div class="invalid-feedback">
                    <?= service('validation')->getError('pass-baru'); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold h4 fs-18" for="pass-konfirmasi">Konfirmasi Password</label>
                <input type="password" style="border-radius: 10px;" class="form-control bg-white w-75 fs-18<?= ($validation->hasError('pass-konfirmasi')) ? 'is-invalid' : '' ?>" id="pass-konfirmasi" name="pass-konfirmasi" placeholder="isi jika anda akan mengganti password, kosongi jika tidak">
                <div class="invalid-feedback">
                    <?= service('validation')->getError('pass-konfirmasi'); ?>
                </div>
            </div>

            <div class="text-right mt-5 pb-4">
                <button type="submit" name="batal" class="btn btn-primary align-self-center mx-1 mt-3" style="border-radius: 10px;">
                    <span class="text-light px-4 h5 fs-18">Batalkan</span>
                </button>
                <button type="submit" name="submit" class="btn btn-primary align-self-center mx-1 mt-3" style="border-radius: 10px;">
                    <span class="text-light px-4 h5 fs-18">Simpan</span>
                </button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>