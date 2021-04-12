<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0">
    <div id="content-2-container" class="pt-5">

        <!-- Rekaman Kelas -->

        <div id="rekaman-container">
            <div class="d-flex justify-content-center align-items-center mx-2">
                <span id="judul" class="text-primary display-4 font-weight-bold">Rekaman Kelas</span>
            </div>

            <div class="mt-3 row">

                <div id="video_rekaman">
                    <div class="embed-responsive embed-responsive-16by9 bg-light ml-0">
                        <iframe class="embed-responsive-item mx-2"  allow="autoplay 'none'"
                            src="<?= base_url() ?>/vid/Rekaman Kelas/Pertemuan <?= $rekamanPilihan['id'] ?> - <?= $rekamanPilihan['materi'] ?>.mp4">
                        </iframe>
                    </div>
                </div>

                <div id="thumbnail_rekaman"  class="col">

                    <div class="bg-light mx-2">
                        <img class="img-fluid" 
                            src="<?= base_url() ?>/img/Rekaman Kelas/Pertemuan <?= $rekamanPilihan['id']+1 ?> - <?= $rekamans[$rekamanPilihan['id']]['materi'] ?>.png">
                    </div>

                    <div class="row mt-2">
                        <div class="col bg-light mx-2">
                            <img class="img-fluid" 
                                src="<?= base_url() ?>/img/Rekaman Kelas/Pertemuan <?= $rekamanPilihan['id']+1 ?> - <?= $rekamans[$rekamanPilihan['id']]['materi'] ?>.png">
                        </div>
                        <div class="col bg-light mx-2">
                            <img class="img-fluid" 
                                src="<?= base_url() ?>/img/Rekaman Kelas/Pertemuan <?= $rekamanPilihan['id']+1 ?> - <?= $rekamans[$rekamanPilihan['id']]['materi'] ?>.png">
                        </div>
                    </div>

                    <div class="mt-5">
                        <h1 id="judul" class="text-primary font-weight-bold">Pertemuan <?= $rekamanPilihan['id'] ?></h1>
                        <h2 id="judul" class="text-primary"><?= $rekamanPilihan['materi'] ?></h2>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
</div>
<?= $this->endSection(); ?>