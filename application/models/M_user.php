<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function tampil()
	{
		$query = $this->db->get('user');
		return $query;
	}

	public function tampil_perUsername($username)
	{
		$query = $this->db->get_where('user', ['username' => $username]);
		return $query;
	}

	public function edit_nama($id)
	{
		$data = [
			'nama'     => $this->input->post('nama'),
		];

		$this->db->where('id', $id);
		$this->db->update('user', $data);
	}

	public function edit_username($id)
	{
		$data = [
			'username'     => $this->input->post('username'),
		];

		$this->db->where('id', $id);
		$this->db->update('user', $data);
	}

	public function ganti_password($password_baru)
	{
		$data = [
			'password' => $password_baru		
		];

		$this->db->where('username', userLogin()['username']);
		$this->db->update('user', $data);
	}
}
