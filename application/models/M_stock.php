<?php

class M_stock extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_all_stock()
    {
        $this->db->select('s.*,b.nama_buku');
        $this->db->from('tbl_stock s');
        $this->db->join('tbl_buku b', 's.id_buku=b.id_buku', 'INNER');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_all_stock_with_supplier()
    {
        $this->db->select('s.*,b.nama_buku,sp.nama_supplier');
        $this->db->from('tbl_stock s');
        $this->db->join('tbl_buku b', 's.id_buku=b.id_buku', 'INNER');
        $this->db->join('tbl_supplier sp', 's.id_supplier=sp.id_supplier', 'INNER');
        $query = $this->db->get();
        return $query->result();
    }
    public function tambah_stock($data_stock)
    {
        $this->db->insert('tbl_stock', $data_stock);
        return true;
    }
}