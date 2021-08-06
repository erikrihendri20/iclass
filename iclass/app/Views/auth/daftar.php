<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<?php $validation = service('validation') ?>
<div class="content mb-3 pb5">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column justify-content-center ">
                <h1 class="text-primary align-self-center font-weight-bold judul">Formulir Pendaftaran</h1>
                <form class="d-flex flex-column masuk" method="POST" action="" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="nama" class="text-primary font-weight-bold h5 fs-18">Nama</label>
                        <input type="text" value="<?= old('nama'); ?>" class="form-control fs-16 <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" id="nama" name="nama" placeholder="Nama">
                        <div class="invalid-feedback">
                            <?= service('validation')->getError('nama'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="jurusan" class="text-primary font-weight-bold h5 fs-18">Jurusan</label>
                        <input type="text" value="<?= old('jurusan'); ?>" class="form-control fs-16 <?= ($validation->hasError('jurusan')) ? 'is-invalid' : '' ?>" id="jurusan" name="jurusan" placeholder="Jurusan">
                        <div class="invalid-feedback">
                            <?= service('validation')->getError('jurusan'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="kode-paket" class="text-primary font-weight-bold h5 fs-18">Pilih Paket</label>
                        <select class="form-control fs-18 <?= ($validation->hasError('kode-paket')) ? 'is-invalid' : '' ?>" name="kode-paket" id="kode-paket">
                            <?php if(old('kode-paket')!=null): ?>
                                <?php foreach ($paket as $p) :?>
                                    <option class="fs-16" value="<?= $p['id']; ?>" <?php if (old('kode-paket') == $p['id']) echo 'selected' ?>><?= $p['nama']; ?></option>
                                <?php endforeach; ?>
                            <?php elseif($pilihPaket!=null): ?>
                                <?php foreach ($paket as $p) :?>
                                    <option class="fs-16" value="<?= $p['id']; ?>" <?php if ($pilihPaket == $p['id']) echo 'selected' ?>><?= $p['nama']; ?></option>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <?php foreach ($paket as $p) :?>
                                    <option class="fs-16" value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                        <div class="invalid-feedback">
                            <?= service('validation')->getError('kode-paket'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telepon" class="text-primary font-weight-bold h5 fs-18">Nomor Whatsapp</label>
                        <input type="text" value="<?= old('telepon'); ?>" class="form-control fs-16 <?= ($validation->hasError('telepon')) ? 'is-invalid' : '' ?>" id="telepon" name="telepon" placeholder="Nomor Whatsapp">
                        <div class="invalid-feedback">
                            <?= service('validation')->getError('telepon'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="text-primary font-weight-bold h5 fs-18">Email</label>
                        <input type="email" value="<?= old('email'); ?>" class="form-control fs-16 <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="Email">
                        <div class="invalid-feedback">
                            <?= service('validation')->getError('email'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="username" class="text-primary font-weight-bold h5 fs-18">Username</label>
                        <input type="text" value="<?= old('username'); ?>" class="form-control fs-16 <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>" id="username" name="username" placeholder="Username">
                        <div class="invalid-feedback">
                            <?= service('validation')->getError('username'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="text-primary font-weight-bold h5 fs-18">Password</label>
                        <input type="password" class="form-control fs-16 <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" id="password" name="password" placeholder="Password">
                        <div class="invalid-feedback">
                            <?= service('validation')->getError('password'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="konfirmasi-password" class="text-primary font-weight-bold h5 fs-18">Konfirmasi Password</label>
                        <input type="password" class="form-control fs-16 <?= ($validation->hasError('konfirmasi-password')) ? 'is-invalid' : '' ?>" id="konfirmasi-password" name="konfirmasi-password" placeholder="Konfirmasi Password">
                        <div class="invalid-feedback">
                            <?= service('validation')->getError('konfirmasi-password'); ?>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-3">

                        <button type="submit" name="kembali" class="btn btn-warning align-self-center mx-1" style="border-radius: 10px;">
                            <span class="text-light h4 px-4 subjudul">Kembali</span>
                        </button>
                        <button type="submit" name="submit" class="btn btn-primary align-self-center mx-1" style="border-radius: 10px;">
                            <span class="text-light h4 px-4 subjudul">Lanjutkan</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>