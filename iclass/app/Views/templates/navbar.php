<nav class="navbar navbar-expand-lg navbar-light bg-white position-static w-100 pb-3" style="min-width: 1300px; z-index: 1000;">
	<div class="row mx-auto" style="width: 80%;">
		<a class="navbar-brand" href="<?= base_url(); ?>">
			<img class="h-8 w-auto sm:h-10" src="<?= base_url() ?>/images/iclass.png" alt="Logo" />
		</a>
		<button class="navbar-toggler ml-auto bg-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon float-right"></span>
		</button>

		<div class="collapse navbar-collapse ml-auto px-0" id="navbarSupportedContent" style="width: 85%;">
			<ul class="navbar-nav row justify-content-end w-100 h-100">
				<li class="nav-item row align-content-center ml-0 mr-4">
					<a href="<?= base_url(); ?>" 
						class="text-base text-gray-500 hover:text-gray-700 <?= ($active=='beranda') ? 'font-bold' : 'font-medium' ?>">Beranda</a>
				</li>

				<?php if (!session('username')) : ?>
					<li class="nav-item row align-content-center ml-0 mr-4">
						<a href="<?= base_url(); ?>#pricing" class="text-base font-medium text-gray-500 hover:text-gray-700">Pilihan Paket</a>
					</li>
					<li class="nav-item row align-content-center ml-0 mr-4">
						<a href="<?= base_url(); ?>#features" class="text-base font-medium text-gray-500 hover:text-gray-700">Fasilitas</a>
					</li>
				<?php else : ?>
					<li class="nav-item row align-content-center ml-0 mr-4">
						<a href="<?= base_url() ?>/kelasku" 
							class="text-base text-gray-500 hover:text-gray-700 <?= ($active=='kelasku') ? 'font-bold' : 'font-medium' ?>">Kelasku</a>
					</li>
					<li class="nav-item row align-content-center ml-0 mr-4">
						<a href="<?= base_url(); ?>/materi" 
								class="text-base text-gray-500 hover:text-gray-700 <?= ($active=='materi') ? 'font-bold' : 'font-medium' ?>">Ruang Belajar</a>
					</li>
					<li class="nav-item row align-content-center ml-0 mr-4">
						<a href="<?= base_url(); ?>/peserta/profil/<?= session('username') ?>" 
							class="text-base text-gray-500 hover:text-gray-700 <?= ($active=='profil') ? 'font-bold' : 'font-medium' ?>">Profil</a>
					</li>
				<?php endif; ?>
				
				<div class="row justify-content-end align-content-center ml-2 mr-0 pl-4">
					<?php if (!session('username')) : ?>
						<a class="flex items-center border border-gray-400 rounded-full text-base text-gray-500 font-medium px-4 py-2 mr-2 cursor-pointer hover:bg-gray-200 hover:text-gray-700 transition duration-300 "
							href="<?= base_url(); ?>/masuk">Masuk / Daftar</a>
					<?php else : ?>
						<div class="dropdown show ml-2">
							<a class="row align-items-center text-gray-500 text-decoration-none dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?= explode(' ', session('nama'))[0] ?>
								<img src="<?= base_url() ?>/img/profil/<?= session('username') ?>.jpg" alt="" class="bg-white border-30 mx-1" style="object-fit:cover; width: 40px; height: 40px; object-fit: cover;" onerror="this.src='<?= base_url() ?>/img/profil.png'">
							</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="<?= base_url(); ?>/keluar">Keluar</a>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</ul>
		</div>
	</div>
</nav>