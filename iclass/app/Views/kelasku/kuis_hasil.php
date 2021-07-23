<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0 pb5">
    <div class="mnya-5 mt5">
        <img class="mx-auto d-block" style="max-width: 20em;" class="" src="<?= base_url('') ?>/img/4.png" alt="Card image cap">
    </div>
    <div class="text-center text-primary h2"><?= session('nama') ?></div>
    <div class="text-center text-primary h2"><?= session('email') ?></div>
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
                <h2 class="text-white bg-primary mx-auto w-50" style="border-radius: 13px;">
                    <?= $benar ?>/<?= $jumlah ?>
                    </h1>
            </div>
        </div>
        <div class="col-md-2">
            <img class="mx-auto d-block" style="max-width: 10em;" class="" src="<?= base_url('') ?>/img/Salah.png" alt="Salah_icon">
            <div class="text-center my-3">
                <h2 class="text-primary">Salah</h2>
            </div>
            <div class="text-center my-2">
                <h2 class="text-white bg-primary mx-auto w-50" style="border-radius: 13px;">
                    <?= $salah ?>/<?= $jumlah ?>
                    </h1>
            </div>
        </div>
        <div class="col-md-2">
            <img class="mx-auto d-block" style="max-width: 10em;" class="" src="<?= base_url('') ?>/img/Kosong.png" alt="Kosong_icon">
            <div class="text-center my-3">
                <h2 class="text-primary">Kosong</h2>
            </div>
            <div class="text-center my-2">
                <h2 class="text-white bg-primary mx-auto w-50" style="border-radius: 13px;">
                    <?= $kosong ?>/<?= $jumlah ?>
                    </h1>
            </div>
        </div>
        <div class="col-md-2">
            <img class="mx-auto d-block" style="max-width: 10em;" class="" src="<?= base_url('') ?>/img/Skor.png" alt="Skor_icon">
            <div class="text-center my-3">
                <h2 class="text-primary">Skor</h2>
            </div>
            <div class="text-center my-2">
                <h2 class="text-white bg-primary mx-auto w-75" style="border-radius: 13px;">
                    <?= $skor['skor'] ?>/<?= $skor['max'] ?>
                    </h1>
            </div>
        </div>
        <div class="col-md-2">
            <img class="mx-auto d-block" style="max-width: 10em;" class="" src="<?= base_url('') ?>/img/Passing Grade.png" alt="Passing_Grade_icon">
            <div class="text-center my-3">
                <h2 class="text-primary">Passing Grade</h2>
            </div>
            <div class="text-center my-2">
                <h2 class="text-white bg-primary mx-auto w-50" style="border-radius: 13px;"><?= $pass_grade ?>%</h1>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
<?= $this->endSection(); ?>