<div class="row">
	<div class="col-md-6">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
			  <h6 class="m-0 font-weight-bold text-primary float-left">Edit Ketentuan Pembayaran</h6>
			</div>
			<div class="card-body">
				<form action="" method="POST">
				  <div class="form-group">
				    <label>UAS</label>
				    <input type="number" class="form-control" name="uas" value="<?= $ketentuan_pembayaran['uas'] ?>" required>
				  </div>
				  <div class="form-group">
				    <label>UN</label>
				    <input type="number" class="form-control" name="un" value="<?= $ketentuan_pembayaran['un'] ?>" required>
				  </div>
				  <button type="submit" name="simpan" class="btn btn-primary float-right">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>