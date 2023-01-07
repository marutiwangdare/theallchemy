<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Allchemy_adm extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	public function index()
	{
	   
		$this->load->view('admin/login');
	}
	public function check_login()
	{
	    $this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run())
		{
        	echo $email = trim($this->input->post('username'));
 	    	echo $password = trim($this->input->post('password')); 
			echo $check_login=$this->Administrator_model->check_login($email,$password);	
			if($check_login>0)
			{		
				$admindata = array(
        			'username'  => $email,
        			'password'  => $password
				);
				$this->session->set_userdata($admindata);
				$this->session->set_flashdata('info-message_success','You are login successfully.');
	    		redirect(base_url().'admin/dashboard');
			}	
			else
    		{
    			$this->session->set_flashdata('info-message_error','Invalid Username or Password.');
	    		redirect(base_url().'Allchemy_adm');
	    	}
	    	redirect(base_url().'Allchemy_adm');
		}
		else
    	{
    		$this->session->set_flashdata('info-message_error','Fill form properly.');
	    	redirect(base_url().'Allchemy_adm');
	    }
	}

	public function dashboard()
	{
	    $data['title']="Home - The Allchemy";
		$data['description']="The Allchemy";
		$data['keyword']="The Allchemy";
		if($this->session->has_userdata('username')!='')
		{
		    $data['select_today_vender']=$this->Administrator_model->select_vender_numbers('tbl_vender_login',$date);
			$this->load->view('admin/dashboard',$data);
		}
		else
		{
			redirect(base_url().'Allchemy_adm');
		}
	}

	
}
