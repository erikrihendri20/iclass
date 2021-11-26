<table id="daftar-rekaman" class="display nowrap" style="width:100%">
    <thead>
        <tr>
            <th class="col-1">No</th>
            <th>Materi</th>
            <th>Kelas</th>
            <th>Nama Pengajar</th>
            <th>Tgl Upload</th>
            <th>Rekaman</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $i = 1;
        foreach ($rekamans as $rekaman) : ?>
            <tr class="col-1" id="tr<?php echo $rekaman['admin'].$rekaman['materi']; ?>">
                <td class="col-1"><?= $no; ?></td>
                <td><?= $rekaman['materi']; ?></td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-white dropdown-toggle" type="button" id="dropDownKelas" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kelas
                        </button>
                        <div class="dropdown-menu px-3" aria-labelledby="dropdownMenuButton">
                            <?php foreach ($kelases as $kelas) { ?>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" 
                                        id="kelas_<?= $i ?>" onchange="ubahKelasRekaman('<?=$i?>', '<?= $rekaman['id'] ?>', '<?= $kelas['nama'] ?>');"
                                        <?php echo (strpos($rekaman['kelas'], $kelas['nama']) !== false) ? "checked" : ""; ?>>
                                    <label class="form-check-label" for="kelas_<?= $i ?>"><?= $kelas['nama'] ?></label>
                                </div>
                            <?php $i++; } ?>
                        </div>
                    </div>
                </td>
                <td>
                    <?= $rekaman['admin'] ?>
                </td>
                <td><?php echo substr($rekaman['uploaded'],-2,2)."-".substr($rekaman['uploaded'],-5,2)."-".substr($rekaman['uploaded'],0,4); ?></td>
                <td>
                    <?php $result = explode(',', $rekaman['parts']);
                          asort($result);
                          foreach ($result as $r) { ?>
                            <p id="<?php echo $rekaman['admin'].$rekaman['materi'].$r ?>" class="mb-0">
                                <span class="mr-5" style="cursor: pointer;" onclick="nonton('<?= $rekaman['admin'] ?>', '<?= $rekaman['materi'] ?>', '<?= $r ?>')">Part <?= $r ?></span>
                                <button class="badge badge-danger" style="border: none;" onclick="hapusRekaman('<?= $rekaman['admin'] ?>', '<?= $rekaman['materi'] ?>', '<?= $r ?>');">hapus</button>
                            </P>
                    <?php } ?>
                    <button class="badge badge-primary" style="border: none;" onclick="tambahRekaman('<?= $rekaman['admin'] ?>', '<?= $rekaman['materi'] ?>', '<?= $rekaman['parts'] ?>');"><span class="p-2">tambah</span></button>
                </td>
            </tr>
        <?php
            $no++;
        endforeach; ?>
    </tbody>
</table>

<!-- Modal Nonton -->
<div id="modalNonton" class="modal fade" role="dialog" tabindex='1' aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-between align-text-center">
                <h3 id="modalNontonHeader" class="text-primary ml-1">Unggah Rekaman Pertemuan</h3>
                <p class="fa fa-close btn mr-1" style="font-size: 36px;" onclick="tutupModal('modalNonton');"></p>
            </div>

            <div class="modal-body">
                <div class="row embed-responsive embed-responsive-16by9 bg-light ml-0 mt-2">
                    <video id="vid" class="embed-responsive-item" controls controlsList="nodownload">
                        <source id="vidsrc" src="" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Rekaman -->
<form id="tambahRekaman2" enctype="multipart/form-data">
    <div id="modalUnggah2" class="modal fade" role="dialog" tabindex='1' aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-between align-text-center">
                    <h3 class="text-primary ml-1">Unggah Rekaman Pertemuan</h3>
                    <p class="fa fa-close btn mr-1" style="font-size: 36px;" onclick="tutupModal('modalUnggah2');"></p>
                </div>

                <div class="modal-body">
                    <input type="hidden" id="admin2" name="admin" value="">
                    <input type="hidden" id="materi2" name="materi" value="">
                    <input type="hidden" id="parts2" name="parts" value="">

                    <div class="form-group">
                        <label class="col col-form-label" for="materi">Part</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control text-dark" id="part2" name="part" value="">
                            <small id="errMateri" class="form-text text-danger" style="visibility: hidden;"></small>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col col-form-label" for="rekaman">Rekaman Pertemuan</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control-file" id="rekaman2" name="rekaman">
                            <small id="errRekaman2" class="form-text text-danger" style="visibility: hidden;"></small>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" name="submit" class="btn btn-primary" onclick="formSubmit2();">Upload</button>
                </div>
            </div>
        </div>
    </div>
</form>