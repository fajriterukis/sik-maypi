<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary float-left">Pembayaran UAS</h6>
    <a href="<?= base_url('pembayaran_uas/tambah'); ?>" class="btn btn-primary btn-sm float-right">
      Tambah
    </a>
    <a href="<?= base_url('pembayaran_uas/cetak'); ?>" class="btn btn-success btn-sm float-right mr-2">
      <i class="fa fa-print"></i>
      Cetak Laporan
    </a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="pembayaran_uas" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Menu</th>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Tanggal</th>
            <th>Nominal</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; ?>
          <?php foreach( $pembayaran_uas as $pu ) : ?>
          <tr>
            <td class="text-center" width="100">
              <a href="<?= base_url('pembayaran_uas/edit/'.$pu['id']); ?>" class="btn btn-success btn-sm">
                <i class="fa fa-edit"></i>
              </a>
              <a href="<?= base_url('pembayaran_uas/hapus/'.$pu['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin dihapus?')">
                <i class="fa fa-trash"></i>
              </a>
            </td>
            <td width="10" class="text-center"><?= $no++; ?></td>
            <td><?= $pu['nama']; ?></td>
            <td><?= $pu['kelas']; ?></td>
            <td><?= tgl($pu['tanggal']); ?></td>
            <td><?= "Rp.".number_format($pu['nominal'], 0, ',', '.'); ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="5">Total</th>
            <th>
              <?php 
                $total = ($total[0]['nominal']);
                echo "Rp.".number_format($total, 0, ',', '.');
              ?>
            </th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
