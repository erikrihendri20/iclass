<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<?php $validation = service('validation') ?>
<div class="content mb-3">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column justify-content-center ">
                <h1 class="text-primary align-self-center">Ruang Tunggu</h1>
                <?= session()->flash; ?>
                <p>Data anda sedang diproses oleh admin, hubungi admin untuk segera melakukan pemeriksaan</p>
            </div>
            
        </div>
        <div class="row">
            <div class="col">
                <form action="" method="POST">
                    <?php 
                    
                    $text = 'selamat pagi/siang/sore/malam kak, perkenalkan nama saya '.$user['nama']. ', saya sudah melakukan pembayaran dan sudah mengupload bukti pembayaran. terimakasih';
                    
                    ?>
                    <a type="submit" name="chat-admin" href="https://api.whatsapp.com/send/?phone=6281332311261&text=<?= $text; ?>" class="btn btn-success">Chat Admin</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>