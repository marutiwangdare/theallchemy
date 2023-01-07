<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cupon extends CI_Controller {
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
			$data['select_all']=$this->Category_model->select_all('tbl_cupon');
			$this->load->view('admin/cupon',$data);
		}
		else
		{
			redirect(base_url().'administrator');
		}
	}
	public function cuponinsert()
	{
		$this->form_validation->set_rules('cupon', 'Cupon', 'required');
		//$this->form_validation->set_rules('description', 'Cat_description', 'required');
		if($this->form_validation->run())
		{
			$c_name = trim($this->input->post('cupon')); 
			$description = trim($this->input->post('description'));
			$discount = trim($this->input->post('discount'));
			$config['upload_path']   = './assets/images/category/'; 
        	$config['allowed_types'] = 'jpg|png|jpeg'; 
        	$re_name= "cupon".time().$_FILES['image']['name'];
        	$config['file_name'] = "cupon".time().$_FILES['image']['name']; 
        	$this->load->library('upload', $config);
        	if ($this->upload->do_upload('image'))
        	{
        		$data=array(
				'cupon' => $c_name,
				'cupon_description' => $description,
				'discount' => $discount,
				'cupon_image' => $re_name,
				'added_date' =>Date('Y-m-d'),
				'status' => '1'
				);
        	}
        	else
        	{
        		$data=array(
				'cupon' => $c_name,
				'cupon_description' => $description,
				'discount' => $discount,
				'added_date' =>Date('Y-m-d'),
				'status' => '1'
				);
        	}
			$insert=$this->Administrator_model->insert('tbl_cupon',$data);	
			if(isset($insert))
			{
				$this->session->set_flashdata('info-message-success', 'Cupon code has been inserted');
				redirect(base_url().'admin/cupon');
			}
			else
			{
				$this->session->set_flashdata('info-message-error', 'Something went wrong');
				redirect(base_url().'admin/cupon');
			}
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Fill form properly');
			redirect(base_url().'admin/cupon');
		}
	}
	public function cupondelete($cuponID=0)
	{
		echo $cuponId=urldecode(base64_decode($cuponID));
		$cupon_select=$this->Category_model->select_cupon('tbl_cupon',$cuponId);
		if($cupon_select)
		{
			$path="./assets/images/category/".$cupon_select['cupon_image'];
			unlink($path);
		}
		$cupon_delete=$this->Category_model->delete_cupon('tbl_cupon',$cuponId);
		if($cupon_delete)
		{
			$this->session->set_flashdata('info-message-success', 'Cupon has been deleted');
			redirect(base_url().'admin/cupon');
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Something went wrong');
			redirect(base_url().'admin/cupon');
		}
	}
	public function cuponedit($cuponID=0)
	{
	    $data['title']="Cupon - The Allchemy";
		$data['description']="The Allchemy";
		$data['keyword']="The Allchemy";
		$cuponId=$cuponID;
	//	echo $cuponId;
		$data['cupon_select']=$this->Category_model->select_cupon('tbl_cupon',$cuponId);
		if($data['cupon_select'])
		{
		    redirect(base_url().'admin/cupon');
		    
		}
		else
		{
			echo "false";		}
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
