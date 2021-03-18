<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <?php foreach ($css as $style) :?>
        <link rel="stylesheet" href="css/<?= $style; ?>">
    <?php endforeach; ?>
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="#"><span class="text-warning">[i]</span><span class="text-primary">Class</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link <?php if($active=='beranda') echo 'active text-primary font-weight-bold'; ?>" href="<?= base_url(); ?>">Beranda</a>
                <a class="nav-item nav-link <?php if($active=='blog') echo 'active text-primary font-weight-bold'; ?> " href="<?= base_url(); ?>">Blog</a>
                <a class="nav-item nav-link <?php if($active=='pilih paket') echo 'active text-primary font-weight-bold'; ?>" href="<?= base_url(); ?>">Pilih Paket</a>
                <a class="nav-item nav-link <?php if($active=='daftar') echo 'active text-primary font-weight-bold'; ?>" href="<?= base_url(); ?>/daftar">Pendaftaran</a>
                <a class="nav-item nav-link <?php if($active=='masuk') echo 'active text-primary font-weight-bold'; ?>" href="<?= base_url(); ?>/masuk">Masuk</a>
                </div>
            </div>
        </div>
    </nav>
    
    <?= $this->renderSection('content'); ?>

        <!-- footer -->
        <div class="bg-primary mt-3 pt-3 edu">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h5 class="" href="#"><span class="text-warning">[i]</span><span>Class Education</span></h5>
                        <p>iClass merupakan platform pembelajaran bagi para pelajar SMA, khususnya di bidang matematika</p>
                    </div>
                    <div class="col">
                        Usefull Link
                        <div class="d-flex flex-column">
                            <a class="my-0"><span class="">&#10003;</span> Beranda</a>
                            <a class="my-0"><span class="">&#10003;</span> Pilih Paket</a>
                            <a class="my-0"><span class="">&#10003;</span> Pendaftaran</a>
                            <a class="my-0"><span class="">&#10003;</span> Masuk</a>
                        </div>
                    </div>
                    <div class="col">
                        Contact
                        <p class="my-0">Email : masukstis30@gmail.com</p>
                        <p class="my-0">Instagram : iclass.edu</p>
                        <p class="my-0">Whatsapp : +62 822 3220 7642</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- js -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>