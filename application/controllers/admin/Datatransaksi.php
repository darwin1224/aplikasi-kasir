<?php

class Datatransaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != true) {
            redirect('admin/login');
        }
        $this->load->model('m_transaksi');
        $this->load->model('m_databuku');
        $this->load->model('m_datapelanggan');
        $this->load->library('cart');
    }
    public function index()
    {
        $this->load->view('admin/v_transaksi');
    }
    public function data_buku()
    {
        $data = $this->m_databuku->get_all_buku();
        echo json_encode($data);
    }
    public function data_pelanggan()
    {
        $data = $this->m_datapelanggan->get_all_pelanggan();
        echo json_encode($data);
    }
    public function get_buku()
    {
        $id = $this->input->post('idbuku');
        $data = $this->m_databuku->get_buku_by_id($id);
        echo json_encode($data);
    }
    public function show_cart()
    {
        $output = '';
        $no = 1;
        foreach ($this->cart->contents() as $items) {
            $output .= '
                <tr>
					<td>' . $no++ . '</td>
					<td>' . $items['name'] . '</td>
					<td>' . number_format($items['price']) . '</td>
					<td>' . $items['qty'] . '</td>
					<td>' . number_format($items['subtotal']) . '</td>
					<td style="text-align: center"><button type="button" id="' . $items['rowid'] . '" class="hapus_cart btn btn-default"><i class="fa fa-trash"></i></button></td>
				</tr>
            ';
        }
        $output .= '
                <tr style="font-size: 20px;font-weight: bold;">
                    <th colspan="4" style="text-align: right">Total</th>
                    <th colspan="2">' . 'Rp ' . number_format($this->cart->total()) . '</th>
                </tr>
            ';
        return $output;
    }
    public function load_cart()
    {
        echo $this->show_cart();
    }
    public function tambah()
    {
        $data = array(
            'id' => $this->input->post('idbuku'),
            'name' => $this->input->post('namabuku'),
            'price' => $this->input->post('hargabuku'),
            'qty' => $this->input->post('jumlahbuku'),
        );
        $this->cart->product_name_rules = '\d\D';
        $this->cart->insert($data);
        echo $this->show_cart();
    }
    public function hapus()
    {
        $data = array(
            'rowid' => $this->input->post('row_id'),
            'qty' => 0,
        );
        $this->cart->update($data);
        echo $this->show_cart();
    }
    public function bayar()
    {
        $this->cart->destroy();
        redirect('admin/datatransaksi');
    }
}