<style>
  @media print{
    #accordionSidebar, #tombol-cetak, footer {
      display: none;
    }
  }

  @page {
    margin-top: 2cm;
    margin-bottom: 2cm;
  }

  div.body {
    font-family: arial;
    margin-left: 30px;
    color: black;
  }

  hr.hr-1 {
    border-color: black;
    border-width: 5px;
    margin: 0;
    padding: 0;
  }

  hr.hr-2 {
    border-color: black;
    margin: 0;
    padding: 0;
    margin-top: 2px;
  }
</style>

<div class="body">
  <div class="row">
    <div class="col-md-2 text-center">
      <img src="<?= base_url('assets/img/logo.png'); ?>" width="120" class="mt-5">
    </div>
    <div class="col-md-10 header" style="padding-right: 120px;">
      <h2 class="text-center"><b>YAYASAN MIFTAHUL HUDA <br> MADRASAH ALIYAH MARTAPURA <br> "TERAKREDITASI"</b></h2>
      <p class="text-center" style="font-size: 16px;">
      Alamat : Kumpul Mulyo Desa Perjaya Barat Kec. Martapura Kab. OKU Timur <br>
      Provinsi Sumatera Selatan Kode POS 32181 Email : mamartapuraa@gmail.com</p>
    </div>
  </div>

  <hr class="hr-1">
  <hr class="hr-2">

  <h3 class="text-center mb-4 mt-4">Rekapitulasi Pelunasan UN Tahun Ajaran <?= $tahun_ajaran['tahun_ajaran']; ?></h3>

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