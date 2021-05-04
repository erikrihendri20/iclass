<?= $this->extend('templates/peserta'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0">
    <div class="mx-5 pt-5 mb-3 border rounded">
        <form class="w-75 pb-5 mx-auto">
            <img class="mx-auto d-block" style="max-width: 20em;" class="" src="<?= base_url('') ?>/img/4.png" alt="Card image cap">

            <div class="form-group">
                <label class="text-primary font-weight-bold" for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama; ?>" readonly>
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold" for="kelas">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas" value="<?= $kelas; ?>" readonly>
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold" for="jurusan">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $jurusan; ?>" readonly>
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold" for="pilihan-paket">Pilihan Paket</label>
                <input type="text" class="form-control" id="pilihan-paket" name="pilihan-paket" value="<?= $paket; ?>" readonly>
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold" for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="<?= $username; ?>" readonly>
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold" for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?= $email; ?>" readonly>
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold" for="whatsapp">No WhatsApps</label>
                <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="<?= $no_wa; ?>" readonly>
            </div>
            <!-- <div class="form-group">
                <label class="text-primary font-weight-bold" for="pass">Password</label>
                <input type="text" class="form-control" id="pass" name="pass" value="<?= $password; ?>" readonly>
            </div> -->
        </form>
    </div>
</div>
<?= $this->endSection(); ?>