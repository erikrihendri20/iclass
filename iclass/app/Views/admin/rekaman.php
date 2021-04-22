<?= $this->extend('templates/admin/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Rekaman Kelas</h1>

    <div class="mt-3">
        <button id="tombolTambah" class="btn btn-primary rounded display-4" onclick="bukaModal();">Unggah Rekaman</button>
    </div>

    <div class="col mt-3">
        <table class="table table-borderless">
            <tbody>
                <?php
                    $s = 0; 
                    for ($i = 0; $i <= sizeof($rekamans)/3; $i++) : 
                ?>
                <tr class="mb-2">
                    <?php 
                        for ($j = 0; $j <=2; $j++) : 
                            if ($s >= sizeof($rekamans)) break;
                    ?>
                    <td class="mx-2" style="width: 30%;">
                        <h1 class="text-primary font-weight-bold">Pertemuan <?= $rekamans[$s]['id'] ?></h1>
                        <h2 class="text-primary"><?= $rekamans[$s]['materi'] ?></h2>
                        <img id="thumbnail1" class="img-fluid" alt=""
                            src="<?= base_url() ?>/img/Rekaman Kelas/Pertemuan <?= $rekamans[$s]['id'] ?> - <?= $rekamans[$s]['materi'] ?>.<?= $rekamans[$s]['ext_tn'] ?>">
                    </td>
                    <?php $s++; endfor; ?>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
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
                    </div>

                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Upload</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>

<script>
    if (1) {
        <?php if (session()->has('pertemuan') || 
                session()->has('materi') ||
                session()->has('rekaman') ||
                session()->has('thumbnailRekaman')
        ) :?>
        $('#modalUnggah').modal('show');
        <?php endif; ?>
    }

    function bukaModal(){
        $('#modalUnggah').modal('show');
    }

    function tutupModal(){
        $('#modalUnggah').modal('hide');
    }
</script>

<?= session()->flash; ?>
<?= $this->endSection(); ?>