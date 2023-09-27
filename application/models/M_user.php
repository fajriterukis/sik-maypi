<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function tampil()
    {
        $query = $this->db->get('user');
        return $query;
    }

    public function tampil_perUsername($username)
    {
        $query = $this->db->where("username = BINARY '$username'")->get('user');
        return $query;
    }

    public function edit_nama($id)
    {
        $data = [
            'nama' => $this->input->post('nama'),
        ];

        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }

    public function edit_username($id)
    {
        $data = [
            'username' => $this->input->post('username'),
        ];

        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }

    public function ganti_password($password_baru)
    {
        $data = [
            'password' => $password_baru,
        ];

        $this->db->where('username', userLogin()['username']);
        $this->db->update('user', $data);
    }

    public function editFoto($foto)
    {
        $username = userLogin()['username'];

        $data = [
            'foto' => $foto,
        ];

        $this->db->where('username', $username);
        $this->db->update('user', $data);
    }

    public function deleteFoto()
    {
        $username = userLogin()['username'];

        $data = [
            'foto' => '',
        ];

        $this->db->where('username', $username);
        $this->db->update('user', $data);
    }
}
