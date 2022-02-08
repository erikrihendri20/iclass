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

    <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
    <title><?= $title; ?></title>
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="72" class="position-relative" style="min-width: 1300px; overflow-x: auto; min-height: 100vh;">

    <?= $this->include('templates/navbar'); ?>

    <!-- Begin Page Content -->
    <?= $this->renderSection('content'); ?>

    <div style="padding-bottom: 250px;"></div>

    <?= $this->include('templates/footer'); ?>

</body>

</html>