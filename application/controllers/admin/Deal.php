<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deal extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	public function index()
	{
	    $data['title']="The Allchemy";
		$data['description']="The Allchemy";
		$data['keyword']="The Allchemy";
		if($this->session->has_userdata('username')!='')
		{
		    $date=date('Y-m-d');
		    $data['select_today_vender']=$this->Administrator_model->select_vender_numbers('tbl_vender_login',$date);
			$data['select_category']=$this->Category_model->select_all('tbl_category');
			// $data['select_subcategory']=$this->Subcategory_model->select_all('tbl_subcategory');
			$this->load->view('admin/deal',$data);
		}
		else
		{
			redirect(base_url().'administrator');
		}
	}
	public function viewdeal()
	{
	    $data['title']="The Allchemy";
		$data['description']="The Allchemy";
		$data['keyword']="The Allchemy";
		if($this->session->has_userdata('username')!='')
		{
			$data['select_category']=$this->Category_model->select_all('tbl_category');
			// $data['select_subcategory']=$this->Subcategory_model->select_all('tbl_subcategory');
			$data['select_product']=$this->Deal_model->select_all_record('tbl_today_deal');
			$date=date('Y-m-d');
		    $data['select_today_vender']=$this->Administrator_model->select_vender_numbers('tbl_vender_login',$date);
			$this->load->view('admin/view-deal',$data);
		}
		else
		{
			redirect(base_url().'administrator');
		}
	}

	public function dealview($productID=0)
	{
		$data['title']="The Allchemy";
		$data['description']="The Allchemy";
		$data['keyword']="The Allchemy";
		$productId=base64_decode(urldecode($productID));
		$data['product_select']=$this->Deal_model->select_product('tbl_today_deal',$productId);
		if($data['product_select'])
		{
		    $data['select_today_vender']=$this->Administrator_model->select_vender_numbers('tbl_vender_login',$date);
			$this->load->view('admin/deal-single',$data);
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Something went wrong.');
			redirect(base_url().'admin/deal');
		}
	}
	public function productdelete($productID=0)
	{
		$productId=base64_decode(urldecode($productID));
		$product_delete=$this->Product_model->delete_product('tbl_today_deal',$productId);
		if($product_delete)
		{
			$this->session->set_flashdata('info-message-success', 'Meal has been deleted.');
			redirect(base_url().'admin/view-deal');
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Something went wrong.');
			redirect(base_url().'admin/view-deal');
		}
	}
	
	public function dealinsert()
	{
		$this->form_validation->set_rules('category', 'Category', 'required');
		// $this->form_validation->set_rules('subcategory', 'Subcategory', 'required');
		$this->form_validation->set_rules('product', 'Product', 'required');
// 		$this->form_validation->set_rules('price', 'Price', 'required');
		if($this->form_validation->run())
		{
			$category = trim($this->input->post('category'));
			// $subcategory = trim($this->input->post('subcategory')); 
			$product = ucfirst(trim($this->input->post('product')));
			$content = trim($this->input->post('content'));
			$price = trim($this->input->post('price')); 
						$newprice = trim($this->input->post('newprice')); 

			$data['select_product_ins']=$this->Product_model->select_product_ins('tbl_product',$product,$category);
			if($data['select_product_ins']>0)
			{
        		$this->session->set_flashdata('info-message-error', 'Meal already exists.');
				redirect(base_url().'admin/product');
			}
			else
			{
        		$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '',$product);
	    		$clean = strtolower(trim($clean, '-'));
	    		$clean = preg_replace("/[\/_|+ -]+/", '-', $clean);
	    		$web_slug=$clean;
	    		// Count total files
      			$countfiles = count($_FILES['images']['name']);
      			// Looping all files
     			for($i=0;$i<$countfiles;$i++)
     			{
        			if(!empty($_FILES['images']['name'][$i]))
        			{
          				// Define new $_FILES array - $_FILES['file']
          				$_FILES['file']['name'] = $_FILES['images']['name'][$i];
          				$_FILES['file']['type'] = $_FILES['images']['type'][$i];
          				$_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
          				$_FILES['file']['error'] = $_FILES['images']['error'][$i];
          				$_FILES['file']['size'] = $_FILES['images']['size'][$i];
          				// Set preference
          				$config['upload_path'] = './assets/images/products/'; 
          				$config['allowed_types'] = 'jpg|jpeg|png|gif';
          				// $config['max_size'] = '5000'; // max_size in kb
          				$config['file_name'] = "deal".time().$_FILES['images']['name'][$i];
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

            				$config1 = array();
                			$config1['image_library'] = 'gd2'; 
                			$config1['source_image'] = $uploadData['full_path'];
                			$config1['new_image'] = './assets/images/products/thumb';
                			$config1['create_thumb'] = false;
                			$config1['quality'] = 80;
                			$config1['height'] = 500;
                			$config1['width'] = 500;

                			$this->load->library('image_lib',$config1);
                			$this->image_lib->initialize($config1);
                			$this->image_lib->resize();
                			$this->image_lib->clear();
          				} 
        			}
      			}
      			$p_name=implode(',', $data['filenames']);
	    		// $config['upload_path']   = './assets/images/product/'; 
       //  		$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
       //  		$p_name= "product".time().$_FILES['image']['name'];
       //  		$config['file_name'] = "product".time().$_FILES['image']['name'];
       //  		$this->load->library('upload', $config);
        		if(!empty($_FILES['images']['name'][0]))
        		{
        			$data=array(
						'categoryID' => $category,
						// 'subcategoryID' => $subcategory,
						'title' => $product,
						'product_description' => $content,
						'price' => $price,
						'new_price' => $newprice,
						'image' => $p_name,
						'web_slug' => $web_slug,
						'added_date' =>Date('Y-m-d'),
						'status' => '1'
					);
        		}
        		else
        		{
        			$data=array(
						'categoryID' => $category,
						// 'subcategoryID' => $subcategory,
						'title' => $product,
						'product_description' => $content,
						'price' => $price,
						'new_price' => $newprice,
						'web_slug' => $web_slug,
						'added_date' =>Date('Y-m-d'),
						'status' => '1'
					);
        		}
				$insert=$this->Administrator_model->insert('tbl_today_deal',$data);	
				if(isset($insert))
				{
					$this->session->set_flashdata('info-message-success', 'Meal has been inserted.');
					redirect(base_url().'admin/deal');
				}
				else
				{
					$this->session->set_flashdata('info-message-error', 'Something went wrong.');
					redirect(base_url().'admin/deal');
				}
			}
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Fill form properly.');
			redirect(base_url().'admin/deal');
		}
	}

	public function dealedit($productID=0)
	{
		$productId=base64_decode(urldecode($productID));
		$data['product_select']=$this->Deal_model->select_product('tbl_today_deal',$productId);
		if($data['product_select'])
		{
			
			$data['select_category']=$this->Category_model->select_all('tbl_category');
			// $data['select_subcategory']=$this->Subcategory_model->select_all('tbl_subcategory');
			$date=date('Y-m-d');
		    $data['select_today_vender']=$this->Administrator_model->select_vender_numbers('tbl_vender_login',$date);
			$this->load->view('admin/deal',$data);
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Something went wrong.');
			redirect(base_url().'admin/deal');
		}
	}

	public function dealupdate()
	{
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('product', 'Product', 'required');
// 		$this->form_validation->set_rules('price', 'Price', 'required');
		if($this->form_validation->run())
		{
			$category = trim($this->input->post('category'));
			// $subcategory = trim($this->input->post('subcategory')); 
			$product = ucfirst(trim($this->input->post('product')));
			$content = trim($this->input->post('content'));
			$price = trim($this->input->post('price'));
			$newprice = trim($this->input->post('newprice'));
			$productID = trim($this->input->post('productID'));
			$data['select_product_edit']=$this->Product_model->select_product_edit('tbl_today_deal',$product,$productID,$category,$venderID);
			if($data['select_product_edit']>0)
			{
        		$this->session->set_flashdata('info-message-error', 'Deal Kitem already exists.');
				redirect(base_url().'admin/product');
			}
			else
			{
        		$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '',$product);
	      		$clean = strtolower(trim($clean, '-'));
	     		$clean = preg_replace("/[\/_|+ -]+/", '-', $clean);
	      		$web_slug=$clean;
        		// Count total files
      			 $countfiles = count($_FILES['images']['name']);
      			 echo $countfiless=implode(',',$_FILES['images']['name']);
      			if(!empty($countfiless))
        		{
      				// Looping all files
     				for($i=0;$i<$countfiles;$i++)
     				{
        				if(!empty($_FILES['images']['name'][$i]))
        				{
          					// Define new $_FILES array - $_FILES['file']
          					$_FILES['file']['name'] = $_FILES['images']['name'][$i];
          					$_FILES['file']['type'] = $_FILES['images']['type'][$i];
          					$_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
          					$_FILES['file']['error'] = $_FILES['images']['error'][$i];
          					$_FILES['file']['size'] = $_FILES['images']['size'][$i];
          					// Set preference
          					$config['upload_path'] = './assets/images/meal/'; 
          					$config['allowed_types'] = 'jpg|jpeg|png|gif';
          					// $config['max_size'] = '5000'; // max_size in kb
          					$config['file_name'] = "deal".time().$_FILES['images']['name'][$i];
          					//Load upload library
          					$this->load->library('upload',$config);           				
          					// File upload
          					if($this->upload->do_upload('file'))
          					{
          						$uploadData = $this->upload->data();
            					$filename = $uploadData['file_name'];
            					// Initialize array
            					$data['filenames'][] = $filename;
          					} 
        				}
      				}
      				$p_name=implode(',', $data['filenames']);
	    			
        			$data=array(
						'categoryID' => $category,
						// 'subcategoryID' => $subcategory,
						'title' => $product,
						'product_description' => $content,
						'price' => $price,
						'new_price' => $newprice,
						'image' => $p_name,
						'web_slug' => $web_slug,
						'edited_date' =>Date('Y-m-d'),
						'status' => '1'
					);
        		}
        		else
        		{
        			$data=array(
        				'categoryID' => $category,
						// 'subcategoryID' => $subcategory,
						'title' => $product,
						'product_description' => $content,
						'price' => $price,
						'new_price' => $newprice,
						'web_slug' => $web_slug,
						'edited_date' =>Date('Y-m-d'),
						'status' => '1'
					);
        		}
				$update=$this->Product_model->update_product('tbl_today_deal',$data,$productID);	
				if(isset($update))
				{
					$this->session->set_flashdata('info-message-success', 'Deal Item has been updated.');
					redirect(base_url().'admin/deal');
				}
				else
				{
					$this->session->set_flashdata('info-message-error', 'Something went wrong.');
					redirect(base_url().'admin/deal');
				}
			}
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Fill form properly.');
			redirect(base_url().'admin/deal');
		}
	}
}
