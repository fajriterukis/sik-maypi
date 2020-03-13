<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sisa_dana extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->model('M_sisa_dana');
	}

	public function index()
	{
		$data['title']            = 'Sisa Dana';
		$data['sisa_dana']        = $this->M_sisa_dana->tampil()->result_array();
		$this->template->view('sisa_dana/index', $data);
	}

	public function edit($id)
	{
		$data['title']      = 'Edit';
		$data['sisa_dana'] = $this->M_sisa_dana->tampil_perId($id)->row_array();
		$this->template->view('sisa_dana/edit', $data);

		if( isset($_POST['simpan']) ){
			$this->M_sisa_dana->edit($id);
			redirect('sisa_dana');
		}
	}
}