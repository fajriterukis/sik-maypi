<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary float-left">Data Hutang</h6>
    <a href="<?= base_url('hutang/tambah'); ?>" class="btn btn-primary btn-sm float-right">Tambah</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="hutang" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Menu</th>
            <th>No</th>
            <th>Peminjam</th>
            <th>Jenis Dana</th>
            <th>Tanggal</th>
            <th>Nominal</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; ?>
          <?php foreach( $hutang as $h ) : ?>
          <tr>
            <td class="text-center" width="100">
              <a href="<?= base_url('hutang/edit/'.$h['id']); ?>" class="btn btn-success btn-sm">
                <i class="fa fa-edit"></i>
              </a>
              <a href="<?= base_url('hutang/hapus/'.$h['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin dihapus?')">
                <i class="fa fa-trash"></i>
              </a>
            </td>
            <td width="10" class="text-center"><?= $no++; ?></td>
            <td><?= $h['peminjam']; ?></td>
            <td><?= $h['jenis_dana'] == 'Infaq_Denda' ? "Infaq & Denda" : $h['jenis_dana']; ?></td>
            <td><?= tgl($h['tanggal']); ?></td>
            <td><?= "Rp.".number_format($h['nominal'], 0, ',', '.'); ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="5">Total Dana Infaq & Denda Dipinjam</th>
            <th>
              <?php
                echo "Rp.".number_format(total_hutang('Infaq_Denda'), 0, ',', '.');
              ?>
            </th>
          </tr>
          <tr>
            <th colspan="5">Total Dana UAS Dipinjam</th>
            <th>
              <?php
                echo "Rp.".number_format(total_hutang('UAS'), 0, ',', '.');
              ?>
            </th>
          </tr>
          <tr>
            <th colspan="5">Total Dana UN Dipinjam</th>
            <th>
              <?php
                echo "Rp.".number_format(total_hutang('UN'), 0, ',', '.');
              ?>
            </th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
