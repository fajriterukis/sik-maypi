<div class="row">
	<div class="col-md-6">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
			  <h6 class="m-0 font-weight-bold text-primary float-left">Edit Data Hutang</h6>
			</div>
			<div class="card-body">
				<form action="" method="POST">
				  <div class="form-group">
				    <label>Peminjam</label>
				    <input type="text" class="form-control" name="peminjam" value="<?= $hutang['peminjam']; ?>" required>
				  </div>
				  <div class="form-group">
				    <label>Jenis Dana</label>
				    <select class="form-control" name="jenis_dana" required>

              <?php $jenis_dana = $hutang['jenis_dana'];?>

				      <option value="">Pilih Jenis Dana</option>
				      <option value="Infaq_Denda" <?php if($jenis_dana=="Infaq_Denda"){echo "selected";} ?>>Infaq &  Denda</option>
				      <option value="UAS" <?php if($jenis_dana=="UAS"){echo "selected";} ?>>UAS</option>
				      <option value="UN" <?php if($jenis_dana=="UN"){echo "selected";} ?>>UN</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label>Tanggal</label>
				    <input type="date" class="form-control" name="tanggal" value="<?= $hutang['tanggal']; ?>" required>
				  </div>
				  <div class="form-group">
				    <label>Nominal</label>
				    <input type="number" class="form-control" name="nominal" value="<?= $hutang['nominal'];?>" required>
				  </div>
				  <button type="submit" name="simpan" class="btn btn-primary float-right">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
