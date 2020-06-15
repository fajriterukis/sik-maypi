<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_uas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->model('M_pembayaran_uas');
		$this->load->model('M_pengaturan');
	}

	public function index()
	{
		$data['title']            = 'Pembayaran UAS';
		$tahun_ajaran             = $this->M_pengaturan->tampil()->row_array();
		$data['pembayaran_uas'] = $this->M_pembayaran_uas->tampil($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['total']            = $this->M_pembayaran_uas->total($tahun_ajaran['tahun_ajaran'])->result_array();
		$this->template->view('pembayaran_uas/index', $data);
	}

	public function tambah()
	{
		$data['title']        = 'Tambah Pembayaran UAS';
		$data['tahun_ajaran'] = $this->M_pengaturan->tampil()->row_array();
		$this->template->view('pembayaran_uas/tambah', $data);

		if( isset($_POST['tambah']) ){
			$this->M_pembayaran_uas->tambah();
			redirect('pembayaran_uas');
		}
	}

	public function edit($id)
	{
		$data['title']        = 'Edit Pembayaran UAS';
		$data['pembayaran_uas'] = $this->M_pembayaran_uas->tampil_perId($id)->row_array();
		$this->template->view('pembayaran_uas/edit', $data);

		if( isset($_POST['simpan']) ){
			$this->M_pembayaran_uas->edit($id);
			redirect('pembayaran_uas');
		}
	}

	public function hapus($id)
	{
		$this->M_pembayaran_uas->hapus($id);
		redirect('pembayaran_uas');
	}

	public function cetak()
	{
		$data['title']                = 'Rekap Pelunasan Pembayaran UAS';
		
		$tahun_ajaran                 = $this->M_pengaturan->tampil()->row_array();
		$data['pembayaran_uas']         = $this->M_pembayaran_uas->tampil($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['total']                = $this->M_pembayaran_uas->total($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['tahun_ajaran']         = $tahun_ajaran;
		$this->template->view('pembayaran_uas/cetak', $data);

		?>
			<script>window.print()</script>
		<?php
	}
}