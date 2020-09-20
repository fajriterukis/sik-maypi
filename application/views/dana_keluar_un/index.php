<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary float-left">Dana Keluar UN</h6>
  </div>
  <div class="card-body">
    <a href="<?= base_url('dana_keluar_un/tambah'); ?>" class="btn btn-primary btn-sm float-right ml-2 mb-2">Tambah</a>
    <a href="<?= base_url('dana_keluar_un/cetak') ?>" class="btn btn-success btn-sm float-right mb-2">
      <i class="fa fa-print"></i>
      Cetak Laporan
    </a>
    <div class="table-responsive">
      <table class="table table-bordered nowrap" id="dana_keluar_un" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Menu</th>
            <th>No</th>
            <th>Keperluan</th>
            <th>Tanggal</th>
            <th>Uang Keluar</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; ?>
          <?php foreach( $dana_keluar_un as $dku ) : ?>
          <tr>
            <td class="text-center" width="100">
              <a href="<?= base_url('dana_keluar_un/edit/'.$dku['id']); ?>" class="btn btn-success btn-sm">
                <i class="fa fa-edit"></i>
              </a>
              <a href="<?= base_url('dana_keluar_un/hapus/'.$dku['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin dihapus?')">
                <i class="fa fa-trash"></i>
              </a>
            </td>
            <td width="10" class="text-center"><?= $no++; ?></td>
            <td><?= $dku['keperluan']; ?></td>
            <td><?= tgl($dku['tanggal']); ?></td>
            <td><?= "Rp.".number_format($dku['uang_keluar'], 0, ',', '.'); ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="4">Total</th>
            <th>
              <?php 
                $total = ($total[0]['uang_keluar']);
                echo "Rp.".number_format($total, 0, ',', '.');
              ?>
            </th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
