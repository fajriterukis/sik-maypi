<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary float-left">Data Sekolah</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>Menu</th>
                                <th>Nama Kepala Sekolah</th>
                                <th>NIP</th>
                                <th>Alamat Sekolah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center" width="100">
                                    <a href="<?=base_url('data_sekolah/edit/' . $data_sekolah['id']);?>"
                                        class="btn btn-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                                <td><?=$data_sekolah['nama_kepsek'];?></td>
                                <td><?=$data_sekolah['nip_kepsek'];?></td>
                                <td><?=$data_sekolah['alamat_sekolah'];?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>