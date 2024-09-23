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

		$user = $this->db->get_where('user', ['username' => $username])->row_array();
	}
}
