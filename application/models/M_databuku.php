<?php

class M_databuku extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_all_buku()
    {
        $query = $this->db->get('tbl_buku');
        return $query->result();
    }
    public function get_buku_by_id($id)
    {
        $this->db->where('id_buku', $id);
        $query = $this->db->get('tbl_buku');
        return $query->row();
    }
    public function tambah_buku($data_buku)
    {
        $this->db->insert('tbl_buku', $data_buku);
        return true;
    }
    public function ubah_buku($data_buku)
    {
        $this->db->where('id_buku', $data_buku['id_buku']);
        $this->db->update('tbl_buku', $data_buku);
        return true;
    }
    public function hapus_buku($id)
    {
        $this->db->where('id_buku', $id);
        $this->db->delete('tbl_buku');
    }
}