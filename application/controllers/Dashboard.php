<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function dashboard() {
        $this->load->view('v_dashboard'); // view dashboard
    } 
    public function tampil_data() {
        $this->load->view('v_tampil_data');
    }
}