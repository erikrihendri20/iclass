<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid mt-5 px-0">
    <?= session('flash'); ?>

    <div class="row mx-2 justify-content-center">
        <div class="w40 mx-md-auto h-100">
            <img class="gambar" src="<?= base_url() . '/img/3.png' ?>" alt="...">
        </div>

        <?php if (session('kode-paket') == 1) : ?>
            <div class="w25-1">
                <div class="w-75 mx-auto">
                    <div class="display-4 text-xl-center ml-md-4 mt-5 mt-xl-0 text-primary font-weight-bold">
                        <p>Latihan Soal</p>
                    </div>
                    <div class="card card-secondary card-outline">
                        <div class="card-body" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); max-height: 18em; overflow-x: hidden; overflow-y: auto;">
                            <div class="col text-center">
                                <?php foreach ($materi as $dt) : ?>
                                    <a class="btn btn-light card-link w-75 mx-auto mb-2 text-primary font-weight-bold" onclick="materi('<?= $dt['name'] ?>')" style="border-radius: 15px;"><?= $dt['name'] ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="w25-1 text-center mt-md-5 mt-xl-2">
                <div class="card-link bg-primary text-white font-weight-bold m-0 w-75 mx-auto h4" style="border-radius:5px; height:1.5em;">Modul Bimbel</div>
                <div class="bg-light m-0 mx-auto" style="height: 20em; width:72%;">
                    <div class="d-flex w-100" style="height:12em;">
                        <div class="row justify-content-center align-self-center w-100 mx-auto">
                            <img class="mx-auto border" src="<?= base_url() ?>/img/1.jpg" alt="" style="height: 10em; width:7em;">
                        </div>
                    </div>
                    <div class="container">
                        <p class="text-left font-weight-bold" style="font-size: small;">
                            Ebook ini dilengkapi dengan kumpulan materi dan soal USM POLSTAT STIS beserta pembahasannya
                        </p>
                        <a href="<?=base_url()?>/kelasku/view_pdf/ebook.pdf" class="card-link bg-warning h5 text-white font-weight-bold px-5 rounded">lihat</a>
                    </div>
                </div>
                <div class="card-link bg-primary h4 text-white font-weight-bold m-0 w-75 mx-auto rounded">Premium</div>
            </div>
            <div class="w25-2">
                <div class="w-100 mx-auto">
                    <div class="h1 text-xl-center ml-md-4 mt-5 mt-xl-0 text-primary font-weight-bold">
                        <p>Latihan Soal</p>
                    </div>
                    <div class="card card-secondary card-outline">
                        <div class="card-body" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); max-height: 18em; overflow-x: hidden; overflow-y: auto;">
                            <div class="col text-center">
                                <?php foreach ($materi as $dt) : ?>
                                    <div class="row fluid btn-light mt-2 p-0" style="border-radius: 10px;">
                                        <a class="btn text-primary text-left h6 w-100 mx-1 my-auto py-2 font-weight-bold" onclick="materi('<?= $dt['name'] ?>')"><?= $dt['name'] ?></a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <div class="mindmap-latihan bg-light mt-3 pb-3">
        <button class='btn btn-primary card-link m-4' style="border-radius: 5px;" onclick='bukaModal();'> 
        <span class="text-white font-weight-bold px-4">Mind Mapping</span>
        </button>
        <div class="row ">
            <div class="col mx-4" id="latihan">
            </div>
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
                                    <?= $mindmaps[0]['materi'] ?>
                                </button>
                                <div class="dropdown-menu" style="width: 250px; height: auto; max-height: 300px; overflow-y: auto;" aria-labelledby="dropdownMindMap">
                                    <?php foreach ($mindmaps as $mindmap) : ?>
                                        <button class="dropdown-item" type="button" onclick="gantiMindMap('<?= $mindmap['materi'] ?>.<?= $mindmap['ext'] ?>');"><?= $mindmap['materi'] ?></button>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <img id="imgMindMap" src="<?= base_url() ?>/img/Mind Map/<?= $mindmaps[0]['materi'] ?>.<?= $mindmaps[0]['ext'] ?>" alt="" class="img-fluid border border-light rounded">
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
                $('#latihan').append("<h3 class='ml-2 p-2 text-primary font-weight-bold'> Latihan dan Pembahasan - Materi " + id + " </h3>");
                if (data.length > 0) {
                    for (var i = 0; i < data.length; i++) {
                        $('#latihan').append("<a class='btn btn-primary card-link mx-2 my-2 text-white font-weight-bold rounded' href='<?= base_url('kelasku/view_pdf/') ?>/" + data[i]['pdf_path'] + "'> Latihan dan Pembahasan " + (i + 1) + " </a>");
                    }
                } else {
                    $('#latihan').append("<br>");
                    $('#latihan').append("<h4 class=\"text-center text-primary\"> Belum terdapat latihan dan pembahasan untuk Materi " + id + " </h4>");
                }
            }
        });
    }

    function bukaModal() {
        $('#modalMindMap').modal('show');
    }

    function tutupModal() {
        $('#modalMindMap').modal('hide');
    }

    function gantiMindMap(s) {
        document.getElementById('buttonMindMap').innerHTML = s.substring(0, s.length - 4);
        document.getElementById('imgMindMap').src = `<?= base_url() ?>/img/Mind Map/${s}`;
    }
</script>
<?= $this->endSection(); ?>