<?= $this->extend('templates/admin/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
    <?= session()->flash; ?>


                    <div class="row">
                        <div class="col">
                            <h3>Peserta</h3>
                        </div>
                    </div>

                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Jumlah Peserta</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $peserta; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-list-ul fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Sudah Dikonfimasi</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $sudahDikonfirmasi; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Sudah Membayar</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $sudahMembayar; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-exclamation-circle fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Belum Membayar</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $belumMembayar; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-times-circle fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h3>Peserta Tidak Aktif</h3>
                        </div>
                        <div class="col">
                            <?php $pta=[] ?>
                            <?php foreach ($pesertaTidakAktif as $p ) {
                                $pta[]=$p['id'];
                            }
                             ?>
                            <a href="<?= base_url('admin/hapusSemua/'.json_encode($pta)); ?>" class="btn btn-danger float-right">Hapus Semua</a>
                        </div>
                    </div>
                    

                    <div class="row">
                        <div class="col">
                            <table id="peserta-tidak-aktif" class="display nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Tanggal Mendaftar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no=1;
                                    foreach ($pesertaTidakAktif as $p) :
                                    ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $p['nama']; ?></td>
                                            <td><?= $p['username']; ?></td>
                                            <td><?= date('d M Y',strtotime($p['created_at'])); ?></td>
                                            <td><a class="badge badge-danger" href="<?= base_url('admin/hapusPeserta/'.$p['id']); ?>">hapus</a></td>
                                        </tr>
                                    <?php 
                                    $no++;
                                    endforeach;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

</div>
<?= $this->endSection(); ?>