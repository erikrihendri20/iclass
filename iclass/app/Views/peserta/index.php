<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0">
    <div class="mnya-5">

        <div class="position-relative mx-0 px5 py5" style="height: 650px;">
            <img src="<?= base_url() ?>/img/Background/Asset 54@300x.png" alt="" class="position-absolute w-100 h-100" style="top: 0; left: 0;">
            <div class="row justify-content-center align-content-center position-relative mx-0" style="height: 40%;">
                <div class="col-12 px-0">
                    <h2 class="text-white text-center font-weight-bold w-50 mx-auto mb-0">Mau cari materi atau latihan soal apa hari ini?</h2>
                </div>
                <div class="col-12 px-0 mt5">
                    <div class="row w-50 mx-auto">
                        <div class="col-11 pl-0">
                            <input type="text" class="bg-white border rounded w-100 h-100 px-3 py-2" id="cari" aria-describedby="cariHelp" placeholder="...">
                        </div>
                        <div class="col-1 px-0">
                            <div class="d-flex justify-content-center align-selft-center w-100 h-100">
                                <button id="tombolcari" class="btn btn-light rounded w-100 h-100 px-0"><h2 class="fas fa-search w-100 mx-auto mb-0"></h2></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row position-relative mx-0" style="height: 60%;">
                <div class="col-12 h-100 px-0">
                    <div class="row justify-content-center align-content-center h-100 mx-0">
                        <div class="col-6 h-100 pl-0">
                            <div id="video-materi" class="row align-content-start w-100 h-50 mx-0" style="max-height: 50%; overflow-y: auto;"></div>
                            <div id="rekaman-kelas" class="row align-content-start w-100 h-50 mx-0 mt-2" style="max-height: 50%; overflow-y: auto;<?php echo (session('kode-paket') == '1') ? ' visibility: hidden;' : ''; ?>"></div>
                        </div>
                        <div class="col-4 h-100 pr-0" style="overflow-y: auto;">
                            <div id="latihan-soal" class="row align-content-start w-100 h-100 mx-0" style="overflow-y: auto;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mx-0 mt5">
            <div class="col-9 pl-0">
                <div class="row bg-primary border-20 mx-0 px5 py5">
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
                <div class="row justify-content-center mx-0 mt5 px5">
                    <div class="w-30-50 mx-2 px-0">
                        <?php if (session('kode-paket') == '1') { ?>
                            <div class="row mx-0 p-2" style="background-color: #262626; border-radius: 15px;">
                                <div class="col-4 p-2">
                                    <div class="row justify-content-center align-content-center h-100 mx-0">
                                        <img src="<?= base_url() ?>/img/Aset/Asset 111@300x.png" alt="" class="w-75">
                                    </div>
                                </div>
                                <div class="col-8 px-0">
                                    <div class="row align-content-center h-100 mx-0">
                                        <h6 class="text-white text-center w-100 mb-0 px-1 py-2">Fitur ini tidak tersedia untuk pilihan paketmu</h6>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="row bg-primary mx-0 p-2" style="border-radius: 15px;">
                                <div class="col-4 p-2">
                                    <img src="<?= base_url() ?>/img/Aset/Asset 81@300x.png" alt="" class="w-100">
                                </div>
                                <div class="col-8 pr-0">
                                    <div class="row mx-0">
                                        <h5 id="bolos" class="h4 text-white text-center w-25 mb-0 p-2" style="background-color: #12336D; border-radius: 5px 0 0 5px;"><?= $bolos ?></h5>
                                        <h6 class="bg-white text-center font-weight-bold w-75 mb-0 px-1 py-2" style="color: #12336D; font-size: 14px; border-radius: 0 5px 5px 0;">Kali kamu bolos kelas</h6>
                                        <a href="<?= base_url() ?>/kelasku#total-kelas" class="btn btn-sm btn-primary rounded mt-1 mb-0 px-2 py-0" style="background-color: #12336D; font-size: 14px;">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="w-30-50 mx-2 px-0" style="width: 30%;">
                        <?php if (session('kode-paket') == '1') { ?>
                            <div class="row mx-0 p-2" style="background-color: #262626; border-radius: 15px;">
                                <div class="col-4 p-2">
                                    <div class="row justify-content-center align-content-center h-100 mx-0">
                                        <img src="<?= base_url() ?>/img/Aset/Asset 111@300x.png" alt="" class="w-75">
                                    </div>
                                </div>
                                <div class="col-8 px-0">
                                    <div class="row align-content-center h-100 mx-0">
                                        <h6 class="text-white text-center w-100 mb-0 px-1 py-2">Fitur ini tidak tersedia untuk pilihan paketmu</h6>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="row bg-warning mx-0 p-2" style="border-radius: 15px;">
                                <div class="col-4 p-2">
                                    <img src="<?= base_url() ?>/img/Aset/Asset 194@300x.png" alt="" class="w-100">
                                </div>
                                <div class="col-8 pr-0">
                                    <div class="row mx-0">
                                        <h5 class="h4 text-white text-center w-25 mb-0 p-2" style="background-color: #12336D; border-radius: 5px 0 0 5px;"><?= $sisa ?></h5>
                                        <h6 class="bg-white text-center font-weight-bold w-75 mb-0 px-1 py-2" style="color: #12336D; font-size: 14px; border-radius: 0 5px 5px 0;">Kelas yang belum ditempuh</h6>
                                        <a href="<?= base_url() ?>/kelasku#total-kelas" class="btn btn-sm btn-primary rounded mt-1 mb-0 px-2 py-0" style="background-color: #12336D; font-size: 14px;">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="w-30-50 mx-2 px-0" style="width: 30%;">
                        <div class="row mx-0 p-2" style="background-color: #12336D; border-radius: 15px;">
                            <div class="col-4 p-2">
                                <img src="<?= base_url() ?>/img/Aset/Asset 82@300x.png" alt="" class="w-100">
                            </div>
                            <div class="col-8 pr-0">
                                <div class="row align-content-center h-100 mx-0">
                                    <?php if ($catatan['catatan'] == '') { ?>
                                        <h5 id="catatan1" class="h4 text-white w-100 mb-1" style="font-size: 14px;">Belum ada catatan</h5>
                                        <h6 id="tanggal1" class="text-white w-100 mb-1" style="font-size: 14px;"></h6>
                                    <?php } else { ?>
                                        <h5 id="catatan1" class="h4 text-white w-100 mb-1" style="font-size: 14px;"><?= $catatan['catatan'] ?></h5>
                                        <h6 id="tanggal1" class="text-white w-100 mb-1" style="font-size: 14px;">
                                            <?php
                                                $tanggal1 = strtotime(date('y-m-d'));
                                                $tanggal2 = strtotime(date('y-m-d', strtotime($catatan['tanggal'])));
                                                $h = $tanggal2 - $tanggal1;
                                                if ($h == 0) {
                                                    echo "hari ini";
                                                } else if ($h > 0) {
                                                    echo ($h/60/60/24)." hari lagi";
                                                } else {
                                                    echo "sudah lewat hari";
                                                }
                                            ?>
                                        </h6>
                                    <?php } ?>
                                    <div class="dropdown">
                                        <button type="button" class="dropdown-toggle btn btn-sm btn-light rounded mb-0 px-3 py-0"
                                            style="font-size: 14px;" type="button" id="dropdownMenuButton"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Atur</button>

                                        <div class="dropdown-menu p-2" aria-labelledby="dropdownMenuButton">
                                            <div class="form-group mb-1">
                                                <input type="text" class="form-control form-control-sm" id="catatan" name="catatan" placeholder="Catatan..." maxlength="30">
                                            </div>
                                            <div class="form-group mb-1">
                                                <input type="date" class="form-control form-control-sm" id="tanggal" name="tanggal">
                                            </div>
                                            <button type="button" class="btn btn-sm btn-primary rounded" onclick="simpanCatatan();">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 pr-0">
                <div class="row border-20 shadow h-100 mx-0 p-3">
                    <h4 class="text-center font-weight-bold w-100" style="height: 10%; color: #12336D;">Pemahamanmu</h4>
                    <div id="pemahamanmu" class="col-12 px-0" style="height: 90%;"></div>
                    <a href="<?= base_url() ?>/peserta/nilai" class="btn btn-primary h4 text-white text-center position-absolute mb-0 p-4" style="top: 75px; right: 0; border-radius: 10px 0 0 10px;">
                        <span class="fas fa-arrow-right"></span>
                    </a>
                    <!-- <?php if (!empty($nilai)) { ?>
                        <img id="img-shield" src="<?= base_url() ?>/img/Aset/1111.png" alt="" class="position-absolute" style="width: 45%; top: 35%; left: 28%;">
                    <?php } ?> -->
                </div>
            </div>
        </div>

        <div class="row mx-0 mt5">
            <div class="col-9 pl-0">
                <div class="row justify-content-center bg-white border shadow border-20 mx-0 px5">
                    <div class="w-100 mb-3">
                        <h2 class="text-white text-center font-weight-bold w-50 mx-auto py-2" style="background-color: #12336D; border-radius: 0 0 15px 15px;">Jadwal Terdekat</h2>
                    </div>
                    <?php if (session('kode-paket') == '1') { ?>
                        <div class="col-4 mb5 px-1">
                            <div class="row justify-content-center align-content-center h-100 mx-0 px-4" style="background-color: #262626; border-radius: 15px;">
                                <img src="<?= base_url() ?>/img/Aset/Asset 111@300x.png" alt="" class="gambar p-2" style="width: 60%;">
                                <h4 class="h5 text-white text-center font-weight-bold w-100 mx-auto mt5">Fitur ini tidak tersedia untuk pilihan paketmu</h4>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="col-4 mb5 px-1">
                            <div class="row justify-content-center h-100 mx-0" style="background-color: #12336D; border-radius: 15px;">
                                <div class="w-100">
                                    <h2 class="h2 bg-warning text-center font-weight-bold w-50 mx-auto py-2" style="color: #12336D; border-radius: 0 0 15px 15px;">Zoom</h2>
                                </div>
                                <img class="gambar" src="<?= base_url() ?>/img/Zoom.png" alt="zoom">
                                <div class="my-4 text-blue bg-white w-75 text-center py-2" style="color: #12336D; border-radius: 15px;">
                                    <h1 class="h3 font-weight-bold mb-0 fs-18">
                                        <?php if($meetingDate!=null) :?>
                                        <?php 
                                            $tanggal1 = strtotime(date('y-m-d'));
                                            $tanggal2 = strtotime(date('y-m-d', strtotime($meetingDate['start_event'])));
                                            $selisih = $tanggal2-$tanggal1;
                                            $selisih=$selisih/60/60/24;
                                            echo $selisih==0 ? "Hari Ini" : "H-" . $selisih;
                                        ?>
                                        <?php else: echo '-'?>
                                        <?php endif ?>
                                    </h1>
                                    <h6 class="font-weight-bold fs-18" style="visibility: hidden;">Zoom</h6>
                                </div>
                                <button id="link-zoom" class="btn btn-sm btn-warning rounded font-weight-bold mb-3 px-4 fs-18" 
                                    style="color: #12336D;<?php if ((empty($meetingDate)) || ($selisih!=0)) echo " visibility: hidden;"; ?>">link zoom</button>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="col-4 mb5 px-1">
                        <div class="row justify-content-center bg-primary h-100 mx-0" style="border-radius: 15px;">
                            <div class="w-100">
                                <h2 class="h2 bg-warning text-center font-weight-bold w-50 mx-auto py-2" style="color: #12336D; border-radius: 0 0 15px 15px;">Try Out</h2>
                            </div>
                            <img class="gambar" src="<?= base_url() ?>/img/Try Out.png" alt="zoom">
                            <div class="my-4 text-blue bg-white w-75 text-center py-2" style="color: #12336D; border-radius: 15px;">
                                <h1 class="h3 font-weight-bold mb-0 fs-18">
                                    <?php if($jadwalTo!=null) :?>
                                    <?php 
                                        $tanggal1 = strtotime(date('y-m-d'));
                                        $tanggal2 = strtotime(date('y-m-d', strtotime($jadwalTo['start_event'])));
                                        $selisih = $tanggal2-$tanggal1;
                                        $selisih=$selisih/60/60/24;
                                        echo $selisih==0 ? "Hari Ini" : "H-" . $selisih;
                                    ?>
                                    <?php else: echo '-'?>
                                    <?php endif ?>
                                </h1>
                                <h6 class="font-weight-bold fs-18" <?php if (empty($jadwalTo)) { ?>style="visibility: hidden;"<?php } ?>>
                                    Pukul 
                                    <?php if (!empty($jadwalTo)) {
                                        echo substr($jadwalTo['start_event'],11,5);
                                    } ?>
                                </h6>
                            </div>
                            <a href="<?= base_url() ?>/peserta/tryout/<?php echo (!empty($jadwalTo)) ? $jadwalTo['id'] : ""; ?>" class="btn btn-sm btn-warning rounded font-weight-bold mb-3 px-4 fs-18" 
                                style="color: #12336D;
                                <?php if (!empty($jadwalTo)) { 
                                    if (($jadwalTo['start_event']>date('Y-m-d G:i:s')) || ($jadwalTo['end_event']<date('Y-m-d G:i:s'))) { 
                                        echo " visibility: hidden;";
                                    } 
                                } else {
                                    echo " visibility: hidden;";
                                } ?>">Ikuti Try Out</a>
                        </div>
                    </div>
                    <div class="col-4 mb5 px-1">
                        <div class="row justify-content-center h-100 mx-0" style="background-color: lightgrey; border-radius: 15px;">
                            <div class="w-100">
                                <h2 class="h2 bg-warning text-center font-weight-bold w-50 mx-auto py-2" style="color: #12336D; border-radius: 0 0 15px 15px;">Kuis</h2>
                            </div>
                            <img class="gambar" src="<?= base_url() ?>/img/Kuis.png" alt="zoom">
                            <div class="my-4 text-blue bg-white w-75 text-center py-2" style="color: #12336D; border-radius: 15px;">
                                <h1 class="h3 font-weight-bold mb-0 px-4 fs-18">
                                    <?php if (!empty($kuis)) { echo "Pertemuan - ".$pertKuis; } else { echo "-"; } ?>
                                </h1>
                                <h6 class="font-weight-bold px-4 fs-18"><?php echo (!empty($kuis['start_event'])) ? date('d F Y', strtotime($kuis['start_event'])) : date('d F Y'); ?></h6>
                            </div>
                            <a href="<?= base_url() ?>/kelasku/kuis/<?php echo (!empty($kuis['event_id'])) ? $kuis['event_id'] : 'none'; ?>/<?= $pertKuis ?>" 
                                class="btn btn-sm btn-warning rounded font-weight-bold mb-3 px-4 fs-18" 
                                style="color: #12336D;<?php echo (!empty($kuis['start_event']) && date('d F Y', strtotime($kuis['start_event'])) == date('d F Y')) ? "" : " visibility: hidden;"; ?>">Ikuti Kuis</a>
                        </div>
                    </div>
                </div>
                <?php if (!empty($rekomendasi)) { ?>
                    <div class="row justify-content-center bg-primary border-20 mx-0 mt5 px5 py5">
                        <h2 class="text-white text-center font-weight-bold w-100">Rekomendasi Belajar</h2>
                        <div class="col-12 px-0">
                            <div class="row justify-content-center mx-0 mt-3">
                                <h5 class="bg-white text-primary text-center font-weight-bold rounded px-2"><?= $rekomendasi[0]['materi'] ?></h5>
                                <h5 class="text-white font-weight-bold px-2">Bagian 1</h5>
                            </div>
                        </div>
                        <div class="col-12 bg-white border-20 px-0">
                            <a href="<?= base_url() ?>/materi/materi/<?= $rekomendasi[0]['id'] ?>/1#vid" class="btn btn-link">
                                <img src="<?= base_url() ?>/img/Video Materi/<?= $rekomendasi[0]['materi'] ?>/1.jpg" alt="" class="position-relative border-20 w-100 h-100" style="object-fit: contain;">
                            </a>
                        </div>
                        <?php
                            $total=(int)$rekomendasi[0]['dasar']+(int)$rekomendasi[0]['sedang']+(int)$rekomendasi[0]['rumit'];
                            for ($i=1; $i<=$total; $i++) { 
                                if ($i!=1) { ?>
                                    <a href="<?= base_url() ?>/materi/materi/<?= $rekomendasi[0]['id'] ?>/<?= $i ?>#vid" class="col-3 btn btn-link px-1 mt-3">
                                        <div class="bg-white w-100" style="border-radius: 10px;">
                                            <img src="<?= base_url() ?>/img/Video Materi/<?= $rekomendasi[0]['materi'] ?>/<?= $i ?>.jpg" alt="" class="position-relative w-100 h-100" style="object-fit: contain; border-radius: 10px;">
                                        </div>
                                        <div class="h5 text-white text-center font-weight-bold w-100 mx-auto mt-2">Bagian <?= $i ?></div>
                                    </a>
                        <?php } } ?>
                    </div>
                <?php } ?>
            </div>
            <div class="col-3 pr-0">
                <div class="row justify-content-center align-content-start bg-white border border-20 shadow h-100 mx-0 p-3">
                    <h5 class="w-100" style="color: #12336D;">Online</h5>
                    <?php foreach ($others as $other) : ?>
                        <a href="https://wa.me/<?= $other['telepon'] ?>" class="d-flex aling-content-center bg-light rounded w-100 mb-2" style="height: 30px;">
                            <div class="col-1">
                                <h5 class="fa fa-circle text-success p-1 mb-0"></h5>
                            </div>
                            <div class="col-11">
                                <h5 class="col-11 text-truncate p-1 mb-0" style="color: #12336D;"><?= $other['nama'] ?></h5>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div id="modalMindMap" class="modal fade" role="dialog" tabindex='1' aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                    <div class="modal-header d-flex justify-content-between align-text-center">
                        <h3 class="text-primary ml-1">Mind Map</h3>
                        <p class="fa fa-close btn mr-1" style="font-size: 36px;" onclick="tutupModal();"></p>
                    </div>

                    <div class="modal-body">
                        <div class="row mx-0">
                            <img id="imgMindMap" src="" alt="" class="img-fluid border border-light rounded">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        <script>
            if (screen.width <= 768) {
                document.getElementById('jad').innerHTML='';
            }

            document.getElementById('tombolcari').addEventListener('click', function() {
                const cari = document.getElementById('cari');
                $.ajax({
                    url: "<?= base_url() ?>/peserta/cari/"+cari.value, 
                    success: function(result) {
                        const res = JSON.parse(result);
                        console.log(res);
                        const materi = document.getElementById('video-materi');
                        const rekaman = document.getElementById('rekaman-kelas');
                        const latihan = document.getElementById('latihan-soal');

                        if (res.materi.length != 0) {
                            materi.innerHTML=`<h5 class="text-white font-weight-bold w-100">Video Materi - ${res['materi'][0]['materi']}</h5>`;
                            ubahMateri(res.materi[0], res.tingkatan);
                        } else {
                            materi.innerHTML=`<h5 class="text-white font-weight-bold w-100">Video Materi`;
                            materi.innerHTML+=`<h5 class="text-white font-weight-bold w-100">-</h5>`;
                        }

                        if (res['rekaman'].length != 0) {
                            rekaman.innerHTML=`<h5 class="text-white font-weight-bold w-100">Rekaman Kelas - ${res['rekaman'][0]['materi']}</h5>`;
                            ubahRekaman(res['rekaman']);
                        } else {
                            rekaman.innerHTML=`<h5 class="text-white font-weight-bold w-100">Rekaman Kelas`;
                            rekaman.innerHTML+=`<h5 class="text-white font-weight-bold w-100">-</h5>`;
                        }

                        if (res.materi.length != 0) {
                            latihan.innerHTML=`<h5 class="text-white font-weight-bold w-100">Latihan Soal - ${res['materi'][0]['materi']}</h5>`;
                            ubahLatihan(res['materi'][0]);
                        } else {
                            latihan.innerHTML=`<h5 class="text-white font-weight-bold w-100">Latihan Soal`;
                            latihan.innerHTML+=`<h5 class="text-white font-weight-bold w-100">-</h5>`;
                        }
                        
                        <?php if (session('kode-paket') != '1') : ?>
                            if (res['mindmap'].length != 0) {
                                latihan.innerHTML+=`<div class="col-12 float-right px-0 mt-2">
                                                        <div class="row mx-0">
                                                            <button class="btn btn-sm btn-warning rounded h6 font-weight-bold mr-2 py-1" style="width: 45%; word-break: break-word; white-space: normal;" onclick="lihatMindmap('${res['mindmap'][0]['materi']}', 'jpg')">
                                                                Mind mapping - ${res['mindmap'][0]['materi']}
                                                            </button>
                                                            <a href="<?= base_url() ?>/kelasku/view_pdf/ebook.pdf" class="btn btn-sm btn-warning rounded h6 font-weight-bold mr-2 py-1" style="width: 45%;">
                                                                Ebook
                                                            </a>
                                                        </div>
                                                    </div>`;
                            }
                        <?php endif; ?>
                    }
                });
            });

            function ubahMateri(res, tingkatan) {
                var parts=parseInt(res['dasar']);
                if (parseInt(res['dasar']) == tingkatan['dasar'].split(',').length) {
                    if (parseInt(res['sedang']) == tingkatan['sedang'].split(',').length) {
                        parts+=(parseInt(res['sedang'])+parseInt(res['rumit']));
                    } else {
                        parts+=parseInt(res['sedang']);
                    }
                }
                const materi = document.getElementById('video-materi');
                for (let i=1; i<=parts; i++) {
                    materi.innerHTML+=`<a href="<?= base_url() ?>/materi/materi/${res['id']}/${i}#vid" class="btn btn-light btn-lg d-flex align-self-center rounded mr-2 mb-2 p-2" style="width: 30%;">
                                            <img src="<?= base_url() ?>/img/Video Materi/${res['materi']}/${i}.jpg" class="w-100">
                                        </a>`;
                }
            }

            function ubahRekaman(res) {
                let rek = res[0]['parts'].split(',');
                for (let k=1; k<=rek.length; k++) {
                    document.getElementById('rekaman-kelas').innerHTML+=`<a href="<?= base_url() ?>/materi/rekaman/${res[0]['id']}/${k}#vid" class="btn btn-light btn-lg rounded mr-2 mb-2 p-2" style="width: 30%;">
                                                                            <img src="<?= base_url() ?>/img/Rekaman Kelas/${res[0]['admin']}/${res[0]['materi']}.${res[0]['ext_tn']}" class="w-100">
                                                                        </a>`;
                }
            }

            function ubahLatihan(res) {
                const latihan = document.getElementById('latihan-soal');
                for (let j=0; j<4; j++) {
                    latihan.innerHTML+=`<a href="<?= base_url() ?>/kelasku/view_pdf/${res['materi']}-${j+1}.pdf" class="btn btn-primary btn-lg rounded mr-2 mb-2 p-1" style="width: 45%;">
                                            <h5 class="h6 text-white text-center font-weight-bold w-100 mx-auto mb-0">Soal dan</h5>
                                            <h5 class="h6 text-white text-center font-weight-bold w-100 mx-auto mb-0" style="word-break: break-word; white-space: normal;">Pembahasan ${j+1}</h5>
                                        </a>`;
                }
                
            }

            function simpanCatatan() {
                const catatan = document.getElementById('catatan').value;
                const tanggal = document.getElementById('tanggal').value;
                
                $.ajax({
                    url: "<?= base_url() ?>/peserta/simpanCatatan/"+catatan+"/"+tanggal,
                    success: function(result) {
                        console.log(result.toString());
                        var today = new Date();
                        var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
                        var thatDay = new Date(tanggal);
                        var sisa = thatDay.getTime() - today.getTime();
                        sisa/=86400000;

                        document.getElementById('catatan1').innerHTML=catatan;
                        if (Math.ceil(sisa)!=0) {
                            document.getElementById('tanggal1').innerHTML=Math.ceil(sisa)+' hari lagi';
                        } else {
                            document.getElementById('tanggal1').innerHTML='hari ini';
                        }
                    }
                });
            }

            function lihatMindmap(materi, ext) {
                document.getElementById('imgMindMap').src="<?= base_url() ?>/img/Mind Map/"+materi+"."+ext;
                $('#modalMindMap').modal('show');
            }

            function tutupModal() {
                $('#modalMindMap').modal('hide');
            }

            document.getElementById('link-zoom').addEventListener('click', function() {
                <?php if (!empty($meetingDate)) { ?>
                    $.ajax({
                        url: '<?= base_url() ?>/peserta/hadir/<?php echo (!empty($meetingDate)) ? strtotime($meetingDate['start_event']) : ''; ?>',
                        success: function(result) {
                            if (result != 'X') document.getElementById('bolos').innerHTML=result;
                            window.open('<?php echo (!empty($meetingDate)) ? $meetingDate['link-meeting'] : ''; ?>', '_blank');
                        }
                    });
                <?php } ?>
            });

            var data = [];
            function bangunChart() {
                const nilai = <?php echo !empty($nilai) ? json_encode($nilai).';' : '[];'; ?>
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
                if (data.length!=0) {
                    document.getElementsByClassName('anychart-credits')[0].setAttribute('style', 'display: none;');
                    setChart('ac_path_h', '#0064D3');
                    setChart('ac_path_i', '#12336D');
                    setChart('ac_path_j', '#FECE24');
                    setChart('ac_path_k', 'darkgrey');
                    document.getElementById('ac_layer_g').setAttribute('style', 'display: none;');
                }
            }

            function setChart(id, color) {
                var chart = document.getElementById(id);
                chart.setAttribute('fill', color);
                chart.setAttribute('class', 'shadow');
                chart.setAttribute('style', 'border: 5px solid white; cursor: pointer;');
            }
        </script>
    </div>
</div>
<?php if (session()->has('salah')) : ?>
    <?= session()->salah; ?>
<?php endif; ?>
<?= $this->endSection(); ?>