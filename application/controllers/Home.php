<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
parent::__construct();
        $this->load->helper('form');
		$this->load->library('form_validation');
		$this->mg = array(
            'userID' => $this->session->userdata('userID'),
            'ip' => md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT'])
        );	//load cart library

$this->load->library('cart');

	}
	public function index()
	{
		$data['title']='The Allchemy | Buy Best Home Decor Products Online in The Allchemy @ Upto 35% OFF
Description: The Allchemy Home Decor Items: Buy Home Decor Online in India. Choose a traditional home decoration items online wallart, lamps & clocks. Get best decorative items ⭐Upto 35% OFF⭐ Free Shipping Across India.';
	 $data['description']='Handicraft items are an excellent way to express yourself and share your creativity. Discover how to create beautiful handmade gifts for friends and family!

The Allchemy is a unique gift store where you can buy everything from candles to jewelry. Find out more about their products here!

Handicrafts are a great way to show off your artistic side. Explore our collection of unique gifts and accessories today!';

		$data['select_category']=$this->Home_model->select_category();
      	$data['select_categorys']=$this->Home_model->select_categorys();
      	      	$data['select_categorysh']=$this->Home_model->select_categorysh();

		$data['select_product']=$this->Home_model->select_product();
		$data['select_deal']=$this->Home_model->select_deal();
		$this->load->view('home',$data);
	}
	
		public function test()
	{
		$data['title']='Home | The Allchemy';
	 $data['description']='Handicraft items are an excellent way to express yourself and share your creativity. Discover how to create beautiful handmade gifts for friends and family!

The Allchemy is a unique gift store where you can buy everything from candles to jewelry. Find out more about their products here!

Handicrafts are a great way to show off your artistic side. Explore our collection of unique gifts and accessories today!';

		$data['select_category']=$this->Home_model->select_category();
      	$data['select_categorys']=$this->Home_model->select_categorys();
		$data['select_product']=$this->Home_model->select_product();
		$data['select_deal']=$this->Home_model->select_deal();
		$this->load->view('test',$data);
	}
	
		public function franchise()
	{
		$data['title']='Franchise | The Allchemy';
	 $data['description']='Handicraft items are an excellent way to express yourself and share your creativity. Discover how to create beautiful handmade gifts for friends and family!

The Allchemy is a unique gift store where you can buy everything from candles to jewelry. Find out more about their products here!

Handicrafts are a great way to show off your artistic side. Explore our collection of unique gifts and accessories today!';

		$data['select_about']=$this->Home_model->select_about();
			$data['select_category']=$this->Home_model->select_category();
		$data['select_products']=$this->Home_model->select_products($slug);
		$data['select_cart_data']=$this->Cart_model->select_cart_data('tbl_cart',$this->mg['userID'],$this->mg['ip']);
	    $data['cart_count']=$this->Cart_model->cart_count('tbl_cart',$this->mg['userID'],$this->mg['ip']);
    	$this->load->view('franchise',$data);
	}
	
	//
		public function termsconditions()
	{
		$data['title']='Terms & Conditions | The Allchemy';
	 $data['description']='Handicraft items are an excellent way to express yourself and share your creativity. Discover how to create beautiful handmade gifts for friends and family!

The Allchemy is a unique gift store where you can buy everything from candles to jewelry. Find out more about their products here!

Handicrafts are a great way to show off your artistic side. Explore our collection of unique gifts and accessories today!';

		$data['select_about']=$this->Home_model->select_about();
			$data['select_category']=$this->Home_model->select_category();
		$data['select_products']=$this->Home_model->select_products($slug);
		$data['select_cart_data']=$this->Cart_model->select_cart_data('tbl_cart',$this->mg['userID'],$this->mg['ip']);
	    $data['cart_count']=$this->Cart_model->cart_count('tbl_cart',$this->mg['userID'],$this->mg['ip']);
    	$this->load->view('termsconditions',$data);
	}
		public function delivery()
	{
		$data['title']='Delivery Policy | The Allchemy';
	 $data['description']='Handicraft items are an excellent way to express yourself and share your creativity. Discover how to create beautiful handmade gifts for friends and family!

The Allchemy is a unique gift store where you can buy everything from candles to jewelry. Find out more about their products here!

Handicrafts are a great way to show off your artistic side. Explore our collection of unique gifts and accessories today!';

		$data['select_about']=$this->Home_model->select_about();
			$data['select_category']=$this->Home_model->select_category();
		$data['select_products']=$this->Home_model->select_products($slug);
		$data['select_cart_data']=$this->Cart_model->select_cart_data('tbl_cart',$this->mg['userID'],$this->mg['ip']);
	    $data['cart_count']=$this->Cart_model->cart_count('tbl_cart',$this->mg['userID'],$this->mg['ip']);
    	$this->load->view('delivery',$data);
	}
		public function shipping()
	{
		$data['title']='Shipping Policy | The Allchemy';
	 $data['description']='Handicraft items are an excellent way to express yourself and share your creativity. Discover how to create beautiful handmade gifts for friends and family!

The Allchemy is a unique gift store where you can buy everything from candles to jewelry. Find out more about their products here!

Handicrafts are a great way to show off your artistic side. Explore our collection of unique gifts and accessories today!';

		$data['select_about']=$this->Home_model->select_about();
			$data['select_category']=$this->Home_model->select_category();
		$data['select_products']=$this->Home_model->select_products($slug);
		$data['select_cart_data']=$this->Cart_model->select_cart_data('tbl_cart',$this->mg['userID'],$this->mg['ip']);
	    $data['cart_count']=$this->Cart_model->cart_count('tbl_cart',$this->mg['userID'],$this->mg['ip']);
    	$this->load->view('shipping',$data);
	}
	
	
	
		public function corporate()
	{
		$data['title']='Corporate Gift Items | The Allchemy';
	 $data['description']='Handicraft items are an excellent way to express yourself and share your creativity. Discover how to create beautiful handmade gifts for friends and family!

The Allchemy is a unique gift store where you can buy everything from candles to jewelry. Find out more about their products here!

Handicrafts are a great way to show off your artistic side. Explore our collection of unique gifts and accessories today!';

		$data['select_about']=$this->Home_model->select_about();
			$data['select_category']=$this->Home_model->select_category();
		$data['select_products']=$this->Home_model->select_products($slug);
		$data['select_products_corporate']=$this->Home_model->select_products_corporate();
     	$data['select_cart_data']=$this->Cart_model->select_cart_data('tbl_cart',$this->mg['userID'],$this->mg['ip']);
	    $data['cart_count']=$this->Cart_model->cart_count('tbl_cart',$this->mg['userID'],$this->mg['ip']);
    	$this->load->view('corporate',$data);
	}
	
	public function anniversary() {
	    
	    	$data['title']='Anniversary Gift Items | The Allchemy';
	 $data['description']='Handicraft items are an excellent way to express yourself and share your creativity. Discover how to create beautiful handmade gifts for friends and family!

The Allchemy is a unique gift store where you can buy everything from candles to jewelry. Find out more about their products here!

Handicrafts are a great way to show off your artistic side. Explore our collection of unique gifts and accessories today!';

		$data['select_about']=$this->Home_model->select_about();
			$data['select_category']=$this->Home_model->select_category();
		$data['select_products']=$this->Home_model->select_products($slug);
		$data['select_products_anniversary']=$this->Home_model->select_products_anniversary();
     	$data['select_cart_data']=$this->Cart_model->select_cart_data('tbl_cart',$this->mg['userID'],$this->mg['ip']);
	    $data['cart_count']=$this->Cart_model->cart_count('tbl_cart',$this->mg['userID'],$this->mg['ip']);
    	$this->load->view('anniversary',$data);
	}
	
	
		public function birthday() {
	    
	    	$data['title']='Birthday Gift Items | The Allchemy';
	 $data['description']='Handicraft items are an excellent way to express yourself and share your creativity. Discover how to create beautiful handmade gifts for friends and family!

The Allchemy is a unique gift store where you can buy everything from candles to jewelry. Find out more about their products here!

Handicrafts are a great way to show off your artistic side. Explore our collection of unique gifts and accessories today!';

		$data['select_about']=$this->Home_model->select_about();
			$data['select_category']=$this->Home_model->select_category();
		$data['select_products']=$this->Home_model->select_products($slug);
		$data['select_products_anniversary']=$this->Home_model->select_products_anniversary();
     	$data['select_cart_data']=$this->Cart_model->select_cart_data('tbl_cart',$this->mg['userID'],$this->mg['ip']);
	    $data['cart_count']=$this->Cart_model->cart_count('tbl_cart',$this->mg['userID'],$this->mg['ip']);
    	$this->load->view('birthday',$data);
	}

	
			public function reviews()
	{
		$data['title']='The Allchemy | Share Your Reviews';
	 $data['description']='Handicraft items are an excellent way to express yourself and share your creativity. Discover how to create beautiful handmade gifts for friends and family!

The Allchemy is a unique gift store where you can buy everything from candles to jewelry. Find out more about their products here!

Handicrafts are a great way to show off your artistic side. Explore our collection of unique gifts and accessories today!';

		$data['select_about']=$this->Home_model->select_about();
			$data['select_category']=$this->Home_model->select_category();
		$data['select_products']=$this->Home_model->select_products($slug);
		$data['select_cart_data']=$this->Cart_model->select_cart_data('tbl_cart',$this->mg['userID'],$this->mg['ip']);
	    $data['cart_count']=$this->Cart_model->cart_count('tbl_cart',$this->mg['userID'],$this->mg['ip']);
    	$this->load->view('reviews',$data);
	}
	
	
	
	public function addreview(){
	    
	    $this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('review', 'Review', 'required');
		if($this->form_validation->run())
		{
			$r_name = trim($this->input->post('name')); 
			$email = trim($this->input->post('email'));
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
				'email' => $email,
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
				'email' => $email,
				'review' => $review,
				'added_date' =>Date('Y-m-d'),
				'status' => '1'
				);
        	}
			$insert=$this->Administrator_model->insert('tbl_review',$data);	
			if(isset($insert))
			{
				$this->session->set_flashdata('info_message_success', 'Thanks for your Feedback.');
				redirect(base_url().'reviews');
			}
			else
			{
				$this->session->set_flashdata('info-message-error', 'Something went wrong');
				redirect(base_url().'reviews');
			}
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Fill form properly');
			redirect(base_url().'reviews');
		}
	}
	
	
		public function newsletter(){
	    
	    $this->form_validation->set_rules('email', 'Email', 'required');
	//	$this->form_validation->set_rules('review', 'Review', 'required');
		if($this->form_validation->run())
		{
			$email = trim($this->input->post('email'));
		//	$review = trim($this->input->post('review')); 
			$config['upload_path']   = './assets/images/review/'; 
        	$config['allowed_types'] = 'jpg|png|jpeg'; 
        	$re_name= "review".time().$_FILES['image']['name'];
        	$config['file_name'] = "review".time().$_FILES['image']['name']; 
        	$this->load->library('upload', $config);
        	if ($this->upload->do_upload('image'))
        	{
        		$data=array(
			//	'name' => $r_name,
				'email' => $email,
			//	'image' => $re_name,
			//	'review' => $review,
				'added_date' =>Date('Y-m-d'),
				'status' => '1'
				);
        	}
        	else
        	{
        		$data=array(
			//	'name' => $r_name,
				'email' => $email,
				//'review' => $review,
				'added_date' =>Date('Y-m-d'),
				'status' => '1'
				);
        	}
			$insert=$this->Administrator_model->insert('tbl_newsletter',$data);	
			if(isset($insert))
			{
				$this->session->set_flashdata('info_message_success', 'Thanks for your Feedback.');
				redirect(base_url().'home');
			}
			else
			{
				$this->session->set_flashdata('info-message-error', 'Something went wrong');
				redirect(base_url().'home');
			}
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Fill form properly');
			redirect(base_url().'reviews');
		}
	}

	
		public function my_account()
	{
		$data['title']='My Account | The Allchemy';
	 $data['description']='Handicraft items are an excellent way to express yourself and share your creativity. Discover how to create beautiful handmade gifts for friends and family!

The Allchemy is a unique gift store where you can buy everything from candles to jewelry. Find out more about their products here!

Handicrafts are a great way to show off your artistic side. Explore our collection of unique gifts and accessories today!';

		$data['select_about']=$this->Home_model->select_about();
			$data['select_category']=$this->Home_model->select_category();
		$data['select_products']=$this->Home_model->select_products($slug);
		$data['select_cart_data']=$this->Cart_model->select_cart_data('tbl_cart',$this->mg['userID'],$this->mg['ip']);
	    $data['cart_count']=$this->Cart_model->cart_count('tbl_cart',$this->mg['userID'],$this->mg['ip']);
    	$this->load->view('my_account',$data);
	}
	
	public function category()
	{
	
		$data['title']='Product Category | The Allchemy';
	 $data['description']='Handicraft items are an excellent way to express yourself and share your creativity. Discover how to create beautiful handmade gifts for friends and family!

The Allchemy is a unique gift store where you can buy everything from candles to jewelry. Find out more about their products here!

Handicrafts are a great way to show off your artistic side. Explore our collection of unique gifts and accessories today!';	
		$data['select_category']=$this->Home_model->select_category();
		$this->load->view('category',$data);
	}
	public function about()
	{
		
		$data['title']='About Us | The Allchemy';
	 $data['description']='Handicraft items are an excellent way to express yourself and share your creativity. Discover how to create beautiful handmade gifts for friends and family!

The Allchemy is a unique gift store where you can buy everything from candles to jewelry. Find out more about their products here!

Handicrafts are a great way to show off your artistic side. Explore our collection of unique gifts and accessories today!';	
		$data['select_about']=$this->Home_model->select_about();
			$data['select_category']=$this->Home_model->select_category();
		$this->load->view('about',$data);
	}
	public function products($slug=NULL)
	{
		
		$data['title']='Shop Now | The Allchemy';
	 $data['description']='Handicraft items are an excellent way to express yourself and share your creativity. Discover how to create beautiful handmade gifts for friends and family!

The Allchemy is a unique gift store where you can buy everything from candles to jewelry. Find out more about their products here!

Handicrafts are a great way to show off your artistic side. Explore our collection of unique gifts and accessories today!';
		$data['select_about']=$this->Home_model->select_about();
			$data['select_category']=$this->Home_model->select_category();
		$data['select_products']=$this->Home_model->select_products($slug);
		$data['select_cart_data']=$this->Cart_model->select_cart_data('tbl_cart',$this->mg['userID'],$this->mg['ip']);
	    $data['cart_count']=$this->Cart_model->cart_count('tbl_cart',$this->mg['userID'],$this->mg['ip']);
       // $this->load->library('cart');
        $this->load->view('products',$data);
	}
	public function products_detail($slug=NULL)
	{
		
		$data['title']='Product Details | The Allchemy';
	 $data['description']='Handicraft items are an excellent way to express yourself and share your creativity. Discover how to create beautiful handmade gifts for friends and family!

The Allchemy is a unique gift store where you can buy everything from candles to jewelry. Find out more about their products here!

Handicrafts are a great way to show off your artistic side. Explore our collection of unique gifts and accessories today!';
		$data['select_about']=$this->Home_model->select_about();
		$data['select_category']=$this->Home_model->select_category();
		$data['select_products_detail']=$this->Home_model->select_products_detail($slug);
		$data['select_cart_data']=$this->Cart_model->select_cart_data('tbl_cart',$this->mg['userID'],$this->mg['ip']);
	    $data['cart_count']=$this->Cart_model->cart_count('tbl_cart',$this->mg['userID'],$this->mg['ip']);
    
		$this->load->view('products_detail',$data);
	}
	public function contact()
	{
		
		$data['title']='Contact Us | The Allchemy';
	 $data['description']='Handicraft items are an excellent way to express yourself and share your creativity. Discover how to create beautiful handmade gifts for friends and family!

The Allchemy is a unique gift store where you can buy everything from candles to jewelry. Find out more about their products here!

Handicrafts are a great way to show off your artistic side. Explore our collection of unique gifts and accessories today!';	
			$data['select_category']=$this->Home_model->select_category();
		$this->load->view('contact',$data);
	}
	
	public function privacy_policy()
	{
		
		$data['title']='Privacy Policy | The Allchemy';
	 $data['description']='Handicraft items are an excellent way to express yourself and share your creativity. Discover how to create beautiful handmade gifts for friends and family!

The Allchemy is a unique gift store where you can buy everything from candles to jewelry. Find out more about their products here!

Handicrafts are a great way to show off your artistic side. Explore our collection of unique gifts and accessories today!';
			$data['select_category']=$this->Home_model->select_category();
		$this->load->view('privacy',$data);
	}
	
	public function return_policy()
	{

		$data['title']='Return Policy | The Allchemy';
	 $data['description']='Handicraft items are an excellent way to express yourself and share your creativity. Discover how to create beautiful handmade gifts for friends and family!

The Allchemy is a unique gift store where you can buy everything from candles to jewelry. Find out more about their products here!

Handicrafts are a great way to show off your artistic side. Explore our collection of unique gifts and accessories today!';	
			$data['select_category']=$this->Home_model->select_category();
		$this->load->view('return',$data);
	}
	
	public function contact_query()
	{
	    
		$data['title']='Contact Submit | The Allchemy';
	 $data['description']='Handicraft items are an excellent way to express yourself and share your creativity. Discover how to create beautiful handmade gifts for friends and family!

The Allchemy is a unique gift store where you can buy everything from candles to jewelry. Find out more about their products here!

Handicrafts are a great way to show off your artistic side. Explore our collection of unique gifts and accessories today!';
		$data['keyword']="The Allchemy";
		$this->form_validation->set_rules('name','Name','required|min_length[2]|max_length[50]');	
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('mobile', 'Number', 'required|regex_match[/^[0-9]{10}$/]');
		$this->form_validation->set_rules('subject','Subject','required');
		$this->form_validation->set_rules('message', 'Message', 'required');
		if($this->form_validation->run()==False)
		{
			$data['title']="Contact | The Allchemy";
			$data['description']="The Allchemy";
			$data['keyword']="The Allchemy";
			$name=ucfirst(trim($this->input->post('name')));
			$email=trim($this->input->post('email'));
			$phone=trim($this->input->post('mobile'));
			$subject=trim($this->input->post('subject'));
			$message=trim($this->input->post('message'));
			$data = array (
        		'name' => $name,
        		'email' => $email,
        		'phone' => $phone,
        		'subject' => $subject,
        		'message' => $message
    		);
     		$this->form_validation->set_error_delimiters('<div >', '</div>');
     		$this->session->set_flashdata('info_message', validation_errors());
     		 $this->index();
		}
		else
		{
			$name=ucfirst(trim($this->input->post('name')));
			$email=trim($this->input->post('email'));
			$phone=trim($this->input->post('mobile'));
			$subject=trim($this->input->post('subject'));
			$message=trim($this->input->post('message'));
			$data = array (
        		'name' => $name,
        		'email' => $email,
        		'phone' => $phone,
        		'subject' => $subject,
        		'message' => $message,
        		'date' => date('Y-m-d'),
        		'status' => '1'
    		);
			$insert=$this->Contact_model->insert('tbl_contact',$data);
			if($insert)
			{
				$email_data['name']=$name;
				$email_data['email']=$email;
				$email_data['phone']=$phone;
				$email_data['subject']=$subject;
				$email_data['message']=$message;
				$email_body=$this->load->view('emails/contact-email',$email_data,true);
				$from_email = "theallchemy@gmail.com"; 
				$to_email = $email; 
				//Load email library 
				$this->load->library('email'); 
				$this->email->set_mailtype("html");
			
				$this->email->from($from_email, 'Allchemy'); 
				$this->email->to($email);
			
				$this->email->subject('Contact Query for The Allchemy'); 
				$this->email->from($from_email, 'Allchemy'); 
				$this->email->to($to_email);
				$this->email->subject('Contact Query for The Allchemy'); 
				$this->email->message($email_body); 
				if($this->email->send())
				{
					// echo "thanks";
					// $this->session->set_flashdata('info_message_success', 'Dear '.$name.', Your seller account has been created, a verification link has been sent to your email account');
				}
				else
				{
					// echo $this->email->print_debugger();
					// $this->session->set_flashdata('info_message_error', 'mail error');
				}
				$this->session->set_flashdata('info_message_success', 'Dear '.$name.', Your query has been submitted successfully.');
				redirect(base_url().'contact');
			}
			else
			{
				$this->session->set_flashdata('info_message', 'Something went wrong');
				redirect(base_url().'contact');
			}
		}
	}
	
	//<?php
//---------logout----------
//	public function logout()
//	{
//		$this->session->unset_userdata('useremail');
//		$this->session->unset_userdata('password');
//		$this->session->set_flashdata('info-message_success','You are logout successfully.');
//	    redirect(base_url().'home');
//	}



	public function login()
	{
		
		$data['title']='Login Account | The Allchemy';
	 $data['description']='Handicraft items are an excellent way to express yourself and share your creativity. Discover how to create beautiful handmade gifts for friends and family!

The Allchemy is a unique gift store where you can buy everything from candles to jewelry. Find out more about their products here!

Handicrafts are a great way to show off your artistic side. Explore our collection of unique gifts and accessories today!';
	//	$data['select_products']=$this->Home_model->select_products();
		//	$data['select_category']=$this->Home_model->select_category();
		$this->load->view('login',$data);
	}
	
	
		public function user_detail($orderID=0)
	{
		$orderid=urldecode(base64_decode($orderID));
	    $data['title']="The Allchemy";
		$data['description']="The allchemy";
		$data['keyword']="The Allchemy";
		$data['select_category']=$this->Home_model->select_category();
		$data['select_contact_info']=$this->Home_model->select_contact_info();
		$data['cart_count']=$this->Cart_model->cart_count('tbl_cart',$this->mg['userID'],$this->mg['ip']);
		$data['my_orders']=$this->Orders_model->my_orders('tbl_orders',$this->mg['userID']);
		$data['get_order']=$this->Orders_model->get_order('tbl_orders',$orderid);
		$data['get_orders']=$this->Orders_model->get_orders('tbl_orders',$orderid);
		$data['orderID']=preg_replace('/[^A-Za-z0-9\-]/', '',$orderid);
		$orderID=preg_replace('/[^A-Za-z0-9\-]/', '',$orderid);
		
		$select_order=$this->db->query("select * from tbl_orders where orderID='$orderid'");
		// $select_order=$this->db->get();
		$fetch_order=$select_order->row_array();
		if(empty($fetch_order['userID']))
		{
			$this->session->set_flashdata('info_message_success', 'Sorry your link is expired.');
			redirect(base_url('home'));
		}		
		else
		{
			$this->load->view('user-details',$data);
		}
	}


	
	public function signup(){
	    
		$data['title']='Register Your Account | The Allchemy';
	 $data['description']='Handicraft items are an excellent way to express yourself and share your creativity. Discover how to create beautiful handmade gifts for friends and family!

The Allchemy is a unique gift store where you can buy everything from candles to jewelry. Find out more about their products here!

Handicrafts are a great way to show off your artistic side. Explore our collection of unique gifts and accessories today!';
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
}
