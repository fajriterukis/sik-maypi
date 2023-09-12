<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cekLogin();
        $this->load->model('M_dana_masuk');
        $this->load->model('M_dana_keluar');
        $this->load->model('M_sisa_dana');
        $this->load->model('M_pelunasan_un');
        $this->load->model('M_dana_keluar_un');
        $this->load->model('M_pembayaran_uas');
        $this->load->model('M_dana_keluar_uas');
        $this->load->model('M_pengaturan');
        $this->load->model('M_ketentuan_pembayaran');
        $this->load->model('M_data_sekolah');
    }

    public function index()
    {
        $tahun_ajaran = $this->M_pengaturan->tampil()->row_array();

        $tahun_lalu = explode('/', $tahun_ajaran['tahun_ajaran']);
        $a          = $tahun_lalu['0'] - 1;
        $b          = $tahun_lalu['1'] - 1;
        $tahun_lalu = $a . "/" . $b;

        $data['sisa_dana'] = $this->M_sisa_dana->tampilPerTahun($tahun_lalu)->row_array();

        $data['total_dana_masuk']  = $this->M_dana_masuk->total($tahun_ajaran['tahun_ajaran'])->row_array();
        $data['total_dana_keluar'] = $this->M_dana_keluar->total($tahun_ajaran['tahun_ajaran'])->row_array();

        $data['total_pelunasan_un']   = $this->M_pelunasan_un->total($tahun_ajaran['tahun_ajaran'])->row_array();
        $data['total_dana_keluar_un'] = $this->M_dana_keluar_un->total($tahun_ajaran['tahun_ajaran'])->row_array();

        $data['total_pembayaran_uas']  = $this->M_pembayaran_uas->total($tahun_ajaran['tahun_ajaran'])->row_array();
        $data['total_dana_keluar_uas'] = $this->M_dana_keluar_uas->total($tahun_ajaran['tahun_ajaran'])->row_array();

        $data['tahun_ajaran'] = $tahun_ajaran;
        $this->template->view('home', $data);
    }

    public function cetak()
    {
        $data['title'] = 'Rekap Dana Keseluruhan';
        $tahun_ajaran  = $this->M_pengaturan->tampil()->row_array();

        $tahun_lalu = explode('/', $tahun_ajaran['tahun_ajaran']);
        $a          = $tahun_lalu['0'] - 1;
        $b          = $tahun_lalu['1'] - 1;
        $tahun_lalu = $a . "/" . $b;

        $data['total_dana_masuk']  = $this->M_dana_masuk->total($tahun_ajaran['tahun_ajaran'])->row_array();
        $data['total_dana_keluar'] = $this->M_dana_keluar->total($tahun_ajaran['tahun_ajaran'])->row_array();
        $data['sisa_dana']         = $this->M_sisa_dana->tampilPerTahun($tahun_lalu)->row_array();

        $data['total_pelunasan_un']   = $this->M_pelunasan_un->total($tahun_ajaran['tahun_ajaran'])->row_array();
        $data['total_dana_keluar_un'] = $this->M_dana_keluar_un->total($tahun_ajaran['tahun_ajaran'])->row_array();

        $data['total_pembayaran_uas']  = $this->M_pembayaran_uas->total($tahun_ajaran['tahun_ajaran'])->row_array();
        $data['total_dana_keluar_uas'] = $this->M_dana_keluar_uas->total($tahun_ajaran['tahun_ajaran'])->row_array();

        $data['data_sekolah'] = $this->M_data_sekolah->tampil()->row_array();

        $data['tahun_ajaran'] = $tahun_ajaran;
        $this->template->print('cetak_home', $data);
    }

    public function simpan()
    {
        $tahun_ajaran = $this->M_pengaturan->tampil()->row_array();

        $tahun_lalu = explode('/', $tahun_ajaran['tahun_ajaran']);
        $a          = $tahun_lalu['0'] - 1;
        $b          = $tahun_lalu['1'] - 1;
        $tahun_lalu = $a . "/" . $b;

        $sisa_dana = $this->M_sisa_dana->tampilPerTahun($tahun_lalu)->row_array();

        $total_dana_masuk  = $this->M_dana_masuk->total($tahun_ajaran['tahun_ajaran'])->row_array()['nominal'];
        $total_dana_keluar = $this->M_dana_keluar->total($tahun_ajaran['tahun_ajaran'])->row_array()['uang_keluar'];

        $total_pelunasan_un   = $this->M_pelunasan_un->total($tahun_ajaran['tahun_ajaran'])->row_array()['nominal'];
        $total_dana_keluar_un = $this->M_dana_keluar_un->total($tahun_ajaran['tahun_ajaran'])->row_array()['uang_keluar'];

        $total_pembayaran_uas  = $this->M_pembayaran_uas->total($tahun_ajaran['tahun_ajaran'])->row_array()['nominal'];
        $total_dana_keluar_uas = $this->M_dana_keluar_uas->total($tahun_ajaran['tahun_ajaran'])->row_array()['uang_keluar'];

        $sisa_denda_infaq = ($total_dana_masuk + $sisa_dana['denda_infaq']) - ($total_dana_keluar + total_hutang('Infaq_Denda'));
        $sisa_dana_un     = ($total_pelunasan_un + $sisa_dana['un']) - ($total_dana_keluar_un + total_hutang('UN'));
        $sisa_dana_uas    = ($total_pembayaran_uas + $sisa_dana['uas']) - ($total_dana_keluar_uas + total_hutang('UAS'));

        $query = $this->db->get_where('sisa_dana', ['tahun_ajaran' => $tahun_ajaran['tahun_ajaran']])->num_rows();

        if ($query == 1) {
            $data = [
                'denda_infaq' => $sisa_denda_infaq,
                'un'          => $sisa_dana_un,
                'uas'         => $sisa_dana_uas,
            ];

            $this->db->where('tahun_ajaran', $tahun_ajaran['tahun_ajaran']);
            $this->db->update('sisa_dana', $data);
        } else {
            $data = [
                'denda_infaq'  => $sisa_denda_infaq,
                'un'           => $sisa_dana_un,
                'uas'          => $sisa_dana_uas,
                'tahun_ajaran' => $tahun_ajaran['tahun_ajaran'],
            ];

            $this->db->insert('sisa_dana', $data);

            $tahun_depan = explode('/', $tahun_ajaran['tahun_ajaran']);
            $a           = $tahun_depan['0'] + 1;
            $b           = $tahun_depan['1'] + 1;
            $tahun_depan = $a . "/" . $b;

            $this->M_ketentuan_pembayaran->tambah($tahun_depan);
        }

        redirect('sisa_dana');
    }
}
