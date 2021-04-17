<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<?php $validation = service('validation') ?>
<div class="content mb-3">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column justify-content-center ">
                <h1 class="text-primary align-self-center">Formulir Pendaftaran</h1>
                <form class="d-flex flex-column masuk" method="POST" action="" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="nama" class="text-primary">Nama</label>
                        <input type="text" value="<?= old('nama'); ?>" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" id="nama" name="nama" placeholder="Nama">
                        <div class="invalid-feedback">
                            <?= service('validation')->getError('nama'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="jurusan" class="text-primary">Jurusan</label>
                        <input type="text" value="<?= old('jurusan'); ?>" class="form-control <?= ($validation->hasError('jurusan')) ? 'is-invalid' : '' ?>" id="jurusan" name="jurusan" placeholder="Jurusan">
                        <div class="invalid-feedback">
                            <?= service('validation')->getError('jurusan'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pilih-paket" class="text-primary">Pilih Paket</label>
                        <select class="form-control <?= ($validation->hasError('pilih-paket')) ? 'is-invalid' : '' ?>" name="pilih-paket" id="pilih-paket">
                            <?php foreach ($paket as $p) :?>
                            <option value="<?= $p['id']; ?>" <?php if (old('pilih-paket') == $p['id']) echo 'selected' ?>><?= $p['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="invalid-feedback">
                            <?= service('validation')->getError('pilih-paket'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telepon" class="text-primary">Nomor Whatsapp</label>
                        <input type="text" value="<?= old('telepon'); ?>" class="form-control <?= ($validation->hasError('telepon')) ? 'is-invalid' : '' ?>" id="telepon" name="telepon" placeholder="Nomor Whatsapp">
                        <div class="invalid-feedback">
                            <?= service('validation')->getError('telepon'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="text-primary">Email</label>
                        <input type="email" value="<?= old('email'); ?>" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="Email">
                        <div class="invalid-feedback">
                            <?= service('validation')->getError('email'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="username" class="text-primary">Username</label>
                        <input type="text" value="<?= old('username'); ?>" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>" id="username" name="username" placeholder="Username">
                        <div class="invalid-feedback">
                            <?= service('validation')->getError('username'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="text-primary">Password</label>
                        <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" id="password" name="password" placeholder="Password">
                        <div class="invalid-feedback">
                            <?= service('validation')->getError('password'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="konfirmasi-password" class="text-primary">Konfirmasi Password</label>
                        <input type="password" class="form-control <?= ($validation->hasError('konfirmasi-password')) ? 'is-invalid' : '' ?>" id="konfirmasi-password" name="konfirmasi-password" placeholder="Konfirmasi Password">
                        <div class="invalid-feedback">
                            <?= service('validation')->getError('konfirmasi-password'); ?>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">

                        <button type="submit" name="kembali" class="btn btn-warning align-self-center mx-1">Kembali</button>
                        <button type="submit" name="submit" class="btn btn-primary align-self-center mx-1">lanjutkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>