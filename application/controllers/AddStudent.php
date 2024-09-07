<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddStudent extends CI_Controller {
    
	public function index()
	{
		$this->load->view('templates/headerInput');
		$this->load->view('addStudent');
	}

	public function add() {
		$this->load->model('StudentsModel');
		$data['tb_students'] = $this->StudentsModel->addStudents();

		redirect('Admin');
	}
}