<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pembayaran_siswa extends CI_Model {

	public function tampil($tahun_ajaran)
	{
		$query = $this->db->get_where('pembayaran_siswa', ['tahun_ajaran' => $tahun_ajaran]);
		return $query;
	}

	public function tampil_perId($id)
	{
		$query = $this->db->get_where('pembayaran_siswa', ['id' => $id]);
		return $query;
	}

	public function total($tahun_ajaran)
	{
		$this->db->select_sum('nominal');
		$query = $this->db->get_where('pembayaran_siswa', ['tahun_ajaran' => $tahun_ajaran]);
		return $query;
	}

	public function tambah()
	{
		$data = [
			'nama'         => $this->input->post('nama'),
			'kelas'        => $this->input->post('kelas'),
			'tanggal'      => $this->input->post('tanggal'),
			'nominal'      => $this->input->post('nominal'),
			'tahun_ajaran' => $this->input->post('tahun_ajaran')
		];

		$this->db->insert('pembayaran_siswa', $data);
	}

	public function edit($id)
	{
		$data = [
			'nama'         => $this->input->post('nama'),
			'kelas'        => $this->input->post('kelas'),
			'tanggal'      => $this->input->post('tanggal'),
			'nominal'      => $this->input->post('nominal')
		];

		$this->db->where('id', $id);
		$this->db->update('pembayaran_siswa', $data);
	}

	public function hapus($id)
	{
		$this->db->delete('pembayaran_siswa', ['id' => $id]);
	}
}