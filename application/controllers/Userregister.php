<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Userregister extends CI_Controller {
	var $mg;
	public function __construct()
	{
	parent::__construct();
	$this->load->helper('form');
	$this->load->library('form_validation');
	$this->mg = array(
            'userID' => $this->session->userdata('userID'),
            'ip' => md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT'])
        );	
	}
	
	public function index()
	{
		if($this->session->has_userdata('userID'))
		{
			redirect(base_url().'home');
			exit;
		}
		$data['title']="Register | Revx";
		$data['description']="Revx";
		$data['keyword']="Revx";
		$data['select_contact_info']=$this->Home_model->select_contact_info();
		$data['select_category']=$this->Home_model->select_category();
		$data['select_cart_data']=$this->Cart_model->select_cart_data('tbl_cart',$this->mg['userID'],$this->mg['ip']);
		$data['cart_count']=$this->Cart_model->cart_count('tbl_cart',$this->mg['userID'],$this->mg['ip']);
		$this->load->view('user-registration',$data);
	}

	public function addregistration()
	{
		$data['title']="Registeration | Revx";
		$data['description']="Revx";
		$data['keyword']="Revx";
		$data['select_category']=$this->Home_model->select_category();
		$data['select_contact_info']=$this->Home_model->select_contact_info();
		$data['select_cart_data']=$this->Cart_model->select_cart_data('tbl_cart',$this->mg['userID'],$this->mg['ip']);
		$data['cart_count']=$this->Cart_model->cart_count('tbl_cart',$this->mg['userID'],$this->mg['ip']);
		$this->form_validation->set_rules('name','Name','required|min_length[2]|max_length[50]');	
		$this->form_validation->set_rules('number', 'Phone Number', 'required|regex_match[/^[0-9]{10}$/]');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()==False)
		{
			$data['title']="Registeration | Revx";
			$data['description']="Revx";
			$data['keyword']="Revx";
			$name=ucfirst(trim($this->input->post('name')));
			$phone=trim($this->input->post('number'));
			$email=trim($this->input->post('email'));
			$password=trim($this->input->post('password'));
			$data = array (
        		'name' => $name,
        		'email' => $email,
        		'phone' => $phone,
        		'password' => $password
    		);
    		$this->form_validation->set_error_delimiters('<div >', '</div>');
    		$this->session->set_flashdata('info_message', validation_errors());
    		 $this->index();
		}
		else
		{
			$name=ucfirst(trim($this->input->post('name')));
			$phone=trim($this->input->post('number'));
			$email=trim($this->input->post('email'));
			$password=trim($this->input->post('password'));
			$check_confirmed_email=$this->Userregistration_model->check_confirmed_email($email);
			$check_email=$this->Userregistration_model->check_email($email);
			if($check_confirmed_email->num_rows()>0)
			{
				$this->session->set_flashdata('info_message', 'User already registered');
				$this->index();
			}
			elseif($check_email->num_rows()>0)
			{
				$this->session->set_flashdata('info_message', 'User registered, Please confirm your email.');
				redirect(base_url());
			}
			else
			{
				$s_otp=rand(100000,999999);
				$check_serial=$this->db->query("select * from tbl_signup where verificationcode='$s_otp'");
          		if($check_serial->num_rows()>0)
          		{
          			$otp=uniqid();
					$data=array(
						'name' => $name,
						'email' => $email,
						'mobile' => $phone,
						'password' => $password,
						'verificationcode'=>$otp,
						'added_date' => date('Y-m-d'),
						'verify_status' =>'0',
						'status' => '1'
					);
				}
				else
				{
					$otp=$s_otp;
					$data=array(
						'name' => $name,
						'email' => $email,
						'mobile' => $phone,
						'password' => $password,
						'verificationcode'=>$otp,
						'added_date' => date('Y-m-d'),
						'verify_status' =>'0',
						'status' => '1'
					);
				}
				$add_user=$this->Userregistration_model->add_user($this->security->xss_clean($data));
				if($add_user)
				{
				 	$check=$this->db->query("select * from tbl_signup where userID='$add_user'");
          			$fetch_user_data=$check->row_array();
          			$fetch_user_data['name'];
					$ip=md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
					if($add_user)
					{
						$email_data['user_name']=$fetch_user_data['name'];
						$email_data['confirmation_link']=base_url('confirm-user/').urlencode(base64_encode($fetch_user_data['userID'])).'/'.urlencode(base64_encode($otp));
						$email_body=$this->load->view('emails/user-confirmation',$email_data,true);
						$from_email = "info@theallchemy.com"; 
						$to_email = $email; 
	    
						//Load email library 
						$this->load->library('email'); 
						$this->email->set_mailtype("html");
			
						$this->email->from($from_email, 'Allchemy'); 
						$this->email->to($email);
			
						$this->email->subject('Confirmation for The Allchemy registration'); 
					 	$this->email->from($from_email, 'Allchemy'); 
					 	$this->email->to($to_email);
					 	$this->email->subject('Confirmation for The Allchemy registration'); 
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
					}
					$this->session->set_flashdata('info_message_success', 'Dear '.$name.', Your account has been created and we have sent confirmation message to your email account.');
					redirect(base_url('user-registration'));
				}
				redirect(base_url('user-registration'));
			}
		}
	}

	public function confirm_user($userID,$verificationcode)
	{
		$data['title']="Confirm User | The Allchemy";
		$data['description']="The Allchemy";
		$data['keyword']="The Allchemy";
		$userId=base64_decode(urldecode($userID));
	 	$otp=base64_decode(urldecode($verificationcode));
	 	$data['select_category']=$this->Home_model->select_category();
	 	$data['select_contact_info']=$this->Home_model->select_contact_info();
		$data['select_cart_data']=$this->Cart_model->select_cart_data('tbl_cart',$this->mg['userID'],$this->mg['ip']);
		$data['cart_count']=$this->Cart_model->cart_count('tbl_cart',$this->mg['userID'],$this->mg['ip']);
		$check_user=$this->Userregistration_model->check_user('tbl_signup',$userId,$otp);
		//echo $user_count=$check_user->num_rows();
		if($check_user->num_rows()>0)
		{
			$fetch_user_email=$check_user->row_array();
			$data = array(
				'verificationcode'  => '',
				'verify_status' => '1'
			);
			$userID=$fetch_user_email['userID'];
			$email=$fetch_user_email['email'];
			$name=$fetch_user_email['name'];
			$update_user_verifystatus=$this->Userregistration_model->update_user_verifystatus('tbl_signup',$data,$userID);
			if(!empty($update_user_verifystatus))
			{
				$userdata = array(
					'userID' => $userID,
					'username' => $name,
        			'useremail'  => $email,
				);
				$this->session->set_userdata($userdata);
				$ip=md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
				$data = array(
					'userID' => $userID,
				);
				$updateCartUserData=$this->Cart_model->updateCartUserData('tbl_cart',$ip,$data);
				$selectCartData=$this->Cart_model->selectCartData('tbl_cart',$userID);
				if($selectCartData->num_rows()>0)
				{
					$this->session->set_flashdata('info_message_success', 'Dear '.$name.', You are registered successfully. You can checkout now.');
					redirect(base_url().'checkout');
				}
				else
				{
					$this->session->set_flashdata('info_message_success', 'Dear '.$name.', Thanks for verifying your email.');
					redirect(base_url('home'));
				}
			}
			else
			{
				$this->session->set_flashdata('info_message', 'Something went wrong');
				redirect(base_url('home'));
			} 
		}
		else
		{
			$this->session->set_flashdata('info_message','Your link is expired.');
			redirect(base_url('home'));
		}
	}

}