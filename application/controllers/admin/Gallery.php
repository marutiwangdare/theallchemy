<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	public function index()
	{
	    $data['title']="Gallery - Novelli's Crab & Seafood";
		$data['description']="Novelli's Crab & Seafood";
		$data['keyword']="Novelli's Crab & Seafood";
		if($this->session->has_userdata('username')!='')
		{
		    $date=date('Y-m-d');
		    $data['select_today_vender']=$this->Administrator_model->select_vender_numbers('tbl_vender_login',$date);
			$data['select_all']=$this->Gallery_model->select_all('tbl_gallery');
			$this->load->view('admin/gallery',$data);
		}
		else
		{
			redirect(base_url().'administrator');
		}
	}
	public function galleryinsert()
	{
		$title = ucfirst(trim($this->input->post('title'))); 
		$config['upload_path']   = './assets/images/gallery/'; 
        $config['allowed_types'] = 'jpg|png|jpeg'; 
        $g_name= "gallery".time().$_FILES['image']['name'];
        $config['file_name'] = "gallery".time().$_FILES['image']['name']; 
        $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '',$title);
	    $clean = strtolower(trim($clean, '-'));
	    $clean = preg_replace("/[\/_|+ -]+/", '-', $clean);
	    $web_slug=$clean;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image'))
        {
        	$data=array(
			'title' => $title,
			'gallery_image' => $g_name,
			'gallery_slug' => $web_slug,
			'added_date' =>Date('Y-m-d'),
			'status' => '1'
			);
        }
        else
        {
        	$data=array(
			'title' => $title,
			'gallery_slug' => $web_slug,
			'added_date' =>Date('Y-m-d'),
			'status' => '1'
			);
        }
		$insert=$this->Administrator_model->insert('tbl_gallery',$data);	
		if(isset($insert))
		{
			$this->session->set_flashdata('info-message-success', 'Gallery record has been inserted');
			redirect(base_url().'admin/gallery');
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Something went wrong');
			redirect(base_url().'admin/gallery');
		}
	}
	public function gallerydelete($galleryId=0)
	{
		$galleryID=urldecode(base64_decode($galleryId));
		$gallery_select=$this->Gallery_model->select_gallery('tbl_gallery',$galleryID);
		if($gallery_select)
		{
			$path="./assets/images/gallery/".$gallery_select['gallery_image'];
			unlink($path);
		}
		$gallery_delete=$this->Gallery_model->delete_gallery('tbl_gallery',$galleryID);
		if($gallery_delete)
		{
			$this->session->set_flashdata('info-message-success', 'Gallery record has been deleted');
			redirect(base_url().'admin/gallery');
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Something went wrong');
			redirect(base_url().'admin/Gallery');
		}
	}
	public function galleryedit($galleryID=0)
	{
		$galleryId=urldecode(base64_decode($galleryID));
		$data['gallery_select']=$this->Gallery_model->select_gallery('tbl_gallery',$galleryId);
		if($data['gallery_select'])
		{
		    $date=date('Y-m-d');
		    $data['select_today_vender']=$this->Administrator_model->select_vender_numbers('tbl_vender_login',$date);
			$data['select_all']=$this->Gallery_model->select_all('tbl_gallery');
			$this->load->view('admin/gallery',$data);
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Something went wrong');
			redirect(base_url().'admin/gallery');
		}
	}
	public function galleryupdate()
	{
		$title = ucfirst(trim($this->input->post('title'))); 
		$galleryID = trim($this->input->post('galleryID')); 
		$config['upload_path']   = './assets/images/gallery/'; 
        $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
        $g_name= "gallery".time().$_FILES['image']['name'];
        $config['file_name'] = "gallery".time().$_FILES['image']['name']; 
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image'))
        {
        	$gallery_select=$this->Gallery_model->select_gallery('tbl_gallery',$galleryID);
			if($gallery_select)
			{
				$path="./assets/images/gallery/".$gallery_select['gallery_image'];
				unlink($path);
			}
			$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '',$title);
	      	$clean = strtolower(trim($clean, '-'));
	     	$clean = preg_replace("/[\/_|+ -]+/", '-', $clean);
	      	$web_slug=$clean;
        	$data=array(
			'title' => $title,
			'gallery_image' => $g_name,
			'gallery_slug' => $web_slug,
			'edited_date' =>Date('Y-m-d'),
			'status' => '1'
			);
        }
        else
        {
        	$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '',$title);
	      	$clean = strtolower(trim($clean, '-'));
	     	$clean = preg_replace("/[\/_|+ -]+/", '-', $clean);
	      	$web_slug=$clean;
        	$data=array(
			'title' => $title,
			'gallery_slug' => $web_slug,
			'edited_date' =>Date('Y-m-d'),
			'status' => '1'
			);
        }
		$update=$this->Gallery_model->update_gallery('tbl_gallery',$data,$galleryID);	
		if(isset($update))
		{
			$this->session->set_flashdata('info-message-success', 'Gallery record has been Updated');
			redirect(base_url().'admin/gallery');
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Something went wrong');
			redirect(base_url().'admin/gallery');
		}
	}
}
