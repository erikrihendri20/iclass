<?php

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-book-reader"></i>
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

            <li class="nav-item <?= ($active=='dashboard') ? 'active' :  ' '; ?>">
                <a class="nav-link" href="<?= base_url(); ?>/admin">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Kelas
            </div>

            <!-- Nav Item - My-profile -->
            <li class="nav-item <?= ($active=='daftar kelas') ? 'active' :  ' '; ?>">
                <a class="nav-link" href="<?= base_url(); ?>/admin/daftarKelas">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Daftar Kelas</span></a>
            </li>

            <!-- Nav Item - My-profile -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Peserta</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/admin/rekaman">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Rekaman</span></a>
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
                    <i class="fas fa-fw fa-user"></i>
                    <span>Upload Materi</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Jadwal
            </div>

            <!-- Nav Item - My-profile -->
            <li class="nav-item <?= ($active=='atur jadwal pertemuan') ? 'active' :  ' '; ?>">
                <a class="nav-link" href="<?= base_url(); ?>/admin/aturJadwalPertemuan">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Atur Jadwal Pertemuan</span></a>
            </li>

            <li class="nav-item <?= ($active=='atur jadwal tryout') ? 'active' :  ' '; ?>">
                <a class="nav-link" href="<?= base_url(); ?>/admin/aturJadwalTryout">
                    <i class="fas fa-fw fa-user"></i>
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