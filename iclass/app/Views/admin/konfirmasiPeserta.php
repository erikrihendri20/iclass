<?= $this->extend('templates/admin/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

<!-- Page Heading -->
    <div class="">
        <h1 class="h3 mb-4 text-gray-800">Konfirmasi Peserta</h1>
        <form action="">
                <div class="form-group">
                    <select class="form-control" name="kode_paket" id="kode_paket">
                        <?php foreach($paket as $p): ?>
                            <option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
        </form>
    </div>

    <div id="tabel-peserta"></div>
        
    </table>

<?= $this->endSection(); ?>
