<?php

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != true) {
            redirect('admin/login');
        }
        $this->load->model('m_kategori');
    }
    public function index()
    {
        $this->load->view('admin/v_kategori');
    }
    public function data_kategori()
    {
        $data = $this->m_kategori->get_all_kategori();
        echo json_encode($data);
    }
    public function get_kategori()
    {
        $id = $this->input->post('idkategori');
        $data = $this->m_kategori->get_kategori_by_id($id);
        echo json_encode($data);
    }
    public function tambah()
    {
        $data_kategori = array(
            'nama_kategori' => $this->input->post('namakategori')
        );
        $data = $this->m_kategori->tambah_kategori($data_kategori);
        echo json_encode($data);
    }
    public function ubah()
    {
        $data_kategori = array(
            'id_kategori' => $this->input->post('idkategori'),
            'nama_kategori' => $this->input->post('namakategori')
        );
        $data = $this->m_kategori->ubah_kategori($data_kategori);
        echo json_encode($data);
    }
    public function hapus()
    {
        $id = $this->input->post('idkategori');
        $data = $this->m_kategori->hapus_kategori($id);
        echo json_encode($data);
    }
}