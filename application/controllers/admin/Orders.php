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

    public function received_orders()
	{
	    $data['title']="View Received Orders | Ufove";
		$data['description']="Ufove";
		$data['keyword']="Ufove";
		$date=date('Y-m-d');
		$data['select_today_vender']=$this->Administrator_model->select_vender_numbers('tbl_vender_login',$date);
		$data['received_order']=$this->Orders_model->received_order('tbl_orders');
		$this->load->view('admin/view-received-orders',$data);
	}

	public function delivered_orders()
	{
	    $data['title']="View Delivered Orders | Ufove";
		$data['description']="Ufove";
		$data['keyword']="Ufove";
		$data['delivered_order']=$this->Orders_model->delivered_order('tbl_orders');
		$date=date('Y-m-d');
		$data['select_today_vender']=$this->Administrator_model->select_vender_numbers('tbl_vender_login',$date);
		$this->load->view('admin/view-delivered-order',$data);
	}

	public function deliver_order($orderID=0)
	{
	    $data['title']="Orders | Ufove";
		$data['description']="Ufove";
		$data['keyword']="Ufove";
		$orderId=base64_decode(urldecode($orderID));
		$data = array (
        	'orderStatus' => '1',
    	);
		$update_order=$this->Orders_model->updateorder('tbl_orders',$orderId,$data);
		if(isset($update_order))
		{
			$this->session->set_flashdata('info-message-success', 'Order Delivered.');
			redirect(base_url().'admin/delivered-orders');
		}
		else
		{
			$this->session->set_flashdata('info-message-error', 'Something went wrong.');
			redirect(base_url().'admin/received-orders');
		}
	}

	public function view_orders()
	{
	    $data['title']="View Orders | Ufove";
		$data['description']="Ufove";
		$data['keyword']="Ufove";
		$data['view_all_order']=$this->Orders_model->view_all_order('tbl_orders');
		$date=date('Y-m-d');
		$data['select_today_vender']=$this->Administrator_model->select_vender_numbers('tbl_vender_login',$date);
		$this->load->view('admin/view-orders',$data);
	}

	public function view_order($orderID=0)
	{
		$orderid=base64_decode(urldecode($orderID));
	    $data['title']="View Order | Ufove";
		$data['description']="Ufove";
		$data['keyword']="Ufove";
		$data['orderID']=$orderid;
		$date=date('Y-m-d');
		$data['select_today_vender']=$this->Administrator_model->select_vender_numbers('tbl_vender_login',$date);
		$this->load->view('admin/view-order',$data);
	}

	public function view_all_order($orderID=0)
	{
		$orderid=urldecode(base64_decode($orderID));
	    $data['title']="View Order | Ufove";
		$data['description']="Ufove";
		$data['keyword']="Ufove";
		$data['view_order_user']=$this->Orders_model->view_order_user('tbl_orders',$orderid);
		$data['view_order_detail']=$this->Orders_model->view_order_detail('tbl_orders',$orderid);
		$date=date('Y-m-d');
		$data['select_today_vender']=$this->Administrator_model->select_vender_numbers('tbl_vender_login',$date);
		$this->load->view('admin/view-all-orders',$data);
	}



}
