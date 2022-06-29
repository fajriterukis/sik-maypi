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

  <h3 class="text-center mb-4 mt-4">Rekapitulasi Dana Masuk Infaq dan Denda <br> Tahun Ajaran <?= $tahun_ajaran['tahun_ajaran']; ?></h3>

  <table class="table table-bordered">
    <tr>
      <th class="text-center">No</th>
      <th>Jenis Dana</th>
      <th>Tanggal Masuk</th>
      <th>Nominal</th>
    </tr>

    <?php $no=1; ?>
    <?php foreach( $dana_masuk as $dm ) : ?>
    <tr>
      <td width="10" class="text-center"><?= $no++; ?></td>
      <td><?= $dm['jenis_dana']; ?></td>
      <td><?= tgl($dm['tanggal_masuk']); ?></td>
      <td><?= "Rp.".number_format($dm['nominal'], 0, ',', '.'); ?></td>
    </tr>
    <?php endforeach; ?>

    <tr>
      <th colspan="3">Jumlah Dana Infaq</th>
      <th>
        <?php 
          $jumlah_infaq = ($jumlah_infaq['nominal']);
          echo "Rp.".number_format($jumlah_infaq, 0, ',', '.');
         ?>
      </th>
    </tr>
    <tr>
      <th colspan="3">Jumlah Dana Denda</th>
      <th>
        <?php 
          $jumlah_uang_denda = ($jumlah_uang_denda['nominal']);
          echo "Rp.".number_format($jumlah_uang_denda, 0, ',', '.');
         ?>
      </th>
    </tr>
    <tr>
      <th colspan="3">Total</th>
      <th>
        <?php 
          $total = ($total['nominal']);
          echo "Rp.".number_format($total, 0, ',', '.');
        ?>
      </th>
    </tr>
  </table>
</div>