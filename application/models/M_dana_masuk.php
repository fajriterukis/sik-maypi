<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dana_masuk extends CI_Model {

	public function tampil($tahun_ajaran)
	{
		$query = $this->db->get_where('dana_masuk', ['tahun_ajaran' => $tahun_ajaran]);
		return $query;
	}

	public function tampil_perId($id)
	{
		$query = $this->db->get_where('dana_masuk', ['id' => $id]);
		return $query;
	}

	public function total($tahun_ajaran)
	{
		$this->db->select_sum('nominal');
		$query = $this->db->get_where('dana_masuk', ['tahun_ajaran' => $tahun_ajaran]);
		return $query;
	}

	public function jumlah_infaq($tahun_ajaran)
	{
		$this->db->select_sum('nominal');
		$query = $this->db->get_where('dana_masuk', ['tahun_ajaran' => $tahun_ajaran, 'jenis_dana' => 'Infaq']);
		return $query;
	}

	public function jumlah_uang_denda($tahun_ajaran)
	{
		$this->db->select_sum('nominal');
		$query = $this->db->get_where('dana_masuk', ['tahun_ajaran' => $tahun_ajaran, 'jenis_dana' => 'Denda']);
		return $query;
	}

	public function tambah()
	{
		$data = [
			'jenis_dana'    => $this->input->post('jenis_dana'),
			'tanggal_masuk' => $this->input->post('tanggal_masuk'),
			'nominal'       => $this->input->post('nominal'),
			'tahun_ajaran'  => $this->input->post('tahun_ajaran')
		];

		$this->db->insert('dana_masuk', $data);
	}

	public function edit($id)
	{
		$data = [
			'jenis_dana'    => $this->input->post('jenis_dana'),
			'tanggal_masuk' => $this->input->post('tanggal_masuk'),
			'nominal'       => $this->input->post('nominal')
		];

		$this->db->where('id', $id);
		$this->db->update('dana_masuk', $data); 
	}

	public function hapus($id)
	{
		$this->db->delete('dana_masuk', ['id' => $id]);
	}
}