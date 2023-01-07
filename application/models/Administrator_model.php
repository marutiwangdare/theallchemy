<?php
class Administrator_model extends CI_Model
{
    public function __construct()
    {
	   $this->load->database();
    }
    public function check_login($email,$password)
    {
        $this->db->where('email',$email);
        $this->db->where('admin_password',$password);
        $result = $this->db->get('tbl_admin')->num_rows();
        return $result;
    }
    public function select($table)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('status',1);
        $this->db->limit(1);
        $result = $this->db->get();
        return $result->row_array();
    }
    public function update($table,$data)
    {
        $result = $this->db->update($table, $data);
        return $result;
    }
    public function insert($table,$data)
    {
        $result = $this->db->insert($table, $data);
        return $result;
    }
    public function select_about($table,$aboutID)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('aboutID',$aboutID);
        $this->db->where('status',1);
        $result = $this->db->get();
        return $result->row_array();
    }
    
    public function select_vender_numbers($table,$date)
    {
        $this->db->where('added_date',$date);
        $result = $this->db->get($table)->num_rows();
        return $result;
    }
    
    public function update_administrator($table,$data,$adminID)
    {
        $this->db->where('adminID',$adminID);
        $result = $this->db->update($table, $data);
        return $result;
    }

}