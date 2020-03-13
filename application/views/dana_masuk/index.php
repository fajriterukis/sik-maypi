<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary float-left">Dana Masuk</h6>
    <a href="<?= base_url('dana_masuk/tambah'); ?>" class="btn btn-primary btn-sm float-right">Tambah</a>
    <a href="<?= base_url('dana_masuk/cetak') ?>" class="btn btn-success btn-sm float-right mr-2">
      <i class="fa fa-print"></i>
      Cetak Laporan
    </a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dana_masuk" width="100%">
        <thead>
          <tr>
            <th>Menu</th>
            <th>No</th>
            <th>Jenis Dana</th>
            <th>Tanggal Masuk</th>
            <th>Nominal</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; ?>
          <?php foreach( $dana_masuk as $dm ) : ?>
          <tr>
            <td class="text-center" width="100">
              <a href="<?= base_url('dana_masuk/edit/'.$dm['id']); ?>" class="btn btn-success btn-sm">
                <i class="fa fa-edit"></i>
              </a>
              <a href="<?= base_url('dana_masuk/hapus/'.$dm['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin dihapus?')">
                <i class="fa fa-trash"></i>
              </a>
            </td>
            <td width="10" class="text-center"><?= $no++; ?></td>
            <td><?= $dm['jenis_dana']; ?></td>
            <td><?= tgl($dm['tanggal_masuk']); ?></td>
            <td><?= "Rp.".number_format($dm['nominal'], 0, ',', '.'); ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="4">Jumlah Dana Infaq</th>
            <th>
              <?php 
                $jumlah_infaq = ($jumlah_infaq['nominal']);
                echo "Rp.".number_format($jumlah_infaq, 0, ',', '.');
               ?>
            </th>
          </tr>
          <tr>
            <th colspan="4">Jumlah Uang Denda</th>
            <th>
              <?php 
                $jumlah_uang_denda = ($jumlah_uang_denda['nominal']);
                echo "Rp.".number_format($jumlah_uang_denda, 0, ',', '.');
               ?>
            </th>
          </tr>
          <tr>
            <th colspan="4">Total</th>
            <th>
              <?php 
                $total = ($total['nominal']);
                echo "Rp.".number_format($total, 0, ',', '.');
              ?>
            </th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
