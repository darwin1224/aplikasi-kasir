<?php

class Settings extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != true) {
            redirect('admin/login');
        } elseif ($this->session->userdata('level') == 'User') {
            redirect('pagenotfound');
        }
        $this->load->model('m_settings');
    }
    public function index()
    {
        $this->load->view('admin/v_settings');
    }
    public function data_settings()
    {
        $data = $this->m_settings->get_all_settings();
        echo json_encode($data);
    }
    public function ubah()
    {
        $data_settings = array(
            'id_settings' => $this->input->post('idsettings'),
            'nama_settings' => $this->input->post('namasettings'),
            'alamat_settings' => $this->input->post('alamatsettings'),
            'telepon_settings' => $this->input->post('teleponsettings'),
            'email_settings' => $this->input->post('emailsettings'),
            'keterangan_settings' => $this->input->post('keterangansettings')
        );
        $data = $this->m_settings->ubah_settings($data_settings);
        echo json_encode($data);
    }
}