<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0">
    <div id="content-2-container" class="pt-5 d-flex justify-content-center">

        <div id="lefty" class="btn">
            <a id="kekiri" onclick="keKiri();" class='fas fa-chevron-circle-left display-4 text-secondary'></a>
        </div>
        <div id="righty" class="btn">
            <a id="kekanan" onclick="keKanan();" class='fas fa-chevron-circle-right display-4 text-secondary'></a>
        </div>


        <!-- Rekaman Kelas -->

        <div id="rekaman-container">
            <div class="d-flex justify-content-center align-items-center mx-2">
                <h1 id="judul" class="text-primary font-weight-bold">Rekaman Kelas</h1>
            </div>

            <div class="mt-3 row">

                <div id="video_rekaman">
                    <div class="embed-responsive embed-responsive-16by9 bg-white ml-0">
                        <?php if (isset($rekamans[$id])) : ?>
                        <video id="vid" class="embed-responsive-item mx-2" controls controlsList="nodownload">
                            <source id="vidsrc" src="<?= base_url() ?>/vid/Rekaman Kelas/<?= $rekamans[$id]['admin'] ?>/Pertemuan <?= $rekamans[$id]['pertemuan'] ?> - <?= $rekamans[$id]['materi'] ?>.mp4" type="video/mp4">
                            Waduh, sepertinya rekaman pertemuannya belum tersedia.
                        </video>
                        <?php else : ?>
                        <p style="position: absolute; bottom: 50%; left: 50%;" class="text-black">Waduh, sepertinya rekaman pertemuannya belum tersedia.</p>
                        <?php endif; ?>
                    </div>
                    <div class="row mx-2 mt-3">
                        <button id="downloadppt" class="btn btn-lg btn-primary" onclick="downloadPpt('<?= $rekamans[$id]['admin'] ?>', '<?= $rekamans[$id]['pertemuan']; ?>', '<?= $rekamans[$id]['materi']; ?>', '<?= $rekamans[$id]['ext_ppt']; ?>');"><i class="fa fa-download"></i>  Download PowerPoint</button>
                    </div>
                </div>

                <div id="thumbnail_rekaman"  class="col">
                    <?php if (isset($rekamans[$id])) : ?>
                    <div id="atas" class="float-left ml-2">
                        <h1 id="pertemuan" class="text-primary font-weight-bold">Pertemuan <?= $rekamans[$id]['pertemuan'] ?></h1>
                        <h2 id="materi" class="text-primary"><?= $rekamans[$id]['materi'] ?></h2>
                    </div>
                    <?php endif; ?>

                    <div id="tn1" class="bg-white mx-2">
                        <?php if (isset($rekamans[$id+1])) : ?>
                        <img id="thumbnail1" class="img-fluid" alt=""
                            src="<?= base_url() ?>/img/Rekaman Kelas/<?= $rekamans[$id]['admin'] ?>/Pertemuan <?= $rekamans[$id+1]['pertemuan'] ?> - <?= $rekamans[$id+1]['materi'] ?>.<?= $rekamans[$id+1]['ext_tn'] ?>">
                        <?php endif; ?>
                    </div>

                    <div id="tengah" class="row mt-2">
                        <div id="tn2" class="col bg-white mx-2">
                            <?php if (isset($rekamans[$id+2])) : ?>
                            <img id="thumbnail2" class="img-fluid" alt=""
                                src="<?= base_url() ?>/img/Rekaman Kelas/<?= $rekamans[$id]['admin'] ?>/Pertemuan <?= $rekamans[$id+2]['pertemuan'] ?> - <?= $rekamans[$id+2]['materi'] ?>.<?= $rekamans[$id+2]['ext_tn'] ?>">
                            <?php endif; ?>
                        </div>
                        <div id="tn3" class="col bg-white mx-2">
                            <?php if (isset($rekamans[$id+3])) : ?>
                            <img id="thumbnail3" class="img-fluid" alt=""
                                src="<?= base_url() ?>/img/Rekaman Kelas/<?= $rekamans[$id]['admin'] ?>/Pertemuan <?= $rekamans[$id+3]['pertemuan'] ?> - <?= $rekamans[$id+3]['materi'] ?>.<?= $rekamans[$id+3]['ext_tn'] ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
</div>

<script defer>
    var id = <?= $id ?>;
    var maks = <?= sizeof($rekamans) ?>;
    maks-=1;

    if (id == 0) {
        document.getElementById('kekiri').setAttribute('style', 'visibility: hidden');
    } else {
        document.getElementById('kekiri').setAttribute('style', 'visibility: visible');
    }

    if (id >= maks) {
        document.getElementById('kekanan').setAttribute('style', 'visibility: hidden');
    } else {
        document.getElementById('kekanan').setAttribute('style', 'visibility: visible');
    }

    function keKiri() {
        id-=1;
        <?php header('Content-type: application/json'); ?>
        $.ajax({
            url : "<?= base_url() ?>/Kelasku/pindahRekaman/<?=$rekamans[$id]['kelas']?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
                perubahan(data);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                console.log(jqXHR);
                alert('Error get data from ajax');
            }
        });
    }

    function keKanan() {
        id+=1;
        <?php header('Content-type: application/json'); ?>
        $.ajax({
            url : "<?= base_url() ?>/Kelasku/pindahRekaman/<?=$rekamans[$id]['kelas']?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
                perubahan(data);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                console.log(jqXHR);
                alert('Error get data from ajax');
            }
        });
    }

    function perubahan(data) {
        if (data['rekaman'] != null) {
            document.getElementById('vid').setAttribute('style', 'visibility: visible');
            document.getElementById('vidsrc').src = "<?= base_url() ?>/vid/Rekaman Kelas/<?= $rekamans[$id]['admin'] ?>/Pertemuan "+data['rekaman']['pertemuan']+" - "+data['rekaman']['materi']+".mp4";
            document.getElementById('vid').load();
            document.getElementById('pertemuan').innerHTML = "Pertemuan "+data['rekaman']['pertemuan'];
            document.getElementById('materi').innerHTML = data['rekaman']['materi'];

            document.getElementById('downloadppt').setAttribute("onclick", "downloadPpt('"+data['rekaman']['admin']+"', '<?= $rekamans[$id]['pertemuan']; ?>', '<?= $rekamans[$id]['materi']; ?>', '<?= $rekamans[$id]['ext_ppt']; ?>');");
        } else {
            document.getElementById('vid').setAttribute('style', 'visibility: hidden');
            document.getElementById('video_rekaman').innerHTML=`<div class="embed-responsive embed-responsive-16by9 bg-white ml-0">
                                                                <p style="position: absolute; bottom: 50%; left: 50%;" class="text-black">Waduh, sepertinya rekaman pertemuannya belum tersedia.</p>
                                                                </div>`;
            document.getElementById('pertemuan').innerHTML = "";
            document.getElementById('materi').innerHTML = "";
        }

        if (data['thumbnail1'] != null) {
            document.getElementById('tn1').setAttribute('style', 'visibility: visible');
            document.getElementById('thumbnail1').src = "<?= base_url() ?>/img/Rekaman Kelas/<?= $rekamans[$id]['admin'] ?>/Pertemuan "+data['thumbnail1']['pertemuan']+" - "+data['thumbnail1']['materi']+"."+data['thumbnail1']['ext_tn'];
        } else {
            document.getElementById('tn1').setAttribute('style', 'visibility: hidden');
        }

        if (data['thumbnail2'] != null) {
            document.getElementById('tn2').setAttribute('style', 'visibility: visible');
            document.getElementById('thumbnail2').src = "<?= base_url() ?>/img/Rekaman Kelas/<?= $rekamans[$id]['admin'] ?>/Pertemuan "+data['thumbnail2']['pertemuan']+" - "+data['thumbnail2']['materi']+"."+data['thumbnail2']['ext_tn'];
        } else {
            document.getElementById('tn2').setAttribute('style', 'visibility: hidden');
        }

        if (data['thumbnail3'] != null) {
            document.getElementById('tn3').setAttribute('style', 'visibility: visible');
            document.getElementById('thumbnail3').src = "<?= base_url() ?>/img/Rekaman Kelas/<?= $rekamans[$id]['admin'] ?>/Pertemuan "+data['thumbnail3']['pertemuan']+" - "+data['thumbnail3']['materi']+"."+data['thumbnail3']['ext_tn'];
        } else {
            document.getElementById('tn3').setAttribute('style', 'visibility: hidden');
        }
        
        document.getElementById('kekiri').setAttribute('style', 'visibility: visible');
        if (id == 0) {
            document.getElementById('kekiri').setAttribute('style', 'visibility: hidden');
        }

        document.getElementById('kekanan').setAttribute('style', 'visibility: visible');
        if (id >= maks) {
            document.getElementById('kekanan').setAttribute('style', 'visibility: hidden');
        }
    }

    function downloadPpt(admin, pertemuan, materi, ext_ppt) {
        var link=document.createElement('a');
        link.href=`<?= base_url(); ?>/ppt/Rekaman Kelas/${admin}/Pertemuan ${pertemuan} - ${materi}.${ext_ppt}`;
        alert(link.href);
        link.download=`Pertemuan ${pertemuan} - ${materi}.${ext_ppt}`;
        link.click();
    }
</script>
<?= $this->endSection(); ?>