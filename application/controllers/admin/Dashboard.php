<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != true) {
            redirect('admin/login');
        } elseif ($this->session->userdata('level') == 'User') {
            redirect('pagenotfound');
        }
        $this->load->model('m_dashboard');
    }
    public function index()
    {
        $x['data'] = $this->m_dashboard->get_all_stock();
        $this->load->view('admin/v_dashboard', $x);
    }
}