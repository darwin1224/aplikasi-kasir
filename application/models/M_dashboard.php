<?php

class M_dashboard extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_all_stock()
    {
        $query = $this->db->query("SELECT nama_buku,SUM(jumlah_stock) as stock FROM tbl_stock join tbl_buku on tbl_stock.id_buku=tbl_buku.id_buku GROUP BY nama_buku");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
}