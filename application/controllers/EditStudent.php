<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditStudent extends CI_Controller {
    
	public function index()
	{
		$this->load->view('templates/headeredit');
		$this->load->view('editStudent');
		$this->load->view('templates/footer');
	}

}