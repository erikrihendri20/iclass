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

    <!-- Modal Mind Map -->
    <div id="modalMindMap" class="modal fade" role="dialog" tabindex='1' aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header d-flex justify-content-between align-text-center">
                    <h3 class="text-primary ml-1">Mind Map</h3>
                    <p class="fa fa-close btn mr-1" style="font-size: 36px;" onclick="tutupModal();"></p>
                </div>

                <div class="modal-body">
                    <div class="col">
                        <div class="row">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" style="width: 250px;" type="button" id="buttonMindMap" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?=$mindmaps[0]['materi']?>
                                </button>
                                <div class="dropdown-menu" style="width: 250px; height: auto; max-height: 300px; overflow-y: auto;" aria-labelledby="dropdownMindMap">
                                    <?php foreach ($mindmaps as $mindmap) : ?>
                                        <button class="dropdown-item" type="button" onclick="gantiMindMap('<?=$mindmap['materi']?>.<?=$mindmap['ext']?>');"><?=$mindmap['materi']?></button>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <img id="imgMindMap" src="<?=base_url()?>/img/Mind Map/<?=$mindmaps[0]['materi']?>.<?=$mindmaps[0]['ext']?>" alt="" class="img-fluid border border-light rounded">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<script>
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
                $('#latihan').append("<button class='btn btn-primary card-link mx-2 my-2 text-white font-weight-bold rounded' onclick='bukaModal();'> Mind Mapping </button>");
            }
        });
    }

    function bukaModal(){
        $('#modalMindMap').modal('show');
    }

    function tutupModal(){
        $('#modalMindMap').modal('hide');
    }

    function gantiMindMap(s) {
        document.getElementById('buttonMindMap').innerHTML=s.substring(0, s.length-4);
        document.getElementById('imgMindMap').src=`<?=base_url()?>/img/Mind Map/${s}`;
    }
</script>
<?= $this->endSection(); ?>