<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0">
    <div id="fullPage" class="mnya-5">

        <!-- About -->
        <div id="section0" class="section active">
            <div class="row d-flex border-20 mx-0 mt-3 px5 py5" style="background-image: linear-gradient(113deg, #0095ec, #005ccb); padding-top: 100px;">
                <div class="w-50 d-flex flex-column justify-content-center align-items-start px-3" id="tentang">
                    <h1 class="font-weight-bold display-4 mb-0 judul"><span class="text-white ml-0">Kelas</span></h1>
                    <h1 class="font-weight-bold display-4 mt-0 judul"><span class="text-white ml-0">Virtualmu</span></h1>
                    <p class="w-100 h5 text-white mt-1 mb-0 fs-12" id="deskripsi1">Tau gak sih kalau pendaftar USM Polstat STIS tahun ini mencapai 24.002 peserta? Itu artinya kamu harus jadi yang terbaik dari setiap 400 peserta lainnya</p>
                    <p class="w-100 h5 text-white font-weight-bold mb-0 pt5 fs-12" id="deskripsi1">Ayo curi start dan siapkan dirimu dari sekarang dengan bergabung bersama kami.</p>
                    <div class="w-100 pt5">    
                        <a href="#section2" class="btn btn-warning sm mr-3 mt-2"><span class="font-weight-bold h6 px-4 fs-12">Selengkapnya</span></a>
                        <a href="<?= base_url(); ?>/auth/daftar" class="btn btn-warning mt-2"><span class="font-weight-bold h6 px-4 fs-12">Daftar Sekarang</span></a>
                    </div>
                </div>
                <div class="w-50 d-flex justify-content-center align-items-center flex-1">
                    <img id="imgsection0" class="w-100" style="height: auto; max-height: 100%;" src="img/Aset/Asset 3@300x.png" alt="...">
                </div>
            </div>
        </div>

        <div id="section1" class="section">
            <div class="row mx-0 mt5">
                <div class="w-100 border-20 h-50 d-flex justify-content-center px5 py5" style="background-image: linear-gradient(150deg, #0095ec, #12336D);">
                    <div class="d-flex justify-content-center align-self-center w-50 py-4" style="heigth: 100%;">
                        <img src="<?= base_url() ?>/img/Aset/Asset 4@300x.png" alt="" class="position-relative" style="width: 300px; height: auto; z-index: 5000; vertical-align: middle;">
                    </div>    
                    <div class="w-50 py-4" style="heigth: 100%;">
                        <h1 class="text-white font-weight-bold position-relative judul" style="z-index: 5000;">Kenali potensimu</h1>
                        <p class="text-white h5 position-relative my5 fs-12" style="width: 85%; z-index: 5000;">Di iClass kamu bisa <span class="font-weight-bold">monitoring hasil belajarmu</span>. Kira-kira materi apa yang belum kamu kuasai dan metode belajar seperti apa yang paling tepat untukmu. Hal itu akan sangat berguna untuk mengevaluasi hasil belajarmu selama ini.</p>
                    </div>
                </div>
                <div class="w-66 h-50 mt5 px-3">
                    <div class="w-100 mx-auto my5 py5">
                        <h1 class="font-weight-bold mx-auto" style="width: 70%; color: #12336D;">Banyak tugas tapi gatau mau nanya siapa?</h1>
                        <p class="h5 mx-auto my5" style="width: 70%; color: #12336D;">Tenang, di iClass kamu akan mendapatkan layanan konsultasi via WhatsApp 24 jam. Konsultasi bebas mengenai materi, soal, maupun seputar Politeknik Statistika STIS</p>
                    </div>
                </div>
                <div class="w-34 border-20 h-50 mt5 px-0 py5" style="background-image: linear-gradient(113deg, #005ccb, #0095ec);">
                    <div class="row justify-content-center align-self-center h-100 px5 py-3">
                        <img src="<?= base_url() ?>/img/Aset/Asset 5@300x.png" alt="" class="position-relative" style="width: 300px; height: auto;">
                    </div>
                </div>
            </div>
        </div>

        <div id="section2" class="section">
            <div class="row justify-content-between mx-0 mt5">
                <div class="w-33">
                    <div class="w-100 h-100 border-20 py-3" style="background-image: linear-gradient(113deg, #005ccb, #0095ec);">
                        <div class="row mx-0 p-3">
                            <img src="<?= base_url() ?>/img/Aset/Asset 6@300x.png" alt="" class="position-relative mx-auto" style="height: 175px;">
                        </div>
                        <div class="row mx-0 px-4">
                            <h5 class="position-relative text-white font-weight-bold w-100 mx-auto">Ratusan Video Pembelajaran</h5>
                            <p class="position-relative text-white w-100 mx-auto">Video materi yang dapat diakses selama 24 jam dan disertai dengan contoh soal yang interaktif dapat membuat kalian tidak bosan untuk belajar mandiri.</p>
                        </div>
                    </div>
                </div>
                <div class="w-33">
                    <div class="w-100 h-100 border-20 py-3" style="background-image: linear-gradient(113deg, #0095ec, #005ccb);">
                        <div class="row mx-0 p-3">
                            <img src="<?= base_url() ?>/img/Aset/Asset 7@300x.png" alt="" class="position-relative mx-auto" style="height: 175px;">
                        </div>
                        <div class="row mx-0 px-4">
                            <h5 class="position-relative text-white font-weight-bold w-100 mx-auto">Makin paham setiap hari</h5>
                            <p class="position-relative text-white w-100 mx-auto">Uji kemampuan melalui kuis yang diberikan. Kerjakan secara maksimal tentunya agar dapat dilihat jumlah sejauh mana pemahaman kamu terhadap materi yang diberikan.</p>
                        </div>
                    </div>
                </div>
                <div class="w-33">
                    <div class="w-100 h-100 border-20 py-3" style="background-image: linear-gradient(113deg, #005ccb, #0095ec);">
                        <div class="row mx-0 p-3">
                            <img src="<?= base_url() ?>/img/Aset/Asset 8@300x.png" alt="" class="position-relative mx-auto" style="height: 175px;">
                        </div>
                        <div class="row mx-0 px-4">
                            <h5 class="position-relative text-white font-weight-bold w-100 mx-auto">Teman belajar yang seru</h5>
                            <p class="position-relative text-white w-100 mx-auto mb-0">Rasakan pengalaman belahar dan meraih mimpi bersama ratusan teman dari seluruh penjuru nusantara.</p>
                            <p class="position-relative text-white w-100 mx-auto">&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="section3" class="section">
            <div class="row mnya-5 mt5">
                <div class="w-100 mnya-5 px5">
                    <div class="row justify-content-center mnya-5">
                        <div class="w-25 px-2">
                            <div class="card border-0 h-100">
                                <div class="card-header bg-primary h-75" style="border-radius: 20px; z-index: 2000;">
                                    <h3 class="card-title text-center text-white font-weight-bold fs-16">Kelas 12</h3>
                                    <div class="w-100 d-flex align-self-center bg-white" style="height: 82.5%;">
                                        <img src="<?= base_url() ?>/img/Kelas 12.png" alt="" class="w-100 rounded mx-auto" style="height: auto;">
                                    </div>
                                </div>
                                <div class="row card-footer d-flex justify-content-center bg-white border shadow h-50 pt-4 mx-0" style="margin-top: -15px; border-radius: 0 0 20px 20px;">
                                    <p class="card-text text-center fs-12" style="font-size: 14px;">Mengulas kembali materi matematika kelas 10 s.d 12 supaya lebih mantap dalam menghadapi USM POLSTAT STIS maupun UTBK</p>
                                    <a href="<?= base_url(); ?>/auth/daftar" class="btn btn-warning h6 font-weight-bold fs-12" style="border-radius: 10px;">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-25 px-2">
                            <div class="card border-0 h-100">
                                <div class="card-header bg-primary h-75" style="border-radius: 20px; z-index: 2000;">
                                    <h3 class="card-title text-center text-white font-weight-bold fs-16">Kelas 11</h3>
                                    <div class="w-100 d-flex align-self-center bg-white" style="height: 82.5%;">
                                        <img src="<?= base_url() ?>/img/Kelas 11.png" alt="" class="w-100 rounded mx-auto" style="height: auto;">
                                    </div>
                                </div>
                                <div class="row card-footer d-flex justify-content-center bg-white border shadow h-50 pt-4 mx-0" style="margin-top: -15px; border-radius: 0 0 20px 20px;">
                                    <p class="card-text text-center fs-12" style="font-size: 14px;">Banyaknya materi kelas 11 membuatmu waswas? Persiapkan dirimu 1 tahun lebih awal dalam menghadapi ujian yang bertubi-tubi saat kelas 12</p>
                                    <a href="<?= base_url(); ?>/auth/daftar" class="btn btn-warning h6 font-weight-bold fs-12" style="border-radius: 10px;">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-25 px-2">
                            <div class="card border-0 h-100">
                                <div class="card-header bg-primary h-75" style="border-radius: 20px; z-index: 2000;">
                                    <h3 class="card-title text-center text-white font-weight-bold fs-16">Kelas 10</h3>
                                    <div class="w-100 d-flex align-self-center bg-white" style="height: 82.5%;">
                                        <img src="<?= base_url() ?>/img/Kelas 10.png" alt="" class="w-100 rounded mx-auto" style="height: auto;">
                                    </div>
                                </div>
                                <div class="row card-footer d-flex justify-content-center bg-white border shadow h-50 pt-4 mx-0" style="margin-top: -15px; border-radius: 0 0 20px 20px;">
                                    <p class="card-text text-center fs-12" style="font-size: 14px;">Perebutan kursi SNMPTN semakin sengit. Perbesar peluangmu untuk lolos SNMPTN dengan nilai report yang konsisten dari sekarang.</p>
                                    <a href="<?= base_url(); ?>/auth/daftar" class="btn btn-warning h6 font-weight-bold fs-12" style="border-radius: 10px;">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-25 px-2">
                            <div class="card border-0 h-100">
                                <div class="card-header bg-warning h-75" style="border-radius: 20px; z-index: 2000;">
                                    <h3 class="card-title text-center text-white font-weight-bold fs-16">Intensif</h3>
                                    <div class="w-100 d-flex align-self-center bg-white rounded" style="height: 82.5%;">
                                        <img src="<?= base_url() ?>/img/Kelas Intensif.png" alt="" class="bg-white w-100 rounded mx-auto" style="height: auto;">
                                    </div>
                                </div>
                                <div class="row card-footer d-flex justify-content-center bg-white border shadow h-50 pt-4 mx-0" style="margin-top: -15px; border-radius: 0 0 20px 20px;">
                                    <p class="card-text text-center fs-12" style="font-size: 14px;">Kelas yang dibuat dengan metode pembelajaran khusus untuk kamu yang ingin fokus belajar dalam menghadapi USM Polstat STIS</p>
                                    <a href="<?= base_url(); ?>/auth/daftar" class="btn btn-warning h6 font-weight-bold fs-12" style="border-radius: 10px;">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="section4" class="section">
            <div class="row position-relative border-20 h-100 mx-0 my5" style="padding-bottom: 110px;">
                <img src="<?= base_url() ?>/img/Background/Asset 30@300x.png" alt="" class="position-absolute w-100" style="top: 0; left: 0;">
                <div class="w-100 px-2">
                    <h2 class="text-white text-center font-weight-bold position-relative pt5 fs-16">Bebas akses kapanpun</h2>
                    <h2 class="text-white text-center font-weight-bold position-relative fs-16">dan dimanapun</h2>
                </div>
                <div class="d-flex justify-content-center w-100 mnya-5 px-2">
                    <img src="<?= base_url() ?>/img/2366.png" alt="" class="position-relative w-75">
                </div>
            </div>
        </div>

        <div id="section5" class="section">
            <div class="row mx-0 pt5" style="margin-top: 60px;">
                <div class="w-100 px-0">
                    <div class="row mx-0">
                        <h2 class="text-center font-weight-bold w-100 fs-16" style="color: #12336D;">Dapet apa aja di iClass?</h2>
                        <h5 class="text-center w-100 fs-12" style="color: #12336D;">Rasakan berbagai kemudahan dengan memanfaatkan semua fitur kami semaksimal mungkin</h5>
                    </div>
                    <div class="row mx-0 mt5">
                        <div class="w-50 pr-2" style="max-height: 550px;">
                            <div class="d-flex justify-content-center align-self-center bg-white border-20 shadow h-100 px5 py5">
                                <img src="<?= base_url() ?>/img/Aset/Asset 14@300x.png" alt="" class="w-100" style="object-fit: contain;">
                            </div>
                        </div>
                        <div class="w-50 pl-2" style="max-height: 550px;">
                            <div class="row bg-primary border-20 h-100 mx-0 px5 py5">
                                <div class="mh-100" style="overflow-y: auto;">
                                    <div class="row mx-0 my-4" style="height: 172px;">
                                        <div class="w-25 position-relative border-20 px-3">
                                            <img src="<?= base_url() ?>/img/Background/Asset 31@300x.png" alt="" class="position-absolute w-100 h-100" style="top: 0; left: 0;">
                                            <div class="d-flex align-self-center h-100">
                                                <img src="<?= base_url() ?>/img/Fas/1.png" alt="" class="position-relative w-100 py-4" style="object-fit: contain;">
                                            </div>
                                        </div>
                                        <div class="row align-content-center w-75 h-100 px5">
                                            <h5 class="text-white font-weight-bold">100+ video pembelajaran</h5>
                                            <h5 class="text-white fs-12" style="font-size: 14px;">Video materi yang dapat diakses 24 jam dan disertai dengan contoh soal yang interaktif dapat membuat kamu tidak bosan untuk belajar mandiri</h5>
                                        </div>
                                    </div>
                                    <div class="row mx-0 my-4" style="height: 172px;">
                                        <div class="w-25 position-relative p-3" style="background-color: #12336D; border-radius: 7px;">
                                            <div class="d-flex align-self-center h-100">
                                                <img src="<?= base_url() ?>/img/8.png" alt="" class="position-relative w-100" style="object-fit: contain;">
                                            </div>
                                        </div>
                                        <div class="row align-content-center w-75 h-100 px5">
                                            <h5 class="text-white font-weight-bold">Kuis setiap hari</h4>
                                            <h5 class="text-white fs-12" style="font-size: 14px;">Uji kemampuan melalui kuis yang diberikan. Kerjakan semaksimal mungkin tentunya agar dapat dilihat sejauh mana pemahaman kamu terhadap materi yang diberikan.</h5>
                                        </div>
                                    </div>
                                    <div class="row mx-0 my-4" style="height: 172px;">
                                        <div class="w-25 position-relative border-20 p-3">
                                            <img src="<?= base_url() ?>/img/Background/Asset 32@300x.png" alt="" class="position-absolute w-100 h-100" style="top: 0; left: 0;">
                                            <div class="d-flex align-self-center h-100">
                                                <img src="<?= base_url() ?>/img/6.png" alt="" class="position-relative w-100" style="object-fit: contain;">
                                            </div>
                                        </div>
                                        <div class="row align-content-center w-75 h-100 px5">
                                            <h5 class="text-white font-weight-bold">Layanan konsultasi</h4>
                                            <h5 class="text-white fs-12" style="font-size: 14px;">Ada pertanyaan tetapi tidak ada pertemuan zoom? Tenang, ada konsultasi via WhatsApp 24 jam. Konsultasi bebas mengenai materi, soal, maupun seputar Politeknik Statistika STIS.</h5>
                                        </div>
                                    </div>
                                    <div class="row mx-0 my-4" style="height: 172px;">
                                        <div class="w-25 position-relative border-20 p-3">
                                            <img src="<?= base_url() ?>/img/Background/Asset 31@300x.png" alt="" class="position-absolute w-100 h-100" style="top: 0; left: 0;">
                                            <img src="<?= base_url() ?>/img/7.png" alt="" class="position-relative w-100 my-1">
                                        </div>
                                        <div class="row align-content-center w-75 h-100 px5">
                                            <h5 class="text-white font-weight-bold">22+ mind mapping</h4>
                                            <h5 class="text-white fs-12" style="font-size: 14px;">Pusing dengan materi matematika yang banyak? Tenang, disini ada mind mapping yang akan membuat materi menjadi ringkas. Tidak hanya materi tapi dilengkapi dengan contoh soal juga didalamnya.</h5>
                                        </div>
                                    </div>
                                    <div class="row mx-0 my-4" style="height: 172px;">
                                        <div class="w-25 position-relative border-20 px-3">
                                            <img src="<?= base_url() ?>/img/Background/Asset 32@300x.png" alt="" class="position-absolute w-100 h-100" style="top: 0; left: 0;">
                                            <div class="d-flex align-self-center h-100">
                                                <img src="<?= base_url() ?>/img/Fasilitas/2.png" alt="" class="position-relative w-100" style="object-fit: contain;">
                                            </div>
                                        </div>
                                        <div class="row align-content-center w-75 h-100 px5">
                                            <h5 class="text-white font-weight-bold">Modul bimbel premium</h4>
                                            <h5 class="text-white fs-12" style="font-size: 14px;">Modul ekslusif yang berisikan rangkuman materi dan ratusan latihan soal yang dapat meningkatkan pemahaman kalian. Modul ini juga berisi soal-soal Ujian Saringan Masuk (USM) Politeknik Statistika STIS dan prediksi untuk tahun selanjutnya.</h5>
                                        </div>
                                    </div>
                                    <div class="row mx-0 my-4" style="height: 172px;">
                                        <div class="w-25 position-relative border-20 p-3">
                                            <img src="<?= base_url() ?>/img/Background/Asset 31@300x.png" alt="" class="position-absolute w-100 h-100" style="top: 0; left: 0;">
                                            <img src="<?= base_url() ?>/img/Fasilitas/5.png" alt="" class="position-relative w-100 py-1">
                                        </div>
                                        <div class="row align-content-center w-75 h-100 px5">
                                            <h5 class="text-white font-weight-bold">Pertemuan rutin tiap minggu</h4>
                                            <h5 class="text-white fs-12" style="font-size: 14px;">Pertemuan interaktif langsung dengan pengajar melalui zoom untuk membahas materi lebih dalam dan sesi tanya jawab.</h5>
                                        </div>
                                    </div>
                                    <div class="row mx-0 my-4" style="height: 172px;">
                                        <div class="w-25 position-relative border-20 px-3" style="background-color: #12336D; border-radius: 7px;">
                                            <div class="d-flex align-self-center h-100">
                                                <img src="<?= base_url() ?>/img/Fasilitas/4.png" alt="" class="position-relative w-100" style="object-fit: contain;">
                                            </div>
                                        </div>
                                        <div class="row align-content-center w-75 h-100 px5">
                                            <h5 class="text-white font-weight-bold">Diajarin oleh ahlinya</h4>
                                            <h5 class="text-white fs-12" style="font-size: 14px;">Tutor di iClass langsung mengambil mahasiswa Politeknik Statistika STIS yang tentunya sudah ahli dibidang matematika dan berpengalaman dalam menghadapi USM Politeknik Statistika STIS.</h5>
                                        </div>
                                    </div>
                                    <div class="row mx-0 my-4" style="height: 172px;">
                                        <div class="w-25 position-relative border-20 p-3">
                                            <img src="<?= base_url() ?>/img/Background/Asset 32@300x.png" alt="" class="position-absolute w-100 h-100" style="top: 0; left: 0;">
                                            <img src="<?= base_url() ?>/img/Fasilitas/10.png" alt="" class="position-relative w-100 py-3">
                                        </div>
                                        <div class="row align-content-center w-75 h-100 px5">
                                            <h5 class="text-white font-weight-bold">Try out gratis</h4>
                                            <h5 class="text-white fs-12" style="font-size: 14px;">Try Out gratis setiap bulan dapat memperkaya pemahaman materi kamu dan membuat terbiasa dalam menghadapi soal.</h5>
                                        </div>
                                    </div>
                                    <div class="row mx-0 my-4" style="height: 172px;">
                                        <div class="w-25 position-relative border-20 p-3" style="background-color: #12336D; border-radius: 7px;">
                                            <div class="d-flex align-self-center h-100">
                                                <img src="<?= base_url() ?>/img/Fasilitas/6.png" alt="" class="position-relative w-100" style="object-fit: contain;">
                                            </div>
                                        </div>
                                        <div class="row align-content-center w-75 h-100 px5">
                                            <h5 class="text-white font-weight-bold">Sharing session</h4>
                                            <h5 class="text-white fs-12" style="font-size: 14px;">Kamu akan mendapatkan tips dan triks jitu untuk menghadapi USM Polstat STIS dari mahasiswanya langsung. Tak hanya itu, kamu juga dapat bertanya mengenai sistem perekonomian dan hal lainnya seputar Polstat STIS.</h5>
                                        </div>
                                    </div>
                                    <div class="row mx-0 my-4" style="height: 172px;">
                                        <div class="w-25 position-relative border-20 p-3">
                                            <img src="<?= base_url() ?>/img/Background/Asset 32@300x.png" alt="" class="position-absolute w-100 h-100" style="top: 0; left: 0;">
                                            <div class="d-flex align-self-center h-100">
                                                <img src="<?= base_url() ?>/img/Fasilitas/8.png" alt="" class="position-relative w-100" style="object-fit: contain;">
                                            </div>
                                        </div>
                                        <div class="row align-content-center w-75 h-100 px5">
                                            <h5 class="text-white font-weight-bold">Laporan progress belajar bulanan</h4>
                                            <h5 class="text-white fs-12" style="font-size: 14px;">Laporan ini memberikan informasi seberapa besar pemahaman kalian pada setiap subbab materi yang diberikan. Pada laporan ini juga terlihat subbab apa yang perlu dipelahari ulang agar lebih paham.</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="section6" class="section">
            <div class="row bg-primary border-20 mx-0 mt5 px5 py5">
                <h2 class="text-center text-white font-weight-bold w-100">Apa kata mereka tentang iClass?</h2>
                <div id="carouselExampleIndicators" class="carousel slide mt5" data-ride="carousel" data-interval="20000" data-pause="hover">
                    <ol class="carousel-indicators">
                        <?php for ($i=0; $i<(sizeof($testi)/4); $i++) { ?>
                            <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i ?>" <?php if ($i==0) echo 'class="active"'; ?>></li>
                        <?php } ?>
                    </ol>
                    <div class="carousel-inner w-100" style="padding-bottom: 55px;">
                        <?php for ($i=0; $i<sizeof($testi); $i++) { ?>
                            <div class="carousel-item<?php if ($i==0) echo ' active'; ?>">
                                <div class="row justify-content-center mnya-5 px5">
                                    <div class="w-25 px-2 testi-items">
                                        <div class="card border-20 h-100">
                                            <div class="card-body">
                                                <div class="row justify-content-center mx-0">
                                                    <div class="w-50 mx-auto px-0">
                                                        <div class="bg-primary position-relative rounded-circle w-100">
                                                            <img src="<?= base_url() ?>/img/Aset/testi/<?= $i+1 ?>.png" alt="" class="w-100 rounded-circle">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center mx-0 mt5">
                                                    <p class="text-center mb-0 fs-12" style="color: #12336D; font-size: 14px;"><i>"<?= $testi[$i]['testi'] ?>"</i></p>
                                                    <h5 class="card-subtitle font-weight-bold text-center w-100 mt5 mb-2 subjudul" style="color: #12336D;"><?= $testi[$i]['nama'] ?></h5>
                                                    <p class="card-text text-center w-100 fs-12 mb-0" style="color: #12336D; font-size: 14px;">Alumni iClass</p>
                                                    <p class="card-text text-center w-100 fs-12" style="color: #12336D; font-size: 14px;">(diterima di Polstat STIS angkatan <?= $testi[$i]['angkatan'] ?>)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if (!empty($testi[$i+1])) { $i+=1; ?>
                                    <div class="w-25 px-2 testi-items">
                                        <div class="card border-20 h-100">
                                            <div class="card-body">
                                                <div class="row justify-content-center mx-0">
                                                    <div class="w-50 mx-auto px-0">
                                                        <div class="bg-primary position-relative rounded-circle w-100">
                                                            <img src="<?= base_url() ?>/img/Aset/testi/<?= $i+1 ?>.png" alt="" class="rounded-circle w-100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center mx-0 mt5">
                                                    <p class="text-center mb-0 fs-12" style="color: #12336D; font-size: 14px;"><i>"<?= $testi[$i]['testi'] ?>"</i></p>
                                                    <h5 class="card-subtitle font-weight-bold text-center w-100 mt5 mb-2 subjudul" style="color: #12336D;"><?= $testi[$i]['nama'] ?></h5>
                                                    <p class="card-text text-center w-100 fs-12 mb-0" style="color: #12336D; font-size: 14px;">Alumni iClass</p>
                                                    <p class="card-text text-center w-100 fs-12" style="color: #12336D; font-size: 14px;">(diterima di Polstat STIS angkatan <?= $testi[$i]['angkatan'] ?>)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php if (!empty($testi[$i+1])) { $i+=1; ?>
                                    <div class="w-25 px-2 testi-items">
                                        <div class="card border-20 h-100">
                                            <div class="card-body">
                                                <div class="row justify-content-center mx-0">
                                                    <div class="w-50 mx-auto px-0">
                                                        <div class="bg-primary position-relative rounded-circle w-100">
                                                            <img src="<?= base_url() ?>/img/Aset/testi/<?= $i+1 ?>.png" alt="" class="rounded-circle w-100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center mx-0 mt5">
                                                    <p class="text-center mb-0 fs-12" style="color: #12336D; font-size: 14px;"><i>"<?= $testi[$i]['testi'] ?>"</i></p>
                                                    <h5 class="card-subtitle font-weight-bold text-center w-100 mt5 mb-2 subjudul" style="color: #12336D;"><?= $testi[$i]['nama'] ?></h5>
                                                    <p class="card-text text-center w-100 fs-12 mb-0" style="color: #12336D; font-size: 14px;">Alumni iClass</p>
                                                    <p class="card-text text-center w-100 fs-12" style="color: #12336D; font-size: 14px;">(diterima di Polstat STIS angkatan <?= $testi[$i]['angkatan'] ?>)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php if (!empty($testi[$i+1])) { $i+=1; ?>
                                    <div class="w-25 px-2 testi-items">
                                        <div class="card border-20 h-100">
                                            <div class="card-body">
                                                <div class="row justify-content-center mx-0">
                                                    <div class="w-50 mx-auto px-0">
                                                        <div class="bg-primary position-relative rounded-circle w-100">
                                                            <img src="<?= base_url() ?>/img/Aset/testi/<?= $i+1 ?>.png" alt="" class="rounded-circle w-100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center mx-0 mt5">
                                                    <p class="text-center mb-0 fs-12" style="color: #12336D; font-size: 14px;"><i>"<?= $testi[$i]['testi'] ?>"</i></p>
                                                    <h5 class="card-subtitle font-weight-bold text-center w-100 mt5 mb-2 subjudul" style="color: #12336D;"><?= $testi[$i]['nama'] ?></h5>
                                                    <p class="card-text text-center w-100 fs-12 mb-0" style="color: #12336D; font-size: 14px;">Alumni iClass</p>
                                                    <p class="card-text text-center w-100 fs-12" style="color: #12336D; font-size: 14px;">(diterima di Polstat STIS angkatan <?= $testi[$i]['angkatan'] ?>)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="section7" class="section">
            <div class="row mx-0 mt5">
                <div class="w-100 px-0">
                    <h2 class="text-center font-weight-bold w-100 mx-auto" style="color: #12336D;">Pilihan Paket</h2>
                </div>
                <div class="w-100 px-0">
                    <div class="row bg-secondary border-20 mx-0 px5 py5">
                        <div style="width: 30%;">
                            <div class="row align-content-center mx-0" style="height: 120px; background-color: #12336D; border-radius: 10px;">
                                <h3 class="text-white text-center font-weight-bold w-100 mx-auto">Pilihan Fitur</h3>
                            </div>
                            <div class="row align-content-center bg-primary mx-0 mt-2" style="height: 50px;">
                                <h6 class="text-white mb-0 px-3 py-1">Ratusan video pembelajaran</h6>
                            </div>
                            <div class="row align-content-center bg-white mx-0 mt-1" style="height: 50px;">
                                <h6 class="text-primary mb-0 px-3 py-1">Try out gratis tiap bulan</h6>
                            </div>
                            <div class="row align-content-center bg-white mx-0 mt-1" style="height: 50px;">
                                <h6 class="text-primary mb-0 px-3 py-1">Kuis rutin tiap hari</h6>
                            </div>
                            <div class="row align-content-center bg-white mx-0 mt-1" style="height: 50px;">
                                <h6 class="text-primary mb-0 px-3 py-1">Layanan konsultasi via WhatsApp</h6>
                            </div>
                            <div class="row align-content-center bg-white mx-0 mt-1" style="height: 50px;">
                                <h6 class="text-primary mb-0 px-3 py-1">Grup belajar siswa</h6>
                            </div>
                            <div class="row align-content-center bg-white mx-0 mt-1" style="height: 50px;">
                                <h6 class="text-primary mb-0 px-3 py-1">Laporan progress belajar tiap bulan</h6>
                            </div>
                            <div class="row align-content-center bg-primary mx-0 mt-1" style="height: 50px;">
                                <h6 class="text-white mb-0 px-3 py-1">Tatap muka</h6>
                            </div>
                            <div class="row align-content-center bg-white mx-0 mt-1" style="height: 50px;">
                                <h6 class="text-primary mb-0 px-3 py-1">22+ mind mapping materi</h6>
                            </div>
                            <div class="row align-content-center bg-white mx-0 mt-1" style="height: 50px;">
                                <h6 class="text-primary mb-0 px-3 py-1">Modul bimbel khusus</h6>
                            </div>
                            <div class="row align-content-center bg-white mx-0 mt-1" style="height: 50px;">
                                <h6 class="text-primary mb-0 px-3 py-1">Materi khusus untuk tes USM STIS</h6>
                            </div>
                        </div>
                        <div style="width: 70%;">
                            <div class="row mx-0">
                                <div class="px-1" style="width: 20%; height: 120px;">
                                    <div class="row align-content-center bg-primary h-50 mx-0" style="border-radius: 10px 10px 0 0;">
                                        <h5 class="text-white text-center w-100 mx-auto mb-0">Reguler</h5>
                                    </div>
                                    <div class="row align-content-center h-50 mx-0" style="background-color: #12336D;">
                                        <h3 class="text-white text-center w-100 mx-auto mb-0">79<span class="h6"> Ribu</span></h3>
                                    </div>
                                </div>
                                <div class="px-1" style="width: 20%; height: 120px;">
                                    <div class="row align-content-center bg-primary h-50 mx-0" style="border-radius: 10px 10px 0 0;">
                                        <h5 class="text-white text-center w-100 mx-auto mb-0">Premium</h5>
                                    </div>
                                    <div class="row align-content-center h-50 mx-0" style="background-color: #12336D;">
                                        <h3 class="text-white text-center w-100 mx-auto mb-0">109<span class="h6"> Ribu</span></h3>
                                    </div>
                                </div>
                                <div class="px-1" style="width: 20%; height: 120px;">
                                    <div class="row align-content-center bg-warning h-50 mx-0" style="border-radius: 10px 10px 0 0;">
                                        <h5 class="text-center w-100 mx-auto mb-0" style="color: #12336D;">Premium+</h5>
                                    </div>
                                    <div class="row align-content-center bg-warning shadow-lg h-50 mx-0">
                                        <h3 class="text-center w-100 mx-auto mb-0" style="color: #12336D;">129<span class="h6"> Ribu</span></h3>
                                    </div>
                                </div>
                                <div class="px-1" style="width: 20%; height: 120px;">
                                    <div class="row align-content-center bg-primary h-50 mx-0" style="border-radius: 10px 10px 0 0;">
                                        <h5 class="text-white text-center w-100 mx-auto mb-0">Intensif</h5>
                                        <h5 class="text-white text-center w-100 mx-auto mb-0">1 Semester</h5>
                                    </div>
                                    <div class="row align-content-center h-50 mx-0" style="background-color: #12336D;">
                                        <h3 class="text-white text-center w-100 mx-auto mb-0">299<span class="h6"> Ribu</span></h3>
                                    </div>
                                </div>
                                <div class="px-1" style="width: 20%; height: 120px;">
                                    <div class="row align-content-center bg-warning h-50 mx-0" style="border-radius: 10px 10px 0 0;">
                                        <h5 class="text-center w-100 mx-auto mb-0" style="color: #12336D;">Intensif</h5>
                                        <h5 class="text-center w-100 mx-auto mb-0" style="color: #12336D;">1 Tahun</h5>
                                    </div>
                                    <div class="row align-content-center bg-warning shadow-lg h-50 mx-0">
                                        <h3 class="text-center w-100 mx-auto mb-0" style="color: #12336D;">499<span class="h6"> Ribu</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-0 mt-2">
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-primary text-white text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-primary text-white text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-primary text-white text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-primary text-white text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-primary text-white text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                            </div>
                            <div class="row mx-0 mt-1">
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                            </div>
                            <div class="row mx-0 mt-1">
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                            </div>
                            <div class="row mx-0 mt-1">
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                            </div>
                            <div class="row mx-0 mt-1">
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                            </div>
                            <div class="row mx-0 mt-1">
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                            </div>
                            <div class="row mx-0 mt-1">
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-primary text-white text-center font-weight-bold w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;">-</span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-primary text-white text-center font-weight-bold w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;">8x</h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-warning text-white text-center font-weight-bold w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span style="color: #12336D;">12x</span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-primary text-white text-center font-weight-bold w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;">27x</span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-warning text-white text-center font-weight-bold w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span style="color: #12336D;">60x</span></h6>
                                </div>
                            </div>
                            <div class="row mx-0 mt-1">
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;">&nbsp;</h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                            </div>
                            <div class="row mx-0 mt-1">
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;">&nbsp;</h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                            </div>
                            <div class="row mx-0 mt-1">
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;">&nbsp;</h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;">&nbsp;</h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;">&nbsp;</h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1" style="height: 50px; line-height: 50px;"><span class="fas fa-check-circle"></span></h6>
                                </div>
                            </div>
                            <div class="row mx-0 mt-3">
                                <div class="px-1" style="width: 20%;">
                                    <a href="<?= base_url(); ?>/auth/daftar" class="btn bg-warning text-dark font-weight-bold text-center w-100 mx-auto" style="border-radius: 10px; word-break: break-word; white-space: normal;">Daftar Sekarang</a>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <a href="<?= base_url(); ?>/auth/daftar" class="btn bg-warning text-dark font-weight-bold text-center w-100 mx-auto" style="border-radius: 10px; word-break: break-word; white-space: normal;">Daftar Sekarang</a>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <a href="<?= base_url(); ?>/auth/daftar" class="btn bg-warning text-dark font-weight-bold text-center w-100 mx-auto" style="border-radius: 10px; word-break: break-word; white-space: normal;">Daftar Sekarang</a>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <a href="<?= base_url(); ?>/auth/daftar" class="btn bg-warning text-dark font-weight-bold text-center w-100 mx-auto" style="border-radius: 10px; word-break: break-word; white-space: normal;">Daftar Sekarang</a>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <a href="<?= base_url(); ?>/auth/daftar" class="btn bg-warning text-dark font-weight-bold text-center w-100 mx-auto" style="border-radius: 10px; word-break: break-word; white-space: normal;">Daftar Sekarang</a>
                                </div>
                            </div>
                            <div class="row mx-0 mt-2">
                                <div class="px-1" style="width: 60%;">
                                    <div class="row justify-content-center align-content-center bg-primary w-100 h-100 mx-0" style="border-radius: 10px;">
                                        <h6 class="text-white h-25 mx-auto mb-0">Paket khusus untuk kelas 10, 11 , dan 12</h6>
                                    </div>
                                </div>
                                <div class="px-1" style="width: 40%;">
                                    <div class="row justify-content-center align-content-center bg-primary w-100 h-100 mx-0 p-2" style="border-radius: 10px;">
                                        <h6 class="text-white text-center w-100 mx-auto mb-0">Paket khusus untuk kelas 12/Gap Year/Umum untuk persiapan USM STIS 2022</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="fullpage.js"></script>
<script>
    if (screen.width <= 650) {
        document.getElementById('pilihan-paket').innerHTML="";
        document.getElementById('pilihanPaket').style.display='block';
        document.getElementById('intensif').style.display='block';
    }

    $(document).ready(function() {
        $('#fullpage').fullpage({
            //options here
            autoScrolling:true,
            scrollHorizontally: true
        });

        //methods
        $.fn.fullpage.setAllowScrolling(false);
    });
</script>

<!-- <div class="bg-light mt-5">
    <div class="container py-3">
        <div class="row">
            <div class="col">
                <h5>Articles or contents about everything</h5>
                <p>Tentor berpengalaman Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, quam! Eligendi commodi perspiciatis sequi dolore architecto quisquam! Minus pariatur, doloribus sint consectetur quo, magnam adipisci praesentium vero inventore sed hic.</p>
                <a href="" class="btn btn-primary">Selengkapnya</a>
            </div>
        </div>
    </div>
</div> -->
<?= $this->endSection(); ?>