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
                            <h5><i class="fas fa-fw fa-book text-secondary"></i>&ensp;Upload Soal Kuis</h5>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <a href="<?= base_url('admin/kuis_pembahasan') ?>" class="btn btn-sm btn-outline-primary btn-user">
                                upload pembahasan
                            </a>
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
                                        <li>Masukkan judul materi sesuai materi soal yang diupload. (ex. Persamaan Trigonometri)</li>
                                        <br>
                                        <li>Kode tidak perlu diubah kecuali untuk menambah soal pada materi yang pernah diupload atau belum lengkap.</li>
                                        <br>
                                        <li>Format penamaan file adalah sesuai no soal yang diupload. (ex. 1.png, 2.png, 3.jpeg)</li>
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
                            <form action="<?= base_url('admin/upload_kuis_soal') ?>" id="soal_form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                <div class="form-group row pl-4">
                                    <label for="materi" class="col-sm-2 col-form-label text-secondary"><span class="text-center">Judul Materi</span></label>
                                    <div class="col-sm-1 d-flex justify-content-end align-items-center">:</div>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control form-control-sm border border-secondary border-top-0 border-right-0 border-left-0 <?= ($validation->hasError('soal')) ? 'is-invalid' : '' ?>" name="soal" id="soal" placeholder="Masukkan judul materi ... " style="border-radius: 0;">
                                    </div>
                                </div>
                                <div class="form-group row pl-4">
                                    <label for="kode" class="col-sm-2 col-form-label text-secondary">Kode</label>
                                    <div class="col-sm-1 d-flex justify-content-end align-items-center">:</div>
                                    <div class="col-sm-5">
                                        <input type="text" name="kode" id="kode" value="<?= $kode ?>" class="form-control form-control-sm border border-secondary border-top-0 border-right-0 border-left-0 <?= ($validation->hasError('kode')) ? 'is-invalid' : '' ?>" style="border-radius: 0;">
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
<script>
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

        for (var i = 0; i < totalFiles; i++) {
            var container = document.createElement("div");
            container.classList.add("w-100");

            name = "jawaban_" + (i + 1);

            var form_cont = document.createElement("Span");
            form_cont.classList.add("col-sm-5");

            for (var j = 65; j < 70; j++) {
                var radio_field = document.createElement("input");
                radio_field.type = "radio";
                id = (i + 1) + "_" + j;
                radio_field.setAttribute("id", id);
                radio_field.setAttribute("name", name);
                radio_field.value = String.fromCharCode(j);

                var radio_label = document.createElement("Label");
                radio_label.innerHTML = String.fromCharCode(j);
                radio_label.setAttribute("for", id);
                radio_label.classList.add("pr-4");
                radio_label.classList.add("ml-2");

                form_cont.appendChild(radio_field);
                form_cont.appendChild(radio_label);
            }
            var label = document.createElement("Label");
            label.classList.add("col-sm-3");
            label.innerHTML = "Jawaban soal " + (i + 1);
            container.appendChild(label);

            container.appendChild(form_cont);
            document.getElementById('new_input').appendChild(container);
        }
    }
</script>
<?= $this->endSection(); ?>