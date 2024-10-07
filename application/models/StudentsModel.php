    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class StudentsModel extends CI_Model {
        
        public function getStudents()
        {
            // Mengambil semua data dari tabel tb_students dan membuatnya menjadi array
            $this->db->select('*');
            $this->db->from('tb_students');
            $this->db->join('alamat', 'alamat.id = tb_students.id_alamat');
            return $this->db->get()->result_array();
        }   
        public function addStudent() {
            $data = 
            [
                "nis" => $this->input->get('nis', true),
                "nama" => $this->input->get('nama', true),
                "id_alamat" => $this->input->get('alamat', true),
                "tanggal_lahir" => $this->input->get('tanggal_lahir', true)
            ];
            $this->db->insert('tb_students', $data);
        }

        public function getStudentsById($id) {
            return $this->db->get_where('tb_students', ['id' => $id])->row_array();
        }

        public function deleteStudentById($id) {
            $this->db->where('tb_students', ['id' => $id]);
            $this->db->delete('tb_students');
        }

    }
