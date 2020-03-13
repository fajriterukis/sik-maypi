<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengaturan extends CI_Model {

	public function tampil()
	{
		$query = $this->db->get('pengaturan');
		return $query;
	}

	public function tampil_perId($id)
	{
		$query = $this->db->get_where('pengaturan', ['id' => $id]);
		return $query;
	}

	public function edit($id)
	{
		$data = [
			'tahun_ajaran' => $this->input->post('tahun_ajaran')
		];

		$this->db->where('id', $id);
		$this->db->update('pengaturan', $data);
	}

}