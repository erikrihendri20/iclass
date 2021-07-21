<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>/css/bootstrap/bootstrap.css">
    <?php if (isset($css)) : ?>
        <link rel="stylesheet" href="<?= base_url(); ?>/css/<?= $css; ?>">
    <?php endif; ?>
    <link rel="icon" href="<?=base_url()?>/img/LOGO.jpg" type="image/x-icon"/>
    <link rel="stylesheet" href="/css/font.css">

    <!-- <link rel="stylesheet" href="<?= base_url(); ?>/css/tailwindcss/tailwind.css"> -->
    <title>Document</title>
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="72" class="position-relative" style="overflow-x: hidden;">

    <?= $this->include('templates/navbar'); ?>

    <div class="row">
        <div id="bagian_atas" class="col-md-3">
            <div class="ml-0 border border-top-0 mx-auto position-relative" style="height: 17em; box-shadow: 2px 2px 2px 0 lightgrey; border-radius: 0 10px 10px 0;">
                <div class="row">
                    <div class="col text-center">
                        <a href="<?= base_url('peserta/profil'); ?>" class="my-2 btn btn-light text-primary font-weight-bold rounded w-50">Profil akun</a>
                        <a href="<?= base_url('peserta/edit'); ?>" class="my-2 btn btn-light text-primary font-weight-bold rounded w-50">Edit akun</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-right position-absolute" style="bottom: 5%;">
                        <a href="<?= base_url('keluar'); ?>" class="btn btn-light btn-sm text-dark font-weight-bold rounded">Keluar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">

            <!-- Begin Page Content -->
            <?= $this->renderSection('content'); ?>

        </div>
    </div>

    <div style="padding-bottom: 250px;"></div>

    <?= $this->include('templates/footer'); ?>

</body>

</html>