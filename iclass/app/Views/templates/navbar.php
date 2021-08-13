<nav class="navbar navbar-expand-lg navbar-light border-20 mnya-5 my-2" style="background-color: #000080;">
	<div class="row w-100 mx-0">
		<div class="col-5 px-0">
			<a class="navbar-brand" href="<?= base_url(); ?>">
				<img src="<?= base_url() ?>/img/Background/Asset 38@300x.png" alt="" style="height: 40px;">
			</a>
		</div>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="col-7 px-0">
			<div class="d-flex align-content-center h-100 mx-0 px-0">
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav w-100">
						<li class="nav-item	mx-2">
							<a class="nav-item nav-link <?php if ($active == 'beranda') { echo 'active text-primary'; }
														else { echo "text-white"; } ?> font-weight-bold" href="<?= base_url(); ?>">Beranda</a>
						</li>


					<!-- <li class="nav-item">
						<a class="nav-item nav-link <?php if ($active == 'blog') { echo 'active text-primary'; }
													else { echo "text-white"; } ?> font-weight-bold" href="<?= base_url('landingpage/blog'); ?>">Blog</a>
					</li> -->

					<?php if (!session('username')) : ?>
						<li class="nav-item mx-2">
							<a class="nav-item nav-link <?php if ($active == 'pilih paket') { echo 'active text-primary'; }
													else { echo "text-white"; } ?> font-weight-bold" href="<?= base_url('#section7'); ?>">Pilihan Paket</a>
						</li>
						<?php if (session('is_upload')) : ?>
						<a class="nav-item mx-2 nav-link <?php if ($active == 'masuk') { echo 'active text-primary'; }
													else { echo "text-white"; } ?> font-weight-bold" href="<?= base_url(); ?>/Auth/keluarUpload">keluar</a>
						<?php elseif (session('is_waiting')) : ?>
						<a class="nav-item  mx-2 nav-link <?php if ($active == 'masuk') { echo 'active text-primary font-weight-bold'; }
													else { echo "text-white"; } ?> font-weight-bold" href="<?= base_url(); ?>/Auth/keluarRuangTunggu">keluar</a>
						<?php else : ?>
						<li class="nav-item mx-2">
							<a class="nav-item nav-link <?php if ($active == 'daftar') { echo 'active text-primary'; }
													else { echo "text-white"; } ?> font-weight-bold" href="<?= base_url('#section5'); ?>">Fasilitas</a>
						</li>
						<li class="nav-item d-flex align-self-center ml-auto">
							<a class="nav-item nav-link btn btn-warning text-dark px-3 py-0 font-weight-bold" href="<?= base_url(); ?>/masuk">Masuk</a>
						</li>
						<?php endif; ?>
					<?php else : ?>
						<li class="nav-item dropdown mx-2">
						<a class="nav-link dropdown-toggle <?php if ($active == 'kelasku') { echo 'active text-primary'; }
													else { echo "text-white"; } ?> font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Kelasku
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="<?= base_url('Kelasku/jadwal'); ?>">Jadwal</a>
							<!-- <a class="dropdown-item" href="<?= base_url('Kelasku/kuis_kode'); ?>">Kuis</a> -->
							<a class="dropdown-item" href="<?= base_url('Kelasku/latihan'); ?>">Latihan</a>
							<a class="dropdown-item" href="<?= base_url('Kelasku/rekaman'); ?>">Rekaman Kelas</a>
						</div>
						</li>
						<li class="nav-item mx-2">
							<a class="nav-item nav-link <?php if ($active == 'materi') { echo 'active text-primary'; }
													else { echo "text-white"; } ?> font-weight-bold" href="<?= base_url(); ?>/materi">Video Materi</a>
						</li>
						<li class="nav-item dropdown mx-2">
							<a class="nav-link dropdown-toggle font-weight-bold <?php if ($active == 'profil') { echo 'active text-primary'; }
																			else { echo "text-white"; } ?> " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Welcome, <?= session('username') ?>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?= base_url('peserta/profil'); ?>">Profil Akun</a>
								<a class="dropdown-item" href="<?= base_url('peserta/edit'); ?>">Edit Akun</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?= base_url('keluar'); ?>">Keluar</a>
							</div>
						</li>
					<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</nav>