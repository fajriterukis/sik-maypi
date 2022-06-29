<div class="container-fluid">
  <div class="row">
    <div class="col-sm-2 text-center">
      <img src="<?= base_url('assets/img/logo.png'); ?>" width="120" class="mt-4">
    </div>
    <div class="col" style="padding-right: 120px;">
      <h2 class="text-center"><b>YAYASAN MIFTAHUL HUDA <br> MADRASAH ALIYAH MARTAPURA <br> </b></h2>
      <h4 class="text-center"><b>"TERAKREDITASI"</b></h4>
      <p class="text-center" style="font-size: 14px;">
      Alamat : Kumpul Mulyo Desa Perjaya Barat Kec. Martapura Kab. OKU Timur <br>
      Provinsi Sumatera Selatan Kode POS 32181 Email : mamartapuraa@gmail.com</p>
    </div>
  </div>

  <hr class="hr-1">
  <hr class="hr-2">

  <h3 class="text-center mb-4 mt-4">Rekapitulasi Dana Keluar UN <br> Tahun Ajaran <?= $tahun_ajaran['tahun_ajaran']; ?></h3>

  <table class="table table-bordered">
    <tr>
      <th class="text-center">No</th>
      <th>Keperluan</th>
      <th>Tanggal</th>
      <th>Uang Keluar</th>
    </tr>

    <?php $no=1; ?>
    <?php foreach( $dana_keluar_un as $dku ) : ?>
    <tr>
      <td width="10" class="text-center"><?= $no++; ?></td>
      <td><?= $dku['keperluan']; ?></td>
      <td><?= tgl($dku['tanggal']); ?></td>
      <td><?= "Rp.".number_format($dku['uang_keluar'], 0, ',', '.'); ?></td>
    </tr>
    <?php endforeach; ?>

    <tr>
      <th colspan="3">Total</th>
      <th>
        <?php 
          $total = ($total[0]['uang_keluar']);
          echo "Rp.".number_format($total, 0, ',', '.');
        ?>
      </th>
    </tr>
  </table>
</div>