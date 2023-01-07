<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Userlogin extends CI_Controller {
	var $mg;
	public function __construct()
	{
	parent::__construct();
	$this->load->helper('form');
	$this->load->helper('cookie');
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
		$data['title']="Login | The Allchemy";
		$data['description']="Allchemy";
		$data['keyword']="Allchemy";
		$data['select_category']=$this->Home_model->select_category();
		$data['select_contact_info']=$this->Home_model->select_contact_info();
		$data['select_cart_data']=$this->Cart_model->select_cart_data('tbl_cart',$this->mg['userID'],$this->mg['ip']);
		$data['cart_count']=$this->Cart_model->cart_count('tbl_cart',$this->mg['userID'],$this->mg['ip']);
		$this->load->view('login',$data);
	}

	public function user_login()
	{
		$data['title']="Login | Revx";
		$data['description']="Revx";
		$data['keyword']="Revx";
        $data['select_category']=$this->Home_model->select_category();
        $data['select_contact_info']=$this->Home_model->select_contact_info();
		$data['cart_count']=$this->Cart_model->cart_count('tbl_cart',$this->mg['userID'],$this->mg['ip']);
		$this->form_validation->set_rules('email','Email','required|valid_email');	
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run())
		{
			$email=trim($this->input->post('email'));
			$password=trim($this->input->post('password'));
			$check_email_password=$this->Userlogin_model->check_email_password($email,$password);
			if($check_email_password->num_rows()>0)
			{
				$fetch_user_data=$check_email_password->row_array();
				$userdata = array(
					'userID' => $fetch_user_data['userID'],
        			'useremail'  => $fetch_user_data['email'],
        			'username'  => $fetch_user_data['name']
				);
				$this->session->set_userdata($userdata);
				$ip=md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
				$data = array(
					'userID' => $fetch_user_data['userID'],
				);
				$updateCartUserData=$this->Cart_model->updateCartUserData('tbl_cart',$ip,$data);
				$selectCartData=$this->Cart_model->selectCartData('tbl_cart',$fetch_user_data['userID']);
				if($selectCartData->num_rows()>0)
				{
					$this->session->set_flashdata('info_message_success', 'Dear '.$fetch_user_data['name'].', You are login successfully. You can checkout now.');
					//redirect(get_cookie('previous'));
				    //print_r(get_cookie('previous'));
					redirect(base_url('home'));
					exit;
				}
				else
				{
					$this->session->set_flashdata('info_message_success', 'Dear '.$fetch_user_data['name'].', You are login successfully.');
					//redirect(get_cookie('previous'));
				    //	print_r(get_cookie('previous'));
					redirect(base_url('home'));
					exit;
				}
			}
			else
			{
				$this->session->set_flashdata('info_message', 'Invalid Username or Password');
				redirect(base_url().'user-login');
			} 
		}
		else
		{
			$data = array (
        		'email' => $email,
        		'password' => $password
    		);
    		$this->form_validation->set_error_delimiters('<div >', '</div>');
    		$this->session->set_flashdata('info_message', validation_errors());
    		 $this->index();
		}
	}

	public function forget_password()
	{
		$data['title']="Forget Password | Revx";
		$data['description']="Revx";
		$data['keyword']="Revx";
		$data['select_category']=$this->Home_model->select_category();
		$data['select_contact_info']=$this->Home_model->select_contact_info();
		$data['select_cart_data']=$this->Cart_model->select_cart_data('tbl_cart',$this->mg['userID'],$this->mg['ip']);
		$data['cart_count']=$this->Cart_model->cart_count('tbl_cart',$this->mg['userID'],$this->mg['ip']);
		$this->load->view('user-forget-password',$data);
	}

	public function verify_email()
	{
		$data['title']="Reset Password | Revx";
		$data['description']="Revx";
		$data['keyword']="Revx";
		$data['select_category']=$this->Home_model->select_category();
		$data['select_contact_info']=$this->Home_model->select_contact_info();
		$data['select_cart_data']=$this->Cart_model->select_cart_data('tbl_cart',$this->mg['userID'],$this->mg['ip']);
		$data['cart_count']=$this->Cart_model->cart_count('tbl_cart',$this->mg['userID'],$this->mg['ip']);
		$this->form_validation->set_rules('email','Email','required|valid_email');
		if($this->form_validation->run())
		{
			$otp=rand(100000,999999);
			$email=trim($this->input->post('email'));
			$check_email=$this->Userlogin_model->check_email('tbl_signup',$email);
			if($check_email->num_rows()>0)
			{
				$fetch_user_email=$check_email->row_array();
				$data = array(
					'otp'  => $otp
				);
				$userID=$fetch_user_email['userID'];
				$email=$fetch_user_email['email'];
				$update_user_otp=$this->Userlogin_model->update_user_otp('tbl_signup',$data,$userID);
				if(!empty($update_user_otp))
				{
					$email_data['name']=$fetch_user_email['name'];
					$email_data['confirmation_link']=base_url('user-reset-password/').urlencode(base64_encode($fetch_user_email['userID'])).'/'.urlencode(base64_encode($otp));
					$email_body=$this->load->view('emails/user-email-reset-password',$email_data,true);
					$from_email = "info@revxapp.com"; 
					$to_email = $email; 
	    
						//Load email library 
					$this->load->library('email'); 
					$this->email->set_mailtype("html");
			
					$this->email->from($from_email, 'The Allchemy'); 
					$this->email->to($email);
			
					$this->email->subject('Reset The Allchemy Password'); 
					$this->email->from($from_email, 'Revx'); 
					$this->email->to($email);
					$this->email->subject('Reset Revx Password'); 
					 	
					$this->email->message($email_body); 
                    if($this->email->send())
					{
						 
					}
					else
					{
					}
					$this->session->set_flashdata('info_message_success', 'Please check your email, we have sent you a mail for password reset.');
					redirect(base_url('home'));
				}
				else
				{
					$this->session->set_flashdata('info_message', 'Something went wrong');
					redirect(base_url().'user-forget-password');
				}
			}
			else
			{
				$this->session->set_flashdata('info_message', 'Invalid seller account');
				redirect(base_url().'user-forget-password');
			} 
		}
		else
		{
			$this->form_validation->set_error_delimiters('<div >', '</div>');
    		$this->session->set_flashdata('info_message', validation_errors());
			redirect(base_url().'user-forget-password');
		}
	}

	public function reset_password($userID=0,$code=0)
	{
		$data['title']="Reset Password | Revx";
		$data['description']="Revx";
		$data['keyword']="Revx";
		$data['select_category']=$this->Home_model->select_category();
		$data['select_contact_info']=$this->Home_model->select_contact_info();
		$data['cart_count']=$this->Cart_model->cart_count('tbl_cart',$this->mg['userID'],$this->mg['ip']);
		$userId=base64_decode(urldecode($userID));
		$otp=base64_decode(urldecode($code));
		$data['get_user']=$this->Userlogin_model->get_user($userId,$otp);
		if(!empty($data['get_user']))
		{
			$this->load->view('user-reset-password',$data);
		}
		else
		{
			$this->session->set_flashdata('info_message','Your link is expired.');
			redirect(base_url().'user-login');
		}
	}

	public function verify_reset_password()
	{
		$data['title']="Reset Password | Revx";
		$data['description']="Revx";
		$data['keyword']="Revx";
		$data['select_category']=$this->Home_model->select_category();
		$data['select_contact_info']=$this->Home_model->select_contact_info();
		$data['cart_count']=$this->Cart_model->cart_count('tbl_cart',$this->mg['userID'],$this->mg['ip']);
		$this->form_validation->set_rules('password','Password','required|min_length[2]|max_length[100]');
		$this->form_validation->set_rules('cpassword','Confirm Password','required|min_length[2]|max_length[100]');
		if($this->form_validation->run()==False)
		{
			$userID=trim($this->input->post('userID'));
			$password=trim($this->input->post('password'));
			$cpassword=trim($this->input->post('cpassword'));
			$data = array (
        		'password' => $password,
        		'cpassword' => $cpassword,
    		);
    		$this->form_validation->set_error_delimiters('<div >', '</div>');
    		$this->session->set_flashdata('info_message', validation_errors());
    		 $this->index();
    		$userId=base64_decode(urldecode($userID));
			$data['get_user']=$this->Userlogin_model->get_user($userId);
 			$this->load->view('user-confirm',$data);
		}
		else
		{
			$userID=trim($this->input->post('userID'));
			$password=trim($this->input->post('password'));
			$cpassword=trim($this->input->post('cpassword'));
			$data=array(
				'password' => $password,
				'otp' => ''
			);
			$update_user=$this->Userlogin_model->update_user($userID,$this->security->xss_clean($data));
			if($update_user)
			{
          		$this->session->set_flashdata('info_message_success','Your password has been reset successfully.');
				redirect(base_url().'user-login');
			}
		}
	}
}