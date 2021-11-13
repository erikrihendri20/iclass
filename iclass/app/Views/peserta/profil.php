<?= $this->extend('templates/peserta'); ?>
<?= $this->section('content'); ?>
<div class="content w-100 mb-0">
    <div class="row mt5 mnya-5">
        <div class="col-3 border-20 shadow px-0">
            <h5 class="font-weight-bold w-100 mx-3 mt-3" style="color: #12336D;">Online</h5>
            <div class="row mx-0 px-3 py-3">
                <div class="col-12 pr-0">
                    <div class="row justify-content-center align-content-start bg-white border border-20 shadow h-100 mx-0 p-3">
                        <h5 class="w-100" style="color: #12336D;">Online</h5>
                        <?php foreach ($others as $other) : ?>
                            <a href="https://wa.me/<?= $other['telepon'] ?>" class="d-flex aling-content-center bg-light rounded w-100 mb-2" style="height: 30px;">
                                <div class="col-1">
                                    <h5 class="fa fa-circle text-success p-1 mb-0"></h5>
                                </div>
                                <div class="col-11">
                                    <h5 class="col-11 text-truncate p-1 mb-0" style="color: #12336D;"><?= $other['nama'] ?></h5>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <input type="file" id="imgbanner" name="imgbanner" style="display: none;"> 
        <div class="col-6 pr-0">
            <div class="row bg-primary border-20 position-relative mx-0" style="height: 25%;">
                <img src="<?= base_url() ?>/img/banner/<?= $user['username'] ?>.jpg" alt="" class="w-100 h-100 border-20 position-absolute" style="object-fit: cover;" onerror='this.style.display = "none"'>
                <?php if ($user['username'] == session('username')) : ?>
                    <button id="uploadBanner" class="btn btn-light rounded-circle position-absolute p-2" style="bottom: 10px; right: 10px;">
                        <img src="<?= base_url() ?>/img/Aset/Asset 273@300x.png" alt="" class="position-relative" style="height: 25px;">
                    </button>
                <?php endif; ?>
            </div>
            <div class="row align-content-center h-25 mx-0 py-3">
                <div class="col-1 px-0 h-100"></div>
                <div class="col-2 px-0 h-100">
                    <div class="row bg-white border rounded-circle position-relative" style="margin-top: -75px;">
                        <img src="<?= base_url() ?>/img/profil.png" alt="" class="w-100 rounded-circle position-relative p-2">
                        <img src="<?= base_url() ?>/img/profil/<?= $user['username'] ?>.jpg" alt="" class="w-100 h-100 rounded-circle position-absolute p-2" style="object-fit: cover;" onerror='this.style.display = "none"'>
                    </div>
                </div>
                <div class="col-1 px-0 h-100"></div>
                <div class="col-8 px-0 h-100">
                    <h4 class="font-weight-bold mb-3" style="color: #12336D;"><?= $user['nama'] ?></h4>
                    <h5 class="font-weight-bold mb-3" style="color: #12336D;">
                        <span class="px-2 py-1" style="background-color: lightgrey; border-radius: 10px;"><?php echo (!empty($user['sekolah'])) ? $user['sekolah'] : "&nbsp;&nbsp;&nbsp;SMA...&nbsp;&nbsp;&nbsp;"; ?></span>
                    </h5>
                    <a href="<?= base_url() ?>/peserta/edit" class="btn btn-sm btn-warning" style="color: #12336D;<?php echo ($user['username'] == session('username')) ? '' : ' visibility: hidden;'; ?>">Edit Profil</a>
                </div>
            </div>
            <div class="row justify-content-start border-20 shadow mx-0 px5 py5" style="height: 40%;">
                <h5 class="font-weight-bold w-100 mb-0" style="height: 15%; color: #12336D;">Tentang Saya</h5>
                <h6 class="font-weight-normal w-100" style="height: 75%;"><?php echo (!empty($user['deskripsi'])) ? $user['deskripsi'] : '...'; ?></h6>
            </div>
        </div>
        <div class="col-3 pr-0">
            <div class="row bg-primary border-20 mx-0 px-3 py-2">
                <div class="col-2 p-1">
                    <img src="<?= base_url() ?>/img/Aset/Asset 278@300x.png" alt="" class="w-100">
                </div>
                <div class="col-10 pr-0">
                    <div class="row align-content-center h-100 mx-0">
                        <h5 class="text-white font-weight-bold w-100"><?php echo (!empty($user['domisili'])) ? $user['domisili'] : 'Indonesia'; ?></h5>
                        <h5 class="text-white font-weight bold w-100 mb-0"></h5>
                    </div>
                </div>
            </div>
            <div class="row bg-primary border-20 mt-3 mx-0 px-4 py-3">
                <div class="col-12 px-0">
                    <h5 class="text-white font-weight-bold">Media Sosial</h5>
                </div>

                <div class="col-2 mt-2 px-2"><img src="<?= base_url() ?>/img/Aset/Asset 282@300x.png" alt="" class="w-100"></div>
                <div class="col-10 mt-2 px-0 py-1"><a href="https://instagram.com/<?= $user['instagram'] ?>" class="h6 btn btn-link text-white font-weight-bold mb-0" style=><?php echo (!empty($user['instagram'])) ? '@'.$user['instagram'] : 'Instagram'; ?></a></div>

                <div class="col-2 mt-2 px-2"><img src="<?= base_url() ?>/img/Aset/Asset 283@300x.png" alt="" class="w-100"></div>
                <div class="col-10 mt-2 px-0 py-1"><a href="https://wa.me/<?= $user['telepon'] ?>" class="h6 btn btn-link text-white font-weight-bold mb-0" style=><?php echo (!empty($user['telepon'])) ? $user['telepon'] : 'WhatsApp'; ?></a></div>

                <div class="col-2 mt-2 px-2"><img src="<?= base_url() ?>/img/Aset/Asset 276@300x.png" alt="" class="w-100"></div>
                <div class="col-10 mt-2 px-0 py-1"><a href="https://tiktok.com/<?= $user['tiktok'] ?>" class="h6 btn btn-link text-white font-weight-bold mb-0" style=><?php echo (!empty($user['tiktok'])) ? '@'.$user['tiktok'] : 'TikTok'; ?></a></div>
            </div>
            <div class="row border-20 shadow mt-3 mx-0 px-4 py-3">
                <h5 class="font-weight-bold w-100" style="color: #12336D;">Biodata</h5>
                <div class="d-flex w-100 mt-2">
                    <div class="col-3 pl-0">
                        <img src="<?= base_url() ?>/img/Aset/Asset 267@300x.png" alt="" class="w-100 p-2">
                    </div>
                    <div class="col-9 px-0">
                        <div class="row align-content-center h-100 mx-0">
                            <h6 class="font-weight-bold w-100 mb-0" style="color: #12336D;"><?php echo (!empty($user['jenis_kelamin'])) ? $user['jenis_kelamin'] : '-'; ?></h6>
                            <h6 class="w-100" style="color: #12336D; font-size: 12px;">Jenis kelamin</h6>
                        </div>
                    </div>
                </div>
                <div class="d-flex w-100 mt-4">
                    <div class="col-3 pl-0">
                        <img src="<?= base_url() ?>/img/Aset/Asset 280@300x.png" alt="" class="w-100 p-2">
                    </div>
                    <div class="col-9 px-0">
                        <div class="row align-content-center h-100 mx-0">
                            <h6 class="font-weight-bold w-100 mb-0" style="color: #12336D;"><?php echo (!empty($user['tanggal_lahir'])) ? $user['tanggal_lahir'] : '-'; ?></h6>
                            <h6 class="w-100" style="color: #12336D; font-size: 12px;">Tanggal lahir</h6>
                        </div>
                    </div>
                </div>
                <div class="d-flex w-100 mt-4">
                    <div class="col-3 pl-0">
                        <img src="<?= base_url() ?>/img/Aset/Asset 279@300x.png" alt="" class="w-100 p-2">
                    </div>
                    <div class="col-9 px-0">
                        <div class="row align-content-center h-100 mx-0">
                            <h6 class="font-weight-bold w-100 mb-0" style="color: #12336D;"><?php echo (!empty($user['kelas_jurusan'])) ? $user['kelas_jurusan'] : '-'; ?></h6>
                            <h6 class="w-100" style="color: #12336D; font-size: 12px;">Kelas</h6>
                        </div>
                    </div>
                </div>
                <div class="d-flex w-100 mt-4">
                    <div class="col-3 pl-0">
                        <img src="<?= base_url() ?>/img/Aset/Asset 277@300x.png" alt="" class="w-100 p-2">
                    </div>
                    <div class="col-9 px-0">
                        <div class="row align-content-center h-100 mx-0">
                            <h6 class="font-weight-bold w-100 mb-0" style="color: #12336D;">
                                <?php echo date('j F Y', strtotime($user['created_at'])); ?>
                            </h6>
                            <h6 class="w-100" style="color: #12336D; font-size: 12px;">Bergabung</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row border-20 shadow mt5 mnya-5 px5 py5">
        <div id="carouselExampleControls" class="carousel slide w-100" data-ride="carousel" data-interval="30000" data-pause="hover">
            <div class="carousel-inner">
                <?php for ($i=0; $i<sizeof($users); $i++) { ?>
                    <div class="carousel-item<?php echo ($i==0) ? ' active' : ''; ?>">
                        <?php if ($i<sizeof($users)) { for ($j=0; $j<3; $j++) { ?>
                            <div class="row mx-0<?php echo ($j!=0) ? ' mt-4' : ''; ?>">
                                <?php if ($i<sizeof($users)) { ?>
                                    <div class="col-2">
                                        <a href="<?= base_url() ?>/peserta/profil/<?= $users[$i]['username'] ?>" class="row justify-content-center position-relative mx-0">
                                            <div class="row bg-white border rounded-circle position-relative w-75 mx-auto">
                                                <img src="<?= base_url() ?>/img/profil.png" alt="" class="w-100 rounded-circle position-relative p-2">
                                                <img src="<?= base_url() ?>/img/profil/<?= $users[$i]['username'] ?>.jpg" alt="" class="w-100 h-100 rounded-circle position-absolute p-2" style="object-fit: cover;" onerror='this.style.display = "none"'>
                                            </div>
                                            <h5 class="text-center text-truncate font-weight-bold position-relative w-100" style="color: #12336D;"><?= $users[$i]['nama'] ?></h5>
                                            <h6 class="rounded position-relative mb-0 px-2 py-1" style="background-color: lightgrey; color: #12336D;"><?php echo (!empty($users[$i]['sekolah'])) ? $users[$i]['sekolah'] : 'SMAN &nbsp;&nbsp;-'; ?></h6>
                                        </a>
                                    </div>
                                <?php $i++; } else { break; }?>
                                <?php if ($i<sizeof($users)) { ?>
                                    <div class="col-2">
                                        <a href="<?= base_url() ?>/peserta/profil/<?= $users[$i]['username'] ?>" class="row justify-content-center position-relative mx-0">
                                            <div class="row bg-white border rounded-circle position-relative w-75 mx-auto">
                                                <img src="<?= base_url() ?>/img/profil.png" alt="" class="w-100 rounded-circle position-relative p-2">
                                                <img src="<?= base_url() ?>/img/profil/<?= $users[$i]['username'] ?>.jpg" alt="" class="w-100 h-100 rounded-circle position-absolute p-2" style="object-fit: cover;" onerror='this.style.display = "none"'>
                                            </div>
                                            <h5 class="text-center text-truncate font-weight-bold position-relative w-100" style="color: #12336D;"><?= $users[$i]['nama'] ?></h5>
                                            <h6 class="rounded position-relative mb-0 px-2 py-1" style="background-color: lightgrey; color: #12336D;"><?php echo (!empty($users[$i]['sekolah'])) ? $users[$i]['sekolah'] : 'SMAN &nbsp;&nbsp;-'; ?></h6>
                                        </a>
                                    </div>
                                <?php $i++; } else { break; }?>
                                <?php if ($i<sizeof($users)) { ?>
                                    <div class="col-2">
                                        <a href="<?= base_url() ?>/peserta/profil/<?= $users[$i]['username'] ?>" class="row justify-content-center position-relative mx-0">
                                            <div class="row bg-white border rounded-circle position-relative w-75 mx-auto">
                                                <img src="<?= base_url() ?>/img/profil.png" alt="" class="w-100 rounded-circle position-relative p-2">
                                                <img src="<?= base_url() ?>/img/profil/<?= $users[$i]['username'] ?>.jpg" alt="" class="w-100 h-100 rounded-circle position-absolute p-2" style="object-fit: cover;" onerror='this.style.display = "none"'>
                                            </div>
                                            <h5 class="text-center text-truncate font-weight-bold position-relative w-100" style="color: #12336D;"><?= $users[$i]['nama'] ?></h5>
                                            <h6 class="rounded position-relative mb-0 px-2 py-1" style="background-color: lightgrey; color: #12336D;"><?php echo (!empty($users[$i]['sekolah'])) ? $users[$i]['sekolah'] : 'SMAN &nbsp;&nbsp;-'; ?></h6>
                                        </a>
                                    </div>
                                <?php $i++; } else { break; }?>
                                <?php if ($i<sizeof($users)) { ?>
                                    <div class="col-2">
                                        <a href="<?= base_url() ?>/peserta/profil/<?= $users[$i]['username'] ?>" class="row justify-content-center position-relative mx-0">
                                            <div class="row bg-white border rounded-circle position-relative w-75 mx-auto">
                                                <img src="<?= base_url() ?>/img/profil.png" alt="" class="w-100 rounded-circle position-relative p-2">
                                                <img src="<?= base_url() ?>/img/profil/<?= $users[$i]['username'] ?>.jpg" alt="" class="w-100 h-100 rounded-circle position-absolute p-2" style="object-fit: cover;" onerror='this.style.display = "none"'>
                                            </div>
                                            <h5 class="text-center text-truncate font-weight-bold position-relative w-100" style="color: #12336D;"><?= $users[$i]['nama'] ?></h5>
                                            <h6 class="rounded position-relative mb-0 px-2 py-1" style="background-color: lightgrey; color: #12336D;"><?php echo (!empty($users[$i]['sekolah'])) ? $users[$i]['sekolah'] : 'SMAN &nbsp;&nbsp;-'; ?></h6>
                                        </a>
                                    </div>
                                <?php $i++; } else { break; }?>
                                <?php if ($i<sizeof($users)) { ?>
                                    <div class="col-2">
                                        <a href="<?= base_url() ?>/peserta/profil/<?= $users[$i]['username'] ?>" class="row justify-content-center position-relative mx-0">
                                            <div class="row bg-white border rounded-circle position-relative w-75 mx-auto">
                                                <img src="<?= base_url() ?>/img/profil.png" alt="" class="w-100 rounded-circle position-relative p-2">
                                                <img src="<?= base_url() ?>/img/profil/<?= $users[$i]['username'] ?>.jpg" alt="" class="w-100 h-100 rounded-circle position-absolute p-2" style="object-fit: cover;" onerror='this.style.display = "none"'>
                                            </div>
                                            <h5 class="text-center text-truncate font-weight-bold position-relative w-100" style="color: #12336D;"><?= $users[$i]['nama'] ?></h5>
                                            <h6 class="rounded position-relative mb-0 px-2 py-1" style="background-color: lightgrey; color: #12336D;"><?php echo (!empty($users[$i]['sekolah'])) ? $users[$i]['sekolah'] : 'SMAN &nbsp;&nbsp;-'; ?></h6>
                                        </a>
                                    </div>
                                <?php $i++; } else { break; }?>
                                <?php if ($i<sizeof($users)) { ?>
                                    <div class="col-2">
                                        <a href="<?= base_url() ?>/peserta/profil/<?= $users[$i]['username'] ?>" class="row justify-content-center position-relative mx-0">
                                            <div class="row bg-white border rounded-circle position-relative w-75 mx-auto">
                                                <img src="<?= base_url() ?>/img/profil.png" alt="" class="w-100 rounded-circle position-relative p-2">
                                                <img src="<?= base_url() ?>/img/profil/<?= $users[$i]['username'] ?>.jpg" alt="" class="w-100 h-100 rounded-circle position-absolute p-2" style="object-fit: cover;" onerror='this.style.display = "none"'>
                                            </div>
                                            <h5 class="text-center text-truncate font-weight-bold position-relative w-100" style="color: #12336D;"><?= $users[$i]['nama'] ?></h5>
                                            <h6 class="rounded position-relative mb-0 px-2 py-1" style="background-color: lightgrey; color: #12336D;"><?php echo (!empty($users[$i]['sekolah'])) ? $users[$i]['sekolah'] : 'SMAN &nbsp;&nbsp;-'; ?></h6>
                                        </a>
                                    </div>
                                <?php $i++; } else { break; }?>
                            </div>
                        <?php } } ?>
                    </div>
                <?php } ?>
            </div>
            <a class="carousel-control-prev" style="width: 5%;" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="fas fa-chevron-circle-left h1 text-secondary" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" style="width: 5%;" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="fas fa-chevron-circle-right h1 text-secondary" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <script>
        <?php if (session('username') == $user['username']) { ?>
            $('#uploadBanner').click(function(){ $('#imgbanner').trigger('click'); });
            document.getElementById('imgbanner').addEventListener('change', function() {
                var formData = new FormData();
                formData.append('imgbanner', $('input[type=file]')[0].files[0]); 
                $.ajax({
                    url : '<?= base_url(); ?>'+'/peserta/simpanBanner',
                    data : formData,
                    type : 'POST',
                    processData: false,
                    contentType: false,
                    success : function(data){
                        alert(data); 
                    }
                });
            });
        <?php } ?>
    </script>

    <?php if (session('flash')) : ?>
        <?= session('flash'); ?>
    <?php endif; ?>
</div>
<?= $this->endSection(); ?>