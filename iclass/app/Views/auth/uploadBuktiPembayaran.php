<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<?php $validation = service('validation') ?>
<div class="content mb-3">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column justify-content-center ">
                <h1 class="text-primary align-self-center mb-5">Upload Bukti Pembayaran</h1>
                <?= session()->flash; ?>
                <form class="d-flex flex-column masuk" method="POST" action="" enctype="multipart/form-data">
                    <input type="hidden" name="id">

                    <div class="custom-file mb-5">
                        <input type="file" name="bukti-pembayaran" class="custom-file-input" id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">Pilih file</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
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