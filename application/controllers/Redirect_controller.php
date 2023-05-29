<?php
class Redirect_controller extends CI_Controller{
    //This calls for default function
    public function index()
    {
        $this->load->helper('url');
        // redirect user to google.com
        redirect('https://google.com');
    }
    public function github()
    {
        $this->load->helper('url');
        // redirect user to github.com
        redirect('https://github.com');
    }
}