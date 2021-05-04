<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <?php if (isset($css)) : ?>
        <link rel="stylesheet" href="<?= base_url(); ?>/css/<?= $css; ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="/css/font.css">
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet"> -->

    <!-- <link rel="stylesheet" href="<?= base_url(); ?>/css/tailwindcss/tailwind.css"> -->
    <title>Document</title>
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="72" class="position-relative">

    <?= $this->include('templates/navbar'); ?>

    <div class="row">
        <div class="col-md-3">
            <div class="ml-0 border rounded-right mx-auto position-relative" style="height: 17em">
                <div class="row">
                    <div class="col text-center">
                        <a href="<?= base_url('peserta/profil'); ?>" class="my-2 btn btn-light text-primary rounded w-50">Profil akun</a>
                        <a href="<?= base_url('peserta/edit'); ?>" class="my-2 btn btn-light text-primary rounded w-50">Edit akun</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-right position-absolute" style="bottom: 5%;">
                        <a href="<?= base_url('keluar'); ?>" class="btn btn-light text-primary rounded">Keluar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">

            <!-- Begin Page Content -->
            <?= $this->renderSection('content'); ?>

        </div>
    </div>

    <?= $this->include('templates/footer'); ?>

</body>

</html>