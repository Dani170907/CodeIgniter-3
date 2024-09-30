<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
	public function index()
	{
		$this->load->view('templates/headerLogin');
		$this->load->view('login');
		$this->load->view('templates/footer');

	}

	public function authenticate() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('users', ['username' => $username])->row_array();
		
		if ($user) {
			if (password_verify($password == $user['password'])) {
				$data = [
					'username' => $user['username']
				];
				$this->session->set_userdata($data);
				redirect('Admin');
		} else {
			$this->session->set_flashdata('massage', '<h2>Password is incorrect</h2>');
			redirect('Login');
		}
	}
	}
	
	public function logout() {
        $this->session->unset_userdata('username');
		$this->session->set_flashdata('massage', '<h1>Berhasil Logout</h1>');
        redirect('Login');
    }
}