<?= $this->extend('templates/admin/index'); ?>
<?= $this->section('content'); ?>
<?php $validation = service('validation') ?>

<div class="content mx-2 pb-5container-fluid">
  <?= session()->flash; ?>

  <div class="card card-secondary card-outline elevation-3">
    <div class="card-body">
      <div class="row">
        <div class="col">
          <h5><i class="fas fa-fw fa-calendar-alt text-secondary"></i>&ensp;Atur Jadwal Kuis</h5>
        </div>


        <div class="col d-flex justify-content-end">
          <a class="btn btn-sm btn-outline-primary btn-user" data-toggle="modal" data-target="#tambah_latihan">
            tambah latihan
          </a>
        </div>

        <div class="modal fade" id="tambah_latihan" tabindex="-1" role="dialog" aria-labelledby="tambah_latihanLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="tambah_latihanLabel">Tambah latihan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?= base_url('admin/add_latihan') ?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="browser" class="form-label">Materi:</label>
                    <div class="row w-100 ml-2 p-2">
                      <input list="list_materi" name="materi" id="materi" class="form-control form-control-sm border border-secondary rounded <?= ($validation->hasError('file')) ? 'is-invalid' : '' ?>" placeholder="Pilih materi ... ">
                      <datalist id="list_materi">
                        <?php foreach ($latihan as $dt) : ?>
                          <option value="<?= $dt[0]['materi'] ?>">
                          <?php endforeach; ?>
                      </datalist>
                      <div class=" invalid-feedback">
                        <?= service('validation')->getError('file'); ?>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="pdf" class="form-label">File latihan:</label>
                    <div class="row w-100 ml-2 p-2">
                      <input class=" <?= ($validation->hasError('file')) ? 'is-invalid' : '' ?>" type="file" name="file" id="pdf" accept=".pdf">
                      <div class=" invalid-feedback">
                        <?= service('validation')->getError('file'); ?>
                      </div>
                    </div>
                  </div>

                  <!-- <div class="form-group row pl-4">
                    <input class="w-100 <= ($validation->hasError('file')) ? 'is-invalid' : '' ?>" type="file" name="file">
                    <div class=" invalid-feedback">
                      <= service('validation')->getError('file'); ?>
                    </div>
                  </div> -->

                  <div class=" modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
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
                <th>Latihan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($latihan as $dt) : ?>
                <tr>
                  <td>
                    <?= $no; ?>
                  </td>
                  <td>
                    <?= $dt[0]['materi'] ?>
                  </td>
                  <td>
                    <?php foreach ($dt as $d) : ?>
                      <div class="row w-100">
                        <div class="col-9 text-right">
                          <a class='badge badge-primary mx-2 my-2 text-white font-weight-bold rounded' href='<?= base_url('admin/view_pdf/' . $d['pdf_path']) ?>'> <?= $d['pdf_path'] ?> </a>
                        </div>
                        <div class="col-2 text-left">
                          <a class="badge badge-warning text-light rounded mx-2 my-2" type="submit" name="hapus" href="<?= base_url('admin/hapus_latihan/' . $d['id']) ?>">X</a>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </td>
                  <td>
                    <a class="badge badge-danger text-light" data-toggle="modal" data-target="#hapus_latihan<?= $dt[0]['materi'] ?>">
                      Hapus
                    </a>
                  </td>
                </tr>
                <div class="modal fade" id="hapus_latihan<?= $dt[0]['materi'] ?>" tabindex="-1" role="dialog" aria-labelledby="edit_jadwalLabel<?= $dt[0]['materi'] ?>" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <div class="modal-title" id="edit_jadwalLabel<?= $dt[0]['materi'] ?>">
                          <h5>Hapus semua latihan <?= $dt[0]['materi'] ?></h5>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Hapus semua latihan di materi <strong><?= $dt[0]['materi'] ?></strong></p>
                        <div class="text-center">
                          <a class="btn btn-sm btn-outline-danger btn-user" type="submit" name="hapus" href="<?= base_url('admin/hapus_materi/' . $dt[0]['materi']) ?>">Hapus</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php $no++;
              endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>