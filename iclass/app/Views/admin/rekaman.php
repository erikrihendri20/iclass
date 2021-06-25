<?= $this->extend('templates/admin/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Rekaman Kelas</h1>

    <div class="row">
        <div class="dropdown mt-3 ml-3">
            <button class="btn btn-primary dropdown-toggle" type="button" id="paket" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Paket</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <button class="dropdown-item" type="button" id="reguler" onclick="pilihPaket('1');">Reguler</button>
                <button class="dropdown-item" type="button" id="premium" onclick="pilihPaket('2');">Premium</button>
                <button class="dropdown-item" type="button" id="premiumplus" onclick="pilihPaket('3');">Premium+</button>
            </div>
        </div>

        <div class="dropdown mt-3 ml-3">
            <button class="btn btn-primary dropdown-toggle" type="button" id="pilihKelas" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kelas</button>
            <div id="dropdownKelas" class="dropdown-menu" aria-labelledby="pilihKelas">
                <!-- <button class="dropdown-item" type="button" id="1" onclick="pilihkelas();">Kelas 1</button> -->
            </div>
        </div>

        <div class="mt-3 ml-3">
            <button id="tombolTambah" class="btn btn-primary rounded display-4" onclick="bukaModal('modalUnggah');">Unggah Rekaman</button>
        </div>
    </div>

    <div class="col mt-3">
        <div id="tBodyRekaman" class="row">
        </div>
    </div>

    <!-- Modal Unggah Rekaman Kelas -->
    <form id="tambahRekaman" enctype="multipart/form-data">
        <div id="modalUnggah" class="modal fade" role="dialog" tabindex='1' aria-labelledby="exampleModalLabel" aria-hidden="true">
            <?php if (session()->has('pertemuan')) :
            ?>
            <script type="text/javascript">
                $(window).on('load',function(){
                    $('#modalUnggah').modal('show');
                });
            </script>
            <?php endif; ?>
            
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-between align-text-center">
                        <h3 class="text-primary ml-1">Unggah Rekaman Pertemuan</h3>
                        <p class="fa fa-close btn mr-1" style="font-size: 36px;" onclick="tutupModal('modalUnggah');"></p>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col col-form-label" for="kelas">Kelas</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="kelas" name="kelas[]" value="" multiple>
                                    <?php foreach($kelases as $kelas) : ?>
                                        <option value="<?=$kelas['nama'] ?>"><?=$kelas['nama'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <small id="errKelas" class="form-text text-danger" style="visibility: hidden;"></small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col col-form-label" for="pertemuan">Pertemuan ke-</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control text-dark" id="pertemuan" name="pertemuan" placeholder="1">
                                <small id="errPertemuan" class="form-text text-danger" style="visibility: hidden;"></small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col col-form-label" for="materi">Materi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control text-dark" id="materi" name="materi" placeholder="Aljabar">
                                <small id="errMateri" class="form-text text-danger" style="visibility: hidden;"></small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col col-form-label" for="rekaman">Rekaman Pertemuan</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control-file" id="rekaman" name="rekaman">
                                <small id="errRekaman" class="form-text text-danger" style="visibility: hidden;"></small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col col-form-label" for="thumbnailRekaman">Thumbnail Rekaman</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control-file" id="thumbnailRekaman" name="thumbnailRekaman">
                                <small id="errThumbnail" class="form-text text-danger" style="visibility: hidden;"></small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col col-form-label" for="ppt">PowerPoint</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control-file" id="ppt" name="ppt">
                                <small id="errPpt" class="form-text text-danger" style="visibility: hidden;"></small>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" name="submit" class="btn btn-primary" onclick="formSubmit();">Upload</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Modal progress bar -->
    <div id="modalProgress" class="modal fade" role="dialog" tabindex='1' aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="fa fa-close btn mr-1 pb-0 mb-0" style="font-size: 12px;" onclick="tutupModal('modalProgress');"></p>
                </div>

                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-10 bg-secondary px-0" style="border-radius: 10px;">
                            <button id="progressBar" class="btn btn-primary" style="border-radius: 10px;"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php if (session()->has('pertemuan') || 
        session()->has('materi') ||
        session()->has('rekaman') ||
        session()->has('thumbnailRekaman')
) :?>
    <script>
        $('#modalUnggah').modal('show');
    </script>
<?php endif; ?>

<script>
    function bukaModal(s){
        $('#'+s).modal('show');
    }

    function tutupModal(s){
        $('#'+s).modal('hide');
    }

    function formSubmit() {
        var form = $("#tambahRekaman");
        var url = "<?= base_url(); ?>/admin/tambahRekaman";
        var formi = new FormData();
        
        formi.append('kelas', $("#kelas").val());
        formi.append('pertemuan', $("#pertemuan").val());
        formi.append('materi', $("#materi").val());
        formi.append('rekaman', $('#rekaman')[0].files[0]);
        formi.append('thumbnailRekaman', $('#thumbnailRekaman')[0].files[0]);
        formi.append('ppt', $('#ppt')[0].files[0]);

        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();

                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = evt.loaded / evt.total;
                        percentComplete = parseInt(percentComplete * 100);

                        if (percentComplete == 100) {
                            console.log(percentComplete);
                            document.getElementById("progressBar").style.width=percentComplete+"%";
                            document.getElementById("progressBar").innerHTML=percentComplete+"%";
                            tutupModal('modalProgress');
                            $('#modalProgress').modal('hide');
                        } else {
                            console.log(percentComplete);
                            document.getElementById("progressBar").style.width=percentComplete+"%";
                            document.getElementById("progressBar").innerHTML=percentComplete+"%";
                            $('#modalProgress').modal('show');
                        }

                    }
                }, false);

                return xhr;
            },
            url: url,
            type: "POST",
            cache: false,
            contentType: false,
            processData: false,
            data: formi,
            success: function(result) {
                console.log(result);
                result = JSON.parse(result);
                
                cekRekaman(result);
            }
        });
    };

    function cekRekaman(result) {
        tutupModal('modalUnggah');
        if (result["tipe"] == "error") {
            tutupModal('modalProgress');
            $('#modalProgress').modal('hide');
            gagalUnggahRekaman(result);
        } else {
            berhasilUnggahRekaman(result);
        }
    }

    function gagalUnggahRekaman(result) {
        tutupModal('modalProgress');
        $('#modalProgress').modal('hide');

        swal(result["judul"], result["pesan"], result["tipe"]);

        bukaModal('modalUnggah');
        $('#modalUnggah').modal('show');

        if (result['kelas']) {
            document.getElementById("errKelas").style.visibility="visible";
            document.getElementById("errKelas").innerHTML=result['kelas'];
        }

        if (result['pertemuan']) {
            document.getElementById("errPertemuan").style.visibility="visible";
            document.getElementById("errPertemuan").innerHTML=result['pertemuan'];
        }

        if (result['materi']) {
            document.getElementById("errMateri").style.visibility="visible";
            document.getElementById("errMateri").innerHTML=result['materi'];
        }

        if (result['rekaman']) {
            document.getElementById("errRekaman").style.visibility="visible";
            document.getElementById("errRekaman").innerHTML=result['rekaman'];
        }

        if (result['thumbnailRekaman']) {
            document.getElementById("errThumbnail").style.visibility="visible";
            document.getElementById("errThumbnail").innerHTML=result['thumbnailRekaman'];
        }

        if (result['ppt']) {
            document.getElementById("errPpt").style.visibility="visible";
            document.getElementById("errPpt").innerHTML=result['ppt'];
        }
    }

    function berhasilUnggahRekaman(result) {
        swal(result["judul"], result["pesan"], result["tipe"]);

        document.getElementById("errKelas").style.visibility="hidden";
        document.getElementById("errPertemuan").style.visibility="hidden";
        document.getElementById("errMateri").style.visibility="hidden";
        document.getElementById("errRekaman").style.visibility="hidden";
        document.getElementById("errThumbnail").style.visibility="hidden";
        document.getElementById("errPpt").style.visibility="hidden";

        document.getElementById("kelas").value="";
        document.getElementById("pertemuan").value="";
        document.getElementById("materi").value="";
        document.getElementById("rekaman").value="";
        document.getElementById("thumbnailRekaman").value="";
        document.getElementById("ppt").value="";
    }

    function pilihKelas(s) {
        var rekaman = document.getElementById('tBodyRekaman');
        rekaman.innerHTML="";
        <?php foreach($rekamans as $rekaman) : ?>
            if ('<?= $rekaman['kelas'] ?>' == s) {
                rekaman.innerHTML+=`<div class="col-3 mx-5 mb-5">
                                        <h1 class="text-primary font-weight-bold">Pertemuan <?= $rekaman['pertemuan'] ?></h1>
                                        <h2 class="text-primary"><?= $rekaman['materi'] ?></h2>
                                        <img class="img-fluid" alt="" src="<?= base_url() ?>/img/Rekaman Kelas/<?= $rekaman['admin'] ?>/Pertemuan <?= $rekaman['pertemuan'] ?> - <?= $rekaman['materi'] ?>.<?= $rekaman['ext_tn'] ?>">
                                    </div>`;
            }
        <?php endforeach; ?>
        document.getElementById('pilihKelas').innerHTML=s;
    }

    function pilihPaket(s) {
        var kelas = document.getElementById('dropdownKelas');
        kelas.innerHTML = "";
        var nama = "";
        <?php foreach ($kelases as $kelas) : ?>
            if (<?= $kelas['kode_paket'] ?> == s) {
                nama = "<?= $kelas['nama'] ?>";
                kelas.innerHTML+=`<button class="dropdown-item" type="button" id="${nama}" onclick="pilihKelas('${nama}');">${nama}</button>`;
            }
        <?php endforeach; ?>
        var paket = document.getElementById('paket');
        if (s == '1') {
            paket.innerHTML="Reguler";
        } else if (s == '2') {
            paket.innerHTML="Premium";
        } else {
            paket.innerHTML="Premium+";
        }
        document.getElementById('pilihKelas').innerHTML="Kelas";
        document.getElementById('tBodyRekaman').innerHTML="";
    }
</script>

<?= session()->flash; ?>
<?= $this->endSection(); ?>