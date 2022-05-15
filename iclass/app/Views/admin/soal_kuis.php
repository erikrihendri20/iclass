<div class="modal fade" id="modal-soal" tabindex="-1" role="dialog" aria-labelledby="edit_jadwalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="edit_jadwalLabel">
                    <h5>Unggah Soal & Pembahasan Kuis</h5>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="row mx-0" action="<?= base_url('admin/soal_kuis') ?>" id="soal_form" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="materi" class="form-label">Subbab</label>
                        <select class="form-control" id="subbab" name="subbab">
                        </select>
                    </div>
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
                        <label for="pembahasan" class="col-sm-3 col-form-label text-secondary"><span class="text-center">Pembahasan</span></label>
                        <div class="col-sm-7">
                            <input type="file" class="form-control<?= (service('validation')->hasError('pembahasan')) ? ' is-invalid' : '' ?>" name="pembahasan[]" id="pembahasan" multiple>
                        </div>
                        <div class="invalid-feedback">
                            <?= service('validation')->getError('pembahasan'); ?>
                        </div>
                    </div>
                    <input type="hidden" value="82" id="event_id" name="event_id">
                    <input type="hidden" value="materi" id="materi_soal" name="materi">
                    <div class="row mx-0">
                        <h5 class="col-12 text-primary font-weight-bold mb-3 px-0">Jawaban Soal</h5>
                        <?php for ($i=1; $i<=10; $i++) { ?>
                            <div class="w-100 mt-3">
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
                                <div class="row justify-content-center mt-2 mx-0">
                                    <input type="text" class="col-sm-1 form-control" id="poin_<?= $i ?>A" name="poin_<?= $i ?>A" placeholder="A">
                                    <input type="text" class="col-sm-1 form-control ml-2" id="poin_<?= $i ?>B" name="poin_<?= $i ?>B" placeholder="B">
                                    <input type="text" class="col-sm-1 form-control ml-2" id="poin_<?= $i ?>C" name="poin_<?= $i ?>C" placeholder="C">
                                    <input type="text" class="col-sm-1 form-control ml-2" id="poin_<?= $i ?>D" name="poin_<?= $i ?>D" placeholder="D">
                                    <input type="text" class="col-sm-1 form-control ml-2" id="poin_<?= $i ?>E" name="poin_<?= $i ?>E" placeholder="E">
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
    const subbabs = JSON.parse('<?= json_encode($subbabs) ?>');

    function modalSoal(id, materi) {
        document.getElementById('event_id').value=id;
        document.getElementById('materi_soal').value=materi;

        const div = document.getElementById('subbab');
        div.innerHTML="";
        subbabs.map(subbab => {
            if (subbab['materi']==materi) {
            div.innerHTML+=`<option value='${subbab['submateri']}'>${subbab['submateri']}</option>`;
            }
        });

        $('#modal-soal').modal('show');
    }
</script>