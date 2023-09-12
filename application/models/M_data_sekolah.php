<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_data_sekolah extends CI_Model
{
    public function tampil()
    {
        $query = $this->db->get('data_sekolah');
        return $query;
    }

    public function tampil_perId($id)
    {
        $query = $this->db->get_where('data_sekolah', ['id' => $id]);
        return $query;
    }

    public function edit($id)
    {
        $data = [
            'nama_kepsek'    => $this->input->post('nama_kepsek'),
            'nip_kepsek'     => $this->input->post('nip_kepsek'),
            'alamat_sekolah' => $this->input->post('alamat_sekolah'),
        ];

        $this->db->where('id', $id);
        $this->db->update('data_sekolah', $data);
    }

}
