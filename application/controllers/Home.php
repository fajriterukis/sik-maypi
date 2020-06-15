<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->model('M_dana_masuk');
		$this->load->model('M_dana_keluar');
		$this->load->model('M_sisa_dana');
		$this->load->model('M_pelunasan_un');
		$this->load->model('M_dana_keluar_un');
		$this->load->model('M_pembayaran_siswa');
		$this->load->model('M_dana_keluar_uas');
		$this->load->model('M_pengaturan');
	}

	public function index()
	{
		$tahun_ajaran                   = $this->M_pengaturan->tampil()->row_array();
		$data['total_dana_masuk']       = $this->M_dana_masuk->total($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['total_dana_keluar']      = $this->M_dana_keluar->total($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['sisa_dana']              = $this->M_sisa_dana->tampil()->row_array();

		$data['total_pelunasan_un']     = $this->M_pelunasan_un->total($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['total_dana_keluar_un']   = $this->M_dana_keluar_un->total($tahun_ajaran['tahun_ajaran'])->row_array();

		$data['total_pembayaran_siswa'] = $this->M_pembayaran_siswa->total($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['total_dana_keluar_uas'] = $this->M_dana_keluar_uas->total($tahun_ajaran['tahun_ajaran'])->row_array();

		$data['tahun_ajaran']           = $this->M_pengaturan->tampil()->row_array();
		$this->template->view('home', $data);
	}
}
