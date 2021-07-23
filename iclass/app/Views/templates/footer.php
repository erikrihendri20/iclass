<?= $this->renderSection('content'); ?>

<!-- footer -->
<div class="bg-primary mt-5 pt-3 px-3 pb-4 edu d-flex justify-content-center position-absolute w-100" style="bottom: 0; min-height: 220px;">
    <div class="col-lg-11 pt-3">
        <div class="row mx-1">
            <div class="w-50">
                <h2 class="text-light fs-18"> <span class="text-warning">[i]</span> <b>Class Education</b></h2>
                <p class="my-0 w-75 text-white text-justify fs-12">iClass education merupakan platform pembelajaran bagi para pelajar SMA, khususnya di bidang matematika</p>
            </div>
            <div class="w-25">
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
                    <a href="https://api.whatsapp.com/send?phone=6282232207642" class="col-md-10 text-white text-decoration-none fs-12">
                        <p class="my-0">
                            <i class="fa fa-whatsapp pr-2"></i>
                            <span>+62 822 3220 7642</span>
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
<!-- js -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php if (isset($page)) if ($page == 'jadwal') : ?>
    <link href='<?= base_url(); ?>/css/fullcalendar.print.css' rel='stylesheet' media='print' />
    <script src='<?= base_url(); ?>/js/jquery-1.10.2.js' type="text/javascript"></script>
    <script src='<?= base_url(); ?>/js/jquery-ui.custom.min.js' type="text/javascript"></script>
    <script src='<?= base_url(); ?>/js/fullcalendar.js' type="text/javascript"></script>

    <script src="<?= base_url(); ?>/js/jadwal.js"></script>
<?php endif; ?>

<?php if ($active == 'upload bukti pembayaran') : ?>
    <script>
        function preview() {
            const bukti = document.querySelector('#file-bukti')
            const label = document.querySelector('#label-bukti')
            const preview = document.querySelector('#preview-bukti')

            label.textContent = bukti.files[0].name

            file = new FileReader()
            file.readAsDataURL(bukti.files[0])

            file.onload = function(e) {
                preview.src = e.target.result
            }
        }
    </script>
<?php endif; ?>

</body>

</html>