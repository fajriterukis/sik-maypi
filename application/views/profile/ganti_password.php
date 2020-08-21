<div class="row justify-content-center">
	<div class="col-md-6">
		<form action="" method="post">
			<div class="form-group">
				<label>Masukkan Password Lama</label>
				<input type="text" name="password_lama" class="form-control" value="<?= set_value('password_lama'); ?>" required autocomplete="off">
				<small class="text-danger"><?= $this->session->flashdata('message'); ?></small>
			</div>
			<div class="form-group">
				<label>Masukkan Password Baru</label> <small class="text-primary">(Disarankan 8 karakter)</small>
				<input type="text" name="password_baru" class="form-control" value="<?= set_value('password_baru'); ?>" required autocomplete="off">
				<?= form_error('password_baru'); ?>
			</div>
			<div class="form-group">
				<label>Masukkan Konfirmasi Password</label>
				<input type="text" name="passconf" class="form-control" value="<?= set_value('passconf'); ?>" required autocomplete="off">
				<?= form_error('passconf'); ?>
			</div>
			<button class="btn btn-primary" name="simpan">Simpan</button>
			<a href="<?= base_url('profile'); ?>" class="btn btn-danger float-right">
				Kembali ke halaman profile
			</a>
		</form>	
	</div>
</div>