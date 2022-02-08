<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0 py-3">
    <div class="row position-relative mx-auto mt-5" style="width: 80%;">
        <div class="w-75 pr-3 mx-0">
            <div class="row justify-content-between mx-0">
                <h5 style="font-size:1.3rem;" class="font-weight-bold my-auto">Mau belajar apa hari ini?</h5>
                <div class="border border-30 p-1">
                    <button id="tombolcari" class="btn bg-white border-right py-1" style="border-radius:30px 0 0 30px;">
                        <span class="fas fa-search text-secondary mb-0"></span>
                    </button>
                    <input id="cari" type="text" class="border-0 border-30 px-3 py-1" style="min-width: 250px;" id="cari" aria-describedby="cariHelp" placeholder="Search...">
                </div>
            </div>
            <div id="hasilPencarian" class="row w-100 mx-0 mt-4">
                <div id="video-materi" class="w-100 mx-0"></div>
                <div id="rekaman-kelas" class="w-100 mx-0 mt-4"></div>
                <div id="latihan-soal" class="w-100 mx-0 mt-4 mb-4"></div>
            </div>
            <div class="row bg-primary mx-0 mt-4" style="border-radius: 37px;">
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
            <div class="row mx-0 mt-5">
                <div class="row justify-content-between w-100 mx-0 mb-4">
                    <h5 style="font-size:1.3rem;" class="font-weight-bold align-middle">Status Kelas</h5>
                    <a class="text-primary font-weight-bold" style="font-size: 14px;" href="<?= base_url() ?>/kelasku/#statusKelas">View all</a>
                </div>
                <div class="row align-items-stretch justify-content-between w-100 mx-0">
                    <div class="pr-1" style="width:33%;">
                        <div class="row align-content-center bg-primary border-30 h-100 mx-0 px-3 py-4">
                            <div class="row align-content-center justify-content-center bg-white mx-0 p-2" style="width: 60px; height: 60px; border-radius: 15px;">
                                <h4 class="text-center mb-0 p-2">
                                    <?= (session('kode-paket')!='1' && session('kode-paket')!='6') ? $bolos : '0' ?>
                                </h4>
                            </div>
                            <h6 class="text-white my-auto pl-3" style="width: 60%;">Jumlah kelas tidak kamu ikuti</h6>
                        </div>
                    </div>
                    <div class="px-1" style="width:33%;">
                        <div class="row align-content-center border border-30 h-100 mx-0 px-3 py-4">
                            <div class="row align-content-center justify-content-center bg-secondary mx-0 p-2" style="width: 60px; height: 60px; border-radius: 15px;">
                                <h4 class="text-center mb-0 p-2">
                                    <?= (session('kode-paket')!='1' && session('kode-paket')!='6') ? $sisa : '0' ?>
                                </h4>
                            </div>                                
                            <h6 class="mb-0 my-auto pl-3" style="width: 60%;">Jumlah kelas tersisa</h6>
                        </div>
                    </div>
                    <div class="dropdown pl-1" style="width:33%;">
                        <button type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            class="d-flex align-content-center btn bg-white border border-30 w-100 h-100 mx-0 px-3 py-4">
                            <div class="row align-content-center justify-content-center bg-secondary my-auto mx-0" style="width: 60px; height: 60px; border-radius: 15px;">
                                <h4 class="text-center border-10 mb-0 p-2">
                                    <i class="far fa-bell"></i>
                                </h4>
                            </div>
                            <div class="text-left pl-3 my-auto" style="width: 60%;">
                                <h6 class="font-weight-bold mb-1">Reminder</h6>
                                <?php if ($catatan['catatan'] == '') { ?>
                                    <h6 id="tanggal1" class="text-primary w-100 mb-1"></h6>
                                    <h6 id="catatan1" class="text-primary w-100 mb-1">Atur</h6>
                                <?php } else { ?>
                                    <h6 id="tanggal1" class="text-primary w-100 mb-1">
                                        <?php
                                            $tanggal1 = strtotime(date('y-m-d'));
                                            $tanggal2 = strtotime(date('y-m-d', strtotime($catatan['tanggal'])));
                                            $h = $tanggal2 - $tanggal1;
                                            if ($h == 0) {
                                                echo "hari ini";
                                            } else if ($h > 0) {
                                                echo ($h/60/60/24)." hari lagi";
                                            } else {
                                                echo "Sudah lewat hari";
                                            }
                                        ?>
                                    </h6>
                                    <h6 id="catatan1" class="text-primary w-100 mb-1"><?= $catatan['catatan'] ?></h6>
                                <?php } ?>
                            </div>
                        </button>
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
            <div class="row mx-0 mt-5">
                <div class="row justify-content-between w-100 mx-0 mb-4">
                    <h5 style="font-size:1.3rem;" class="font-weight-bold align-middle">Jadwal Terdekat</h5>
                    <a class="text-primary font-weight-bold" style="font-size: 14px;" href="<?= base_url() ?>/kelasku/#jadwalKeseluruhan">View all</a>
                </div>
                <div class="row align-items-stretch justify-content-between w-100 mx-0">
                    <div class="pr-1" style="width: 33%;">
                        <div class="row border mx-0 p-3" style="border-radius: 37px;">
                            <div class="row
                                <?php if(!empty($meetingDate) && date('Y-m-d') == date('Y-m-d', strtotime($meetingDate['start_event']))) {
                                    echo "bg-primary";
                                } else {
                                    echo "bg-secondary";
                                } ?> border-30 position-relative mx-0">
                                <div class="bg-white position-absolute w-25 h-25 p-2" style="top: 0; right: 0; border-radius: 0 20px 0 20px;">
                                    <div class="row justify-content-center bg-primary h-100 mx-0 p-1" style="border-radius: 15px;">
                                        <img src="<?= base_url() ?>/img/Aset/Asset 45.png" class="w-75" style="object-fit: contain;" />
                                    </div>
                                </div>
                                <img src="<?= base_url() ?>/img/Aset/Asset 11.png" class="border-50 w-100" style="object-fit: contain;" />
                            </div>
                            <h5 class="font-weight-bold mt-4 ml-2 w-100">Zoom Meeting</h5>
                            <h6 class="w-100 ml-2"><?= (!empty($meetingDate)) ? $meetingDate['title'] : "&nbsp"; ?></h6>
                            <div class="row justify-content-end w-100 mx-0 mt-5">
                                <a class="btn btn-primary text-white rounded-pill px-4"
                                    <?php if(empty($meetingDate)) :?>
                                        style="visibility:hidden;"
                                    <?php elseif(date('Y-m-d') == date('Y-m-d', strtotime($meetingDate['start_event']))) : ?>
                                        href="<?= base_url() ?>/peserta/hadir/<?php echo (!empty($meetingDate)) ? $meetingDate['id'] : ''; ?>"
                                    <?php endif; ?>
                                    >
                                    <?php if($meetingDate!=null) {
                                        $tanggal1 = strtotime(date('Y-m-d'));
                                        $tanggal2 = strtotime(date('Y-m-d', strtotime($meetingDate['start_event'])));
                                        $selisih = $tanggal2-$tanggal1;
                                        $selisih=$selisih/60/60/24;
                                        echo $selisih==0 ? "Join Now" : $selisih." hari lagi";
                                    } else { echo "-"; } ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="px-1" style="width: 33%;">
                        <div class="row border mx-0 p-3" style="border-radius: 37px;">
                            <div class="row
                                <?php if(!empty($jadwalTo) && date('Y-m-d') == date('Y-m-d', strtotime($jadwalTo['start_event']))) {
                                    echo "bg-primary";
                                } else {
                                    echo "bg-secondary";
                                } ?> border-30 position-relative mx-0">
                                <div class="bg-white position-absolute w-25 h-25 p-2" style="top: 0; right: 0; border-radius: 0 20px 0 20px;">
                                    <div class="row justify-content-center bg-primary h-100 mx-0 p-1" style="border-radius: 15px;">
                                        <img src="<?= base_url() ?>/img/Aset/Asset 44.png" class="w-75" style="object-fit: contain;" />
                                    </div>
                                </div>
                                <img src="<?= base_url() ?>/img/Aset/Asset 14.png" class="border-50 w-100" style="object-fit: scale-down;" />
                            </div>
                            <h5 class="font-weight-bold mt-4 ml-2 w-100">Try Out</h5>
                            <h6 class="w-100 ml-2"><?= (!empty($jadwalTo)) ? $jadwalTo['title'] : "&nbsp"; ?></h6>
                            <div class="row justify-content-end w-100 mx-0 mt-5">
                                <a class="btn btn-primary h6 rounded-pill px-4"
                                    <?php if(empty($jadwalTo)) :?>
                                        style="visibility:hidden;"
                                    <?php elseif(date('Y-m-d') == date('Y-m-d', strtotime($jadwalTo['start_event']))) : ?>
                                        href="<?= base_url() ?>/peserta/tryout/<?php echo (!empty($jadwalTo)) ? $jadwalTo['id'] : ""; ?>"
                                    <?php endif; ?>
                                    >
                                    <?php if(!empty($jadwalTo)) {
                                        $tanggal1 = strtotime(date('Y-m-d'));
                                        $tanggal2 = strtotime(date('Y-m-d', strtotime($jadwalTo['start_event'])));
                                        $selisih = $tanggal2-$tanggal1;
                                        $selisih=$selisih/60/60/24;
                                        echo $selisih==0 ? "Join Now" : $selisih." hari lagi";
                                    } else { echo "-"; } ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="pl-1" style="width: 33%;">
                        <div class="row border mx-0 p-3" style="border-radius: 37px;">
                            <div class="row
                                <?php if(!empty($kuis) && date('Y-m-d') == date('Y-m-d', strtotime($kuis['start_event']))) {
                                    echo "bg-primary";
                                } else {
                                    echo "bg-secondary";
                                } ?> border-30 position-relative mx-0">
                                <div class="bg-white position-absolute w-25 h-25 p-2" style="top: 0; right: 0; border-radius: 0 20px 0 20px;">
                                    <div class="row justify-content-center bg-primary h-100 mx-0 p-1" style="border-radius: 15px;">
                                        <img src="<?= base_url() ?>/img/Aset/Asset 43.png" class="w-75" style="object-fit: contain;" />
                                    </div>
                                </div>
                                <img src="<?= base_url() ?>/img/Aset/Asset 13.png" class="border-50 w-100" style="object-fit: scale-down;" />
                            </div>
                            <h5 class="font-weight-bold mt-4 ml-2 w-100">Kuis Harian</h5>
                            <h6 class="w-100 ml-2"><?= (!empty($kuis)) ? $kuis['title'] : "&nbsp"; ?></h6>
                            <div class="row justify-content-end w-100 mx-0 mt-5">
                                <a class="btn btn-primary h6 rounded-pill px-4"
                                    <?php if(empty($kuis)) :?>
                                        style="visibility:hidden;"
                                    <?php elseif(date('Y-m-d') == date('Y-m-d', strtotime($kuis['start_event']))) : ?>
                                        href="<?= base_url() ?>/kelasku/kuis/<?php echo (!empty($kuis['event_id'])) ? $kuis['event_id'] : 'none'; ?>/<?= $pertKuis ?>"
                                    <?php endif; ?>
                                    >
                                    <?php if(!empty($kuis)) {
                                        $tanggal1 = strtotime(date('Y-m-d'));
                                        $tanggal2 = strtotime(date('Y-m-d', strtotime($kuis['start_event'])));
                                        $selisih = $tanggal2-$tanggal1;
                                        $selisih=$selisih/60/60/24;
                                        echo $selisih==0 ? "Join Now" : $selisih." hari lagi";
                                    } else { echo "-"; } ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-primary border-50 position-relative mx-0 mt-4 p-4">
                <div class="row justify-content-end w-100 mx-0 mb-4">
                    <a href="<?= base_url() ?>/materi/materi/<?= $rekomendasi[0]['id'] ?>/1#vid" 
                        class="btn btn-primary border-white font-weight-bold rounded-pill mb-0" style="border-width: 2px; padding: 10px 20px;">View More</a>
                </div>

                <div class="row w-100 mx-0 px-5 pb-5">
                    <h2 class="text-white font-weight-bold w-100 mb-3">Rekomendasi Belajar</h2>
                    <h4 class="text-white font-weight-bold mb-2" style="width: 60%;"><?= $rekomendasi[0]['materi'] ?></h4>
                    <h5 class="text-white w-100 mt-2">Kelas <?= $rekomendasi[0]['kelas'] ?></h5>
                </div>

                <div class="row w-50 mx-0 my-5 px-5">
                    <img src="<?= base_url() ?>/img/Aset/Asset 2.png" class="pr-2" style="width: 20%; object-fit:contain">
                    <h5 class="text-white w-50 my-auto" style="width: 80%;">Bagian 1</h5>
                </div>

                <img src="<?= base_url() ?>/img/Aset/Asset 39.png" class="position-absolute" style="width: 60%; bottom: 0; right: 0;">
            </div>
        </div>
        <div class="position-absolute mx-0" style="left: 77%; width: 20%;">
            <div class="row bg-primary border-30 px-4 py-4">
                <div class="row justify-content-between w-100 mx-0 mt-2" style="height: 32px;">
                    <h5 class="text-white font-weight-bold mb-2">Pemahamanmu</h5>
                    <a href="<?= base_url() ?>/peserta/nilai">
                        <img src="<?= base_url() ?>/img/Aset/Asset 2.png" style="height: 24px; object-fit:contain;">
                    </a>
                </div>
                <div class="row w-100 mx-0 mb-2">
                    <?php if (!empty($nilai)) { $i=0; foreach ($nilai as $n) { ?>
                        <div class="row justify-content-center w-100 mt-3 mx-0">
                            <div class="bg-white h-100" style="width: 20%; border-radius: 15px;"></div>
                            <div class="pl-2 py-1" style="width: 80%;">
                                <div class="row justify-content-between w-100 mx-0">
                                    <h6 class="text-white text-truncate w-75" style="font-size: 14px;"><?= $n['materi'] ?></h6>
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
            <div class="row mt-4 mb-5 px-3">
                <div class="row justify-content-between w-100 mx-0 mt-3">
                    <h5 class="font-weight-bold align-middle">Online</h5>
                    <a class="text-primary font-weight-bold" style="font-size: 14px;" href="<?= base_url() ?>/peserta/profil">View all</a>
                </div>
                <div class="row mx-0 mt-3" style="height: 200px; overflow-y:auto;">
                    <?php foreach ($others as $other) : ?>
                        <a href="<?= base_url() ?>/peserta/profil/<?= $other['username'] ?>" class="d-flex aling-content-center rounded position-relative w-100 mb-2">
                            <div class="row align-content-center justify-content-center mx-0" style="width: 20%;">
                                <img src="<?= base_url() ?>/img/profil/<?= $other['username'] ?>.jpg" alt="" class="bg-white border-30" style="object-fit:cover; width: 40px; height: 40px;" onerror="this.src='<?= base_url() ?>/img/profil.png'">
                            </div>
                            <div class="row align-content-center mx-0" style="width: 80%;">
                                <h6 class="font-weight-bold text-truncate w-100 ml-2 mb-0" style="font-size: 14px; color: #12336D;"><?= $other['nama'] ?></h6>
                                <h6 class="text-truncate text-capitalize ml-2 mb-0" style="font-size: 14px; color: #12336D;"><?= $other['jurusan'] ?></h6>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <?php if ($panduan) { ?>
        <div class="modal fade" id="panduanModal" style="display: block;">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" style="height: 90vh; overflow-y: auto;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Panduan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="10000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row w-100 mx-0">
                                        <div class="pr-2" style="width: 30%;">
                                            <div class="row border border-30 w-100 mx-0 p-3">
                                                <img src="<?= base_url() ?>/img/panduan/01.png" class="w-100">
                                                <h6 class="font-weight-bold mt-4">Cek Pemahamanmu</h6>
                                                <h6>Kamu bisa melihat ringkasan laporan pemahamanmu yang telah diurutkan berdasarkan 3 pemahaman yang paling rendah atau bisa klik button next untuk ;aporan yang lebih rinci</h6>
                                            </div>
                                        </div>
                                        <div class="pl-2" style="width: 70%;">
                                            <img src="<?= base_url() ?>/img/panduan/Asset 1.png" class="w-100">
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row w-100 mx-0">
                                        <div class="pr-2" style="width: 30%;">
                                            <div class="row border border-30 w-100 mx-0 p-3">
                                                <img src="<?= base_url() ?>/img/panduan/02.png" class="w-100">
                                                <h6 class="font-weight-bold mt-4">Online</h6>
                                                <h6>Kamu bisa melihat pengguna yang sedang online, jika kamu mengklik namanya maka akan langsung diarahkan ke WhatsApp. Fitu ini dapat mempermudahmu untuk berinteraksi dengan teman iclass lainnya</h6>
                                            </div>
                                        </div>
                                        <div class="pl-2" style="width: 70%;">
                                            <img src="<?= base_url() ?>/img/panduan/Asset 2.png" class="w-100">
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row w-100 mx-0">
                                        <div class="pr-2" style="width: 30%;">
                                            <div class="row border border-30 w-100 mx-0 p-3">
                                                <img src="<?= base_url() ?>/img/panduan/03.png" class="w-100">
                                                <h6 class="font-weight-bold mt-4">BUSM Polstat STIS</h6>
                                                <h6>Kamu bisa mengakses BUSM yang telah disusun berdasarkan riset soal USM Polstat STIS selama 10 tahun kebelakang di halaman kelasku. Terdapat dua jenis BUSM yang tersedia yaitu BUSM 2021 dan BUSM 2022</h6>
                                            </div>
                                        </div>
                                        <div class="pl-2" style="width: 70%;">
                                            <img src="<?= base_url() ?>/img/panduan/Asset 3.png" class="w-100">
                                        </div>
                                    </div>
                                </div><div class="carousel-item">
                                    <div class="row w-100 mx-0">
                                        <div class="pr-2" style="width: 30%;">
                                            <div class="row border border-30 w-100 mx-0 p-3">
                                                <img src="<?= base_url() ?>/img/panduan/04.png" class="w-100">
                                                <h6 class="font-weight-bold mt-4">Jadwal Kelas, Kuis, dan Try Out</h6>
                                                <h6>Kamu bisa melihat jadwal terdekatmu di halaman beranda. Kamu juga bisa melihat kelas yang tidak kamu ikuti, jumlah kelas tersisa, dan reminder. Kamu juga bisa melihat di halaman kelasku untuk jadwal dan status kelas yang lebih rinci</h6>
                                            </div>
                                        </div>
                                        <div class="pl-2" style="width: 70%;">
                                            <img src="<?= base_url() ?>/img/panduan/Asset 4.png" class="w-100">
                                        </div>
                                    </div>
                                </div><div class="carousel-item">
                                    <div class="row w-100 mx-0">
                                        <div class="pr-2" style="width: 30%;">
                                            <div class="row border border-30 w-100 mx-0 p-3">
                                                <img src="<?= base_url() ?>/img/panduan/05.png" class="w-100">
                                                <h6 class="font-weight-bold mt-4">Edit Profilmu</h6>
                                                <h6>Kamu bisa mengedit profilmu mulai dari identitas seperti nama, jenis kelamin, hingga akun sosmed. Selain itu kamu juga bisa melakukan upgrade paket secara otomatis pada halaman ini</h6>
                                            </div>
                                        </div>
                                        <div class="pl-2" style="width: 70%;">
                                            <img src="<?= base_url() ?>/img/panduan/Asset 5.png" class="w-100">
                                        </div>
                                    </div>
                                </div><div class="carousel-item">
                                    <div class="row w-100 mx-0">
                                        <div class="pr-2" style="width: 30%;">
                                            <div class="row border border-30 w-100 mx-0 p-3">
                                                <img src="<?= base_url() ?>/img/panduan/06.png" class="w-100">
                                                <h6 class="font-weight-bold mt-4">Latihan Soal</h6>
                                                <h6>Kamu bisa mengakses mind mapping dan kumpulan soal yang tersedia dalam 4 paket serta pembahasannya pada halaman kelasku</h6>
                                            </div>
                                        </div>
                                        <div class="pl-2" style="width: 70%;">
                                            <img src="<?= base_url() ?>/img/panduan/Asset 6.png" class="w-100">
                                        </div>
                                    </div>
                                </div><div class="carousel-item">
                                    <div class="row w-100 mx-0">
                                        <div class="pr-2" style="width: 30%;">
                                            <div class="row border border-30 w-100 mx-0 p-3">
                                                <img src="<?= base_url() ?>/img/panduan/07.png" class="w-100">
                                                <h6 class="font-weight-bold mt-4">Search</h6>
                                                <h6>Kini kamu bisa mencari video belajar, latihan soal, mind mapping, hingga rekaman kelas pada kolom search yang tersedia pada halaman beranda</h6>
                                            </div>
                                        </div>
                                        <div class="pl-2" style="width: 70%;">
                                            <img src="<?= base_url() ?>/img/panduan/Asset 7.png" class="w-100">
                                        </div>
                                    </div>
                                </div><div class="carousel-item">
                                    <div class="row w-100 mx-0">
                                        <div class="pr-2" style="width: 30%;">
                                            <div class="row border border-30 w-100 mx-0 p-3">
                                                <img src="<?= base_url() ?>/img/panduan/08.png" class="w-100">
                                                <h6 class="font-weight-bold mt-4">Rekomendasi Belajar</h6>
                                                <h6>Fitur ini dirancang khusus untuk kamu agar lebih mudah dalam memahami kembali materi yang kurang kamu kuasai</h6>
                                            </div>
                                        </div>
                                        <div class="pl-2" style="width: 70%;">
                                            <img src="<?= base_url() ?>/img/panduan/Asset 8.png" class="w-100">
                                        </div>
                                    </div>
                                </div><div class="carousel-item">
                                    <div class="row w-100 mx-0">
                                        <div class="pr-2" style="width: 30%;">
                                            <div class="row border border-30 w-100 mx-0 p-3">
                                                <img src="<?= base_url() ?>/img/panduan/09.png" class="w-100">
                                                <h6 class="font-weight-bold mt-4">Ruang Belajar</h6>
                                                <h6>Pada halaman ruang belajar, kamu bisa memilih akan belajar materi kelas berapa dan tersedia juga rekaman kelas serta latihan soal dari setiap sub materi</h6>
                                            </div>
                                        </div>
                                        <div class="pl-2" style="width: 70%;">
                                            <img src="<?= base_url() ?>/img/panduan/Asset 9.png" class="w-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <h4 class="fas fa-chevron-circle-left text-dark" aria-hidden="true"></h4>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <h4 class="fas fa-chevron-circle-right text-dark" aria-hidden="true"></h4>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $("#panduanModal").modal('show');
            });
        </script>
    <?php } ?>
        <script>
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
                            materi.innerHTML=`<h6 class="text-white font-weight-bold w-100">Video Materi - ${res['materi'][0]['materi']}</h6>`;
                            ubahMateri(res.materi[0], res.tingkatan);
                        } else {
                            materi.innerHTML=`<h6 class="text-white font-weight-bold w-100">Video Materi</h6>`;
                            materi.innerHTML+=`<h6 class="text-white font-weight-bold w-100">-</h6>`;
                        }

                        if (res['rekaman'].length != 0) {
                            rekaman.innerHTML=`<h6 class="text-white font-weight-bold w-100">Rekaman Kelas - ${res['rekaman'][0]['materi']}</h6>`;
                            ubahRekaman(res['rekaman']);
                        } else {
                            rekaman.innerHTML=`<h6 class="text-white font-weight-bold w-100">Rekaman Kelas</h6>`;
                            rekaman.innerHTML+=`<h6 class="text-white font-weight-bold w-100">-</h6>`;
                        }

                        if (res['materi'].length != 0 && res['materi'][0]['latihan'].length != 0) {
                            latihan.innerHTML=`<h6 class="text-white font-weight-bold w-100">Latihan Soal - ${res['materi'][0]['materi']}</h6>`;
                            ubahLatihan(res['materi'][0], res['mindmap']);
                        } else {
                            latihan.innerHTML=`<h6 class="text-white font-weight-bold w-100">Latihan Soal</h6>`;
                            latihan.innerHTML+=`<h6 class="text-white font-weight-bold w-100">-</h6>`;
                        }
                    }
                });
            });
            
            document.getElementById('cari').addEventListener('keypress', function(e){
                if (e.key === 'Enter') {
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
                                materi.innerHTML=`<h6 class="text-white font-weight-bold w-100">Video Materi - ${res['materi'][0]['materi']}</h6>`;
                                ubahMateri(res.materi[0], res.tingkatan);
                            } else {
                                materi.innerHTML=`<h6 class="text-white font-weight-bold w-100">Video Materi</h6>`;
                                materi.innerHTML+=`<h6 class="text-white font-weight-bold w-100">-</h6>`;
                            }
    
                            if (res['rekaman'].length != 0) {
                                rekaman.innerHTML=`<h6 class="text-white font-weight-bold w-100">Rekaman Kelas - ${res['rekaman'][0]['materi']}</h6>`;
                                ubahRekaman(res['rekaman']);
                            } else {
                                rekaman.innerHTML=`<h6 class="text-white font-weight-bold w-100">Rekaman Kelas</h6>`;
                                rekaman.innerHTML+=`<h6 class="text-white font-weight-bold w-100">-</h6>`;
                            }
    
                            if (res['materi'].length != 0 && res['materi'][0]['latihan'].length != 0) {
                                latihan.innerHTML=`<h6 class="text-white font-weight-bold w-100">Latihan Soal - ${res['materi'][0]['materi']}</h6>`;
                                ubahLatihan(res['materi'][0], res['mindmap']);
                            } else {
                                latihan.innerHTML=`<h6 class="text-white font-weight-bold w-100">Latihan Soal</h6>`;
                                latihan.innerHTML+=`<h6 class="text-white font-weight-bold w-100">-</h6>`;
                            }
                        }
                    });
                }
            })

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
                materi.innerHTML=`<h6 class="font-weight-bold w-100">Video Materi</h6>`;
                console.log(res);
                for (let i=1; i<=parts; i++) {
                    materi.innerHTML+=`<a class="text-dark pr-3 py-2" style="width: 25%; display:inline-block; float: none;"
                                            href="<?= base_url() ?>/materi/materi/${res['id']}/${i}#vid">
                                            <div class="row align-content-center bg-secondary border-20 position-relative w-100 mx-0 px-4" style="height: 150px;">
                                                <img src="<?= base_url() ?>/img/Aset/Asset 33.png" style="width: 15%; position: absolute; right: 10px; bottom: 10px;">
                                            </div>
                                            <h6 class="font-weight-bold text-truncate w-100 mt-4 mb-0 px-2">${res['materi']} - ${i}</h6>
                                        </a>`;
                }
            }

            function ubahRekaman(res) {
                let rek = res[0]['parts'].split(',');
                document.getElementById('rekaman-kelas').innerHTML=`<h6 class="font-weight-bold w-100">Rekaman Kelas</h6>`;
                for (let k=1; k<=rek.length; k++) {
                    document.getElementById('rekaman-kelas').innerHTML+=`<a class="text-dark pr-3 py-2" style="width: 25%; display:inline-block; float: none;"
                                                                            href="<?= base_url() ?>/materi/rekaman/${res[0]['id']}/${k}#vid">
                                                                            <div class="row align-content-center bg-secondary border-20 position-relative w-100 mx-0 px-4" style="height: 150px;">
                                                                                <img src="<?= base_url() ?>/img/Aset/Asset 33.png" style="width: 15%; position: absolute; right: 10px; bottom: 10px;">
                                                                            </div>
                                                                            <h6 class="font-weight-bold text-truncate w-100 mt-4 mb-0 px-2">${res[0]['materi']}</h6>
                                                                        </a>`;
                }
            }

            function ubahLatihan(res, mindmap) {
                const latihan = document.getElementById('latihan-soal');
                latihan.innerHTML=`<h6 class="font-weight-bold w-100">Latihan Soal</h6>`;
                for (let j=0; j<4; j++) {
                    latihan.innerHTML+=`<a <?php if (session('kode-paket')!='6') { ?> href="<?= base_url() ?>/kelasku/view_pdf/${res['materi']}-${j+1}.pdf"
                                            <?php } else { ?> onclick="hanyaTryout();" <?php } ?>
                                            class="btn btn-link bg-primary border-20 mt-3 mr-3 px-3 py-3" style="width: 30%">
                                            <h6 class="text-white text-center font-weight-bold w-100 mx-auto mb-0">Soal dan Pembahasan ${j+1}</h6>
                                        </a>`;
                }
                <?php if (session('kode-paket') != '1' && session('kode-paket') != '6') : ?>
                    if (mindmap.length != 0) {
                        latihan.innerHTML+=`<a onclick="<?php if (session('kode-paket')=='6') { ?> hanyaTryout(); <?php } else { ?> openWindow('${mindmap[0]['materi']}'); <?php } ?>"
                                                target="popup" class="btn btn-link bg-primary border-20 mt-3 mr-3 px-3 py-3" style="width: 30%">
                                                <h6 class="text-white text-center font-weight-bold w-100 mx-auto mb-0">Mind mapping - ${mindmap[0]['materi']}</h6>
                                            </a>
                                            <a <?php if (session('kode-paket')!='6') { ?> 
                                                href="<?= base_url() ?>/kelasku/view_pdf/ebook2.pdf"
                                                <?php } else { ?>
                                                hanyaTryout();
                                                <?php } ?>
                                                class="btn btn-link bg-primary border-20 mt-3 mr-3 px-3 py-3" style="width: 30%">
                                                <h6 class="text-white text-center font-weight-bold w-100 mx-auto mb-0">Ebook</h6>
                                            </a>`;
                    }
                <?php endif; ?>
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
            
            <?php if (session('kode-paket')=='6') { ?>
                function hanyaTryout() {
                    Swal.fire({icon: 'error', title: '', text: 'Fitur ini tidak tersedia untuk pilihan paketmu'});
                }
            <?php } else { ?>
                function openWindow(aHref) {
                    window.open('<?= base_url() ?>/img/Mind Map/'+aHref+'.pdf','popup','width=600,height=600');
                    return false;
                }
            <?php } ?>
        </script>
    </div>
</div>
<?php if (session()->has('salah')) : ?>
    <?= session()->salah; ?>
<?php endif; ?>
<?= session()->flash; ?>
<?= $this->endSection(); ?>