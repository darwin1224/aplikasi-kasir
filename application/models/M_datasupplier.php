<?php

class M_datasupplier extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_all_supplier()
    {
        $query = $this->db->get('tbl_supplier');
        return $query->result();
    }
    public function get_supplier_by_id($id)
    {
        $this->db->where('id_supplier', $id);
        $query = $this->db->get('tbl_supplier');
        return $query->row();
    }
    public function tambah_supplier($data_supplier)
    {
        $this->db->insert('tbl_supplier', $data_supplier);
        return true;
    }
    public function ubah_supplier($data_supplier)
    {
        $this->db->where('id_supplier', $data_supplier['id_supplier']);
        $this->db->update('tbl_supplier', $data_supplier);
        return true;
    }
    public function hapus_supplier($id)
    {
        $this->db->where('id_supplier', $id);
        $this->db->delete('tbl_supplier');
    }
}