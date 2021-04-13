<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0">
    <div class="mx-5 pt-5">
        <img class="mx-auto d-block" style="max-width: 20em;" class="" src="<?= base_url('') ?>/img/4.png" alt="Card image cap">
    </div>
    <div class="text-center text-primary h2">[Nama]</div>
    <div class="text-center text-primary h2">[Email]</div>
    <div class="text-center my-5">
        <h1 class="text-white bg-primary mx-auto" style="border-radius: 50px; width: 6em; height: fit-content;">Hasil</h1>
    </div>
    <div class="row my-5 py-5">
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <img class="mx-auto d-block" style="max-width: 10em;" class="" src="<?= base_url('') ?>/img/Benar.png" alt="Benar_icon">
            <div class="text-center my-3">
                <h2 class="text-primary">Benar</h2>
            </div>
            <div class="text-center my-2">
                <h2 class="text-white bg-primary mx-auto w-50" style="border-radius: 13px;">5/10</h1>
            </div>
        </div>
        <div class="col-md-2">
            <img class="mx-auto d-block" style="max-width: 10em;" class="" src="<?= base_url('') ?>/img/Salah.png" alt="Salah_icon">
            <div class="text-center my-3">
                <h2 class="text-primary">Salah</h2>
            </div>
            <div class="text-center my-2">
                <h2 class="text-white bg-primary mx-auto w-50" style="border-radius: 13px;">5/10</h1>
            </div>
        </div>
        <div class="col-md-2">
            <img class="mx-auto d-block" style="max-width: 10em;" class="" src="<?= base_url('') ?>/img/Kosong.png" alt="Kosong_icon">
            <div class="text-center my-3">
                <h2 class="text-primary">Kosong</h2>
            </div>
            <div class="text-center my-2">
                <h2 class="text-white bg-primary mx-auto w-50" style="border-radius: 13px;">0/10</h1>
            </div>
        </div>
        <div class="col-md-2">
            <img class="mx-auto d-block" style="max-width: 10em;" class="" src="<?= base_url('') ?>/img/Skor.png" alt="Skor_icon">
            <div class="text-center my-3">
                <h2 class="text-primary">Skor</h2>
            </div>
            <div class="text-center my-2">
                <h2 class="text-white bg-primary mx-auto w-75" style="border-radius: 13px;">20/40</h1>
            </div>
        </div>
        <div class="col-md-2">
            <img class="mx-auto d-block" style="max-width: 10em;" class="" src="<?= base_url('') ?>/img/Passing Grade.png" alt="Passing_Grade_icon">
            <div class="text-center my-3">
                <h2 class="text-primary">Skor</h2>
            </div>
            <div class="text-center my-2">
                <h2 class="text-white bg-primary mx-auto w-50" style="border-radius: 13px;">50%</h1>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
<?= $this->endSection(); ?>