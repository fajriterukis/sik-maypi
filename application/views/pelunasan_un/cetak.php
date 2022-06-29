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

  <h3 class="text-center mb-4 mt-4">Rekapitulasi Pelunasan UN <br> Tahun Ajaran <?= $tahun_ajaran['tahun_ajaran']; ?></h3>

  <table class="table table-bordered">
    <tr>
      <th class="text-center">No</th>
      <th>Nama</th>
      <th>Kelas</th>
      <th>Tanggal</th>
      <th>Nominal</th>
      <th>Status</th>
      <th>Diskon</th>
    </tr>

    <?php $no=1; ?>
    <?php foreach( $pelunasan_un as $pu ) : ?>
    <tr>
      <td width="10" class="text-center"><?= $no++; ?></td>
      <td><?= $pu['nama']; ?></td>
      <td class="text-center"><?= $pu['kelas']; ?></td>
      <td><?= tgl($pu['tanggal']); ?></td>
      <td><?= "Rp.".number_format($pu['nominal'], 0, ',', '.'); ?></td>
      <td width="80" class="text-center">
        <?php 
          $tagihan = $ketentuan_pembayaran['un'] - $pu['diskon'];

          if($pu['nominal'] == $tagihan ){
            echo "<b>Lunas</b>";
          } else if($pu['nominal'] < $tagihan){

            $kurang = $pu['nominal'] - $tagihan;

            echo "Rp.".number_format($kurang, 0, ',', '.');

          } else if( $pu['nominal'] > $tagihan ){
            $lebih = $pu['nominal'] - $tagihan;

            echo "Rp.+".number_format($lebih, 0, ',', '.');
          }
         ?>
      </td>
      <td class="text-center"><?= $pu['diskon'] == 0 ? "-" : "Rp.".number_format($pu['diskon'], 0, ',', '.'); ?></td>
    </tr>
    <?php endforeach; ?>

    <tr>
      <th colspan="4">Total</th>
      <th colspan="3">
        <?php 
          $total = $total[0]['nominal'];
          echo "Rp.".number_format($total, 0, ',', '.');
        ?>
      </th>
    </tr>
  </table>
</div>