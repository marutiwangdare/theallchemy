<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	public function index()
	{
	    $data['title']="Users - Ufove";
		$data['description']="Ufove";
		$data['keyword']="Ufove";
		if($this->session->has_userdata('username')!='')
		{
		    $date=date('Y-m-d');
		    $data['select_today_vender']=$this->Administrator_model->select_vender_numbers('tbl_vender_login',$date);
			$data['select_user']=$this->User_model->select_all('tbl_signup');
			$this->load->view('admin/view-user',$data);
		}
		else
		{
			redirect(base_url().'administrator');
		}
	}

	public function userdelete($userID=0)
	{
		echo $userId=urldecode(base64_decode($userID));
		$user_delete=$this->User_model->delete_user('tbl_signup',$userId);
		if($user_delete)
		{
			$this->session->set_flashdata('info-message-success', 'User has been deleted.');
			redirect(base_url().'admin/view-users');
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Something went wrong.');
			redirect(base_url().'admin/view-users');
		}
	}

	public function userstatusupdate($userID=0,$status=0)
	{
		$userId=urldecode(base64_decode($userID));
		$user_status=urldecode(base64_decode($status));
		$user_update=$this->User_model->update_user('tbl_signup',$userId,$user_status);
		if($user_update)
		{
			$this->session->set_flashdata('info-message-success', 'Status has been updated.');
			redirect(base_url().'admin/view-users');
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Something went wrong.');
			redirect(base_url().'admin/view-users');
		}
	}
}
