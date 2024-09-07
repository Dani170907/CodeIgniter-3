<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
	public function index()
	{
		$this->load->model('StudentsModel');
		$data['tb_students'] = $this->StudentsModel->getStudents();

		$this->load->view('template/headerAdmin');
		$this->load->view('admin', $data);
		$this->load->view('template/footerAdmin');
	}

	public function hapus() 
	{
        $this->db->delete('tb_students', ['id' => $id]);
		redirect('Admin');
    }
}
