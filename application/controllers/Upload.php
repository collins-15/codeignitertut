<?php

class Upload extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
    }

    public function index()
    {
        $this->load->view('upload_form');
    }

    public function do_upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpeg|png';
        $config['max_size'] = 100;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('userfile')) {
            $error = $this->upload->display_errors();
            $this->load->view('upload_form', ['error' => $error]);
        } else {
            $data = $this->upload->data();
            $this->load->view('upload_success', ['data' => $data]);
        }
    }
}
