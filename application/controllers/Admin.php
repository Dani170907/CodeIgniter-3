<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		is_logged_in();

	}
    
	public function index()
	{
		$this->load->model('StudentsModel');
		$data['tb_students'] = $this->StudentsModel->getStudents();

		$this->load->view('templates/headerAdmin');
		$this->load->view('templates/navbar');
		$this->load->view('admin', $data);
		$this->load->view('templates/footer');
	}

	public function delete($id) 
	{
		$this->db->delete('tb_students', ['id' => $id]);
		redirect('Admin');
    }

	public function edit($id) 
	{
		$this->load->model('StudentsModel');
		$data['edit'] = $this->StudentsModel->getStudentsById($id);
		$data['alamat'] = $this->db->get('alamat')->result_array();

		$this->load->view('templates/headerInput');
		$this->load->view('editStudent', $data);
		$this->load->view('templates/footer');
	}

	public function update() 
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"status" => $this->input->post('status', true),
			"id_alamat" => $this->input->post('alamat', true),
			"tanggal_lahir" => $this->input->post('tanggal_lahir', true)
		];
	
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tb_students', $data);
		redirect('Admin');
	}
	
}
