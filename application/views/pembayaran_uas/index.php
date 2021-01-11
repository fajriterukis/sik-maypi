<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary float-left">Pembayaran UAS</h6>
  </div>
  <div class="card-body">
    <button type="button" id="btn-delete" class="btn btn-danger btn-sm float-right ml-2 mb-2">Hapus</button>
    <a href="<?= base_url('pembayaran_uas/tambah'); ?>" class="btn btn-primary btn-sm float-right ml-2 mb-2">Tambah</a>
    <a href="<?= base_url('pembayaran_uas/import'); ?>" class="tombol-import btn btn-info btn-sm float-right ml-2 mb-2">Import Excel</a>
    <a href="<?= base_url('pembayaran_uas/cetak'); ?>" class="btn btn-success btn-sm float-right mb-2">
      <i class="fa fa-print"></i>
      Cetak Laporan
    </a>
    <form method="POST" action="pembayaran_uas/hapus" id="form-delete">
    <div class="table-responsive">
        <table class="table table-bordered nowrap" id="pembayaran_uas" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th class="text-center"><input type="checkbox" id="check-all"></th>
              <th>Menu</th>
              <th>No</th>
              <th>Nama</th>
              <th>Kelas</th>
              <th>Tanggal</th>
              <th>Nominal</th>
              <th>Status</th>
              <th>Diskon</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; ?>
            <?php foreach( $pembayaran_uas as $pu ) : ?>
            <tr>
              <td class="text-center" width="10">
                <input type="checkbox" class="check-item" name="id[]" value="<?= $pu['id']; ?>">
              </td>
              <td class="text-center" width="10">
                <a href="<?= base_url('pembayaran_uas/edit/'.$pu['id']); ?>" class="btn btn-success btn-sm">
                  <i class="fa fa-edit"></i>
                </a>
              </td>
              <td width="10" class="text-center"><?= $no++; ?></td>
              <td><?= $pu['nama']; ?></td>
              <td class="text-center" width="10"><?= $pu['kelas']; ?></td>
              <td><?= tgl($pu['tanggal']); ?></td>
              <td><?= "Rp.".number_format($pu['nominal'], 0, ',', '.'); ?></td>
              <td width="80" class="text-center">
                <?php 
                  $tagihan = $ketentuan_pembayaran['uas'] - $pu['diskon'];

                  if($pu['nominal'] == $tagihan ){
                    echo "<span class='badge badge-primary'>Lunas</span>";
                  } else if($pu['nominal'] < $tagihan){

                    $kurang = $pu['nominal'] - $tagihan;

                    echo "Rp.".number_format($kurang, 0, ',', '.');

                  } else if( $pu['nominal'] > $tagihan ){
                    $lebih = $pu['nominal'] - $tagihan;

                    echo "Rp.+".number_format($lebih, 0, ',', '.');
                  }
                 ?>
              </td>
              <td><?= $pu['diskon'] == 0 ? "-" : "Rp.".number_format($pu['diskon'], 0, ',', '.');  ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="6">Total</th>
              <th colspan="3">
                <?php 
                  $total = ($total[0]['nominal']);
                  echo "Rp.".number_format($total, 0, ',', '.');
                ?>
              </th>
            </tr>
          </tfoot>
        </table>
      </div>
    </form>
  </div>
</div>