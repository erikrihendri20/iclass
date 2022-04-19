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


        <div class="col d-flex justify-content-end">
          <a class="btn btn-sm btn-outline-primary btn-user" data-toggle="modal" data-target="#tambah_jadwal">
            tambah jadwal
          </a>
        </div>

        <div class="modal fade" id="tambah_jadwal" tabindex="-1" role="dialog" aria-labelledby="tambah_jadwalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="tambah_jadwalLabel">Tambah jadwal try out</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?= base_url('admin/add_jadwal_tryout') ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="jenis" class="form-label">Jenis</label>
                        <select class="form-control" id="jenis" name="jenis">
                          <option value="mtk" selected>Matematika</option>
                          <option value="skd">SKD</option>
                          <option value="skd2">SKD 2</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>

                    <div class="form-group">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select class="form-control" id="kelas" name="kelas[]" multiple>
                          <?php foreach ($list_kelas as $dt) : ?>
                            <option value='<?= $dt['id'] ?>'><?= $dt['nama'] ?></option>
                          <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="datetime" class="form-label">Waktu mulai</label>
                        <div class="w-100">
                          <input class="form-control" type="datetime-local" id="datetime" name="datetime">
                        </div>
                    </div>

                  <div class="modal-footer">
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
                <th>Judul</th>
                <th>Kelas</th>
                <th>Jadwal</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($data as $dt) : ?>
                <tr>
                  <td>
                    <?= $no; ?>
                  </td>
                  <td><?= $dt['title'] ?></td>
                  <td>
                    <?php foreach (explode(',', $kelas[$no - 1]) as $kls) {
                      echo $kls.'<br>';
                    } ?>
                  </td>
                  <td>
                    <?= date("d-m-Y", strtotime($dt['start_event'])) ?>
                  </td>
                  <td>
                    <button class="badge badge-success" style="border: none;" data-toggle="modal" data-target="#edit_jadwal<?= $dt['id'] ?>">Edit</button>
                    <a class="badge badge-danger text-light" type="submit" name="hapus" href="<?= base_url('admin/hapus_jadwal/' . $dt['id']) ?>">Hapus</a>
                  </td>
                </tr>
                <div class="modal fade" id="edit_jadwal<?= $dt['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="edit_jadwalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <div class="modal-title" id="edit_jadwalLabel">
                          <h5>Edit Kuis</h5>
                          <h5>(Kelas <?= $kelas[$no - 1] ?> - <?= $dt['title'] ?>)</h5>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="<?= base_url('admin/edit_jadwal_tryout') ?>" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="kelas" class="form-label">Kelas</label>
                            <select class="form-control" id="kelas" name="kelas[]" multiple>
                              <?php foreach ($list_kelas as $dd) : ?>
                                <option value='<?= $dd['id'] ?>' <?php echo (strpos($dt['kode_kelas'], $dd['id'])!==false) ? " selected" : ''; ?>><?= $dd['nama'] ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="datetime" class="form-label">Waktu mulai</label>
                            <div class="w-100">
                              <input class="form-control" type="datetime-local" value="<?php $date = date("Y-m-d H:i:s", strtotime($dt['start_event']));
                                                                                        echo str_replace(" ", "T", $date); ?>" id="datetime" name="datetime">
                              <input type="hidden" name="id" value="<?= $dt['id'] ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="pembahasan" class="form-label">Pembahasan</label>
                            <input type="file" class="form-control" id="pembahasan" name="pembahasan">
                          </div>
                          <div class="modal-footer">
                            <?php if ($dt['class_name']!='skd') { ?>
                              <button type="button" class="btn btn-success text-white" 
                                onclick="modalSoal('<?= $dt['id'] ?>', '<?= $dt['title'] ?>');">Soal & Pembahasan</button>
                            <?php } else { ?>
                              <button type="button" class="btn btn-white" onclick="lihatSoal('<?= $dt['id'] ?>');">Lihat Soal</button>
                              <button type="button" class="btn btn-success text-white"
                                onclick="soalSkd('<?= $dt['id'] ?>', '', 'TWK','0','0','0','0','0');">Tambah Soal</button>
                            <?php } ?>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </form>
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
<?= $this->include('admin/soal_tryout') ?>
<?= $this->include('admin/soal_skd') ?>
<?= $this->include('admin/lihat_soal_skd') ?>
<?= $this->endSection(); ?>