<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditStudent extends CI_Controller {
    
	public function index()
	{
		$this->load->view('templates/headerInput');
		$this->load->view('editStudent');
	}

}