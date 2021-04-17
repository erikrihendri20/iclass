<?= $this->extend('templates/admin/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
<?php $validation = service('validation') ?>
<!-- Page Heading -->
<div class="">
<h1 class="h3 mb-4 text-gray-800">Edit Peserta</h1>
</div>
                <form class="d-flex flex-column masuk" method="POST" action="" enctype="multipart/form-data">
                    <input type="hidden" value="<?= $user['id']; ?>">

                    <div class="form-group">
                        <label for="nama" >Nama</label>
                        <input type="text" value="<?= (old('nama')!=null) ? old('nama') : $user['nama']; ?>" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" id="nama" name="nama" placeholder="Nama">
                        <div class="invalid-feedback">
                            <?= service('validation')->getError('nama'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="jurusan" >Jurusan</label>
                        <input type="text" value="<?= (old('jurusan')!=null) ? old('jurusan') : $user['jurusan']; ?>" class="form-control <?= ($validation->hasError('jurusan')) ? 'is-invalid' : '' ?>" id="jurusan" name="jurusan" placeholder="Jurusan">
                        <div class="invalid-feedback">
                            <?= service('validation')->getError('jurusan'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="kode-paket" >Pilih Paket</label>
                        <select class="form-control <?= ($validation->hasError('kode-paket')) ? 'is-invalid' : '' ?>" name="kode-paket" id="kode-paket">
                            <?php foreach ($paket as $p) :?>
                                <option value="<?= $p['id']; ?>" <?php if (old('kode-paket') == $p['id']) echo 'selected'; elseif($user['kode_paket'] == $p['id']) echo 'selected'; ?>><?= $p['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="invalid-feedback">
                            <?= service('validation')->getError('kode-paket'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telepon" >Nomor Whatsapp</label>
                        <input type="text" value="<?= (old('telepon')!=null) ? old('telepon') : $user['telepon']; ?>" class="form-control <?= ($validation->hasError('telepon')) ? 'is-invalid' : '' ?>" id="telepon" name="telepon" placeholder="Nomor Whatsapp">
                        <div class="invalid-feedback">
                            <?= service('validation')->getError('telepon'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" >Email</label>
                        <input type="email" value="<?= (old('email')!=null) ? old('email') : $user['email']; ?>" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="Email">
                        <div class="invalid-feedback">
                            <?= service('validation')->getError('email'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="username" >Username</label>
                        <input type="text" value="<?= (old('username')!=null) ? old('username') : $user['username']; ?>" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>" id="username" name="username" placeholder="Username">
                        <div class="invalid-feedback">
                            <?= service('validation')->getError('username'); ?>
                        </div>
                    </div>

                    <div class="">
                        <button type="submit" name="submit" class="btn btn-primary">lanjutkan</button>
                    </div>
                </form>
</div>
<?= $this->endSection(); ?>