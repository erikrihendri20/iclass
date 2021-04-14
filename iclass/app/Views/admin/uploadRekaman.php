<?= $this->extend('templates/admin/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <div class="col">
        <form action="<?= base_url(); ?>/admin/tambahRekaman" method="POST" enctype="multipart/form-data">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="pertemuan">Pertemuan ke-</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="pertemuan" name="pertemuan" placeholder="1">
                <?php if (session()->has('pertemuan')) :?><small class="form-text text-danger"><?= session()->pertemuan ?></small><?php endif; ?>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="materi">Materi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="materi" name="materi" placeholder="Aljabar">
                <?php if (session()->has('materi')) :?><small class="form-text text-danger"><?= session()->materi ?></small><?php endif; ?>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="rekaman">Rekaman Pertemuan</label>
            <div class="col-sm-10">
                <input type="file" class="form-control-file" id="rekaman" name="rekaman">
                <?php if (session()->has('rekaman')) :?><small class="form-text text-danger"><?= session()->rekaman ?></small><?php endif; ?>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="thumbnailRekaman">Thumbnail Rekaman</label>
            <div class="col-sm-10">
                <input type="file" class="form-control-file" id="thumbnailRekaman" name="thumbnailRekaman">
                <?php if (session()->has('thumbnailRekaman')) :?><small class="form-text text-danger"><?= session()->thumbnailRekaman ?></small><?php endif; ?>
            </div>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>

</div>

<?= session()->flash; ?>
<?= $this->endSection(); ?>