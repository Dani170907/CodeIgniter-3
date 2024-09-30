<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersModel extends CI_Model {
    
    public function adduser() {
        $data = 
        [
            "username" => $this->input->post('username', true),
            "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            "email" => $this->input->post('email', true)
        ];

        $this->db->insert('users', $data);
    }
}
?>