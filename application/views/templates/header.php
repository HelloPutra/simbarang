<?php 
$session = $this->session->userdata('login');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>AGRAPANA &mdash; MANAGEMENT SYSTEM</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/components.css')?>">
    <!-- Datatables CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/datatables/datatables/css/dataTables.bootstrap4.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/datatables/responsive/css/responsive.dataTables.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/datatables/responsive/css/responsive.bootstrap4.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/datatables/colreorder/css/colReorder.bootstrap4.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/datatables/buttons/css/buttons.bootstrap4.min.css')?>">
</head>
<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?= base_url('assets/img/avatar/avatar-1.png')?>" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block" style="text-transform: uppercase;"><?php echo $session['nama']; ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?= base_url('login/logout');  ?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="#">AGRAPANA</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="#"><img class="img-fluid" src="<?= base_url('assets/img/logo.jpeg')?>" alt=""></a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">
                            Statistik &amp; Master
                        </li>
                        <li>
                            <a class="nav-link" href="<?= base_url('dashboard/index') ?>">
                                <i class="fas fa-chart-line"></i>
                                <span>Statistik</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a href="#" class="nav-link has-dropdown">
                                <i class="fas fa-fire"></i>
                                <span>Data Master</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('kategori/index') ?>">Master Kategori</a></li>
                                <li><a class="nav-link" href="<?= base_url('asset/index') ?>">Master Asset</a></li>
                                <li><a class="nav-link" href="<?= base_url('user/index') ?>">Master User</a></li>
                                <li><a class="nav-link" href="<?= base_url('mesin/index') ?>">Master Mesin</a></li>
                                <li><a class="nav-link" href="<?= base_url('bgmesin/index') ?>">Master Bagian Mesin</a></li>
                            </ul>
                        </li>
                        
                        <li class="menu-header">Pengadaan &amp; Pengeluaran</li>
                        <li>
                            <a class="nav-link" href="<?= base_url('pengeluaran/index') ?>">Pengeluaran Asset</a>
                        </li>
                        <li>
                            <a class="nav-link" href="<?= base_url('pengadaan/index') ?>">Pengadaan Asset</a>
                        </li>
                        <li><a class="nav-link" href="<?= base_url('perbaikan/index') ?>">Perbaikan Mesin</a>
                        </li>

                        <li class="menu-header">Laporan</li>
                        <li class="nav-item dropdown ">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Laporan</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('pengadaan_report/index')  ?>">Laporan Pengadaan</a></li>
                                <li><a class="nav-link" href="<?= base_url('perbaikan_report/index') ?>">Laporan Perbaikan </a></li>
                            </ul>
                        </li>
                    </ul>
                </aside>
            </div>