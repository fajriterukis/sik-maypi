<style>
  @media print{
    #accordionSidebar, #tombol-cetak, footer {
      display: none;
    }
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
      <h2 class="text-center">YAYASAN MIFTAHUL HUDA <br> MADRASAH ALIYAH MARTAPURA <br> "TERAKREDITASI"</h2>
      <p class="text-center" style="font-size: 16px;">
      Alamat : Kumpul Mulyo Desa Perjaya Barat Kec. Martapura Kab. OKU Timur <br>
      Provinsi Sumatera Selatan Kode POS 32181 Email : mamartapuraa@gmail.com</p>
    </div>
  </div>

  <hr class="hr-1">
  <hr class="hr-2">

  <h3 class="text-center mb-4 mt-4">Rekapitulasi Pembayaran UAS Tahun Ajaran <?= $tahun_ajaran['tahun_ajaran']; ?></h3>

  <table class="table table-bordered">
    <tr>
      <th class="text-center">No</th>
      <th>Nama</th>
      <th>Kelas</th>
      <th>Tanggal</th>
      <th>Nominal</th>
    </tr>

    <?php $no=1; ?>
    <?php foreach( $pembayaran_uas as $ps ) : ?>
    <tr>
      <td width="10" class="text-center"><?= $no++; ?></td>
      <td><?= $ps['nama']; ?></td>
      <td><?= $ps['kelas']; ?></td>
      <td><?= tgl($ps['tanggal']); ?></td>
      <td><?= "Rp.".number_format($ps['nominal'], 0, ',', '.'); ?></td>
    </tr>
    <?php endforeach; ?>

    <tr>
      <th colspan="4">Total</th>
      <th>
        <?php 
          $total = ($total[0]['nominal']);
          echo "Rp.".number_format($total, 0, ',', '.');
        ?>
      </th>
    </tr>
  </table>

  <div class="row" style="margin-top: 30px;">
    <div class="col-md-9"></div>
    <div class="col-md-3 text-center">
      <h6 class="mb-5 pb-3 font-weight-bold">Martapura, <?= date('d').' '.bulan().' '.date('Y'); ?> <br> Kepala Madrasah</h6>
      <h6 class="font-weight-bold">Syamsul Arifin, S.Pd.I</h6>
    </div>
  </div>
</div>