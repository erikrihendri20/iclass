<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="<?= base_url(); ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Daftar Pengajar</h1>
                                    </div>
                                    <?php $validation = service('validation') ?>
                                    <?= session()->flash; ?>
                                    <form class="user" action="<?= base_url(); ?>/auth/daftarAdmin" method="POST">
                                        
                                        <div class="form-group">
                                            <input type="text" value="<?= old('nama'); ?>" class="form-control form-control-user <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" id="nama" name="nama" placeholder="Nama">
                                            <div class="invalid-feedback">
                                                <?= service('validation')->getError('nama'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" value="<?= old('username'); ?>" class="form-control form-control-user <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>" id="username" name="username" placeholder="Username">
                                            <div class="invalid-feedback">
                                                <?= service('validation')->getError('username'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" id="password" name="password" placeholder="Password">
                                            <div class="invalid-feedback">
                                                <?= service('validation')->getError('password'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user <?= ($validation->hasError('konfirmasi-password')) ? 'is-invalid' : '' ?>" id="konfirmasi-password" name="konfirmasi-password" placeholder="Konfirmasi Password">
                                            <div class="invalid-feedback">
                                                <?= service('validation')->getError('konfirmasi-password'); ?>
                                            </div>
                                        </div>
                                        <button name="submit" class="btn btn-primary btn-user btn-block">
                                            Daftar
                                        </button>
                                        <p class="d-block text-center mb-0 mt-4">Sudah punya akun?</p>
                                        <a class="d-block text-center" href="<?= base_url(); ?>/auth/masukAdmin">Masuk</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script>

</body>

</html>