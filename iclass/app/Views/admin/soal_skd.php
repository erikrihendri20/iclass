<div class="modal fade" id="modal-skd" tabindex="-1" role="dialog" aria-labelledby="edit_jadwalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="edit_jadwalLabel">
                    <h5>Soal SKD</h5>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="event_id-skd" name="event_id">

                <div class="form-group row pl-4">
                    <label for="jenis" class="col-sm-3 col-form-label text-secondary">Jenis</label>
                    <div class="col-sm-7">
                        <select class="form-control" id="jenis-skd" name="jenis">
                            <option value="TWK" selected>TWK</option>
                            <option value="TIU">TIU</option>
                            <option value="TKP">TKP</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row pl-4">
                    <label for="nomor" class="col-sm-3 col-form-label text-secondary">Nomor</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="nomor" id="nomor-skd">
                    </div>
                </div>

                <div class="form-group row pl-4">
                    <label for="soal" class="col-sm-3 col-form-label text-secondary">Soal</label>
                    <div class="col-sm-7">
                        <input type="file" class="form-control py-1" name="soal" id="soal-skd">
                    </div>
                </div>

                <?php for ($i='a'; $i<='e'; $i++) { ?>
                    <div class="form-group row pl-4">
                        <label for="jenis" class="col-sm-3 col-form-label text-secondary text-capitalize"><?= $i ?></label>
                        <div class="col-sm-7">
                            <select class="form-control" id="<?= $i ?>" name="<?= $i ?>">
                                <option value="0" selected>0</option>
                                <?php for ($j=1; $j<=5; $j++) { ?>
                                    <option value="<?= $j ?>"><?= $j ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                <?php } ?>

                <div class="modal-footer">
                    <button type="button" name="submit" class="btn btn-primary text-white" onclick="submitSkd();">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function soalSkd(id, nomor, jenis, a, b, c, d, e) {
        document.getElementById('event_id-skd').value=id;
        document.getElementById('jenis-skd').value=jenis;
        document.getElementById('nomor-skd').value=nomor;
        document.getElementById('a').value=a;
        document.getElementById('b').value=b;
        document.getElementById('c').value=c;
        document.getElementById('d').value=d;
        document.getElementById('e').value=e;        

        $('#modal-skd').modal('show');
        $('#lihat-skd').modal('hide');
    }

    function submitSkd() {
        var data = new FormData();
        data.append('nomor', document.getElementById('nomor-skd').value);
        data.append('jenis', document.getElementById('jenis-skd').value);
        data.append('event_id', document.getElementById('event_id-skd').value);
        data.append('a', document.getElementById('a').value);
        data.append('b', document.getElementById('b').value);
        data.append('c', document.getElementById('c').value);
        data.append('d', document.getElementById('d').value);
        data.append('e', document.getElementById('e').value);
        data.append('soal', document.getElementById('soal-skd').files[0]);
        data.append('submit', 'submit');

        $.ajax({
            url: '<?= base_url() ?>/admin/soal_skd',
            type: "POST",
            cache: false,
            contentType: false,
            processData: false,
            enctype: 'multipart/form-data',
            data: data,
            success: function(result) {
                res = JSON.parse(result);
                if (res[0]=='success') {
                    swal('', res[1], 'success');
                    $('#modal-skd').modal('hide');
                } else {
                    swal('', res[1], 'error');
                }
            }
        });
    }
</script>