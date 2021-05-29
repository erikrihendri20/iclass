<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- datatable -->

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/css/sb-admin-2.min.css" rel="stylesheet">

    <?php if (isset($css)) : ?>
        <link rel="stylesheet" href="<?= base_url(); ?>/css/<?= $css; ?>">
    <?php endif; ?>

    <link rel="icon" href="<?=base_url()?>/img/LOGO.jpg" type="image/x-icon"/>
    <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />

    <link href='<?= base_url(); ?>/css/fullcalendar.css' rel='stylesheet' />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?= $this->include('templates/admin/sidebar'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?= $this->include('templates/admin/topbar'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <?= $this->renderSection('content'); ?>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; iClass <?= date('Y'); ?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../auth/keluarAdmin">Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>

    <!-- datatable -->
    <?php if ($active == 'daftar kelas') : ?>
        <script>
            $(document).ready(function() {
                $('#daftar-kelas').DataTable();

            });
        </script>
    <?php elseif ($active == 'kuis_edit' || $active == 'kuis_jadwal' || $active == 'kuis_hasil' ||  $active == 'latihan') : ?>
        <script>
            $(document).ready(function() {
                $('#daftar-kuis').DataTable();

            });
        </script>
    <?php elseif ($active == 'daftar peserta') : ?>
        <script>
            $(document).ready(function() {
                function tampilkanPeserta() {
                    $.get(
                        'tampilkanPeserta/' + $('#kode_paket').val(),
                        function(result) {
                            function init() {
                                $('#tabel-peserta').html(result)
                                $('#daftar-peserta').DataTable()
                            }
                            init()
                            $('.paket').change(function() {
                                $.post(
                                    'ubahKelasPeserta', {
                                        id: $(this).attr('id'),
                                        kode_kelas: $(this).val()
                                    },
                                    function(result) {
                                        $('#flash').html(result)
                                    }
                                )
                            })
                            $('.editPeserta').click(function() {
                                console.log($(this).parent())
                            })
                        })
                }
                tampilkanPeserta()
                $('#kode_paket').change(function() {
                    tampilkanPeserta()
                })
            });
        </script>
    <?php elseif ($active == 'konfirmasi peserta') : ?>
        <script>
            $(document).ready(function() {
                function tampilkanPeserta() {
                    $.get(
                        'tampilkanKonfirmasiPeserta/' + $('#kode_paket').val(),
                        function(result) {
                            function init() {
                                $('#tabel-peserta').html(result)
                                $('#daftar-peserta').DataTable()
                            }
                            init()
                            $('.konfirmasi').click(function() {
                                $.get(
                                    'ubahStatus/' + $(this).val() + '/2',
                                    function(result) {
                                        tampilkanPeserta()
                                        $('#flash').html(result)
                                    }
                                )
                            })
                            $('.batalkan').click(function() {
                                $.get(
                                    'ubahStatus/' + $(this).val() + '/0',
                                    function(result) {
                                        tampilkanPeserta()
                                        $('#flash').html(result)
                                    }
                                )
                            })
                            $('.tolak').click(function() {
                                $.get(
                                    'ubahStatus/' + $(this).val() + '/0',
                                    function(result) {
                                        tampilkanPeserta()
                                        $('#flash').html(result)
                                    }
                                )
                            })
                        })
                }
                tampilkanPeserta()
                $('#kode_paket').change(function() {
                    tampilkanPeserta()
                })
            });
        </script>

    <?php elseif ($active == 'daftar admin') : ?>
        <script>
            $(document).ready(function() {
                function tampilkanAdmin() {
                    $.get(
                        'tampilkanAdmin',
                        function(result) {
                            function init() {
                                $('#tabel-admin').html(result)
                                $('#daftar-admin').DataTable()
                            }
                            init()
                            $('.konfirmasi').click(function() {
                                $.get(
                                    'ubahStatusAdmin/' + $(this).val() + '/1',
                                    function(result) {
                                        tampilkanAdmin()
                                        $('#flash').html(result)
                                    }
                                )
                            })
                            $('.tolak').click(function() {
                                $.get(
                                    'ubahStatusAdmin/' + $(this).val() + '/0',
                                    function(result) {
                                        tampilkanAdmin()
                                        $('#flash').html(result)
                                    }
                                )
                            })
                        })
                }
                tampilkanAdmin()
            });
        </script>
    <?php elseif ($active == 'dashboard'): ?>
        <script>
            $(document).ready(function() {
                $('#peserta-tidak-aktif').DataTable()
                
            });
            
        </script>
    <?php endif; ?>

    <!-- calendar -->
    <?php if ($active == 'atur jadwal pertemuan') : ?>
        <link href='<?= base_url(); ?>/css/fullcalendar.print.css' rel='stylesheet' media='print' />
        <script src='<?= base_url(); ?>/js/jquery-1.10.2.js' type="text/javascript"></script>
        <script src='<?= base_url(); ?>/js/jquery-ui.custom.min.js' type="text/javascript"></script>
        <script src='<?= base_url(); ?>/js/fullcalendar.js' type="text/javascript"></script>

        <script src="<?= base_url(); ?>/js/atur-jadwal-pertemuan.js"></script>
    <?php elseif ($active == 'atur jadwal tryout') : ?>

        <link href='<?= base_url(); ?>/css/fullcalendar.print.css' rel='stylesheet' media='print' />
        <script src='<?= base_url(); ?>/js/jquery-1.10.2.js' type="text/javascript"></script>
        <script src='<?= base_url(); ?>/js/jquery-ui.custom.min.js' type="text/javascript"></script>
        <script src='<?= base_url(); ?>/js/fullcalendar.js' type="text/javascript"></script>

        <script src="<?= base_url(); ?>/js/atur-jadwal-tryout.js"></script>

    <?php endif; ?>

    <!-- Custom scripts for all pages-->

</body>

</html>