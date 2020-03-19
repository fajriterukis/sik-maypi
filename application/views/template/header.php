<?php date_default_timezone_set('Asia/Jakarta'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>SIK-MAYPI <?= @$title == '' ? '' : ' - '.$title; ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/') ?>fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">

  <link rel="stylesheet" href="<?= base_url('assets/') ?>datatables/datatables.min.css">

  <link rel="shortcut icon" href="<?= base_url('assets/img/logo.png'); ?>">

  <script src="<?= base_url('assets/') ?>jquery/jquery.min.js"></script>


  <style>
    body, table, h1, h2, h3, h4, h5, h6 {
      color: black!important;
    }
  </style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
        <div class="sidebar-brand-icon">
        </div>
        <div class="sidebar-brand-text mx-3">SIK-MAYPI</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php active(''); ?>">
        <a class="nav-link" href="<?= base_url(); ?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Beranda</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Keuangan
      </div>

      <li class="nav-item <?= active('dana_masuk'); ?>">
        <a class="nav-link" href="<?= base_url('dana_masuk'); ?>">
          <i class="fas fa-fw fa-download"></i>
          <span>Dana Masuk</span></a>
      </li>

      <li class="nav-item <?= active('dana_keluar'); ?>">
        <a class="nav-link" href="<?= base_url('dana_keluar'); ?>">
          <i class="fas fa-fw fa-upload"></i>
          <span>Dana Keluar</span></a>
      </li>

      <li class="nav-item <?= active('dana_keluar_un'); ?>">
        <a class="nav-link" href="<?= base_url('dana_keluar_un'); ?>">
          <i class="fas fa-fw fa-file-upload"></i>
          <span>Dana Keluar UN</span></a>
      </li>

      <li class="nav-item <?= active('pembayaran_siswa'); ?>">
        <a class="nav-link" href="<?= base_url('pembayaran_siswa'); ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Pembayaran Siswa</span></a>
      </li>

      <li class="nav-item <?= active('pelunasan_un'); ?>">
        <a class="nav-link" href="<?= base_url('pelunasan_un'); ?>">
          <i class="fas fa-fw fa-file-signature"></i>
          <span>Pelunasan Ujian Nasional</span></a>
      </li>

      <li class="nav-item <?= active('sisa_dana'); ?>">
        <a class="nav-link" href="<?= base_url('sisa_dana'); ?>">
          <i class="fas fa-fw fa-calendar-alt"></i>
          <span>Sisa Dana Tahun Lalu</span></a>
      </li>

      <li class="nav-item <?php active('pengaturan'); ?>">
        <a class="nav-link" href="<?= base_url('pengaturan'); ?>">
          <i class="fas fa-fw fa-cog"></i>
          <span>Pengaturan Tahun Ajaran</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

         
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= userLogin()['nama']; ?></span>
                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/logo.png'); ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" onclick="return alert('Gek dibuat fitur ini kalo niat')">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">


        
      
