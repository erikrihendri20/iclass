<?= $this->renderSection('content'); ?>

<!-- footer -->
<div class="bg-primary mt-3 p-5 edu">
    <div class="row">
        <div class="col mx-2">
            <h5 class="" href="#"><span class="text-warning">[i]<span>Class Education</span></span></h5>
            <p>iClass merupakan platform pembelajaran bagi para pelajar SMA, khususnya di bidang matematika</p>
        </div>
        <div class="col-2 mx-2">
            Usefull Link
            <div class="d-flex flex-column">
                <a class="my-0"><span class="">&#10003;</span> Beranda</a>
                <a class="my-0"><span class="">&#10003;</span> Pilih Paket</a>
                <a class="my-0"><span class="">&#10003;</span> Pendaftaran</a>
                <a class="my-0"><span class="">&#10003;</span> Masuk</a>
            </div>
        </div>
        <div class="col-3 mx-2">
            Contact
            <p class="my-0">Email : masukstis30@gmail.com</p>
            <p class="my-0">Instagram : iclass.edu</p>
            <p class="my-0">Whatsapp : +62 822 3220 7642</p>
        </div>
    </div>
</div>
<!-- js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
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