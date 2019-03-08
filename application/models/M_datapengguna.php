<?php

class M_datapengguna extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_all_pengguna()
    {
        $query = $this->db->get('tbl_pengguna');
        return $query->result();
    }
    public function get_pengguna_by_id($id)
    {
        $this->db->where('id_pengguna', $id);
        $query = $this->db->get('tbl_pengguna');
        return $query->row();
    }
    public function tambah_pengguna($data_pengguna)
    {
        $this->db->insert('tbl_pengguna', $data_pengguna);
        return true;
    }
    public function ubah_pengguna($data_pengguna)
    {
        $this->db->where('id_pengguna', $data_pengguna['id_pengguna']);
        $query = $this->db->update('tbl_pengguna', $data_pengguna);
        return true;
    }
    public function hapus_pengguna($id)
    {
        $this->db->where('id_pengguna', $id);
        $this->db->delete('tbl_pengguna');
    }
}