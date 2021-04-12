<?= $this->extend('templates/peserta'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0">
    <div class="mx-5 pt-5 border rounded">
        <form class="w-75 mx-auto">
            <img class="mx-auto d-block" style="max-width: 20em;" class="" src="<?= base_url('') ?>/img/4.png" alt="Card image cap">

            <div class="form-group">
                <label class="text-primary font-weight-bold" for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold" for="kelas">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas">
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold" for="jurusan">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan">
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold" for="pilihan-paket">Pilihan Paket</label>
                <input type="text" class="form-control" id="pilihan-paket" name="pilihan-paket">
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold" for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold" for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold" for="whatsapp">No WhatsApps</label>
                <input type="text" class="form-control" id="whatsapp" name="whatsapp">
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold" for="pass-lama">Password Lama</label>
                <input type="text" class="form-control" id="pass-lama" name="pass-lama">
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold" for="pass-baru">Password Baru</label>
                <input type="text" class="form-control" id="pass-baru" name="pass-baru">
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold" for="pass-konfirmasi">Konfirmasi Password</label>
                <input type="text" class="form-control" id="pass-konfirmasi" name="pass-konfirmasi">
            </div>

            <div class="text-right p-2">
                <button type="submit" name="batal" class="btn btn-primary align-self-center mx-1">Batalkan</button>
                <button type="submit" name="simpan" class="btn btn-primary align-self-center mx-1">Simpan</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>