<div class="modal fade" id="modal-soal" tabindex="-1" role="dialog" aria-labelledby="edit_jadwalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="edit_jadwalLabel">
                    <h5>Unggah Soal & Pembahasan Try Out</h5>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="row mx-0" action="<?= base_url('admin/soal_tryout') ?>" id="soal_form" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group row pl-4">
                        <label for="soal" class="col-sm-3 col-form-label text-secondary"><span class="text-center">Soal</span></label>
                        <div class="col-sm-7">
                            <input type="file" class="form-control<?= (service('validation')->hasError('soal')) ? ' is-invalid' : '' ?>" name="soal[]" id="soal" multiple>
                        </div>
                        <div class="invalid-feedback">
                            <?= service('validation')->getError('soal'); ?>
                        </div>
                    </div>
                    <div class="form-group row pl-4">
                        <label for="bagian" class="col-sm-1 col-form-label text-secondary"><span class="text-center">Bagian</span></label>
                        <div class="col-sm-8">
                            <select id="bagian" name="bagian" class="form-control<?= (service('validation')->hasError('bagian')) ? ' is-invalid' : '' ?>">
                                <option class="font-weight-bold" value="1-20" selected>1-20</option>
                                <option class="font-weight-bold" value="21-40">21-40</option>
                            </select>
                        </div>
                        <div class="invalid-feedback">
                            <?= service('validation')->getError('bagian'); ?>
                        </div>
                    </div>
                    <input type="hidden" value="82" id="event_id" name="event_id">
                    <input type="hidden" value="materi" id="materi_soal" name="materi">
                    <div class="row mx-0">
                        <h5 class="col-12 text-primary font-weight-bold mb-3 px-0">Jawaban Soal</h5>
                        <?php for ($i=1; $i<=20; $i++) { ?>
                            <div class="col-6 mt-3">
                                <div class="form-group row pl-4">
                                    <label for="pembahasan" class="col-sm-1 col-form-label text-secondary"><span class="text-center"><?= $i ?></span></label>
                                    <div class="col-sm-8">
                                        <select id="jawaban<?= $i ?>" name="jawaban<?= $i ?>" class="form-control<?= (service('validation')->hasError('jawaban'.$i)) ? ' is-invalid' : '' ?>">
                                            <option value="" disabled selected hidden><b>Jawaban</b></option>
                                            <option class="font-weight-bold" value="A">A</option>
                                            <option class="font-weight-bold" value="B">B</option>
                                            <option class="font-weight-bold" value="C">C</option>
                                            <option class="font-weight-bold" value="D">D</option>
                                            <option class="font-weight-bold" value="E">E</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row pl-4">
                                    <label for="pembahasan" class="col-sm-1 col-form-label text-secondary"><span class="text-center"></span></label>
                                    <div class="col-sm-8">
                                        <select id="subbab<?= $i ?>" name="subbab<?= $i ?>" class="form-control<?= (service('validation')->hasError('subbab'.$i)) ? ' is-invalid' : '' ?>">
                                            <option value="" disabled selected hidden><b>Submateri</b></option>
                                            <?php foreach ($submateris as $submateri) { ?>
                                                <option class="font-weight-bold" value="<?= $submateri['submateri'] ?>"><?= $submateri['submateri'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary text-white">Unggah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function modalSoal(id, materi) {
        document.getElementById('event_id').value=id;
        document.getElementById('materi_soal').value=materi;

        $('#modal-soal').modal('show');
    }
</script>