<?php
class Tempdata_controller extends CI_Controller
{

    public function index()
    {
        $this->load->session('session');
        $this->load->view('tempdata_view');
    }
    public function add()
    {
        $this->load->session('session');
        $this->load->helper('url');
        // tempdata will be removed after 5 seconds
        $this->session->set_tempdata('item', 'item-value', 5);
        redirect('tempdata');
    }
}