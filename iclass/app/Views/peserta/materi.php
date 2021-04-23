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
                    <iframe class="embed-responsive-item rounded mx-2"  allow="autoplay 'none'"
                        src="<?= base_url() ?>/vid/Materi/<?= $materiPilihan['name'] ?>/<?= $materiPilihan['name'] ?> part <?= $part ?>.mp4">
                    </iframe>
                </div>

                <div id="bagian_materi" class="row d-flex justify-content-center align-items-center w-100 mx-1">
                    <table class="table table-borderless" style="empty-cells: show;">
                        <tbody>
                            <?php
                                $h = 1;
                                $i = $materiPilihan['parts'];
                                for ($k = 0; $k < ceil($i/4); $k++) :
                            ?>
                            <tr>
                            <?php
                                for ($l = 0; $l < 4; $l++) :
                                    if ($h <= $i) :
                            ?>
                                <td width="22%" class="border-0">
                                    <div class="d-flex justify-content-center align-items-center btn btn-primary rounded">
                                        <a href="<?= base_url() ?>/materi/<?= $materiPilihan['id'] ?>/<?= $h ?>"
                                            class="bagian text-white font-weight-bold my-1">
                                            Bagian <?= $h ?>
                                        </a>
                                    </div>
                                </td>
                            <?php else :?>
                                <td width="22%" class="border-0">
                                </td>
                            <?php endif; ?>
                            <?php
                                $h++;
                                endfor;
                            ?>
                            </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="bab_materi" style="position: float; float: right;" class="fluid">
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
</div>
<?= $this->endSection(); ?>