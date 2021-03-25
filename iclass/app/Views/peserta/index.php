<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0">
    <div class="mx-5 pt-5">

        <!-- Jadwal Terdekat -->

        <div class="mx-5">
            <div class="row d-flex">
                <div class="col d-flex justify-content-center align-items-center">
                    <h2 class="text-primary display-2 font-weight-bold">Jadwal Terdekat</h2>
                </div>
            </div>

            <div class="row d-flex mt-3">
                <div class="col d-flex justify-content-center mb-1">
                    <div class="card align-self-start d-flex bg-dark" style="width: 20rem; height: 33rem;">
                        <div class="card-body mt-0 pt-0 d-flex flex-column align-items-center">
                            <h1 class="card-title text-center bg-warning header-paket py-2 w-75 text-white font-weight-bold display-4">Zoom</h1>
                            <img style="width: 200px; height: 200px" src="<?= base_url() ?>/img/Zoom.png" alt="zoom">
                            <div class="my-4 text-blue bg-white w-75 rounded text-center">
                                <h1 class="font-weight-bold text-primary">H-4</h1>
                                <h3 class="font-weight-bold text-primary">Zoom</h3>
                            </div>
                            <a href="#" class="btn card-link bg-primary text-white font-weight-bold">Link Zoom</a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center mb-1">
                    <div class="card align-self-start d-flex bg-primary" style="width: 20rem; height: 33rem;">
                        <div class="card-body mt-0 pt-0 d-flex flex-column align-items-center">
                            <h1 class="card-title text-center bg-warning header-paket py-2 w-75 text-white font-weight-bold display-4">Try Out</h1>
                            <img style="width: 200px; height: 200px" src="<?= base_url() ?>/img/Try Out.png" alt="zoom">
                            <div class="my-4 text-blue bg-white w-75 rounded text-center">
                                <h1 class="font-weight-bold text-primary">H-24</h1>
                                <h3 class="font-weight-bold text-primary">Zoom</h3>
                            </div>
                            <a href="#" class="btn card-link bg-warning text-white font-weight-bold">Link Try Out</a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center mb-1">
                    <div class="card align-self-start d-flex bg-light" style="width: 20rem; height: 33rem;">
                        <div class="card-body mt-0 pt-0 d-flex flex-column align-items-center">
                            <h1 class="card-title text-center bg-warning header-paket py-2 w-75 text-white font-weight-bold display-4">Latihan</h1>
                            <img style="width: 200px; height: 200px" src="<?= base_url() ?>/img/Latihan Soal.png" alt="zoom">
                            <div class="my-4 text-blue bg-white w-75 rounded text-center">
                                <h1 class="font-weight-bold text-primary">-01:50</h1>
                                <h3 class="font-weight-bold text-primary">Menit</h3>
                            </div>
                            <a href="#" class="btn card-link bg-primary text-white font-weight-bold">Link Latihan Soal</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-100 text-center my-3">
                <a href="#" class="btn btn-warning card-link w-75  font-weight-bold text-white">Selengkapnya</a>
            </div>

        </div>


        <!-- Carousel -->
        <div id="carouselExampleControls" class="carousel slide my-5" data-ride="carousel">
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
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>