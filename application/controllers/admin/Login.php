<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }
    public function index()
    {
        $this->load->view('admin/v_login');
    }
    public function auth()
    {
        $output = array('error' => false);

        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $check_login = $this->m_login->check_login($username, $password);
        if ($check_login) {
            $row = $check_login;
            if ($row['level'] == 'Admin') {
                $id = $row['id_pengguna'];
                $nama = $row['nama_pengguna'];
                $username = $row['username'];
                $password = $row['password'];
                $sess_data = array(
                    'id' => $id,
                    'status' => true,
                    'nama' => $nama,
                    'username' => $username,
                    'password' => $password,
                    'level' => 'Admin'
                );
                $this->session->set_userdata($sess_data);
            } else {
                $id = $row['id_pengguna'];
                $nama = $row['nama_pengguna'];
                $username = $row['username'];
                $password = $row['password'];
                $sess_data = array(
                    'id' => $id,
                    'status' => true,
                    'nama' => $nama,
                    'username' => $username,
                    'password' => $password,
                    'level' => 'User'
                );
                $this->session->set_userdata($sess_data);
                $output['user'] = true;
            }
            $output['message'] = 'Logging in. Harap Tunggu...';
        } else {
            $output['error'] = true;
            $output['message'] = 'Username atau Password salah!';
        }
        echo json_encode($output);
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/login');
    }
}