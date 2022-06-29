<div class="container-fluid">
	<div class="row">
	    <div class="col-sm-2 text-center">
	      <img src="<?= base_url('assets/img/logo.png'); ?>" width="120" class="mt-4">
	    </div>
	    <div class="col" style="padding-right: 120px;">
	        <h2 class="text-center"><b>YAYASAN MIFTAHUL HUDA <br> MADRASAH ALIYAH MARTAPURA <br> </b></h2>
	        <h4 class="text-center"><b>"TERAKREDITASI"</b></h4>
	        <p class="text-center" style="font-size: 14px;">
	        Alamat : Kumpul Mulyo Desa Perjaya Barat Kec. Martapura Kab. OKU Timur <br>
	        Provinsi Sumatera Selatan Kode POS 32181 Email : mamartapuraa@gmail.com</p>
       </div>
	</div>

		<hr class="hr-1">
		<hr class="hr-2">

		<h3 class="text-center mb-4 mt-3">Rekapitulasi Dana Keseluruhan <br> Tahun Ajaran <?= $tahun_ajaran['tahun_ajaran']; ?></h3>

	<!-- Denda Infaq -->
  	<div class="row">
	  	<div class="col-sm-6">
		  <table border="0">
		    <tr>
		    	<td>Total Dana Masuk Infaq dan Denda</td>
		    	<td>&nbsp; &nbsp;</td>
		    	<td><?= "Rp.".number_format($total_dana_masuk['nominal'], 0, ',', '.'); ?></td>
		    </tr>
		    <tr>
		    	<td>Sisa Dana Denda & Infaq Tahun Lalu</td>
		    	<td></td>
		    	<td><?= "Rp.".number_format($sisa_dana['denda_infaq'], 0, ',', '.'); ?></td>
		    	<td>+</td>
		    </tr>
		    <tr>
		    	<td colspan="3"><hr style="margin: 0; padding: 0; border-color: black;"></td>
		    </tr>
		    <tr>
		    	<td></td>
		    	<td></td>
		    	<td><?= "Rp.".number_format($total_dana_masuk['nominal']+$sisa_dana['denda_infaq'], 0, ',', '.'); ?></td>
		    </tr>
		    <?php if( total_hutang('Infaq_Denda') > 0 ) : ?>
		    <tr>
		    	<td>Dana Infaq dan Denda Yang Dipinjam</td>
		    	<td></td>
		    	<td><?= "Rp.".number_format(total_hutang('Infaq_Denda'), 0, ',', '.'); ?></td>
		    </tr>
			<?php endif; ?>
		    <tr>
		    	<td>Total Dana Keluar Infaq dan Denda</td>
		    	<td></td>
		    	<td><?= "Rp.".number_format($total_dana_keluar['uang_keluar'], 0, ',', '.'); ?></td>
		    	<td>-</td>
		    </tr>
		    <tr>
		    	<td colspan="3"><hr style="margin: 0; padding: 0; border-color: black;"></td>
		    </tr>
		    <tr>
		    	<th>Sisa Dana Infaq dan Denda</th>
		    	<td></td>
		    	<th><?= "Rp.".number_format($total_dana_masuk['nominal']+$sisa_dana['denda_infaq']-$total_dana_keluar['uang_keluar']-total_hutang('Infaq_Denda'), 0, ',', '.'); ?></th>
		    </tr>
		  </table>
		</div>

		<!-- UAS -->
		<div class="col-sm-6 d-flex justify-content-end">
	   	<table border="0">
			    <tr>
			    	<td>Total Pembayaran UAS</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<td><?= "Rp.".number_format($total_pembayaran_uas['nominal'], 0, ',', '.'); ?></td>
			    </tr>
			     <tr>
			    	<td>Sisa Dana UAS Tahun Lalu</td>
			    	<td></td>
			    	<td><?= "Rp.".number_format($sisa_dana['uas'], 0, ',', '.'); ?></td>
			    	<td>+</td>
			    </tr>
			    <tr>
			    	<td colspan="3"><hr style="margin: 0; padding: 0; border-color: black;"></td>
			    </tr>
			    <tr>
			    	<td></td>
			    	<td></td>
			    	<td><?= "Rp.".number_format($total_pembayaran_uas['nominal']+$sisa_dana['uas'], 0, ',', '.'); ?></td>
			    </tr>
			    <?php if( total_hutang('UAS') > 0 ) : ?>
			    <tr>
			    	<td>Dana UAS Yang Dipinjam</td>
			    	<td></td>
			    	<td><?= "Rp.".number_format(total_hutang('UAS'), 0, ',', '.'); ?></td>
			    </tr>
				<?php endif; ?>
			    <tr>
			    	<td>Total Dana Keluar UAS</td>
			    	<td></td>
			    	<td><?= "Rp.".number_format($total_dana_keluar_uas['uang_keluar'], 0, ',', '.'); ?></td>
			    	<td>-</td>
			    </tr>
			    <tr>
			    	<td colspan="3"><hr style="margin: 0; padding: 0; border-color: black;"></td>
			    </tr>
			    <tr>
			    	<th>Sisa Dana UAS</th>
			    	<td></td>
			    	<th><?= "Rp.".number_format($total_pembayaran_uas['nominal']+$sisa_dana['uas']-$total_dana_keluar_uas['uang_keluar']-total_hutang('UAS'), 0, ',', '.'); ?></th>
			    </tr>
			</table>
   	</div>
	</div>

	
   <div class="row mt-5">
   	<!-- UN -->
	  	<div class="col-sm-6">
	  		<table border="0">
		    <tr>
		    	<td>Total Pelunasan UN</td>
		    	<td>&nbsp; &nbsp;</td>
		    	<td><?= "Rp.".number_format($total_pelunasan_un['nominal'], 0, ',', '.'); ?></td>
		    </tr>
		    <tr>
		    	<td>Sisa Dana UN Tahun Lalu</td>
		    	<td></td>
		    	<td><?= "Rp.".number_format($sisa_dana['un'], 0, ',', '.'); ?></td>
		    	<td>+</td>
		    </tr>
		    <tr>
		    	<td colspan="3"><hr style="margin: 0; padding: 0; border-color: black;"></td>
		    </tr>
		    <tr>
		    	<td></td>
		    	<td></td>
		    	<td><?= "Rp.".number_format($total_pelunasan_un['nominal']+$sisa_dana['un'], 0, ',', '.'); ?></td>
		    </tr>
		    <?php if( total_hutang('UN') > 0 ) : ?>
		    <tr>
		    	<td>Dana UN Yang Dipinjam</td>
		    	<td></td>
		    	<td><?= "Rp.".number_format(total_hutang('UN'), 0, ',', '.'); ?></td>
		    </tr>
			<?php endif; ?>
		    <tr>
		    	<td>Total Dana Keluar UN</td>
		    	<td></td>
		    	<td><?= "Rp.".number_format($total_dana_keluar_un['uang_keluar'], 0, ',', '.'); ?></td>
		    	<td>-</td>
		    </tr>
		    <tr>
		    	<td colspan="3"><hr style="margin: 0; padding: 0; border-color: black;"></td>
		    </tr>
		    <tr>
		    	<th>Sisa Dana UN</th>
		    	<td></td>
		    	<th><?= "Rp.".number_format($total_pelunasan_un['nominal']+$sisa_dana['un']-$total_dana_keluar_un['uang_keluar']-total_hutang('UN'), 0, ',', '.'); ?></th>
		    </tr>
		  	</table>
	  	</div>
   </div>

  <div class="row" style="margin-top: 50px;">
    <div class="col-sm-8"></div>
    <div class="col-sm-4 text-center">
      <h6 class="mb-5 pb-3 font-weight-bold">Martapura, <?= date('d').' '.bulan().' '.date('Y'); ?> <br> Kepala Madrasah</h6>
      <h6 class="font-weight-bold">Syamsul Arifin, S.Pd.I</h6>
    </div>
  </div>
</div>