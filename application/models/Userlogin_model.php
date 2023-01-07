<?php
class Userlogin_model extends CI_Model
{
    
public function __construct()
{
	$this->load->database();
	
}

function check_email_password($email,$password)            //check email and password
{
	$this->db->where('email',$email);
	$this->db->where('password',$password);	
	$this->db->where('verify_status', '1');
	$this->db->where('status', '1');
    $query=$this->db->get('tbl_signup');
    return $query;
}

function check_email($table,$email)            //check email
{
	$this->db->where('email',$email);	
	$this->db->where('status', '1');
	$this->db->where('verify_status', '1');
    $query=$this->db->get($table);
    return $query;
}

function update_user_otp($table,$data,$userID)            //update user otp
{
	$this->db->where('userID',$userID);
    $query=$this->db->update($table,$data);
    return $query;
}

function get_user($userID,$otp)            //get vender detail
{
	$this->db->where('userID',$userID);
	$this->db->where('otp',$otp);
    $query=$this->db->get('tbl_signup');
    return $query->row_array();
}

function update_user($userID,$data)            //update
{
	$this->db->where('userID',$userID);
    $query=$this->db->update('tbl_signup', $data);
    return $query;
}

}
    

