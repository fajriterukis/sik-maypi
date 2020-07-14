<div class="row">
  <div class="col-md-12">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary float-left">Sisa Dana Tahun Lalu</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Dana Denda+Infaq</th>
                <th>Dana UN</th>
                <th>Dana UAS</th>
                <th>Tahun Ajaran</th>
                <!-- <th>Menu</th> -->
              </tr>
            </thead>
            <tbody>
              <?php foreach( $sisa_dana as $sd ) : ?>
              <tr>
                <td><?= "Rp.".number_format($sd['denda_infaq'], 0, ',', '.'); ?></td>
                <td><?= "Rp.".number_format($sd['un'], 0, ',', '.'); ?></td>
                <td><?= "Rp.".number_format($sd['uas'], 0, ',', '.'); ?></td>
                <td><?= $sd['tahun_ajaran']; ?></td>
                <!-- <td class="text-center" width="200">
                  <a href="<?= base_url('sisa_dana/edit/'.$sd['id']); ?>" class="btn btn-success btn-sm">
                    <i class="fa fa-edit"></i>
                  </a>
                </td> --> 
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>