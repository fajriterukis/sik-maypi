<?php 
  $total_dana_masuk       = $total_dana_masuk[0]['nominal'];
  $total_dana_keluar      = $total_dana_keluar[0]['uang_keluar'];
  $total_dana_keluar_Un   = $total_dana_keluar_un['uang_keluar'];
  $total_pembayaran_siswa = $total_pembayaran_siswa[0]['nominal'];
  $sisa_dana_tahun_lalu   = $sisa_dana['jumlah'];
  $total_pelunasan_un     = $total_pelunasan_un[0]['nominal']-$total_dana_keluar_un['uang_keluar'];
  $sisa_dana_saat_ini     = ($total_dana_masuk+$sisa_dana_tahun_lalu)-$total_dana_keluar;

?>

<h3 class="mb-3">Tahun Ajaran <?= $tahun_ajaran['tahun_ajaran']; ?></h3>

<div class="row mb-2">
  <div class="col-xl-6 col-md-6">
    <div class="card border-left-primary shadow h-100 py-2">
    	<a href="<?= base_url('dana_masuk'); ?>" class="nav-link">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Dana Masuk</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "Rp.".number_format($total_dana_masuk, 0, ',', '.'); ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-download fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
      </a>
    </div>
  </div>

  <div class="col-xl-6 col-md-6">
    <div class="card border-left-primary shadow h-100 py-2">
    	<a href="<?= base_url('dana_keluar'); ?>" class="nav-link">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Dana Keluar</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "Rp.".number_format($total_dana_keluar, 0, ',', '.'); ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-upload fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
	   </a>
    </div>
  </div>
</div>

<div class="row mb-2">
  <div class="col-xl-6 col-md-6">
    <div class="card border-left-primary shadow h-100 py-2">
      <a href="<?= base_url('pelunasan_un'); ?>" class="nav-link">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Pelunasan UN</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "Rp.".number_format($total_pelunasan_un, 0, '.', '.'); ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-file-signature fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
     </a>
    </div>
  </div>

  <div class="col-xl-6 col-md-6">
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
</div>

<div class="row mb-2">
  <div class="col-xl-12">
    <div class="card border-left-primary shadow h-100 py-2">
      <a href="<?= base_url('sisa_dana'); ?>" class="nav-link">
      <div class="card-body">
        <div class="row no-gutters align-items-center text-center">
          <div class="col mr-2">
            <div class="font-weight-bold text-primary text-uppercase mb-1">Sisa Dana</div>
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">(Total Dana Masuk Tahun Ajaran <?= $tahun_ajaran['tahun_ajaran']; ?> + Sisa Dana Tahun Lalu) - Total Dana Keluar Tahun Ajaran <?= $tahun_ajaran['tahun_ajaran']; ?></div> <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "Rp.".number_format($sisa_dana_saat_ini, 0, '.', '.'); ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-download fa-2x text-gray-300"></i>
            <i class="fas fa-plus fa-2x text-gray-300"></i>
            <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
            <i class="fas fa-minus fa-2x text-gray-300"></i>
            <i class="fas fa-upload fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
      </a>
    </div>
  </div>
</div>

<div class="row mb-2">
  <div class="col-xl-12">
    <div class="card border-left-primary shadow h-100 py-2">
      <a href="<?= base_url('pembayaran_siswa'); ?>" class="nav-link">
      <div class="card-body">
        <div class="row no-gutters align-items-center text-center">
          <div class="col mr-2">
            <div class="font-weight-bold text-primary text-uppercase mb-1">Total Pembayaran Siswa</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "Rp.".number_format($total_pembayaran_siswa, 0, ',', '.'); ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-users fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
     </a>
    </div>
  </div>
</div>
