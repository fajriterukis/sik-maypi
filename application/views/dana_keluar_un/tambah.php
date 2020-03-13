<div class="row">
	<div class="col-md-6">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
			  <h6 class="m-0 font-weight-bold text-primary float-left">Tambah Dana Keluar UN</h6>
			</div>
			<div class="card-body">
				<form action="" method="POST">
				  <div class="form-group">
				    <label>Keperluan</label>
				    <input type="text" class="form-control" name="keperluan" required>
				  </div>
				  <div class="form-group">
				    <label>Tanggal</label>
				    <input type="date" class="form-control" name="tanggal" value="<?= date('Y-m-d'); ?>" required>
				  </div>
				  <div class="form-group">
				    <label>Uang Keluar</label>
				    <input type="number" class="form-control" name="uang_keluar" required>
				  </div>
				  <div class="form-group">
				    <input type="hidden" class="form-control" name="tahun_ajaran" value="<?= $tahun_ajaran['tahun_ajaran']; ?>" readonly required>		 
				  </div>
				  <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah</button>
				</form>
			</div>
		</div>
	</div>
</div>