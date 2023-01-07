<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	public function index()
	{
	    $data['title']="Category- The Allchemy";
		$data['description']="The Allchemy";
		$data['keyword']="The Allchemy";
		if($this->session->has_userdata('username')!='')
		{
			$data['select_all']=$this->Category_model->select_all('tbl_category');
			$this->load->view('admin/category',$data);
		}
		else
		{
			redirect(base_url().'administrator');
		}
	}
	public function categoryinsert()
	{
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('description', 'Cat_description', 'required');
		if($this->form_validation->run())
		{
			$c_name = trim($this->input->post('category')); 
			$description = trim($this->input->post('description')); 
			$config['upload_path']   = './assets/images/category/'; 
        	$config['allowed_types'] = 'jpg|png|jpeg'; 
        	$re_name= "category".time().$_FILES['image']['name'];
        	$config['file_name'] = "category".time().$_FILES['image']['name']; 
        	$this->load->library('upload', $config);
        	if ($this->upload->do_upload('image'))
        	{
        		$data=array(
				'category' => $c_name,
				'cat_description' => $description,
				'category_image' => $re_name,
				'added_date' =>Date('Y-m-d'),
				'status' => '1'
				);
        	}
        	else
        	{
        		$data=array(
				'category' => $c_name,
				'cat_description' => $description,
				'added_date' =>Date('Y-m-d'),
				'status' => '1'
				);
        	}
			$insert=$this->Administrator_model->insert('tbl_category',$data);	
			if(isset($insert))
			{
				$this->session->set_flashdata('info-message-success', 'Review has been inserted');
				redirect(base_url().'admin/category');
			}
			else
			{
				$this->session->set_flashdata('info-message-error', 'Something went wrong');
				redirect(base_url().'admin/category');
			}
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Fill form properly');
			redirect(base_url().'admin/category');
		}
	}
	public function reviewdelete($reviewID=0)
	{
		echo $reviewId=urldecode(base64_decode($reviewID));
		$review_select=$this->Reviews_model->select_review('tbl_reviews',$reviewId);
		if($review_select)
		{
			$path="./assets/img/review/".$review_select['image'];
			unlink($path);
		}
		$review_delete=$this->Reviews_model->delete_review('tbl_reviews',$reviewId);
		if($review_delete)
		{
			$this->session->set_flashdata('info-message-success', 'Review has been deleted');
			redirect(base_url().'admin/review');
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Something went wrong');
			redirect(base_url().'admin/review');
		}
	}
	public function categoryedit($categoryID=0)
	{
	    $data['title']="Category - The Allchemy";
		$data['description']="The Allchemy";
		$data['keyword']="The Allchemy";
		$data=urldecode(base64_decode($categoryID));
	//	echo $data;
		$data['category_select']=$this->Category_model->select_category('tbl_category',$data);
		if($data['category_select'])
		{
			$data['select_all']=$this->Category_model->select_all('tbl_category');
			$this->load->view('admin/category',$data);
		}
		else
		{
			$this->session->set_flashdata('info-message', 'Something went wrong');
			redirect(base_url().'admin/category');
		}
	}
	public function categoryupdate()
	{
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('description', 'Cat_description', 'required');
		if($this->form_validation->run())
		{
			$r_name = trim($this->input->post('r_name')); 
			$review = trim($this->input->post('review')); 
			$reviewID = trim($this->input->post('reviewID')); 
			
			$config['upload_path']   = './assets/images/category/'; 
        	$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
        	echo $re_name= "review".time().$_FILES['image']['name'];
        	$config['file_name'] = "review".time().$_FILES['image']['name']; 
        	$this->load->library('upload', $config);
        	if($this->upload->do_upload('image'))
        	{
        		$review_select=$this->Category_model->select_category('tbl_category',$reviewID);
				if($review_select['image'])
				{
					$path="./assets/images/category/".$review_select['image'];
					unlink($path);
				}
        		$data=array(
				'category' => $c_name,
				'cat_description' => $description,
				'category_image' => $re_name,
				'added_date' =>Date('Y-m-d'),
				'status' => '1'
				);
        	}
        	else
        	{
        		$data=array(
				'category' => $c_name,
				'cat_description' => $description,
				'added_date' =>Date('Y-m-d'),
				'status' => '1'
				);
        	}
			$update=$this->Reviews_model->update_review('tbl_reviews',$data,$reviewID);	
			if(isset($update))
			{
				$this->session->set_flashdata('info-message-success', 'Review has been Updated');
				redirect(base_url().'admin/review');
			}
			else
			{
				$this->session->set_flashdata('info-message-error', 'Something went wrong');
				redirect(base_url().'admin/review');
			}
		}
		else
		{
			$this->session->set_flashdata('info-message', 'Fill form properly');
			redirect(base_url().'admin/review');
		}
	}
}
