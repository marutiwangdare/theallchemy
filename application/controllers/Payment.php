<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {
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
	   
	}
	public function redirect()
	{

		print_r($_POST);

		$code = $_POST['code'];
		$rawResponse = json_encode($_POST);
		$code = $_POST['code'];
		$amount = $_POST['amount'] / 100;

		if ($code == 'PAYMENT_SUCCESS') {
			$message = $_POST['message'];
			$merchantTransactionId = $_POST['data']['merchantTransactionId'];
			$transactionId = $_POST['data']['transactionId'];

			$data = array("transactionId"=>$transactionId,'payment_code' => $code,"raw_response"=>$rawResponse);
			$this->db->where('merchant_transaction_id', $merchantTransactionId);
        	$this->db->update('tbl_payments',$data);
			
		} else {

			$merchantTransactionId = $_POST['transactionId'];
			$data = array('payment_code' => $code,"raw_response"=>$rawResponse);
			$this->db->where('merchant_transaction_id', $merchantTransactionId);
        	$this->db->update('tbl_payments',$data);

			//$update = $this->db->query("UPDATE tbl_payments SET payment_code='$code', raw_response='$rawResponse'  WHERE merchant_transaction_id='$merchantTransactionId'");
		}
	}

	public function callback()
	{
	}

}
