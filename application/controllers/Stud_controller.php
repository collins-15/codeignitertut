<?php
class Stud_controller extends CI_Controller
{
    /**
     * students controller
     */
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }
    public function index()
    {
        $query = $this->db->get("stud");
        $data["records"] = $query->result();
        $this->load->helper("url");
        $this->load->view("Stud_view", $data);
    }
    public function add_student_view()
    {
        $this->load->helper('form');
        $this->load->view('Stud_add');
    }
    public function add_student()
    {
        $this->load->model("Stud_model");
        $data = array(
            "roll_no" => $this->input->post("roll_no"),
            "name" => $this->input->post("name")
        );
        $this->Stud_model->insert($data);
        $query = $this->db->get("stud");
        $data["records"] = $query->result();
        $this->load->view("Stud_view", $data);
    }
    public function delete_student()
    {
        $this->load->model("Stud_model");
        $this->load->helper('url');
        $roll_no = $this->uri->segment('3'); // Adjust segment index if needed
        $this->Stud_model->delete($roll_no);
        $query = $this->db->get("Stud");
        $data["records"] = $query->result();
        $this->load->view("Stud_view", $data);
    }

    public function update_student_view()
    {
        $this->load->helper("form");
        $roll_no = $this->uri->segment("3");
        $query = $this->db->get_where("stud", array("roll_no" => $roll_no));
        $data["records"] = $query->result();
        $data["Old_roll_no"] = $roll_no;
        $this->load->view("Stud_edit", $data);

    }
}