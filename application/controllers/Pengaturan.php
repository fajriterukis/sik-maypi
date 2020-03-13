<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->model('M_pengaturan');
	}

	public function index()
	{
		$data['title']      = 'Pengaturan';
		$data['pengaturan'] = $this->M_pengaturan->tampil()->result_array();
		$this->template->view('pengaturan/index', $data);
	}

	public function edit($id)
	{
		$data['title']      = 'Edit';
		$data['pengaturan'] = $this->M_pengaturan->tampil()->row_array();
		$this->template->view('pengaturan/edit', $data);

		if( isset($_POST['simpan']) ){
			$this->M_pengaturan->edit($id);
			redirect('pengaturan');
		}
	}
}