<?php

class M_satuan extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_all_satuan()
    {
        $query = $this->db->get('tbl_satuan');
        return $query->result();
    }
    public function get_satuan_by_id($id)
    {
        $this->db->where('id_satuan', $id);
        $query = $this->db->get('tbl_satuan');
        return $query->row();
    }
    public function tambah_satuan($data_satuan)
    {
        $this->db->insert('tbl_satuan', $data_satuan);
        return true;
    }
    public function ubah_satuan($data_satuan)
    {
        $this->db->where('id_satuan', $data_satuan['id_satuan']);
        $this->db->update('tbl_satuan', $data_satuan);
        return true;
    }
    public function hapus_satuan($id)
    {
        $this->db->where('id_satuan', $id);
        $this->db->delete('tbl_satuan');
    }
}