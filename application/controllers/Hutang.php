<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hutang extends CI_Controller {
    public function __construct()
    {
      parent::__construct();
      cekLogin();
      $this->load->model('M_hutang');
      $this->load->model('M_pengaturan');
    }

    public function index()
    {
      $data['title']           = 'Hutang';
      $tahun_ajaran            = $this->M_pengaturan->tampil()->row_array();
      $data['hutang'] = $this->M_hutang->tampil($tahun_ajaran['tahun_ajaran'])->result_array();
      $this->template->view('hutang/index', $data);
    }

    public function tambah()
    {
      $data['title']           = 'Tambah Data hutang';
      $data['tahun_ajaran'] = $this->M_pengaturan->tampil()->row_array();
      $this->template->view('hutang/tambah', $data);

      if( isset($_POST['tambah']) ){
        $this->M_hutang->tambah();
        redirect('hutang');
      }
    }

    public function edit($id)
    {
      $data['title']           = 'Edit Data hutang';
      $data['hutang'] = $this->M_hutang->tampil_perId($id)->row_array();
      $this->template->view('hutang/edit', $data);

      if( isset($_POST['simpan']) ){
        $this->M_hutang->edit($id);
        redirect('hutang');
      }
    }

    public function hapus($id)
    {
      $this->M_hutang->hapus($id);
      redirect('hutang');
    }

}
