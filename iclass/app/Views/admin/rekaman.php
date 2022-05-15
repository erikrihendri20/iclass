<?= $this->extend('templates/admin/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Rekaman Kelas</h1>
    <?= session()->flash; ?>
    <div class="row">
        <div class="mt-3 ml-3">
            <button id="tombolTambah" class="btn btn-primary rounded display-4" onclick="bukaModal('modalUnggah');">
                <span class="mx-5">Unggah Rekaman</span>
            </button>
        </div>
    </div>

    <div class="row mt-3">
        <div id="tabel-rekaman" class="col">
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
                            <label class="col col-form-label" for="materi">Materi</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="materi" name="materi" value="">
                                    <?php foreach($materis as $materi) : ?>
                                        <option value="<?=$materi['materi'] ?>"><?=$materi['materi'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <small id="errMateri" class="form-text text-danger" style="visibility: hidden;"></small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col col-form-label" for="parts">Part</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="parts" name="parts">
                                <small id="errParts" class="form-text text-danger" style="visibility: hidden;"></small>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col col-form-label" for="uploaded">Tanggal</label>
                            <div class="col-sm-10">
                              <input type="date" class="form-control" id="uploaded" name="uploaded">
                              <small id="errUploaded" class="form-text text-danger" style="visibility: hidden;"></small>
                            </div>
                        </div>

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
                            <label class="col col-form-label" for="rekaman">Rekaman Pertemuan</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control-file" id="rekaman" name="rekaman">
                                <small id="errRekaman" class="form-text text-danger" style="visibility: hidden;"></small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col col-form-label" for="thumbnailRekaman">Thumbnail Rekaman</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control-file" id="thumbnailRekaman" name="thumbnailRekaman" accept="image/*" >
                                <small id="errThumbnail" class="form-text text-danger" style="visibility: hidden;"></small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col col-form-label" for="ppt">PPT/PDF</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control-file" id="ppt" name="ppt">
                                <small id="errPpt" class="form-text text-danger" style="visibility: hidden;"></small>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col col-form-label" for="admin">Nama Pengajar</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="admin" name="admin" value="">
                                <?php foreach($admins as $admin) : ?>
                                    <?php if ($admin['username'] == 'superadmin') continue; ?>
                                    <option value="<?=$admin['nama'] ?>"><?=$admin['nama'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <small id="errAdmin" class="form-text text-danger" style="visibility: hidden;"></small>
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

<?= session()->flash; ?>
<?= $this->endSection(); ?>