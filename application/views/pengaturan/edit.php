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
				      	$row_sisa_dana = $row_sisa_dana-1;

			    		$tahun_a = 2019;
			    		$tahun_b = 2020;
			    		$tahun_ajaran = $tahun_a."/".$tahun_b;

			    		for($i=$tahun_a; $i<=2019+$row_sisa_dana; $i++) :
			    			$tahun_ajaran = $i."/".$tahun_b++;
			    	  ?>
				      <option value="<?= $tahun_ajaran; ?>" <?php if($pengaturan['tahun_ajaran']==$tahun_ajaran){echo "selected";} ?>><?= $tahun_ajaran; ?></option>
					  <?php endfor;  ?>
				    </select>
				  </div>
				  <button type="submit" name="simpan" class="btn btn-primary float-right">Simpan</button>
				</form>
			</div>
			<div class="col-md-12 pb-3">
				<small class="text-danger"><b>Perhatian</b> : Jika opsi tahun ajaran selanjutnya belum muncul, silahkan buka halaman <b>Beranda</b> dan Tekan tombol <b>Simpan ke Sisa Dana Tahun Lalu</b>, lalu kembali ke halaman ini lagi.</small>

			    <br><br>

			    <small class="text-primary"><b>Pertanyaan yang mungkin anda ajukan</b> : Kok pilihan tahun ajaran 2018/2019 ke belakang tidak ada? <br> <b>Jawaban</b> : Karena aplikasi ini mulai dibuat saat tahun ajaran 2019/2020, tahun sebelumnya masih pakek buku manual.
			    </small>
			</div>
		</div>
	</div>
</div>