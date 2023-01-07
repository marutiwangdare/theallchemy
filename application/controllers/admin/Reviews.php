<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reviews extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	public function index()
	{
	    $data['title']="Reviews - Novelli's Crab & Seafood";
		$data['description']="Novelli's Crab & Seafood";
		$data['keyword']="Novelli's Crab & Seafood";
		if($this->session->has_userdata('username')!='')
		{
			$data['select_all']=$this->Reviews_model->select_all('tbl_reviews');
			$this->load->view('admin/reviews',$data);
		}
		else
		{
			redirect(base_url().'administrator');
		}
	}
	public function reviewinsert()
	{
		$this->form_validation->set_rules('r_name', 'Name', 'required');
		$this->form_validation->set_rules('review', 'Review', 'required');
		if($this->form_validation->run())
		{
			$r_name = trim($this->input->post('r_name')); 
			$review = trim($this->input->post('review')); 
			$config['upload_path']   = './assets/images/review/'; 
        	$config['allowed_types'] = 'jpg|png|jpeg'; 
        	$re_name= "review".time().$_FILES['image']['name'];
        	$config['file_name'] = "review".time().$_FILES['image']['name']; 
        	$this->load->library('upload', $config);
        	if ($this->upload->do_upload('image'))
        	{
        		$data=array(
				'name' => $r_name,
				'image' => $re_name,
				'review' => $review,
				'added_date' =>Date('Y-m-d'),
				'status' => '1'
				);
        	}
        	else
        	{
        		$data=array(
				'name' => $r_name,
				'review' => $review,
				'added_date' =>Date('Y-m-d'),
				'status' => '1'
				);
        	}
			$insert=$this->Administrator_model->insert('tbl_reviews',$data);	
			if(isset($insert))
			{
				$this->session->set_flashdata('info-message-success', 'Review has been inserted');
				redirect(base_url().'admin/reviews');
			}
			else
			{
				$this->session->set_flashdata('info-message-error', 'Something went wrong');
				redirect(base_url().'admin/reviews');
			}
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Fill form properly');
			redirect(base_url().'admin/reviews');
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
	public function reviewedit($reviewID=0)
	{
	    $data['title']="Reviews - Novelli's Crab & Seafood";
		$data['description']="Novelli's Crab & Seafood";
		$data['keyword']="Novelli's Crab & Seafood";
		$reviewId=urldecode(base64_decode($reviewID));
		$data['review_select']=$this->Reviews_model->select_review('tbl_reviews',$reviewId);
		if($data['review_select'])
		{
			$data['select_all']=$this->Reviews_model->select_all('tbl_reviews');
			$this->load->view('admin/reviews',$data);
		}
		else
		{
			$this->session->set_flashdata('info-message', 'Something went wrong');
			redirect(base_url().'admin/review');
		}
	}
	public function reviewupdate()
	{
		$this->form_validation->set_rules('r_name', 'Name', 'required');
		$this->form_validation->set_rules('review', 'Review', 'required');
		if($this->form_validation->run())
		{
			$r_name = trim($this->input->post('r_name')); 
			$review = trim($this->input->post('review')); 
			$reviewID = trim($this->input->post('reviewID')); 
			
			$config['upload_path']   = './assets/images/review/'; 
        	$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
        	echo $re_name= "review".time().$_FILES['image']['name'];
        	$config['file_name'] = "review".time().$_FILES['image']['name']; 
        	$this->load->library('upload', $config);
        	if($this->upload->do_upload('image'))
        	{
        		$review_select=$this->Reviews_model->select_review('tbl_reviews',$reviewID);
				if($review_select['image'])
				{
					$path="./assets/images/review/".$review_select['image'];
					unlink($path);
				}
        		$data=array(
					'name' => $r_name,
					'image' => $re_name,
					'review' => $review,
					'added_date' =>Date('Y-m-d'),
					'status' => '1'
				);
        	}
        	else
        	{
        		$data=array(
					'name' => $r_name,
					'review' => $review,
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
