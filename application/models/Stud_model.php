<?php
class Stud_Model extends CI_model
{
    function __construct()
    {
        parent::__construct();
    }
    // this function is for insertion of a record
    public function insert($data)
    {
        if ($this->db->insert("stud", $data)) {
            return true;
        }
    }
    // this function deletes a specific record
    public function delete($roll_no)
    {
        if ($this->db->delete("stud", "roll_no =" . $roll_no))
            ;
        return true;
    }
    // this function is for updating the existing record
    public function update($data, $old_roll_no)
    {
        $this->db->set($data);
        $this->db->where("roll_no", $old_roll_no);
        $this->db->update("stud", $data);
    }
}