<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alamat_model extends CI_Model {
    public function getAlamat()
    {
        return $this->db->get('alamat')->result_array();
    }
    public function tambahAlamat()
    {
        $data =
        [
        "alamat" => $this->input->post('alamat', true),
        "kode_pos" => $this->input->post('kode_pos', true)
        ];
        $this->db->insert('alamat', $data);
    }

    public function getAddressById($id) {
        return $this->db->get_where('alamat', ['id' => $id])->row_array();
        
    }
} 