<?php
class Lang_Controller extends CI_Controller
{
    public function index()
    {
        // Load form helper
        $this->load->helper('form');

        // Get selected language
        $language = $this->input->post('language');

        // Choosing your own language
        if ($language === "french") {
            $this->lang->load('french_lang', 'french');
        } else if ($language === "german") {
            $this->lang->load('german_lang', 'german');
        } else {
            $this->lang->load('english_lang', 'english');
        }

        // Get selected message
        $data['msg'] = $this->lang->line('msg');
        $data['language'] = $language;

        // Loading the view
        $this->load->view('lang_view', $data);
    }
}
