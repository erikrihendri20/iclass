<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0">
    <div class="mx-5 pt-5">

        <!-- Video Materi -->

        <div class="row mx-5">
            <div class="fluid w-75">
                <div class="row d-flex justify-content-center align-items-center">
                    <h1 class="text-primary font-weight-bold"><?= $materiPilihan['name'] ?></h1>
                </div>
                <div class="row embed-responsive embed-responsive-16by9 bg-light w-100">
                    <iframe class="embed-responsive-item rounded"  allow="autoplay 'none'"
                        src="<?= base_url() ?>/vid/<?= $materiPilihan['name'] ?>/<?= $materiPilihan['name'] ?> part <?= $part ?>.mp4">
                    </iframe>
                </div>
                <div class="row d-flex justify-content-center align-items-center w-100">
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
                                    <div class="d-flex justify-content-center align-items-center bg-primary rounded">
                                        <a href="<?= base_url() ?>/materi/<?= $materiPilihan['id'] ?>/<?= $h ?>"
                                            class="text-white font-weight-bold my-1">
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
            <div class="fluid w-25">
                <?php foreach($materis as $materi) : ?>
                    <div class="row bg-light rounded mx-0 my-1">
                        <a href="<?= base_url() ?>/materi/<?= $materi['id'] ?>" 
                            class="text-primary w-100 ml-3 my-1 font-weight-bold">
                            <?= $materi['name'] ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>
<?= $this->endSection(); ?>