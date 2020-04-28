<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_user');
	}

	public function login()
	{
		cekLogout();
		
		$username   = $this->input->post('username');
		$password   = $this->input->post('password');
		$user       = $this->M_user->tampil_perUsername($username)->row_array();
		$user_valid = $this->M_user->tampil_perUsername($username)->num_rows();

		$this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if( $this->form_validation->run() == FALSE ){
    		$data['title'] = 'SIK-MAYPI';
			$this->load->view('auth/login', $data);
        } else {
        	if( $user_valid == 1 ){
	        	if( password_verify($password, $user['password']) ){
	        		$data = ['username' => $user['username']];

					$this->session->set_userdata($data);

		        	redirect(base_url());
		        } else {
		        	$this->session->set_flashdata('message', '
		        		<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
						  <strong>Username / Password Salah!
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>');

		        	$data['title'] = 'SIK-MAYPI';
					$this->load->view('auth/login', $data);
		        }
        	} else {
        		$this->session->set_flashdata('message', '
		        		<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
						  <strong>Anda bukan admin!
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>');
		        	
	        	$data['title'] = 'SIK-MAYPI';
				$this->load->view('auth/login', $data);
        	}

	    }
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		redirect('auth/login');
	}
}