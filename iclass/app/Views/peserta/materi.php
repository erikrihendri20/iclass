<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0">
    <div id="content-2-container" class="pt-5">

        <!-- Video Materi -->

        <div id="materi-container" class="row">
            <div id="video-container" class="fluid">

                <div class="row d-flex justify-content-center align-items-center mx-2">
                    <span id="judul_materi" class="text-primary display-4 font-weight-bold"><?= $materiPilihan['name'] ?></span>
                </div>

                <div id="video_materi" class="row embed-responsive embed-responsive-16by9 bg-light ml-0">
                    <video id="vid" class="embed-responsive-item" controls controlsList="nodownload">
                        <source id="vidsrc" src="<?= base_url() ?>/vid/Materi/<?= $materiPilihan['name'] ?>/<?= $materiPilihan['name'] ?> part <?= $part ?>.mp4" type="video/mp4">
                    </video>
                </div>

                <div id="bagian_materi" class="row w-100 mx-1">
                    <?php for ($i = 1; $i <= $materiPilihan['parts']; $i++) : ?>
                        <div class="w-25 align-items-center mt-3">
                            <button class="btn btn-primary" style="width: 90%; border-radius: 10px;" onclick="gantiVideo('<?=$i?>');">
                                <span class="h5">Bagian <?=$i?></span>
                            </button>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>

            <div id="bab_materi" style="position: float; float: right;" class="card shadow fluid mt-5 ml-3 pb-2">
                <?php foreach($materis as $materi) : ?>

                    <div class="bab row fluid btn-light mx-3 mt-2" style="border-radius: 10px;">
                        <a href="<?= base_url() ?>/materi/<?= $materi['id'] ?>"
                            class="abab text-primary h5 w-100 mx-3 my-1 font-weight-bold">
                            <?= $materi['name'] ?>
                        </a>
                    </div>
                    
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>

<script>
    function gantiVideo(bagian) {
        document.getElementById('vidsrc').src=`<?= base_url() ?>/vid/Materi/<?= $materiPilihan['name'] ?>/<?= $materiPilihan['name'] ?> part ${bagian}.mp4`
        document.getElementById('vid').load();
    }
</script>
<?= $this->endSection(); ?>