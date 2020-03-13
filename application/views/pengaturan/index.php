<div class="row">
  <div class="col-md-6">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary float-left">Pengaturan</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Menu</th>
                <th>Tahun Ajaran</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach( $pengaturan as $p ) : ?>
              <tr>
                <td><?= $p['tahun_ajaran']; ?></td>
                <td class="text-center" width="200">
                  <a href="<?= base_url('pengaturan/edit/'.$p['id']); ?>" class="btn btn-success btn-sm">
                    <i class="fa fa-edit"></i>
                  </a>
                </td> 
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>