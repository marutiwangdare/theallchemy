<?php
class User_model extends CI_Model
{
    public function __construct()
    {
	   $this->load->database();
    }
    public function select_all($table)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('status!=','0');
        $result = $this->db->get();
        return $result->result_array();
    }
    public function delete_user($table,$userID)
    {
        $this->db->where('userID', $userID);
        $this->db->set('status','0');
        $result=$this->db->update($table);
        return $result;
    }
     public function update_user($table,$userID,$status)
    {
        $this->db->where('userID', $userID);
        $this->db->set('status',$status);
        $result=$this->db->update($table);
        return $result;
    }
    

}