<?php

class DataSupplier extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != true) {
            redirect('admin/login');
        } elseif ($this->session->userdata('level') == 'User') {
            redirect('pagenotfound');
        }
        $this->load->model('m_datasupplier');
    }
    public function index()
    {
        $this->load->view('admin/v_datasupplier');
    }
    public function data_supplier()
    {
        $data = $this->m_datasupplier->get_all_supplier();
        echo json_encode($data);
    }
    public function get_supplier()
    {
        $id = $this->input->post('idsupplier');
        $data = $this->m_datasupplier->get_supplier_by_id($id);
        echo json_encode($data);
    }
    public function tambah()
    {
        $data_supplier = array(
            'nama_supplier' => $this->input->post('namasupplier'),
            'alamat_supplier' => $this->input->post('alamatsupplier'),
            'telepon_supplier' => $this->input->post('teleponsupplier'),
            'email_supplier' => $this->input->post('emailsupplier')
        );
        $data = $this->m_datasupplier->tambah_supplier($data_supplier);
        echo json_encode($data);
    }
    public function ubah()
    {
        $data_supplier = array(
            'id_supplier' => $this->input->post('idsupplier'),
            'nama_supplier' => $this->input->post('namasupplier'),
            'alamat_supplier' => $this->input->post('alamatsupplier'),
            'telepon_supplier' => $this->input->post('teleponsupplier'),
            'email_supplier' => $this->input->post('emailsupplier')
        );
        $data = $this->m_datasupplier->ubah_supplier($data_supplier);
        echo json_encode($data);
    }
    public function hapus()
    {
        $id = $this->input->post('idsupplier');
        $data = $this->m_datasupplier->hapus_supplier($id);
        echo json_encode($data);
    }
}