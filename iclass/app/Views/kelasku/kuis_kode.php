<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content my-3 bg-white" style="height:61.8vh;">
    <!-- Content-->
    <div class="display-4 text-primary text-center font-weight-bold mb-4 mx-5">
        <p>KUIS RUTIN</p>
    </div>
    <?php if (session('flash')) : ?>
        <?= session('flash'); ?>
    <?php endif; ?>
    <div class="p-5 m-5 w-25 bg-white rounded text-center mx-auto" style="-webkit-box-shadow: 0px 6px 20px 0px rgba(107,107,107,1);
        -moz-box-shadow: 0px 6px 20px 0px rgba(107,107,107,1);
        box-shadow: 0px 6px 20px 0px rgba(107,107,107,1);">
        <form class="w-75 mx-auto" method="post" action="<?= base_url('kelasku/kuis_kode') ?>">

            <h3 class="text-primary">Masukkan Kode</h3 class="text-primary">
            <div class="form-group">
                <input type="text" class="form-control" id="kode_kuis" name="kode_kuis">
                <input type="hidden" name="no_kuis" value="0">
            </div>
            <div class="text-center mx-5 my-3">
                <button type="submit" name="submit" class="btn btn-primary align-self-center mx-1">Submit</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>