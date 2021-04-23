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
      <?php foreach ($data as $dt) : ?>
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
                    <h5 class="modal-title" id="soal<?= $dt['kode_kuis'] . $dt['no_kuis'] ?>ModalLabel">Soal no <?= $dt['no_kuis'] ?></h5>
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
            <a data-toggle="modal" data-target="#pembahasan<?= $dt['kode_kuis'] . $dt['no_kuis'] ?>">
              <img style="width: 15em" src="<?= base_url() ?>/img/kuis/<?= $dt['kode_kuis'] ?>/pembahasan/<?= $dt['pembahasan'] ?>">
            </a>

            <!-- Modal -->
            <div class="modal fade" id="pembahasan<?= $dt['kode_kuis'] . $dt['no_kuis'] ?>" tabindex="-1" role="dialog" aria-labelledby="pembahasan<?= $dt['kode_kuis'] . $dt['no_kuis'] ?>ModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="pembahasan<?= $dt['kode_kuis'] . $dt['no_kuis'] ?>ModalLabel">Pembahasan no <?= $dt['no_kuis'] ?></h5>
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
            <button class="badge badge-success" style="border: none;" data-toggle="modal" data-target="#edit_jawaban<?= $dt['no_kuis'] ?>">edit jawaban</button>

            <div class="modal fade" id="edit_jawaban<?= $dt['no_kuis'] ?>" tabindex="-1" role="dialog" aria-labelledby="edit_jawabanLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="edit_jawabanLabel">Edit jawaban kuis no <?= $dt['no_kuis'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="<?= base_url('admin/edit_jawaban') ?>" method="POST">
                      <input type="hidden" name="id" value="<?= $dt['id'] ?>">
                      <div class="form-group">
                        <label class="col-form-label">Jawaban:</label>
                        <div class="edit_soal">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_jawaban" id="inlineRadioA<?= $dt['id'] ?>" value="A" <?php if ($dt['jawaban'] == 'A') echo 'checked'; ?>>
                            <label class="form-check-label ml-0 mr-3" for="inlineRadioA<?= $dt['id'] ?>">A</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_jawaban" id="inlineRadioB<?= $dt['id'] ?>" value="B" <?php if ($dt['jawaban'] == 'B') echo 'checked'; ?>>
                            <label class="form-check-label ml-0 mr-3" for="inlineRadioB<?= $dt['id'] ?>">B</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_jawaban" id="inlineRadioC<?= $dt['id'] ?>" value="C" <?php if ($dt['jawaban'] == 'C') echo 'checked'; ?>>
                            <label class="form-check-label ml-0 mr-3" for="inlineRadioC<?= $dt['id'] ?>">C</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_jawaban" id="inlineRadioD<?= $dt['id'] ?>" value="D" <?php if ($dt['jawaban'] == 'D') echo 'checked'; ?>>
                            <label class="form-check-label ml-0 mr-3" for="inlineRadioD<?= $dt['id'] ?>">D</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edit_jawaban" id="inlineRadioE<?= $dt['id'] ?>" value="E" <?php if ($dt['jawaban'] == 'E') echo 'checked'; ?>>
                            <label class="form-check-label ml-0 mr-3" for="inlineRadioE<?= $dt['id'] ?>">E</label>
                          </div>
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
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  </form>
</div>

<?= $this->endSection(); ?>