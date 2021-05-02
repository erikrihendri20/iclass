<?= $this->extend('templates/admin/index'); ?>
<?= $this->section('content'); ?>
<div class="content mx-2 pb-5container-fluid">
  <?= session()->flash; ?>

  <div class="card card-secondary card-outline elevation-3">
    <div class="card-body">
      <div class="row">
        <div class="col">
          <h5><i class="fas fa-fw fa-pencil-alt text-secondary"></i>&ensp;Edit Soal Kuis</h5>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12 text-sm">
          <form action="<?= base_url('admin/edit_soal_kuis') ?>" method="post" id="form_kode">
            <input type="hidden" name="kode" id="input_kode">
          </form>
          <table id="daftar-kuis" class="display nowrap" style="width:100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Materi</th>
                <th>Kode</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($data as $dt) : ?>
                <tr>
                  <td><?= $no; ?></td>
                  <td><?= $dt['materi'] ?></td>
                  <td><?= $dt['kode_kuis'] ?></td>
                  <td>
                    <button onclick="edit('<?= $dt['kode_kuis'] ?>')" class="badge badge-success" style="border: none;">Edit</button>
                    <a class="badge badge-danger text-light" type="submit" name="hapus" href="<?= base_url('admin/hapus_kuis/' . $dt['kode_kuis']) ?>">Hapus</a>
                  </td>
                </tr>
              <?php $no++;
              endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function edit(id) {
    $("#input_kode").val(id);
    $("#form_kode").submit();
  }
</script>
<?= $this->endSection(); ?>