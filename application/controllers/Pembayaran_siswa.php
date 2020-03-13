<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_siswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->model('M_pembayaran_siswa');
		$this->load->model('M_pengaturan');
	}

	public function index()
	{
		$data['title']            = 'Pembayaran Siswa';
		$tahun_ajaran             = $this->M_pengaturan->tampil()->row_array();
		$data['pembayaran_siswa'] = $this->M_pembayaran_siswa->tampil($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['total']            = $this->M_pembayaran_siswa->total($tahun_ajaran['tahun_ajaran'])->result_array();
		$this->template->view('pembayaran_siswa/index', $data);
	}

	public function tambah()
	{
		$data['title']        = 'Tambah Pembayaran Siswa';
		$data['tahun_ajaran'] = $this->M_pengaturan->tampil()->row_array();
		$this->template->view('pembayaran_siswa/tambah', $data);

		if( isset($_POST['tambah']) ){
			var_dump($this->input->post('tanggal'));
			// $this->M_pembayaran_siswa->tambah();
			// redirect('pembayaran_siswa');
		}
	}

	public function edit($id)
	{
		$data['title']        = 'Edit Pembayaran Siswa';
		$data['pembayaran_siswa'] = $this->M_pembayaran_siswa->tampil_perId($id)->row_array();
		$this->template->view('pembayaran_siswa/edit', $data);

		if( isset($_POST['simpan']) ){
			$this->M_pembayaran_siswa->edit($id);
			redirect('pembayaran_siswa');
		}
	}

	public function hapus($id)
	{
		$this->M_pembayaran_siswa->hapus($id);
		redirect('pembayaran_siswa');
	}
}