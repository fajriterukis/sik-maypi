<?php 
  $sisa_dana_tahun_lalu      = $sisa_dana['jumlah'];
  
  $total_dana_masuk          = $total_dana_masuk[0]['nominal'];
  $dana_masuk_dan_tahun_lalu = $total_dana_masuk+$sisa_dana_tahun_lalu;
  $total_dana_keluar         = $total_dana_keluar[0]['uang_keluar'];
  $sisa_dana_saat_ini        = ($total_dana_masuk+$sisa_dana_tahun_lalu)-$total_dana_keluar;
  
  $total_pelunasan_un        = $total_pelunasan_un[0]['nominal'];
  $total_dana_keluar_Un      = $total_dana_keluar_un['uang_keluar'];
  $sisa_dana_un              = $total_pelunasan_un-$total_dana_keluar_Un;
  
  $total_pembayaran_uas    = $total_pembayaran_uas[0]['nominal'];
  $total_dana_keluar_uas     = $total_dana_keluar_uas['uang_keluar'];
  $sisa_dana_uas             = $total_pembayaran_uas-$total_dana_keluar_uas;
  

?>

<h3 class="mb-3">Tahun Ajaran <?= $tahun_ajaran['tahun_ajaran']; ?></h3>

<div class="row mb-2">
  <div class="col-xl-4 col-md-4">
    <div class="card border-left-primary shadow h-100 py-2">
    	<a href="<?= base_url('dana_masuk'); ?>" class="nav-link">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Dana Masuk Infaq+Denda+Dana Tahun Lalu</div>
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
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Dana Keluar</div>
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
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sisa Dana Infaq+Denda</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "Rp.".number_format($sisa_dana_saat_ini, 0, ',', '.'); ?></div>
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
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Pelunasan UN</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "Rp.".number_format($total_pelunasan_un, 0, '.', '.'); ?></div>
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
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sisa Dana UN</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "Rp.".number_format($sisa_dana_un, 0, ',', '.'); ?></div>
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
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Pembayaran UAS</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "Rp.".number_format($total_pembayaran_uas, 0, ',', '.'); ?></div>
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
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sisa Dana UAS</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "Rp.".number_format($sisa_dana_uas, 0, ',', '.'); ?></div>
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
