<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <object data="<?= base_url() . "/latihan/" . $file ?>" type="application/pdf" width="100%" height="800px">
        <h3 class="text-center">Browser Anda tidak mendukung plugin PDF.</h3>
        <h3 class="text-center">Anda dapat mendownload terlebih dahulu plugin tersebut atau dapat langsung mendownload file PDF</h3>
        <h2 class="text-center"><a href="<?= base_url() . "/latihan/" . $file ?>">di sini!</a></h2>
    </object>
</div>
<?= $this->endSection(); ?>