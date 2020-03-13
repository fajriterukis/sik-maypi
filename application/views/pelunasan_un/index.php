<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary float-left">Pelunasan UN</h6>
    <a href="<?= base_url('pelunasan_un/tambah'); ?>" class="btn btn-primary btn-sm float-right">Tambah</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="pelunasan_un" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Menu</th>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Nominal</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; ?>
          <?php foreach( $pelunasan_un as $pu ) : ?>
          <tr>
            <td class="text-center" width="100">
              <a href="<?= base_url('pelunasan_un/edit/'.$pu['id']); ?>" class="btn btn-success btn-sm">
                <i class="fa fa-edit"></i>
              </a>
              <a href="<?= base_url('pelunasan_un/hapus/'.$pu['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin dihapus?')">
                <i class="fa fa-trash"></i>
              </a>
            </td>
            <td width="10" class="text-center"><?= $no++; ?></td>
            <td><?= $pu['nama']; ?></td>
            <td><?= tgl($pu['tanggal']); ?></td>
            <td><?= "Rp.".number_format($pu['nominal'], 0, ',', '.'); ?></td>
            <td width="80" class="text-center">
              <?php 
                if($pu['nominal'] >= 1500000 ){
                  echo "<span class='badge badge-primary'>Lunas</span>";
                } else {
                  echo "<span class='badge badge-danger'>Belum Lunas</span>";
                }
               ?>
             </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="4">Jumlah</th>
            <th colspan="2">
              <?php 
                $total = ($total[0]['nominal'] - $total_dana_keluar_un['uang_keluar']);
                echo "Rp.".number_format($total, 0, ',', '.');
              ?>
            </th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
