<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <object data="<?= base_url() . "/latihan/" . $file ?>#toolbar=0" type="application/pdf" width="100%" height="800px">
        <h3 class="text-center fs-16">Browser Anda tidak mendukung plugin PDF.</h3>
        <h3 class="text-center fs-16">Anda dapat mendownload terlebih dahulu plugin tersebut atau dapat langsung mendownload file PDF</h3>
        <h2 class="text-center fs-16"><a href="<?= base_url() . "/latihan/" . $file ?>">di sini!</a></h2>
    </object>
</div>
<?= $this->endSection(); ?>