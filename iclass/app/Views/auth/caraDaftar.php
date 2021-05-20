<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mt-3 mx-5 py-3">
    <!-- Content-->
    <div class="display-3 text-primary font-weight-bold mb-4 mx-5">
        <p style="margin: 0px; padding: 0px;">Tata Cara</p>
        <p style="margin: 0px; padding: 0px;">Pendaftaran</p>
    </div>
    <div class="mx-5 bg-white rounded" style="-webkit-box-shadow: 0px 6px 20px 0px rgba(107,107,107,1);
        -moz-box-shadow: 0px 6px 20px 0px rgba(107,107,107,1);
        box-shadow: 0px 6px 20px 0px rgba(107,107,107,1);">
        <ol class="p-3 m-5 text-justify h5">
            <li class="my-3">Isi formulir pendaftaran <a class="font-weight-bold" href="<?= base_url('daftar'); ?>">disini</a> atau bisa langsung menghubungi admin melalui WhatsApps ke nomor berikut 0822 3220 7642</li>
            <li class="my-3">Lakukan pengisian formulir selengkap mungkin</li>
            <li class="my-3">Pada isian kelas, jika telah lulus SMA/SMK, maka bisa diisikan dengan keterangan alumni (namun tetap menyertakan informasi perihal jurusan sewaktu SMA/SMK)</li>
            <li class="my-3">Pembayaran bisa dikosongkan terlebih dahulu. Maksimal pembayaran dilakukan pada 3x24 jam setelah pengisian formulir pendaftaran</li>
            <li class="my-3">Pilihan metode pembayaran yang tersedia</li>
            <ul>
                <li class="my-2">BRI : 0344 0110 5184 503 a.n Ivan Masduqi Mahfuds</li>
                <li class="my-2">OVO : 0812 1647 3536 a.n Ivan</li>
                <li class="my-2">GoPay : 0812 1647 3536 a.n Ivan</li>
                <li class="my-2">Dana : 0812 1647 3536 a.n Ivan</li>
                <li class="my-2">Link Aja : 0812 1647 3536 a.n Ivan Masduqi Mahfuds</li>
            </ul>
            <li class="my-3">Admin akan mengkonfirmasi melalui WhatsApps jika anda telah melakukan pembayaran</li>
            <li class="my-3">Selesai dan selamat bergabung bersama kami</li>
        </ol>
    </div>
    <div class="text-right mx-5 mt-3">
        <a href="<?= base_url('daftar'); ?>" class="btn btn-primary card-link" style="border-radius: 15px;">
            <span class="h4 px-4">Lanjutkan</span>
        </a>
    </div>
</div>
<?= $this->endSection(); ?>