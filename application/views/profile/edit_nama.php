<div class="row justify-content-center">
	<div class="col-md-6">
		<form action="" method="post">
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control" value="<?= userLogin()['nama']; ?>" required>
			</div>
			<button class="btn btn-primary" name="simpan">Simpan</button>
			<a href="<?= base_url('profile'); ?>" class="btn btn-danger float-right">
				Kembali ke halaman profile
			</a>
		</form>	
	</div>
</div>