<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	public function index()
	{
	    $data['title']="Slider - WV Media";
		$data['description']="WV Media";
		$data['keyword']="WV Media";
		if($this->session->has_userdata('username')!='')
		{
			$data['select_all']=$this->Slider_model->select_all('tbl_slider');
			$this->load->view('admin/slider',$data);
		}
		else
		{
			redirect(base_url().'administrator');
		}
	}
	public function sliderinsert()
	{
		$this->form_validation->set_rules('heading', 'Heading', 'required');
	//	$this->form_validation->set_rules('content', 'Descripton', 'required');
		if($this->form_validation->run())
		{
			$heading = trim($this->input->post('heading')); 
			$content = trim($this->input->post('content')); 
			$data['select_slider_ins']=$this->Slider_model->select_slider_ins('tbl_slider',$heading);
			if($data['select_slider_ins']>0)
			{
        		$this->session->set_flashdata('info-message-error', 'Slider already exists.');
				redirect(base_url().'admin/slider');
			}
			else
			{
				$config['upload_path']   = './assets/img/slider/'; 
        		$config['allowed_types'] = 'jpg|png|jpeg'; 
        		$s_name= "slider".time().$_FILES['image']['name'];
        		$config['file_name'] = "slider".time().$_FILES['image']['name']; 
        		$this->load->library('upload', $config);
        		if ($this->upload->do_upload('image'))
        		{
        			$data=array(
						'heading' => $heading,
						'description' => $content,
						'banner' => $s_name,
						'added_date' =>Date('Y-m-d'),
						'status' => '1'
					);
        		}
        		else
        		{
        			$data=array(
						'heading' => $heading,
						'description' => $content,
						'added_date' =>Date('Y-m-d'),
						'status' => '1'
					);
        		}
				$insert=$this->Administrator_model->insert('tbl_slider',$data);	
				if(isset($insert))
				{
					$this->session->set_flashdata('info-message-success', 'Slider record has been inserted');
					redirect(base_url().'admin/slider');
				}
				else
				{
					$this->session->set_flashdata('info-message-error', 'Something went wrong');
					redirect(base_url().'admin/slider');
				}
			}
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Fill form properly');
			redirect(base_url().'admin/slider');
		}
	}
	public function sliderdelete($sliderID=0)
	{
		echo $sliderId=urldecode(base64_decode($sliderID));
		$slider_select=$this->Slider_model->select_slider('tbl_slider',$sliderId);
		if($slider_select)
		{
			$path="./assets/img/slider/".$slider_select['banner'];
			unlink($path);
		}
		$slider_delete=$this->Slider_model->delete_slider('tbl_slider',$sliderId);
		if($slider_delete)
		{
			$this->session->set_flashdata('info-message-error', 'Slider record has been deleted');
			redirect(base_url().'admin/slider');
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Something went wrong');
			redirect(base_url().'admin/slider');
		}
	}
	public function slideredit($sliderID=0)
	{
		$sliderId=urldecode(base64_decode($sliderID));
		$data['slider_select']=$this->Slider_model->select_slider('tbl_slider',$sliderId);
		if($data['slider_select'])
		{
			$data['select_all']=$this->Slider_model->select_all('tbl_slider');
			$this->load->view('admin/slider',$data);
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Something went wrong');
			redirect(base_url().'admin/slider');
		}
	}
	public function sliderupdate()
	{
		$this->form_validation->set_rules('heading', 'Heading', 'required');
		//$this->form_validation->set_rules('content', 'Descripton', 'required');
		if($this->form_validation->run())
		{
			$heading = trim($this->input->post('heading')); 
			$content = trim($this->input->post('content')); 
			$sliderID = trim($this->input->post('sliderID')); 
			$data['select_slider_edit']=$this->Slider_model->select_slider_edit('tbl_slider',$heading,$sliderID);
			if($data['select_slider_edit']>0)
			{
        		$this->session->set_flashdata('info-message-error', 'Slider already exists.');
				redirect(base_url().'admin/slider');
			}
			else
			{
				$config['upload_path']   = './assets/img/slider/'; 
        		$config['allowed_types'] = 'jpg|png|jpeg'; 
        		$s_name= "slider".time().$_FILES['image']['name'];
        		$config['file_name'] = "slider".time().$_FILES['image']['name']; 
        		$this->load->library('upload', $config);
        		if ($this->upload->do_upload('image'))
        		{
        			$slider_select=$this->Slider_model->select_slider('tbl_slider',$sliderID);
					if($slider_select)
					{
						$path="./assets/img/slider/".$slider_select['banner'];
						unlink($path);
					}
        			$data=array(
						'heading' => $heading,
						'description' => $content,
						'banner' => $s_name,
						'edited_date' =>Date('Y-m-d'),
						'status' => '1'
					);
        		}
        		else
        		{
        			$data=array(
						'heading' => $heading,
						'description' => $content,
						'edited_date' =>Date('Y-m-d'),
						'status' => '1'
					);
        		}
				$update=$this->Slider_model->update_slider('tbl_slider',$data,$sliderID);	
				if(isset($update))
				{
					$this->session->set_flashdata('info-message-success', 'Slider record has been Updated');
					redirect(base_url().'admin/slider');
				}
				else
				{
					$this->session->set_flashdata('info-message-error', 'Something went wrong');
					redirect(base_url().'admin/slider');
				}
			}
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Fill form properly');
			redirect(base_url().'admin/slider');
		}
	}
}
