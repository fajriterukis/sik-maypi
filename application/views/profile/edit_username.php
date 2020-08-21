<div class="row justify-content-center">
	<div class="col-md-6">
		<form action="" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control" value="<?= userLogin()['username']; ?>" required>
			</div>
			<button class="btn btn-primary" name="simpan" onclick="return confirm('Anda akan logout otomatis setelah mengubah username')">Simpan</button>
			<a href="<?= base_url('profile'); ?>" class="btn btn-danger float-right">
				Kembali ke halaman profile
			</a>
		</form>	
	</div>
</div>