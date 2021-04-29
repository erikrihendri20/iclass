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
                            <button class="btn btn-primary" style="width: 90%;" onclick="gantiVideo('<?=$i?>');">Bagian <?=$i?></button>
                        </div>
                    <?php endfor; ?>
                    <div class="w-25 align-items-center mt-3">
                        <button class="btn btn-primary" style="width: 90%;" onclick="bukaMindMap();">Mind Mapping</button>
                    </div>
                </div>
            </div>

            <div id="bab_materi" style="position: float; float: right;" class="card fluid mt-5 ml-3">
                <?php foreach($materis as $materi) : ?>

                    <div class="bab row fluid btn-light rounded mx-4 my-2">
                        <a href="<?= base_url() ?>/materi/<?= $materi['id'] ?>"
                            class="abab text-primary w-100 ml-3 my-1 font-weight-bold">
                            <?= $materi['name'] ?>
                        </a>
                    </div>
                    
                <?php endforeach; ?>
            </div>
        </div>

    </div>

    <!--Modal untuk Mind Mapping-->
    <div id="mindMap" class="modal fade" role="dialog" tabindex='1' aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg bg-white rounded" role="document">
            <div class="modal-header d-flex justify-content-between align-text-center">
                <h3 class="text-primary ml-1">Mind Mapping</h3>
                <p class="fa fa-close btn mr-1" style="font-size:36px;" onclick="tutupMindMap();"></p>
            </div>

            <div class="modal-body d-flex justify-content-center align-text-center">
                <img id="imgMindMap" src="<?= base_url() ?>/img/Mind Map/<?= $materiPilihan['name'] ?>.jpg" alt="Mind Mapping" class="img-fluid img-thumbnail">
            </div>
        </div>
    </div>
</div>

<script>
    function gantiVideo(bagian) {
        document.getElementById('vidsrc').src=`<?= base_url() ?>/vid/Materi/<?= $materiPilihan['name'] ?>/<?= $materiPilihan['name'] ?> part ${bagian}.mp4`
        document.getElementById('vid').load();
    }

    function bukaMindMap() {
        $('#mindMap').modal('show');
    }

    function tutupMindMap() {
        $('#mindMap').modal('hide');
    }
</script>
<?= $this->endSection(); ?>