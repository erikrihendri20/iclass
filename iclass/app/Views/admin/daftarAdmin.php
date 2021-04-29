<?= $this->extend('templates/admin/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

<!-- Page Heading -->
    <div class="">
        <h1 class="h3 mb-4 text-gray-800">Daftar Pengajar</h1>
        <?= session()->flash; ?>
        <div id="flash"></div>
    </div>

<div id="tabel-admin"></div>
</div>
<?= $this->endSection(); ?>
