<?php
class Userregistration_model extends CI_Model
{
    
public function __construct()
{
	$this->load->database();
	
}

function check_confirmed_email($email)            //check email
{
	$this->db->where('email',$email);
	$this->db->where('verify_status', '1');
    $this->db->where('status', '1');
    $query=$this->db->get('tbl_signup');
    return $query;
}

function check_email($email)            //check email
{
    $this->db->where('email',$email);
    $this->db->where('verify_status', '0');
    $this->db->where('status', '1');
    $query=$this->db->get('tbl_signup');
    return $query;
}

function add_user($data)            //insert
{
    $query=$this->db->insert('tbl_signup', $data);
    $insert_id = $this->db->insert_id();
	return  $insert_id;
}

function check_user($table,$userID,$verificationcode)            //check user
{
    $this->db->where('userID',$userID);
    $this->db->where('verificationcode',$verificationcode);
    $this->db->where('verify_status', '0');
    $this->db->where('status', '1');
    $query=$this->db->get($table);
    //echo $this->db->last_query();
    return $query;
}

function update_user_verifystatus($table,$data,$userID)          //update
{
    $this->db->where('userID',$userID);
    $query=$this->db->update($table, $data);
    return $query;
}

// function update_vender($venderID,$data)            //update
// {
// 	$this->db->where('venderID',$venderID);
//     $query=$this->db->update('tbl_vender_login', $data);
//     return $query;
// }

// function get_vender($venderID)            //get vender detail
// {
// 	$this->db->where('venderID',$venderID);
//     $query=$this->db->get('tbl_vender_login');
//     return $query->row_array();
// }

// function get_vender_verify_status($venderID)            //get vender detail
// {
//     $this->db->where('venderID',$venderID);
//     $query=$this->db->get('tbl_vender_login');
//     $verify=$query->row_array();
//     return $verify['verify_status'];
// }

}
    

