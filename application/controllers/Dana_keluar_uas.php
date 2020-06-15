<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dana_keluar_uas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_dana_keluar_uas');
		$this->load->model('M_pengaturan');
	}

	public function index()
	{
		$data['title']           = 'Dana Keluar UAS';
		$tahun_ajaran            = $this->M_pengaturan->tampil()->row_array();
		$data['dana_keluar_uas'] = $this->M_dana_keluar_uas->tampil($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['total']           = $this->M_dana_keluar_uas->total($tahun_ajaran['tahun_ajaran'])->result_array();
		$this->template->view('dana_keluar_uas/index', $data);
	}

	public function tambah()
	{
		$data['title']        = 'Tambah Dana Keluar UAS';
		$data['tahun_ajaran'] = $this->M_pengaturan->tampil()->row_array();
		$this->template->view('dana_keluar_uas/tambah', $data);

		if( isset($_POST['tambah']) ){
			$this->M_dana_keluar_uas->tambah();
			redirect('dana_keluar_uas');
		}
	}

	public function edit($id)
	{
		$data['title']           = 'Edit Dana Keluar UAS';
		$data['dana_keluar_uas'] = $this->M_dana_keluar_uas->tampil_perId($id)->row_array();
		$this->template->view('dana_keluar_uas/edit', $data);

		if( isset($_POST['simpan']) ){
			$this->M_dana_keluar_uas->edit($id);
			redirect('dana_keluar_uas');
		}
	}

	public function hapus($id)
	{
		$this->M_dana_keluar_uas->hapus($id);
		redirect('dana_keluar_uas');
	}

	public function cetak()
	{
		$data['title']           = 'Rekap Dana Keluar UAS';
		
		$tahun_ajaran            = $this->M_pengaturan->tampil()->row_array();
		$data['dana_keluar_uas'] = $this->M_dana_keluar_uas->tampil($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['total']           = $this->M_dana_keluar_uas->total($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['tahun_ajaran']    = $tahun_ajaran;
		$this->template->view('dana_keluar_uas/cetak', $data);

		?>
			<script>window.print()</script>
		<?php
	}
}