<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0">
    <div id="fullPage" class="mnya-5">

        <!-- About -->
        <div id="section0" class="section active">
            <div class="row d-flex border-20 mx-0 my-auto px5 py5" style="height: 90vh; background-image: url('<?= base_url() ?>/img/Background/Asset 19@300x.png');  background-size: cover;">
                <div class="col d-flex flex-column justify-content-center align-items-start mx-3" id="tentang">
                    <h1 class="font-weight-bold display-4 mb-0 judul"><span class="text-white ml-0">Kelas</span></h1>
                    <h1 class="font-weight-bold display-4 mt-0 judul"><span class="text-white ml-0">Virtualmu</span></h1>
                    <p class="w-100 h5 text-white mt-1 mb-0 fs-12" id="deskripsi1">Tau gak sih kalau pendaftar USM Polstat STIS tahun ini mencapai 24.002 peserta? Itu artinya kamu harus jadi yang terbaik dari setiap 400 peserta lainnya</p>
                    <p class="w-100 h5 text-white font-weight-bold mb-0 pt5 fs-12" id="deskripsi1">Ayo curi start dan siapkan dirimu dari sekarang dengan bergabung bersama kami.</p>
                    <div class="w-100 pt5">    
                        <a href="<?= base_url('#section2'); ?>" class="btn btn-warning sm mr-2"><span class="font-weight-bold h6 px-4 fs-12">Selengkapnya</span></a>
                        <a href="<?= base_url(); ?>/auth/daftar" class="btn btn-warning ml-2"><span class="font-weight-bold h6 px-4 fs-12">Daftar Sekarang</span></a>
                    </div>
                </div>
                <div class="col d-flex justify-content-center align-items-center flex-1">
                    <img class="w-100" style="height: auto; max-height: 100%;" src="img/Aset/Asset 3@300x.png" alt="...">
                </div>
            </div>
        </div>

        <div id="section1" class="section">
            <div class="row mx-0 mt5">
                <div class="col-12 h-50 d-flex justify-content-center px5 py5">
                    <img src="<?= base_url() ?>/img/Background/Asset 20@300x.png" alt="" class="w-100 h-100 position-absolute" style="top: 0; left: 0; z-index: 1999;">
                    <div class="d-flex justify-content-center align-self-center w-50" style="heigth: 100%;">
                        <img src="<?= base_url() ?>/img/Aset/Asset 4@300x.png" alt="" class="position-relative" style="width: 300px; height: auto; z-index: 5000; vertical-align: middle;">
                    </div>    
                    <div class="w-50" style="heigth: 100%;">
                        <h1 class="text-white font-weight-bold position-relative judul" style="z-index: 5000;">Kenali potensimu</h1>
                        <p class="text-white h5 position-relative my5 fs-12" style="width: 85%; z-index: 5000;">Di iClass kamu bisa <span class="font-weight-bold">monitoring hasil belajarmu</span>. Kira-kira materi apa yang belum kamu kuasai dan metode belajar seperti apa yang paling tepat untukmu. Hal itu akan sangat berguna untuk mengevaluasi hasil belajarmu selama ini.</p>
                    </div>
                </div>
                <div class="col-8 h-50 mt-3">
                    <div class="w-100 mx-auto my5">
                        <h1 class="font-weight-bold mx-auto" style="width: 70%; color: darkblue;">Banyak tugas tapi gatau mau nanya siapa?</h1>
                        <p class="h5 mx-auto my5" style="width: 70%; color: darkblue;">Tenang, di iClass kamu akan mendapatkan layanan konsultasi via WhatsApp 24 jam. Konsultasi bebas mengenai materi, soal, maupun seputar Politeknik Statistika STIS</p>
                    </div>
                </div>
                <div class="col-4 h-50 mt-3 px-0 py-auto">
                    <img src="<?= base_url() ?>/img/Background/Asset 21@300x.png" alt="" class="position-absolute w-100 h-100">
                    <div class="row justify-content-center align-self-center h-100 px5 py-3">
                        <img src="<?= base_url() ?>/img/Aset/Asset 5@300x.png" alt="" class="position-relative" style="width: 300px; height: auto;">
                    </div>
                </div>
            </div>
        </div>

        <div id="section2" class="section">
            <div class="row mx-0 mt5">
                <div class="col-4">
                    <img src="<?= base_url() ?>/img/Background/Asset 22@300x.png" alt="" class="position-absolute h-100 mx-auto" style="width: 98%; top: 0; left: 0;">
                    <div class="row mx-0 p-3" style="height: 60%;">
                        <img src="<?= base_url() ?>/img/Aset/Asset 6@300x.png" alt="" class="position-relative mx-auto" style="width: 175px; height: auto;">
                    </div>
                    <div class="row mx-0" style="height: 40%;">
                        <h5 class="position-relative text-white font-weight-bold w-100 mx-auto">Ratusan Video Pembelajaran</h5>
                        <p class="position-relative text-white w-100 mx-auto">Video materi yang dapat diakses selama 24 jam dan disertai dengan contoh soal yang interaktif dapat membuat kalian tidak bosan untuk belajar mandiri.</p>
                    </div>
                </div>
                <div class="col-4">
                    <img src="<?= base_url() ?>/img/Background/Asset 23@300x.png" alt="" class="position-absolute h-100 mx-auto" style="width: 98%; top: 0; left: 0;">
                    <div class="row mx-0 p-3" style="height: 60%;">
                        <img src="<?= base_url() ?>/img/Aset/Asset 7@300x.png" alt="" class="position-relative mx-auto" style="width: 275px; height: auto;">
                    </div>
                    <div class="row mx-0" style="height: 40%;">
                        <h5 class="position-relative text-white font-weight-bold w-100 mx-auto">Makin paham setiap hari</h5>
                        <p class="position-relative text-white w-100 mx-auto">Uji kemampuan melalui kuis yang diberikan. Kerjakan secara maksimal tentunya agar dapat dilihat jumlah sejauh mana pemahaman kamu terhadap materi yang diberikan.</p>
                    </div>
                </div>
                <div class="col-4">
                    <img src="<?= base_url() ?>/img/Background/Asset 24@300x.png" alt="" class="position-absolute h-100 mx-auto" style="width: 98%; top: 0; left: 0;">
                    <div class="row mx-0 p-3" style="height: 60%;">
                        <img src="<?= base_url() ?>/img/Aset/Asset 8@300x.png" alt="" class="position-relative mx-auto" style="width: 175px; height: auto;">
                    </div>
                    <div class="row mx-0" style="height: 40%;">
                        <h5 class="position-relative text-white font-weight-bold w-100 mx-auto">Teman belajar yang seru</h5>
                        <p class="position-relative text-white w-100 mx-auto mb-0">Rasakan pengalaman belahar dan meraih mimpi bersama ratusan teman dari seluruh penjuru nusantara.</p>
                        <p class="position-relative text-white w-100 mx-auto">&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="section3" class="section">
            <div class="row mnya-5 mt5">
                <div class="col mnya-5 px5">
                    <div class="row justify-content-center mnya-5">
                        <div class="col-3">
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
                        <div class="col-3">
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
                        <div class="col-3">
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
                        <div class="col-3">
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
            <div class="row position-relative border-20 mx-0 my5" style="height: 90vh;">
                <img src="<?= base_url() ?>/img/Background/Asset 30@300x.png" alt="" class="position-absolute w-100" style="height: 105%; top: 0; left: 0;">
                <div class="col-12">
                    <h2 class="text-white text-center font-weight-bold position-relative pt5 fs-16">Bebas akses kapanpun</h2>
                    <h2 class="text-white text-center font-weight-bold position-relative fs-16">dan dimanapun</h2>
                </div>
                <div class="col d-flex justify-content-center mnya-5">
                    <img src="<?= base_url() ?>/img/2366.png" alt="" class="position-relative w-75">
                </div>
            </div>
        </div>

        <div id="section5" class="section">
            <div class="row mx-0 pt5">
                <div class="col-12 px-0">
                    <div class="row mx-0">
                        <h2 class="text-center font-weight-bold w-100 fs-16" style="color: darkblue;">Dapet apa aja di iClass?</h2>
                        <h5 class="text-center w-100 fs-12" style="color: darkblue;">Rasakan berbagai kemudahan dengan memanfaatkan semua fitur kami semaksimal mungkin</h5>
                    </div>
                    <div class="row mx-0 pt5">
                        <div class="col pl-0" style="max-height: 550px;">
                            <div class="d-flex justify-content-center align-self-center bg-white border-20 shadow h-100 px5">
                                <img src="<?= base_url() ?>/img/Aset/Asset 14@300x.png" alt="" class="w-100" style="object-fit: contain;">
                            </div>
                        </div>
                        <div class="col pr-0" style="max-height: 550px;">
                            <div class="row bg-primary border-20 h-100 mx-0 px5 py5">
                                <div class="mh-100" style="overflow-y: auto;">
                                    <div class="row mx-0 my-2">
                                        <div class="col-3 border-20 px-3">
                                            <img src="<?= base_url() ?>/img/Background/Asset 31@300x.png" alt="" class="position-absolute w-100 h-100" style="top: 0; left: 0;">
                                            <div class="d-flex align-self-center h-100">
                                                <img src="<?= base_url() ?>/img/Fas/1.png" alt="" class="position-relative w-100 py-4" style="object-fit: contain;">
                                            </div>
                                        </div>
                                        <div class="col-9 px-3">
                                            <h4 class="h5 text-white font-weight-bold">100+ video pembelajaran</h4>
                                            <h5 class="text-white fs-12" style="font-size: 14px;">Video materi yang dapat diakses 24 jam dan disertai dengan contoh soal yang interaktif dapat membuat kamu tidak bosan untuk belajar mandiri</h5>
                                        </div>
                                    </div>
                                    <div class="row mx-0 my-2">
                                        <div class="col-3 p-3" style="background-color: darkblue; border-radius: 7px;">
                                            <div class="d-flex align-self-center h-100">
                                                <img src="<?= base_url() ?>/img/8.png" alt="" class="position-relative w-100" style="object-fit: contain;">
                                            </div>
                                        </div>
                                        <div class="col-9 px-3">
                                            <h4 class="h5 text-white font-weight-bold">Kuis setiap hari</h4>
                                            <h5 class="text-white fs-12" style="font-size: 14px;">Uji kemampuan melalui kuis yang diberikan. Kerjakan semaksimal mungkin tentunya agar dapat dilihat sejauh mana pemahaman kamu terhadap materi yang diberikan.</h5>
                                        </div>
                                    </div>
                                    <div class="row mx-0 my-2">
                                        <div class="col-3 border-20 p-3">
                                            <img src="<?= base_url() ?>/img/Background/Asset 32@300x.png" alt="" class="position-absolute w-100 h-100" style="top: 0; left: 0;">
                                            <div class="d-flex align-self-center h-100">
                                                <img src="<?= base_url() ?>/img/6.png" alt="" class="position-relative w-100" style="object-fit: contain;">
                                            </div>
                                        </div>
                                        <div class="col-9 px-3">
                                            <h4 class="h5 text-white font-weight-bold">Layanan konsultasi</h4>
                                            <h5 class="text-white fs-12" style="font-size: 14px;">Ada pertanyaan tetapi tidak ada pertemuan zoom? Tenang, ada konsultasi via WhatsApp 24 jam. Konsultasi bebas mengenai materi, soal, maupun seputar Politeknik Statistika STIS.</h5>
                                        </div>
                                    </div>
                                    <div class="row mx-0 my-2">
                                        <div class="col-3 border-20 p-3">
                                            <img src="<?= base_url() ?>/img/Background/Asset 31@300x.png" alt="" class="position-absolute w-100 h-100" style="top: 0; left: 0;">
                                            <img src="<?= base_url() ?>/img/7.png" alt="" class="position-relative w-100 my-1">
                                        </div>
                                        <div class="col-9 px-3">
                                            <h4 class="h5 text-white font-weight-bold">22+ mind mapping</h4>
                                            <h5 class="text-white fs-12" style="font-size: 14px;">Pusing dengan materi matematika yang banyak? Tenang, disini ada mind mapping yang akan membuat materi menjadi ringkas. Tidak hanya materi tapi dilengkapi dengan contoh soal juga didalamnya.</h5>
                                        </div>
                                    </div>
                                    <div class="row mx-0 my-2">
                                        <div class="col-3 border-20 px-3">
                                            <img src="<?= base_url() ?>/img/Background/Asset 32@300x.png" alt="" class="position-absolute w-100 h-100" style="top: 0; left: 0;">
                                            <div class="d-flex align-self-center h-100">
                                                <img src="<?= base_url() ?>/img/Fasilitas/2.png" alt="" class="position-relative w-100" style="object-fit: contain;">
                                            </div>
                                        </div>
                                        <div class="col-9 px-3">
                                            <h4 class="h5 text-white font-weight-bold">Modul bimbel premium</h4>
                                            <h5 class="text-white fs-12" style="font-size: 14px;">Modul ekslusif yang berisikan rangkuman materi dan ratusan latihan soal yang dapat meningkatkan pemahaman kalian. Modul ini juga berisi soal-soal Ujian Saringan Masuk (USM) Politeknik Statistika STIS dan prediksi untuk tahun selanjutnya.</h5>
                                        </div>
                                    </div>
                                    <div class="row mx-0 my-2">
                                        <div class="col-3 border-20 p-3">
                                            <img src="<?= base_url() ?>/img/Background/Asset 31@300x.png" alt="" class="position-absolute w-100 h-100" style="top: 0; left: 0;">
                                            <img src="<?= base_url() ?>/img/Fasilitas/5.png" alt="" class="position-relative w-100 py-1">
                                        </div>
                                        <div class="col-9 px-3">
                                            <h4 class="h5 text-white font-weight-bold">Pertemuan rutin tiap minggu</h4>
                                            <h5 class="text-white fs-12" style="font-size: 14px;">Pertemuan interaktif langsung dengan pengajar melalui zoom untuk membahas materi lebih dalam dan sesi tanya jawab.</h5>
                                        </div>
                                    </div>
                                    <div class="row mx-0 my-2">
                                        <div class="col-3 border-20 px-3" style="background-color: darkblue; border-radius: 7px;">
                                            <div class="d-flex align-self-center h-100">
                                                <img src="<?= base_url() ?>/img/Fasilitas/4.png" alt="" class="position-relative w-100" style="object-fit: contain;">
                                            </div>
                                        </div>
                                        <div class="col-9 p-3">
                                            <h4 class="h5 text-white font-weight-bold">Diajarin oleh ahlinya</h4>
                                            <h5 class="text-white fs-12" style="font-size: 14px;">Tutor di iClass langsung mengambil mahasiswa Politeknik Statistika STIS yang tentunya sudah ahli dibidang matematika dan berpengalaman dalam menghadapi USM Politeknik Statistika STIS.</h5>
                                        </div>
                                    </div>
                                    <div class="row mx-0 my-2">
                                        <div class="col-3 border-20 p-3">
                                            <img src="<?= base_url() ?>/img/Background/Asset 32@300x.png" alt="" class="position-absolute w-100 h-100" style="top: 0; left: 0;">
                                            <img src="<?= base_url() ?>/img/Fasilitas/10.png" alt="" class="position-relative w-100 py-3">
                                        </div>
                                        <div class="col-9 px-3">
                                            <h4 class="h5 text-white font-weight-bold">Try out gratis</h4>
                                            <h5 class="text-white fs-12" style="font-size: 14px;">Try Out gratis setiap bulan dapat memperkaya pemahaman materi kamu dan membuat terbiasa dalam menghadapi soal.</h5>
                                        </div>
                                    </div>
                                    <div class="row mx-0 my-2">
                                        <div class="col-3 border-20 p-3" style="background-color: darkblue; border-radius: 7px;">
                                            <div class="d-flex align-self-center h-100">
                                                <img src="<?= base_url() ?>/img/Fasilitas/6.png" alt="" class="position-relative w-100" style="object-fit: contain;">
                                            </div>
                                        </div>
                                        <div class="col-9 px-3">
                                            <h4 class="h5 text-white font-weight-bold">Sharing session</h4>
                                            <h5 class="text-white fs-12" style="font-size: 14px;">Kamu akan mendapatkan tips dan triks jitu untuk menghadapi USM Polstat STIS dari mahasiswanya langsung. Tak hanya itu, kamu juga dapat bertanya mengenai sistem perekonomian dan hal lainnya seputar Polstat STIS.</h5>
                                        </div>
                                    </div>
                                    <div class="row mx-0 my-2">
                                        <div class="col-3 border-20 p-3">
                                            <img src="<?= base_url() ?>/img/Background/Asset 32@300x.png" alt="" class="position-absolute w-100 h-100" style="top: 0; left: 0;">
                                            <div class="d-flex align-self-center h-100">
                                                <img src="<?= base_url() ?>/img/Fasilitas/8.png" alt="" class="position-relative w-100" style="object-fit: contain;">
                                            </div>
                                        </div>
                                        <div class="col-9 px-3">
                                            <h4 class="h5 text-white font-weight-bold">Laporan progress belajar bulanan</h4>
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

        <!-- <div id="section6" class="section">
            <div class="row bg-primary border-20 mx-0 mt5 px5 py5">
                <h2 class="text-center text-white font-weight-bold w-100">Apa kata mereka tentang iClass?</h2>
                <div class="col mt5 px-0">
                    <div class="row mx-0">
                        <div class="col-3">
                            <div class="card border-20">
                                <div class="card-body">
                                    <div class="row justify-content-center mx-0">
                                        <div class="col-6 mx-auto px-0">
                                            <div class="bg-primary position-relative w-100" style="padding-top: 100%; border-radius: 50%;"></div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center mx-0 mt5">
                                        <p class="text-center mb-0 fs-12" style="color: darkblue; font-size: 14px;">asudhadgajsghdau wgydajhdwgajkwdhgajghd</p>
                                        <h6 class="card-subtitle font-weight-bold text-center w-100 mt5 subjudul" style="color: darkblue;">Card subtitle</h6>
                                        <p class="card-text text-center w-100 fs-12" style="color: darkblue; font-size: 14px;">alumni</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card border-20">
                                <div class="card-body">
                                    <div class="row justify-content-center mx-0">
                                        <div class="col-6 mx-auto px-0">
                                            <div class="bg-primary position-relative w-100" style="padding-top: 100%; border-radius: 50%;"></div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center mx-0 mt5">
                                        <p class="text-center mb-0 fs-12" style="color: darkblue; font-size: 14px;">asudhadgajsghdau wgydajhdwgajkwdhgajghd</p>
                                        <h6 class="card-subtitle font-weight-bold text-center w-100 mt5 subjudul" style="color: darkblue;">Card subtitle</h6>
                                        <p class="card-text text-center w-100 fs-12" style="color: darkblue; font-size: 14px;">alumni</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card border-20">
                                <div class="card-body">
                                    <div class="row justify-content-center mx-0">
                                        <div class="col-6 mx-auto px-0">
                                            <div class="bg-primary position-relative w-100" style="padding-top: 100%; border-radius: 50%;"></div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center mx-0 mt5">
                                        <p class="text-center mb-0 fs-12" style="color: darkblue; font-size: 14px;">asudhadgajsghdau wgydajhdwgajkwdhgajghd</p>
                                        <h6 class="card-subtitle font-weight-bold text-center w-100 mt5 subjudul" style="color: darkblue;">Card subtitle</h6>
                                        <p class="card-text text-center w-100 fs-12" style="color: darkblue; font-size: 14px;">alumni</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card border-20">
                                <div class="card-body">
                                    <div class="row justify-content-center mx-0">
                                        <div class="col-6 mx-auto px-0">
                                            <div class="bg-primary position-relative w-100" style="padding-top: 100%; border-radius: 50%;"></div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center mx-0 mt5">
                                        <p class="text-center mb-0 fs-12" style="color: darkblue; font-size: 14px;">asudhadgajsghdau wgydajhdwgajkwdhgajghd</p>
                                        <h6 class="card-subtitle font-weight-bold text-center w-100 mt5 subjudul" style="color: darkblue;">Card subtitle</h6>
                                        <p class="card-text text-center w-100 fs-12" style="color: darkblue; font-size: 14px;">alumni</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        
        <div id="section7" class="section">
            <div class="row mx-0 mt5">
                <div class="col-12 px-0">
                    <h2 class="text-center font-weight-bold w-100 mx-auto" style="color: darkblue;">Pilihan Paket</h2>
                </div>
                <div class="col-12 px-0">
                    <div class="row bg-secondary border-20 mx-0 px5 py5">
                        <div style="width: 30%;">
                            <div class="row align-content-center mx-0" style="height: 120px; background-color: darkblue; border-radius: 10px;">
                                <h3 class="text-white text-center font-weight-bold w-100 mx-auto">Pilihan Fitur</h3>
                            </div>
                            <div class="row align-content-center bg-primary mx-0 mt-2">
                                <h6 class="text-white mb-0 px-3 py-1">Ratusan video pembelajaran</h6>
                            </div>
                            <div class="row align-content-center bg-white mx-0 mt-1">
                                <h6 class="text-primary mb-0 px-3 py-1">Try out gratis tiap bulan</h6>
                            </div>
                            <div class="row align-content-center bg-white mx-0 mt-1">
                                <h6 class="text-primary mb-0 px-3 py-1">Kuis rutin tiap hari</h6>
                            </div>
                            <div class="row align-content-center bg-white mx-0 mt-1">
                                <h6 class="text-primary mb-0 px-3 py-1">Layanan konsultasi via WhatsApp</h6>
                            </div>
                            <div class="row align-content-center bg-white mx-0 mt-1">
                                <h6 class="text-primary mb-0 px-3 py-1">Grup belajar siswa</h6>
                            </div>
                            <div class="row align-content-center bg-white mx-0 mt-1">
                                <h6 class="text-primary mb-0 px-3 py-1">Laporan progress belajar tiap bulan</h6>
                            </div>
                            <div class="row align-content-center bg-primary mx-0 mt-1">
                                <h6 class="text-white mb-0 px-3 py-1">Tatap muka</h6>
                            </div>
                            <div class="row align-content-center bg-white mx-0 mt-1">
                                <h6 class="text-primary mb-0 px-3 py-1">22+ mind mapping materi</h6>
                            </div>
                            <div class="row align-content-center bg-white mx-0 mt-1">
                                <h6 class="text-primary mb-0 px-3 py-1">Modul bimbel khusus</h6>
                            </div>
                            <div class="row align-content-center bg-white mx-0 mt-1">
                                <h6 class="text-primary mb-0 px-3 py-1">Materi khusus untuk tes USM STIS</h6>
                            </div>
                        </div>
                        <div style="width: 70%;">
                            <div class="row mx-0">
                                <div class="px-1" style="width: 20%; height: 120px;">
                                    <div class="row align-content-center bg-primary h-50 mx-0" style="border-radius: 10px 10px 0 0;">
                                        <h5 class="text-white text-center w-100 mx-auto mb-0">Reguler</h5>
                                    </div>
                                    <div class="row align-content-center h-50 mx-0" style="background-color: darkblue;">
                                        <h3 class="text-white text-center w-100 mx-auto mb-0">79<span class="h6"> Ribu</span></h3>
                                    </div>
                                </div>
                                <div class="px-1" style="width: 20%; height: 120px;">
                                    <div class="row align-content-center bg-primary h-50 mx-0" style="border-radius: 10px 10px 0 0;">
                                        <h5 class="text-white text-center w-100 mx-auto mb-0">Premium</h5>
                                    </div>
                                    <div class="row align-content-center h-50 mx-0" style="background-color: darkblue;">
                                        <h3 class="text-white text-center w-100 mx-auto mb-0">109<span class="h6"> Ribu</span></h3>
                                    </div>
                                </div>
                                <div class="px-1" style="width: 20%; height: 120px;">
                                    <div class="row align-content-center bg-warning h-50 mx-0" style="border-radius: 10px 10px 0 0;">
                                        <h5 class="text-center w-100 mx-auto mb-0" style="color: darkblue;">Premium+</h5>
                                    </div>
                                    <div class="row align-content-center bg-warning shadow-lg h-50 mx-0">
                                        <h3 class="text-center w-100 mx-auto mb-0" style="color: darkblue;">129<span class="h6"> Ribu</span></h3>
                                    </div>
                                </div>
                                <div class="px-1" style="width: 20%; height: 120px;">
                                    <div class="row align-content-center bg-primary h-50 mx-0" style="border-radius: 10px 10px 0 0;">
                                        <h5 class="text-white text-center w-100 mx-auto mb-0">Intensif</h5>
                                        <h5 class="text-white text-center w-100 mx-auto mb-0">1 Semester</h5>
                                    </div>
                                    <div class="row align-content-center h-50 mx-0" style="background-color: darkblue;">
                                        <h3 class="text-white text-center w-100 mx-auto mb-0">299<span class="h6"> Ribu</span></h3>
                                    </div>
                                </div>
                                <div class="px-1" style="width: 20%; height: 120px;">
                                    <div class="row align-content-center bg-warning h-50 mx-0" style="border-radius: 10px 10px 0 0;">
                                        <h5 class="text-center w-100 mx-auto mb-0" style="color: darkblue;">Intensif</h5>
                                        <h5 class="text-center w-100 mx-auto mb-0" style="color: darkblue;">1 Tahun</h5>
                                    </div>
                                    <div class="row align-content-center bg-warning shadow-lg h-50 mx-0">
                                        <h3 class="text-center w-100 mx-auto mb-0" style="color: darkblue;">499<span class="h6"> Ribu</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-0 mt-2">
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-primary text-white text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-primary text-white text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-primary text-white text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-primary text-white text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-primary text-white text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                            </div>
                            <div class="row mx-0 mt-1">
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                            </div>
                            <div class="row mx-0 mt-1">
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                            </div>
                            <div class="row mx-0 mt-1">
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                            </div>
                            <div class="row mx-0 mt-1">
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                            </div>
                            <div class="row mx-0 mt-1">
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                            </div>
                            <div class="row mx-0 mt-1">
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-primary text-white text-center font-weight-bold w-100 mx-auto mb-0 px-3 py-1">-</span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-primary text-white text-center font-weight-bold w-100 mx-auto mb-0 px-3 py-1">8x</h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-warning text-white text-center font-weight-bold w-100 mx-auto mb-0 px-3 py-1"><span style="color: darkblue;">12x</span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-primary text-white text-center font-weight-bold w-100 mx-auto mb-0 px-3 py-1">27x</span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-warning text-white text-center font-weight-bold w-100 mx-auto mb-0 px-3 py-1"><span style="color: darkblue;">60x</span></h6>
                                </div>
                            </div>
                            <div class="row mx-0 mt-1">
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1">&nbsp;</h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                            </div>
                            <div class="row mx-0 mt-1">
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1">&nbsp;</h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                            </div>
                            <div class="row mx-0 mt-1">
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1">&nbsp;</h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1">&nbsp;</h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1">&nbsp;</h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <h6 class="bg-white text-primary text-center w-100 mx-auto mb-0 px-3 py-1"><span class="fas fa-check-circle"></span></h6>
                                </div>
                            </div>
                            <div class="row mx-0 mt-3">
                                <div class="px-1" style="width: 20%;">
                                    <a href="<?= base_url(); ?>/auth/daftar" class="btn bg-warning text-dark font-weight-bold text-center w-100 mx-auto" style="border-radius: 10px;">Daftar Sekarang</a>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <a href="<?= base_url(); ?>/auth/daftar" class="btn bg-warning text-dark font-weight-bold text-center w-100 mx-auto" style="border-radius: 10px;">Daftar Sekarang</a>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <a href="<?= base_url(); ?>/auth/daftar" class="btn bg-warning text-dark font-weight-bold text-center w-100 mx-auto" style="border-radius: 10px;">Daftar Sekarang</a>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <a href="<?= base_url(); ?>/auth/daftar" class="btn bg-warning text-dark font-weight-bold text-center w-100 mx-auto" style="border-radius: 10px;">Daftar Sekarang</a>
                                </div>
                                <div class="px-1" style="width: 20%;">
                                    <a href="<?= base_url(); ?>/auth/daftar" class="btn bg-warning text-dark font-weight-bold text-center w-100 mx-auto" style="border-radius: 10px;">Daftar Sekarang</a>
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

        <!-- Pilih Paket -->
        <!-- <div class="row d-flex mt5" id="paket">
            <div class="col d-flex justify-content-center align-items-center">
                <h2 class="display-4 font-weight-bold text-primary judul">Pilih Paket</h2>
            </div>
        </div>

        <div class="row mt-3 mx-0 pb5 disappearing">
            <div class="col7 p-1">
                <div class="row mx-0 h-100">
                    <div class="col-11 bg-white rounded shadow my-2 p-3">
                        <div id="pilihan-paket" class="row mt-3 mx-0 pilihan-paket justify-content-center">
                            <div id="reguler" class="col d-flex justify-content-center px-0">
                                <div class="card align-self-start d-flex kartu" style="height: 100%; box-shadow: 5px 5px 5px 0 lightgrey;">
                                    <div class="card-body mt-0 pt-0 d-flex flex-column align-items-center">
                                        <h5 class="card-title text-primary py-2 judul-paket h3 paket">Reguler</h5>
                                        <div class="list-paket" style="font-size: 14px;">
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> 100+ video belajar</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Try out gratis tiap bulan</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Kuis rutin setiap hari</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Layanan konsultasi WA</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Grup belajar siswa</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Tentor berpengalaman</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Laporan progress belajar setiap bulan</p>
                                        </div>
                                        <h5 class="text-primary mt-auto harga-paket h3 paket">79rb</h5>
                                        <a href="daftar?paket=1" class="btn btn-warning rounded p-1 card-link daftar-paket">Daftar Sekarang</a>
                                    </div>
                                </div>
                            </div>

                            <div id="premiumplus" class="col d-flex justify-content-center premium mx-2 px-0">
                                <div class="card align-self-start d-flex bg-primary d-flex kartu" style="height: 100%; box-shadow: 5px 5px 5px 0 lightgrey;">
                                    <div class="card-body my-0 pt-0 d-flex flex-column">
                                        <h5 class="card-title text-center bg-warning header-paket py-1 judul-paket h3 paket" style="top: 0; border-radius: 0 0 15px 15px;">Premium<sup>+</sup></h5>
                                        <div class="list-premium-plus pb-4" style="font-size: 14px;">
                                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> 100+ video belajar</p>
                                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> 12x tatap muka</p>
                                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> 22+ mind map</p>
                                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Modul bimbel khusus</p>
                                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Try out gratis tiap bulan</p>
                                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Kuis rutin setiap hari</p>
                                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Layanan konsultasi WA</p>
                                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Grup belajar siswa</p>
                                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Tentor berpengalaman</p>
                                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Laporan progress belajar setiap bulan</p>
                                        </div>
                                        <h5 class="text-center mt-auto harga-paket h3 paket">129rb</h5>
                                        <a href="daftar?paket=3" class="btn btn-warning text-dark card-link rounded p-1 align-self-center daftar-paket">Daftar Sekarang</a>
                                    </div>
                                </div>
                            </div>

                            <div id="premium" class="col d-flex justify-content-center px-0">
                                <div class="card align-self-start d-flex d-flex kartu" style="box-shadow: 5px 5px 5px 0 lightgrey;">
                                    <div class="card-body mt-0 pt-0 d-flex flex-column align-items-center">
                                        <h5 class="card-title text-primary py-2 judul-paket h3 paket">Premium</h5>
                                        <div class="list-premium-plus pb-4" style="font-size: 14px;">
                                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> 100+ video belajar</p>
                                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> 8x tatap muka</p>
                                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> 22+ mind map</p>
                                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Modul bimbel khusus</p>
                                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Try out gratis tiap bulan</p>
                                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Latihan soal tiap hari</p>
                                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Layanan konsultasi WA</p>
                                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Grup belajar siswa</p>
                                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Tentor berpengalaman</p>
                                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Laporan progress belajar setiap bulan</p>
                                        </div>
                                        <h5 class="text-primary mt-auto harga-paket h3 paket">109rb</h5>
                                        <a href="daftar?paket=2" class="btn btn-warning rounded p-1 card-link daftar-paket">Daftar Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mx-0 mt5">
                            <div class="bg-primary rounded text-center p-2">
                                <span class="text-white h5 fs-16">Paket berlaku untuk 1 semester</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 d-flex justify-content-center bg-primary rounded px-0" style="margin-left: -10px; writing-mode: tb-rl;">
                        <span class="text-white mx-auto h2 fs-18">KELAS 10 &nbsp;|&nbsp; KELAS 11 &nbsp;|&nbsp; KELAS 12</span>
                    </div>
                </div>
            </div>
            <div class="col5 p-1">
                <div class="row mx-0">
                    <div class="col-11 bg-warning rounded my-2 p-3">
                        <div class="row mt-3 mx-0 pilihan-paket justify-content-center disappearing">
                            <div id="semester" class="col d-flex justify-content-center px-0">
                                <div class="card align-self-start d-flex kartu" style="height: 100%;">
                                    <div class="card-body mt-0 pt-0 d-flex flex-column align-items-center">
                                        <h5 class="card-title text-white bg-primary text-center py-1 judul-paket h3 paket px-2" style="top: 0; width: 90%; border-radius: 0 0 15px 15px;">1 SEMESTER</h5>
                                        <div class="list-paket" style="font-size: 14px;">
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> 100+ video belajar</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> 27x tatap muka</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> 22+ mind mapping</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Modul bimbel khusus</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Try out gratis tiap bulan</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Kuis rutin setiap hari</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Layanan konsultasi WA</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Grup belajar siswa</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Tentor berpengalaman</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Laporan progress belajar setiap bulan</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Materi khusus untuk tes USM STIS</p>
                                        </div>
                                        <h5 class="text-primary mt-auto harga-paket h3 paket">299rb</h5>
                                        <a href="daftar?paket=1" class="btn btn-primary rounded p-1 card-link daftar-paket">Daftar Sekarang</a>
                                    </div>
                                </div>
                            </div>
                            <div id="tahun" class="col d-flex justify-content-center ml-2 px-0">
                                <div class="card bg-primary align-self-start d-flex kartu" style="height: 100%;">
                                    <div class="card-body mt-0 pt-0 d-flex flex-column align-items-center">
                                        <h5 class="card-title text-primary bg-white text-center py-1 judul-paket h3 paket" style="top: 0; width: 90%; border-radius: 0 0 15px 15px;">1 TAHUN</h5>
                                        <div class="list-paket text-white" style="font-size: 14px;">
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> 100+ video belajar</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> 60x tatap muka</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> 22+ mind mapping</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Modul bimbel khusus</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Try out gratis tiap bulan</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Kuis rutin setiap hari</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Layanan konsultasi WA</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Grup belajar siswa</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Tentor berpengalaman</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Laporan progress belajar setiap bulan</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Materi khusus untuk tes USM STIS</p>
                                        </div>
                                        <h5 class="text-white mt-auto harga-paket h3 paket">499rb</h5>
                                        <a href="daftar?paket=1" class="btn bg-white rounded p-1 card-link daftar-paket">Daftar Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mx-0 mt5">
                            <div class="bg-primary rounded text-center p-2">
                                <span class="text-white h5 subjudul">Paket khusus untuk kelas 12/Gap Year/Umum untuk persiapan tes USM Polstat STIS tahun 2022</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 d-flex justify-content-center bg-primary rounded px-0" style="margin-left: -10px; writing-mode: tb-rl;">
                        <span class="text-white mx-auto h2 fs-18">KELAS INTENSIF</span>
                    </div>
                </div>
            </div>
        </div>
        <div id="paketan" class="row mt-3 mx-0 pb5">
            <div id="pilihanPaket" class="carousel slide" data-ride="carousel" data-interval="7000" data-pause="hover">
                <div class="carousel-inner">
                    <div class="carousel-item text-center active">
                        <div class="row mx-0">
                            <div id="reguler" class="col-10 d-flex justify-content-center px-0" style="height: 332.4px;">
                                <div class="card align-self-start d-flex kartu" style="height: 100%; box-shadow: 5px 5px 5px 0 lightgrey;">
                                    <div class="card-body mt-0 pt-0 d-flex flex-column align-items-center">
                                        <h5 class="card-title text-primary py-2 judul-paket h1 paket">Reguler</h5>
                                        <div class="list-paket" style="font-size: 14px;">
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> 100+ video belajar</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Try out gratis tiap bulan</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Kuis rutin setiap hari</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Layanan konsultasi WA</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Grup belajar siswa</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Tentor berpengalaman</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Laporan progress belajar setiap bulan</p>
                                        </div>
                                        <h5 class="text-primary mt-auto harga-paket h2 paket mb-0">79rb</h5>
                                        <a href="daftar?paket=1" class="btn btn-warning btn-sm rounded card-link daftar-paket">Daftar Sekarang</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 d-flex justify-content-center bg-primary rounded px-0" style="margin-left: -10px; writing-mode: tb-rl;">
                                <span class="text-white mx-auto h2 fs-18">KELAS 10 &nbsp;|&nbsp; KELAS 11 &nbsp;|&nbsp; KELAS 12</span>
                            </div>
                        </div>
                        <small class="text-center mx-0">Paket berlaku untuk 1 semester</small>
                    </div>

                    <div class="carousel-item text-center">
                        <div class="row mx-0">
                            <div id="premium" class="col-10 d-flex justify-content-center">
                                <div class="card align-self-start d-flex d-flex kartu" style="box-shadow: 5px 5px 5px 0 lightgrey;">
                                    <div class="card-body mt-0 pt-0 d-flex flex-column align-items-center">
                                        <h5 class="card-title text-primary py-2 judul-paket h1 paket">Premium</h5>
                                        <div class="list-premium-plus pb-4" style="font-size: 14px;">
                                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> 100+ video belajar</p>
                                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> 8x tatap muka</p>
                                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> 22+ mind map</p>
                                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Modul bimbel khusus</p>
                                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Try out gratis tiap bulan</p>
                                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Latihan soal tiap hari</p>
                                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Layanan konsultasi WA</p>
                                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Grup belajar siswa</p>
                                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Tentor berpengalaman</p>
                                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Laporan progress belajar setiap bulan</p>
                                        </div>
                                        <h5 class="text-primary mt-auto harga-paket h2 paket mb-0">109rb</h5>
                                        <a href="daftar?paket=2" class="btn btn-warning btn-sm rounded card-link daftar-paket">Daftar Sekarang</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 d-flex justify-content-center bg-primary rounded px-0" style="margin-left: -10px; writing-mode: tb-rl;">
                                <span class="text-white mx-auto h2 fs-18">KELAS 10 &nbsp;|&nbsp; KELAS 11 &nbsp;|&nbsp; KELAS 12</span>
                            </div>
                        </div>
                        <small class="text-center mx-0">Paket berlaku untuk 1 semester</small>
                    </div>

                    <div class="carousel-item text-center">
                        <div class="row mx-0">
                            <div class="col-10 d-flex justify-content-center premium">
                                <div id="premiumplus" class="card align-self-start d-flex bg-primary d-flex kartu" style="box-shadow: 5px 5px 5px 0 lightgrey;">
                                    <div class="card-body my-0 pt-0 d-flex flex-column">
                                        <h5 class="card-title text-center bg-warning header-paket py-2 judul-paket h1 paket" style="top: 0; border-radius: 0 0 15px 15px;">Premium<sup>+</sup></h5>
                                        <div class="list-premium-plus pb-4" style="font-size: 14px;">
                                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> 100+ video belajar</p>
                                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> 12x tatap muka</p>
                                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> 22+ mind map</p>
                                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Modul bimbel khusus</p>
                                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Try out gratis tiap bulan</p>
                                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Kuis rutin setiap hari</p>
                                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Layanan konsultasi WA</p>
                                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Grup belajar siswa</p>
                                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Tentor berpengalaman</p>
                                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Laporan progress belajar setiap bulan</p>
                                        </div>
                                        <h5 class="text-center mt-auto harga-paket h2 paket mb-0">129rb</h5>
                                        <a href="daftar?paket=3" class="btn btn-warning btn-sm rounded card-link align-self-center daftar-paket" style="color: black;">Daftar Sekarang</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 d-flex justify-content-center bg-primary rounded px-0" style="margin-left: -10px; writing-mode: tb-rl;">
                                <span class="text-white mx-auto h2 fs-18">KELAS 10 &nbsp;|&nbsp; KELAS 11 &nbsp;|&nbsp; KELAS 12</span>
                            </div>
                        </div>
                        <small class="text-center mx-0">Paket berlaku untuk 1 semester</small>
                    </div>

                    <div class="carousel-item">
                        <div class="row mx-0">
                            <div class="col-10 d-flex justify-content-center">
                                <div class="card align-self-start d-flex d-flex kartu">
                                    <div class="card-body mt-0 pt-0 d-flex flex-column align-items-center">
                                        <h5 class="card-title bg-primary text-white text-center py-2 judul-paket h1 paket" style="width: 90%; top: 0; border-radius: 0 0 15px 15px;">1 Semester</h5>
                                        <div class="list-paket text-dark" style="font-size: 14px;">
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> 100+ video belajar</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> 27x tatap muka</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> 22+ mind mapping</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Modul bimbel khusus</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Try out gratis tiap bulan</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Kuis rutin setiap hari</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Layanan konsultasi WA</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Grup belajar siswa</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Tentor berpengalaman</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Laporan progress belajar setiap bulan</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Materi khusus untuk tes USM STIS</p>
                                        </div>
                                        <h5 class="text-primary mt-auto harga-paket h2 paket">299rb</h5>
                                        <a href="daftar?paket=2" class="btn btn-primary btn-sm rounded card-link daftar-paket">Daftar Sekarang</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 d-flex justify-content-center bg-primary rounded px-0" style="margin-left: -10px; writing-mode: tb-rl;">
                                <span class="text-white mx-auto h2 fs-18">KELAS INTENSIF</span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row mx-0">
                            <div class="col-10 d-flex justify-content-center">
                                <div class="card align-self-start d-flex d-flex kartu">
                                    <div class="card-body bg-primary mt-0 pt-0 d-flex flex-column align-items-center">
                                        <h5 class="card-title bg-white text-primary text-center py-2 judul-paket h1 paket"style="width: 90%; top: 0; border-radius: 0 0 15px 15px;">1 Tahun</h5>
                                        <div class="list-paket text-white" style="font-size: 14px;">
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> 100+ video belajar</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> 60x tatap muka</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> 22+ mind mapping</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Modul bimbel khusus</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Try out gratis tiap bulan</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Kuis rutin setiap hari</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Layanan konsultasi WA</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Grup belajar siswa</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Tentor berpengalaman</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Laporan progress belajar setiap bulan</p>
                                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Materi khusus untuk tes USM STIS</p>
                                        </div>
                                        <h5 class="text-white mt-auto harga-paket h2 paket">499rb</h5>
                                        <a href="daftar?paket=2" class="btn bg-white btn-sm rounded card-link daftar-paket">Daftar Sekarang</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 d-flex justify-content-center bg-primary rounded px-0" style="margin-left: -10px; writing-mode: tb-rl;">
                                <span class="text-white mx-auto h2 fs-18">KELAS INTENSIF</span>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#pilihanPaket" role="button" data-slide="prev">
                    <span class="fas fa-chevron-circle-left h1 text-secondary judul" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#pilihanPaket" role="button" data-slide="next">
                    <span class="fas fa-chevron-circle-right h1 text-secondary judul" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div> -->
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