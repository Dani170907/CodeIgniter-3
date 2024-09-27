<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

    public function index() {
        $this->load->view('templates/headerLogin');
        $this->load->view('registration');
        $this->load->view('templates/footer');
    }

    public function addUser() {
        $this->load->model('UsersModel');
		$data['users'] = $this->UsersModel->addUser();

        $this->session->set_flashdata('massage', '<h2>User Berhasil Ditambahkan</h2>');
		redirect('Login');
    }
}