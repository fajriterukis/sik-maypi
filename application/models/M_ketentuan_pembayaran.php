<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ketentuan_pembayaran extends CI_Model {

	public function tampil($tahun_ajaran)
	{
		$query = $this->db->get_where('ketentuan_pembayaran', ['tahun_ajaran' => $tahun_ajaran]);
		return $query;
	}

	public function tampil_perId($id)
	{
		$query = $this->db->get_where('ketentuan_pembayaran', ['id' => $id]);
		return $query;
	}

	public function tambah($tahun_ajaran)
	{
		$data = [
			'uas'          => 0,
			'un'           => 0,
			'tahun_ajaran' => $tahun_ajaran
		];

		$this->db->insert('ketentuan_pembayaran', $data);
	}

	public function edit($id)
	{
		$data = [
			'uas' => $this->input->post('uas'),
			'un'  => $this->input->post('un')
		];

		$this->db->where('id', $id);
		$this->db->update('ketentuan_pembayaran', $data);
	}
}