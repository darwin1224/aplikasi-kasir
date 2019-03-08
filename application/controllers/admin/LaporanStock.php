<?php

class LaporanStock extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != true) {
            redirect('admin/login');
        } elseif ($this->session->userdata('level') == 'User') {
            redirect('pagenotfound');
        }
        $this->load->model('m_stock');
    }
    public function index()
    {
        $this->load->view('admin/v_laporanstock');
    }
    public function laporan_stock()
    {
        $data = $this->m_stock->get_all_stock_with_supplier();
        echo json_encode($data);
    }
}