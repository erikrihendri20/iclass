<?= $this->extend('templates/admin/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Atur Jadwal Pertemuan</h1>

<div class="row">
    <div class="col">
        <form action="">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Kelas</label>
            <select class="form-control" name="kode_kelas" id="kode-kelas">
                <?php foreach($kelas as $k): ?>
                    <option value="<?= $k['id']; ?>"><?= $k['nama']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="col">
        <div id='calendar' class="border border-secondary rounded"></div>
    </div>
</div>



</div>
<?= $this->endSection(); ?>
