<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
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

		if( isset($_POST['simpan']) ){
			$id = userLogin()['id'];
			
			$this->M_user->edit_nama($id);
			redirect('profile');
		}
	}

	public function edit_username()
	{
		$data['title'] = "Edit Username";
		$this->template->view('profile/edit_username', $data);

		if( isset($_POST['simpan']) ){
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

		if( $this->form_validation->run() == FALSE ){
			$data['title'] = "Ganti Password";
			$this->template->view('profile/ganti_password', $data);
		} else {
			$username      = userlogin()['username'];
			$user          = $this->M_user->tampil_perUsername($username)->row_array();
			$password_hash = $user['password'];
			$password_lama = $this->input->post('password_lama');
			$password_baru = password_hash($this->input->post('password_baru'), PASSWORD_DEFAULT);

			if( !password_verify($password_lama, $password_hash) ){
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
}
