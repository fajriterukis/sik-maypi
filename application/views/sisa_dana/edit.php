<div class="row">
	<div class="col-md-6">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
			  <h6 class="m-0 font-weight-bold text-primary float-left">Edit Sisa Dana Tahun Lalu</h6>
			</div>
			<div class="card-body">
				<form action="" method="POST">
				  <div class="form-group">
				  	<label>Jumlah</label>
				  	<input type="number" class="form-control" name="jumlah" value="<?= $sisa_dana['jumlah']; ?>">
				  </div>
				  <button type="submit" name="simpan" class="btn btn-primary float-right">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>