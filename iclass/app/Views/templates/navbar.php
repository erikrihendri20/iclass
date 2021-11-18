<nav class="navbar navbar-expand-lg navbar-light border-20 mnya-5 my-2 py-3" style="background-color: #12336D; z-index: 1000;">
	<div class="row w-100 mnya-5">
		<div class="w-25 px-0">
			<a class="navbar-brand" href="<?= base_url(); ?>">
				<img src="<?= base_url() ?>/img/Background/Asset 38@300x.png" alt="" style="height: 40px;">
			</a>
		</div>
		<!--<button class="navbar-toggler w-75" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
		<!--	<span class="navbar-toggler-icon float-right"></span>-->
		<!--</button>-->

		<div class="w-75 px-0">
			<div class="h-100">
				<ul class="navbar-nav d-flex justify-content-center w-100 h-100">
					<div class="w-66 d-flex justify-content-center mx-0">
						<li class="nav-item	mx-2">
							<a class="h5 nav-item nav-link <?php if ($active == 'beranda') { echo 'active text-primary'; }
														else { echo "text-white"; } ?> font-weight-bold mb-0" href="<?= base_url(); ?>">Beranda</a>
						</li>


						<!-- <li class="nav-item">
							<a class="nav-item nav-link <?php if ($active == 'blog') { echo 'active text-primary'; }
														else { echo "text-white"; } ?> font-weight-bold mb-0" href="<?= base_url('landingpage/blog'); ?>">Blog</a>
						</li> -->

						<?php if (!session('username')) : ?>
							<li class="nav-item mx-2">
								<a class="h5 nav-item nav-link <?php if ($active == 'pilih paket') { echo 'active text-primary'; }
														else { echo "text-white"; } ?> font-weight-bold mb-0" href="<?= base_url('#section7'); ?>">Pilihan Paket</a>
							</li>
							<?php if (session('is_upload')) : ?>
							<a class="h5 nav-item mx-2 nav-link <?php if ($active == 'masuk') { echo 'active text-primary'; }
														else { echo "text-white"; } ?> font-weight-bold mb-0" href="<?= base_url(); ?>/Auth/keluarUpload">keluar</a>
							<?php elseif (session('is_waiting')) : ?>
							<a class="h5 nav-item  mx-2 nav-link <?php if ($active == 'masuk') { echo 'active text-primary font-weight-bold'; }
														else { echo "text-white"; } ?> font-weight-bold mb-0" href="<?= base_url(); ?>/Auth/keluarRuangTunggu">keluar</a>
							<?php else : ?>
							<li class="nav-item mx-2">
								<a class="h5 nav-item nav-link <?php if ($active == 'daftar') { echo 'active text-primary'; }
														else { echo "text-white"; } ?> font-weight-bold mb-0" href="<?= base_url('#section5'); ?>">Fasilitas</a>
							</li>
							<?php endif; ?>
						<?php else : ?>
							<li class="nav-item dropdown mx-2">
								<a class="h5 nav-link <?php if ($active == 'kelasku') { echo 'active text-primary'; }
															else { echo "text-white"; } ?> font-weight-bold mb-0" href="<?= base_url() ?>/kelasku">
									Kelasku
								</a>
							</li>
							<li class="nav-item mx-2">
								<a class="h5 nav-item nav-link <?php if ($active == 'materi') { echo 'active text-primary'; }
														else { echo "text-white"; } ?> font-weight-bold mb-0" 
														href="<?= base_url(); ?>/materi">Video Belajar</a>
							</li>
						<?php endif; ?>
					</div>
					<div class="w-34">
						<div class="row justify-content-end align-content-center h-100 mx-0">
							<?php if (!session('username')) : ?>
								<a href="<?= base_url(); ?>/masuk" class="nav-item nav-link btn btn-warning text-dark font-weight-bold px-3 py-1" style="font-size: 18px; border-radius: 35px;">Masuk</a>
							<?php else : ?>
								<div class="dropdown show">
									<a class="text-white font-weight-bold text-decoration-none dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<?= explode(' ', session('nama'))[0] ?>
										<img src="<?= base_url() ?>/img/Aset/Asset 267@300x.png" alt="" class="rounded-circle position-relative mx-1" style="width: 40px;">
										<img src="<?= base_url() ?>/img/profil/<?= session('username') ?>.jpg" alt="" class="rounded-circle position-absolute mx-1" style="width: 40px; height: 40px; right: 18px; object-fit: cover;" onerror='this.style.display = "none"'>
									</a>

									<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
										<a class="dropdown-item" href="<?= base_url(); ?>/peserta/profil/<?= session('username') ?>">Profil</a>
										<a class="dropdown-item" href="<?= base_url(); ?>/peserta/edit">Edit Profil</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="<?= base_url(); ?>/keluar">Keluar</a>
									</div>
								</div>
								<!-- <a href="<?= base_url(); ?>/peserta/profil/<?= session('username') ?>" class="nav-item nav-link btn btn-link text-white font-weight-bold px-3 py-0" style="font-size: 20px;">
									<div class="d-flex align-texts-center">	
										<?= explode(' ', session('nama'))[0] ?>
										<img src="<?= base_url() ?>/img/profil.png" alt="" class="h-100 rounded-circle position-relative p-3">
										<img src="<?= base_url() ?>/img/profil/<?= session('username') ?>.jpg" alt="" class="h-100 rounded-circle position-absolute p-3">
									</div>
								</a> -->
							<?php endif; ?>
						</div>
					</div>
				</ul>
			</div>
		</div>
	</div>
</nav>