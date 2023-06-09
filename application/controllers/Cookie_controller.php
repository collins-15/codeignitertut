<?php
class Cookie_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('cookie', 'url'));
    }
    public function index()
    {
        //   initializing a cookie
        set_cookie('cookie_name', 'cookie_value', 3600);
        $this->load->view('cookie_view');

    }
    // we display values inside the cookie..
    public function display_cookie()
    {
        echo get_cookie('cookie_name');
        $this->load->view('cookie_view');
    }
    public function deletecookie()
    {
        delete_cookie('cookie_name');
        redirect('cookie_name');
    }
}