<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dana_keluar_un extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->model('M_dana_keluar_un');
		$this->load->model('M_pengaturan');
	}

	public function index()
	{
		$data['title']          = 'Dana Keluar UN';
		$tahun_ajaran           = $this->M_pengaturan->tampil()->row_array();
		$data['dana_keluar_un'] = $this->M_dana_keluar_un->tampil($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['total']          = $this->M_dana_keluar_un->total($tahun_ajaran['tahun_ajaran'])->result_array();
		$this->template->view('dana_keluar_un/index', $data);
	}

	public function tambah()
	{
		$data['title']        = 'Tambah Dana Keluar UN';
		$data['tahun_ajaran'] = $this->M_pengaturan->tampil()->row_array();
		$this->template->view('dana_keluar_un/tambah', $data);

		if( isset($_POST['tambah']) ){
			$this->M_dana_keluar_un->tambah();
			redirect('dana_keluar_un');
		}
	}

	public function edit($id)
	{
		$data['title'] = 'Edit Dana Keluar UN';
		$data['dana_keluar_un'] = $this->M_dana_keluar_un->tampil_perId($id)->row_array();
		$this->template->view('dana_keluar_un/edit',$data);

		if( isset($_POST['simpan']) ){
			$this->M_dana_keluar_un->edit($id);
			redirect('dana_keluar_un');
		}
	}

	public function hapus($id)
	{
		$this->M_dana_keluar_un->hapus($id);
		redirect('dana_keluar_un');
	}

	public function cetak()
	{
		$data['title']          = 'Rekap Dana Keluar UN';
		
		$tahun_ajaran           = $this->M_pengaturan->tampil()->row_array();
		$data['dana_keluar_un'] = $this->M_dana_keluar_un->tampil($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['total']          = $this->M_dana_keluar_un->total($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['tahun_ajaran']   =$tahun_ajaran;
		$this->template->print('dana_keluar_un/cetak', $data);
	}
}