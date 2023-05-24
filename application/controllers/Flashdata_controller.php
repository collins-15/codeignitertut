<?php
class Flashdata_controller extends CI_Controller{
    public function index()
    {
        // load session library
        $this->load->library('session');
        // redirect to home page
        $this->load->view('flashdata_home');
    }
    public function add()
    {
        // load session library
        $this->load->library('session');
        $this->load->helper('url');
        // add flash data
        $this->session->set_flashdata('collins','3');
        // redirect
        redirect('flashdata');
    }
}