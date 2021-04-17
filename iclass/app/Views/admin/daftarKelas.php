<?= $this->extend('templates/admin/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-flex justify-content-between">
<h1 class="h3 mb-4 text-gray-800">Daftar Kelas</h1>
<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
  + Tambah Kelas
</button>
</div>

<?= session()->flash; ?>
<!-- Button trigger modal -->


    <table id="daftar-kelas" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Link Meeting</th>
                <th>Nama Paket</th>
                <th>Jumlah Peserta</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($kelas as $k): ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $k['nama']; ?></td>
                <td><a href="<?= $k['link-meeting']; ?>"><?= $k['link-meeting']; ?></a></td>
                <td><?= $k['nama-paket']; ?></td>
                <td><?= $k['jumlah-peserta']; ?></td>
                <td>
                <button class="badge badge-success" style="border: none;" data-toggle="modal" data-target="#edit<?= $k['id']; ?>">Edit</button>
                <a class="badge badge-danger text-light" type="submit" name="hapus" href="<?= base_url(); ?>/admin/hapusKelas/<?= $k['id']; ?>">Hapus</a>
                </td>
            </tr>
            <div class="modal fade" id="edit<?= $k['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Kelas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="<?= base_url(); ?>/admin/tambahKelas" method="POST">
                        <input type="hidden" name="id" value="<?= $k['id']; ?>">
                        <div class="form-group">
                            <input type="text" name="nama" class="form-control" placeholder="Nama Kelas" value="<?= $k['nama']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="link-meeting" class="form-control" placeholder="Link Meeting" value="<?= $k['link-meeting']; ?>">
                        </div>
                        <div class="form-group">
                                    <select class="form-control" name="kode-paket" id="pilih-paket">
                                      <?php foreach ($paket as $p) :?>
                                        <option <?= ($p['id']==$k['kode_paket']) ? 'selected' : '' ?> value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                                      <?php endforeach; ?>
                                    </select>
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
            <div class="form-group">
                        <select class="form-control" name="kode-paket" id="pilih-paket">
                          <?php foreach ($paket as $p) :?>
                            <option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                          <?php endforeach; ?>
                        </select>
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
