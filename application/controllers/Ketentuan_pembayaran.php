<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ketentuan_pembayaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->model('M_pengaturan');
		$this->load->model('M_ketentuan_pembayaran');
	}

	public function index()
	{
		$data['title']                = 'Ketentuan Pembayaran';
		$tahun_ajaran                 = $this->M_pengaturan->tampil()->row_array();
		$data['ketentuan_pembayaran'] = $this->M_ketentuan_pembayaran->tampil($tahun_ajaran['tahun_ajaran'])->result_array();
		$this->template->view('ketentuan_pembayaran/index', $data);
	}

	public function edit($id)
	{
		$data['title']                = 'Edit Ketentuan Pembayaran';
		$data['ketentuan_pembayaran'] = $this->M_ketentuan_pembayaran->tampil_perId($id)->row_array();
		$this->template->view('ketentuan_pembayaran/edit', $data);

		if( isset($_POST['simpan']) ){
			$this->M_ketentuan_pembayaran->edit($id);
			redirect('ketentuan_pembayaran');
		}
	}
}
