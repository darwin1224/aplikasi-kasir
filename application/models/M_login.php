<?php

class M_login extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function check_login($username, $password)
    {
        $query = $this->db->get_where('tbl_pengguna', array('username' => $username, 'password' => $password));
        return $query->row_array();
    }
}