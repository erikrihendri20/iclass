<?= $this->extend('templates/admin/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <div class="col">
        <form action="<?= base_url(); ?>/admin/tambahRekaman" method="POST" enctype="multipart/form-data">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="pertemuanKe">Pertemuan ke-</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="pertemuanKe" placeholder="1">
            </div>
            <small id="emailHelp" class="form-text text-muted">Pertemuan terakhir adalah pertemuan ke-</small>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="materi">Materi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="materi" placeholder="Aljabar">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="exampleFormControlFile1">Rekaman Pertemuan</label>
            <div class="col-sm-10">
                <input type="file" class="form-control-file" id="rekaman" name="rekaman">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="exampleFormControlFile1">Thumbnail Rekaman</label>
            <div class="col-sm-10">
                <input type="file" class="form-control-file" id="thumbnailRekaman" name="thumbnailRekaman">
            </div>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>

</div>

<?= session()->flash; ?>
<?= $this->endSection(); ?>