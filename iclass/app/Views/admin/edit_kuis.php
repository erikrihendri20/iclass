<?= $this->extend('templates/admin/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-flex justify-content-between">
    <h1 class="h3 mb-4 text-gray-800">Edit Kuis - <?= $data[0]['kode_kuis'] ?></h1>
  </div>

  <table id="daftar-kuis" class="display nowrap" style="width:100%">
    <thead>
      <tr>
        <th>No</th>
        <th>Soal</th>
        <th>Pembahasan</th>
        <th>Jawaban</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1;
      foreach ($data as $dt) : ?>
        <tr>
          <td><?= $dt['no_kuis'] ?></td>
          <td>
            <a data-toggle="modal" data-target="#soal<?= $dt['kode_kuis'] . $dt['no_kuis'] ?>">
              <img style="width: 15em" src="<?= base_url() ?>/img/kuis/<?= $dt['kode_kuis'] ?>/soal/<?= $dt['soal'] ?>">
            </a>

            <!-- Modal -->
            <div class="modal fade" id="soal<?= $dt['kode_kuis'] . $dt['no_kuis'] ?>" tabindex="-1" role="dialog" aria-labelledby="soal<?= $dt['kode_kuis'] . $dt['no_kuis'] ?>ModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="soal<?= $dt['kode_kuis'] . $dt['no_kuis'] ?>ModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-center">
                    <img src="<?= base_url() ?>/img/kuis/<?= $dt['kode_kuis'] ?>/soal/<?= $dt['soal'] ?>" id="imagepreview" class="w-100">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

          </td>
          <td>
            <a data-toggle="modal" data-target="#soal<?= $dt['kode_kuis'] . $dt['no_kuis'] ?>">
              <img style="width: 15em" src="<?= base_url() ?>/img/kuis/<?= $dt['kode_kuis'] ?>/pembahasan/<?= $dt['pembahasan'] ?>">
            </a>

            <!-- Modal -->
            <div class="modal fade" id="soal<?= $dt['kode_kuis'] . $dt['no_kuis'] ?>" tabindex="-1" role="dialog" aria-labelledby="soal<?= $dt['kode_kuis'] . $dt['no_kuis'] ?>ModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="soal<?= $dt['kode_kuis'] . $dt['no_kuis'] ?>ModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-center">
                    <img src="<?= base_url() ?>/img/kuis/<?= $dt['kode_kuis'] ?>/pembahasan/<?= $dt['pembahasan'] ?>" id="imagepreview" class="w-100">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

          </td>
          <td class="text-center"><?= $dt['jawaban'] ?></td>
          <td>
            <button class="badge badge-success" style="border: none;" data-toggle="modal" data-target="#edit_jawaban">edit jawaban</button>

            <div class="modal fade" id="edit_jawaban" tabindex="-1" role="dialog" aria-labelledby="edit_jawabanLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="edit_jawabanLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="<?= base_url('admin/edit_jawaban') ?>" method="POST">
                      <input type="hidden" name="id" value="<?= $dt['id'] ?>">
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Jawaban:</label>
                        <div class="edit_soal">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_jawaban" id="inlineRadioA" value="A">
                            <label class="form-check-label ml-0 mr-3" for="inlineRadioA">A</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_jawaban" id="inlineRadioB" value="B">
                            <label class="form-check-label ml-0 mr-3" for="inlineRadioB">B</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_jawaban" id="inlineRadioC" value="C">
                            <label class="form-check-label ml-0 mr-3" for="inlineRadioC">C</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_jawaban" id="inlineRadioD" value="D">
                            <label class="form-check-label ml-0 mr-3" for="inlineRadioD">D</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_jawaban" id="inlineRadioE" value="E">
                            <label class="form-check-label ml-0 mr-3" for="inlineRadioE">E</label>
                          </div>
                        </div>
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Send message</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <a class="badge badge-danger text-light" type="submit" name="hapus" href="<= base_url(); ?>/admin/hapusKelas/<= $k['id']; ?>">Hapus</a>
          </td>
        </tr>
      <?php $no++;
      endforeach; ?>
    </tbody>
  </table>
  </form>
</div>

</div>
<?= $this->endSection(); ?>