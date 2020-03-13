<div class="row">
	<div class="col-md-6">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
			  <h6 class="m-0 font-weight-bold text-primary float-left">Edit Tahun Ajaran</h6>
			</div>
			<div class="card-body">
				<form action="" method="POST">
				  <div class="form-group">
				    <label>Tahun Ajaran</label>
				    <select class="form-control" name="tahun_ajaran">
				      <?php 
			    		$tahun_a = 2019;
			    		$tahun_b = 2020;
			    		$tahun_ajaran = $tahun_a."/".$tahun_b;

			    		for($i=$tahun_a; $i<=2029; $i++) :
			    			$tahun_ajaran = $i."/".$tahun_b++;
			    	  ?>
				      <option value="<?= $tahun_ajaran; ?>" <?php if($pengaturan['tahun_ajaran']==$tahun_ajaran){echo "selected";} ?>><?= $tahun_ajaran; ?></option>
					  <?php endfor;  ?>
				    </select>
				  </div>
				  <button type="submit" name="simpan" class="btn btn-primary float-right">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>