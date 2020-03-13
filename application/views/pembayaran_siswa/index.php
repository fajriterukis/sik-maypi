<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary float-left">Pelunasan UN</h6>
    <a href="<?= base_url('pembayaran_siswa/tambah'); ?>" class="btn btn-primary btn-sm float-right">Tambah</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="pembayaran_siswa" width="100%" cellspacing="0">
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
          <?php foreach( $pembayaran_siswa as $ps ) : ?>
          <tr>
            <td class="text-center" width="100">
              <a href="<?= base_url('pembayaran_siswa/edit/'.$ps['id']); ?>" class="btn btn-success btn-sm">
                <i class="fa fa-edit"></i>
              </a>
              <a href="<?= base_url('pembayaran_siswa/hapus/'.$ps['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin dihapus?')">
                <i class="fa fa-trash"></i>
              </a>
            </td>
            <td width="10" class="text-center"><?= $no++; ?></td>
            <td><?= $ps['nama']; ?></td>
            <td><?= $ps['kelas']; ?></td>
            <td><?= tgl($ps['tanggal']); ?></td>
            <td><?= "Rp.".number_format($ps['nominal'], 0, ',', '.'); ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="5">Jumlah</th>
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
