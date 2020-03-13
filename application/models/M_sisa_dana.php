<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sisa_dana extends CI_Model {

	public function tampil()
	{
		$query = $this->db->get('sisa_dana');
		return $query;
	}

	public function tampil_perId($id)
	{
		$query = $this->db->get_where('sisa_dana', ['id' => $id]);
		return $query;
	}

	public function edit($id)
	{
		
		$data = [
			'jumlah' => $this->input->post('jumlah')
		];

		$this->db->where('id', $id);
		$this->db->update('sisa_dana', $data);
	}
}