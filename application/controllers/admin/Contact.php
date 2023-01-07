<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	public function index()
	{
	    $data['title']="Contact Info - Novelli's Crab & Seafood";
		$data['description']="Novelli's Crab & Seafood";
		$data['keyword']="Novelli's Crab & Seafood";
		if($this->session->has_userdata('username')!='')
		{
		    $date=date('Y-m-d');
		    $data['select_today_vender']=$this->Administrator_model->select_vender_numbers('tbl_vender_login',$date);
			$data['select']=$this->Administrator_model->select('tbl_contact_info');	
			$this->load->view('admin/contact-info',$data);
		}
		else
		{
			redirect(base_url().'administrator');
		}
	}

	public function view_contact_queries()
	{
	    $data['title']="Contact Queries - Novelli's Crab & Seafood";
		$data['description']="Novelli's Crab & Seafood";
		$data['keyword']="Novelli's Crab & Seafood";
		if($this->session->has_userdata('username')!='')
		{
		    $date=date('Y-m-d');
		    $data['select_today_vender']=$this->Administrator_model->select_vender_numbers('tbl_vender_login',$date);
			$data['select']=$this->Contact_model->select('tbl_contact');	
			$this->load->view('admin/view-contact-queries',$data);
		}
		else
		{
			redirect(base_url().'administrator');
		}
	}

	public function webreview()
	{
	  
	    $data['title']="Reviews - Novelli's Crab & Seafood";
		$data['description']="Novelli's Crab & Seafood";
		$data['keyword']="Novelli's Crab & Seafood";
		if($this->session->has_userdata('username')!='')
		{
			$data['select_all_web']=$this->Reviews_model->select_all('tbl_review');
			$this->load->view('admin/webreview',$data);
		}
		else
		{
			redirect(base_url().'administrator');
		}
	}

	public function newsletter()
	{
	  
	    $data['title']="Reviews - Novelli's Crab & Seafood";
		$data['description']="Novelli's Crab & Seafood";
		$data['keyword']="Novelli's Crab & Seafood";
		if($this->session->has_userdata('username')!='')
		{
			$data['select_all_web']=$this->Reviews_model->select_all('tbl_newsletter');
			$this->load->view('admin/newsletter',$data);
		}
		else
		{
			redirect(base_url().'administrator');
		}
	}


	public function contactdelete($ID=0)
	{
		$Id=base64_decode(urldecode($ID));
		$contactDelete=$this->Contact_model->contactDelete('tbl_contact',$Id);
		if($contactDelete)
		{
			$this->session->set_flashdata('info-message-success', 'Contact query has been deleted successfully.');
			redirect(base_url().'admin/view-contact-queries');
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Something went wrong.');
			redirect(base_url().'admin/view-contact-queries');
		}
	}

	public function contactupdate()
	{
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		if($this->form_validation->run())
		{
			$phone = trim($this->input->post('phone')); 
			$email = trim($this->input->post('email')); 
			$address = trim($this->input->post('address'));
			$opening_hour = trim($this->input->post('opening_hour'));
			$data=array(
				'address' => $address,
				'email' => $email,
				'phone' => $phone,
				'opening_hour' => $opening_hour,
				'date' =>Date('Y-m-d'),
				'status' => '1'
			);
			$update=$this->Contact_model->update_contact_info('tbl_contact_info',$data);	
			if(isset($update))
			{
				$this->session->set_flashdata('info-message-success', 'Contact Info has been updated.');
				redirect(base_url().'admin/contact');
			}
			else
			{
				$this->session->set_flashdata('info-message-error', 'Something went wrong.');
				redirect(base_url().'admin/contact');
			}
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Fill form properly.');
			redirect(base_url().'admin/contact');
		}
	}
}
