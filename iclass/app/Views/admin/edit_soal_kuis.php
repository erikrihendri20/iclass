<?= $this->extend('templates/admin/index'); ?>
<?= $this->section('content'); ?>
<script>
  $(document).ready(function() {
    $('#daftar-kuis').DataTable({
      dom: 'Bfrtip',
      buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
      ]
    });

  });
</script>
<section class="content mx-2 pb-5">
  <div class="container-fluid">

    <div class="card card-secondary card-outline elevation-3">
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5><i class="fas fa-fw fa-pencil-alt text-secondary"></i>&ensp;Edit Soal Kuis</h5>
          </div>
          <div class="col d-flex justify-content-end">
            <a href="<?= base_url('admin/kuis_soal') ?>" class="btn btn-sm btn-outline-primary btn-user">
              upload soal
            </a>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12 text-sm">
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
                      <button class="badge badge-success" style="border: none;" data-toggle="modal">Edit</button>
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
</section>

<?= $this->endSection(); ?>