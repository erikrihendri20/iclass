<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0 px-5 py-3">
    <div class="row mx-auto mt-5" style="width: 80%;">
        <div class="row w-100 mx-0">
            <div class="row bg-primary mx-0" style="width: 70%; border-radius: 37px;">
                <div class="w-25 pb-5">
                    <img src="<?= base_url() ?>/img/Aset/Asset 41.png" style="border-radius: 37px;" class="w-100" />
                </div>
                <div class="w-75 pl-5 pr-4 py-4">
                    <div class="row align-items-center justify-content-end mx-0">
                        <a href="<?= base_url() ?>/peserta/profil/<?= session('username') ?>" class="btn btn-primary border-white rounded-pill h6 font-weight-bold px-3" style="border-width: 2px; padding: 10px 20px;">Edit Profil</a>
                    </div>
                    <h4 class="text-white w-100">Hai <?= explode(' ',trim(session()->nama))[0] ?>...</h4>
                    <h6 class="text-white w-75 mt-4"><i>"<?= $quote ?>"</i></h6>
                </div>
            </div>
            <div class="row ml-auto pl-3" style="width: 30%;">
                <div class="row align-items-center bg-primary border-30 h-100 mx-0 px-5 py-4" style="overflow-y:auto;">
                    <div class="row justify-content-between w-100 mx-0 mt-3" style="height: 32px;">
                        <h5 class="text-white text-truncate font-weight-bold mb-4" style="width: 85%;">Pemahamanmu</h5>
                        <a href="<?= base_url() ?>/peserta/nilai">
                            <img src="<?= base_url() ?>/img/Aset/Asset 2.png" style="height: 24px; object-fit:contain;">
                        </a>
                    </div>
                    <div class="row w-100 mx-0 my-3">
                        <?php if (!empty($nilai)) { $i=0; foreach ($nilai as $n) { ?>
                            <div class="row justify-content-center w-100 mt-3 mx-0">
                                <div class="bg-white border-10 h-100" style="width: 20%;"></div>
                                <div class="pl-2 py-1" style="width: 80%;">
                                    <div class="row justify-content-between w-100 mx-0">
                                        <h6 class="text-white font-weight-bold text-truncate w-75" style="font-size: 14px;"><?= $n['materi'] ?></h6>
                                        <h6 class="text-white" style="font-size: 14px;"><?= $n['nilai'] ?>%</h6>
                                    </div>
                                    <div class="row justify-content-center w-100 mx-0">
                                        <div class="progress border-10 w-100" style="height: 14px; background-color: rgba(255, 255, 255, 0.5);">
                                            <div class="progress-bar border-10 bg-white" role="progressbar" style="width: <?= $n['nilai'] ?>%" aria-valuenow="<?= $n['nilai'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php $i++; } } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row w-100 mt-4 mx-0 pt-5">
            <div class="mx-0 pr-3" style="width: 60%">
                <h4 id="statusKelas" class="font-weight-bold w-100 my-auto">Status Kelas</h4>
                <div class="row w-100 mx-0 mt-4">
                    <button id="buttonBolos" onclick="cekBolos();" class="btn btn-primary border-10 px-3">Bolos Kelas</button>
                    <button id="buttonSisa" onclick="cekSisa();" class="btn btn-light border-10 ml-3 px-3">Kelas Tersisa</button>
                </div>
                <div class="row border w-100 mx-0 mt-4 p-3" style="border-radius: 37px;">
                    <div class="row align-content-center mx-0 py-3" style="width: 35%;">
                        <img src="<?= base_url() ?>/img/Aset/Asset 42.png" class="w-100 p-2" style="object-fit: contain;">
                    </div>
                    <div style="width: 65%; height: 280px;">
                        <div id="divKelas" class="row align-content-start w-100 h-100 mx-0" style="overflow-y: auto;">
                            <?php if (!empty($kelasBolos)) {
                                foreach ($kelasBolos as $kelas) { ?>
                                    <div class="row align-content-center border-bottom w-100 ml-4 mr-0 mt-4 pb-2">
                                        <h6 style="font-size: 18px;" class="font-weight-bold w-100 mb-0"><?= $kelas['title'] ?></h6>
                                        <h6 style="font-size: 18px;" class="w-100 mb-0"><?php echo date('d F Y', strtotime($kelas['start_event'])) ?></h6>
                                    </div>
                            <?php } } else { ?>
                                <h5 class="font-weight-bold m-auto">Kamu belum pernah bolos kelas</h5>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-0 pl-3" style="width: 40%;">
                <h4 class="font-weight-bold w-100 my-auto">Buku Ujian Masuk STIS</h4>
                <div class="w-100 mt-4">
                    <button id="bums2021" onclick="bumsChange('2021')" class="btn btn-primary border-10 px-3">Tahun 2021</button>
                    <button id="bums2022" onclick="bumsChange('2022')" class="btn btn-light border-10 ml-3 px-3">Tahun 2022</button>
                </div>
                <div class="row border w-100 mx-0 mt-4 p-3" style="border-radius: 37px;">
                    <div class="row align-content-center mx-0 py-3" style="width: 40%;">
                        <img id="imgbums" src="<?= base_url() ?>/img/1.jpg" class="w-100 p-2" style="object-fit: contain;">
                    </div>
                    <div class="row align-content-center mx-0 pl-2" style="width: 60%; height: 280px;">
                        <h5 class="font-weight-bold w-100 mt-4">Buku Ujian Saringan Masuk Polstat STIS</h5>
                        <h6 class="w-100 mb-5 mt-3">Ebook ini dilengkapi dengan kumpulan materi dan soal USM Polstat STIS lengkap beserta dengan pembahasannya</h6>
                        <?php if (session('kode-paket')!='1' && session('kode-paket')!='6') { ?>
                            <a id="abums" href="<?= base_url() ?>/kelasku/view_pdf/ebook.pdf" class="btn btn-primary px-3 ml-auto mt-3">Download</a>
                        <?php } else { ?>
                            <button onclick="hanyaTryout();" class="btn btn-primary px-3 ml-auto mt-auto">Download</button>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row w-100 mt-4 mx-0 pt-5">
            <h4 id="jadwalKeseluruhan" class="font-weight-bold w-100 my-auto">Jadwal Keseluruhan</h4>
            <div class="row w-100 mx-0 mt-4">
                <button id="buttonKelasVirtual" onclick="changeJadwalTerdekat('kelas');" class="btn btn-primary border-10 px-3">Kelas Virtual</button>
                <button id="buttonTryOut" onclick="changeJadwalTerdekat('tryout');" class="btn btn-light border-10 mx-3 px-3">Try Out</button>
                <button id="buttonKuisHarian" onclick="changeJadwalTerdekat('kuis');" class="btn btn-light border-10 px-3">Kuis Harian</button>
            </div>
            <div id="divKelasVirtual" class="w-100 mx-0 mt-4 pt-3" style="display: flex">
                <?php if (!empty($zoomMeeting)) { ?>
                    <?php if($zoomMeeting[0]!=null) { ?>
                        <div class="border mx-0 p-3" style="width: 25%; border-radius: 37px;">
                            <div class="row bg-primary position-relative border-20 w-100 mx-0">
                                <div class="bg-white position-absolute w-25 h-25 p-2" style="top: 0; right: 0; border-radius: 0 20px 0 20px;">
                                    <div class="row justify-content-center bg-primary border-10 h-100 mx-0 p-1">
                                        <img src="<?= base_url() ?>/img/Aset/Asset 45.png" class="w-75" style="object-fit: contain;" />
                                    </div>
                                </div>
                                <img src="<?= base_url() ?>/img/Aset/Asset 11.png" class="border-50 w-100" style="object-fit: contain;" />
                            </div>
                            <h5 class="font-weight-bold text-capitalize mt-4 mb-0 w-100 px-3"><?= session('jurusan') ?></h5>
                            <h5 class="font-weight-bold text-truncate mt-4 mb-0 w-100 px-3"><?= date('d F Y', strtotime($zoomMeeting[0]['start_event'])) ?></h5>
                            <h6 class="text-truncate w-100 px-3 mt-2 mb-0"><?= $zoomMeeting[0]['title'] ?></h6>
                            <div class="row justify-content-end w-100 mx-0 mt-5 px-3">
                                <a class="btn btn-primary text-white rounded-pill px-3"
                                    <?php if(date('Y-m-d') == date('Y-m-d', strtotime($zoomMeeting[0]['start_event']))) : ?>
                                        href="<?= base_url() ?>/peserta/hadir/<?php echo (!empty($zoomMeeting[0])) ? $zoomMeeting[0]['id'] : ''; ?>"
                                    <?php endif; ?>
                                        style="visibility:hidden;">
                                    <?php 
                                        $tanggal1 = strtotime(date('Y-m-d'));
                                        $tanggal2 = strtotime(date('Y-m-d', strtotime($zoomMeeting[0]['start_event'])));
                                        $selisih = $tanggal2-$tanggal1;
                                        $selisih=$selisih/60/60/24;
                                        echo $selisih==0 ? "Join Now" : $selisih." hari lagi"; 
                                    ?>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="position-relative ml-3" style="width: 70%; overflow-x: auto; overflow-y: hidden; white-space: nowrap;">
                        <?php for ($i=1; $i<sizeof($zoomMeeting); $i++) { ?>
                            <div class="w-50 mx-0 pr-3" style="display:inline-block; float: none;">
                                <?php if (!empty($zoomMeeting[$i])) { ?>
                                    <div class="row border w-100 mx-0 p-3" style="border-radius: 37px;">
                                        <div class="row bg-secondary position-relative border-20 w-50 mx-0 pr-2">
                                            <div class="bg-white position-absolute w-25 h-25 p-2" style="top: 0; right: 0; border-radius: 0 20px 0 20px;">
                                                <div class="row justify-content-center bg-primary border-10 h-100 mx-0 p-1">
                                                    <img src="<?= base_url() ?>/img/Aset/Asset 45.png" class="w-75" style="object-fit: contain;" />
                                                </div>
                                            </div>
                                            <img src="<?= base_url() ?>/img/Aset/Asset 11.png" class="border-50 w-100" style="object-fit: contain;" />
                                        </div>
                                        <div class="row align-items-center w-50 mx-0 pl-3">
                                            <h5 class="font-weight-bold text-capitalize mt-3 mb-0 w-100"><?= session('jurusan') ?></h5>
                                            <h5 class="font-weight-bold text-truncate mt-2 w-100 mb-0"><?= date('d F Y', strtotime($zoomMeeting[$i]['start_event'])) ?></h5>
                                            <h6 class="text-truncate w-100"><?= $zoomMeeting[$i]['title'] ?></h6>
                                            <a class="btn btn-primary text-white rounded-pill px-3"
                                                <?php if(date('Y-m-d') == date('Y-m-d', strtotime($zoomMeeting[$i]['start_event']))) : ?>
                                                    href="<?= base_url() ?>/peserta/hadir/<?php echo (!empty($zoomMeeting[$i])) ? $zoomMeeting[$i]['id'] : ''; ?>"
                                                <?php endif; ?>
                                                    style="visibility:hidden;">
                                                <?php 
                                                    $tanggal1 = strtotime(date('Y-m-d'));
                                                    $tanggal2 = strtotime(date('Y-m-d', strtotime($zoomMeeting[$i]['start_event'])));
                                                    $selisih = $tanggal2-$tanggal1;
                                                    $selisih=$selisih/60/60/24;
                                                    echo $selisih==0 ? "Join Now" : $selisih." hari lagi"; 
                                                ?>
                                            </a>
                                        </div>
                                    </div>
                                <?php $i++; } ?>
                                <?php if (!empty($zoomMeeting[$i])) { ?>
                                    <div class="row border w-100 mx-0 mt-3 p-3" style="border-radius: 37px;">
                                        <div class="row bg-secondary position-relative border-20 w-50 mx-0 pr-2">
                                            <div class="bg-white position-absolute w-25 h-25 p-2" style="top: 0; right: 0; border-radius: 0 20px 0 20px;">
                                                <div class="row justify-content-center bg-primary border-10 h-100 mx-0 p-1">
                                                    <img src="<?= base_url() ?>/img/Aset/Asset 45.png" class="w-75" style="object-fit: contain;" />
                                                </div>
                                            </div>
                                            <img src="<?= base_url() ?>/img/Aset/Asset 11.png" class="border-50 w-100" style="object-fit: contain;" />
                                        </div>
                                        <div class="row align-items-center w-50 mx-0 pl-3">
                                            <h5 class="font-weight-bold text-capitalize mt-3 mb-0 w-100"><?= session('jurusan') ?></h5>
                                            <h5 class="font-weight-bold text-truncate mt-2 w-100 mb-0"><?= date('d F Y', strtotime($zoomMeeting[$i]['start_event'])) ?></h5>
                                            <h6 class="text-truncate w-100"><?= $zoomMeeting[$i]['title'] ?></h6>
                                            <a class="btn btn-primary text-white rounded-pill px-3"
                                                <?php if(date('Y-m-d') == date('Y-m-d', strtotime($zoomMeeting[$i]['start_event']))) : ?>
                                                    href="<?= base_url() ?>/peserta/hadir/<?php echo (!empty($zoomMeeting[$i])) ? $zoomMeeting[$i]['id'] : ''; ?>"
                                                <?php endif; ?>
                                                    style="visibility:hidden;">
                                                <?php 
                                                    $tanggal1 = strtotime(date('Y-m-d'));
                                                    $tanggal2 = strtotime(date('Y-m-d', strtotime($zoomMeeting[$i]['start_event'])));
                                                    $selisih = $tanggal2-$tanggal1;
                                                    $selisih=$selisih/60/60/24;
                                                    echo $selisih==0 ? "Join Now" : $selisih." hari lagi"; 
                                                ?>
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php }  else { ?>
                    <div class="row justify-content-center w-100 mx-0">
                        <h4 class="font-weight-bold">Belum ada jadwal kelas</h4>
                    </div>
                <?php } ?>
            </div>
            <div id="divTryOut" class="w-100 mx-0 mt-4 pt-3" style="display: none">
                <?php if (!empty($jadwalTryout)) { ?>
                    <?php if($jadwalTryout[0]!=null) { ?>
                        <div class="border mx-0 p-3" style="width: 25%; border-radius: 37px;">
                            <div class="row bg-primary position-relative border-20 w-100 mx-0">
                                <div class="bg-white position-absolute w-25 h-25 p-2" style="top: 0; right: 0; border-radius: 0 20px 0 20px;">
                                    <div class="row justify-content-center bg-primary border-10 h-100 mx-0 p-1">
                                        <img src="<?= base_url() ?>/img/Aset/Asset 44.png" class="w-75" style="object-fit: contain;" />
                                    </div>
                                </div>
                                <img src="<?= base_url() ?>/img/Aset/Asset 14.png" class="border-50 w-100" style="object-fit: contain;" />
                            </div>
                            <h5 class="font-weight-bold text-capitalize mt-4 mb-0 w-100 px-3"><?= session('jurusan') ?></h5>
                            <h5 class="font-weight-bold text-truncate mt-4 mb-0 w-100 px-3"><?= date('d F Y', strtotime($jadwalTryout[0]['start_event'])) ?></h5>
                            <h6 class="text-truncate w-100 px-3 mt-2 mb-0"><?= $jadwalTryout[0]['title'] ?></h6>
                            <div class="row justify-content-end w-100 mx-0 mt-5 px-3">
                                <a class="btn btn-primary text-white rounded-pill ml-auto px-3" 
                                    <?php if (date('Y-m-d')>date('Y-m-d', strtotime($jadwalTryout[0]['start_event']))) { ?>
                                        href="<?= base_url() ?>/peserta/tryout/<?= $jadwalTryout[0]['id'] ?>"
                                    <?php } elseif(date('Y-m-d') == date('Y-m-d', strtotime($jadwalTryout[0]['start_event']))) { ?>
                                        onclick="modalTryout('<?= $jadwalTryout[0]['id'] ?>');"
                                    <?php } ?>>
                                    <?php if (date('y-m-d', strtotime($jadwalTryout[0]['start_event']))==date('y-m-d')) {
                                        echo 'Ikuti Try Out';
                                    } elseif (date('y-m-d', strtotime($jadwalTryout[0]['start_event']))>date('y-m-d')) {
                                        $tanggal1 = strtotime(date('Y-m-d'));
                                        $tanggal2 = strtotime(date('Y-m-d', strtotime($jadwalTryout[0]['start_event'])));
                                        $selisih = $tanggal2-$tanggal1;
                                        $selisih=$selisih/60/60/24;
                                        echo $selisih>0 ? $selisih." hari lagi" : '&nbsp'; 
                                    } else { echo 'Lihat Kembali'; } ?>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="position-relative ml-3" style="width: 70%; overflow-x: auto; overflow-y: hidden; white-space: nowrap;">
                        <?php for ($i=1; $i<sizeof($jadwalTryout); $i++) { ?>
                            <div class="w-50 mx-0 pr-3" style="display:inline-block; float: none;">
                                <?php if (!empty($jadwalTryout[$i])) { ?>
                                    <div class="row border w-100 mx-0 mb-3 p-3" style="border-radius: 37px;">
                                        <div class="row bg-secondary position-relative border-20 w-50 mx-0 pr-2">
                                            <div class="bg-white position-absolute w-25 h-25 p-2" style="top: 0; right: 0; border-radius: 0 20px 0 20px;">
                                                <div class="row justify-content-center bg-primary border-10 h-100 mx-0 p-1">
                                                    <img src="<?= base_url() ?>/img/Aset/Asset 44.png" class="w-75" style="object-fit: contain;" />
                                                </div>
                                            </div>
                                            <img src="<?= base_url() ?>/img/Aset/Asset 14.png" class="border-50 w-100" style="object-fit: contain;" />
                                        </div>
                                        <div class="row align-items-center w-50 mx-0 pl-3">
                                            <h5 class="font-weight-bold text-capitalize mt-3 mb-0 w-100"><?= session('jurusan') ?></h5>
                                            <h5 class="font-weight-bold text-truncate mt-2 w-100 mb-0"><?= date('d F Y', strtotime($jadwalTryout[$i]['start_event'])) ?></h5>
                                            <h6 class="text-truncate w-100"><?= $jadwalTryout[$i]['title'] ?></h6>
                                            <?php if ((date('Y-m-d G:i:s', strtotime($jadwalTryout[$i]['start_event']))<=date('Y-m-d G:i:s')) && (date('Y-m-d G:i:s', strtotime($jadwalTryout[$i]['end_event']))<=date('Y-m-d G:i:s'))) { ?>
                                                <!-- <a href="<?= base_url() ?>/peserta/tryout_hasil/<?= $jadwalTryout[$i]['id'] ?>" class="btn btn-primary rounded-pill ml-auto mb-3 px-3">Nilai Try Out</a> -->
                                            <?php } ?>
                                            <a class="btn btn-primary text-white rounded-pill ml-auto px-3" 
                                                <?php if (date('Y-m-d')>date('Y-m-d', strtotime($jadwalTryout[$i]['start_event']))) { ?>
                                                    href="<?= base_url() ?>/peserta/tryout/<?= $jadwalTryout[$i]['id'] ?>"
                                                <?php } elseif(date('Y-m-d') == date('Y-m-d', strtotime($jadwalTryout[$i]['start_event']))) { ?>
                                                    onclick="modalTryout('<?= $jadwalTryout[$i]['id'] ?>');"
                                                <?php } ?>>
                                                <?php if (date('y-m-d', strtotime($jadwalTryout[$i]['start_event']))==date('y-m-d')) {
                                                    echo 'Ikuti Try Out';
                                                } elseif (date('y-m-d', strtotime($jadwalTryout[$i]['start_event']))>date('y-m-d')) {
                                                    $tanggal1 = strtotime(date('Y-m-d'));
                                                    $tanggal2 = strtotime(date('Y-m-d', strtotime($jadwalTryout[$i]['start_event'])));
                                                    $selisih = $tanggal2-$tanggal1;
                                                    $selisih=$selisih/60/60/24;
                                                    echo $selisih>0 ? $selisih." hari lagi" : '&nbsp'; 
                                                } else { echo 'Lihat Kembali'; } ?>
                                            </a>
                                        </div>
                                    </div>
                                <?php $i++; } ?>
                                <?php if (!empty($jadwalTryout[$i])) { ?>
                                    <div class="row border w-100 mx-0 mb-3 p-3" style="border-radius: 37px;">
                                        <div class="row bg-secondary position-relative border-20 w-50 mx-0 pr-2">
                                            <div class="bg-white position-absolute w-25 h-25 p-2" style="top: 0; right: 0; border-radius: 0 20px 0 20px;">
                                                <div class="row justify-content-center bg-primary border-10 h-100 mx-0 p-1">
                                                    <img src="<?= base_url() ?>/img/Aset/Asset 44.png" class="w-75" style="object-fit: contain;" />
                                                </div>
                                            </div>
                                            <img src="<?= base_url() ?>/img/Aset/Asset 14.png" class="border-50 w-100" style="object-fit: contain;" />
                                        </div>
                                        <div class="row align-items-center w-50 mx-0 pl-3">
                                            <h5 class="font-weight-bold text-capitalize mt-3 mb-0 w-100"><?= session('jurusan') ?></h5>
                                            <h5 class="font-weight-bold text-truncate mt-2 w-100 mb-0"><?= date('d F Y', strtotime($jadwalTryout[$i]['start_event'])) ?></h5>
                                            <h6 class="text-truncate w-100"><?= $jadwalTryout[$i]['title'] ?></h6>
                                            <?php if ((date('Y-m-d G:i:s', strtotime($jadwalTryout[$i]['start_event']))<=date('Y-m-d G:i:s')) && (date('Y-m-d G:i:s', strtotime($jadwalTryout[$i]['end_event']))<=date('Y-m-d G:i:s'))) { ?>
                                                <!-- <a href="<?= base_url() ?>/peserta/tryout_hasil/<?= $jadwalTryout[$i]['id'] ?>" class="btn btn-primary rounded-pill ml-auto mb-3 px-3">Nilai Try Out</a> -->
                                            <?php } ?>
                                            <a class="btn btn-primary text-white rounded-pill ml-auto px-3" 
                                                <?php if (date('Y-m-d')>date('Y-m-d', strtotime($jadwalTryout[$i]['start_event']))) { ?>
                                                    href="<?= base_url() ?>/peserta/tryout/<?= $jadwalTryout[$i]['id'] ?>"
                                                <?php } elseif(date('Y-m-d') == date('Y-m-d', strtotime($jadwalTryout[$i]['start_event']))) { ?>
                                                    onclick="modalTryout('<?= $jadwalTryout[$i]['id'] ?>');"
                                                <?php } ?>>
                                                <?php if (date('y-m-d', strtotime($jadwalTryout[$i]['start_event']))==date('y-m-d')) {
                                                    echo 'Ikuti Try Out';
                                                } elseif (date('y-m-d', strtotime($jadwalTryout[$i]['start_event']))>date('y-m-d')) {
                                                    $tanggal1 = strtotime(date('Y-m-d'));
                                                    $tanggal2 = strtotime(date('Y-m-d', strtotime($jadwalTryout[$i]['start_event'])));
                                                    $selisih = $tanggal2-$tanggal1;
                                                    $selisih=$selisih/60/60/24;
                                                    echo $selisih>0 ? $selisih." hari lagi" : '&nbsp'; 
                                                } else { echo 'Lihat Kembali'; } ?>
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php }  else { ?>
                    <div class="row justify-content-center w-100 mx-0">
                        <h4 class="font-weight-bold">Belum ada jadwal try out</h4>
                    </div>
                <?php } ?>
            </div>
            <div id="divKuisHarian" class="w-100 mx-0 mt-4 pt-3" style="display: none">
                <?php if (!empty($kuisHarian)) { ?>
                    <?php if($kuisHarian[0]!=null) { ?>
                        <div class="border mx-0 p-3" style="width: 25%; border-radius: 37px;">
                            <div class="row bg-primary position-relative border-20 w-100 mx-0">
                                <div class="bg-white position-absolute w-25 h-25 p-2" style="top: 0; right: 0; border-radius: 0 20px 0 20px;">
                                    <div class="row justify-content-center bg-primary border-10 h-100 mx-0 p-1">
                                        <img src="<?= base_url() ?>/img/Aset/Asset 43.png" class="w-75" style="object-fit: contain;" />
                                    </div>
                                </div>
                                <img src="<?= base_url() ?>/img/Aset/Asset 13.png" class="border-50 w-100" style="object-fit: contain;" />
                            </div>
                            <h5 class="font-weight-bold text-capitalize mt-4 mb-0 w-100 px-3"><?= session('jurusan') ?></h5>
                            <h5 class="font-weight-bold text-truncate mt-4 mb-0 w-100 px-3"><?= date('d F Y', strtotime($kuisHarian[0]['start_event'])) ?></h5>
                            <h6 class="text-truncate w-100 px-3 mt-2 mb-0"><?= $kuisHarian[0]['title'] ?></h6>
                            <div class="row justify-content-end w-100 mx-0 mt-5 px-3">
                                <a href="<?= base_url() ?>/kelasku/kuis/<?= $kuisHarian[0]['id'] ?>/1" class="btn btn-primary text-white rounded-pill ml-auto px-3" 
                                    style="<?php if (substr($kuisHarian[0]['start_event'],0,10)>date('Y-m-d')) echo " visibility: hidden;"; ?>">
                                    <?php if (date('y-m-d', strtotime($kuisHarian[0]['start_event']))==date('y-m-d')) {
                                        echo 'Ikuti Kuis';
                                    } elseif (date('y-m-d', strtotime($kuisHarian[0]['start_event']))>date('y-m-d')) {
                                        $tanggal1 = strtotime(date('Y-m-d'));
                                        $tanggal2 = strtotime(date('Y-m-d', strtotime($kuisHarian[0]['start_event'])));
                                        $selisih = $tanggal2-$tanggal1;
                                        $selisih=$selisih/60/60/24;
                                        echo $selisih>0 ? $selisih." hari lagi" : '&nbsp'; 
                                    } else { echo 'Lihat Kembali'; } ?>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="position-relative ml-3" style="width: 70%; overflow-x: auto; overflow-y: hidden; white-space: nowrap;">
                        <?php for ($i=1; $i<sizeof($kuisHarian); $i++) { ?>
                            <div class="w-50 mx-0 pr-3" style="display:inline-block; float: none;">
                                <?php if (!empty($kuisHarian[$i])) { ?>
                                    <div class="row border w-100 mx-0 mb-3 p-3" style="border-radius: 37px;">
                                        <div class="row bg-secondary position-relative border-20 w-50 mx-0 pr-2">
                                            <div class="bg-white position-absolute w-25 h-25 p-2" style="top: 0; right: 0; border-radius: 0 20px 0 20px;">
                                                <div class="row justify-content-center bg-primary border-10 h-100 mx-0 p-1">
                                                    <img src="<?= base_url() ?>/img/Aset/Asset 43.png" class="w-75" style="object-fit: contain;" />
                                                </div>
                                            </div>
                                            <img src="<?= base_url() ?>/img/Aset/Asset 13.png" class="border-50 w-100" style="object-fit: contain;" />
                                        </div>
                                        <div class="row align-items-center w-50 mx-0 pl-3">
                                            <h5 class="font-weight-bold text-capitalize mt-3 mb-0 w-100"><?= session('jurusan') ?></h5>
                                            <h5 class="font-weight-bold text-truncate mt-2 w-100 mb-0"><?= date('d F Y', strtotime($kuisHarian[$i]['start_event'])) ?></h5>
                                            <h6 class="text-truncate w-100"><?= $kuisHarian[$i]['title'] ?></h6>
                                            <a href="<?= base_url() ?>/kelasku/kuis/<?= $kuisHarian[$i]['id'] ?>/<?= $i+1 ?>" class="btn btn-primary text-white rounded-pill ml-auto px-3" 
                                                style="<?php if (substr($kuisHarian[$i]['start_event'],0,10)>date('Y-m-d')) echo " visibility: hidden;"; ?>">
                                                <?php if (date('y-m-d', strtotime($kuisHarian[$i]['start_event']))==date('y-m-d')) {
                                                    echo 'Ikuti Kuis';
                                                } elseif (date('y-m-d', strtotime($kuisHarian[$i]['start_event']))>date('y-m-d')) {
                                                    $tanggal1 = strtotime(date('Y-m-d'));
                                                    $tanggal2 = strtotime(date('Y-m-d', strtotime($kuisHarian[$i]['start_event'])));
                                                    $selisih = $tanggal2-$tanggal1;
                                                    $selisih=$selisih/60/60/24;
                                                    echo $selisih>0 ? $selisih." hari lagi" : '&nbsp'; 
                                                } else { echo 'Lihat Kembali'; } ?>
                                            </a>
                                        </div>
                                    </div>
                                <?php $i++; } ?>
                                <?php if (!empty($kuisHarian[$i])) { ?>
                                    <div class="row border w-100 mx-0 mb-3 p-3" style="border-radius: 37px;">
                                        <div class="row bg-secondary position-relative border-20 w-50 mx-0 pr-2">
                                            <div class="bg-white position-absolute w-25 h-25 p-2" style="top: 0; right: 0; border-radius: 0 20px 0 20px;">
                                                <div class="row justify-content-center bg-primary border-10 h-100 mx-0 p-1">
                                                    <img src="<?= base_url() ?>/img/Aset/Asset 43.png" class="w-75" style="object-fit: contain;" />
                                                </div>
                                            </div>
                                            <img src="<?= base_url() ?>/img/Aset/Asset 13.png" class="border-50 w-100" style="object-fit: contain;" />
                                        </div>
                                        <div class="row align-items-center w-50 mx-0 pl-3">
                                            <h5 class="font-weight-bold text-capitalize mt-3 mb-0 w-100"><?= session('jurusan') ?></h5>
                                            <h5 class="font-weight-bold text-truncate mt-2 w-100 mb-0"><?= date('d F Y', strtotime($kuisHarian[$i]['start_event'])) ?></h5>
                                            <h6 class="text-truncate w-100"><?= $kuisHarian[$i]['title'] ?></h6>
                                            <a href="<?= base_url() ?>/kelasku/kuis/<?= $kuisHarian[$i]['id'] ?>/<?= $i+1 ?>" class="btn btn-primary text-white rounded-pill ml-auto px-3" 
                                                style="<?php if (substr($kuisHarian[$i]['start_event'],0,10)>date('Y-m-d')) echo " visibility: hidden;"; ?>">
                                                <?php if (date('y-m-d', strtotime($kuisHarian[$i]['start_event']))==date('y-m-d')) {
                                                    echo 'Ikuti Kuis';
                                                } elseif (date('y-m-d', strtotime($kuisHarian[$i]['start_event']))>date('y-m-d')) {
                                                    $tanggal1 = strtotime(date('Y-m-d'));
                                                    $tanggal2 = strtotime(date('Y-m-d', strtotime($kuisHarian[$i]['start_event'])));
                                                    $selisih = $tanggal2-$tanggal1;
                                                    $selisih=$selisih/60/60/24;
                                                    echo $selisih>0 ? $selisih." hari lagi" : '&nbsp'; 
                                                } else { echo 'Lihat Kembali'; } ?>
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php }  else { ?>
                    <div class="row justify-content-center w-100 mx-0">
                        <h4 class="font-weight-bold">Belum ada jadwal kuis harian</h4>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="row w-100 mt-4 mx-0 pt-5">
            <h4 class="font-weight-bold w-100 my-auto pb-3">Kumpulan Latihan Soal</h4>
            <div class="row bg-primary border-30 w-100 mx-0 mt-4">
                <img src="<?= base_url() ?>/img/Aset/Asset 40.png" class="border-30 mt-5 pt-5" style="width: 40%; object-fit: contain;">
                <div class="row mx-0 my-5 px-2" style="width: 30%;">
                    <h5 class="text-white font-weight-bold w-100 pl-3">List Materi</h5>
                    <div class="row w-100 mx-0" style="max-height: 200px; overflow-y: auto;">
                        <div class="row w-100 mx-0 mt-3 pl-3">
                            <button id="button<?= $materis[0]['materi'] ?>" onclick="changeLatihan('<?= $materis[0]['materi'] ?>');" 
                                class="btn btn-link text-white font-weight-bold text-truncate bg-white text-dark border-10 py-1  buttonlatihan"><?= $materis[0]['materi'] ?></button>
                        </div>
                        <?php for($i=1; $i<sizeof($materis); $i++) { ?>
                            <div class="row w-100 mx-0 pl-3">
                                <button id="button<?= $materis[$i]['materi'] ?>" onclick="changeLatihan('<?= $materis[$i]['materi'] ?>');" 
                                    class="btn btn-link text-white font-weight-bold text-truncate py-1 buttonlatihan"><?= $materis[$i]['materi'] ?></button>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mx-0 my-5 pl-5 pr-2" style="width: 30%; max-height: 250px; overflow-y: auto;">
                    <h5 class="text-white font-weight-bold w-100 pl-3">Pilih Paket</h5>
                    <div class="row w-100 mx-0 mt-3 pl-3">
                        <?php if (session('kode-paket')!='6') { ?>
                            <a id="paket1" href="<?= base_url() ?>/kelasku/view_pdf/<?= $materis[0]['materi'] ?>-1.pdf" 
                                class="btn btn-link text-white font-weight-bold text-truncate">Paket 1</a>
                        <?php } else { ?>
                            <button class="btn btn-link text-white font-weight-bold text-truncate" onclick="hanyaTryout();">Paket 1</button>
                        <?php } ?>
                    </div>
                    <div class="row w-100 mx-0 pl-3">
                        <?php if (session('kode-paket')!='6') { ?>
                            <a id="paket2" href="<?= base_url() ?>/kelasku/view_pdf/<?= $materis[0]['materi'] ?>-2.pdf" 
                                class="btn btn-link text-white font-weight-bold text-truncate">Paket 2</a>
                        <?php } else { ?>
                            <button class="btn btn-link text-white font-weight-bold text-truncate" onclick="hanyaTryout();">Paket 2</button>
                        <?php } ?>
                    </div>
                    <div class="row w-100 mx-0 pl-3">
                        <?php if (session('kode-paket')!='6') { ?>
                            <a id="paket3" href="<?= base_url() ?>/kelasku/view_pdf/<?= $materis[0]['materi'] ?>-3.pdf" 
                                class="btn btn-link text-white font-weight-bold text-truncate">Paket 3</a>
                        <?php } else { ?>
                            <button class="btn btn-link text-white font-weight-bold text-truncate" onclick="hanyaTryout();">Paket 3</button>
                        <?php } ?>
                    </div>
                    <div class="row w-100 mx-0 pl-3">
                        <?php if (session('kode-paket')!='6') { ?>
                            <a id="paket4" href="<?= base_url() ?>/kelasku/view_pdf/<?= $materis[0]['materi'] ?>-4.pdf" 
                                class="btn btn-link text-white font-weight-bold text-truncate">Paket 4</a>
                        <?php } else { ?>
                            <button class="btn btn-link text-white font-weight-bold text-truncate" onclick="hanyaTryout();">Paket 4</button>
                        <?php } ?>
                    </div>
                    <div class="row w-100 mx-0 pl-3">
                        <?php if (session('kode-paket')!='6') { ?>
                            <button id="buttonMindMapping" onclick="openWindow('<?= $materis[0]['materi'] ?>');" 
                                class="btn btn-link text-white font-weight-bold text-truncate">Mind Mapping</button>
                        <?php } else { ?>
                            <button class="btn btn-link text-white font-weight-bold text-truncate" onclick="hanyaTryout();">Mind Mapping</button>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modalTryout" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin memulai try out? Waktu <span class="text-danger">akan terus berjalan</span> setelah Anda memulai try out.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white rounded" onclick="cancelTryout();">Tidak</button>
                    <button type="button" class="btn btn-primary rounded" id="yesButton" onclick="">Ya ( 10 )</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function switchColor(satu, dua, tiga="") {
            document.getElementById(satu).classList.remove("btn-light");
            document.getElementById(satu).classList.add("btn-primary");
            document.getElementById(dua).classList.remove("btn-primary");
            document.getElementById(dua).classList.add("btn-light");
            if (tiga!="") {
                document.getElementById(tiga).classList.remove("btn-primary");
                document.getElementById(tiga).classList.add("btn-light");
            }
        }

        function cekBolos() { 
            switchColor('buttonBolos', 'buttonSisa');
            divKelas = document.getElementById('divKelas');
            divKelas.innerHTML = '';
            <?php if (!empty($kelasBolos)) {
                foreach ($kelasBolos as $kelas) { ?>
                    divKelas.innerHTML+=`<div class="row align-content-center border-bottom w-100 ml-4 mr-0 mt-4 pb-2">
                                            <h6 style="font-size: 18px;" class="font-weight-bold w-100 mb-0"><?= $kelas['title'] ?></h6>
                                            <h6 style="font-size: 18px;" class="w-100 mb-0"><?php echo date('d F Y', strtotime($kelas['start_event'])) ?></h6>
                                        </div>`;
            <?php } } else { ?>
                divKelas.innerHTML=`<h5 class="font-weight-bold m-auto">Kamu belum pernah bolos kelas</h5>`;
            <?php } ?>
        }

        function cekSisa() {
            switchColor('buttonSisa', 'buttonBolos');
            divKelas = document.getElementById('divKelas');
            divKelas.innerHTML = '';
            <?php if (!empty($kelasDatang)) {
                foreach ($kelasDatang as $kelas) { ?>
                    divKelas.innerHTML+=`<div class="row align-content-center border-bottom w-100 ml-4 mr-0 mt-4 pb-2">
                                            <h6 style="font-size: 18px;" class="font-weight-bold w-100 mb-0"><?= $kelas['title'] ?></h6>
                                            <h6 style="font-size: 18px;" class="w-100 mb-0"><?php echo date('d F Y', strtotime($kelas['start_event'])) ?></h6>
                                        </div>`;
            <?php } } else { ?>
                divKelas.innerHTML=`<h5 class="font-weight-bold m-auto">Belum ada jadwal kelas selanjutnya</h5>`;
            <?php } ?>
        }

        function bumsChange(tahun) {
            if (tahun == '2021') {
                switchColor('bums2021', 'bums2022');
                document.getElementById('imgbums').src="<?= base_url() ?>/img/1.jpg";
                <?php if (session('kode-paket')!='1' && session('kode-paket')!='6') { ?>
                    document.getElementById('abums').href="<?= base_url() ?>/kelasku/view_pdf/ebook.pdf";
                <?php } ?>
            } else {
                switchColor('bums2022', 'bums2021');
                document.getElementById('imgbums').src="<?= base_url() ?>/img/2.jpg";
                <?php if (session('kode-paket')!='1' && session('kode-paket')!='6') { ?>
                    document.getElementById('abums').href="<?= base_url() ?>/kelasku/view_pdf/ebook2.pdf";
                <?php } ?>
            }
        }

        function changeJadwalTerdekat(type) {
            if (type=="kelas") {
                switchColor('buttonKelasVirtual', 'buttonTryOut', 'buttonKuisHarian');
                document.getElementById('divKelasVirtual').style.display="flex";
                document.getElementById('divTryOut').style.display="none";
                document.getElementById('divKuisHarian').style.display="none";
            } else if (type=="tryout") {
                switchColor('buttonTryOut', 'buttonKelasVirtual', 'buttonKuisHarian');
                document.getElementById('divTryOut').style.display="flex";
                document.getElementById('divKelasVirtual').style.display="none";
                document.getElementById('divKuisHarian').style.display="none";
            } else {
                switchColor('buttonKuisHarian', 'buttonTryOut', 'buttonKelasVirtual');
                document.getElementById('divKuisHarian').style.display="flex";
                document.getElementById('divTryOut').style.display="none";
                document.getElementById('divKelasVirtual').style.display="none";
            }
        }

        function changeLatihan(materi) {
            btns = document.getElementsByClassName('buttonlatihan');
            for (var i=0; i<btns.length; i++) {
                btns[i].className = btns[i].className.replace(" bg-white text-dark border-10", "");
            }
            btn = document.getElementById('button'+materi);
            btn.classList.add("bg-white");
            btn.classList.add("text-dark");
            btn.classList.add("border-10");
            document.getElementById('paket1').href="<?= base_url() ?>/kelasku/view_pdf/"+materi+"-1.pdf";
            document.getElementById('paket2').href="<?= base_url() ?>/kelasku/view_pdf/"+materi+"-2.pdf";
            document.getElementById('paket3').href="<?= base_url() ?>/kelasku/view_pdf/"+materi+"-3.pdf";
            document.getElementById('paket4').href="<?= base_url() ?>/kelasku/view_pdf/"+materi+"-4.pdf";
            document.getElementById('buttonMindMapping').setAttribute( "onClick", "javascript: openWindow('"+materi+"');" );
        }

        function hanyaTryout() {
            Swal.fire({icon: 'error', title: '', text: 'Fitur ini tidak tersedia untuk pilihan paketmu'});
        }

        function openWindow(materi) {
            window.open('<?= base_url() ?>/img/Mind Map/'+materi+'.pdf','popup','width=600,height=600');
            return false;
        }

        let counterNumber = 9;

        let counter;

        function modalTryout(id) {
            $('#modalTryout').modal('show');
            counter = setInterval(function() {
                document.getElementById('yesButton').innerHTML=`Ya ( ${counterNumber} )`;
                $("#yesButton").attr("onclick","window.location.replace('<?= base_url() ?>/peserta/tryout/"+id+"');");

                if (counterNumber<0) {
                    clearInterval(counter);
                    document.getElementById('yesButton').innerHTML=`Ya ( 0 )`;
                    window.location.replace("<?= base_url() ?>/peserta/tryout/"+id);
                }
                
                counterNumber--;
            }, 1000);
        }

        function cancelTryout() {
            clearInterval(counter);
            counterNumber = 9;
            $('#modalTryout').modal('hide');
            document.getElementById('yesButton').innerHTML=`Ya ( 10 )`;
        }
    </script>
</div>
<?= $this->endSection(); ?>