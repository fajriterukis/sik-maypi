<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_sekolah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cekLogin();
        $this->load->model('M_data_sekolah');
    }

    public function index()
    {
        $data['title']        = 'Data Sekolah';
        $data['data_sekolah'] = $this->M_data_sekolah->tampil()->row_array();
        $this->template->view('data_sekolah/index', $data);
    }

    public function edit($id)
    {
        $data['title']        = 'Edit Data Sekolah';
        $data['data_sekolah'] = $this->M_data_sekolah->tampil_perId($id)->row_array();
        $this->template->view('data_sekolah/edit', $data);

        if (isset($_POST['simpan'])) {
            $this->M_data_sekolah->edit($id);
            redirect('data_sekolah');
        }
    }
}
