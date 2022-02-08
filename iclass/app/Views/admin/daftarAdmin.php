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

    <script>
        function ubahRoleAdmin(id, role) {
            $.get(
                'ubahRoleAdmin/' + id + '/' + role,
                function(result) {
                    if (result=='success') {
                        alert('berhasil mengubah role admin');
                    } else {
                        alert('gagal mengubah role admin');
                    }
                });
        }
    </script>
</div>
<?= $this->endSection(); ?>
