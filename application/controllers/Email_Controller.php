<?php
class Email_Controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
    }
    public function index()
    {
        $this->load->helper('form');
        $this->load->view('email_form');

    }
    public function send_mail()
    {
        $from_email = 'from@example.com';
        $to_email = 'to@example.com';
        // load email library
        $this->load->library('email');
        $this->email->from($from_email, 'Your_name');
        $this->email->to($to_email);
        $this->email->subject('Email Test');
        $this->email->message('Testing the email class');
        // send email
        if ($this->email->send()) {
            echo "Email delivered successfully";
        } else {
            $this->load->view('email_form');
        }
    }
}