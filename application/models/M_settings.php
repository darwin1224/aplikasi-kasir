<?php

class M_settings extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_all_settings()
    {
        $query = $this->db->get('tbl_settings');
        return $query->result();
    }
    public function ubah_settings($data_settings)
    {
        $this->db->where('id_settings', $data_settings['id_settings']);
        $this->db->update('tbl_settings', $data_settings);
        return true;
    }
}