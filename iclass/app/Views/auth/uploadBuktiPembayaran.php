<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<?php $validation = service('validation') ?>
<div class="content mb-3 px-4">
    <div class="row w-100 mx-0" style="background-image: linear-gradient(113deg, #0095ec, #005ccb); border-radius: 20px; padding: 75px;">
        <div class="col-6 px-0">
            <div class="row justify-content-center align-content-center mx-0 h-100">
                <img src="<?= base_url() ?>/img/Aset/Asset 473.png" alt="" style="object-fit: contain; width: 70%;"> 
            </div>
        </div>
        <div class="col-6 px-0">
            <div class="row align-content-center h-100 mx-0">
                <form class="row justify-content-center align-content-center w-100 mx-0" method="POST" action="" enctype="multipart/form-data">
                    <h2 class="text-white font-weight-bold text-center">Silahkan mengunggah foto bukti pembayaran</h2>
                    <div class="custom-file">
                        <input type="file" onchange="preview()" id="file-bukti" name="bukti-pembayaran" class="custom-file-input" required>
                        <label class="custom-file-label" style="border-radius: 10px;" id="label-bukti" for="file-bukti">...</label>
                        <div class="invalid-feedback">file salah</div>
                    </div>
                    <button type="submit" name="submit" class="btn bg-white font-weight-bold align-self-center mt-3" style="color: #005ccb; border-radius: 10px;">Lanjutkan</button>
                </form>
                <div class="row w-100 mx-0 mt-5">
                    <div class="row w-100 mx-0"><h6 class="bg-white d-inline mx-auto mb-3 px-3 py-1" style="color: #005ccb; border-radius: 10px;">Pilihan metode pembayaran yang tersedia</h6></div>
                    <div class="row w-100 mx-0"><hr style=" height:2px; width:50%; border-width:0; color:white; background-color:white"></div>
                    <div class="row w-100 mx-0"><h6 class="bg-white mx-auto mt-3 px-3 py-1" style="color: #005ccb; border-radius: 10px;">BRI : 0344-0110-5184-503 a.n Ivan Masduqi Mahfuds</h6></div>
                    <div class="row w-100 mx-0"><h6 class="bg-white mx-auto mt-1 px-3 py-1" style="color: #005ccb; border-radius: 10px;">OVO : 0812-1647-3536 a.n Ivan</h6></div>
                    <div class="row w-100 mx-0"><h6 class="bg-white mx-auto mt-1 px-3 py-1" style="color: #005ccb; border-radius: 10px;">GoPay : 0812-1647-3536 a.n Ivan</h6></div>
                    <div class="row w-100 mx-0"><h6 class="bg-white mx-auto mt-1 px-3 py-1" style="color: #005ccb; border-radius: 10px;">Dana : 0812-1647-3536 a.n Ivan</h6></div>
                    <div class="row w-100 mx-0"><h6 class="bg-white mx-auto mt-1 px-3 py-1" style="color: #005ccb; border-radius: 10px;">Link Aja : 0812-1647-3536 a.n Ivan Masduqi Mahfuds</h6></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="padding-top: 200px;"></div>
<?= $this->include('templates/footer'); ?>
<?= $this->endSection(); ?>