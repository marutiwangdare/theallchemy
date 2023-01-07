<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsletter extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	public function index()
	{
	    $data['title']="Newsletter Subscription - Novelli's Crab & Seafood";
		$data['description']="Novelli's Crab & Seafood";
		$data['keyword']="Novelli's Crab & Seafood";
		if($this->session->has_userdata('username')!='')
		{
			$data['select']=$this->Contact_model->select('tbl_subscribers');	
			$this->load->view('admin/view-newsletter-queries',$data);
		}
		else
		{
			redirect(base_url().'administrator');
		}
	}

	public function newsletterdelete($ID=0)
	{
		$Id=base64_decode(urldecode($ID));
		$contactDelete=$this->Contact_model->contactDelete('tbl_subscribers',$Id);
		if($contactDelete)
		{
			$this->session->set_flashdata('info-message-success', 'Newsletter Subscription has been deleted successfully.');
			redirect(base_url().'admin/view-newsletter-queries');
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Something went wrong.');
			redirect(base_url().'admin/view-newsletter-queries');
		}
	}

}
