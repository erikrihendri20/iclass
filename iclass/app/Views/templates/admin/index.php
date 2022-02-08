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
    <?php elseif ($active == 'kuis_edit' || $active == 'kuis_jadwal' || $active == 'kuis_hasil' ||  $active == 'latihan' || $active == 'tryout_jadwal') : ?>
        <script>
            $(document).ready(function() {
                $('#daftar-kuis').DataTable();

            });
        </script>
    <?php elseif ($active == 'daftar peserta') : ?>
        <script>
            function tampilkanPeserta() {
                $.get(
                    'tampilkanPeserta/' + $('#kode_paket').val(),
                    function(result) {
                        function init() {
                            $('#tabel-peserta').html(result)
                            $('#daftar-peserta').DataTable()
                        }
                        init()
                        $('.editPeserta').click(function() {
                            console.log($(this).parent())
                        })
                    })
            }

            $(document).ready(function() {
                tampilkanPeserta()
                $('#kode_paket').change(function() {
                    tampilkanPeserta()
                })
            });

            function ubahKelasPeserta(id) {
                $.post(
                    'ubahKelasPeserta', {
                        id: id,
                        kode_kelas: document.getElementById(id).value
                    },
                    function(result) {
                        $('#flash').html(result)
                    }
                )
            }
        </script>
    <?php elseif ($active == 'ubah paket') : ?>
        <script>
            function tampilkanPeserta() {
                $.get(
                    'tampilkanUbahPaket',
                    function(result) {
                        function init() {
                            $('#tabel-peserta').html(result);
                            $('#daftar-peserta').DataTable();
                        }
                        init();
                    }
                )
            }

            $(document).ready(function() {
                tampilkanPeserta();
            });
        </script>
    <?php elseif ($active == 'konfirmasi peserta') : ?>
        <script>
            function tampilkanPeserta() {
                $.get(
                    'tampilkanKonfirmasiPeserta/' + $('#kode_paket').val(),
                    function(result) {
                        function init() {
                            $('#tabel-peserta').html(result)
                            $('#daftar-peserta').DataTable()
                        }
                        init()
                    })
            }
            
            $(document).ready(function() {
                tampilkanPeserta();
                $('#kode_paket').change(function() {
                    tampilkanPeserta();
                })
            });

            function konfirmasi(id) {
                $.get(
                    'ubahStatus/' + id + '/2',
                    function(result) {
                        $('#flash').html(result)
                    }
                );
                document.getElementById(`bagianTombol${id}`).innerHTML='<button type="button" style="border: none;" class="batalkan badge badge-warning" value="'+id+'" onclick="batalkan('+id+');">Batalkan</button>';
                document.getElementById(`bagianStatus${id}`).innerHTML='2';
            }

            function batalkan(id) {
                $.get(
                    'ubahStatus/' + id + '/1',
                    function(result) {
                        $('#flash').html(result)
                    }
                );
                document.getElementById(`bagianTombol${id}`).innerHTML='<button type="button" style="border: none;" class="konfirmasi badge badge-success" value="'+id+'" onclick="konfirmasi('+id+');">Konfirmasi</button> <button type="button" style="border: none;" class="tolak badge badge-danger" value="'+id+'" onclick="tolak('+id+');">Tolak</button>';
                document.getElementById(`bagianStatus${id}`).innerHTML='1';
            }

            function tolak(id) {
                $.get(
                    'ubahStatus/' + id + '/1',
                    function(result) {
                        $('#flash').html(result)
                    }
                );
                document.getElementById(`bagianTombol${id}`).innerHTML='<button type="button" style="border: none;" class="konfirmasi badge badge-success" value="'+id+'" onclick="konfirmasi('+id+');">Konfirmasi</button> <button type="button" style="border: none;" class="tolak badge badge-danger" value="'+id+'" onclick="tolak('+id+');">Tolak</button>';
                document.getElementById(`bagianStatus${id}`).innerHTML='1';
            }
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
    <?php elseif ($active == 'rekaman') : ?>
        <script>
            function tampilkanRekaman() {
                $.get(
                    'tampilkanRekaman/',
                    function(result) {
                        function init() {
                            $('#tabel-rekaman').html(result);
                            $('#daftar-rekaman').DataTable();
                        }
                        init();
                    })
            }

            $(document).ready(function() {
                tampilkanRekaman();
            });

            function bukaModal(s){
                $('#'+s).modal('show');
            }

            function tutupModal(s){
                $('#'+s).modal('hide');
            }

            function formSubmit() {
                var url = "<?= base_url(); ?>/admin/tambahRekaman";
                var form = new FormData();
                
                form.append('kelas', $("#kelas").val());
                form.append('materi', $("#materi").val());
                form.append('rekaman', $('#rekaman')[0].files[0]);
                form.append('thumbnailRekaman', $('#thumbnailRekaman')[0].files[0]);
                form.append('ppt', $('#ppt')[0].files[0]);
                form.append('admin', $("#admin").val());

                $.ajax({
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();

                        xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = evt.loaded / evt.total;
                                percentComplete = parseInt(percentComplete * 100);

                                if (percentComplete == 100) {
                                    console.log(percentComplete);
                                    document.getElementById("progressBar").style.width=percentComplete+"%";
                                    document.getElementById("progressBar").innerHTML=percentComplete+"%";
                                    tutupModal('modalProgress');
                                    $('#modalProgress').modal('hide');
                                } else {
                                    console.log(percentComplete);
                                    document.getElementById("progressBar").style.width=percentComplete+"%";
                                    document.getElementById("progressBar").innerHTML=percentComplete+"%";
                                    $('#modalProgress').modal('show');
                                }

                            }
                        }, false);

                        return xhr;
                    },
                    url: url,
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form,
                    success: function(result) {
                        console.log(result);
                        result = JSON.parse(result);
                        
                        cekRekaman(result);
                    }
                });
            };

            function formSubmit2() {
                var url = "<?= base_url(); ?>/admin/tambahRekaman2";
                var form = new FormData();

                form.append('admin', $("#admin2").val());
                form.append('materi', $("#materi2").val());
                form.append('parts', $("#parts2").val());
                form.append('part', $("#part2").val());
                form.append('rekaman', $('#rekaman2')[0].files[0]);
                form.append('ppt', $('#ppt2')[0].files[0]);

                $.ajax({
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();

                        xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = evt.loaded / evt.total;
                                percentComplete = parseInt(percentComplete * 100);

                                if (percentComplete == 100) {
                                    console.log(percentComplete);
                                    document.getElementById("progressBar").style.width=percentComplete+"%";
                                    document.getElementById("progressBar").innerHTML=percentComplete+"%";
                                    tutupModal('modalProgress');
                                    $('#modalProgress').modal('hide');
                                } else {
                                    console.log(percentComplete);
                                    document.getElementById("progressBar").style.width=percentComplete+"%";
                                    document.getElementById("progressBar").innerHTML=percentComplete+"%";
                                    $('#modalProgress').modal('show');
                                }

                            }
                        }, false);

                        return xhr;
                    },
                    url: url,
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form,
                    success: function(result) {
                        console.log(result);
                        result = JSON.parse(result);
                        
                        if (result['tipe'] == 'error') {
                            $('#modalProgress').modal('hide');

                            swal(result["judul"], result["pesan"], result["tipe"]);

                            if (result['rekaman']) {
                                document.getElementById("errRekaman2").style.visibility="visible";
                                document.getElementById("errRekaman2").innerHTML=result['rekaman'];
                            }
                        } else {
                            $('#modalProgress').modal('hide');
                            $('#modalUnggah2').modal('hide');
                            swal(result["judul"], result["pesan"], result["tipe"]);

                            document.getElementById('admin2').value="";
                            document.getElementById('materi2').value="";
                            document.getElementById('parts2').value="";
                            document.getElementById("rekaman2").value="";
                            document.getElementById("errRekaman2").style.visibility="hidden";
                        }
                    }
                });
            }

            function cekRekaman(result) {
                tutupModal('modalUnggah');
                if (result["tipe"] == "error") {
                    tutupModal('modalProgress');
                    $('#modalProgress').modal('hide');
                    gagalUnggahRekaman(result);
                } else {
                    berhasilUnggahRekaman(result);
                }
            }

            function gagalUnggahRekaman(result) {
                tutupModal('modalProgress');
                $('#modalProgress').modal('hide');

                swal(result["judul"], result["pesan"], result["tipe"]);

                bukaModal('modalUnggah');
                $('#modalUnggah').modal('show');

                if (result['kelas']) {
                    document.getElementById("errKelas").style.visibility="visible";
                    document.getElementById("errKelas").innerHTML=result['kelas'];
                }

                if (result['materi']) {
                    document.getElementById("errMateri").style.visibility="visible";
                    document.getElementById("errMateri").innerHTML=result['materi'];
                }

                if (result['rekaman']) {
                    document.getElementById("errRekaman").style.visibility="visible";
                    document.getElementById("errRekaman").innerHTML=result['rekaman'];
                }

                if (result['thumbnailRekaman']) {
                    document.getElementById("errThumbnail").style.visibility="visible";
                    document.getElementById("errThumbnail").innerHTML=result['thumbnailRekaman'];
                }

                if (result['ppt']) {
                    document.getElementById("errPpt").style.visibility="visible";
                    document.getElementById("errPpt").innerHTML=result['ppt'];
                }

                if (result['admin']) {
                    document.getElementById("errAdmin").style.visibility="visible";
                    document.getElementById("errAdmin").innerHTML=result['admin'];
                }
            }

            function berhasilUnggahRekaman(result) {
                swal(result["judul"], result["pesan"], result["tipe"]);

                document.getElementById("errKelas").style.visibility="hidden";
                document.getElementById("errMateri").style.visibility="hidden";
                document.getElementById("errRekaman").style.visibility="hidden";
                document.getElementById("errThumbnail").style.visibility="hidden";
                document.getElementById("errPpt").style.visibility="hidden";

                document.getElementById("kelas").value="";
                document.getElementById("materi").value="";
                document.getElementById("rekaman").value="";
                document.getElementById("thumbnailRekaman").value="";
                document.getElementById("ppt").value="";

                tampilkanRekaman();
            }

            function tambahRekaman(admin, materi, parts) {
                document.getElementById('admin2').value=admin;
                document.getElementById('materi2').value=materi;
                document.getElementById('parts2').value=parts;
                $('#modalUnggah2').modal('show');
            }

            function ubahKelasRekaman(i, id, kelas) {
                var formi = new FormData();
                formi.append('id', id);
                formi.append('kelas', kelas);
                
                if (document.getElementById("kelas_"+i).checked) {
                    console.log('1');
                    formi.append('cek', '1');
                } else {
                    console.log('0');
                    formi.append('cek', '0');
                }

                $.ajax({
                    url: "<?= base_url() ?>/admin/ubahKelasRekaman",
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formi,
                    success: function(result) {
                        console.log(result);
                        if (result == "gagal") {
                            swal("Update Gagal!", "Gagal menambahkan materi ke kelas", "error");
                        } else {
                            tampilkanRekaman();
                        }
                    }
                });
            }

            function ubahAdminRekaman(id) {
                var admin = document.getElementById('adminSelect').value;

                $.ajax({
                    url: "<?= base_url() ?>/admin/ubahAdminRekaman/"+id+"/"+admin,
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(result) {
                        console.log(result);
                        if (result == "gagal") {
                            swal("Update Gagal!", "Gagal mengubah pengajar dari materi", "error");
                        } else {
                            tampilkanRekaman();
                        }
                    }
                });
            }

            function nonton(admin, materi, part) {
                document.getElementById('vidsrc').src=`<?= base_url() ?>/vid/Rekaman Kelas/${admin}/${materi} - ${part}.mp4`;
                document.getElementById('vid').load();
                $('#modalNonton').modal('show');
            }

            function hapusRekaman(admin, materi, part) {
                $.ajax({
                    url: "<?= base_url() ?>/admin/hapusRekaman/"+admin.replace(/\s/g, '_')+"/"+materi.replace(/\s/g, '_')+"/"+part.replace(/\s/g, '_'),
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(result) {
                        console.log(result);

                        if (result == "gagal") {
                            swal("", "Part gagal dihapus", "error");
                        } else {
                            if (result == materi) {
                                document.getElementById(admin+materi+part).style.display='none';
                            } else if (result == part) {
                                document.getElementById('tr'+admin+materi).style.display='none';
                            }
                            swal("", "Part berhasil dihapus", 'success');
                        }
                    }
                });
            }
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