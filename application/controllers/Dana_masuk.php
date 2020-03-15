<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dana_masuk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->model('M_dana_masuk');
		$this->load->model('M_pengaturan');
	}

	public function index()
	{
		$data['title']             = 'Dana Masuk';
		$tahun_ajaran              = $this->M_pengaturan->tampil()->row_array();
		$data['dana_masuk']        = $this->M_dana_masuk->tampil($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['total']             = $this->M_dana_masuk->total($tahun_ajaran['tahun_ajaran'])->row_array();
		$data['jumlah_infaq']      = $this->M_dana_masuk->jumlah_infaq($tahun_ajaran['tahun_ajaran'])->row_array();
		$data['jumlah_uang_denda'] = $this->M_dana_masuk->jumlah_uang_denda($tahun_ajaran['tahun_ajaran'])->row_array();
		$this->template->view('dana_masuk/index', $data);
	}

	public function tambah()
	{
		$data['title']        = 'Tambah Dana Masuk';
		$data['tahun_ajaran'] = $this->M_pengaturan->tampil()->row_array();
		$this->template->view('dana_masuk/tambah', $data);

		if( isset($_POST['tambah']) ){
			$this->M_dana_masuk->tambah();
			redirect('dana_masuk');
		}
	}

	public function edit($id)
	{
		$data['title'] = 'Edit Dana Masuk';
		$data['dana_masuk'] = $this->M_dana_masuk->tampil_perId($id)->row_array();
		$this->template->view('dana_masuk/edit', $data);

		if( isset($_POST['simpan']) ){
			$this->M_dana_masuk->edit($id);
			redirect('dana_masuk');
		}
	}

	public function hapus($id)
	{
		$this->M_dana_masuk->hapus($id);
		redirect('dana_masuk');
	}

	public function cetak()
	{
		$data['title'] = 'Rekap Dana Masuk';
		
		$tahun_ajaran              = $this->M_pengaturan->tampil()->row_array();
		$data['dana_masuk']        = $this->M_dana_masuk->tampil($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['total']             = $this->M_dana_masuk->total($tahun_ajaran['tahun_ajaran'])->row_array();
		$data['jumlah_infaq']      = $this->M_dana_masuk->jumlah_infaq($tahun_ajaran['tahun_ajaran'])->row_array();
		$data['jumlah_uang_denda'] = $this->M_dana_masuk->jumlah_uang_denda($tahun_ajaran['tahun_ajaran'])->row_array();
		$data['tahun_ajaran']      = $tahun_ajaran;

		$this->template->view('dana_masuk/cetak', $data);
		
		?>
			<script>window.print()</script>
		<?php
	}
}