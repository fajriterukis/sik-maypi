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
}
