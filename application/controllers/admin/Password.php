<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	public function index()
	{
	    $data['title']="Password - Ufove";
		$data['description']="Ufove";
		$data['keyword']="Ufove";
		if($this->session->has_userdata('username')!='')
		{
		    $date=date('Y-m-d');
		    $data['select_today_vender']=$this->Administrator_model->select_vender_numbers('tbl_vender_login',$date);
			$this->load->view('admin/change-password',$data);
		}
		else
		{
			redirect(base_url().'administrator');
		}
	}
	
	public function passwordupdate()
	{
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run())
		{
		 	$password = trim($this->input->post('password')); 
		 	$adminID = trim($this->input->post('adminID'));
		 	$data=array(
		 		'admin_password' => $password,
		 		'edited_date' =>Date('Y-m-d'),
		 		'status' => '1'
		 	);
		 	$update=$this->Administrator_model->update_administrator('tbl_admin',$data,$adminID);	
			if(isset($update))
			{
				$this->session->set_flashdata('info-message_success', 'Password has been updated.Please log with new password.');
				redirect(base_url().'administrator');
			}
			else
			{
				$this->session->set_flashdata('info-message-error', 'Something went wrong.');
				redirect(base_url().'admin/change-password');
			}
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Fill form properly.');
			redirect(base_url().'admin/change-password');
		}
	}
}
