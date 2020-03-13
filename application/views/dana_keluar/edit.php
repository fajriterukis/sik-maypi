<div class="row">
	<div class="col-md-6">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
			  <h6 class="m-0 font-weight-bold text-primary float-left">Edit Dana Keluar</h6>
			</div>
			<div class="card-body">
				<form action="" method="POST">
				  <div class="form-group">
				    <label>Keperluan</label>
				    <input type="text" class="form-control" name="keperluan" value="<?= $dana_keluar['keperluan']; ?>" required>
				  </div>
				  <div class="form-group">
				    <label>Jenis Dana</label>
				    <select class="form-control" name="jenis_dana">
					  
					  <?php $jenis_dana = $dana_keluar['jenis_dana'];?>

				      <option value="Infaq" <?php if($jenis_dana=="Infaq"){echo "selected";} ?>>Infaq</option>
				      <option value="Denda" <?php if($jenis_dana=="Denda"){echo "selected";} ?>>Denda</option>
				      <option value="Semester" <?php if($jenis_dana=="Semester"){echo "selected";} ?>>Semester</option>
				      <option value="Ujian" <?php if($jenis_dana=="Ujian"){echo "selected";} ?>>Ujian</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label>Tanggal</label>
				    <input type="date" class="form-control" name="tanggal" value="<?= $dana_keluar['tanggal']; ?>" required>
				  </div>
				  <div class="form-group">
				    <label>Uang Keluar</label>
				    <input type="number" class="form-control" name="uang_keluar" value="<?= $dana_keluar['uang_keluar']; ?>" required>
				  </div>
				  <button type="submit" name="simpan" class="btn btn-primary float-right">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>