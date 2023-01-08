<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment extends CI_Controller
{
	var $mg;
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->mg = array(
			'userID' => $this->session->userdata('userID'),
			'ip' => md5($_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT'])
		);
	}

	public function index()
	{
	}
	public function redirect()
	{

		print_r($_POST);
		
		if ($_POST) {
			$code = $_POST['code'];
			$rawResponse = json_encode($_POST);
			$code = $_POST['code'];
			$amount = $_POST['amount'] / 100;

			if ($code == 'PAYMENT_SUCCESS') {
				$message = $_POST['message'];
				$merchantTransactionId = $_POST['data']['merchantTransactionId'];
				$transactionId = $_POST['data']['transactionId'];

				$data = array("transactionId" => $transactionId, 'payment_code' => $code, "raw_response" => $rawResponse);
				$this->db->where('merchant_transaction_id', $merchantTransactionId);
				$this->db->update('tbl_payments', $data);

				echo  '<script>alert("success")</script>';	
			} else {

				$merchantTransactionId = $_POST['transactionId'];
				$data = array('payment_code' => $code, "raw_response" => $rawResponse);
				$this->db->where('merchant_transaction_id', $merchantTransactionId);
				$this->db->update('tbl_payments', $data);

				echo  '<script>alert("failed")</script>';	

				$update = $this->db->query("UPDATE tbl_payments SET payment_code='$code', raw_response='$rawResponse'  WHERE merchant_transaction_id='$merchantTransactionId'");
			}
		}else{
			echo  '<script>alert("something went wrong")</script>';	
		}

	}

	public function callback()
	{
	}

	/*
	Array ( [code] => PAYMENT_ERROR [merchantId] => PGTESTPAYUAT [transactionId] => MTID3620230108095646 [amount] => 23200 [param1] => na [param2] => na [param3] => na [param4] => na [param5] => na [param6] => na [param7] => na [param8] => na [param9] => na [param10] => na [param11] => na [param12] => na [param13] => na [param14] => na [param15] => na [param16] => na [param17] => na [param18] => na [param19] => na [param20] => na [checksum] => 0e865dd0ccba1ba2527a79ad4422fc065ae6a282a938a1bab5860e953c3fc430###1 )
	*/
}
