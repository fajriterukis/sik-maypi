<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary float-left">Sisa Dana</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="sisa_dana" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Tahun Ajaran</th>
                                <th>Dana Denda+Infaq</th>
                                <th>Dana UN</th>
                                <th>Dana UAS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($sisa_dana as $sd): ?>
                            <tr>
                                <td><?=$sd['tahun_ajaran'];?></td>
                                <td><?="Rp." . number_format($sd['denda_infaq'], 0, ',', '.');?></td>
                                <td><?="Rp." . number_format($sd['un'], 0, ',', '.');?></td>
                                <td><?="Rp." . number_format($sd['uas'], 0, ',', '.');?></td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>