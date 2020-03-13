<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dana_keluar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->model('M_dana_keluar');
		$this->load->model('M_pengaturan');
		$this->load->model('M_sisa_dana');
	}

	public function index()
	{
		$data['title']       = 'Dana Keluar';
		$tahun_ajaran        = $this->M_pengaturan->tampil()->row_array();
		$data['dana_keluar'] = $this->M_dana_keluar->tampil($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['total']       = $this->M_dana_keluar->total($tahun_ajaran['tahun_ajaran'])->result_array();
		$this->template->view('dana_keluar/index', $data);
	}

	public function tambah()
	{
		$data['title']        = 'Tambah Dana Keluar';
		$data['tahun_ajaran'] = $this->M_pengaturan->tampil()->row_array();
		$this->template->view('dana_keluar/tambah', $data);

		if( isset($_POST['tambah']) ){
			$this->M_dana_keluar->tambah();
			redirect('dana_keluar');
		}
	}

	public function edit($id)
	{
		$data['title'] = 'Edit Dana Keluar';
		$data['dana_keluar'] = $this->M_dana_keluar->tampil_perId($id)->row_array();
		$this->template->view('dana_keluar/edit', $data);

		if( isset($_POST['simpan']) ){
			$this->M_dana_keluar->edit($id);
			redirect('dana_keluar');
		}
	}

	public function hapus($id)
	{
		$this->M_dana_keluar->hapus($id);
		redirect('dana_keluar');
	}

	public function cetak()
	{
		$data['title']        = 'Cetak Dana Keluar';

		$tahun_ajaran         = $this->M_pengaturan->tampil()->row_array();
		$data['dana_keluar']  = $this->M_dana_keluar->tampil($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['total']        = $this->M_dana_keluar->total($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['tahun_ajaran'] = $tahun_ajaran;
		$this->template->view('dana_keluar/cetak', $data);

		?>
			<script>window.print()</script>
		<?php
	}
}