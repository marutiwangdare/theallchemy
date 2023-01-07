<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
	{

	parent::__construct();
	$this->load->helper('form');
	$this->load->library('form_validation');
	// $this->mg = array(
 //            'userID' => $this->session->userdata('userSerial'),
 //            'ip' => md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT'])
 //        );	
	}
	public function index()
	{
	    $data['title']="Home - Ufove";
		$data['description']="Ufove";
		$data['keyword']="Ufove";
		// $data['get_slider']=$this->Administrator_model->get_slider();
		// $data['get_home_gallery']=$this->Administrator_model->get_home_gallery();
		// $data['get_category']=$this->Administrator_model->get_category();
		// $data['get_address_info']=$this->Administrator_model->get_address_info();
		// $data['get_header_cart_count']=$this->Administrator_model->get_header_cart_count($this->mg['userID'],$this->mg['ip']);
		$this->load->view('admin/admin-home',$data);
	}
	public function about()
	{
		$data['title']="About Us - Ufove";
		$data['description']="Ufove";
		$data['keyword']="Ufove";
	// 	// $data['get_address_info']=$this->Administrator_model->get_address_info();
	// 	// $data['get_about_info']=$this->Administrator_model->get_about();
	// 	// $data['get_category']=$this->Administrator_model->get_category();
	// 	// $data['get_header_cart_count']=$this->Administrator_model->get_header_cart_count($this->mg['userID'],$this->mg['ip']);
		$this->load->view('about',$data);
	}
	public function gallery()
	{
		$data['title']="Gallery - Ufove";
		$data['description']="Ufove";
		$data['keyword']="Ufove";
		// $data['get_address_info']=$this->Administrator_model->get_address_info();
		// $data['get_gallery']=$this->Administrator_model->get_gallery();
		// $data['get_category']=$this->Administrator_model->get_category();
		// $data['get_header_cart_count']=$this->Administrator_model->get_header_cart_count($this->mg['userID'],$this->mg['ip']);
		$this->load->view('gallery',$data);
	}
	public function services()
	{
		$data['title']="Services - Ufove";
		$data['description']="Ufove";
		$data['keyword']="Ufove";
		// $data['get_address_info']=$this->Administrator_model->get_address_info();
		// $data['get_category_name']=$this->Administrator_model->get_category_name($category_slug);
		// $data['get_category']=$this->Administrator_model->get_category();
		// $data['get_meal']=$this->Administrator_model->get_meal($category_slug);
		// $data['get_header_cart_count']=$this->Administrator_model->get_header_cart_count($this->mg['userID'],$this->mg['ip']);
		$this->load->view('services',$data);
	}
	// public function menu_detail($category_slug=0,$meal_slug=0)
	// {
	// 	$data['title']="Menu Detail - Ufove";
	// 	$data['description']="Ufove";
	// 	$data['keyword']="Ufove";
	// 	// $data['get_address_info']=$this->Administrator_model->get_address_info();
	// 	// $data['get_category_name']=$this->Administrator_model->get_category_name($category_slug);
	// 	// $data['get_category']=$this->Administrator_model->get_category();
	// 	// $data['get_meal']=$this->Administrator_model->get_meal($category_slug);
	// 	// $data['get_meal_deatil']=$this->Administrator_model->get_meal_deatil($category_slug,$meal_slug);
	// 	// $data['get_header_cart_count']=$this->Administrator_model->get_header_cart_count($this->mg['userID'],$this->mg['ip']);
	// 	$this->load->view('menu-detail',$data);
	// }
	public function appointment()
	{
		$data['title']="Gift Cards - Ufove";
		$data['description']="Ufove";
		$data['keyword']="Ufove";
	// 	// $data['get_address_info']=$this->Administrator_model->get_address_info();
	// 	// $data['get_category']=$this->Administrator_model->get_category();
	// 	// $data['get_header_cart_count']=$this->Administrator_model->get_header_cart_count($this->mg['userID'],$this->mg['ip']);
		$this->load->view('appointment',$data);
	}
	public function products()
	{
		$data['title']="Products- Ufove";
		$data['description']="Ufove";
		$data['keyword']="Ufove";
	// 	// $data['get_address_info']=$this->Administrator_model->get_address_info();
	// 	// $data['get_category']=$this->Administrator_model->get_category();
	// 	// $data['get_product']=$this->Administrator_model->get_product();
	// 	// $data['get_header_cart_count']=$this->Administrator_model->get_header_cart_count($this->mg['userID'],$this->mg['ip']);
		$this->load->view('products',$data);
	}
	// public function special_order_detail($product_slug=0)
	// {
	// 	$data['title']="Special Orders Detail - Ufove";
	// 	$data['description']="Ufove";
	// 	$data['keyword']="Ufove";
	// 	// $data['get_address_info']=$this->Administrator_model->get_address_info();
	// 	// $data['get_category']=$this->Administrator_model->get_category();
	// 	// $data['get_product']=$this->Administrator_model->get_product();
	// 	// $data['get_product_deatil']=$this->Administrator_model->get_product_deatil($product_slug);
	// 	// $data['get_header_cart_count']=$this->Administrator_model->get_header_cart_count($this->mg['userID'],$this->mg['ip']);
	// 	$this->load->view('special-order-detail',$data);
	// }
	public function contact()
	{
		$data['title']="Contact Us - Ufove";
		$data['description']="Ufove";
		$data['keyword']="Ufove";
	// 	// $data['get_address_info']=$this->Administrator_model->get_address_info();
	// 	// $data['get_category']=$this->Administrator_model->get_category();
	// 	// $data['get_header_cart_count']=$this->Administrator_model->get_header_cart_count($this->mg['userID'],$this->mg['ip']);
		$this->load->view('contact',$data);
	}
	// public function view_cart()
	// {
	// 	$data['title']="Cart - Ufove";
	// 	$data['description']="Ufove";
	// 	$data['keyword']="Ufove";
	// 	// $data['get_address_info']=$this->Administrator_model->get_address_info();
	// 	// $data['get_category']=$this->Administrator_model->get_category();
	// 	// $data['get_cart_data']=$this->Administrator_model->get_cart_data($this->mg['userID'],$this->mg['ip']);
	// 	// $data['get_header_cart_count']=$this->Administrator_model->get_header_cart_count($this->mg['userID'],$this->mg['ip']);
	// 	$this->load->view('cart',$data);
	// }
	// public function my_orders()
	// {
	// 	$data['title']="My Order - Ufove";
	// 	$data['description']="Ufove";
	// 	$data['keyword']="Ufove";
	// 	// $data['get_address_info']=$this->Administrator_model->get_address_info();
	// 	// $data['get_category']=$this->Administrator_model->get_category();
	// 	// $data['get_cart_data']=$this->Administrator_model->get_cart_data($this->mg['userID'],$this->mg['ip']);
	// 	// $data['get_header_cart_count']=$this->Administrator_model->get_header_cart_count($this->mg['userID'],$this->mg['ip']);
	// 	// $data['get_order_history']=$this->Administrator_model->get_order_history($this->mg['userID']);
	// 	$this->load->view('order_history',$data);
	// }
	
	// public function confirm($order_id=0)
	// {
	// 	$data['title']="Confirm - Ufove";
	// 	$data['description']="Ufove";
	// 	$data['keyword']="Ufove";
	// 	// $data['get_address_info']=$this->Administrator_model->get_address_info();
	// 	// $data['get_category']=$this->Administrator_model->get_category();
	// 	// $data['get_cart_data']=$this->Administrator_model->get_cart_data($this->mg['userID'],$this->mg['ip']);
	// 	// $data['get_header_cart_count']=$this->Administrator_model->get_header_cart_count($this->mg['userID'],$this->mg['ip']);
	// 	$this->load->view('confirm',$data);
	// }
	// public function thanks()
	// {
	// 	$data['title']="Thanks - Ufove";
	// 	$data['description']="Ufove";
	// 	$data['keyword']="Ufove";
	// 	// $data['get_address_info']=$this->Administrator_model->get_address_info();
	// 	// $data['get_about_info']=$this->Administrator_model->get_about();
	// 	// $data['get_category']=$this->Administrator_model->get_category();
	// 	// $data['get_header_cart_count']=$this->Administrator_model->get_header_cart_count($this->mg['userID'],$this->mg['ip']);
	// 	$this->load->view('thanks',$data);
	// }
	// public function giftsmail()
	// {
	//     $this->form_validation->set_rules('name', 'Name', 'required');
	// 	$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
	// 	$this->form_validation->set_rules('phone', 'Phone Number', 'required|regex_match[/^[0-9]{10}$/]');
	// 	$this->form_validation->set_rules('address', 'Address', 'required');

	// 	if ($this->form_validation->run())
	// 	{
 //        $name = trim($this->input->post('name'));
 // 	    $email = trim($this->input->post('email')); 
 // 		$phone = trim($this->input->post('phone'));   
	// 	$address = htmlentities($this->input->post('address')); 
	// 	$data=array(
	// 					  'name'=> $name,
	// 					  'email' => $email, 
	// 					  'phone' => $phone,
	// 					  'address' => $address,
	// 					  'date' =>Date('Y-m-d'),
	// 					  'status' => '1'
	// 					  ); 
	// 	$insert=$this->Administrator_model->insert('tbl_gifts',$data);	
	// 	if(isset($insert))
	// 	{			
	// 	$from_email = "oldworldgingerbread@gmail.com"; 
	//     $to_email = $email; 
	    
 //        			//Load email library 
	// 		$this->load->library('email'); 
	// 		$this->email->set_mailtype("html");
			
	// 		$this->email->from($from_email, 'Ufove'); 
	// 		$this->email->to($email);
			
	// 		$this->email->subject('Gift Cards Ufove'); 
	//     	$this->email->from($from_email, 'Ufove'); 
	//     	$this->email->to($to_email);
	//     	$this->email->subject('Gift Cards Ufove'); 
	//     	$email_body ="<table border='0' cellpadding='10'>
	//     	<tr><td><b>Name</b></td><td>".$name."</td></tr>
	//     	<tr><td><b>Email</b></td><td>".$email."</td></tr>
	//     	<tr><td><b>Phone Number</b></td><td>".$phone."</td></tr>
	//     	<tr><td><b>Address</b></td><td>".$address."</td></tr>
	//     	<tr><td><b>Subject</b></td><td>Gift Cards Ufove</td></tr>
	//     	</table>";
	    
	//     	$this->email->message($email_body); 
	  
 //        	if($this->email->send())
	//     	{
	//         	echo "thanks";
	// 	   		$this->session->set_flashdata('info_message_success', 'Dear '.$name.', Thanks for purchasing gift');
	//     	}
	//     	else
 //    		{
 //    	    	echo $this->email->print_debugger();
 //     	    	$this->session->set_flashdata('info_message_error', 'mail error');
	//     	}
	// 	}
	// }
	// 	else
 //    		{
 //    	    	echo $this->email->print_debugger();
 //     	    	$this->session->set_flashdata('info_message_error', 'Fill form properly');
	//     	}
	//     redirect(base_url().'gift-card');

	// }
	
	
	// public function contactmail()
	// {
	//     $this->form_validation->set_rules('name', 'Name', 'required');
	// 	$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
	// 	$this->form_validation->set_rules('phone', 'Phone Number', 'required|regex_match[/^[0-9]{10}$/]');
	// 	$this->form_validation->set_rules('message', 'Message', 'required');

	// 	if ($this->form_validation->run())
	// 	{
 //        $name = trim($this->input->post('name'));
 // 	    $email = trim($this->input->post('email')); 
 // 		$phone = trim($this->input->post('phone')); 
	// 	$subject = trim($this->input->post('subject'));   
	// 	$message = htmlentities($this->input->post('message')); 
	// 	$data=array(
	// 					  'name'=> $name,
	// 					  'email' => $email, 
	// 					  'phone' => $phone,
	// 					  'subject' => $subject, 
	// 					  'message' => $message,
	// 					  'date' =>Date('Y-m-d'),
	// 					  'status' => '1'
	// 					  ); 
	// 	$insert=$this->Administrator_model->insert('tbl_contact',$data);	
	// 	if(isset($insert))
	// 	{			
	// 	$from_email = $email; 
	//     $to_email = "oldworldgingerbread@gmail.com"; 
	    
 //        			//Load email library 
	// 		$this->load->library('email'); 
	// 		$this->email->set_mailtype("html");
			
	// 		$this->email->from($from_email, $name); 
	// 		$this->email->to($email);
			
	// 		$this->email->subject('Contact Queries for Ufove'); 
	//     	$this->email->from($from_email, $name); 
	//     	$this->email->to($to_email);
	//     	$this->email->subject('Contact Queries for Ufove'); 
	//     	$email_body ="<table border='0' cellpadding='10'>
	//     	<tr><td><b>Name</b></td><td>".$name."</td></tr>
	//     	<tr><td><b>Email</b></td><td>".$email."</td></tr>
	//     	<tr><td><b>Phone Number</b></td><td>".$phone."</td></tr>
	//     	<tr><td><b>Subject</b></td><td>".$subject."</td></tr>
	//     	<tr><td><b>Message</b></td><td>".$message."</td></tr>
	//     	</table>";
	    
	//     	$this->email->message($email_body); 
	  
 //        	if($this->email->send())
	//     	{
	//         	echo "thanks";
	// 	   		$this->session->set_flashdata('info_message_success', 'Dear '.$name.', Your mail sent successfully');
	//     	}
	//     	else
 //    		{
 //    	    	echo $this->email->print_debugger();
 //     	    	$this->session->set_flashdata('info_message_error', 'Fill form properly');
	//     	}
	// 	}
	// }
	// 	else
 //    		{
 //    	    	echo $this->email->print_debugger();
 //     	    	$this->session->set_flashdata('info_message_error', 'Fill form properly');
	//     	}
	//     redirect(base_url().'contact-us');

	// }
	// public function newslettermail()
	// {
	// 	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        
	// 	if ($this->form_validation->run())
	// 	{
	// 		$email = trim($this->input->post('email')); 
 // 			$data=array(
	// 					  'email' => $email, 
	// 					  'date' =>Date('Y-m-d'),
	// 					  'status' => '1'
	// 					  ); 
	// 		$insert=$this->Administrator_model->insert('tb_subscribers',$data);	
	// 		if(isset($insert))
	// 		{			
	// 			$email = trim($this->input->post('email'));    
	// 			$from_email = $email;
	//     		$to_email = "oldworldgingerbread@gmail.com"; 
	    
 //        			//Load email library 
	// 			$this->load->library('email'); 
	// 			$this->email->set_mailtype("html");
			
	// 			$this->email->from($from_email, $email); 
	// 			$this->email->to($email);
			
	// 			$this->email->subject('Ufove Subscription'); 
	//     		$this->email->from($from_email, $email); 
	//     		$this->email->to($to_email);
	//     		$this->email->subject('Ufove Subscription'); 
	//     		$email_body ="<table border='0' cellpadding='10'>
	//     		<tr><td><b>Email</b></td><td>".$email."</td></tr>
	//     		<tr><td><b>Date</b></td><td>".Date('d-m-Y')."</td></tr>
	//     		</table>";
	    
	//     		$this->email->message($email_body); 
	  
 //        		if($this->email->send())
	//     		{
	//         		echo "thanks";
	// 	   			$this->session->set_flashdata('info_message_success', 'Dear '.$email.', Your mail sent successfully');
	//     		}
	//     		else
 //    			{
 //    	   			echo $this->email->print_debugger();
 //     	    		$this->session->set_flashdata('info_message_error', 'Fill the form properly');
	//     		}
	//     	}
	// 	}
	// 	else
 //    	{
 //    	   	echo $this->email->print_debugger();
 //     	    $this->session->set_flashdata('info_message_error', 'Fill the form properly');
	//     }
	// 	redirect(base_url());
	// }
}
