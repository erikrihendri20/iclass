<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <?php foreach ($css as $style) : ?>
        <link rel="stylesheet" href="<?= base_url(); ?>/css/<?= $style; ?>">
    <?php endforeach; ?>
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>/css/tailwindcss/tailwind.css"> -->
    <link href='<?= base_url(); ?>/css/fullcalendar.css' rel='stylesheet' />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Document</title>
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="72" class="position-relative">

    <?= $this->include('templates/navbar'); ?>

    <!-- Begin Page Content -->
    <?= $this->renderSection('content'); ?>

    <?= $this->include('templates/footer'); ?>

</body>

</html>