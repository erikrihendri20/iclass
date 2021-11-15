<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mnya-5 mb-0">
    <div class="row mx-0 mt5">
        <div class="col-9 pl-0"<?php echo (session('kode-paket') == '1' || session('kode-paket') == '6') ? ' style="padding-bottom: 35px;"' : ''; ?>>
            <div class="row bg-primary border-20 <?php echo (session('kode-paket') == '1' || session('kode-paket') == '6') ? 'h-100 ' : ''; ?>mx-0 px5 py5">
                <div class="col-8 px-0">
                    <div class="row align-content-around h-100 mx-0 px5 py5">
                        <h2 class="text-white font-weight-bold w-100">Hai <?= explode(' ',trim(session()->nama))[0] ?>...</h2>
                        <h5 class="text-white w-75"><i>"<?= $quote ?>"</i></h5>
                    </div>
                </div>
                <div class="w-25">
                    <img src="<?= base_url() ?>/img/Aset/Asset 45@300x.png" alt="" class="w-100" style="object-fit: contain;">
                    <div class="d-flex justify-content-center w-100 mt-2">
                        <a href="<?= base_url() ?>/peserta/edit" class="btn btn-sm btn-warning rounded-pill font-weight-bold mx-auto px-3">Edit Profil</a>
                    </div>
                </div>
            </div>
            <div class="row mx-0 mt5 px5 py-3" style="background-color: #12336D; border-radius: 15px 15px 0 0;<?php echo (session('kode-paket') == '1' || session('kode-paket') == '6') ? ' visibility: hidden;' : ''; ?>">
                <div class="col-3 pl-0">
                    <h4 class="text-white font-weight-bold mb-0">Total Kelas</h4>
                </div>
                <div class="col-7">
                    <div class="row justify-content-center align-items-center h-100 mx-0">
                        <div class="col-12 px-0" style="background-color: lightgrey; border-radius: 15px;">
                            <div class="mx-0" style="width: <?php if ($pertemuan != 0) echo ($pertemuan-$sisa)/$pertemuan*100; ?>%; background-color: #00cc00; padding-top: 15px; border-radius: 15px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-2 pr-0">
                    <div class="row justify-content-center align-items-center bg-white mx-0" style="border-radius: 10px;">
                        <h5 class="font-weight-bold mb-0 py-1" style="color: #12336D;"><?php echo $sisa."/".$pertemuan; ?></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 mb5 pr-0">
            <div class="row border-20 shadow h-100 mx-0 p-3">
                <h4 class="text-center font-weight-bold w-100" style="height: 10%; color: #12336D;">Pemahamanmu</h4>
                <div id="pemahamanmu" class="col-12 px-0" style="height: 90%;"></div>
                <a href="<?= base_url() ?>/peserta/nilai" class="btn btn-primary h4 text-white text-center position-absolute mb-0 p-4" style="top: 75px; right: 0; border-radius: 10px 0 0 10px;">
                    <span class="fas fa-arrow-right"></span>
                </a>
                <?php if (!empty($nilai)) { ?>
                    <!--<img id="img-shield" src="<?= base_url() ?>/img/Aset/1111.png" alt="" class="position-absolute" style="width: 40%; top: 32.5%; left: 30.5%;">-->
                <?php } ?>
            </div>
        </div>
    </div>

    <div id="total-kelas" class="row mx-0 px5 py5" style="position: relative; background-image: linear-gradient(113deg, #0095ec, #005ccb); border-radius: 0 20px 20px 20px;">
        <div class="col-3 bg-white border-20 pl-0 py-4">
            <div class="row justify-content center align-items-center h-100 mx-0 px-3">
                <img src="<?= base_url() ?>/img/Aset/Asset 141@300x.png" alt="" class="w-100" style="object-fit: contain;">
            </div>
        </div>
        <div class="col-9 pr-0">
            <div class="row mx-0 h-100">
                <div class="col-6 pr-0">
                    <div class="row mx-0 h-100">
                        <div class="w-100">
                            <h5 class="text-white font-weight-bold w-100">Bolos kelas</h5>
                        </div>
                        <div class="col-12 bg-danger py-2" style="height: 90%; border-radius: 15px;">
                            <div class="w-100 h-100" style=" max-height: 270px; overflow-y: auto;">
                            <?php if (!empty($kelasBolos)) {
                                foreach ($kelasBolos as $kelas) { ?>
                                    <div class="row justify-content-around align-items-center mx-0 mt-2">
                                        <h5 class="bg-white rounded text-danger text-center font-weight-bold mb-0 py-1 fs-16" style="width: 38%;"><?php echo date('d F Y', strtotime($kelas['start_event'])) ?></h5>
                                        <h5 class="bg-white rounded text-danger mb-0 px-2 py-1 fs-16" style="width: 58%;"><span class="font-weight-bold">Pertemuan <?= $kelas['pertemuan'] ?></span><br/><?= $kelas['title'] ?>   </h5>
                                    </div>
                            <?php }
                            } else { ?>
                                <div class="row justify-content-center align-content-center h-100 mx-0">
                                    <h5 class="text-white font-weight-bold mb-0">Kamu belum pernah bolos kelas</h5>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 pr-0">
                    <div class="row mx-0 h-100">
                        <div class="w-100">
                            <h5 class="text-white font-weight-bold w-100">Kelas yang belum ditempuh</h5>
                        </div>
                        <div class="col-12 py-2" style="background-color: #12336D; height: 90%; border-radius: 15px;">
                            <div class="w-100 h-100" style=" max-height: 270px; overflow-y: auto;">
                                <?php if (!empty($kelasDatang)) {
                                    foreach ($kelasDatang as $kelas) { ?>
                                        <div class="row justify-content-around align-items-center mx-0 mt-2">
                                            <h5 class="bg-white rounded text-center font-weight-bold mb-0 py-1 fs-16" style="color: #12336D; width: 38%;"><?php echo date('d F Y', strtotime($kelas['start_event'])) ?></h5>
                                            <h5 class="bg-white rounded mb-0 px-2 py-1 fs-16" style="color: #12336D; width: 58%;"><span class="font-weight-bold">Pertemuan <?= $kelas['pertemuan'] ?></span><br/><?= $kelas['title'] ?></h5>
                                        </div>
                                <?php }
                                } else { ?>
                                    <div class="row justify-content-center align-content-center h-100 mx-0">
                                        <h5 class="text-white font-weight-bold mb-0">Belum ada jadwal kelas selanjutnya</h5>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if (session('kode-paket') == '1' || session('kode-paket') == '6') { ?>
            <div class="row w-100 h-100 mx-0" style="background-color: rgb(0, 0, 0, 0.85); position: absolute; top: 0; left: 0; border-radius: 0 20px 20px 20px;">
                <div class="col-3">
                    <div class="row justify-content-center align-content-center h-100 mx-0">
                        <img src="<?= base_url() ?>/img/Aset/Asset 111@300x.png" alt="" class="w-50">
                    </div>
                </div>
                <div class="col-9">
                    <div class="row align-content-center h-100 mx-0">
                        <h4 class="text-white font-weight-bold mb-0">Fitur ini tidak tersedia untuk pilihan paketmu</h4>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <div class="row justify-content-center mt5 mx-0">
        <h2 class="bg-primary text-white text-center font-weight-bold mb-0 px5 py-2" style="border-radius: 20px 20px 0 0;">Jadwal Kegiatan</h2>
    </div>
    <div class="row border-20 shadow mx-0 px5 py5">
        <div class="col-8 pl-0">
            <div class="row mx-0">
                <h4 class="bg-primary text-white text-center font-weight-bold mb-0 px-4 py-1" style="border-radius: 15px 15px 0 0;">Zoom Meeting</h4>
            </div>
            <div class="row shadow mx-0 p-3" style="position: relative; min-height: 40%; border-radius: 0 15px 15px 15px; overflow: hidden;">
                <div id="zoom-meeting" class="carousel slide w-100" data-ride="carousel" data-interval="false" data-pause="hover">
                    <ol class="carousel-indicators mb-0"<?php echo (session('kode-paket')=='1' || session('kode-paket')=='6') ? 'style="display: none;"' : ''; ?>>
                        <?php for ($i=0; $i<(sizeof($zoomMeeting)/2); $i++) { ?>
                            <li data-target="#zoom-meeting" data-slide-to="<?= $i ?>"<?php echo ($i==0) ? ' class="active"' : ''; ?>></li>
                        <?php } ?>
                    </ol>
                    <div class="carousel-inner h-100">
                        <?php if (!empty($zoomMeeting)) {
                            for ($i=0; $i<sizeof($zoomMeeting); $i++) { ?>
                                <div class="carousel-item<?php echo ($i==0) ? ' active' : ''; ?>">
                                    <div class="row mx-0 h-100">
                                        <div class="col-6">
                                            <div class="row mx-0 h-100">
                                                <div class="col-4 bg-primary px-0" style="border-radius: 15px; display: block;">
                                                    <img src="<?= base_url() ?>/img/pertemuan/<?= $zoomMeeting[$i]['event'] ?>.jpg" alt="" style="width: 100%; height: 100%; border-radius: 15px;" onerror="this.style='display: none;';">
                                                </div>
                                                <div class="col-8">
                                                    <div class="row align-items-center h-100 mx-0">
                                                        <h6 class="text-white text-center font-weight-bold rounded w-75 py-1" style="background-color: #12336D;"><?php echo date('d F Y', strtotime($zoomMeeting[$i]['start_event'])) ?></h6>
                                                        <h5 class="font-weight-bold w-100" style="color: #12336D;">Pertemuan <?= $zoomMeeting[$i]['pertemuan'] ?></h5>
                                                        <h6 class="w-100 text-truncate" style="color: #12336D;"><?= $zoomMeeting[$i]['title'] ?></h6>
                                                        <h6 class="text-white text-center font-weight-bold rounded mb-0 px-2 py-1" style="font-size: 12px; background-color: #12336D;">Kelas <?= $kelasku ?></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if (!empty($zoomMeeting[$i+1])) { $i++?>
                                            <div class="col-6">
                                                <div class="row mx-0">
                                                    <div class="col-4 bg-primary px-0" style="border-radius: 15px;">
                                                        <img src="<?= base_url() ?>/img/pertemuan/<?= $zoomMeeting[$i]['event'] ?>.jpg" alt="" style="omax-width: 100%; max-height: 100%; border-radius: 15px;" onerror="this.style='display: none;';">
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="row align-items-center h-100 mx-0">
                                                            <h6 class="text-white text-center font-weight-bold rounded w-75 py-1" style="background-color: #12336D;"><?php echo date('d F Y', strtotime($zoomMeeting[$i]['start_event'])) ?></h6>
                                                            <h5 class="font-weight-bold w-100" style="color: #12336D;">Pertemuan <?= $zoomMeeting[$i]['pertemuan'] ?></h5>
                                                            <h6 class="w-100 text-truncate" style="color: #12336D;"><?= $zoomMeeting[$i]['title'] ?></h6>
                                                            <h6 class="text-white text-center font-weight-bold rounded mb-0 px-2 py-1" style="font-size: 12px; background-color: #12336D;">Kelas <?= $kelasku ?></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                        <?php } } else { ?>
                            <div class="carousel-item h-100 active">
                                <div class="row justify-content-center align-content-center h-100 mx-0">
                                    <h5 class="font-weight-bold mb-0" style="color: #12336D;">Belum ada jadwal kelas</h5>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <?php if (session('kode-paket') == '1' || session('kode-paket') == '6') { ?>
                    <div class="row justify-content-center align-content-center w-100 h-100 mx-0 p-3" style="position: absolute; top: 0; left: 0; background-color: rgb(0, 0, 0, 0.85);">
                        <div class="col-4 h-100">
                            <div class="row justify-content-center align-content-center h-100 mx-0">
                                <img src="<?= base_url() ?>/img/Aset/Asset 111@300x.png" alt="" class="w-50" style="height: 96%;">
                            </div>
                        </div>
                        <div class="col-8 h-100">
                            <div class="row align-content-center h-100 mx-0">
                                <h5 class="text-white font-weight-bold mb-0">Fitur ini tidak tersedia untuk pilihan paketmu</h5>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="row mx-0 mt5">
                <h4 class="bg-primary text-white text-center font-weight-bold mb-0 px-4 py-1" style="border-radius: 15px 15px 0 0;">Try Out</h4>
            </div>
            <div class="row bg-warning shadow mx-0 p-3" style="min-height: 40%; border-radius: 0 15px 15px 15px;">
                <div id="tryout" class="carousel slide w-100" data-ride="carousel" data-interval="false" data-pause="hover">
                    <ol class="carousel-indicators mb-0">
                        <?php for ($i=0; $i<(sizeof($jadwalTryout)/2); $i++) { ?>
                            <li data-target="#tryout" data-slide-to="<?= $i ?>"<?php echo ($i==0) ? ' class="active"' : ''; ?>></li>
                        <?php } ?>
                    </ol>
                    <div class="carousel-inner h-100">
                        <?php if (!empty($jadwalTryout)) {
                            for ($i=0; $i<sizeof($jadwalTryout); $i++) { ?>
                                <div class="carousel-item<?php echo ($i==0) ? ' active' : ''; ?>">
                                    <div class="row mx-0 h-100">
                                        <div class="col-6">
                                            <div class="row mx-0 h-100">
                                                <div class="col-4 bg-primary px-0" style="border-radius: 15px;">
                                                    <img src="<?= base_url() ?>/img/tryout/Thumbnail/<?= $jadwalTryout[$i]['id'] ?>.jpg" alt="" style="width: 100%; height: 100%; border-radius: 15px;" onerror="this.style='display: none;';">
                                                </div>
                                                <div class="col-8">
                                                    <div class="row align-items-center h-100 mx-0">
                                                        <h6 class="text-white text-center font-weight-bold rounded w-75 py-1" style="background-color: #12336D;"><?php echo date('d F Y', strtotime($jadwalTryout[$i]['start_event'])) ?></h6>
                                                        <h5 class="font-weight-bold w-100" style="color: #12336D;">Pertemuan <?= $i+1 ?></h5>
                                                        <h6 class="w-100" style="color: #12336D;"><?= $jadwalTryout[$i]['title'] ?></h6>
                                                        <a href="<?= base_url() ?>/peserta/tryout/<?= $jadwalTryout[$i]['id'] ?>" class="btn btn-sm text-white font-weight-bold rounded mb-0 px-2 py-1" 
                                                            style="font-size: 12px; background-color: #12336D;<?php if (date('Y-m-d')<date('Y-m-d', strtotime($jadwalTryout[$i]['start_event']))) echo "display: none;" ?>">
                                                            <?php 
                                                                if ((date('Y-m-d G:i:s', strtotime($jadwalTryout[$i]['start_event']))<=date('Y-m-d G:i:s')) && (date('Y-m-d G:i:s', strtotime($jadwalTryout[$i]['end_event']))>date('Y-m-d G:i:s'))) {
                                                                    echo "Ikuti Try Out";
                                                                } else {
                                                                    echo "Lihat Kembali";
                                                                }
                                                            ?>
                                                        </a>
                                                        <?php if ((date('Y-m-d G:i:s', strtotime($jadwalTryout[$i]['start_event']))<=date('Y-m-d G:i:s')) && (date('Y-m-d G:i:s', strtotime($jadwalTryout[$i]['end_event']))<=date('Y-m-d G:i:s'))) { ?>
                                                            <a href="<?= base_url() ?>/peserta/tryout_hasil/<?= $jadwalTryout[$i]['id'] ?>" class="btn btn-sm text-white font-weight-bold rounded mb-0 px-2 py-1">Nilai Try Out</a>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if (!empty($jadwalTryout[$i+1])) { $i++?>
                                            <div class="col-6">
                                                <div class="row mx-0">
                                                    <div class="col-4 bg-primary px-0" style="border-radius: 15px;">
                                                        <img src="<?= base_url() ?>/img/tryout/Thumbnail/<?= $jadwalTryout[$i]['id'] ?>.jpg" alt="" style="width: 100%; height: 100%; border-radius: 15px;" onerror="this.style='display: none;';">
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="row align-items-center h-100 mx-0">
                                                            <h6 class="text-white text-center font-weight-bold rounded w-75 py-1" style="background-color: #12336D;"><?php echo date('d F Y', strtotime($jadwalTryout[$i]['start_event'])) ?></h6>
                                                            <h5 class="font-weight-bold w-100" style="color: #12336D;">Pertemuan <?= $i+1 ?></h5>
                                                            <h6 class="w-100" style="color: #12336D;"><?= $jadwalTryout[$i]['title'] ?></h6>
                                                            <a href="<?= base_url() ?>/peserta/tryout/<?= $jadwalTryout[$i]['id'] ?>" class="btn btn-sm text-white font-weight-bold rounded mb-0 px-2 py-1" 
                                                                style="font-size: 12px; background-color: #12336D;<?php if (date('Y-m-d')<date('Y-m-d', strtotime($jadwalTryout[$i]['start_event']))) echo "display: none;" ?>">
                                                                <?php 
                                                                    if ((date('Y-m-d G:i:s', strtotime($jadwalTryout[$i]['start_event']))<=date('Y-m-d G:i:s')) && (date('Y-m-d G:i:s', strtotime($jadwalTryout[$i]['end_event']))>date('Y-m-d G:i:s'))) {
                                                                        echo "Ikuti Try Out";
                                                                    } else {
                                                                        echo "Lihat Kembali";
                                                                    }
                                                                ?>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                        <?php }
                        } else { ?>
                            <div class="carousel-item h-100 active">
                                <div class="row justify-content-center align-content-center h-100 mx-0">
                                    <h5 class="font-weight-bold mb-0" style="color: #12336D;">Belum ada jadwal try out selanjutnya</h5>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 mh-100 pr-0" style="padding-bottom: 35px;">
            <div class="row mx-0">
                <h4 class="text-white text-center font-weight-bold mb-0 px-4 py-1" style="background-color: #12336D; border-radius: 15px 15px 0 0;">Kuis Harian</h4>
            </div>
            <div class="row shadow h-100 mh-100 mx-0 p-3" style="min-height: 425px; max-height: 450px; position: relative; background-image: linear-gradient(180deg, #0091e6, #005ccb); border-radius: 0 15px 15px 15px;">
                <div class="col-12 px-0" style="max-height: 425px; overflow-y: auto;">
                    <?php if (!empty($kuisHarian)) {
                        for ($i=0; $i<sizeof($kuisHarian); $i++) { ?>
                            <div class="row mx-0 mt-2">
                                <div class="col-4 bg-white px-0" style="border-radius: 15px;">
                                    <img src="<?= base_url() ?>/img/kuis/Thumbnail/<?= $kuisHarian[$i]['id'] ?>.jpg" alt="" style="width: 100%; height: 100%; border-radius: 15px;" onerror="this.style='display: none;';">
                                </div>
                                <div class="col-8">
                                    <h6 class="bg-warning text-center font-weight-bold rounded w-75 py-1" style="color: #12336D;"><?php echo date('d F Y', strtotime($kuisHarian[$i]['start_event'])) ?></h6>
                                    <h5 class="text-white font-weight-bold">Pertemuan <?= $i+1 ?></h5>
                                    <h6 class="text-white"><?= $kuisHarian[$i]['title'] ?></h6>
                                    <a href="<?= base_url() ?>/kelasku/kuis/<?= $kuisHarian[$i]['id'] ?>/<?= $i+1 ?>" class="btn btn-light text-white font-weight-bold border-0 rounded py-1" 
                                        style="font-size: 12px; background-color: #12336D;<?php if (substr($kuisHarian[$i]['start_event'],0,10)>date('Y-m-d')) echo " visibility: hidden;"; ?>">
                                        <?php echo (date('y-m-d', strtotime($kuisHarian[$i]['start_event']))==date('y-m-d')) ? 'Ikuti Kuis' : 'Lihat Soal & Pembahasan'; ?>
                                    </a>
                                </div>
                            </div>
                    <?php } } else { ?>
                        <div class="row justify-content-center align-content-center h-100 mx-0 px5">
                            <h5 class="text-white text-center mb-0">Belum ada jadwal kuis harian selanjutnya</h5>
                        </div>
                    <?php } ?> 
                </div>
                <?php if (session('kode-paket')=='6') { ?>
                    <div class="row justify-content-center align-content-center h-100 mx-0" style="position: absolute; top: 0; left: 0; background-color: rgb(0, 0, 0, 0.85); border-radius: 0 20px 20px 20px;">
                        <div class="col-4">
                            <div class="row justify-content-center align-content-center h-100 mx-0">
                                <img src="<?= base_url() ?>/img/Aset/Asset 111@300x.png" alt="" class="w-50">
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="row align-content-center h-100 mx-0">
                                <h5 class="text-white font-weight-bold mb-0">Fitur ini tidak tersedia untuk pilihan paketmu</h5>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="row mt5 mx-0">
        <div class="col-3" style="padding-left: 0;">
            <div class="row justify-content-center border-20 shadow mx-0 px5 py5">
                <img src="<?= base_url() ?>/img/1.jpg" alt="" style="width: 60%; object-fit: contain;">
                <h5 class="h6 text-center w-100 mx-auto mt5" style="color: #12336D;">Ebook ini dilengkapi dengan kumpulan materi dan soal USM POLSTAT STIS beserta pembahasannya</h5>
                <a <?php if (session('kode-paket')!='1' && session('kode-paket')!='6') { ?>href="<?= base_url() ?>/kelasku/view_pdf/ebook.pdf"
                    <?php } else { ?>onclick="hanyaTryout();"<?php } ?>
                    class="btn h5 text-white mt-2 mb-0 px-3 py-1" style="background-color: #12336D; border-radius: 10px;">Lihat Selengkapnya</a>
            </div>
        </div>
        <div class="<?php echo session('kode-paket')!='1' ? 'col-9' : 'col-12'; ?>" id="latsol" style="padding-right: 0;">
            <div class="row border-20 shadow h-100 mx-0 px5 py5" style="background-image: linear-gradient(113deg, #0095ec, #005ccb);">
                <h2 class="text-white text-center font-weight-bold w-100">Kumpulan Latihan Soal</h2>
                <div class="form-group w-100">
                    <select class="form-control form-control-sm w-25 mx-auto" id="latihan-bawah">
                        <option value="<?= $materis[0]['materi'] ?>" selected><?= $materis[0]['materi'] ?></option>
                        <?php for ($i=1; $i<sizeof($materis); $i++) : ?>
                            <option value="<?= $materis[$i]['materi'] ?>"><?= $materis[$i]['materi'] ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
                <div id="kotak-paket" class="col-4 px-0">
                    <div class="row mx-0">
                        <div class="col-6 pl-0 pr-1">
                            <a id="paket1" class="btn btn-light w-100 mx-0 py5" style="border-radius: 10px;">
                                <h5 class="font-weight-bold mb-0" style="color: #12336D;">Paket 1</h5>
                            </a>
                        </div>
                        <div class="col-6 pr-0 pl-1">
                            <a id="paket2" class="btn btn-light w-100 mx-0 py5" style="border-radius: 10px;">
                                <h5 class="font-weight-bold mb-0" style="color: #12336D;">Paket 2</h5>
                            </a>
                        </div>
                    </div>
                    <div class="row mx-0 mt-2">
                        <div class="col-6 pl-0 pr-1">
                            <a id="paket3" class="btn btn-light w-100 mx-0 py5" style="border-radius: 10px;">
                                <h5 class="font-weight-bold mb-0" style="color: #12336D;">Paket 3</h5>
                            </a>
                        </div>
                        <div class="col-6 pr-0 pl-1">
                            <a id="paket4" class="btn btn-light w-100 mx-0 py5" style="border-radius: 10px;">
                                <h5 class="font-weight-bold mb-0" style="color: #12336D;">Paket 4</h5>
                            </a>
                        </div>
                    </div>
                    <a id="aMindMap" class="btn btn-warning w-100 mx-0 mt-2 py-1" style="border-radius: 10px;"
                        target="popup" onclick="openWindow();">
                        <h5 class="font-weight-bold mb-0" style="color: #12336D;">Mind Mapping</h5>
                    </a>
                </div>
                <div class="col-8">
                    <div class="row justify-content-center mx-0">
                        <img src="<?= base_url() ?>/img/Aset/Asset 134@300x.png" alt="" class="w-75 px-3">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        <?php if (session('kode-paket')!='1' && session('kode-paket')!='6') { ?>
            document.getElementById('paket1').href="<?= base_url() ?>/kelasku/view_pdf/<?= $materis[0]['materi'] ?>-1.pdf";
            document.getElementById('paket2').href="<?= base_url() ?>/kelasku/view_pdf/<?= $materis[0]['materi'] ?>-2.pdf";
            document.getElementById('paket3').href="<?= base_url() ?>/kelasku/view_pdf/<?= $materis[0]['materi'] ?>-3.pdf";
            document.getElementById('paket4').href="<?= base_url() ?>/kelasku/view_pdf/<?= $materis[0]['materi'] ?>-4.pdf";
        <?php } else { ?>
            document.getElementById('paket1').setAttribute('onclick', "hanyaTryout();");
            document.getElementById('paket2').setAttribute('onclick', "hanyaTryout();");
            document.getElementById('paket3').setAttribute('onclick', "hanyaTryout();");
            document.getElementById('paket4').setAttribute('onclick', "hanyaTryout();");
            document.getElementById('aMindMap').setAttribute('onclick', "hanyaTryout();");
        <?php } ?>
    
        document.getElementById('latihan-bawah').addEventListener('change', function() {
            const materi = document.getElementById('latihan-bawah').value;
            document.getElementById('kotak-paket').style.visibility="visible";

            <?php if (session('kode-paket')!='1' && session('kode-paket')!='6') { ?>
                document.getElementById('paket1').href="<?= base_url() ?>/kelasku/view_pdf/"+materi+"-1.pdf";
                document.getElementById('paket2').href="<?= base_url() ?>/kelasku/view_pdf/"+materi+"-2.pdf";
                document.getElementById('paket3').href="<?= base_url() ?>/kelasku/view_pdf/"+materi+"-3.pdf";
                document.getElementById('paket4').href="<?= base_url() ?>/kelasku/view_pdf/"+materi+"-4.pdf";
            <?php } else { ?>
                document.getElementById('paket1').setAttribute('onclick', "hanyaTryout();");
                document.getElementById('paket2').setAttribute('onclick', "hanyaTryout();");
                document.getElementById('paket3').setAttribute('onclick', "hanyaTryout();");
                document.getElementById('paket4').setAttribute('onclick', "hanyaTryout();");
                document.getElementById('aMindMap').setAttribute('onclick', "hanyaTryout();");
            <?php } ?>
        });

        function showModal(materi, ext) {
            $('#modalMindMap').modal('show');
        }

        function tutupModal() {
            $('#modalMindMap').modal('hide');
        }

        function bangunChart() {
            const nilai = <?php echo !empty($nilai) ? json_encode($nilai).';' : '[];'; ?>
            var data = [];
            nilai.forEach(n => {
                var d = {x: n.materi, value: n.nilai};
                data.push(d);
            });

            var chart = anychart.pie();
            chart.data(data);
            chart.innerRadius('40%');
            chart.container('pemahamanmu');
            chart.labels().position("inside");
            chart.insideLabelsOffset("-75%");
            chart.draw();

            warnaChart();
        }

        bangunChart();

        document.getElementById('pemahamanmu').addEventListener('mouseover', function() {
            warnaChart();
        });

        document.getElementById('pemahamanmu').addEventListener('mouseleave', function() {
            warnaChart();
        });

        function warnaChart() {
            document.getElementsByClassName('anychart-credits')[0].setAttribute('style', 'display: none;');
        }

        function setChart(id, color) {
            var chart = document.getElementById(id);
            chart.setAttribute('fill', color);
            chart.setAttribute('class', 'shadow');
            chart.setAttribute('style', 'border: 5px solid white; cursor: pointer;');
        }
        
        function hanyaTryout() {
            Swal.fire({icon: 'error', title: '', text: 'Fitur ini tidak tersedia untuk pilihan paketmu'});
        }
        
        function openWindow() {
            aHref = document.getElementById('latihan-bawah').value;
            window.open('<?= base_url() ?>/img/Mind Map/'+aHref+'.pdf','popup','width=600,height=600');
            return false;
        }
    </script>

    <?= session()->getFlashdata('flash'); ?>
</div>
<?= $this->endSection(); ?>