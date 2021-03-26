<?= $this->extend('templates/admin/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Atur Jadwal</h1>

<div class="row">
    <div class="col">
        <form action="">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Kelas</label>
            <select class="form-control" id="exampleFormControlSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
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
