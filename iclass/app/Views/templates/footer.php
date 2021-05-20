<?= $this->renderSection('content'); ?>

<!-- footer -->
<div class="bg-primary mt-5 pt-3 px-3 pb-4 edu d-flex justify-content-center">
    <div class="col-lg-11 pt-3">
        <div class="row">
            <div class="col-lg-6 col-6">
                <h2 class="text-light"> <span class="text-warning">[i]</span> <b>Class Education</b></h2>
                <p class="my-0 w-75 text-white text-justify">iClass education merupakan platform pembelajaran bagi para pelajar SMA, khususnya di bidang matematika</p>
            </div>
            <div class="col-lg-3 col-6">
                <h4 class="text-light"> <b>Usefull Link</b> </h4>
                <ul class="list-unstyled">
                    <li>
                        <a href="<?= base_url() ?>" class="text-white">
                            <span class="fas fa-chevron-right h6"></span>
                            <span> Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('#paket') ?>" class="text-white">
                            <span class="fas fa-chevron-right h6"></span>
                            <span>Paket Belajar</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('daftar') ?>" class="text-white">
                            <span class="fas fa-chevron-right h6"></span>
                            <span>Pendaftaran</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('masuk') ?>" class="text-white">
                            <span class="fas fa-chevron-right h6"></span>
                            <span>Login</span>
                        </a>
                    </li>
                </ul>

            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light"> <b>Follow us</b> </h4>
                <div class="row">
                    <div class="col-md-1 text-white">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <a href="mailto:masukstis30@gmail.com" class="col-md-10 text-white text-decoration-none">
                        <p class="my-0">
                            <span>masukstis30@gmail.com</span>
                        </p>
                    </a>
                    <div class="col-md-1 text-white">
                        <i class="fa fa-instagram"></i>
                    </div>
                    <a href="https://www.instagram.com/iclass.education/" class="col-md-10 text-white text-decoration-none">
                        <p class="my-0">
                            <span>iclass.education</span>
                        </p>
                    </a>
                    <div class="col-md-1 text-white">
                        <i class="fa fa-whatsapp"></i>
                    </div>
                    <a href="https://api.whatsapp.com/send?phone=6282232207642" class="col-md-10 text-white text-decoration-none">
                        <p class="my-0">
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