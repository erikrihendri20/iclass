<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="<?= base_url(); ?>">
    <h2>
      <span class="text-warning">[i]<span class="text-primary">Class</span></span>
    </h2>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-item nav-link <?php if ($active == 'beranda') echo 'active text-primary font-weight-bold'; ?>" href="<?= base_url(); ?>">Beranda</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-item nav-link <?php if ($active == 'pilih paket') echo 'active text-primary font-weight-bold'; ?>" href="<?= base_url('#paket'); ?>">Pilih Paket</a>
      </li>

      <?php if (!session('username')) : ?>
        <li class="nav-item">
          <a class="nav-item nav-link <?php if ($active == 'blog') echo 'active text-primary font-weight-bold'; ?> " href="<?= base_url('landingpage/blog'); ?>">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-item nav-link <?php if ($active == 'daftar') echo 'active text-primary font-weight-bold'; ?>" href="<?= base_url(); ?>/daftar">Pendaftaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-item nav-link <?php if ($active == 'masuk') echo 'active text-primary font-weight-bold'; ?>" href="<?= base_url(); ?>/masuk">Masuk</a>
        </li>
      <?php else : ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Kelasku
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?= base_url('Kelasku/jadwal'); ?>">Jadwal</a>
            <a class="dropdown-item" href="<?= base_url('Kelasku/latihan'); ?>">Latihan Soal</a>
            <a class="dropdown-item" href="<?= base_url('peserta/edit'); ?>">Rekaman Kelas</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Welcome, <?php echo (session('username')); ?>
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
</nav>