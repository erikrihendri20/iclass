<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0">
    <div class="mnya-5 mt-5">

        <!-- About -->
        <div class="row d-flex">
            <div class="col d-flex flex-column justify-content-center align-items-start mx-3" id="tentang">
                <h1 class="font-weight-bold display-1 mb-0 judul">
                    <span class="text-warning ml-0">i<span class="text-primary">Class</span></span>
                </h1>
                <h1 class="font-weight-bold display-1 mt-0 judul"><span class="text-primary ml-0">Education</span></h1>
                <p class="w50 h5 mt-1 subjudul" id="deskripsi1">iClass education merupakan platform pembelajaran bagi para pelajar SMA, khususnya di bidang matematika</p>
                <button class="btn btn-warning sm"><span class="font-weight-bold h5 px-4 subjudul">Selengkapnya</span></button>
            </div>
            <div class="col d-flex justify-content-center align-items-center flex-1">
                <img class="w-100" src="img/1.png" alt="...">
            </div>
        </div>

        <div class="row justify-content-center mnya-5 mt5 pt-5">
            <div id="pilihanKelas" class="m-0 p-0 carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center mx-5">
                            <div class="d-flex mx-3 kelas-samping">
                                <div class="d-flex justify-content-end align-self-center mx-0">
                                    <div class="d-flex justify-content-center text-center bg-primary rounded" style="width: 15%;">
                                        <span class="text-white h4 fs-18" style="writing-mode: tb-rl;">INTENSIF</span>
                                    </div>
                                    <div class="border border-left-0 rounded align-middle w-50 mr-0">
                                        <img src="<?= base_url() ?>/img/Kelas Intensif.png" alt="" class="img-fluid m-1">
                                    </div>
                                </div>
                            </div>
                            <div class="mx-3 kelas-tengah">
                                <div class="d-flex justify-content-center border rounded mx-0">
                                    <div class="w-50 mr-0">
                                        <img src="<?= base_url() ?>/img/Kelas 12.png" alt="" class="img-fluid m-1">
                                    </div>
                                    <div class="bg-primary rounded w-50 float-left p-3">
                                        <p class="text-white h2 fs-18"><u>KELAS 12</u></p>
                                        <p class="text-white subjudul">Mengulas kembali materi matematika kelas 10 s.d 12 supaya lebih mantap dalam menghadapi USM POLSTAT STIS maupun UTBK</p>
                                        <div class="d-flex justify-content-center">
                                            <button class="btn btn-warning mx-auto mb-2 subjudul">
                                                <span class="text-dark">Daftar Sekarang</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mx-3 kelas-samping">
                                <div class="d-flex justify-content-start align-self-center mx-0">
                                    <div class="border border-right-0 rounded align-middle w-50 mr-0">
                                        <img src="<?= base_url() ?>/img/Kelas 11.png" alt="" class="img-fluid m-1">
                                    </div>
                                    <div class="d-flex justify-content-center text-center bg-primary rounded" style="width: 15%;">
                                        <span class="text-white h4 fs-18" style="writing-mode: vertical-lr;">KELAS 11</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row justify-content-center mx-5">
                            <div class="d-flex mx-3 kelas-samping">
                                <div class="d-flex justify-content-end align-self-center mx-0">
                                    <div class="d-flex justify-content-center text-center bg-primary rounded" style="width: 15%;">
                                        <span class="text-white h4 fs-18" style="writing-mode: tb-rl;">KELAS 12</span>
                                    </div>
                                    <div class="border border-left-0 rounded align-middle w-50 mr-0">
                                        <img src="<?= base_url() ?>/img/Kelas 12.png" alt="" class="img-fluid m-1">
                                    </div>
                                </div>
                            </div>
                            <div class="mx-3 kelas-tengah">
                                <div class="d-flex justify-content-center border rounded mx-0">
                                    <div class="w-50 mr-0">
                                        <img src="<?= base_url() ?>/img/Kelas 11.png" alt="" class="img-fluid m-1">
                                    </div>
                                    <div class="bg-primary rounded w-50 float-left p-3">
                                        <p class="text-white h2  fs-18"><u>KELAS 11</u></p>
                                        <p class="text-white subjudul">Banyaknya materi kelas 11 membuatmu waswas? Persiapkan dirimu 1 tahun lebih awal dalam menghadapi ujian yang bertubi-tubi saat kelas 12</p>
                                        <div class="d-flex justify-content-center">
                                            <button class="btn btn-warning mx-auto mb-2 subjudul">
                                                <span class="text-dark">Daftar Sekarang</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mx-3 kelas-samping">
                                <div class="d-flex justify-content-start align-self-center mx-0">
                                    <div class="border border-right-0 rounded align-middle w-50 mr-0">
                                        <img src="<?= base_url() ?>/img/Kelas 10.png" alt="" class="img-fluid m-1">
                                    </div>
                                    <div class="d-flex justify-content-center text-center bg-primary rounded" style="width: 15%;">
                                        <span class="text-white h4 fs-18" style="writing-mode: vertical-lr;">KELAS 10</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row justify-content-center mx-5">
                            <div class="d-flex mx-3 kelas-samping">
                                <div class="d-flex justify-content-end align-self-center mx-0">
                                    <div class="d-flex justify-content-center text-center bg-primary rounded" style="width: 15%;">
                                        <span class="text-white h4 fs-18" style="writing-mode: tb-rl;">KELAS 11</span>
                                    </div>
                                    <div class="border border-left-0 rounded align-middle w-50 mr-0">
                                        <img src="<?= base_url() ?>/img/Kelas 11.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="mx-3 kelas-tengah">
                                <div class="d-flex justify-content-center border rounded mx-0">
                                    <div class="w-50 mr-0">
                                        <img src="<?= base_url() ?>/img/Kelas 10.png" alt="" class="img-fluid m-1">
                                    </div>
                                    <div class="bg-primary rounded w-50 float-left p-3">
                                        <p class="text-white h2 fs-18"><u>KELAS 10</u></p>
                                        <p class="text-white subjudul">Perebutan kursi SNMPTN semakin sengit. Perbesar peluangmu lolos SNMPTN dengan nilai raport yang konsisten dari sekarang</p>
                                        <div class="d-flex justify-content-center">
                                            <button class="btn btn-warning mx-auto mb-2 subjudul">
                                                <span class="text-dark">Daftar Sekarang</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mx-3 kelas-samping">
                                <div class="d-flex justify-content-start align-self-center mx-0">
                                    <div class="border border-right-0 rounded align-middle w-50 mr-0">
                                        <img src="<?= base_url() ?>/img/Kelas Intensif.png" alt="" class="img-fluid m-1">
                                    </div>
                                    <div class="d-flex justify-content-center text-center bg-primary rounded" style="width: 15%;">
                                        <span class="text-white h4 fs-18" style="writing-mode: vertical-lr;">INTENSIF</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row justify-content-center mx-5">
                            <div class="d-flex mx-3 kelas-samping">
                                <div class="d-flex justify-content-end align-self-center mx-0">
                                    <div class="d-flex justify-content-center text-center bg-primary rounded" style="width: 15%;">
                                        <span class="text-white h4 fs-18" style="writing-mode: tb-rl;">KELAS 10</span>
                                    </div>
                                    <div class="border border-left-0 rounded align-middle w-50 mr-0">
                                        <img src="<?= base_url() ?>/img/Kelas 10.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="mx-3 kelas-tengah">
                                <div class="d-flex justify-content-center border rounded mx-0">
                                    <div class="w-50 mr-0">
                                        <img src="<?= base_url() ?>/img/Kelas Intensif.png" alt="" class="img-fluid m-1">
                                    </div>
                                    <div class="bg-primary rounded w-50 float-left p-3">
                                        <p class="text-white h2 fs-18"><u>INTENSIF</u></p>
                                        <p class="text-white subjudul">Kelas yang dibuat dengan metode pembelajaran khusus untuk kamu yang ingin fokus belajar dalam menghadapi USM POLSTAT STIS</p>
                                        <div class="d-flex justify-content-center">
                                            <button class="btn btn-warning mx-auto mb-2 subjudul">
                                                <span class="text-dark">Daftar Sekarang</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mx-3 kelas-samping">
                                <div class="d-flex justify-content-start align-self-center mx-0">
                                    <div class="border border-right-0 rounded align-middle w-50 mr-0">
                                        <img src="<?= base_url() ?>/img/Kelas 12.png" alt="" class="img-fluid m-1">
                                    </div>
                                    <div class="d-flex justify-content-center text-center bg-primary rounded" style="width: 15%;">
                                        <span class="text-white h4 fs-18" style="writing-mode: vertical-lr;">KELAS 12</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#pilihanKelas" role="button" data-slide="prev">
                        <span class="fas fa-chevron-circle-left h1 text-secondary" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#pilihanKelas" role="button" data-slide="next">
                        <span class="fas fa-chevron-circle-right h1 text-secondary" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Facilities -->
        <div id="tengah" class="row d-flex mt5 mx-3 pt-5 justify-content-center">
            <div class="m-0 p-0 col-3 d-flex align-items-center">
                <img id="gambar_hp" class="px-0 mx-0 w-100 disappearing" src="img/2.png" alt="">
            </div>
            <div class="m-0 p-0 d-flex flex-column align-items-center w100">
                <h1 class="display-4 font-weight-bold m-2 p-0 text-primary judul">Fasilitas</h1>
                <div id="carouselExampleControls" class="m-0 p-0 carousel slide" data-ride="carousel">
                    <div id="menu_tengah" class="carousel-inner bg-light">
                        <div class="carousel-item active">
                            <!-- <img src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" alt="" class="img-fluid mx-3 mt-3" style="width: 1000px;"> -->
                            <img src="img/landingpage/1.png" alt="" class="img-fluid mx-3 mt-3" style="width: 95%;">
                        </div>
                        <div class="carousel-item">
                            <img src="img/landingpage/2.png" alt="" class="img-fluid mx-3 mt-3" style="width: 95%;">
                        </div>
                        <div class="carousel-item">
                            <img src="img/landingpage/3.png" alt="" class="img-fluid mx-3 mt-3" style="width: 95%;">
                        </div>
                        <div class="carousel-item">
                            <img src="img/landingpage/4.png" alt="" class="img-fluid mx-3 mt-3" style="width: 95%;">
                        </div>
                    </div>
                    <a class="carousel-control-prev" style="width: 60px;" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="fas fa-chevron-circle-left h1 text-secondary" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" style="width: 60px;" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="fas fa-chevron-circle-right h1 text-secondary" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Pilih Paket -->
        <div class="row d-flex mt5 pt-5" id="paket">
            <div class="col d-flex justify-content-center align-items-center">
                <h2 class="display-4 font-weight-bold text-primary judul">Pilih Paket</h2>
            </div>
        </div>

        <div id="pilihan-paket" class="row d-flex mt-3 pilihan-paket justify-content-center">
            <div id="reguler" class="d-flex justify-content-center mnya-3">
                <div class="card align-self-start d-flex kartu" style="height: 100%; box-shadow: 5px 5px 5px 0 lightgrey;">
                    <div class="card-body mt-0 pt-0 d-flex flex-column align-items-center">
                        <h5 class="card-title text-primary py-2 judul-paket h1 paket">Reguler</h5>
                        <div class="list-paket">
                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Full video materi</p>
                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> 8x tatap muka</p>
                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Try out gratis tiap bulan</p>
                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Latian soal tiap hari</p>
                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Layanan konsultasi WA</p>
                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Grup belajar siswa</p>
                            <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Tentor berpengalaman</p>
                        </div>
                        <h5 class="text-primary mt-auto harga-paket h2 paket">199rb</h5>
                        <a href="daftar?paket=1" class="btn btn-warning card-link daftar-paket">Daftar Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center premium mnya-3">
                <div id="premiumplus" class="card align-self-start d-flex bg-primary d-flex kartu" style="box-shadow: 5px 5px 5px 0 lightgrey;">
                    <div class="card-body my-0 pt-0 d-flex flex-column">
                        <h5 class="card-title text-center bg-warning header-paket py-2 judul-paket h1 paket" style="top: 0; border-radius: 0 0 15px 15px;">Premium<sup>+</sup></h5>
                        <div class="list-premium-plus pb-4">
                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Full video materi</p>
                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> 22x tatap muka</p>
                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> 22+ mind map</p>
                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Modul bimbel khusus</p>
                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Try out gratis tiap bulan</p>
                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Latihan soal tiap hari</p>
                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Layanan konsultasi WA</p>
                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Grup belajar siswa</p>
                            <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Tentor berpengalaman</p>
                        </div>
                        <h5 class="text-center mt-auto harga-paket h2 paket">279rb</h5>
                        <a href="daftar?paket=3" class="btn btn-warning card-link align-self-center daftar-paket" style="color: black;">Daftar Sekarang</a>
                    </div>
                </div>
            </div>

            <div id="premium" class="d-flex justify-content-center mnya-3">
                <div class="card align-self-start d-flex d-flex kartu" style="box-shadow: 5px 5px 5px 0 lightgrey;">
                    <div class="card-body mt-0 pt-0 d-flex flex-column align-items-center">
                        <h5 class="card-title text-primary py-2 judul-paket h1 paket">Premium</h5>
                        <div class="list-premium-plus pb-4">
                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Full video materi</p>
                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> 18x tatap muka</p>
                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> 22+ mind map</p>
                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Modul bimbel khusus</p>
                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Try out gratis tiap bulan</p>
                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Latihan soal tiap hari</p>
                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Layanan konsultasi WA</p>
                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Grup belajar siswa</p>
                            <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Tentor berpengalaman</p>
                        </div>
                        <h5 class="text-primary mt-auto harga-paket h2 paket">259rb</h5>
                        <a href="daftar?paket=2" class="btn btn-warning card-link daftar-paket">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="pilihanPaket" class="m-0 carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div id="reguler" class="d-flex justify-content-center mnya-3">
                        <div class="card align-self-start d-flex kartu" style="height: 100%; box-shadow: 5px 5px 5px 0 lightgrey;">
                            <div class="card-body mt-0 pt-0 d-flex flex-column align-items-center">
                                <h5 class="card-title text-primary py-2 judul-paket h1 paket">Reguler</h5>
                                <div class="list-paket">
                                    <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Full video materi</p>
                                    <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> 8x tatap muka</p>
                                    <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Try out gratis tiap bulan</p>
                                    <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Latian soal tiap hari</p>
                                    <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Layanan konsultasi WA</p>
                                    <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Grup belajar siswa</p>
                                    <p class="my-0 ceklis"><span class="check-reguler">&#10003;</span> Tentor berpengalaman</p>
                                </div>
                                <h5 class="text-primary mt-auto harga-paket h2 paket">199rb</h5>
                                <a href="daftar?paket=1" class="btn btn-warning card-link daftar-paket">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div id="premium" class="d-flex justify-content-center mnya-3">
                        <div class="card align-self-start d-flex d-flex kartu" style="box-shadow: 5px 5px 5px 0 lightgrey;">
                            <div class="card-body mt-0 pt-0 d-flex flex-column align-items-center">
                                <h5 class="card-title text-primary py-2 judul-paket h1 paket">Premium</h5>
                                <div class="list-premium-plus pb-4">
                                    <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Full video materi</p>
                                    <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> 18x tatap muka</p>
                                    <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> 22+ mind map</p>
                                    <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Modul bimbel khusus</p>
                                    <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Try out gratis tiap bulan</p>
                                    <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Latihan soal tiap hari</p>
                                    <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Layanan konsultasi WA</p>
                                    <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Grup belajar siswa</p>
                                    <p class="my-0 ceklis"><span class="check-premium">&#10003;</span> Tentor berpengalaman</p>
                                </div>
                                <h5 class="text-primary mt-auto harga-paket h2 paket">259rb</h5>
                                <a href="daftar?paket=2" class="btn btn-warning card-link daftar-paket">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="d-flex justify-content-center premium mnya-3">
                        <div id="premiumplus" class="card align-self-start d-flex bg-primary d-flex kartu" style="box-shadow: 5px 5px 5px 0 lightgrey;">
                            <div class="card-body my-0 pt-0 d-flex flex-column">
                                <h5 class="card-title text-center bg-warning header-paket py-2 judul-paket h1 paket" style="top: 0; border-radius: 0 0 15px 15px;">Premium<sup>+</sup></h5>
                                <div class="list-premium-plus pb-4">
                                    <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Full video materi</p>
                                    <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> 22x tatap muka</p>
                                    <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> 22+ mind map</p>
                                    <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Modul bimbel khusus</p>
                                    <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Try out gratis tiap bulan</p>
                                    <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Latihan soal tiap hari</p>
                                    <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Layanan konsultasi WA</p>
                                    <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Grup belajar siswa</p>
                                    <p class="my-0 ceklis"><span class="check-premium-plus">&#10003;</span> Tentor berpengalaman</p>
                                </div>
                                <h5 class="text-center mt-auto harga-paket h2 paket">279rb</h5>
                                <a href="daftar?paket=3" class="btn btn-warning card-link align-self-center daftar-paket" style="color: black;">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#pilihanPaket" role="button" data-slide="prev">
                <span class="fas fa-chevron-circle-left h1 text-secondary" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#pilihanPaket" role="button" data-slide="next">
                <span class="fas fa-chevron-circle-right h1 text-secondary" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<script>
    if (screen.width <= 650) {
        document.getElementById('pilihan-paket').innerHTML="";
        document.getElementById('pilihanPaket').style.display='block';
    }
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