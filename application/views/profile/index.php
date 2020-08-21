<div class="row justify-content-center mb-3">
	<div class="col-md-6 text-center">
		<img src="<?= base_url('assets/img/logo.png'); ?>" width="150" class="img-fluid">
	</div>
</div>
<div class="row justify-content-center">
	<div class="col-md-6">
		<table style="margin: auto" class="mb-3">
			<tr>
				<td><h5>Nama</h5></td>
				<td>:</td>
				<td><h5><b class="text-primary"><?= userlogin()['nama']; ?></b></h5></td>
			</tr>
			<tr>
				<td><h5>Username</h5></td>
				<td>:</td>
				<td><h5><b class="text-primary"><?= userlogin()['username']; ?></b></h5></td>
			</tr>
		</table>
		
		<?php if( $this->session->flashdata('message') ) : ?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
		  <strong>Password telah diganti</strong>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<?php endif; ?>

		<a href="<?= base_url('profile/edit_nama'); ?>" class="btn btn-block btn-primary">Edit Nama</a>
		<a href="<?= base_url('profile/edit_username'); ?>" class="btn btn-block btn-primary">Edit Username</a>
		<a href="<?= base_url('profile/ganti_password'); ?>" class="btn btn-block btn-primary">Ganti Password</a>
	</div>
</div>