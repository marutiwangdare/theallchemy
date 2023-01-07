<?php
class Contact_model extends CI_Model
{
    
public function __construct()
{
	$this->load->database();
	
}

function insert($table,$data)            //insert
{
    $query=$this->db->insert($table, $data);
    $insert_id = $this->db->insert_id();
	return  $insert_id;
}

public function select($table)
{
    $this->db->select('*');
    $this->db->from($table);
    $this->db->where('status',1);
    $this->db->order_by('sno', 'desc');
    $result = $this->db->get();
    return $result->result_array();
}

public function contactDelete($table,$ID)
{
    $this->db->where('sno', $ID);
    $this->db->set('status','0');
    $result=$this->db->update($table);
    return $result;
}

public function update_contact_info($table,$data)
{
    $result=$this->db->update($table,$data);
    return $result;
}


}
    

