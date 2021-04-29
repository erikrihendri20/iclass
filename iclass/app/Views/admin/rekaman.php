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
            <button id="tombolTambah" class="btn btn-primary rounded display-4" onclick="bukaModal();">Unggah Rekaman</button>
        </div>
    </div>

    <div class="col mt-3">
        <div id="tBodyRekaman" class="row">
        </div>
    </div>

    <!-- Modal Unggah Rekaman Kelas -->
    <form action="<?= base_url(); ?>/admin/tambahRekaman" method="POST" enctype="multipart/form-data">
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
                        <p class="fa fa-close btn mr-1" style="font-size: 36px;" onclick="tutupModal();"></p>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col col-form-label" for="kelas">Kelas</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="kelas" name="kelas">
                                    <?php foreach($kelases as $kelas) : ?>
                                        <option value="<?=$kelas['nama'] ?>"><?=$kelas['nama'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php if (session()->has('kelas')) :?><small class="form-text text-danger"><?= session()->kelas ?></small><?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col col-form-label" for="pertemuan">Pertemuan ke-</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control text-black" id="pertemuan" name="pertemuan" placeholder="1">
                                <?php if (session()->has('pertemuan')) :?><small class="form-text text-danger"><?= session()->pertemuan ?></small><?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col col-form-label" for="materi">Materi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control text-black" id="materi" name="materi" placeholder="Aljabar">
                                <?php if (session()->has('materi')) :?><small class="form-text text-danger"><?= session()->materi ?></small><?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col col-form-label" for="rekaman">Rekaman Pertemuan</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control-file" id="rekaman" name="rekaman">
                                <?php if (session()->has('rekaman')) :?><small class="form-text text-danger"><?= session()->rekaman ?></small><?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col col-form-label" for="thumbnailRekaman">Thumbnail Rekaman</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control-file" id="thumbnailRekaman" name="thumbnailRekaman">
                                <?php if (session()->has('thumbnailRekaman')) :?><small class="form-text text-danger"><?= session()->thumbnailRekaman ?></small><?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col col-form-label" for="ppt">PowerPoint</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control-file" id="ppt" name="ppt">
                                <?php if (session()->has('ppt')) :?><small class="form-text text-danger"><?= session()->ppt ?></small><?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Upload</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

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
    function bukaModal(){
        $('#modalUnggah').modal('show');
    }

    function tutupModal(){
        $('#modalUnggah').modal('hide');
    }

    function pilihKelas(s) {
        var rekaman = document.getElementById('tBodyRekaman');
        rekaman.innerHTML="";
        <?php foreach($rekamans as $rekaman) : ?>
            if ('<?= $rekaman['kelas'] ?>' == s) {
                rekaman.innerHTML+=`<div class="col mx-2" style="width: 30%;">
                                        <h1 class="text-primary font-weight-bold">Pertemuan <?= $rekaman['pertemuan'] ?></h1>
                                        <h2 class="text-primary"><?= $rekaman['materi'] ?></h2>
                                        <img id="thumbnail1" class="img-fluid" alt=""
                                            src="<?= base_url() ?>/img/Rekaman Kelas/<?= $rekaman['kelas'] ?>/Pertemuan <?= $rekaman['id'] ?> - <?= $rekaman['materi'] ?>.<?= $rekaman['ext_tn'] ?>">
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