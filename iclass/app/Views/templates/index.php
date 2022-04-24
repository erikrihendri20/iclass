<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>/css/bootstrap/bootstrap.css">
    <?php if (isset($css)) : ?>
        <link rel="stylesheet" href="<?= base_url(); ?>/css/<?= $css; ?>">
    <?php endif; ?>
    <link rel="icon" href="<?=base_url()?>/img/LOGO.jpg" type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='<?= base_url(); ?>/css/fullcalendar.css' rel='stylesheet' />

    <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
    <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/redux@latest/dist/redux.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('css/font.css'); ?>">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/fullpage.css" />
    <script src="vendors/easings.min.js"></script>
    <script type="text/javascript" src="vendors/scrolloverflow.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/js/fullpage.js"></script>
    <script src="https://cdn.anychart.com/releases/8.10.0/js/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.10.0/js/anychart-pie.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script type="text/javascript" src="https://www.amcharts.com/lib/3/pie.js"></script>

    <link rel="preload" href="<?= base_url() ?>/_next/static/css/3e41ab69d4599de3.css" as="style" />
    <link rel="stylesheet" href="<?= base_url() ?>/_next/static/css/3e41ab69d4599de3.css" data-n-g="" />
    <noscript data-n-css=""></noscript>
    <title><?= $title; ?></title>
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="72" class="position-relative" style="min-width: 1300px; overflow-x: auto; min-height: 100vh;">

    <?= $this->include('templates/navbar'); ?>

    <!-- Begin Page Content -->
    <?= $this->renderSection('content'); ?>

    <div style="padding-bottom: 50px;"></div>

    <?= $this->include('templates/footer'); ?>

    
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