<nav class="navbar navbar-expand-lg navbar-light position-static w-100 mb-2 py-3" style="min-width: 1300px; background-color: #12336D; z-index: 1000;">
	<div class="row mx-auto" style="width: 80%;">
		<a class="navbar-brand" href="<?= base_url(); ?>">
			<img src="<?= base_url() ?>/img/Background/Asset 38@300x.png" alt="" style="height: 40px;">
		</a>
		<button class="navbar-toggler ml-auto bg-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon float-right"></span>
		</button>

		<div class="collapse navbar-collapse ml-auto px-0" id="navbarSupportedContent" style="width: 85%;">
			<ul class="navbar-nav row justify-content-end w-100 h-100">
				<li class="nav-item row align-content-center mx-2">
					<a style="font-size: 1rem;" class="nav-item row mx-0 align-content-center nav-link <?php if ($active == 'beranda') { echo 'font-weight-bold text-white'; }
												else { echo "text-white"; } ?> mb-0" href="<?= base_url(); ?>"><span>Beranda</span></a>
				</li>


				<!-- <li class="nav-item row align-content-center">
					<a class="nav-item row align-content-center nav-link <?php if ($active == 'blog') { echo 'font-weight-bold text-white'; }
												else { echo "text-white"; } ?> font-weight-bold mb-0" href="<?= base_url('landingpage/blog'); ?>">Blog</a>
				</li> -->

				<?php if (!session('username')) : ?>
					<li class="nav-item row align-content-center mx-2">
						<a style="font-size: 1rem;" class="nav-item row mx-0 align-content-center nav-link <?php if ($active == 'pilih paket') { echo 'font-weight-bold text-white'; }
												else { echo "text-white"; } ?> mb-0" href="<?= base_url('#section7'); ?>"><span>Pilihan Paket</span></a>
					</li>
					<?php if (session('is_upload')) : ?>
					<a style="font-size: 1rem;" class="nav-item row mx-0 align-content-center mx-2 nav-link <?php if ($active == 'masuk') { echo 'font-weight-bold text-white'; }
												else { echo "text-white"; } ?> mb-0" href="<?= base_url(); ?>/Auth/keluarUpload"><span>keluar</span></a>
					<?php elseif (session('is_waiting')) : ?>
					<a style="font-size: 1rem;" class="nav-item row mx-0 align-content-center  mx-2 nav-link <?php if ($active == 'masuk') { echo 'font-weight-bold text-white'; }
												else { echo "text-white"; } ?> mb-0" href="<?= base_url(); ?>/Auth/keluarRuangTunggu"><span>keluar</span></a>
					<?php else : ?>
					<li class="nav-item row align-content-center mx-2">
						<a style="font-size: 1rem;" class="nav-item row mx-0 align-content-center nav-link <?php if ($active == 'daftar') { echo 'font-weight-bold text-white'; }
												else { echo "text-white"; } ?> mb-0" href="<?= base_url('#section5'); ?>"><span>Fasilitas</span></a>
					</li>
					<?php endif; ?>
				<?php else : ?>
					<li class="nav-item row align-content-center dropdown mx-2">
						<a style="font-size: 1rem;" class="nav-link <?php if ($active == 'kelasku') { echo 'font-weight-bold text-white'; }
													else { echo "text-white"; } ?> mb-0" href="<?= base_url() ?>/kelasku">
							<span>Kelasku</span>
						</a>
					</li>
					<li class="nav-item row align-content-center mx-2">
						<a style="font-size: 1rem;" class="nav-item row mx-0 align-content-center nav-link <?php if ($active == 'materi') { echo 'font-weight-bold text-white'; }
												else { echo "text-white"; } ?> mb-0" 
												href="<?= base_url(); ?>/materi"><span>Ruang Belajar</span></a>
					</li>
					<li class="nav-item row align-content-center mx-2">
						<a style="font-size: 1rem;" class="nav-item row mx-0 align-content-center nav-link <?php if ($active == 'profil') { echo 'font-weight-bold text-white'; }
												else { echo "text-white"; } ?> mb-0" 
												href="<?= base_url(); ?>/peserta/profil/<?= session('username') ?>"><span>Profil</span></a>
					</li>
				<?php endif; ?>
				<div class="row justify-content-end align-content-center border-left h-75 my-auto ml-2 mr-0 pl-4">
					<?php if (!session('username')) : ?>
						<a href="<?= base_url(); ?>/masuk" class="nav-item row align-content-center nav-link btn btn-warning text-dark ml-2 px-3 py-2" style="font-size: 18px; border-radius: 35px;">Masuk</a>
					<?php else : ?>
						<div class="dropdown show ml-2">
							<a class="text-white text-decoration-none dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?= explode(' ', session('nama'))[0] ?>
								<img src="<?= base_url() ?>/img/profil/<?= session('username') ?>.jpg" alt="" class="bg-white border-30 mx-1 p-1" style="object-fit:cover; width: 40px; height: 40px; object-fit: cover;" onerror="this.src='<?= base_url() ?>/img/profil.png'">
							</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="<?= base_url(); ?>/keluar">Keluar</a>
							</div>
						</div>
						<!-- <a href="<?= base_url(); ?>/peserta/profil/<?= session('username') ?>" class="nav-item row align-content-center nav-link btn btn-link text-white font-weight-bold px-3 py-0" style="font-size: 20px;">
							<div class="row align-texts-center">	
								<?= explode(' ', session('nama'))[0] ?>
								<img src="<?= base_url() ?>/img/profil.png" alt="" class="h-100 rounded-circle position-relative p-3">
								<img src="<?= base_url() ?>/img/profil/<?= session('username') ?>.jpg" alt="" class="h-100 rounded-circle position-absolute p-3">
							</div>
						</a> -->
					<?php endif; ?>
				</div>
			</ul>
		</div>
	</div>
</nav>