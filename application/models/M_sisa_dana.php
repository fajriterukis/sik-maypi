<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sisa_dana extends CI_Model {

	public function tampil()
	{
		$query = $this->db->get('sisa_dana');
		return $query;
	}

	public function tampilPerTahun($tahun_lalu)
	{
		$query = $this->db->get_where('sisa_dana', ['tahun_ajaran' => $tahun_lalu]);
		return $query;
	}
}