<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<?php $validation = service('validation') ?>
<div class="content mb-3">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column justify-content-center ">
                <h1 class="text-primary align-self-center mb-5">Upload Bukti Pembayaran</h1>
                <?= session()->flash; ?>
                <form class="d-flex flex-column masuk" class="d-flex" method="POST" action="" enctype="multipart/form-data">
                    <input type="hidden" name="id">
                    <img src="../img/default.png" id="preview-bukti" class="img-thumbnail d-flex align-self-center" style="max-width: 40%;" alt="bukti transfer">
                    <div class="custom-file my-5 d-flex align-self-center" style="max-width: 40%;">
                        <input onchange="preview()" type="file" id="file-bukti" name="bukti-pembayaran" class="custom-file-input" id="validatedCustomFile" required>
                        <label class="custom-file-label" id="label-bukti" for="validatedCustomFile">Pilih file</label>
                        <div class="invalid-feedback">file salah</div>
                    </div>

                    <div class="d-flex justify-content-center">

                        
                        <button type="submit" name="submit" class="btn btn-primary align-self-center mx-1">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>