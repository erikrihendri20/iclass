<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <object data="<?= base_url() . "/latihan/" . $file ?>" type="application/pdf" width="100%" height="800px">
        <p class="text-center">Browser Anda tidak mendukung plugin PDF.</p>
        <p class="text-center">Anda dapat mendownload terlebih dahulu plugin tersebut atau dapat langsung mendownload file PDF <a href="<?= base_url() . "/latihan/" . $file ?>">di sini!</a></p>
    </object>
</div>

<script>
    function bukaMindMap() {
        $('#mindMap').modal('show');
    }

    function tutupMindMap() {
        $('#mindMap').modal('hide');
    }

    function clicked(a, b) {
        $('.materi').removeClass('btn-secondary');
        $('.materi').removeClass('btn-light');

        $('.materi').addClass('btn-light');
        $('#' + a).removeClass('btn-light');
        $('#' + a).addClass('btn-secondary');

        $('.soal').removeClass('btn-warning');
        $('.soal').removeClass('btn-primary');

        $('.soal').addClass('btn-primary');
        $('#' + b).removeClass('btn-primary');
        $('#' + b).addClass('btn-warning');

    }
</script>
<?= $this->endSection(); ?>