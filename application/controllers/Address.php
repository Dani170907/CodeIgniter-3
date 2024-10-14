<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Alamat extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $this->load->model('StudentModel');
        $data['alamat'] = $this->alamat_model->getAlamat();
        $this->load->view('templete/header');
        $this->load->view('templete/menu');
        $this->load->view('alamat', $data);
        $this->load->view('templete/footer');
    }

    public function hapus($id) {
        $this->db->delete('alamat', ['id' => $id]);
        redirect('alamat');
    }
    
    public function addAddress()
    {
        $this->load->view('templete/header');
        $this->load->view('templete/menu');
        $this->load->view('addAddress');
        $this->load->view('templete/footer');
    }

    public function simpan()
    {
        $this->load->model('AddressModel');
        $data['alamat'] = $this->alamat_model->addAddress();
        redirect('Address');
    }

    public function edit($id) {
        $this->load->model('AddressModel');
        $data['edit'] = $this->StudentsModel->getAlamatById($id);


        $this->load->view('templates/headerInput');
        $this->load->view('editAddress', $data);
        $this->load->view('templates/footer');
    }

    public function update() {
        $data = [
            "alamat" => $this->input->post('alamat', true),
            "kode_pos" => $this->input->post('kode_pos', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('alamat', $data);
        redirect('Address');
    }
}