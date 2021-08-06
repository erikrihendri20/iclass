<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0">
    <div class="mnya-5 mt5">

        <!-- Jadwal Terdekat -->

        <div>
            <div class="row d-flex mx-5">
                <div class="col d-flex justify-content-center align-items-center">
                    <h2 class="text-primary display-2 font-weight-bold judul">Jadwal Terdekat</h2>
                </div>
            </div>

            <div id="jad" class="d-flex mt-3 mx-5 d-flex justify-content-center">
                <div class="d-flex justify-content-center mb-1 mx4">
                    <div class="card align-self-start d-flex bg-dark kartu">
                        <div class="card-body mt-0 pt-0 d-flex flex-column align-items-center">
                            <h1 class="card-title text-center bg-warning header-paket py-2 w-75 text-white font-weight-bold mb-4 fs-24" style="border-radius: 0 0 15px 15px;">Zoom</h1>
                            <img class="gambar" src="<?= base_url() ?>/img/Zoom.png" alt="zoom">
                            <div class="my-4 text-blue bg-white w-75 rounded text-center">
                                <h1 class="font-weight-bold text-primary fs-18">
                                    <?php if($meetingDate!=null) :?>
                                    <?php 
                                        $tanggal1 = date('d');
                                        $tanggal2 = date('d',strtotime($meetingDate['start_event']));
                                        $selisih = $tanggal2-$tanggal1;
                                        echo 'H-' . $selisih;
                                    ?>
                                    <?php else: echo '-'?>
                                    <?php endif ?>
                                    </h1>
                                <h3 class="font-weight-bold text-primary fs-18">Zoom</h3>
                            </div>
                            <?php if($meetingDate!=null) :?>
                                <div class="btn card-link bg-primary">
                                    <a href="<?= $meetingDate['link-meeting']; ?>" class="text-white font-weight-bold px-4 fs-18">link zoom</a>
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-1 mx4">
                    <div class="card align-self-start d-flex bg-primary kartu">
                        <div class="card-body mt-0 pt-0 d-flex flex-column align-items-center">
                            <h1 class="card-title text-center bg-warning header-paket py-2 w-75 text-white font-weight-bold mb-4 fs-24" style="border-radius: 0 0 15px 15px;">Try Out</h1>
                            <img class="gambar" src="<?= base_url() ?>/img/Try Out.png" alt="zoom">
                            <div class="my-4 text-blue bg-white w-75 rounded text-center">
                                <h1 class="font-weight-bold text-primary fs-18">H-24</h1>
                                <h3 class="font-weight-bold text-primary fs-18">Try Out</h3>
                            </div>
                            <div class="btn card-link bg-warning">
                                <a  class="text-white font-weight-bold px-4 fs-18">Link Try Out</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-1 mx4">
                    <div class="card align-self-start d-flex bg-light kartu">
                        <div class="card-body mt-0 pt-0 d-flex flex-column align-items-center">
                            <h1 class="card-title text-center bg-warning header-paket py-2 w-75 text-white font-weight-bold mb-4 fs-24" style="border-radius: 0 0 15px 15px;">Kuis</h1>
                            <img class="gambar" src="<?= base_url() ?>/img/Kuis.png" alt="zoom">
                            <div class="my-4 text-blue bg-white rounded text-center">
                                <h1 class="font-weight-bold text-primary px-4 fs-18"><?= gmdate("H:i:s", $end) ?></h1>
                                <h3 class="font-weight-bold text-primary px-4 fs-18">Berakhir</h3>
                            </div>
                            <div class="btn card-link bg-primary">
                                <a href="<?= base_url('kelasku/kuis_kode?code=' . $code) ?>" class="text-white font-weight-bold px-4 fs-18">Link Kuis</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center disappear">
                <div id="jadwal" class="m-0 carousel slide" data-ride="carousel" data-interval="10000" data-pause="hover">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="d-flex justify-content-center mb-1 mx4">
                                <div class="card align-self-start d-flex bg-dark kartu">
                                    <div class="card-body mt-0 pt-0 d-flex flex-column align-items-center">
                                        <h1 class="card-title text-center bg-warning header-paket py-2 w-75 text-white font-weight-bold mb-4 fs-24" style="border-radius: 0 0 15px 15px;">Zoom</h1>
                                        <img class="gambar" src="<?= base_url() ?>/img/Zoom.png" alt="zoom">
                                        <div class="my-4 text-blue bg-white w-75 rounded text-center">
                                            <h1 class="font-weight-bold text-primary fs-18">
                                                <?php if($meetingDate!=null) :?>
                                                <?php 
                                                    $tanggal1 = date('d');
                                                    $tanggal2 = date('d',strtotime($meetingDate['start_event']));
                                                    $selisih = $tanggal2-$tanggal1;
                                                    echo 'H-' . $selisih;
                                                ?>
                                                <?php else: echo '-'?>
                                                <?php endif ?>
                                                </h1>
                                            <h3 class="font-weight-bold text-primary fs-18">Zoom</h3>
                                        </div>
                                        <?php if($meetingDate!=null) :?>
                                            <div class="btn card-link bg-primary">
                                                <a href="<?= $meetingDate['link-meeting']; ?>" class="text-white font-weight-bold px-4 fs-18">link zoom</a>
                                            </div>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center mb-1 mx4">
                                <div class="card align-self-start d-flex bg-primary kartu">
                                    <div class="card-body mt-0 pt-0 d-flex flex-column align-items-center">
                                        <h1 class="card-title text-center bg-warning header-paket py-2 w-75 text-white font-weight-bold mb-4 fs-24" style="border-radius: 0 0 15px 15px;">Try Out</h1>
                                        <img class="gambar" src="<?= base_url() ?>/img/Try Out.png" alt="zoom">
                                        <div class="my-4 text-blue bg-white w-75 rounded text-center">
                                            <h1 class="font-weight-bold text-primary fs-18">H-24</h1>
                                            <h3 class="font-weight-bold text-primary fs-18">Try Out</h3>
                                        </div>
                                        <div class="btn card-link bg-warning">
                                            <a  class="text-white font-weight-bold px-4 fs-18">Link Try Out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center mb-1 mx4">
                                <div class="card align-self-start d-flex bg-light kartu">
                                    <div class="card-body mt-0 pt-0 d-flex flex-column align-items-center">
                                        <h1 class="card-title text-center bg-warning header-paket py-2 w-75 text-white font-weight-bold mb-4 fs-24" style="border-radius: 0 0 15px 15px;">Kuis</h1>
                                        <img class="gambar" src="<?= base_url() ?>/img/Kuis.png" alt="zoom">
                                        <div class="my-4 text-blue bg-white rounded text-center">
                                            <h1 class="font-weight-bold text-primary px-4 fs-18"><?= gmdate("H:i:s", $end) ?></h1>
                                            <h3 class="font-weight-bold text-primary px-4 fs-18">Berakhir</h3>
                                        </div>
                                        <div class="btn card-link bg-primary">
                                            <a href="<?= base_url('kelasku/kuis_kode?code=' . $code) ?>" class="text-white font-weight-bold px-4 fs-18">Link Kuis</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#jadwal" role="button" data-slide="prev">
                        <span class="fas fa-chevron-circle-left h1 text-secondary" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#jadwal" role="button" data-slide="next">
                        <span class="fas fa-chevron-circle-right h1 text-secondary" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div class="w-100 text-center my-3 pb5">
                <a href="#" class="btn btn-warning card-link w-75  font-weight-bold text-white">Selengkapnya</a>
            </div>

        </div>

        <script>
            if (screen.width <= 768) {
                document.getElementById('jad').innerHTML='';
            }
        </script>


        <!-- Carousel -->
        <!-- <div id="carouselExampleControls" class="carousel slide my-5" data-ride="carousel">
            <div class="row">
                <div class="col-xl-1 col-md-0 bg-secondary d-md-none d-xl-block">
                    <a class="carousel-control-prev w-100" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                </div>
                <div class="col-xl-10 col-md-12">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col">
                                    <img class="d-block w-100" src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" alt="First slide">
                                </div>
                                <div class="col">
                                    <h1 class="text-primary">Microblog</h1>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsum nam pariatur architecto. Dolorem neque, est recusandae laborum earum nobis ut voluptate reiciendis.</p>
                                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum culpa voluptatem consectetur molestias nesciunt delectus reprehenderit</p>
                                    <div class="my-2">
                                        <a href="#" class="btn btn-primary card-link w-50">Selengkapnya</a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="btn btn-primary card-link w-50">Lebih Banyak</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col">
                                    <img class="d-block w-100" src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" alt="First slide">
                                </div>
                                <div class="col">
                                    <h1 class="text-primary">Microblog</h1>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsum nam pariatur architecto. Dolorem neque, est recusandae laborum earum nobis ut voluptate reiciendis.</p>
                                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum culpa voluptatem consectetur molestias nesciunt delectus reprehenderit</p>
                                    <div class="my-2">
                                        <a href="#" class="btn btn-primary card-link w-50">Selengkapnya</a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="btn btn-primary card-link w-50">Lebih Banyak</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col">
                                    <img class="d-block w-100" src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" alt="First slide">
                                </div>
                                <div class="col">
                                    <h1 class="text-primary">Microblog</h1>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsum nam pariatur architecto. Dolorem neque, est recusandae laborum earum nobis ut voluptate reiciendis.</p>
                                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum culpa voluptatem consectetur molestias nesciunt delectus reprehenderit</p>
                                    <div class="my-2">
                                        <a href="#" class="btn btn-primary card-link w-50">Selengkapnya</a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="btn btn-primary card-link w-50">Lebih Banyak</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col">
                                    <img class="d-block w-100" src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" alt="First slide">
                                </div>
                                <div class="col">
                                    <h1 class="text-primary">Microblog</h1>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsum nam pariatur architecto. Dolorem neque, est recusandae laborum earum nobis ut voluptate reiciendis.</p>
                                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum culpa voluptatem consectetur molestias nesciunt delectus reprehenderit</p>
                                    <div class="my-2">
                                        <a href="#" class="btn btn-primary card-link w-50">Selengkapnya</a>
                                    </div>
                                    <div class="my-2">
                                        <a href="#" class="btn btn-primary card-link w-50">Lebih Banyak</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-1 col-md-0 bg-secondary d-md-none d-xl-block">
                    <a class="carousel-control-next w-100" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div> -->
    </div>
</div>
<?php if (session()->has('info')) : ?>
    <?= session()->info; ?>
<?php endif; ?>
<?= $this->endSection(); ?>