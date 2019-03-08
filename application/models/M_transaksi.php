<?php

class M_transaksi extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_all_transaksi()
    {
        $query = $this->db->get('tbl_transaksi');
        return $query->result();
    }
    public function get_transaksi_by_id($id)
    {
        $this->db->where('id_transaksi', $id);
        $query = $this->db->get('tbl_transaksi');
        return $query->row();
    }
    public function tambah_transaksi($data_transaksi)
    {
        $this->db->insert('tbl_transaksi', $data_transaksi);
        return true;
    }
    public function ubah_transaksi($data_transaksi)
    {
        $this->db->where('id_transaksi', $data_transaksi['id_transaksi']);
        $this->db->update('tbl_transaksi', $data_transaksi);
        return true;
    }
    public function hapus_transaksi($id)
    {
        $this->db->where('id_transaksi', $id);
        $this->db->delete('tbl_transaksi');
    }
}