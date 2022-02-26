<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-3">
    <div class="row shadow-lg border-20 mnya-5 px-0" style="height: 90vh;">
        <div class="col-7 d-flex h-100 px-5">
            <div class="row align-self-center w-100 mx-5">
                <h3 class="font-weight-bold w-100 mb-0" style="color: darkblue;">Masuk</h3>
                <?= session()->flash; ?>
                <form class="d-flex flex-column w-100 mt5" method="POST" action="">
                    <div class="form-group d-flex flex-column">
                        <label for="username" class="h5 font-weight-bold" style="color: darkblue;">Username</label>
                        <input name="username" type="text" class="form-control" style="border-radius: 10px;" id="username" placeholder="Username" required>
                    </div>

                    <div class="form-group form-group d-flex flex-column mt-0">
                        <label for="password" class="h5 font-weight-bold" style="color: darkblue;">Password</label>
                        <input name="password" type="password" class="form-control" style="border-radius: 10px;" id="password" placeholder="Password" required>
                    </div>

                    <h5 class="font-weight-bold mt5" style="color: darkblue;">Belum punya akun? Daftar <a href="<?= base_url() ?>/auth/daftar" class="text-warning">disini</a></h5>

                    <div class="d-flex justify-content-end w-100 mx-0 px-0">
                        <button type="submit" name="submit" class="btn btn-primary float-right w-25 mt5" style="border-radius: 10px;">
                            <span class="h5">Masuk</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-5 d-flex justify-content-center align-self-center bg-primary h-100 px-5" style="border-radius: 0 20px 20px 0;">
            <div class="row justify-content-center mx-0">
                <div id="carouselExampleSlidesOnly" class="carousel slide" style="width: 100%;" data-ride="carousel" data-interval="3000">
                    <div class="carousel-inner h-100">
                        <div class="carousel-item h-100 active">
                            <div class="row justify-content-center align-items-center h-100">
                                <img src="<?= base_url() ?>/img/Aset/Asset 4@300x.png" alt="" style="object-fit: contain; width: 90%">
                            </div>
                        </div>
                        <div class="carousel-item h-100">
                            <div class="row justify-content-center align-items-center h-100">
                                <img src="<?= base_url() ?>/img/Aset/Asset 44@300x.png" alt="" style="object-fit: contain; width: 100%">
                            </div>
                        </div>
                        <div class="carousel-item h-100">
                            <div class="row justify-content-center align-items-center h-100">
                                <img src="<?= base_url() ?>/img/Aset/cHUVrf.tif@300x.png" alt="" style="object-fit: contain; width: 90%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="padding-top: 200px;"></div>
<?= $this->include('templates/footer'); ?>
<?= $this->endSection(); ?>