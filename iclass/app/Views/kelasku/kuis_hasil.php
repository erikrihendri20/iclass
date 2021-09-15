<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0 pb5">
    <div class="w-75 mx-auto mt5">
        <div class="col-2 px-0 mx-auto">
            <div class="row bg-white border rounded-circle position-relative w-75 mx-auto">
                <img src="<?= base_url() ?>/img/profil.png" alt="" class="w-100 rounded-circle position-relative p-1">
                <img src="<?= base_url() ?>/img/profil/<?= session('username') ?>.jpg" alt="" class="w-100 h-100 rounded-circle position-absolute p-1" style="object-fit: cover;" onerror='this.style.display = "none"'>
            </div>
        </div>
        <div class="text-center font-weight-bold h1" style="color: #12336D;">Hasil</div>
        <div class="h2 text-center text-white font-weight-bold w-50 mx-auto mb-0 px-3 py-2" style="background-color: #12336D; border-radius: 15px;"><?= $kuis['title'] ?></div>
        <div class="h4 text-center font-weight-bold mt-2" style="color: #12336D;"><?= date('d F Y', strtotime($kuis['start_event'])) ?></div>
    </div>
    <div class="row justify-content-center mx-0 my-5 py-5">
        <div class="col-2">
            <img class="mx-auto d-block" style="max-width: 7em;" class="" src="<?= base_url('') ?>/img/Benar.png" alt="Benar_icon">
            <div class="text-center my-3">
                <h2 class="text-primary font-weight-bold">Benar</h2>
            </div>
            <div class="text-center my-2">
                <h2 class="text-white font-weight-bold bg-primary mx-auto w-50" style="border-radius: 13px;">
                    <?= $kuis['benar'] ?>
                </h2>
            </div>
        </div>
        <div class="col-2">
            <img class="mx-auto d-block" style="max-width: 7em;" class="" src="<?= base_url('') ?>/img/Salah.png" alt="Salah_icon">
            <div class="text-center my-3">
                <h2 class="text-primary font-weight-bold">Salah</h2>
            </div>
            <div class="text-center my-2">
                <h2 class="text-white font-weight-bold bg-primary mx-auto w-50" style="border-radius: 13px;">
                    <?= $kuis['salah'] ?>
                </h2>
            </div>
        </div>
        <div class="col-2">
            <img class="mx-auto d-block" style="max-width: 7em;" class="" src="<?= base_url('') ?>/img/Kosong.png" alt="Kosong_icon">
            <div class="text-center my-3">
                <h2 class="text-primary font-weight-bold">Kosong</h2>
            </div>
            <div class="text-center my-2">
                <h2 class="text-white font-weight-bold bg-primary mx-auto w-50" style="border-radius: 13px;">
                    <?= $kuis['kosong'] ?>
                </h2>
            </div>
        </div>
        <div class="col-2">
            <img class="mx-auto d-block" style="max-width: 7em;" class="" src="<?= base_url('') ?>/img/Passing Grade.png" alt="Passing_Grade_icon">
            <div class="text-center font-weight-bold my-3">
                <h2 class="text-primary">Persentase</h2>
            </div>
            <div class="text-center my-2">
                <h2 class="text-white font-weight-bold bg-primary mx-auto w-50" style="border-radius: 13px;"><?= $persentase ?>%</h1>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mx-0">
        <a href="<?= base_url() ?>/peserta" class="btn btn-light text-white font-weight-bold" style="background-color: #12336D;">kembali ke Beranda</a>
    </div>
</div>
<?= $this->endSection(); ?>