<?php

class Satuan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != true) {
            redirect('admin/login');
        }
        $this->load->model('m_satuan');
    }
    public function index()
    {
        $this->load->view('admin/v_satuan');
    }
    public function data_satuan()
    {
        $data = $this->m_satuan->get_all_satuan();
        echo json_encode($data);
    }
    public function get_satuan()
    {
        $id = $this->input->post('idsatuan');
        $data = $this->m_satuan->get_satuan_by_id($id);
        echo json_encode($data);
    }
    public function tambah()
    {
        $data_satuan = array(
            'nama_satuan' => $this->input->post('namasatuan')
        );
        $data = $this->m_satuan->tambah_satuan($data_satuan);
        echo json_encode($data);
    }
    public function ubah()
    {
        $data_satuan = array(
            'id_satuan' => $this->input->post('idsatuan'),
            'nama_satuan' => $this->input->post('namasatuan')
        );
        $data = $this->m_satuan->ubah_satuan($data_satuan);
        echo json_encode($data);
    }
    public function hapus()
    {
        $id = $this->input->post('idsatuan');
        $data = $this->m_satuan->hapus_satuan($id);
        echo json_encode($data);
    }
}