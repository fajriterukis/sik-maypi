<div class="row">
    <div class="col-md-12">
        <h3 class="mb-3">Profile</h3>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <?php if ($this->session->flashdata()): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><?=$this->session->flashdata('message');?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php endif;?>
    </div>
</div>

<div class="row">
    <div class="col-md-4 text-center mb-2">
        <div class="card border-bottom-primary">
            <div class="card-body">
                <?php if (userLogin()['foto']): ?>
                <img src="<?=base_url('assets/upload/profile/' . userLogin()['foto']);?>" alt="logo user" width="250">
                <?php else: ?>
                <img src="<?=base_url('assets/img/user.png');?>" alt="logo user" width="250" style="margin-right:15px;">
                <?php endif;?>
            </div>
            <div class="card-footer">
                <a href="<?=base_url('profile/hapus_foto');?>" class="btn btn-danger btn-sm">Hapus Foto</a>
                <a href="<?=base_url('profile/ubah_foto');?>" class="btn btn-primary btn-sm">Ubah Foto</a>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card border-bottom-primary">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th><?=userlogin()['nama'];?></th>
                            <th><a href="<?=base_url('profile/edit_nama');?>"
                                    class="badge badge-primary float-right">Edit Nama</a></th>
                        </tr>
                        <tr>
                            <th><?=userlogin()['username'];?></th>
                            <th><a href="<?=base_url('profile/edit_username');?>"
                                    class="badge badge-primary float-right">Edit Username</a></th>
                        </tr>
                        <tr>
                            <th>********</th>
                            <th><a href="<?=base_url('profile/ganti_password');?>"
                                    class="badge badge-primary float-right">Ganti Password</a></th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- <a href="<?=base_url('profile/edit_nama');?>" class="btn btn-block btn-primary">Edit Nama</a>
    <a href="<?=base_url('profile/edit_username');?>" class="btn btn-block btn-primary">Edit Username</a>
    <a href="<?=base_url('profile/ganti_password');?>" class="btn btn-block btn-primary">Ganti Password</a> -->