<nav class="navbar navbar-expand-lg navbar-light px-5 py-2">
    <a class="navbar-brand font-weight-bold" href="<?= base_url(); ?>">
        <h2>
            <span class="text-warning">[i]<span class="text-primary">Class</span></span>
        </h2>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
            <h6>
                <a class="nav-item nav-link <?php if ($active == 'beranda') echo 'active text-primary font-weight-bold'; ?>" href="<?= base_url(); ?>">Beranda</a>
            </h6>
            <h6>
                <a class="nav-item nav-link <?php if ($active == 'blog') echo 'active text-primary font-weight-bold'; ?> " href="<?= base_url(); ?>">Blog</a>
            </h6>
            <?php if (!session('username')) : ?>
                <h6>
                    <a class="nav-item nav-link <?php if ($active == 'pilih paket') echo 'active text-primary font-weight-bold'; ?>" href="<?= base_url('#paket') ?>">Pilih Paket</a>
                </h6>
                <h6>
                    <a class="nav-item nav-link <?php if ($active == 'daftar') echo 'active text-primary font-weight-bold'; ?>" href="<?= base_url(); ?>/daftar">Pendaftaran</a>
                </h6>
                <h6>
                    <a class="nav-item nav-link <?php if ($active == 'masuk') echo 'active text-primary font-weight-bold'; ?>" href="<?= base_url(); ?>/masuk">Masuk</a>
                </h6>
            <?php else : ?>
                <h6>
                    <a class="nav-item nav-link <?php if ($active == 'pilih paket') echo 'active text-primary font-weight-bold'; ?>" href="<?= base_url(); ?>">Kelasku</a>
                </h6>
                <h6>
                    <a class="nav-item nav-link <?php if ($active == 'daftar') echo 'active text-primary font-weight-bold'; ?>" href="<?= base_url(); ?>/daftar">Video Materi</a>
                </h6>
                <h6 class="dropdown">
                    <a class="nav-item nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Welcome, <?php echo (session('username')); ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profil Akun</a>
                        <a class="dropdown-item" href="#">Edit Akun</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('keluar'); ?>">Keluar</a>
                    </div>
                </h6>
            <?php endif; ?>
        </div>
    </div>
</nav>