<?php

class Stock extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != true) {
            redirect('admin/login');
        }
        $this->load->model('m_stock');
        $this->load->model('m_databuku');
        $this->load->model('m_datasupplier');
    }
    public function index()
    {
        $this->load->view('admin/v_stock');
    }
    public function data_stock()
    {
        $data = $this->m_stock->get_all_stock();
        echo json_encode($data);
    }
    public function data_buku()
    {
        $data = $this->m_databuku->get_all_buku();
        echo json_encode($data);
    }
    public function data_supplier()
    {
        $data = $this->m_datasupplier->get_all_supplier();
        echo json_encode($data);
    }
    public function get_buku()
    {
        $id = $this->input->post('idbuku');
        $data = $this->m_databuku->get_buku_by_id($id);
        echo json_encode($data);
    }
    public function tambah()
    {
        $data_stock = array(
            'tanggal_stock' => $this->input->post('tanggalstock'),
            'id_buku' => $this->input->post('idbuku'),
            // 'nama_buku' => $this->input->post('namabuku'),
            'detail_stock' => $this->input->post('detailstock'),
            'id_supplier' => $this->input->post('idsupplier'),
            'jumlah_stock' => $this->input->post('jumlahstock')
        );
        $data = $this->m_stock->tambah_stock($data_stock);
        echo json_encode($data);
    }
}