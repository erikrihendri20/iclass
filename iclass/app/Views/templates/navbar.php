<div class="relative bg-white" style="min-width: 1300px;">
	<div class="max-w-7xl mx-auto px-4 sm:px-6">
		<div class="flex justify-between items-center py-2 md:justify-start md:space-x-10">
			<div class="flex justify-start flex-1">
				<a href="#">
					<img class="h-8 w-auto sm:h-10" src="<?= base_url() ?>/images/iclass.png" alt="Logo" />
				</a>
			</div>
			<div class="-mr-2 -my-2 md:hidden">
				<button class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
					id="headlessui-popover-button-undefined" type="button" aria-expanded="false">
					<span class="sr-only">Open menu</span><svg xmlns="http://www.w3.org/2000/svg" fill="none"
						viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"
						class="h-6 w-6">
						<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
					</svg>
				</button>
			</div>
			<div class="hidden md:flex items-center space-x-10">
				<a href="<?= base_url(); ?>" 
					class="text-base text-gray-500 hover:text-gray-700 <?= ($active=='beranda') ? 'font-bold' : 'font-medium' ?>">Beranda</a>

				<?php if (!session('username')) : ?>
					<a href="<?= base_url(); ?>#pricing" class="text-base font-medium text-gray-500 hover:text-gray-700">Pilihan Paket</a>
					<a href="<?= base_url(); ?>#features" class="text-base font-medium text-gray-500 hover:text-gray-700">Fasilitas</a>
					<a class="flex items-center border border-gray-400 rounded-full text-base text-gray-500 font-medium px-4 pt-1.5 pb-2 mr-2 cursor-pointer hover:bg-gray-200 hover:text-gray-700 transition duration-300 "
						href="<?= base_url(); ?>/masuk">Masuk / Daftar</a>
				<?php else : ?>
					<a href="<?= base_url() ?>/kelasku" 
						class="text-base text-gray-500 hover:text-gray-700 <?= ($active=='kelasku') ? 'font-bold' : 'font-medium' ?>">Kelasku</a>
					<a href="<?= base_url(); ?>/materi" 
						class="text-base text-gray-500 hover:text-gray-700 <?= ($active=='materi') ? 'font-bold' : 'font-medium' ?>">Ruang Belajar</a>
					<a href="<?= base_url(); ?>/peserta/profil/<?= session('username') ?>" 
						class="text-base text-gray-500 hover:text-gray-700 <?= ($active=='profil') ? 'font-bold' : 'font-medium' ?>">Profil</a>
					
					<div class="dropdown show ml-2">
						<a class="text-white text-decoration-none dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<?= explode(' ', session('nama'))[0] ?>
							<img src="<?= base_url() ?>/img/profil/<?= session('username') ?>.jpg" alt="" class="bg-white border-30 mx-1 p-1" style="object-fit:cover; width: 40px; height: 40px; object-fit: cover;" onerror="this.src='<?= base_url() ?>/img/profil.png'">
						</a>

						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
							<a class="dropdown-item" href="<?= base_url(); ?>/keluar">Keluar</a>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>