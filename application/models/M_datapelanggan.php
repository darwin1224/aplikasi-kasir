<?php

class M_datapelanggan extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_all_pelanggan()
    {
        $query = $this->db->get('tbl_pelanggan');
        return $query->result();
    }
    public function get_pelanggan_by_id($id)
    {
        $this->db->where('id_pelanggan', $id);
        $query = $this->db->get('tbl_pelanggan');
        return $query->row();
    }
    public function tambah_pelanggan($data_pelanggan)
    {
        $this->db->insert('tbl_pelanggan', $data_pelanggan);
        return true;
    }
    public function ubah_pelanggan($data_pelanggan)
    {
        $this->db->where('id_pelanggan', $data_pelanggan['id_pelanggan']);
        $this->db->update('tbl_pelanggan', $data_pelanggan);
        return true;
    }
    public function hapus_pelanggan($id)
    {
        $this->db->where('id_pelanggan', $id);
        $this->db->delete('tbl_pelanggan');
    }
}