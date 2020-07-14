<?php 
  $sisa_denda_infaq_old          = $sisa_dana['denda_infaq'];
  $sisa_dana_un_old              = $sisa_dana['un'];
  $sisa_dana_uas_old             = $sisa_dana['uas'];
  
  $total_dana_masuk              = $total_dana_masuk['nominal'];
  $total_dana_keluar             = $total_dana_keluar['uang_keluar'];
  $dana_masuk_dan_tahun_lalu     = $total_dana_masuk+$sisa_denda_infaq_old;
  $sisa_denda_infaq_saat_ini     = $dana_masuk_dan_tahun_lalu-$total_dana_keluar;
  
  $total_pelunasan_un            = $total_pelunasan_un['nominal'];
  $total_dana_keluar_Un          = $total_dana_keluar_un['uang_keluar'];
  $pelunasan_un_dan_tahun_lalu   = $total_pelunasan_un+$sisa_dana_un_old;
  $sisa_dana_un_saat_ini         = $pelunasan_un_dan_tahun_lalu-$total_dana_keluar_Un;
  
  $total_pembayaran_uas          = $total_pembayaran_uas['nominal'];
  $total_dana_keluar_uas         = $total_dana_keluar_uas['uang_keluar'];
  $pembayaran_uas_dan_tahun_lalu = $total_pembayaran_uas+$sisa_dana_uas_old;
  $sisa_dana_uas_saat_ini        = $pembayaran_uas_dan_tahun_lalu-$total_dana_keluar_uas;
  

?>

<div class="row mb-3">
  <div class="col-md-12">
    <h3 class="mb-3">Tahun Ajaran <?= $tahun_ajaran['tahun_ajaran']; ?></h3>

    <a href="<?= base_url('home/cetak'); ?>" class="btn btn-success float-right ml-2">
      <i class="fa fa-print"></i>
      Cetak Laporan
    </a>
    <a href="<?= base_url('home/simpan'); ?>" class="btn btn-primary float-right">
      <i class="fa fa-file-download"></i>
      Simpan ke Sisa Dana Tahun Lalu
    </a>
  </div>
</div>


<div class="row mb-2">
  <div class="col-xl-4 col-md-4">
    <div class="card border-left-primary shadow h-100 py-2">
    	<a href="<?= base_url('dana_masuk'); ?>" class="nav-link">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Dana Masuk Infaq & Denda+Sisa Dana Infaq & Denda Tahun Lalu</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "Rp.".number_format($dana_masuk_dan_tahun_lalu, 0, ',', '.'); ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-file-download fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
      </a>
    </div>
  </div>

  <div class="col-xl-4 col-md-4">
    <div class="card border-left-primary shadow h-100 py-2">
    	<a href="<?= base_url('dana_keluar'); ?>" class="nav-link">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Dana Keluar Infaq & Denda</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "Rp.".number_format($total_dana_keluar, 0, ',', '.'); ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-file-upload fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
	   </a>
    </div>
  </div>

  <div class="col-xl-4 col-md-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <a href="#" class="nav-link">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sisa Dana Infaq & Denda Saat Ini</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "Rp.".number_format($sisa_denda_infaq_saat_ini, 0, ',', '.'); ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-money-bill-alt fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
      </a>
    </div>
  </div>
</div>

<div class="row mb-2">
  <div class="col-xl-4 col-md-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <a href="<?= base_url('pelunasan_un'); ?>" class="nav-link">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Pelunasan UN+Sisa Dana UN Tahun Lalu</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "Rp.".number_format($pelunasan_un_dan_tahun_lalu, 0, '.', '.'); ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-file-download fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
     </a>
    </div>
  </div>

  <div class="col-xl-4 col-md-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <a href="<?= base_url('dana_keluar_un'); ?>" class="nav-link">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Dana Keluar UN</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "Rp.".number_format($total_dana_keluar_Un, 0, '.', '.'); ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-file-upload fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
     </a>
    </div>
  </div>

  <div class="col-xl-4 col-md-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <a href="#" class="nav-link">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sisa Dana UN Saat Ini</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "Rp.".number_format($sisa_dana_un_saat_ini, 0, ',', '.'); ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-money-bill-alt fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
      </a>
    </div>
  </div>
</div>

<div class="row mb-2">
  <div class="col-xl-4 col-md-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <a href="<?= base_url('pembayaran_uas'); ?>" class="nav-link">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Pembayaran UAS+Sisa Dana UAS Tahun Lalu</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "Rp.".number_format($pembayaran_uas_dan_tahun_lalu, 0, ',', '.'); ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-file-download fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
      </a>
    </div>
  </div>

  <div class="col-xl-4 col-md-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <a href="<?= base_url('dana_keluar_uas'); ?>" class="nav-link">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Dana Keluar UAS</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "Rp.".number_format($total_dana_keluar_uas, 0, ',', '.'); ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-file-upload fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
      </a>
    </div>
  </div>

  <div class="col-xl-4 col-md-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <a href="#" class="nav-link">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sisa Dana UAS Saat Ini</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "Rp.".number_format($sisa_dana_uas_saat_ini, 0, ',', '.'); ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-money-bill-alt fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
      </a>
    </div>
  </div>
</div>
