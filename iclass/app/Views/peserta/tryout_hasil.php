<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content pb5">
    <div class="row mt-5 mx-auto px-5" style="width: 80%;">
        <div class="row w-100 mx-0">
            <div class="row align-items-center mx-0" style="width: 35%;">
                <div class="w-100 mx-0">
                    <div class="bg-white border rounded-circle d-inline-block position-relative w-25">
                        <img src="<?= base_url() ?>/img/profil.png" alt="" class="w-100 rounded-circle position-relative p-2">
                        <img src="<?= base_url() ?>/img/profil/<?= session('username') ?>.jpg" alt="" class="w-100 h-100 rounded-circle position-absolute p-2" style="top: 0; left: 0; object-fit: cover;" onerror='this.style.display = "none"'>
                    </div>
                    <h5 class="font-weight-bold d-inline mb-0 pl-3"><?= session('nama') ?></h5>
                </div>
                <div class="row w-100 mx-0 mt-4 pl-4">
                    <div class="row border-bottom w-100 mx-0 pb-2">
                        <div class="bg-primary" style="width: 25px; height: 25px; border-radius: 5px;"></div>
                        <h5 style="font-size: 18px;" class="mb-0 ml-2">Benar</h5>
                        <h5 id="terisi" style="font-size: 18px;" class="mb-0 ml-auto"><?= $kuis['benar'] ?></h5>
                    </div>
                    <div class="row border-bottom w-100 mx-0 mt-3 pb-2">
                        <div class="bg-secondary" style="width: 25px; height: 25px; border-radius: 5px;"></div>
                        <h5 style="font-size: 18px;" class="mb-0 ml-2">Salah</h5>
                        <h5 id="ragu" style="font-size: 18px;" class="mb-0 ml-auto"><?= $kuis['salah'] ?></h5>
                    </div>
                    <div class="row w-100 mx-0 mt-3">
                        <div class="border" style="width: 25px; height: 25px; border-radius: 5px;"></div>
                        <h5 style="font-size: 18px;" class="mb-0 ml-2">Kosong</h5>
                        <h5 id="kosong" style="font-size: 18px;" class="mb-0 ml-auto"><?= $kuis['kosong'] ?></h5>
                    </div>
                </div>
            </div>
            <div class="row ml-auto pt-4 pl-4" style="width: 60%;">
                <div class="row justify-content-end border border-30 position-relative w-100 mx-0" style="height: 250px;">
                    <img src="<?= base_url() ?>/img/Aset/Asset 1.png" class="position-absolute border-30 mt-4" style="width: 60%; bottom: 0; left: 0; object-fit: contain;">
                    <div class="row align-content-center border-left mx-0 my-4" style="width: 35%">
                        <h5 class="w-100 font-weight-bold text-center">Persentase</h5>
                        <div class="row align-content-center justify-content-center text-white position-relative mx-auto mt-4" style="width: 60%;">
                            <div class="bg-primary rounded-circle w-100" style="padding-top: 100%;"></div>
                            <h3 class="position-absolute font-weight-bold" style="top: 50%; left: 50%; transform: translate(-50%, -50%);"><?= $persentase ?>%</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>