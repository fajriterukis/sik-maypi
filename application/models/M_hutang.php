<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Hutang extends CI_Model {

  	public function tampil($tahun_ajaran)
  	{
  		$query = $this->db->get_where('hutang', ['tahun_ajaran' => $tahun_ajaran]);
  		return $query;
  	}

    public function tampil_perId($id)
    {
      $query = $this->db->get_where('hutang', ['id' => $id]);
      return $query;
    }

    public function tambah()
    {
      $data = [
        'peminjam' => $this->input->post('peminjam'),
        'jenis_dana' => $this->input->post('jenis_dana'),
        'tanggal' => $this->input->post('tanggal'),
        'nominal' => $this->input->post('nominal'),
        'tahun_ajaran' => $this->input->post('tahun_ajaran')
      ];

      $this->db->insert('hutang', $data);
    }

    public function edit($id)
    {
      $data = [
        'peminjam' => $this->input->post('peminjam'),
        'jenis_dana' => $this->input->post('jenis_dana'),
        'tanggal' => $this->input->post('tanggal'),
        'nominal' => $this->input->post('nominal')
      ];

      $this->db->where('id', $id);
      $this->db->update('hutang', $data);
    }

    public function hapus($id)
    {
      $this->db->delete('hutang', ['id'=>$id]);
    }

}
