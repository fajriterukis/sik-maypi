<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary float-left">Dana Keluar</h6>
    <a href="<?= base_url('dana_keluar/tambah'); ?>" class="btn btn-primary btn-sm float-right">Tambah</a>
    <a href="<?= base_url('dana_keluar/cetak') ?>" class="btn btn-success btn-sm float-right mr-2">
      <i class="fa fa-print"></i>
      Cetak Laporan
    </a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dana_keluar" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Menu</th>
            <th>No</th>
            <th>Keperluan</th>
            <th>Jenis Dana</th>
            <th>Tanggal</th>
            <th>Uang Keluar</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; ?>
          <?php foreach( $dana_keluar as $dk ) : ?>
          <tr>
            <td class="text-center" width="100">
              <a href="<?= base_url('dana_keluar/edit/'.$dk['id']); ?>" class="btn btn-success btn-sm">
                <i class="fa fa-edit"></i>
              </a>
              <a href="<?= base_url('dana_keluar/hapus/'.$dk['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin dihapus?')">
                <i class="fa fa-trash"></i>
              </a>
            </td>
            <td width="10" class="text-center"><?= $no++; ?></td>
            <td><?= $dk['keperluan']; ?></td>
            <td><?= $dk['jenis_dana']; ?></td>
            <td><?= tgl($dk['tanggal']); ?></td>
            <td><?= "Rp.".number_format($dk['uang_keluar'], 0, ',', '.'); ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="5">Jumlah</th>
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
