<?= $this->renderSection('content'); ?>

<!-- footer -->
<div class="bg-primary mt-5 pt-3 px-3 pb-4 edu d-flex justify-content-center absolute-fixed w-100" style="bottom: 0; min-width: 1300px; min-height: 220px;">
    <div class="row mx-auto pt-3" style="width: 80%;">
        <div class="row mx-1">
            <div class="w-50">
                <img src="<?= base_url() ?>/img/Background/Asset 38@300x.png" style="width: 100px;" alt="">
                <p class="mt-3 mb-0 w-75 text-white text-justify fs-12">iClass education merupakan platform pembelajaran bagi para pelajar SMA, khususnya di bidang matematika</p>
            </div>
            <div class="w-25 disappearing">
                <h4 class="text-light fs-18"> <b>Usefull Link</b> </h4>
                <ul class="list-unstyled">
                    <li>
                        <a href="<?= base_url() ?>" class="text-white fs-12">
                            <span class="fas fa-chevron-right"></span>
                            <span> Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('#paket') ?>" class="text-white fs-12">
                            <span class="fas fa-chevron-right"></span>
                            <span>Paket Belajar</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('daftar') ?>" class="text-white fs-12">
                            <span class="fas fa-chevron-right"></span>
                            <span>Pendaftaran</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('masuk') ?>" class="text-white fs-12">
                            <span class="fas fa-chevron-right"></span>
                            <span>Login</span>
                        </a>
                    </li>
                </ul>

            </div>
            <div class="w25">
                <h4 class="text-light fs-18"> <b>Follow us</b> </h4>
                <div class="row">
                    <a href="mailto:masukstis30@gmail.com" class="col-md-10 text-white text-decoration-none fs-12">
                        <p class="my-0">
                            <i class="fa fa-envelope pr-2"></i>
                            <span>masukstis30@gmail.com</span>
                        </p>
                    </a>
                    <a href="https://www.instagram.com/iclass.education/" class="col-md-10 text-white text-decoration-none fs-12">
                        <p class="my-0">
                            <i class="fa fa-instagram pr-2"></i>
                            <span>iclass.education</span>
                        </p>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=6281353378068" class="col-md-10 text-white text-decoration-none fs-12">
                        <p class="my-0">
                            <i class="fa fa-whatsapp pr-2"></i>
                            <span>+62 813 5337 8068</span>
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center text-white">
                <!-- <b class="mb-0 mt-2">© 2021 iClass Education. All rights reserved</b> -->
            </div>
        </div>
    </div>
</div>