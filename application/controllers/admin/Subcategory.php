<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subcategory extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	public function index()
	{
	    $data['title']="Subcategory - Ufove";
		$data['description']="Ufove";
		$data['keyword']="Ufove";
		if($this->session->has_userdata('username')!='')
		{
		    $date=date('Y-m-d');
		    $data['select_today_vender']=$this->Administrator_model->select_vender_numbers('tbl_vender_login',$date);
			$data['select_category']=$this->Category_model->select_all('tbl_category');
			$data['select_all']=$this->Subcategory_model->select_all('tbl_subcategory');
			$this->load->view('admin/subcategory',$data);
		}
		else
		{
			redirect(base_url().'administrator');
		}
	}
	public function subcategoryinsert()
	{
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('subcategory', 'Subcategory', 'required');
		if($this->form_validation->run())
		{
			$category = trim($this->input->post('category'));
			$subcategory = ucfirst(trim($this->input->post('subcategory'))); 
			$data['select_subcat_ins']=$this->Subcategory_model->select_subcat_ins('tbl_subcategory',$category,$subcategory);
			if($data['select_subcat_ins']>0)
			{
        		$this->session->set_flashdata('info-message-error', 'Subcategory already exists.');
				redirect(base_url().'admin/subcategory');
			}
			else
			{ 
        		$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '',$subcategory);
	    		$clean = strtolower(trim($clean, '-'));
	    		$clean = preg_replace("/[\/_|+ -]+/", '-', $clean);
	    		$web_slug=$clean;
        		$data=array(
					'categoryID' => $category,
					'subcategory' => $subcategory,
					'web_slug' => $web_slug,
					'added_date' =>Date('Y-m-d'),
					'status' => '1'
				);
				$insert=$this->Administrator_model->insert('tbl_subcategory',$data);	
				if(isset($insert))
				{
					$this->session->set_flashdata('info-message-success', 'Subcategory has been inserted.');
					redirect(base_url().'admin/subcategory');
				}
				else
				{
					$this->session->set_flashdata('info-message-error', 'Something went wrong.');
					redirect(base_url().'admin/subcategory');
				}
			}
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Fill form properly');
			redirect(base_url().'admin/subcategory');
		}
	}
	public function subcategorydelete($subcategoryID=0)
	{
		echo $subcategoryId=urldecode(base64_decode($subcategoryID));
		$subcategory_delete=$this->Subcategory_model->delete_subcategory('tbl_subcategory',$subcategoryId);
		if($subcategory_delete)
		{
			$this->session->set_flashdata('info-message-success', 'Subcategory has been deleted.');
			redirect(base_url().'admin/subcategory');
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Something went wrong.');
			redirect(base_url().'admin/subcategory');
		}
	}
	public function subcategoryedit($subcategoryID=0)
	{
		$subcategoryId=urldecode(base64_decode($subcategoryID));
		$data['subcategory_select']=$this->Subcategory_model->select_subcategory('tbl_subcategory',$subcategoryId);
		if($data['subcategory_select'])
		{
			$select_query=$this->db->query("select * from tbl_admin where email='$_SESSION[username]' and admin_password='$_SESSION[password]'");
            $result_query=$select_query->row_array();
			$data['select_category']=$this->Category_model->select_all('tbl_category',$result_query['adminID']);
			$data['select_all']=$this->Subcategory_model->select_all('tbl_subcategory',$result_query['adminID']);
			$date=date('Y-m-d');
		    $data['select_today_vender']=$this->Administrator_model->select_vender_numbers('tbl_vender_login',$date);
			$this->load->view('admin/subcategory',$data);
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Something went wrong.');
			redirect(base_url().'admin/subcategory');
		}
	}
	public function subcategoryupdate()
	{
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('subcategory', 'Subcategory', 'required');
		if($this->form_validation->run())
		{
			$category = trim($this->input->post('category')); 
			$subcategory = ucfirst(trim($this->input->post('subcategory')));
			$subcategoryID = trim($this->input->post('subcategoryID'));
			$data['select_subcat_edit']=$this->Subcategory_model->select_subcat_edit('tbl_subcategory',$subcategory,$subcategoryID,$category);
			if($data['select_subcat_edit']>0)
			{
        		$this->session->set_flashdata('info-message-error', 'Subcategory already exists.');
				redirect(base_url().'admin/subcategory');
			}
			else
			{
        		$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '',$subcategory);
	      		$clean = strtolower(trim($clean, '-'));
	     		$clean = preg_replace("/[\/_|+ -]+/", '-', $clean);
	      		$web_slug=$clean;
        		$data=array(
					'categoryID' => $category,
					'subcategory' => $subcategory,
					'web_slug' => $web_slug,
					'edited_date' =>Date('Y-m-d'),
					'status' => '1'
				);
				$update=$this->Subcategory_model->update_subcategory('tbl_subcategory',$data,$subcategoryID);	
				if(isset($update))
				{
					$this->session->set_flashdata('info-message-success', 'Subcategory has been updated.');
					redirect(base_url().'admin/subcategory');
				}
				else
				{
					$this->session->set_flashdata('info-message-error', 'Something went wrong.');
					redirect(base_url().'admin/subcategory');
				}
			}
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Fill form properly.');
			redirect(base_url().'admin/subcategory');
		}
	}
}
