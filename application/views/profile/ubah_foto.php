<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card border-bottom-primary">
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data" id="form-upload-profile">
                    <input type="hidden" name="namaFoto" value="<?=userLogin()['foto'];?>">
                    <div class="form-group">
                        <input type="file" class="form-control" name="foto" id="foto" accept="image/*">
                        <span class="error-upload text-danger"></span>
                    </div>
                    <button class="btn btn-primary btn-sm" name="simpan">Simpan</button>
                    <a href="<?=base_url('profile');?>" class="btn btn-danger btn-sm float-right">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>