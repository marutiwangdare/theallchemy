<?php
class Reviews_model extends CI_Model
{
    public function __construct()
    {
	   $this->load->database();
    }
    public function select_all($table)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('status',1);
        $result = $this->db->get();
        return $result->result_array();
    }
    public function select_review($table,$reviewID)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('reviewID',$reviewID);
        $this->db->where('status',1);
        $result = $this->db->get();
        return $result->row_array();
    }
    public function delete_review($table,$reviewID)
    {
        $this->db->where('reviewID', $reviewID);
        $result=$this->db->delete($table);
        return $result;
    }
    public function update_review($table,$data,$reviewID)
    {
        $this->db->where('reviewID', $reviewID);
        $result=$this->db->update($table,$data);
        return $result;
    }
    

}