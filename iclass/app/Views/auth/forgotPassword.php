<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content my-3 bg-light">
    <!-- Content-->
    <div class="display-3 text-primary font-weight-bold mb-4 mx-5">
        <p>Lupa Password</p>
    </div>
    <div class="px-3 mx-5 bg-white rounded" style="-webkit-box-shadow: 0px 6px 20px 0px rgba(107,107,107,1);
        -moz-box-shadow: 0px 6px 20px 0px rgba(107,107,107,1);
        box-shadow: 0px 6px 20px 0px rgba(107,107,107,1);">
        <ol class="p-3 text-justify h6">
            <li class="my-3 fs-16">Silahkan lakukan pengisian ulang biodata sesuai data diri yang anda daftarkan ketika pendaftaran</li>
            <li class="my-3 fs-16">Jika data diri tidak cocok, kami akan berikan informasi terkait password anda via WhatsApps</li>
            <li class="my-3 fs-16">Bukti pembayaran bisa dikosongkan (jia sudah hilang atau terhapus)</li>
            <li class="my-3 fs-16">Proses verifikasi akan dilakukan dalam waktu 1x24 jam</li>
        </ol>
    </div>

    <div class="mx-5 pt-5">
        <form class="w-75 mx-auto">
            <div class="form-group">
                <label class="text-primary font-weight-bold fs-18" for="nama">Nama</label>
                <input type="text" class="form-control fs-18" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold fs-18" for="kelas">Kelas</label>
                <input type="text" class="form-control fs-18" id="kelas" name="kelas">
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold fs-18" for="jurusan">Jurusan</label>
                <input type="text" class="form-control fs-18" id="jurusan" name="jurusan">
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold fs-18" for="pilihan-paket">Pilihan Paket</label>
                <input type="text" class="form-control fs-18" id="pilihan-paket" name="pilihan-paket">
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold fs-18" for="username">Username</label>
                <input type="text" class="form-control fs-18" id="username" name="username">
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold fs-18" for="email">Email</label>
                <input type="text" class="form-control fs-18" id="email" name="email">
            </div>
            <div class="form-group">
                <label class="text-primary font-weight-bold fs-18" for="whatsapp">No WhatsApps</label>
                <input type="text" class="form-control fs-18" id="whatsapp" name="whatsapp">
            </div>

            <div class="form-group">
                <label class="text-primary font-weight-bold fs-18" for="bukti">Bukti Pembayaran</label>
                <input type="file" class="form-control fs-18" id="bukti" name="bukti">
            </div>

            <!-- <div class="input-group mb-3">
                <div class="w-100">
                    <label class="text-primary font-weight-bold" for="bukti">Bukti Pembayaran</label>
                </div>
                <div class="custom-file" id="bukti">
                    <input type="file" class="custom-file-input" id="bukti_pembayaran" name="bukti_pembayaran">
                    <label class="custom-file-label" for="bukti_pembayaran">Choose file</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text" id="">Upload</span>
                </div>
            </div> -->
        </form>
    </div>

    <div class="text-right mx-5 my-3">
        <a href="<?= base_url(); ?>" class="btn btn-primary card-link fs-18">Kirim</a>
    </div>
</div>
<?= $this->endSection(); ?>