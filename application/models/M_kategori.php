<?php

class M_kategori extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_all_kategori()
    {
        $query = $this->db->get('tbl_kategori');
        return $query->result();
    }
    public function get_kategori_by_id($id)
    {
        $this->db->where('id_kategori', $id);
        $query = $this->db->get('tbl_kategori');
        return $query->row();
    }
    public function tambah_kategori($data_kategori)
    {
        $this->db->insert('tbl_kategori', $data_kategori);
        return true;
    }
    public function ubah_kategori($data_kategori)
    {
        $this->db->where('id_kategori', $data_kategori['id_kategori']);
        $this->db->update('tbl_kategori', $data_kategori);
        return true;
    }
    public function hapus_kategori($id)
    {
        $this->db->where('id_kategori', $id);
        $this->db->delete('tbl_kategori');
    }
}