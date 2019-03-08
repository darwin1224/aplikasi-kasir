<?php if (defined('BASEPATH') or exit("No direct script access allowed"));

class PageNotFound extends CI_Controller
{
    public function index()
    {
        $this->load->view('errors/v_error');
    }
}