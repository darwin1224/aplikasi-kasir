<?php

class Datapengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != true) {
            redirect('admin/login');
        } elseif ($this->session->userdata('level') == 'User') {
            redirect('pagenotfound');
        }
        $this->load->model('m_datapengguna', 'md');
        $this->load->library('upload');
    }
    public function index()
    {
        $this->load->view('admin/v_datapengguna');
    }
    public function data_pengguna()
    {
        $data = $this->md->get_all_pengguna();
        echo json_encode($data);
    }
    public function get_pengguna()
    {
        $id = $this->input->post('idpengguna');
        $data = $this->md->get_pengguna_by_id($id);
        echo json_encode($data);
    }
    public function tambah()
    {
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'jpg|png|bmp|gif|jpeg';
        $config['encrypt_name'] = true;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('gambarpengguna')) {
            $gbr = $this->upload->data();

            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/images/' . $gbr['file_name'];
            $config['create_thumb'] = false;
            $config['maintain_ratio'] = false;
            $config['quality'] = '60%';
            $config['width'] = 160;
            $config['height'] = 160;
            $config['new_image'] = './assets/images/' . $gbr['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            $data_pengguna = array(
                'nama_pengguna' => $this->input->post('namapengguna'),
                'email_pengguna' => $this->input->post('emailpengguna'),
                'jenis_kelamin_pengguna' => $this->input->post('jeniskelaminpengguna'),
                'alamat_pengguna' => $this->input->post('alamatpengguna'),
                'username' => $this->input->post('usernamepengguna'),
                'password' => md5($this->input->post('passwordpengguna')),
                'gambar_pengguna' => $gbr['file_name']
            // 'level_pengguna' => $this->input->post('levelpengguna'),
            );
            $data = $this->md->tambah_pengguna($data_pengguna);
            echo json_encode($data);
        }
    }
    public function ubah()
    {
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'jpg|png|bmp|gif|jpeg';
        $config['encrypt_name'] = true;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('gambarpengguna')) {
            $gbr = $this->upload->data();

            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/images/' . $gbr['file_name'];
            $config['create_thumb'] = false;
            $config['maintain_ratio'] = false;
            $config['quality'] = '60%';
            $config['width'] = 160;
            $config['height'] = 160;
            $config['new_image'] = 'assets/images/' . $gbr['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            $data_pengguna = array(
                'id_pengguna' => $this->input->post('idpengguna'),
                'nama_pengguna' => $this->input->post('namapengguna'),
                'email_pengguna' => $this->input->post('emailpengguna'),
                'username' => $this->input->post('usernamepengguna'),
                'password' => md5($this->input->post('passwordpengguna')),
                'jenis_kelamin_pengguna' => $this->input->post('jeniskelaminpengguna'),
                'alamat_pengguna' => $this->input->post('alamatpengguna'),
                'gambar_pengguna' => $gbr['file_name']
            // 'level_pengguna' => $this->input->post('levelpengguna'),
            );
            $data = $this->md->ubah_pengguna($data_pengguna);
            echo json_encode($data);
        }
    }
    public function hapus()
    {
        $id = $this->input->post('idpengguna3');
        $data = $this->md->hapus_pengguna($id);
        echo json_encode($data);
    }
}