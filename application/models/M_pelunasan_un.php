<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelunasan_un extends CI_Model {

	public function tampil($tahun_ajaran)
	{
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get_where('pelunasan_un', ['tahun_ajaran' => $tahun_ajaran]);
		return $query;
	}

	public function tampil_perId($id)
	{
		$query = $this->db->get_where('pelunasan_un', ['id' => $id]);
		return $query;
	}

	public function total($tahun_ajaran)
	{
		$this->db->select_sum('nominal');
		$query = $this->db->get_where('pelunasan_un', ['tahun_ajaran' => $tahun_ajaran]);
		return $query;
	}

	public function tambah()
	{
		$data = [
			'nama'         => $this->input->post('nama'),
			'kelas'        => $this->input->post('kelas'),
			'tanggal'      => $this->input->post('tanggal'),
			'nominal'      => $this->input->post('nominal'),
			'diskon'       => $this->input->post('diskon'),
			'tahun_ajaran' => $this->input->post('tahun_ajaran')
		];

		$this->db->insert('pelunasan_un', $data);
	}

	public function edit($id)
	{
		$data = [
			'nama'    => $this->input->post('nama'),
			'kelas'   => $this->input->post('kelas'),
			'tanggal' => $this->input->post('tanggal'),
			'nominal' => $this->input->post('nominal'),
			'diskon'  => $this->input->post('diskon')
		];

		$this->db->where('id', $id);
		$this->db->update('pelunasan_un', $data);
	}

	public function hapus($id)
	{
		$this->db->where_in('id', $id);
		$this->db->delete('pelunasan_un');
	}

	public function import_data($datasiswa)
    {
        $jumlah = count($datasiswa);
        if ($jumlah > 0) {
            $this->db->replace('pelunasan_un', $datasiswa);        
        }
    }
}