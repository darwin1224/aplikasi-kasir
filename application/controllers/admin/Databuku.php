<?php

class Databuku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != true) {
            redirect('admin/login');
        }
        $this->load->model('m_databuku');
    }
    public function index()
    {
        $this->load->view('admin/v_databuku');
    }
    public function data_buku()
    {
        $data = $this->m_databuku->get_all_buku();
        echo json_encode($data);
        // $no = 1;
        // $data = array();
        // foreach ($data->result_array() as $row) {
        //     $tbody = array();
        //     $tbody[] = $no++;
        //     $tbody[] = $row['nama_buku'];
        //     $tbody[] = $row['jenis_buku'];
        //     $tbody[] = $row['harga_buku'];
        //     $tbody[] = $row['tgl_masuk_buku'];
        //     $aksi = '<a class="btn item-ubah" data-toggle="modal" data-id="' . $row['id_buku'] . '"><span class="fa fa-pencil"></span></a><a class="btn item-hapus" data-toggle="modal" data-id="' . $row['id_buku'] . '"><span class="fa fa-trash"></span></a>';
        //     $tbody[] = $aksi;
        //     $data[] = $tbody;
        // }
        // if ($data_buku) {
        //     echo json_encode(array('data' => $data));
        // } else {
        //     echo json_encode(array('data' => 0));
        // }
    }
    public function get_buku()
    {
        $id = $this->input->post('idbuku');
        $data = $this->m_databuku->get_buku_by_id($id);
        echo json_encode($data);
    }
    public function tambah()
    {
        $config = array(
            array(
                'field' => 'namabuku',
                'label' => 'Namabuku',
                'rules' => 'required|max_length[50]'
            ),
            array(
                'field' => 'jenisbuku',
                'label' => 'Jenisbuku',
                'rules' => 'required|max_length[50]'
            ),
            array(
                'field' => 'hargabuku',
                'label' => 'Hargabuku',
                'rules' => 'required|max_length[50]'
            ),
            array(
                'field' => 'tglmasukbuku',
                'label' => 'Tglmasukbuku',
                'rules' => 'required|max_length[50]'
            ),
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() === true) {
            $data_buku = array(
                'nama_buku' => $this->input->post('namabuku'),
                'jenis_buku' => $this->input->post('jenisbuku'),
                'harga_buku' => $this->input->post('hargabuku'),
                'tgl_masuk_buku' => $this->input->post('tglmasukbuku')
            );
            $data = $this->m_databuku->tambah_buku($data_buku);
            echo json_encode($data);
        } else {
            $this->load->view('v_databuku');
        }
    }
    public function ubah()
    {
        $config = array(
            array(
                'field' => 'idbuku',
                'label' => 'IDbuku',
                'rules' => 'required|max_length[50]'
            ),
            array(
                'field' => 'namabuku',
                'label' => 'Namabuku',
                'rules' => 'required|max_length[50]'
            ),
            array(
                'field' => 'jenisbuku',
                'label' => 'Jenisbuku',
                'rules' => 'required|max_length[50]'
            ),
            array(
                'field' => 'hargabuku',
                'label' => 'Hargabuku',
                'rules' => 'required|max_length[50]'
            ),
            array(
                'field' => 'tglmasukbuku',
                'label' => 'Tglmasukbuku',
                'rules' => 'required|max_length[50]'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() === true) {
            $data_buku = array(
                'id_buku' => $this->input->post('idbuku'),
                'nama_buku' => $this->input->post('namabuku'),
                'jenis_buku' => $this->input->post('jenisbuku'),
                'harga_buku' => $this->input->post('hargabuku'),
                'tgl_masuk_buku' => $this->input->post('tglmasukbuku')
            );
            $data = $this->m_databuku->ubah_buku($data_buku);
            echo json_encode($data);
        } else {
            $this->load->view('v_databuku');
        }
    }
    public function hapus()
    {
        $id = $this->input->post('idbuku3');
        $data = $this->m_databuku->hapus_buku($id);
        echo json_encode($data);
    }
}