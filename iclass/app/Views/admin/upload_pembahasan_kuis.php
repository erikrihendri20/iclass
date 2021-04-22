<?= $this->extend('templates/admin/index'); ?>
<?= $this->section('content'); ?>
<?php if (session('flash')) : ?>
    <?= session('flash'); ?>
<?php endif; ?>
<?php $validation = service('validation') ?>

<div class="content-wrapper">
    <section class="content mx-2 pb-5">

        <div class="container-fluid">

            <div class="card card-secondary card-outline elevation-3">
                <div class="card-body">

                    <div class="row">
                        <div class="col">
                            <h5><i class="fas fa-fw fa-book text-secondary"></i>&ensp;Upload Pembahasan Kuis</h5>
                        </div>
                    </div>
                    <div class="row my-2 pl-4">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#upload_modal">
                            Ketentuan upload
                        </button>
                    </div>
                    <div class="modal fade" id="upload_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalLabel">Ketentuan Upload</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <ul>
                                        <li>Pilih materi sesuai materi pembahasan yang akan diupload. (ex. Persamaan Trigonometri)</li>
                                        <br>
                                        <li>Kode akan terisi secara otomatis sesuai materi yang dipilih.</li>
                                        <br>
                                        <li>Format penamaan file sesuai no pembahasan yang diupload. (ex. 1.png, 2.png, 3.jpeg)</li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12 text-sm">
                            <form action="<?= base_url('admin/upload_kuis_pembahasan') ?>" id="soal_form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                <div class="form-group row pl-4">
                                    <label for="materi" class="col-sm-2 col-form-label text-secondary"><span class="text-center">Judul Materi</span></label>
                                    <div class="col-sm-1 d-flex justify-content-end align-items-center">:</div>
                                    <div class="col-sm-7">
                                        <select class="form-control form-control-sm border border-secondary border-top-0 border-right-0 border-left-0 <?= ($validation->hasError('materi')) ? 'is-invalid' : '' ?>" name="materi" id="materi">
                                            <?php foreach ($data as $dt) : ?>
                                                <option value="<?= $dt['materi'] ?>"><?= $dt['materi'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row pl-4">
                                    <label for="kode" class="col-sm-2 col-form-label text-secondary">Kode</label>
                                    <div class="col-sm-1 d-flex justify-content-end align-items-center">:</div>
                                    <div class="col-sm-5">
                                        <input type="text" id="kode" class="form-control form-control-sm border border-secondary border-top-0 border-right-0 border-left-0 <?= ($validation->hasError('kode')) ? 'is-invalid' : '' ?>" style="border-radius: 0;" disabled>
                                        <input type="hidden" name="kode" id="kode_hidden">
                                    </div>
                                    <div class="invalid-feedback">
                                        <?= service('validation')->getError('kode'); ?>
                                    </div>
                                </div>

                                <div class="form-group row pl-4">
                                    <input class="w-100 <?= ($validation->hasError('file')) ? 'is-invalid' : '' ?>" type="file" name="file[]" id="img" multiple>
                                    <div class="invalid-feedback">
                                        <?= service('validation')->getError('file'); ?>
                                    </div>
                                </div>

                                <div class="form-group row pl-4" id="new_input"></div>

                                <div class="quote-imgs-thumbs quote-imgs-thumbs--hidden" id="img_preview" aria-live="polite"></div>
                                <br>
                                <div class="col d-flex justify-content-end">
                                    <button type="submit" class="btn btn-sm btn-outline-primary btn-user">
                                        <i class="fas fa-paper-plane"></i>&ensp;
                                        Upload
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        get_kode();
    });

    $('#materi').change(function() {
        get_kode();
    });

    function get_kode() {
        var id = $('#materi').val();
        $.ajax({
            url: "<?= base_url('admin/get_kode') ?>",
            type: 'POST',
            data: {
                'materi': id
            },
            success: function(respon) {
                var data = $.parseJSON(respon);
                var kode = $('#kode');
                $('#kode').empty();
                $('#kode').val(data.kode);
                $('#kode_hidden').val($('#kode').val());
            }
        });
    }

    var imgUpload = document.getElementById('img'),
        imgPreview = document.getElementById('img_preview'),
        imgUploadForm = document.getElementById('img-upload-form'),
        totalFiles, previewTitle, previewTitleText, img;

    imgUpload.addEventListener('change', previewImgs, false);
    imgUploadForm.addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Images Uploaded! (not really, but it would if this was on your website)');
    }, false);

    function previewImgs(event) {
        totalFiles = imgUpload.files.length;

        if (!!totalFiles) {
            imgPreview.classList.remove('quote-imgs-thumbs--hidden');
            previewTitle = document.createElement('p');
            previewTitle.style.fontWeight = 'bold';
            previewTitleText = document.createTextNode(totalFiles + ' Total Images Selected');
            previewTitle.appendChild(previewTitleText);
            imgPreview.appendChild(previewTitle);
        }

        for (var i = 0; i < totalFiles; i++) {
            img = document.createElement('img');
            img.src = URL.createObjectURL(event.target.files[i]);
            img.classList.add('img-preview-thumb');
            imgPreview.appendChild(img);
        }
    }
</script>
<?= $this->endSection(); ?>