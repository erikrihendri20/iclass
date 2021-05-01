<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0">
    <div class="mx-5 pt-5">
        
        <!-- About -->
        <div class="row d-flex">
            <div class="col d-flex flex-column justify-content-center align-items-start ml-5 mr-3">
                <h1 class="font-weight-bold display-1 mb-0">
                    <span class="text-warning">i<span class="text-primary">Class</span></span>
                </h1>
                <h2 class="font-weight-bold display-1 mt-0"><span class="text-primary">Education</span></h2>
                <p class="h4 w-75">iClass education merupakan platform pembelajaran bagi para pelajar SMA, khususnya di bidang matematika</p>
                <button class="btn btn-warning sm">Selengkapnya</button>
            </div>
            <div class="col d-flex justify-content-center align-items-center flex-1">
                <img class="w-100" src="img/1.png" alt="...">
            </div>
        </div>

        <!-- Facilities -->
        <div class="row d-flex m-5 py-4">
            <div class="m-0 p-0 col-3 d-flex">
                <img class="px-0 mx-0 w-100 h-100" src="img/2.png" alt="">
            </div>
            <div class="m-0 p-0 col-9 d-flex flex-column align-items-center">
                <h3 class="font-weight-bold m-2 p-0 text-primary">Fasilitas</h3>
                <div id="carouselExampleControls" class="m-0 p-0 carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <!-- <img src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" alt="" class="w-100 h-75" style="width: 1000px;"> -->
                            <img src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" alt="" class="w-100 h-75">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" alt="" class="w-100 h-75">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" alt="" class="w-100 h-75">
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

        <!-- Pilih Paket -->
        <div class="row d-flex mt-5" id="paket">
            <div class="col d-flex justify-content-center align-items-center">
                <h2 class="text-primary">Pilih Paket</h2>
            </div>
        </div>

        

        <div class="row d-flex mt-5">
            <div class="col d-flex justify-content-center mb-5 ">
                <div class="card align-self-start d-flex " style="width: 18rem; box-shadow: 5px 5px 5px 5px grey;">
                    <div class="card-body mt-0 pt-0 d-flex flex-column align-items-center">
                        <h5 class="card-title text-primary py-2">Reguler</h5>
                        <div class="list-paket">
                            <p class="my-0"><span class="check-reguler">&#10003;</span> Full video materi</p>
                            <p class="my-0"><span class="check-reguler">&#10003;</span> 8x tatap muka</p>
                            <p class="my-0"><span class="check-reguler">&#10003;</span> Try out gratis tiap bulan</p>
                            <p class="my-0"><span class="check-reguler">&#10003;</span> Latian soal tiap hari</p>
                            <p class="my-0"><span class="check-reguler">&#10003;</span> Layanan konsultasi WA</p>
                            <p class="my-0"><span class="check-reguler">&#10003;</span> Grup belajar siswa</p>
                            <p class="my-0"><span class="check-reguler">&#10003;</span> Tentor berpengalaman</p>
                        </div>
                        <h5 class="text-primary">199rb</h5>
                        <a href="daftar?paket=1" class="btn btn-warning card-link">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center premium mb-5">
                <div class="card align-self-start d-flex bg-primary d-flex" style="width: 18rem; box-shadow: 5px 5px 5px 5px lightblue;">
                    <div class="card-body mt-0 pt-0 d-flex flex-column">
                        <h5 class="card-title text-center bg-warning header-paket py-2">Premium<sup>*</sup></h5>
                        <div class="list-premium-plus">
                            <p class="my-0"><span class="check-premium-plus">&#10003;</span> Full video materi</p>
                            <p class="my-0"><span class="check-premium-plus">&#10003;</span> 22x tatap muka</p>
                            <p class="my-0"><span class="check-premium-plus">&#10003;</span> 22+ mind map</p>
                            <p class="my-0"><span class="check-premium-plus">&#10003;</span> Modul bimbel khusus</p>
                            <p class="my-0"><span class="check-premium-plus">&#10003;</span> Try out gratis tiap bulan</p>
                            <p class="my-0"><span class="check-premium-plus">&#10003;</span> Latihan soal tiap hari</p>
                            <p class="my-0"><span class="check-premium-plus">&#10003;</span> Layanan konsultasi WA</p>
                            <p class="my-0"><span class="check-premium-plus">&#10003;</span> Grup belajar siswa</p>
                            <p class="my-0"><span class="check-premium-plus">&#10003;</span> Tentor berpengalaman</p>
                        </div>
                        <h5 class="text-center">279rb</h5>
                        <a href="daftar?paket=3" class="btn btn-warning card-link align-self-center">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center mb-5">
                <div class="card align-self-start d-flex d-flex" style="width: 18rem; box-shadow: 5px 5px 5px 5px grey;">
                    <div class="card-body mt-0 pt-0 d-flex flex-column align-items-center">
                        <h5 class="card-title text-primary py-2">Premium</h5>
                        <div class="list-premium-plus">
                            <p class="my-0"><span class="check-premium">&#10003;</span> Full video materi</p>
                            <p class="my-0"><span class="check-premium">&#10003;</span> 18x tatap muka</p>
                            <p class="my-0"><span class="check-premium">&#10003;</span> 22+ mind map</p>
                            <p class="my-0"><span class="check-premium">&#10003;</span> Modul bimbel khusus</p>
                            <p class="my-0"><span class="check-premium">&#10003;</span> Try out gratis tiap bulan</p>
                            <p class="my-0"><span class="check-premium">&#10003;</span> Latihan soal tiap hari</p>
                            <p class="my-0"><span class="check-premium">&#10003;</span> Layanan konsultasi WA</p>
                            <p class="my-0"><span class="check-premium">&#10003;</span> Grup belajar siswa</p>
                            <p class="my-0"><span class="check-premium">&#10003;</span> Tentor berpengalaman</p>
                        </div>
                        <h5 class="text-primary">259rb</h5>
                        <a href="daftar?paket=2" class="btn btn-warning card-link">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-light mt-5">
    <div class="container pt-3">
        <div class="row">
            <div class="col-5">
                <h5>Articles or contents about everything</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus aliquid sit deleniti provident excepturi totam officiis, corporis illo repudiandae in fugiat odit, magnam quidem, dicta at voluptatum amet ab ipsa.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus aliquid sit deleniti provident excepturi totam officiis, corporis illo repudiandae in fugiat odit, magnam quidem, dicta at voluptatum amet ab ipsa.</p>
                <a href="" class="btn btn-primary">Selengkapnya</a>
            </div>
            <div class="col-7">
                <img src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" class="w-100" alt="">
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>