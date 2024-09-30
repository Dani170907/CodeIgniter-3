<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddStudent extends CI_Controller {
    
	public function index()
	{
		$data['alamat'] = $this->db->get('alamat')->result_array();


		$this->load->view('templates/headerInput');
		$this->load->view('addStudent', $data);
	}

	public function add() {
		$this->load->model('StudentsModel');
		$data['tb_students'] = $this->StudentsModel->addStudent();

		redirect('Admin');
	}
}