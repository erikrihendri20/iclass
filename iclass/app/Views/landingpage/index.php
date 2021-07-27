<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0">
    <div class="mnya-5 mt5">

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
            <div id="pilihanKelas" class="m-0 p-0 carousel slide" data-ride="carousel" data-interval="7000" data-pause="hover">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="d-flex kelas-samping" style="width: 35%; margin-right: -15%; z-index: 1999;">
                                <div class="d-flex justify-content-end align-self-center mx-0">
                                    <div class="d-flex justify-content-center text-center bg-primary rounded" style="width: 15%; margin-right: -5px; z-index: 1999;">
                                        <span class="text-white h3 fs-18" style="writing-mode: tb-rl;">INTENSIF</span>
                                    </div>
                                    <div class="bg-white border align-middle w-50">
                                        <img src="<?= base_url() ?>/img/Kelas Intensif.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="kelas-tengah">
                                <div class="d-flex justify-content-center mx-0">
                                    <div class="bg-white border w-50 my-2">
                                        <img src="<?= base_url() ?>/img/Kelas 12.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="bg-primary float-left p-4 w40" style="border-radius: 10px;">
                                        <p class="text-white h2 fs-18"><u>KELAS 12</u></p>
                                        <p class="text-white h5 subjudul my5">Mengulas kembali materi matematika kelas 10 s.d 12 supaya lebih mantap dalam menghadapi USM POLSTAT STIS maupun UTBK</p>
                                        <div class="d-flex justify-content-center">
                                            <button class="btn btn-warning rounded position-absolute mx-auto mb-2 subjudul" style="bottom: 10px;">
                                                <span class="text-dark font-weight-bold">Daftar Sekarang</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex kelas-samping" style="width: 35%; margin-left: -15%; z-index: 1999;">
                                <div class="d-flex justify-content-start align-self-center mx-0">
                                    <div class="bg-white border align-middle w-50">
                                        <img src="<?= base_url() ?>/img/Kelas 11.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="d-flex justify-content-center text-center bg-primary rounded" style="width: 15%; margin-left: -5px; z-index: 1999;">
                                        <span class="text-white h3 fs-18" style="writing-mode: vertical-lr;">KELAS 11</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex kelas-samping" style="width: 30%; margin-left: -25%; z-index: 1998;">
                                <div class="d-flex justify-content-start align-self-center mx-0">
                                    <div class="bg-white border align-middle w-50">
                                        <img src="<?= base_url() ?>/img/Kelas 10.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="d-flex justify-content-center text-center bg-primary rounded" style="width: 15%; margin-left: -5px; z-index: 1998;">
                                        <span class="text-white h3 fs-18" style="writing-mode: vertical-lr;">KELAS 10</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="d-flex kelas-samping" style="width: 35%; margin-right: -15%; z-index: 1999;">
                                <div class="d-flex justify-content-end align-self-center mx-0">
                                    <div class="d-flex justify-content-center text-center bg-primary rounded" style="width: 15%; margin-right: -5px; z-index: 1999;">
                                        <span class="text-white h3 fs-18" style="writing-mode: tb-rl;">KELAS 12</span>
                                    </div>
                                    <div class="bg-white border align-middle w-50">
                                        <img src="<?= base_url() ?>/img/Kelas 12.png" alt="" class="img-fluid m-1">
                                    </div>
                                </div>
                            </div>
                            <div class="kelas-tengah">
                                <div class="d-flex justify-content-center mx-0">
                                    <div class="bg-white border w-50 my-2">
                                        <img src="<?= base_url() ?>/img/Kelas 11.png" alt="" class="img-fluid m-1">
                                    </div>
                                    <div class="bg-primary float-left p-4 w40" style="border-radius: 10px;">
                                        <p class="text-white h2  fs-18"><u>KELAS 11</u></p>
                                        <p class="text-white h5 subjudul my5">Banyaknya materi kelas 11 membuatmu waswas? Persiapkan dirimu 1 tahun lebih awal dalam menghadapi ujian yang bertubi-tubi saat kelas 12</p>
                                        <div class="d-flex justify-content-center">
                                            <button class="btn btn-warning rounded position-absolute mx-auto mb-2 subjudul" style="bottom: 10px;">
                                                <span class="text-dark font-weight-bold">Daftar Sekarang</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex kelas-samping" style="width: 35%; margin-left: -15%; z-index: 1999;">
                                <div class="d-flex justify-content-start align-self-center mx-0">
                                    <div class="bg-white border align-middle w-50">
                                        <img src="<?= base_url() ?>/img/Kelas 10.png" alt="" class="img-fluid m-1">
                                    </div>
                                    <div class="d-flex justify-content-center text-center bg-primary rounded" style="width: 15%; margin-left: -5px; z-index: 1999;">
                                        <span class="text-white h3 fs-18" style="writing-mode: vertical-lr;">KELAS 10</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex kelas-samping" style="width: 30%; margin-left: -25%; z-index: 1998;">
                                <div class="d-flex justify-content-start align-self-center mx-0">
                                    <div class="bg-white border align-middle w-50">
                                        <img src="<?= base_url() ?>/img/Kelas Intensif.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="d-flex justify-content-center text-center bg-primary rounded" style="width: 15%; margin-left: -5px; z-index: 1998;">
                                        <span class="text-white h3 fs-18" style="writing-mode: vertical-lr;">INTENSIF</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="d-flex kelas-samping" style="width: 35%; margin-right: -15%; z-index: 1999;">
                                <div class="d-flex justify-content-end align-self-center mx-0">
                                    <div class="d-flex justify-content-center text-center bg-primary rounded" style="width: 15%; margin-right: -5px; z-index: 1999;">
                                        <span class="text-white h3 fs-18" style="writing-mode: tb-rl;">KELAS 11</span>
                                    </div>
                                    <div class="bg-white border align-middle w-50">
                                        <img src="<?= base_url() ?>/img/Kelas 11.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="kelas-tengah">
                                <div class="d-flex justify-content-center mx-0">
                                    <div class="bg-white border w-50 my-2">
                                        <img src="<?= base_url() ?>/img/Kelas 10.png" alt="" class="img-fluid m-1">
                                    </div>
                                    <div class="bg-primary float-left p-4 w40" style="border-radius: 10px;">
                                        <p class="text-white h2 fs-18"><u>KELAS 10</u></p>
                                        <p class="text-white h5 subjudul my5">Perebutan kursi SNMPTN semakin sengit. Perbesar peluangmu lolos SNMPTN dengan nilai raport yang konsisten dari sekarang</p>
                                        <div class="d-flex justify-content-center">
                                            <button class="btn btn-warning rounded position-absolute mx-auto mb-2 subjudul" style="bottom: 10px;">
                                                <span class="text-dark font-weight-bold">Daftar Sekarang</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex kelas-samping" style="width: 35%; margin-left: -15%; z-index: 1999;">
                                <div class="d-flex justify-content-start align-self-center mx-0">
                                    <div class="bg-white border align-middle w-50">
                                        <img src="<?= base_url() ?>/img/Kelas Intensif.png" alt="" class="img-fluid m-1">
                                    </div>
                                    <div class="d-flex justify-content-center text-center bg-primary rounded" style="width: 15%; margin-left: -5px; z-index: 1999;">
                                        <span class="text-white h3 fs-18" style="writing-mode: vertical-lr;">INTENSIF</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex kelas-samping" style="width: 30%; margin-left: -25%; z-index: 1998;">
                                <div class="d-flex justify-content-start align-self-center mx-0">
                                    <div class="bg-white border align-middle w-50">
                                        <img src="<?= base_url() ?>/img/Kelas 12.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="d-flex justify-content-center text-center bg-primary rounded" style="width: 15%; margin-left: -5px; z-index: 1998;">
                                        <span class="text-white h3 fs-18" style="writing-mode: vertical-lr;">KELAS 12</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="d-flex kelas-samping" style="width: 35%; margin-right: -15%; z-index: 1999;">
                                <div class="d-flex justify-content-end align-self-center mx-0">
                                    <div class="d-flex justify-content-center text-center bg-primary rounded" style="width: 15%; margin-right: -5px; z-index: 1999;">
                                        <span class="text-white h4 fs-18" style="writing-mode: tb-rl;">KELAS 10</span>
                                    </div>
                                    <div class="bg-white border align-middle w-50">
                                        <img src="<?= base_url() ?>/img/Kelas 10.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="kelas-tengah">
                                <div class="d-flex justify-content-center mx-0">
                                    <div class="bg-white border w-50 my-2">
                                        <img src="<?= base_url() ?>/img/Kelas Intensif.png" alt="" class="img-fluid m-1">
                                    </div>
                                    <div class="bg-primary float-left p-4 w40" style="border-radius: 10px;">
                                        <p class="text-white h2 fs-18"><u>INTENSIF</u></p>
                                        <p class="text-white h5 subjudul my5">Kelas yang dibuat dengan metode pembelajaran khusus untuk kamu yang ingin fokus belajar dalam menghadapi USM POLSTAT STIS</p>
                                        <div class="d-flex justify-content-center">
                                            <button class="btn btn-warning rounded position-absolute mx-auto mb-2 subjudul" style="bottom: 10px;" style="bottom: 10px;">
                                                <span class="text-dark font-weight-bold">Daftar Sekarang</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex kelas-samping" style="width: 35%; margin-left: -15%; z-index: 1999;">
                                <div class="d-flex justify-content-start align-self-center mx-0">
                                    <div class="bg-white border align-middle w-50">
                                        <img src="<?= base_url() ?>/img/Kelas 12.png" alt="" class="img-fluid m-1">
                                    </div>
                                    <div class="d-flex justify-content-center text-center bg-primary rounded" style="width: 15%; margin-left: -5px; z-index: 1999;">
                                        <span class="text-white h3 fs-18" style="writing-mode: vertical-lr;">KELAS 12</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex kelas-samping" style="width: 30%; margin-left: -25%; z-index: 1998;">
                                <div class="d-flex justify-content-start align-self-center mx-0">
                                    <div class="bg-white border align-middle w-50">
                                        <img src="<?= base_url() ?>/img/Kelas 11.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="d-flex justify-content-center text-center bg-primary rounded" style="width: 15%; margin-left: -5px; z-index: 1998;">
                                        <span class="text-white h3 fs-18" style="writing-mode: vertical-lr;">KELAS 11</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#pilihanKelas" role="button" data-slide="prev">
                    <span class="fas fa-chevron-circle-left h1 text-secondary fs-24" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#pilihanKelas" role="button" data-slide="next">
                    <span class="fas fa-chevron-circle-right h1 text-secondary fs-24" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <!-- Facilities -->
        <div id="tengah" class="row d-flex mt5 py5 justify-content-center gambar-tengah" style="background-image: url('<?= base_url() ?>/img/backblue.png'); ">
            <div class="mt5 py5">
                <h1 class="text-white font-weight-bold display-4 mb-0 mt5 py5 fs-18">Dapet apa aja di iClass?</h1>
            </div>
            <div class="row mx-5 px-5 mt5 disappearing">
                <div class="col">
                    <div class="row justify-content-center mx-0">
                        <div class="col-12 d-flex justify-content-center w-100 mx-0 mb-2" style="height: 90px;">
                            <img src="<?= base_url() ?>/img/Fasilitas/1.png" alt="" class="h-100">
                        </div>
                        <span class="text-white font-weight-bold text-center w-100">60+ Video</span>
                        <span class="text-white text-center w-100">Materi pembelajaran</span>
                    </div>
                </div>
                <div class="col">
                    <div class="row justify-content-center mx-0">
                        <div class="col-12 d-flex justify-content-center w-100 mx-0 mb-2" style="height: 90px;">
                            <img src="<?= base_url() ?>/img/Fasilitas/3.png" alt="" class="h-100">
                        </div>
                        <span class="text-white font-weight-bold text-center w-100">Mind mapping</span>
                        <span class="text-white text-center w-100">Materi pembelajaran</span>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="row justify-content-center mx-0">
                        <div class="col-12 d-flex justify-content-center w-100 mx-0 mb-2" style="height: 90px;">
                            <img src="<?= base_url() ?>/img/Fasilitas/5.png" alt="" class="h-100">
                        </div>
                        <span class="text-white font-weight-bold text-center w-100">Pertemuan</span>
                        <span class="text-white text-center w-100">rutin tiap minggunya</span>
                    </div>
                </div>
                <div class="col">
                    <div class="row justify-content-center mx-0">
                        <div class="col-12 d-flex justify-content-center w-100 mx-0 mb-2" style="height: 90px;">
                            <img src="<?= base_url() ?>/img/Fasilitas/7.png" alt="" class="h-100">
                        </div>
                        <span class="text-white font-weight-bold text-center w-100">Layanan konsultasi</span>
                        <span class="text-white text-center w-100">via WhatsApp 24 jam</span>
                    </div>
                </div>
                <div class="col">
                    <div class="row justify-content-center mx-0">
                        <div class="col-12 d-flex justify-content-center w-100 mx-0 mb-2" style="height: 90px;">
                            <img src="<?= base_url() ?>/img/Fasilitas/9.png" alt="" class="h-100">
                        </div>
                        <span class="text-white font-weight-bold text-center w-100">Kuis</span>
                        <span class="text-white text-center w-100">setiap hari</span>
                    </div>
                </div>
            </div>
            <div class="row mx-5 px-5 mt5 disappearing">
                <div class="col">
                    <div class="row justify-content-center mx-0">
                        <div class="col-12 d-flex justify-content-center w-100 mx-0 mb-2" style="height: 90px;">
                            <img src="<?= base_url() ?>/img/Fasilitas/2.png" alt="" class="h-100">
                        </div>
                        <span class="text-white font-weight-bold text-center w-100">Modul bimbel</span>
                        <span class="text-white text-center w-100">khusus</span>
                    </div>
                </div>
                <div class="col">
                    <div class="row justify-content-center mx-0">
                        <div class="col-12 d-flex justify-content-center w-100 mx-0 mb-2" style="height: 90px;">
                            <img src="<?= base_url() ?>/img/Fasilitas/4.png" alt="" class="h-100">
                        </div>
                        <span class="text-white font-weight-bold text-center w-100">Diajarin langsung</span>
                        <span class="text-white text-center w-100">oleh ahlinya</span>
                    </div>
                </div>
                <div class="col">
                    <div class="row justify-content-center mx-0">
                        <div class="col-12 d-flex justify-content-center w-100 mx-0 mb-2" style="height: 90px;">
                            <img src="<?= base_url() ?>/img/Fasilitas/6.png" alt="" class="h-100">
                        </div>
                        <span class="text-white font-weight-bold text-center w-100">Sharing session</span>
                        <span class="text-white text-center w-100">bersama mahasiswa Polstat STIS</span>
                    </div>
                </div>
                <div class="col">
                    <div class="row justify-content-center mx-0">
                        <div class="col-12 d-flex justify-content-center w-100 mx-0 mb-2" style="height: 90px;">
                            <img src="<?= base_url() ?>/img/Fasilitas/8.png" alt="" class="h-100">
                        </div>
                        <span class="text-white font-weight-bold text-center w-100">Laporan progress</span>
                        <span class="text-white text-center w-100">belajar setiap bulan</span>
                    </div>
                </div>
                <div class="col">
                    <div class="row justify-content-center mx-0">
                        <div class="col-12 d-flex justify-content-center w-100 mx-0 mb-2" style="height: 90px;">
                            <img src="<?= base_url() ?>/img/Fasilitas/10.png" alt="" class="h-100">
                        </div>
                        <span class="text-white font-weight-bold text-center w-100">Try out gratis</span>
                        <span class="text-white text-center w-100">setiap bulan</span>
                    </div>
                </div>
            </div>
            <div id="dapet" class="carousel slide mt5 mb-4 pb-5" data-ride="carousel" data-interval="7000" data-pause="hover">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row mt5">
                            <div class="col-12 d-flex justify-content-center w-100 mx-0 mb-2" style="height: 30px;">
                                <img src="<?= base_url() ?>/img/Fasilitas/1.png" alt="" class="h-100">
                            </div>
                            <span class="text-white font-weight-bold text-center w-100 subjudul">60+ Video</span>
                            <span class="text-white text-center w-100 subjudul">Materi pembelajaran</span>
                        </div>
                        <div class="row mt5">
                            <div class="col-12 d-flex justify-content-center w-100 mx-0 mb-2" style="height: 30px;">
                                <img src="<?= base_url() ?>/img/Fasilitas/2.png" alt="" class="h-100">
                            </div>
                            <span class="text-white font-weight-bold text-center w-100 subjudul">Modul bimbel</span>
                            <span class="text-white text-center w-100 subjudul">khusus</span>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row mt5">
                            <div class="col-12 d-flex justify-content-center w-100 mx-0 mb-2" style="height: 30px;">
                                <img src="<?= base_url() ?>/img/Fasilitas/3.png" alt="" class="h-100">
                            </div>
                            <span class="text-white font-weight-bold text-center w-100 subjudul">Mind mapping</span>
                            <span class="text-white text-center w-100 subjudul">Materi pembelajaran</span>
                        </div>
                        <div class="row mt5">
                            <div class="col-12 d-flex justify-content-center w-100 mx-0 mb-2" style="height: 30px;">
                                <img src="<?= base_url() ?>/img/Fasilitas/4.png" alt="" class="h-100">
                            </div>
                            <span class="text-white font-weight-bold text-center w-100 subjudul">Diajarin langsung</span>
                            <span class="text-white text-center w-100 subjudul">oleh ahlinya</span>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row mt5">
                            <div class="col-12 d-flex justify-content-center w-100 mx-0 mb-2" style="height: 30px;">
                                <img src="<?= base_url() ?>/img/Fasilitas/5.png" alt="" class="h-100">
                            </div>
                            <span class="text-white font-weight-bold text-center w-100 subjudul">Pertemuan</span>
                            <span class="text-white text-center w-100 subjudul">rutin tiap minggunya</span>
                        </div>
                        <div class="row mt5">
                            <div class="col-12 d-flex justify-content-center w-100 mx-0 mb-2" style="height: 30px;">
                                <img src="<?= base_url() ?>/img/Fasilitas/6.png" alt="" class="h-100">
                            </div>
                            <span class="text-white font-weight-bold text-center w-100 subjudul">Sharing session</span>
                            <span class="text-white text-center w-100 subjudul">bersama mahasiswa Polstat STIS</span>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row mt5">
                            <div class="col-12 d-flex justify-content-center w-100 mx-0 mb-2" style="height: 30px;">
                                <img src="<?= base_url() ?>/img/Fasilitas/7.png" alt="" class="h-100">
                            </div>
                            <span class="text-white font-weight-bold text-center w-100 subjudul">Layanan konstultasi</span>
                            <span class="text-white text-center w-100 subjudul">via WhatsApp 24 jam</span>
                        </div>
                        <div class="row mt5">
                            <div class="col-12 d-flex justify-content-center w-100 mx-0 mb-2" style="height: 30px;">
                                <img src="<?= base_url() ?>/img/Fasilitas/8.png" alt="" class="h-100">
                            </div>
                            <span class="text-white font-weight-bold text-center w-100 subjudul">Laporan progress</span>
                            <span class="text-white text-center w-100 subjudul">belajar tiap bulan</span>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row mt5">
                            <div class="col-12 d-flex justify-content-center w-100 mx-0 mb-2" style="height: 30px;">
                                <img src="<?= base_url() ?>/img/Fasilitas/9.png" alt="" class="h-100">
                            </div>
                            <span class="text-white font-weight-bold text-center w-100 subjudul">Kuis</span>
                            <span class="text-white text-center w-100 subjudul">setiap hari</span>
                        </div>
                        <div class="row mt5">
                            <div class="col-12 d-flex justify-content-center w-100 mx-0 mb-2" style="height: 30px;">
                                <img src="<?= base_url() ?>/img/Fasilitas/10.png" alt="" class="h-100">
                            </div>
                            <span class="text-white font-weight-bold text-center w-100 subjudul">Try out gratis</span>
                            <span class="text-white text-center w-100 subjudul">setiap bulan</span>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#dapet" role="button" data-slide="prev">
                    <span class="fas fa-chevron-circle-left h1 text-secondary fs-24" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#dapet" role="button" data-slide="next">
                    <span class="fas fa-chevron-circle-right h1 text-secondary fs-24" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="row justify-content-center mx-0 mt5 py5 disappearing">
                <img src="<?= base_url() ?>/img/2366.png" alt="" class="img-fluid">
            </div>
        </div>


        <!-- Pilih Paket -->
        <div class="row d-flex mt5 py5" id="paket">
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
        </div>
    </div>
</div>

<script>
    if (screen.width <= 650) {
        document.getElementById('pilihan-paket').innerHTML="";
        document.getElementById('pilihanPaket').style.display='block';
        document.getElementById('intensif').style.display='block';
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