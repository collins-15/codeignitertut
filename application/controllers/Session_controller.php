<?php
class Session_controller extends CI_Controller
{

    public function index()
    {
        // loading session library
        $this->load->library('session');
        // adding data to session
        $this->session->set_userdata('name', 'COLLINS');
        $this->load->view('session_view');
    }
    public function unset_session_data()
    {
        // Load session library
        $this->load->library('session');

        // Unset session data
        $this->session->unset_userdata('name');

        $this->load->view('session_view');
    }

}