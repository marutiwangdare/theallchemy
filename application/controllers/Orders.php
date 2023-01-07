<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {
	var $mg;
	public function __construct() {
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
	    $data['title']="My Orders | Revx";
		$data['description']="Revx";
		$data['keyword']="Revx";
		$data['select_about']=$this->Home_model->select_about();
		$data['select_review']=$this->Home_model->select_review();
		$data['select_category']=$this->Home_model->select_category();
		$data['select_contact_info']=$this->Home_model->select_contact_info();
		$data['cart_count']=$this->Cart_model->cart_count('tbl_cart',$this->mg['userID'],$this->mg['ip']);
		$data['my_orders']=$this->Orders_model->my_orders('tbl_orders',$this->mg['userID']);
		$this->load->view('orders',$data);
	}
	public function confirm($orderID=0)
	{
		$orderid=urldecode(base64_decode($orderID));
	    $data['title']="Confirm Order | Revx";
		$data['description']="Revx";
		$data['keyword']="Revx";
		$data['select_about']=$this->Home_model->select_about();
		$data['select_review']=$this->Home_model->select_review();
		$data['select_category']=$this->Home_model->select_category();
		$data['select_contact_info']=$this->Home_model->select_contact_info();
		$data['cart_count']=$this->Cart_model->cart_count('tbl_cart',$this->mg['userID'],$this->mg['ip']);
		$data['my_orders']=$this->Orders_model->my_orders('tbl_orders',$this->mg['userID']);
		$data['get_order']=$this->Orders_model->get_order('tbl_orders',$orderid);
		$data['get_orders']=$this->Orders_model->get_orders('tbl_orders',$orderid);
		
		$data['orderID']=$orderid;
		$this->load->view('confirm',$data);
	}

	public function view_order($orderID=0)
	{
		$orderid=urldecode(base64_decode($orderID));
	    $data['title']="View Order | Ufove";
		$data['description']="Ufove";
		$data['keyword']="Ufove";
		$data['select_about']=$this->Home_model->select_about();
		$data['select_review']=$this->Home_model->select_review();
		$data['select_category']=$this->Home_model->select_category();
		$data['select_contact_info']=$this->Home_model->select_contact_info();
		$data['cart_count']=$this->Cart_model->cart_count('tbl_cart',$this->mg['userID'],$this->mg['ip']);
		$data['my_orders']=$this->Orders_model->my_orders('tbl_orders',$this->mg['userID']);
		$data['get_order']=$this->Orders_model->get_order('tbl_orders',$orderid);
		$data['get_orders']=$this->Orders_model->get_orders('tbl_orders',$orderid);
		$data['fetch_order']=$this->Orders_model->fetch_order('tbl_orders',$orderid);
		$data['fetch_orders']=$this->Orders_model->fetch_orders('tbl_orders',$orderid);
		$this->load->view('view-order',$data);
	}

}
