<?= $this->renderSection('content'); ?>

<!-- footer -->
<div class="bg-primary mt-3 p-5 edu">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6 p-3">
                <h2 class="text-warning"> [i] <b>Class</b></h2>
                <h1> <b class="text-dark">Education</b> </h1>
            </div>
            <div class="col-lg-3 col-6 p-3">
                <h4 class="text-dark"> <b>Usefull Link</b> </h4>
                <ul class="list-unstyled">
                    <li>
                        <a href="<?= base_url() ?>" class="text-white">
                            <u>Beranda</u>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('#paket') ?>" class="text-white">
                            <u>Paket Belajar</u>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('daftar') ?>" class="text-white">
                            <u>Pendaftaran</u>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('masuk') ?>" class="text-white">
                            <u>Login</u>
                        </a>
                    </li>
                </ul>

            </div>
            <div class="col-lg-3 col-md-6 p-3">
                <h4 class="text-dark"> <b>About</b> </h4>
                <p class="mb-0 text-white text-justify">iClass education merupakan platform pembelajaran bagi para pelajar SMA, khususnya di bidang matematika.</p>
            </div>
            <div class="col-lg-3 col-md-6 p-3">
                <h4 class="text-dark"> <b>Follow us</b> </h4>
                <div class="row">
                    <div class="col-md-1 text-white">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <a href="mailto:masukstis30@gmail.com" class="col-md-10 text-white">
                        <p class="my-0">
                            <u>masukstis30@gmail.com</u>
                        </p>
                    </a>
                    <div class="col-md-1 text-white">
                        <i class="fa fa-instagram"></i>
                    </div>
                    <a href="https://www.instagram.com/iclass.education/" class="col-md-10 text-white">
                        <p class="my-0">
                            <u>iclass.education</u>
                        </p>
                    </a>
                    <div class="col-md-1 text-white">
                        <i class="fa fa-whatsapp"></i>
                    </div>
                    <a href="https://api.whatsapp.com/send?phone=6282232207642" class="col-md-10 text-white">
                        <p class="my-0">
                            <u>+62 822 3220 7642</u>
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center text-white">
                <b class="mb-0 mt-2">© 2021 iClass Education. All rights reserved</b>
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

</body>

</html>