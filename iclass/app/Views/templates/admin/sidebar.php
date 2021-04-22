<?php

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-tachometer-alt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">iClass</div>
    </a>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Dashboard
    </div>

    <!-- Nav Item - User - list -->

    <li class="nav-item <?= ($active == 'dashboard') ? 'active' :  ' '; ?>">
        <a class="nav-link" href="<?= base_url(); ?>/admin">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Kelas
    </div>

    <!-- Nav Item - My-profile -->
    <li class="nav-item <?= ($active == 'daftar kelas') ? 'active' :  ' '; ?>">
        <a class="nav-link" href="<?= base_url(); ?>/admin/daftarKelas">
            <i class="fas fa-fw fa-school"></i>
            <span>Daftar Kelas</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>/admin/rekaman">
            <i class="fas fa-fw fa-user"></i>
            <span>Rekaman</span></a>
    </li>

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Peserta
    </div>

    <!-- Nav Item - My-profile -->
    <li class="nav-item <?= ($active == 'konfirmasi peserta') ? 'active' :  ' '; ?>">
        <a class="nav-link" href="<?= base_url(); ?>/admin/konfirmasiPeserta">
            <i class="fas fa-fw fa-clipboard-check"></i>
            <span>Konfirmasi Peserta</span></a>
    </li>

    <!-- Nav Item - My-profile -->
    <li class="nav-item <?= ($active == 'daftar peserta') ? 'active' :  ' '; ?>">
        <a class="nav-link" href="<?= base_url(); ?>/admin/daftarPeserta">
            <i class="fas fa-fw fa-users"></i>
            <span>Daftar Peserta</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Materi
    </div>

    <!-- Nav Item - My-profile -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-book"></i>
            <span>Upload Materi</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Soal Kuis
    </div>

    <!-- Nav Item - My-profile -->
    <li class="nav-item <?= ($active == 'kuis_edit') ? 'active' :  ' '; ?>">
        <a class="nav-link" href="<?= base_url(); ?>/admin/edit_soal_kuis">
            <i class="fas fa-fw fa-pencil-alt"></i>
            <span>Edit Soal Kuis</span></a>
    </li>

    <li class="nav-item <?= ($active == 'kuis_soal') ? 'active' :  ' '; ?>">
        <a class="nav-link" href="<?= base_url('admin/kuis_soal'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Upload Soal</span></a>
    </li>

    <li class="nav-item <?= ($active == 'kuis_pembahasan') ? 'active' :  ' '; ?>">
        <a class="nav-link" href="<?= base_url('admin/kuis_pembahasan'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Upload Pembahasan</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Jadwal
    </div>

    <!-- Nav Item - My-profile -->
    <li class="nav-item <?= ($active == 'atur jadwal pertemuan') ? 'active' :  ' '; ?>">
        <a class="nav-link" href="<?= base_url(); ?>/admin/aturJadwalPertemuan">
            <i class="fas fa-fw fa-calendar-alt"></i>
            <span>Atur Jadwal Pertemuan</span></a>
    </li>

    <li class="nav-item <?= ($active == 'atur jadwal tryout') ? 'active' :  ' '; ?>">
        <a class="nav-link" href="<?= base_url(); ?>/admin/aturJadwalTryout">
            <i class="fas fa-fw fa-pencil-alt"></i>
            <span>Atur Jadwal Tryout</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <!-- <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-user-edit"></i>
                    <span>Edit Profile</span></a>
            </li> -->

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a href="/logout" class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>