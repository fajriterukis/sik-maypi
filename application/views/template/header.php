<?php date_default_timezone_set('Asia/Jakarta');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <title>SIK-MAYPI <?=@$title == '' ? '' : ' - ' . $title;?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.min.css"
        integrity="sha512-ioRJH7yXnyX+7fXTQEKPULWkMn3CqMcapK0NNtCN8q//sW7ZeVFcbMJ9RvX99TwDg6P8rAH2IqUSt2TLab4Xmw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.0.2/css/sb-admin-2.min.css"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css" />
    <link rel="shortcut icon" href="<?=base_url('assets/img/logo.ico');?>">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <style>
    body,
    table,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        color: black !important;
    }
    </style>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url();?>">
                <div class="sidebar-brand-icon">
                </div>
                <div class="sidebar-brand-text mx-3">SIK-MAYPI</div>
            </a>

            <hr class="sidebar-divider my-0">

            <li class="nav-item <?php active('');?>">
                <a class="nav-link" href="<?=base_url();?>">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Beranda</span>
                </a>
            </li>

            <hr class="sidebar-divider">

            <!-- Menu Keuangan -->
            <div class="keuangan">
                <div class="sidebar-heading">
                    Keuangan
                </div>

                <li class="nav-item <?=active('dana_masuk') || active('dana_keluar')?>">
                    <a class="nav-link collapsed denda_infaq" href="#" data-toggle="collapse" data-target="#denda_infaq"
                        aria-expanded="true" aria-controls="denda_infaq">
                        <i class="fas fa-fw fa-download"></i>
                        <span>Infaq & Denda</span>
                    </a>
                    <div id="denda_infaq" class="collapse <?=show('dana_masuk') || show('dana_keluar')?>"
                        aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item <?=active('dana_masuk')?>" href="<?=base_url('dana_masuk')?>">Dana
                                Masuk</a>
                            <a class="collapse-item <?=active('dana_keluar')?>" href="<?=base_url('dana_keluar')?>">Dana
                                Keluar</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item <?=active('pembayaran_uas') || active('dana_keluar_uas')?>">
                    <a class="nav-link collapsed uas" href="#" data-toggle="collapse" data-target="#uas"
                        aria-expanded="true" aria-controls="uas">
                        <i class="fas fa-fw fa-users"></i>
                        <span>UAS</span>
                    </a>
                    <div id="uas" class="collapse <?=show('pembayaran_uas') || show('dana_keluar_uas')?>"
                        aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item <?=active('pembayaran_uas')?>"
                                href="<?=base_url('pembayaran_uas')?>">Pembayaran UAS</a>
                            <a class="collapse-item <?=active('dana_keluar_uas')?>"
                                href="<?=base_url('dana_keluar_uas')?>">Dana Keluar UAS</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item <?=active('pelunasan_un') || active('dana_keluar_un')?>">
                    <a class="nav-link collapsed un" href="#" data-toggle="collapse" data-target="#un"
                        aria-expanded="true" aria-controls="un">
                        <i class="fas fa-fw fa-file-signature"></i>
                        <span>UN</span>
                    </a>
                    <div id="un" class="collapse <?=show('pelunasan_un') || show('dana_keluar_un')?>"
                        aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item <?=active('pelunasan_un')?>"
                                href="<?=base_url('pelunasan_un')?>">Pelunasan UN</a>
                            <a class="collapse-item <?=active('dana_keluar_un')?>"
                                href="<?=base_url('dana_keluar_un')?>">Dana Keluar UN</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item <?=active('hutang');?>">
                    <a class="nav-link" href="<?=base_url('hutang');?>">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Data Hutang</span>
                    </a>
                </li>
                <li class="nav-item <?=active('sisa_dana');?>">
                    <a class="nav-link" href="<?=base_url('sisa_dana');?>">
                        <i class="fas fa-fw fa-calendar-alt"></i>
                        <span>Daftar Sisa Dana</span>
                    </a>
                </li>
            </div>
            <!-- Akhir Menu Keuangan -->

            <hr class="sidebar-divider">

            <!-- Menu Pengaturan -->
            <div class="pengaturan">
                <div class="sidebar-heading">
                    Pengaturan
                </div>

                <li class="nav-item <?=active('pengaturan') || active('ketentuan_pembayaran')?>">
                    <a class="nav-link collapsed pengaturan" href="#" data-toggle="collapse" data-target="#pengaturan"
                        aria-expanded="true" aria-controls="pengaturan">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Pengaturan</span>
                    </a>
                    <div id="pengaturan"
                        class="collapse  <?=show('pengaturan') || show('ketentuan_pembayaran') || show('data_sekolah')?>"
                        aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item <?=active('pengaturan')?>" href="<?=base_url('pengaturan')?>">Tahun
                                Ajaran</a>
                            <a class="collapse-item <?=active('ketentuan_pembayaran')?>"
                                href="<?=base_url('ketentuan_pembayaran')?>">Ketentuan Pembayaran</a>
                            <a class="collapse-item <?=active('data_sekolah')?>"
                                href="<?=base_url('data_sekolah')?>">Data Sekolah</a>
                        </div>
                    </div>
                </li>
            </div>
            <!-- Akhir Menu Pengaturan -->

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
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small"><?=userLogin()['nama'];?></span>
                                <img class="img-profile rounded-circle" src="<?=base_url('assets/img/logo.png');?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?=base_url('profile');?>">
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