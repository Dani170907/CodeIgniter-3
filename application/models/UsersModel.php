<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersModel extends CI_Model {
    
    public function adduser() {
        $data = 
        [
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true)
        ];

        $this->db->insert('users', $data);
    }
}
?>