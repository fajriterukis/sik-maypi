<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cekLogin();
        $this->load->library('form_validation');
        $this->load->model('M_user');
    }

    public function index()
    {
        $data['title'] = "Profile";
        $this->template->view('profile/index', $data);
    }

    public function edit_nama()
    {
        $data['title'] = "Edit Nama";
        $this->template->view('profile/edit_nama', $data);

        if (isset($_POST['simpan'])) {
            if ($this->input->post('nama') !== userLogin()['nama']) {
                $this->session->set_flashdata('message', 'Nama telah diperbarui');
            }

            $id = userLogin()['id'];

            $this->M_user->edit_nama($id);
            redirect('profile');
        }
    }

    public function edit_username()
    {
        $data['title'] = "Edit Username";
        $this->template->view('profile/edit_username', $data);

        if (isset($_POST['simpan'])) {
            $id = userLogin()['id'];

            $this->M_user->edit_username($id);
            redirect('auth/logout');
        }
    }

    public function ganti_password()
    {
        $this->form_validation->set_rules('password_baru', 'Password', 'required');
        $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password_baru]');

        $this->form_validation->set_message('matches', '%s harus sama dengan Password Baru');

        $this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Ganti Password";
            $this->template->view('profile/ganti_password', $data);
        } else {
            $username      = userlogin()['username'];
            $user          = $this->M_user->tampil_perUsername($username)->row_array();
            $password_hash = $user['password'];
            $password_lama = $this->input->post('password_lama');
            $password_baru = password_hash($this->input->post('password_baru'), PASSWORD_DEFAULT);

            if (!password_verify($password_lama, $password_hash)) {
                $this->session->set_flashdata('message', 'Password lama salah');
                $data['title'] = "Ganti Password";
                $this->template->view('profile/ganti_password', $data);
            } else {
                $this->M_user->ganti_password($password_baru);

                $this->session->set_flashdata('message', 'Password telah diganti');
                redirect('profile');
            }
        }
    }

    public function ubah_foto()
    {
        $data['title'] = "Ubah Foto";
        $this->template->view('profile/ubah_foto', $data);

        if (isset($_POST['simpan'])) {
            $username = userLogin()['username'];
            $user     = $this->M_user->tampil_perUsername($username)->row_array();
            $namaFoto = $this->input->post('namaFoto');
            $foto     = $_FILES['foto']['name'];
            $fotoLama = $user['foto'];

            if ($foto) {
                if ($fotoLama) {
                    unlink("assets/upload/profile/" . $fotoLama);
                    unlink("assets/upload/profile/thumbnails/" . $fotoLama);
                }

                $foto = $this->_do_upload();
                $this->session->set_flashdata('message', 'Foto telah diperbarui');
                $this->M_user->editFoto($foto);
            } else {
                $this->M_user->editFoto($namaFoto);
            }

            redirect('profile');
        }
    }

    public function hapus_foto()
    {
        $username = userLogin()['username'];
        $user     = $this->M_user->tampil_perUsername($username)->row_array();
        $fotoLama = $user['foto'];

        if ($fotoLama) {
            unlink("assets/upload/profile/" . $fotoLama);
            unlink("assets/upload/profile/thumbnails/" . $fotoLama);

            $this->session->set_flashdata('message', 'Foto telah dihapus');
            $this->M_user->deleteFoto();
        }

        redirect('profile');
    }

    private function _do_upload()
    {
        $config['upload_path']   = './assets/upload/profile/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['encrypt_name']  = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $error = ['error' => $this->upload->display_errors()];
            print_r($error);
        } else {
            $this->load->library('image_lib', $config);

            $filename                = $this->upload->data('file_name');
            $config['image_library'] = 'gd2';
            $config['source_image']  = $config['upload_path'] . $filename;

            $imageSize = getimagesize($config['source_image']);
            $width     = $imageSize[0];
            $height    = $imageSize[1];
            $newSize   = min($width, $height);

            $config['new_image']      = './assets/upload/profile/thumbnails/';
            $config['maintain_ratio'] = false;
            $config['create_thumb']   = true;
            $config['thumb_marker']   = false;
            $config['quality']        = '100%';
            $config['width']          = $newSize;
            $config['height']         = $newSize;

            $this->image_lib->initialize($config);
            $this->image_lib->crop();

            return $filename;
        }
    }
}
