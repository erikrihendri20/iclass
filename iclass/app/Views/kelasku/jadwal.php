<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0">
    <div class="mx-5 pb5">

        <!-- Jadwal Terdekat -->

        <div class="container mx-5">
            <div class="row d-flex">
                <div class="col d-flex justify-content-center ">
                    <h2 class="text-primary display-2 font-weight-bold judul">Jadwal Kegiatan</h2>
                </div>
            </div>
        </div>

        <div class="container pb-3">
            <div class="" id="calendar"></div>
        </div>
        
    </div>
</div>
<?= $this->endSection(); ?>