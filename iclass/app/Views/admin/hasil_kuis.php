<?= $this->extend('templates/admin/index'); ?>
<?= $this->section('content'); ?>
<div class="content mx-2 pb-5container-fluid">
  <?= session()->flash; ?>

  <div class="card card-secondary card-outline elevation-3">
    <div class="card-body">
      <div class="row">
        <div class="col">
          <h5><i class="fas fa-fw fa-calendar-alt text-secondary"></i>&ensp;Atur Jadwal Kuis</h5>
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
                <th>Nama</th>
                <th>Kelas</th>
                <th>Kuis</th>
                <th>Jawaban benar</th>
                <th>Jawaban salah</th>
                <th>Jawaban kosong</th>
                <th>Skor</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php for ($i = 0; $i < count($user); $i++) : ?>
                <tr>
                  <td>
                    <?= $i + 1; ?>
                  </td>
                  <td>
                    <?= $user[$i] ?>
                  </td>
                  <td>
                    <?= $event[$i] ?>
                  </td>
                  <td>
                    <?= $kelas[$i] ?>
                  </td>
                  <td>
                    <?= $benar[$i] ?>
                  </td>
                  <td>
                    <?= $salah[$i] ?>
                  </td>
                  <td>
                    <?= $kosong[$i] ?>
                  </td>
                  <td>
                    <?= $skor[$i] ?>
                  </td>
                  <td>
                    <a class="badge badge-danger text-light" type="submit" name="hapus" href="<?= base_url('admin/hapus_hasil/' . $id[$i]) ?>">Hapus</a>
                  </td>
                </tr>
              <?php endfor; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>