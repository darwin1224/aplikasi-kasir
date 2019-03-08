<?php

class Datapelanggan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != true) {
            redirect('admin/login');
        } elseif ($this->session->userdata('level') == 'User') {
            redirect('pagenotfound');
        }
        $this->load->model('m_datapelanggan', 'mp');
    }
    public function index()
    {
        $this->load->view('admin/v_datapelanggan');
    }
    public function data_pelanggan()
    {
        $data = $this->mp->get_all_pelanggan();
        echo json_encode($data);
    }
    public function get_pelanggan()
    {
        $id = $this->input->post('idpelanggan');
        $data = $this->mp->get_pelanggan_by_id($id);
        echo json_encode($data);
    }
    public function tambah()
    {
        $data_pelanggan = array(
            'nama_pelanggan' => $this->input->post('namapelanggan'),
            'jenis_kelamin_pelanggan' => $this->input->post('jeniskelaminpelanggan'),
            'agama_pelanggan' => $this->input->post('agamapelanggan'),
            'alamat_pelanggan' => $this->input->post('alamatpelanggan'),
        );
        $data = $this->mp->tambah_pelanggan($data_pelanggan);
        echo json_encode($data);
    }
    public function ubah()
    {
        $data_pelanggan = array(
            'id_pelanggan' => $this->input->post('idpelanggan'),
            'nama_pelanggan' => $this->input->post('namapelanggan'),
            'jenis_kelamin_pelanggan' => $this->input->post('jeniskelaminpelanggan'),
            'agama_pelanggan' => $this->input->post('agamapelanggan'),
            'alamat_pelanggan' => $this->input->post('alamatpelanggan'),
        );
        $data = $this->mp->ubah_pelanggan($data_pelanggan);
        echo json_encode($data);
    }
    public function hapus()
    {
        $id = $this->input->post('idpelanggan3');
        $data = $this->mp->hapus_pelanggan($id);
        echo json_encode($data);
    }
}