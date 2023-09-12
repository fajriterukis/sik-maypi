<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sisa_dana extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cekLogin();
        $this->load->model('M_sisa_dana');
    }

    public function index()
    {
        $data['title']     = 'Sisa Dana';
        $data['sisa_dana'] = $this->M_sisa_dana->tampil()->result_array();
        $this->template->view('sisa_dana/index', $data);
    }
}
