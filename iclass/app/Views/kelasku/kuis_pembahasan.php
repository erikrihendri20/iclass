<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content my-3 bg-white">
    <!-- Content-->

    <form action="<?= base_url('kelasku/kuis_soal') ?>" method="post" id="next">
        <input type="hidden" name="no_kuis" value="<?= $kuis[0]['no_kuis'] ?>">>
    </form>

    <div id="container-pembahasan">
        <div class="text-primary font-weight-bold mb-4 mnya-5 text-center">
            <h2 class="bg-warning text-white mx-auto" style="width:10em; height: 1.5em; border-radius:25px;">Pembahasan</h2>
        </div>
        <div class="p-5 m-5 w-75 bg-white rounded text-center mx-auto" style="-webkit-box-shadow: 0px 6px 20px 0px rgba(107,107,107,1);
        -moz-box-shadow: 0px 6px 20px 0px rgba(107,107,107,1);
        box-shadow: 0px 6px 20px 0px rgba(107,107,107,1);">
            <img class="w-100" id="pembahasan" src="<?= base_url() ?>/img/kuis/<?= session('kode_kuis') ?>/pembahasan/<?= $kuis[0]['soal'] ?>">
            <!-- <img class="w-100" src="<= base_url() ?>/img/kuis/kzka/pembahasan/001.png" alt="Soal_no_<?php if (isset($_GET['i'])) echo $_GET['i']; ?>"> -->
        </div>
    </div>

    <div class="mnya-5 my-5 text-right pb5">
        <button id="submit" onclick="next()" class="btn btn-primary" style="border-radius:30px">
            <h4>Selanjutnya</h4>
        </button>
    </div>

</div>
<script>
    function next() {
        $("#next").submit();
    }
</script>
<?= $this->endSection(); ?>