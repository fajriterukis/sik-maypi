<div class="row">
	<div class="col-md-6">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
			  <h6 class="m-0 font-weight-bold text-primary float-left">Import Pembayaran UAS</h6>
			</div>
			<div class="card-body">
				<form action="upload" method="POST" enctype="multipart/form-data">
				  <div class="form-group">
				    <a href="<?= base_url('import/uas/pembayaran_uas.xlsx'); ?>" class="btn btn-success float-left">Download template file untuk diimport</a>
				    <input type="file" class="form-control-file float-right mt-3 mb-3" name="importexcel" accept=".xlsx,.xls" required>
				  	<button type="submit" class="btn btn-primary float-right">Import</button>
				</form>
			</div>
		</div>
	</div>
</div>