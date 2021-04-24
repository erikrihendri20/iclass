<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid my-5">
    <?= session('flash'); ?>

    <div class="row mx-2">
        <div class="col-xl-5 col-md-10 mx-md-auto h-100">
            <img class="mx-auto d-block w-md-75 w-xl-100 my-auto" src="<?= base_url() . '/img/3.png' ?>" alt="..." style="height:25em;">
        </div>
        <div class="col-xl-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="display-4 text-xl-center ml-md-4 mt-5 mt-xl-0 text-primary font-weight-bold">
                        <p>Latihan Soal</p>
                    </div>
                    <div class="card card-secondary card-outline">
                        <div class="card-body" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); max-height: 17em; overflow-x: hidden; overflow-y: auto;">
                            <div class="col text-center">
                                <?php foreach ($materi as $dt) : ?>
                                    <a class="btn btn-light card-link w-75 mx-auto my-2 text-primary font-weight-bold" onclick="materi('<?= $dt['materi'] ?>')" style="border-radius: 15px;"><?= $dt['materi'] ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row bg-light mt-3">
        <div class="col mx-4" id="latihan">
        </div>
    </div>

    <!--Modal untuk Mind Mapping-->
    <div id="mindMap" class="modal fade" role="dialog" tabindex='1' aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg bg-white rounded" role="document">
            <div class="modal-header d-flex justify-content-between align-text-center">
                <h3 class="text-primary ml-1">Mind Mapping</h3>
                <p class="fa fa-close btn mr-1" style="font-size:36px;" onclick="tutupMindMap();"></p>
            </div>

            <div class="modal-body d-flex justify-content-center align-text-center">
                <img id="imgMindMap" src="<?= base_url() ?>/img/Mind Map/ALJABAR.jpg" alt="Mind Mapping" class="img-fluid img-thumbnail">
            </div>
        </div>
    </div>
</div>

<script>
    function bukaMindMap() {
        $('#mindMap').modal('show');
    }

    function tutupMindMap() {
        $('#mindMap').modal('hide');
    }

    function materi(id) {
           <?php header('Content-type: application/json'); ?>
        $.ajax({
            url: "<?= base_url('kelasku/get_latihan') ?>/" + id,
            type: 'GET',
            success: function(respon) {
                var data = $.parseJSON(respon);
                $('#latihan').empty();
                $('#latihan').append("<h3 class='ml-2 p-2 text-primary'> Latihan dan Pembahasan - Materi " + id + " </h3>");
                for (var i = 0; i < data.length; i++) {
                    $('#latihan').append("<a class='btn btn-primary card-link mx-2 my-2 text-white font-weight-bold rounded' href='<?= base_url('kelasku/view_pdf/') ?>/" + data[i]['pdf_path'] + "'> Latihan dan Pembahasan " + (i + 1) + " </a>");
                }
                document.getElementById('imgMindMap').src="<?= base_url() ?>/img/Mind Map/" + id + ".jpg";
            }
        });
    }
</script>
<?= $this->endSection(); ?>