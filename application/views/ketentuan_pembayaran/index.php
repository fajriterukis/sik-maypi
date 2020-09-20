<div class="row">
  <div class="col-md-6">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary float-left">Ketentuan Pembayaran</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered nowrap">
            <thead>
              <tr>
                <th>Menu</th>
                <th>UAS</th>
                <th>UN</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach( $ketentuan_pembayaran as $kp ) : ?>
              <tr>
                <td class="text-center" width="100">
                  <a href="<?= base_url('ketentuan_pembayaran/edit/'.$kp['id']); ?>" class="btn btn-success btn-sm">
                    <i class="fa fa-edit"></i>
                  </a>
                </td> 
                <td><?= "Rp.".number_format($kp['uas'], 0, ',', '.'); ?></td>
                <td><?= "Rp.".number_format($kp['un'], 0, ',', '.'); ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>