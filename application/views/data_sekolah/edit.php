<div class="row">
    <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary float-left">Edit Data Sekolah</h6>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Nama Kepala Sekolah</label>
                        <input type="text" class="form-control" name="nama_kepsek"
                            value="<?=$data_sekolah['nama_kepsek']?>" required>
                    </div>
                    <div class="form-group">
                        <label>NIP Kepala Sekolah</label>
                        <input type="text" class="form-control" name="nip_kepsek"
                            value="<?=$data_sekolah['nip_kepsek']?>" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat Sekolah</label>
                        <input type="text" class="form-control" name="alamat_sekolah"
                            value="<?=$data_sekolah['alamat_sekolah']?>" required>
                    </div>
                    <button type="submit" name="simpan" class="btn btn-primary float-right">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>