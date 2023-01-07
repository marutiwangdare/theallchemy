<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	public function index()
	{
	    $data['title']="About - The Allchemy";
		$data['description']="The Allchemy";
		$data['keyword']="The Allchemy";
		if($this->session->has_userdata('username')!='')
		{
		    $date=date('Y-m-d');
		    $data['select_today_vender']=$this->Administrator_model->select_vender_numbers('tbl_vender_login',$date);
			$data['select']=$this->About_model->select('tbl_about');
			$this->load->view('admin/about',$data);
		}
		else
		{
			redirect(base_url().'administrator');
		}
	}
	public function aboutinfo()
	{
		$this->form_validation->set_rules('content', 'About Content', 'required');
		if($this->form_validation->run())
		{
 	    	$content = trim($this->input->post('content'));
 	    	// $config['upload_path']   = './assets/images/about/'; 
       //  	$config['allowed_types'] = 'jpg|png|jpeg'; 
       //  	echo $a_name= "about".time().$_FILES['image']['name'];
       //  	$config['file_name'] = "about".time().$_FILES['image']['name']; 

 	    	// Count total files
      		$countfiles = count($_FILES['image']['name']);
      		// Looping all files
     		for($i=0;$i<$countfiles;$i++)
     		{
        		if(!empty($_FILES['image']['name'][$i]))
        		{
          			// Define new $_FILES array - $_FILES['file']
          			$_FILES['file']['name'] = $_FILES['image']['name'][$i];
          			$_FILES['file']['type'] = $_FILES['image']['type'][$i];
          			$_FILES['file']['tmp_name'] = $_FILES['image']['tmp_name'][$i];
          			$_FILES['file']['error'] = $_FILES['image']['error'][$i];
          			$_FILES['file']['size'] = $_FILES['image']['size'][$i];
          			// Set preference
          			$config['upload_path'] = './assets/images/about/'; 
          			$config['allowed_types'] = 'jpg|jpeg|png';
          				// $config['max_size'] = '5000'; // max_size in kb
          			$config['file_name'] = "about".time().$_FILES['image']['name'][$i];
          				//Load upload library
          			$this->load->library('upload',$config);           				
          				// File upload
          			$this->upload->initialize($config);
          			if($this->upload->do_upload('file'))
          			{
          				$uploadData = $this->upload->data();
            			$filename = $uploadData['file_name'];
            			// Initialize array
            			$data['filenames'][] = $filename;

            			
          			} 
        		}
      		}
      		$a_name=implode(',', $data['filenames']);
        	if(!empty($_FILES['image']['name'][0]))
        	{
        		$about_select=$this->About_model->select('tbl_about');	
				if($about_select)
				{
					$images=explode(',',$about_select['image']);
                    foreach($images as $value)
                    {
						$path="./assets/images/about/".$value;
						unlink($path);
					}
				}
        		$data=array(
					'description' => $content,
					'image' => $a_name,
					'date' =>Date('Y-m-d'),
					'status' => '1'
				);
        	}
        	else
        	{
        		$data=array(
					'description' => $content,
					'date' =>Date('Y-m-d'),
					'status' => '1'
				);
        	} 
			$update=$this->About_model->update('tbl_about',$data);	
			if(isset($update))
			{
				$this->session->set_flashdata('info-message-success', 'About Content has been updated');
				redirect(base_url().'admin/about');
			}
			else
			{
				$this->session->set_flashdata('info-message-error', 'Something went wrong');
				redirect(base_url().'admin/about');
			}
		}
		else
    	{ 
    		$this->session->set_flashdata('info-message-error', 'Fill form properly');
    		redirect(base_url().'admin/about');
	    }
	    

	}
}
