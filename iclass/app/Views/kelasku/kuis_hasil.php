<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content pb5">
    <div class="row mx-auto mt-5 px-5" style="width: 80%;">
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
        <?php if ($title!="Hasil Try Out") { ?>
            <div class="row w-100 mx-0 my-5">
                <h5 class="font-weight-bold w-100 mt-5 mb-4">Latihan Soal <?= $kuis['materi'] ?></h5>
                <div class="row w-100 mx-0 mt-3">
                    <a href="<?= base_url() ?>/kelasku/view_pdf/<?= $kuis['materi'] ?>-1.pdf" 
                        class="btn bg-secondary text-dark font-weight-bold text-truncate border-20 w-25 py-3 mr-3">Soal dan Pembahasan 1</a>
                    <a href="<?= base_url() ?>/kelasku/view_pdf/<?= $kuis['materi'] ?>-2.pdf" 
                        class="btn bg-secondary text-dark font-weight-bold text-truncate border-20 w-25 py-3 mr-3">Soal dan Pembahasan 2</a>
                    <a href="<?= base_url() ?>/kelasku/view_pdf/<?= $kuis['materi'] ?>-3.pdf" 
                        class="btn bg-secondary text-dark font-weight-bold text-truncate border-20 w-25 py-3 mr-3">Soal dan Pembahasan 3</a>
                </div>
                <div class="row w-100 mx-0 mt-3">
                    <a href="<?= base_url() ?>/kelasku/view_pdf/<?= $kuis['materi'] ?>-4.pdf" 
                        class="btn bg-secondary text-dark font-weight-bold text-truncate border-20 w-25 py-3 mr-3">Soal dan Pembahasan 4</a>
                    <a href="<?= base_url() ?>/kelasku/view_pdf/ebook.pdf" 
                        class="btn bg-secondary text-dark font-weight-bold text-truncate border-20 w-25 py-3 mr-3">Ebook</a>
                    <button onclick="openWindow('<?= $kuis['materi'] ?>');" 
                        class="btn bg-secondary text-dark font-weight-bold text-truncate border-20 w-25 py-3 mr-3">Mind Mapping</button>
                </div>
            </div>
            
            <script>
                function openWindow(materi) {
                    window.open('<?= base_url() ?>/img/Mind Map/'+materi+'.pdf','popup','width=600,height=600');
                    return false;
                }
            </script>
        <?php } ?>
    </div>
</div>
<?= $this->endSection(); ?>