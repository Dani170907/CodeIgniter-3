<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentsModel extends CI_Model {
    
    public function getStudents()
    {
        // Mengambil semua data dari tabel tb_students dan membuatnya menjadi array
        return $this->db->get('tb_students')->result_array();
    }
    public function addStudents() {
        $data = 
        [
            "nis" => $this->input->get('nis', true),
            "nama" => $this->input->get('nama', true),
            "alamat" => $this->input->get('alamat', true),
            "tanggal_lahir" => $this->input->get('tanggal_lahir', true)
        ];
        $this->db->insert('tb_students', $data);
    }

    public function getStudentsById($id) {
        return $this->db->get_where('tb_students', ['id' => $id])->row_array();
    }
    // select * from tb_students where id = ''
}
