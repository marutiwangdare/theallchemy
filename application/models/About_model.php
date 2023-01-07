<?php
class About_model extends CI_Model
{
    public function __construct()
    {
	   $this->load->database();
    }
    public function select($table)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('status',1);
        $this->db->limit('1');
        $result = $this->db->get();
        return $result->row_array();
    }
    
    public function update($table,$data)
    {
        $result=$this->db->update($table,$data);
        return $result;
    }
    

}