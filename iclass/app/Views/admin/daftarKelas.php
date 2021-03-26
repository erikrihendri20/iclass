<?= $this->extend('templates/admin/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Daftar Kelas</h1>
<?= session()->flash; ?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
  + Tambah Kelas
</button>

    <table id="daftar-kelas" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Link Meeting</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($user as $u): ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $u['nama']; ?></td>
                <td><a href="<?= $u['link-meeting']; ?>"><?= $u['link-meeting']; ?></a></td>
                <td>
                    <button class="btn btn-success">Edit</button>
                    <button class="btn btn-danger">Hapus</button>
                </td>
            </tr>
            <?php $no++; endforeach; ?>
        </tbody>
    </table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kelas Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url(); ?>/admin/tambahKelas" method="POST">
            <div class="form-group">
                <input type="text" name="nama" class="form-control" placeholder="Nama Kelas">
            </div>
            <div class="form-group">
                <input type="text" name="link-meeting" class="form-control" placeholder="Link Meeting">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<?= $this->endSection(); ?>
