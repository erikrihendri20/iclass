<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0">
    <div id="content-2-container" class="pt-5">
        <div id="materi-container" class="row">
            <div id="video-container" class="fluid">
                <div class="row d-flex justify-content-center align-items-center mx-2">
                    <span id="judul_materi" class="text-primary display-4 font-weight-bold"><?= $rekamanPilihan['materi'] ?></span>
                </div>

                <div id="video_materi" class="row embed-responsive embed-responsive-16by9 bg-light ml-0 mt-2">
                    <video id="vid" class="embed-responsive-item" controls controlsList="nodownload" poster="<?= base_url() ?>/img/Rekaman Kelas/<?= $rekamanPilihan['admin'] ?>/<?php echo $rekamanPilihan['materi'].'.'.$rekamanPilihan['ext_tn'] ?>">
                        <source id="vidsrc" src="<?= base_url() ?>/vid/Rekaman Kelas/<?= $rekamanPilihan['admin'] ?>/<?= $rekamanPilihan['materi'] ?> - <?= $part ?>.mp4" type="video/mp4">
                        Waduh, sepertinya kelasmu belum punya rekaman pertemuan.
                    </video>
                </div>

                <div id="bagian_materi" class="row w-100 mx-1">
                    <div class="w-25 align-items-center mt-3">
                        <button class="btn btn-primary" style="width: 90%; border-radius: 10px;" onclick="downloadPpt('<?= $rekamanPilihan['admin'] ?>', '<?= $rekamanPilihan['materi'] ?>', '<?= $rekamanPilihan['ext_ppt'] ?>');">
                            <span class="h5">Download Ppt</span>
                        </button>
                    </div>

                    <?php foreach (explode(',', $rekamanPilihan['parts']) as $p) : ?>
                        <div class="w-25 align-items-center mt-3">
                            <button class="btn btn-primary" style="width: 90%; border-radius: 10px;" onclick="gantiVideo('<?=$p?>');">
                                <span class="h5">Bagian <?=$p?></span>
                            </button>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div id="bab_materi" style="position: float; float: right;" class="card shadow fluid mt-5 ml-3 pb-2">
                <?php foreach($rekamans as $rekaman) : ?>

                    <div class="bab row fluid btn-light mx-3 mt-2" style="border-radius: 10px;">
                        <a href="<?= base_url() ?>/Kelasku/rekaman/<?= $rekaman['id'] ?>"
                            class="abab text-primary h5 w-100 mx-3 my-1 font-weight-bold">
                            <?= $rekaman['materi'] ?>
                        </a>
                    </div>
                    
                <?php endforeach; ?>
            </div>
        </div>    
    </div>
</div>

<script>
    function gantiVideo(bagian) {
        document.getElementById('vidsrc').src=`<?= base_url() ?>/vid/Rekaman Kelas/<?= $rekamanPilihan['admin'] ?>/<?= $rekamanPilihan['materi'] ?> - ${bagian}.mp4`
        document.getElementById('vid').load();
    }

    function downloadPpt(admin, materi, ext_ppt) {
        var link=document.createElement('a');
        link.href=`<?= base_url(); ?>/ppt/Rekaman Kelas/${admin}/${materi}.${ext_ppt}`;
        link.download=`${materi}.${ext_ppt}`;
        link.click();
    }
</script>
<?= $this->endSection(); ?>