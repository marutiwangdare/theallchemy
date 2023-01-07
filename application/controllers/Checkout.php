<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
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
	public function index($orderID = 0)
	{
		$orderid = urldecode(base64_decode($orderID));
		$data['title'] = "Checkout | The Allchemy";
		$data['description'] = "The Allchemy";
		$data['keyword'] = "The Allchemy";
		$data['select_category'] = $this->Home_model->select_category();
		$data['select_contact_info'] = $this->Home_model->select_contact_info();
		$data['select_cart_data'] = $this->Cart_model->select_cart_data('tbl_cart', $this->mg['userID'], $this->mg['ip']);
		$data['select_sum_data'] = $this->Cart_model->select_sum_data('tbl_cart', $this->mg['userID'], $this->mg['ip']);
		$data['cart_count'] = $this->Cart_model->cart_count('tbl_cart', $this->mg['userID'], $this->mg['ip']);
		//$data['get_order']=$this->Orders_model->get_order('tbl_orders',$orderid);
		//$data['get_orders']=$this->Orders_model->get_orders('tbl_orders',$orderid);
		$data['select_cupon'] = $this->Home_model->select_cupon();
		$data['orderID'] = trim($orderid);
		$this->load->view('checkout', $data);
	}

	public function checkconfirm($orderID = 0)
	{
		$orderid = urldecode(base64_decode($orderID));
		$order_id = preg_replace('/[^A-Za-z0-9\-]/', '', $orderid);
		$data['title'] = "Checkout | Revx";
		$data['description'] = "Revx";
		$data['keyword'] = "Revx";
		$data['select_about'] = $this->Home_model->select_about();
		$data['select_review'] = $this->Home_model->select_reviews();
		$data['select_category'] = $this->Home_model->select_category();
		$data['select_contact_info'] = $this->Home_model->select_contact_info();
		$data['cart_count'] = $this->Cart_model->cart_count('tbl_cart', $this->mg['userID'], $this->mg['ip']);
		$data['my_orders'] = $this->Orders_model->my_orders('tbl_orders', $this->mg['userID']);
		$data['get_order'] = $this->Orders_model->get_order('tbl_orders', $order_id);
		$data['get_orders'] = $this->Orders_model->get_orders('tbl_orders', $order_id);
		$data['select_cupon'] = $this->Home_model->select_cupon();
		$data['orderID'] = $order_id;
		// print_r($data['get_order']);
		$this->load->view('checkout', $data);
	}

	public function save()
	{

		if ($_POST) {
			$total=0;
			$_POST['userID'] =  $this->session->userdata('userID');
			$orderID = $this->db->insert('tbl_orders', $_POST);

			$finds = $this->db->query('SELECT * FROM `tbl_cart` where userID=' . $_SESSION['userID'])->result_array();
			if ($finds) {

				foreach ($finds as $find) {


					$find['order_id'] =  $orderID;
					$total+=$find['cartPrice'];
					unset($find['cartID']);
					unset($find['cartPrice']);
					unset($find['cartIP']);
					unset($find['cartAddDate']);
					unset($find['cartStatus']);
					unset($find['cartEditedDate']);
					$orderID = $this->db->insert('tbl_order_items', $find);
				}
			}
			extract($_POST);
			$array['order_id'] = $orderID . '_' . time();
			$array['order_date'] = date('Y-m-d H:i:s');
			$array['pickup_location'] = 'Meerut';
			$array['billing_customer_name'] = $first_name;
			$array['billing_last_name'] = $last_name;
			$array['billing_address'] = $street;
			$array['billing_address_2'] = "";
			$array['billing_city'] = $city;
			$array['billing_pincode'] = $zip;
			$array['billing_state'] = $state;
			$array['billing_country'] = $county;
			$array['billing_email'] = $email;
			$array['billing_phone'] = $phone;
			$array['shipping_is_billing'] = true;
			$array['shipping_customer_name'] = $first_name;
			$array['shipping_last_name'] = $last_name;
			$array['shipping_address'] =  $street;
			$array['shipping_address'] = '';
			$array['shipping_city'] = $city;
			$array['shipping_pincode'] = $zip;
			$array['shipping_country'] = $county;
			$array['shipping_state'] = $state;
			$array['shipping_email'] = $email;
			$array['shipping_phone'] = $phone;
			$array['payment_method'] = 'Prepaid';
			$array['shipping_charges'] = '0';
			$array['giftwrap_charges'] = '0';
			$array['transaction_charges'] = '0';
			$array['total_discount'] = '0';
			$array['sub_total'] = $total;
			$array['length'] = '10';
			$array['breadth'] = '15';
			$array['height'] = '20';
			$array['weight'] = '2.5';
			$array_items = array();
			if ($finds) {
				foreach ($finds as $find) {
					$array_order_items['name'] = $find['productTitle'];
					$array_order_items['sku'] = $this->slug($find['productTitle']);
					$array_order_items['units'] = (int) $find['productQuantity'];
					$array_order_items['selling_price'] = $find['productMRP'];
					$array_order_items['discount'] = '0';
					$array_order_items['tax'] = '0';
					$array_order_items['hsn'] = '0';
					$array_items[] = $array_order_items;
				}
			}
			$array['order_items'] = $array_items;

			$d = $this->add_to_shipping(json_encode($array));
			$d = json_decode(json_decode($d));
			$this->db->where('ordersID', $orderID);
			$shipment_id = '';//$d->shipment_id ? $d->shipment_id : '';
			$this->db->update('tbl_orders', array('shipment_id' => $shipment_id));

			$this->db->query('delete FROM `tbl_cart` where userID=' . $_SESSION['userID']);
			$this->session->set_flashdata('info_message_success', 'Thanks for Order');
			//redirect(base_url('home'));

			$this->handle($orderID,1);
		}
	}

	public function handle($order_id, $amount)
	{

		$amount = (double)$amount; // string to double
		$amount_in_paisa = $amount * 100; //convert to paisa
		$user_id = $_SESSION['userID'];


		define('merchantId', 'PGTESTPAYUAT');
		define('redirectUrl', 'http://localhost/theallchemy/payment/redirect');
		define('callbackUrl', 'http://localhost/theallchemy/payment/callback');
		define('mobileNumber', '9068145151');
		define('apiEndpoint', '/pg/v1/pay');
		define('saltKey', '099eb0cd-02cf-4e2a-8aca-3e6c6aff0399');
		define('saltIndex', '1');
		define('payApiUrl', 'https://api-preprod.phonepe.com/apis/hermes/pg/v1/pay');

		$data = array('order_id' => $order_id,'amount' => $amount);
		$this->db->insert('tbl_payments',$data);
		$insert_id = $this->db->insert_id();
		$payment_id = $insert_id;

		$merchantTransactionId = 'MTID' . $payment_id . date("Ymdhis");

		$data = [
			"merchantId" => merchantId,
			"merchantTransactionId" => $merchantTransactionId,
			"merchantUserId" => $user_id,
			"amount" => $amount_in_paisa,
			"redirectUrl" => redirectUrl,
			"redirectMode" => "POST",
			"callbackUrl" => callbackUrl,
			"mobileNumber" => mobileNumber,
			"paymentInstrument" => [
				"type" => "PAY_PAGE"
			]
		];

		$body = base64_encode(json_encode($data));

		$raw = $body . apiEndpoint . saltKey;


		$XVERIFY = hash('sha256', $raw) . "###" . saltIndex;

		$client = new \GuzzleHttp\Client();
		$response = $client->request('POST', payApiUrl, [
			'body' => '{"request":"' . $body . '"}',
			'headers' => [
				'Content-Type' => 'application/json',
				'X-VERIFY' => $XVERIFY,
				'accept' => 'application/json',
			],
		]);


		$result = json_decode($response->getBody(), true);

		print_r($result);

		if ($result['success'] == 1) {

			$data = array('merchant_transaction_id' => $merchantTransactionId,'payment_code' => $result['code']);
			$this->db->where('id', $payment_id);
        	$this->db->update('tbl_payments',$data);
			
			$url = $result['data']['instrumentResponse']['redirectInfo']['url'];
			header("Location: $url");
			die();
		} else {
			echo $result['message'];
		}
	}

	function slug($string, $spaceRepl = "-")
	{
		$string = str_replace("&", "and", $string);

		$string = preg_replace("/[^a-zA-Z0-9 _-]/", "", $string);

		$string = strtolower($string);

		$string = preg_replace("/[ ]+/", " ", $string);

		$string = str_replace(" ", $spaceRepl, $string);

		return $string;
	}

	public function add_to_shipping($array)
	{
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://apiv2.shiprocket.in/v1/external/orders/create/adhoc",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => $array,
			CURLOPT_HTTPHEADER => array(
				"Content-Type: application/json",
				"Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjMwNzcxODYsImlzcyI6Imh0dHBzOi8vYXBpdjIuc2hpcHJvY2tldC5pbi92MS9leHRlcm5hbC9hdXRoL2xvZ2luIiwiaWF0IjoxNjY3MjA2Mzg1LCJleHAiOjE2NjgwNzAzODUsIm5iZiI6MTY2NzIwNjM4NSwianRpIjoiS2IxRG9ROUJsVFJNMUNmSSJ9.LL1fD14_e7iOCUJeQgzkc2YEolbYnPU3VOsFAiRR9WQ"
			),
		));
		$SR_login_Response = curl_exec($curl);
		curl_close($curl);
		//$SR_login_Response_out = json_decode($SR_login_Response);

		return json_encode($SR_login_Response);
	}
	public function add_user_address()
	{
		$data['title'] = "Checkout - Revx";
		$data['description'] = "Revx";
		$data['keyword'] = "Revx";
		$this->form_validation->set_rules('name', 'Name', 'required|min_length[2]|max_length[50]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('number', 'Phone Number', 'required|regex_match[/^[0-9]{10}$/]');
		$doption = $this->input->post('doption');
		$ordersId = trim($this->input->post('ordersId'));
		$orderId = $this->input->post('orderId');
		$stringorderId = preg_replace('/[^A-Za-z0-9\-]/', '', $orderId);

		$confirm_orderId = urlencode(base64_encode($stringorderId));

		if ($doption == "Delivery") {
			// 			$this->form_validation->set_rules('street','Street No','required');	
			// 			$this->form_validation->set_rules('city','City','required');
			// 			$this->form_validation->set_rules('zipcode', 'Postcode / ZIP', 'required');
			// 			$this->form_validation->set_rules('state','State','required');	
			// 			$this->form_validation->set_rules('country','Country','required');
			if ($this->form_validation->run()) {
				$ip = $this->mg['ip'];
				$userID = $this->mg['userID'];
				$name = trim($this->input->post('name'));
				$email = trim($this->input->post('email'));
				$number = trim($this->input->post('number'));
				$street = trim($this->input->post('street'));
				$city = trim($this->input->post('city'));
				$zipcode = trim($this->input->post('zipcode'));
				$state = trim($this->input->post('state'));
				$country = trim($this->input->post('country'));
				$areaAdd = $this->input->post('areaAdd');
				$data = array(
					// 'userID' => $userID,
					'name' => $name,
					'email' => $email,
					'phone' => $number,
					'date' => date('Y-m-d'),
					'status' => '1'
				);

				$insert_address = $this->Checkout_model->addressInsert('tbl_useraddress', $data);
				if ($insert_address) {
					$data1 = array(
						'doption' => $doption,
						'useraddressID' => $insert_address,
						'delivery_area_id' => $areaAdd
					);
					$insert_order = $this->Checkout_model->updateOrder('tbl_orders', $data1, $orderId);

					// 	empty cart

					$empty_cart = $this->Cart_model->delete_ordercart($_SESSION['userID']);

					//$confirm_order_id=urlencode(base64_encode($orderId));
					// // redirect(base_url().'confirm/'.$confirm_order_id);
					$select_order_data = $this->db->query("select * from tbl_orders where orderID='$orderId'");
					$fetch_order_data = $select_order_data->row_array();

					$hostrental = $this->db->query("select * from tbl_host_login where hostID='" . $fetch_order_data['hostID'] . "' ");
					$fetch_order_host = $hostrental->row_array();

					$url_user = base_url('user-details/') . $confirm_orderId;
					$email_body1 = "<html><body><p>Hi " . $name . ",</p><p>Thanks so much for booking " . $fetch_order_data['rentalQuantity'] . " for Revx ATV Rentals on " . date('l', strtotime($fetch_order_data['from_date'])) . " , " . date('F d, Y', strtotime($fetch_order_data['from_date'])) . " We’re looking forward to having you.</p><p>If you're driving into Florence before your booking, it's a good idea to allow time for traffic, construction, or delays on highways.</p><p>We provide helmets; some have shields and some are open-face. You can bring your own goggles or helmet. Closed-toe shoes and long pants are required. Please bring sunglasses. Parking is provided at the office but <strong>pets are not permitted to be left behind in vehicle.</strong> We drive you to the staging area for your ride.</p><p>Below are some details about your activity:</p><ul><li>Tickets purchased: Revx ATV Rentals : " . $fetch_order_data['rentalTitle'] . " - " . $fetch_order_data['rentalHour'] . " Hours</li><li>Activity date: " . date('l', strtotime($fetch_order_data['from_date'])) . " , " . date('F d, Y', strtotime($fetch_order_data['from_date'])) . "</li><li>Start time: 10:00am</li><li><strong>Check in takes 30 minutes. Please arrive 30 minutes before your start time to ensure you don't use your riding time. Groups of 6 or more, please arrive 45 minutes early - this includes large groups in separate bookings.</strong></li><li>Please sign your waiver before you come using this link: <a href='" . $url_user . "' target='_blank'>Equipment Waiver</a></li></ul><p>The legal guardian for minors must sign; cannot be another family member or friend.</p><ul><li>You are required to watch the safety video prior to your riding time. You may watch it by following this link <a href='https://www.youtube.com/watch?v=j-iWgp2vaAc' target='_blank'>https://www.youtube.com/watch?v=j-iWgp2vaAc</a></li></ul><p>Or watch the safety video during your check-in at the office.</p><p>Price: $" . $fetch_order_data['totalPrice'] . " </p><p>Your booking confirmation number is " . $fetch_order_data['orderID'] . ". If you have any other questions, feel free to get in touch.</p><p>Revx</p><p>United States</p><p><a href='tel:+123 456 7890'>+123 456 7890</a> or email <a href='mailto:info@revxapp.com'>info@revxapp.com</a></p><p>See you soon!</p></body></html>";
					$from_email  = "info@revxapp.com";
					$to_email    = array($email, $fetch_order_host['h_email']);
					//Load email library 
					$this->load->library('email');
					$this->email->set_mailtype("html");

					$this->email->from($from_email, 'Revx');
					$this->email->to($to_email);
					$this->email->subject('REVX');
					$this->email->message($email_body1);
					if ($this->email->send()) {
						$this->session->set_flashdata('info_message_success', 'Thanks for booking, we have sent you an email for confirmation.');
						redirect(base_url('home'));
					} else {
						$this->session->set_flashdata('info_message_success', 'Something went wrong');
						redirect(base_url() . 'checkout/' . $confirm_orderId);
					}
				} else {
					$this->session->set_flashdata('info_message_success', 'Something went wrong');
					redirect(base_url() . 'checkout/' . $confirm_orderId);
				}
			} else {
				$name = trim($this->input->post('name'));
				$email = trim($this->input->post('email'));
				$number = trim($this->input->post('number'));
				$street = trim($this->input->post('street'));
				$city = trim($this->input->post('city'));
				$zipcode = trim($this->input->post('zipcode'));
				$state = trim($this->input->post('state'));
				$country = trim($this->input->post('country'));
				$data = array(
					'name' => $name,
					'email' => $email,
					'phone' => $phone,
					'street' => $street,
					'city' => $city,
					'zipcode' => $zipcode,
					'state' => $state,
					'country' => $country
				);
				$this->form_validation->set_error_delimiters('<div >', '</div>');
				$this->session->set_flashdata('info_message', validation_errors());
				$this->index($confirm_orderId);
			}
		} else {
			if ($this->form_validation->run()) {
				$ip = $this->mg['ip'];
				$userID = $this->mg['userID'];
				$name = trim($this->input->post('name'));
				$email = trim($this->input->post('email'));
				$number = trim($this->input->post('number'));
				$data = array(
					// 'userID' => $userID,
					'name' => $name,
					'email' => $email,
					'phone' => $number,
					'date' => date('Y-m-d'),
					'status' => '1'
				);

				$insert_address = $this->Checkout_model->addressInsert('tbl_useraddress', $data);
				if ($insert_address) {
					$data1 = array(
						'doption' => $doption,
						'useraddressID' => $insert_address,
						///
						'paymentStatus' => 1
					);
					$insert_order = $this->Checkout_model->updateOrder('tbl_orders', $data1, $orderId);

					// 	empty cart
					$empty_cart = $this->Cart_model->delete_ordercart($_SESSION['userID']);

					$confirm_order_id = urlencode(base64_encode($orderId));
					$url_user = base_url('user-details/') . $confirm_orderId;
					$select_order_data = $this->db->query("select * from tbl_orders where orderID='$stringorderId'");
					$fetch_order_data = $select_order_data->row_array();

					$hostrental = $this->db->query("select * from tbl_host_login where hostID='" . $fetch_order_data['hostID'] . "'");
					$fetch_order_host = $hostrental->row_array();

					$email_body1 = "<html><body><p>Hi " . $name . ",</p><p>Thanks so much for booking " . $fetch_order_data['rentalQuantity'] . " for Revx ATV Rentals on " . date('l', strtotime($fetch_order_data['from_date'])) . " , " . date('F d, Y', strtotime($fetch_order_data['from_date'])) . " We’re looking forward to having you.</p><p>If you're driving into Florence before your booking, it's a good idea to allow time for traffic, construction, or delays on highways.</p><p>We provide helmets; some have shields and some are open-face. You can bring your own goggles or helmet. Closed-toe shoes and long pants are required. Please bring sunglasses. Parking is provided at the office but <strong>pets are not permitted to be left behind in vehicle.</strong> We drive you to the staging area for your ride.</p><p>Below are some details about your activity:</p><ul><li>Tickets purchased: Revx ATV Rentals : " . $fetch_order_data['rentalTitle'] . " - " . $fetch_order_data['rentalHour'] . " Hours</li><li>Activity date: " . date('l', strtotime($fetch_order_data['from_date'])) . " , " . date('F d, Y', strtotime($fetch_order_data['from_date'])) . "</li><li>Start time: 10:00am</li><li><strong>Check in takes 30 minutes. Please arrive 30 minutes before your start time to ensure you don't use your riding time. Groups of 6 or more, please arrive 45 minutes early - this includes large groups in separate bookings.</strong></li><li>Please sign your waiver before you come using this link: <a href='" . $url_user . "' target='_blank'>Equipment Waiver</a></li></ul><p>The legal guardian for minors must sign; cannot be another family member or friend.</p><ul><li>You are required to watch the safety video prior to your riding time. You may watch it by following this link <a href='https://www.youtube.com/watch?v=j-iWgp2vaAc' target='_blank'>https://www.youtube.com/watch?v=j-iWgp2vaAc</a></li></ul><p>Or watch the safety video during your check-in at the office.</p><p>Price: $" . $fetch_order_data['totalPrice'] . " </p><p>Your booking confirmation number is " . $fetch_order_data['orderID'] . ". If you have any other questions, feel free to get in touch.</p><p>Revx</p><p>United States</p><p><a href='tel:+123 456 7890'>+123 456 7890</a> or email <a href='mailto:info@revxapp.com'>info@revxapp.com</a></p><p>See you soon!</p></body></html>";
					$from_email  = "info@revxapp.com";
					$to_email    = array($email, $fetch_order_host['h_email']);
					//Load email library 
					$this->load->library('email');
					$this->email->set_mailtype("html");

					$this->email->from($from_email, 'Revx');
					$this->email->to($to_email);
					$this->email->subject('Revx');
					$this->email->message($email_body1);
					if ($this->email->send()) {
						$this->session->set_flashdata('info_message_success', 'Thanks for booking, we have sent you an email for confirmation.');
						redirect(base_url('home'));
					} else {
						$this->session->set_flashdata('info_message_success', 'Something went wrong');
						redirect(base_url() . 'checkout/' . $confirm_orderId);
					}
					// redirect(base_url().'confirm/'.$confirm_order_id);
				} else {
					$this->session->set_flashdata('info_message_success', 'Something went wrong');
					redirect(base_url() . 'checkout/' . $confirm_orderId);
				}
			} else {
				$name = trim($this->input->post('name'));
				$email = trim($this->input->post('email'));
				$number = trim($this->input->post('number'));
				$data = array(
					'name' => $name,
					'email' => $email,
					'phone' => $phone,
				);
				$this->form_validation->set_error_delimiters('<div >', '</div>');
				$this->session->set_flashdata('info_message', validation_errors());
				$this->index($confirm_orderId);
			}
		}
	}



	// 	stripe payment gateway

	public function handlePayment()
	{
		require_once('application/libraries/stripe-php/init.php');
		$amount = $this->input->post('amount');
		$token = $this->input->post('stripeToken');
		exit();
		\Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
		$testing = \Stripe\Charge::create([
			"amount" => 100 * $amount,
			"currency" => "USD",
			"source" => $token,
			"description" => "Dummy stripe payment."
		]);

		if ($testing == true) {
			echo $testing;
			exit();
		} else {
			echo '2';
			exit();
		}
	}


	public function add_user_info()
	{
		$data['title'] = "Checkout - Revx";
		$data['description'] = "Revx";
		$data['keyword'] = "Revx";
		$this->form_validation->set_rules('fname', 'First Name', 'required|min_length[2]|max_length[50]');
		$this->form_validation->set_rules('lname', 'Last Name', 'required|min_length[2]|max_length[50]');
		$this->form_validation->set_rules('lnumber', 'Driver License Number', 'required');
		$this->form_validation->set_rules('dob', 'Birth Date', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');

		$orderId = $this->input->post('orderId');

		if ($this->form_validation->run()) {
			$ip = $this->mg['ip'];
			$fname = trim($this->input->post('fname'));
			$lname = trim($this->input->post('lname'));
			$lnumber = trim($this->input->post('lnumber'));
			$lstate = trim($this->input->post('lstate'));
			$dob = date('Y-m-d', strtotime($this->input->post('dob')));
			$address = trim($this->input->post('address'));
			$city = trim($this->input->post('city'));
			$state = trim($this->input->post('state'));
			$usersign = trim($this->input->post('usersign'));
			$zipcode = trim($this->input->post('zip'));
			$countfiles = count($_FILES['images']['name']);
			// Looping all files
			if (!empty($_FILES['images']['name'][0])) {
				for ($i = 0; $i < $countfiles; $i++) {
					if (!empty($_FILES['images']['name'][$i])) {
						// Define new $_FILES array - $_FILES['file']
						$_FILES['file']['name'] = $_FILES['images']['name'][$i];
						$_FILES['file']['type'] = $_FILES['images']['type'][$i];
						$_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
						$_FILES['file']['error'] = $_FILES['images']['error'][$i];
						$_FILES['file']['size'] = $_FILES['images']['size'][$i];
						// Set preference
						$config['upload_path'] = './assets/img/user/';
						$config['allowed_types'] = 'jpg|jpeg|png';
						// $config['max_size'] = '5000'; // max_size in kb
						$config['file_name'] = "user" . time() . $_FILES['images']['name'][$i];
						//Load upload library
						$this->load->library('upload', $config);
						// File upload
						$this->upload->initialize($config);
						if ($this->upload->do_upload('file')) {
							$uploadData = $this->upload->data();
							$filename = $uploadData['file_name'];
							// Initialize array
							$data['filenames'][] = $filename;

							$config1 = array();
							$config1['image_library'] = 'gd2';
							$config1['source_image'] = $uploadData['full_path'];
							$config1['new_image'] = './assets/img/user/thumb';
							$config1['create_thumb'] = false;
							$config1['quality'] = 80;
							$config1['height'] = 500;
							$config1['width'] = 500;

							$this->load->library('image_lib', $config1);
							$this->image_lib->initialize($config1);
							$this->image_lib->resize();
							$this->image_lib->clear();
						}
					}
				}
				$u_name = implode(',', $data['filenames']);
			}
			$countfiles = count($_FILES['simages']['name']);
			// Looping all files
			if (!empty($_FILES['simages']['name'][0])) {
				for ($i = 0; $i < $countfiles; $i++) {
					if (!empty($_FILES['simages']['name'][$i])) {
						// Define new $_FILES array - $_FILES['file']
						$_FILES['file']['name'] = $_FILES['simages']['name'][$i];
						$_FILES['file']['type'] = $_FILES['simages']['type'][$i];
						$_FILES['file']['tmp_name'] = $_FILES['simages']['tmp_name'][$i];
						$_FILES['file']['error'] = $_FILES['simages']['error'][$i];
						$_FILES['file']['size'] = $_FILES['simages']['size'][$i];
						// Set preference
						$config['upload_path'] = './assets/img/user/';
						$config['allowed_types'] = 'jpg|jpeg|png';
						// $config['max_size'] = '5000'; // max_size in kb
						$config['file_name'] = "sig" . time() . $_FILES['simages']['name'][$i];
						//Load upload library
						$this->load->library('upload', $config);
						// File upload
						$this->upload->initialize($config);
						if ($this->upload->do_upload('file')) {
							$uploadData = $this->upload->data();
							$filename = $uploadData['file_name'];
							// Initialize array
							$data['sfilenames'][] = $filename;

							$config1 = array();
							$config1['image_library'] = 'gd2';
							$config1['source_image'] = $uploadData['full_path'];
							$config1['new_image'] = './assets/img/user/thumb';
							$config1['create_thumb'] = false;
							$config1['quality'] = 80;
							$config1['height'] = 500;
							$config1['width'] = 500;

							$this->load->library('image_lib', $config1);
							$this->image_lib->initialize($config1);
							$this->image_lib->resize();
							$this->image_lib->clear();
						}
					}
				}
				$s_name = implode(',', $data['sfilenames']);
			}
			$data = array(
				'fname' => $fname,
				'lname' => $lname,
				'lnumber' => $lnumber,
				'dob' => $dob,
				'address' => $address,
				'city' => $city,
				'state' => $state,
				'zipcode' => $zipcode,
				'uimage' => $u_name,
				'simage' => $usersign,
				'date' => date('Y-m-d'),
				'status' => '1'
			);

			$insert_address = $this->Checkout_model->addressInsert('tbl_users', $data);
			if ($insert_address) {
				$data1 = array(
					'userID' => $insert_address,
					'orderStatus' => '1'
				);
				$insert_order = $this->Checkout_model->userupdateOrder('tbl_orders', $data1, $orderId);
				$orderdata = $this->db->query("select * from tbl_orders where orderID='$orderId'");
				$fetch_order = $orderdata->row_array();
				$hostrental = $this->db->query("select * from tbl_host_login where hostID='" . $fetch_order['hostID'] . "' ");
				$fetch_order_host = $hostrental->row_array();

				$userdata = $this->db->query("select * from tbl_useraddress where useraddressID='$fetch_order[useraddressID]' and status='1'");
				$useraddID = $userdata->row_array();
				$userdata1 = $this->db->query("select * from tbl_users where userID='$fetch_order[userID]' and status='1'");
				$user1ID = $userdata1->row_array();
				$email = array($useraddID['email'], $fetch_order_host['h_email']);
				$simg = base_url('assets/img/user/') . $user1ID['simage'];
				$simg1 = $user1ID['simage'];
				$userimg = base_url('assets/img/user/') . $user1ID['uimage'];
				$email_body1 = "<html><body><h2>REVX ATV RENTALS PARTICIPANT AGREEMENT, RELEASE AND ASSUMPTION OF RISK</h2><p>In consideration of the services of Revx ATV Rentals, their agents, owners, officers, volunteers, employees, and all other persons or entities acting in any capacity on their behalf (hereinafter collectively referred to as 'REVX ATV'), I hereby agree to release, indemnify, and discharge REVX ATV, on behalf of myself, my spouse, my children, my parents, my heirs, assigns, personal representative and estate as follows: </p><ol type='1'><li> I acknowledge that my participation in ATV/UTV activities entails known and unanticipated risks that could result in physical or emotional injury, paralysis, death, or damage to myself, to property, or to third parties. I understand that such risks simply cannot be eliminated without jeopardizing the essential qualities of the activity. The risks include, among other things: the possibility of rough terrain; passengers can be jolted, jarred, bounced, thrown about and otherwise shaken during rides; it is possible that riders could be injured if they come into contact with other passengers or equipment; injuries can be sustained from the trail, equipment or from items on the trail such as holes, bumps, ruts, obstacles, tree limbs and branches or rocks; major injuries are a risk as are bruises and sprains; musculoskeletal injuries including head, neck, and back injuries; injuries to internal organs; loss of fingers or other appendages; exhaustion; exposure to the elements of the outdoors and natural surroundings which could cause hypothermia, hyperthermia (heat related illnesses), heat exhaustion, sunburn, dehydration; and exposure to potentially dangerous wild animals, insect bites, and hazardous plant life; further, passengers can be thrown off the vehicles which can result in any of the above events occurring; accidents involving other vehicles; the negligence of other visitors, participants, or other persons who may be present; collision with fixed or movable objects; collisions, and flipping over; transmissible pathogen or disease; accidents or illness can occur in remote places without medical facilities and emergency treatment or other services rendered; the machine itself may fail; and slips and falls are always a possibility on hikes.<br>Furthermore, REVX ATV personnel have difficult jobs to perform. They seek safety, but they are not infallible. They might be unaware of a participant's fitness or abilities. They misjudge the weather or other environmental conditions. They may give incomplete warnings or instructions, and the equipment being used might malfunction. </li><li>expressly agree and promise to accept and assume all of the risks existing in this activity. My participation in this activity is purely voluntary, and I elect to participate in spite of the risks. I agree to wear a properly fitted and secured DOT or SNELL certified helmet while participating in this activity. </li><li>I hereby voluntarily release, forever discharge, and agree to indemnify and hold harmless REVX from any and all claims, demands, or causes of action, which are in any way connected with my participation in this activity or my use of REVX ATV’s equipment or facilities, including any such claims which allege negligent acts or omissions of REVX ATV.</li><li>Should REVX ATV or anyone acting on their behalf, be required to incur attorney's fees and costs to enforce this agreement, I agree to indemnify and hold them harmless for all such fees and costs. </li><li>I certify that I have adequate insurance to cover any injury or damage I may cause or suffer while participating, or else I agree to bear the costs of such injury or damage myself. I further certify that I am willing to assume the risk of any medical or physical condition I may have. </li><li>In the event that I file a lawsuit against REVX ATV, I agree to do so solely in the state of Oregon, and I further agree that the substantive law of that state shall apply in that action without regard to the conflict of law rules of that state. I agree that if any portion of this agreement is found to be void or unenforceable, the remaining document shall remain in full force and effect. </li></ol><p>By signing this document, I acknowledge that if anyone is hurt or property is damaged during my participation in this activity, I may be found by a court of law to have waived my right to maintain a lawsuit against REVX ATV on the basis of any claim from which I have released them herein. I also agree that this document is valid for subsequent visits and participation at REVX ATV. I have had sufficient opportunity to read this entire document. I have read and understood it, and I agree to be bound by its terms.</p>
				<p><strong>First Name:</strong></p><p>" . $fname . "</p><p><strong>Last Name</strong></p><p>" . $lname . "</p><p><strong>Driver's License Number:</strong></p><p>" . $lnumber . "</p><p><strong>Driver's License State:</strong></p><p>" . $lstate . "</p><p><strong>Birth Date:</strong></p><p>" . $dob . "</p><p><strong>Address including APT/Unit:</strong></p><p>" . $address . "</p><p><strong>City:</strong></p><p>" . $city . "</p><p><strong>State:</strong></p><p>" . $state . "</p><p><strong>ZIP Code:</strong></p><p>" . $zipcode . "</p><br><p>PARENT'S OR GUARDIAN'S ADDITIONAL INDEMNIFICATION (Must be completed for participants under the age of 18)</p><h3>SIGNER STATEMENT</h3><p>I/we the undersigned, have read the foregoing statement carefully before signing and do understand its warnings and assumption of risks. <br><br><img src=" . $userimg . " style='width:150px'/><br>'.$simg1.'</p><h2>Revx ATV RENTAL AGREEMENT - TERMS AND CONDITIONS OF USE</h2><p>The undersigned hereby rent from Revx ATV Rentals, LLC. (“Revx ATV Rentals”) the following described all-terrain vehicle (ATV/UTV) or equipment for a limited period of time, upon the following terms and conditions. The undersigned customer hereby acknowledges and agrees that Revx ATV is a separate and distinct business entity and has no association, either actual or implied.</p><p>Each of the undersigned acknowledges and agree as follows:</p><h3>NO WARRANTY - INHERENTLY DANGEROUS ACTIVITY - NO INSURANCE PROVIDED</h3><p>Revx ATV Rentals makes NO WARRANTY of any kind, nature or description, express or implied, as to the quality, design, merchantability, safety, driveability or fitness for any particular purpose of any vehicle or equipment covered by this agreement. Each of the undersigned accepts any vehicle or equipment provided by Revx Rentals in its”AS IS” condition with all faults. Each of the undersigned hereby acknowledges that riding ATVs in sand dunes and on other surfaces with other like vehicles and riders is a dangerous activity, with a high risk of serious bodily injury and/or death to self and/or others. Revx ATV Rentals strongly urges that each of the undersigned have medical insurance prior to engaging in this activity. Revx Rentals does not provide medical insurance and advises that serious injuries can be financially devastating. Each of the undersigned hereby personally accepts all risks and liabilities of this activity. It has been explained to each of the undersigned and each of them acknowledges that by executing this document each is giving up important legal rights and incurring important legal responsibilities. Each of the undersigned acknowledges his or her intention to give up those rights and accept those responsibilities and in good faith hereby relieves and releases Revx Rentals from any and all legal duties owed to the undersigned or any of them in relation to the conduct of the above-described activity.</p><p>RULES OF OPERATION. Each of the undersigned agrees to follow and be bound by the General ATV Operation Rules on the reverse side hereof which are a part of this agreement.</p><p>NOTIFICATION OF OREGON VEHICLE CODE (OVC) REQUIREMENTS Ref: ORS 801.193) Effective January 1, 2014, all operators of Class I or Class III ATVs must possess an OPRD 'ATV Safety Education Card.'</p><p>PARTIAL INVALIDITY/CHOICE OF LAW. Should any provision of this agreement be held by a court of competent jurisdiction to be either invalid or unenforceable, the remaining provisions of this agreement shall remain in effect. This Rental Agreement and Waiver of Liability shall be governed and construed in accordance with the laws of the state of Oregon.</p><p>EXPENSES OF ENFORCEMENT. In the event of any legal action with respect to this agreement, it is agreed that the prevailing party in any such action shall be entitled to recover reasonable attorney fees, costs and expenses at trial and on appeal. There is a $150 administration fee if you dispute your credit card charge in breach of this agreement.</p><p>CANCELLATION POLICY. Each of the undersigned understands the deposit paid will be deducted off of the total bill of the reservation. The deposit is NON-REFUNDABLE. If needed, the reservation can be rescheduled for a different date and time. If the undersigned customer cancels within 48 hours or no show to the reservation, there will be a charge for the full rental fee.</p><p>ENTIRE AGREEMENT, NO ORAL MODIFICATION. This Rental Agreement and Waiver of Liability constitute the entire agreement between the parties. No provision hereof shall be modified or rescinded unless in writing signed by an authorized corporate officer of Revx ATV Rentals.</p><p>JOINT AND SEVERAL LIABILITY/USE OF TERMS. In the event the undersigned consist of more than one party, then each of the undersigned shall be jointly, severally, and individually liable for all obligations, agreements, and promises of the undersigned herein. As used in this agreement, the singular shall include the plural and the plural the singular and the masculine, feminine, and neuter genders shall each include the others as the context requires.OREGON GENERAL ATV/UTV OPERATION RULESOREGON GENERAL ATV/UTV OPERATION RULES</p><p>PARENTAL CONSENT. I am the Parent or legal guardian of the minor(s) identified in this form. I hereby consent that the above listed ATV and/or equipment obtained from Revx ATV Rentals may be used and operated by such minor(s). I agree to be personally responsible for such minor(s) following and abiding by all of the rules and terms of this agreement.</p><ol type='1'><li>Only adult riders who have signed the Rental Agreement and Waiver of Liability ('Agreement'), or a minor whose parent or guardian has signed the Agreement on their behalf, shall operate any ATV, or other rental vehicle.</li><li>A helmet must be worn fastened at all times while operating an ATV, or other vehicle!! Additionally wearing chest protectors, gloves, goggles, knee and elbow pads, long pants, long sleeve shirt or jacket, and over the ankle boots will greatly reduce risk of injury.</li><li>Do not operate any ATV in a manner other than with both hands on the handlebars, both feet on the pegs. Do not operate any UTV until all occupants are properly seat belted.</li><li>No drugs or alcohol consumption before or during use and possession of rented ATV or other vehicle and equipment.</li><li>Obey all posted signs. Do not ride faster than posted speed limits.</li><li>Do not carry passengers other than as originally mounted on the vehicle with the equipment assigned. NO RIDING DOUBLE ON ATVS DESIGNED FOR 1 PERSON. Follow manufactures seating requirements.</li><li>Ride at your current skill level. Don’t push your limit! Be careful.</li><li>Do not ride outside designated OHV areas or trails. They are clearly marked.</li><li>Do not ride in the water, wet sand or mud. It corrodes the machine. You will be charged for cleanup each machine!</li><li>The minimum rollover charge for any ATV is $300.00. The minimum charge for any UTV rollover is $600 plus the cost to repair the damages – parts at retail price, labor at $100 per hour and vehicle downtime at the daily rental rate. If a rollover or tip over occurs where the damage disables the vehicle, the remainder of your time is downtime and no substitute vehicle will be given. This is not limited to tipping or flipping the vehicle on its side or top.</li><li>Respect people’s campsites and do not endanger the campers, their kids or pets. The speed limit around campsites and on the beach is 25 mph</li><li>Do not participate in any race or other contest involving ATV/UTV’s or other vehicles.</li><li>Do not tow other ATVs or other vehicles and do not have them tow you and your rental ATV or rental vehicles.</li><li> Watch out for drop-offs and sand bowls. They can vary from one foot to 100 feet. Be very careful!</li><li>Watch out for wet spots and ruts while riding in the Sand dunes. Hitting rocks/sharp objects can ruin tires and damage the suspension of your rental. You are responsible for all tire damage that occurs during your rental.</li><li>Be aware of other riders and vehicles. Conditions can become crowded very quickly.</li><li>Ride prepared. Bring a charged cell phone, suitable clothing, maps and bottled water.</li><li>Do not attempt steep trails when you do know where they end up. Being trapped at the bottom of a large dune hill can lead to an expensive recovery bill for your machine.</li><li>Do not park and leave vehicle or equipment unattended. Stay with your vehicle. You are responsible if you’re ATV/ UTV disappears.</li><li>In case of a breakdown, call your rental location listed on our website or speak with a park ranger. Do not leave a disabled vehicle alone at any time. Additional rental time will be allocated for time lost due to a breakdown for the rider of the down vehicle only.</li><li> Anyone not following these rules, or caught speeding, or riding without a helmet, will be escorted back to Revx ATV and the remainder of their riding time will be forfeited.</li><li>Vehicles are to be returned on time or you will be charged additional fees.</li><li>There are no refunds for early returns.</li><li>There are no refunds due to weather changes.</li><li>Always take care of our equipment. Please drive carefully; these razors cost over $15,000 each. If you damage it or total it today, we expect you to pay for it today.</li><li>Never ever jump this vehicle. It will land on its nose. Damaging the suspension or frame is expensive. It will cost you parts labor and down time.</li><li>Never make aggressive turns or donuts, the tires can come off the rims and cause this vehicle to tip over or roll over. The tire fee is $100 to clean out and re-mount the tire.</li><li>Getting stuck and trying to drive out is the number one cause of belt failures. Prolong driving under 10 miles an hour in high range will also destroy the belt. There is a $200 charge to replace the belt.</li><li>Be aware of your terrain. Do not go up, down or sideways on steep inclines. Explore your terrain before traveling at higher speeds. Watch ahead for other vehicles. Sudden drop offs are everywhere.</li><li> Always instruct and ensure that everybody is properly seat belted in and knows their proper hand hold. Never allow passengers to hold on to roll bars or door frames. Always ensure all passengers are wearing helmets and that the helmets are strapped on properly.</li><li> Passengers should be able to reach hand holds and place feet on the floor with seat belts fastened. We do not recommend or allow small children to ride in car seats. Never put a child in your lap to help you drive </li><li>If you hear or feel anything that seems like you have a mechanical problem developing please stop and call us to prevent further damage. </li><li>Always stay out of the areas we have outlined to prevent unnecessary risk of damage or collision or injuries. There is a $300 towing charge if we have to tow you out.</li><li> When shifting gears, always make sure the vehicle is stopped. Always ensure engine is at idle always move shifter gently. Never engage the all-wheel-drive while the wheels are spinning. Severe damage to transmission differential or drive-line can occur.</li><li> We reserve the right to further inspect and revise our estimate of damages after your ride. You are responsible for everything that gets broke during your rental.</li><li> Do not allow underage drivers to drive the vehicle. Our minimum age is 25 to drive are razors and our minimum age is 12 to drive our ATV’s never allow anyone who has not signed our agreement to ride or drive this vehicle</li><li> Always remember the 25 mile an hour speed limit on the beach or within 50 feet of other campers. It is easy to forget your speed.</li><li>The flags and/or whips have to be on our ATV’s at all times while riding at the dunesfor safety reasons. If they get damaged or stolen while you are renting the ATV you will be charged $30 to replace it.</li></ol><p>Each of the undersigned certifies that he or she has read this Rental Agreement and Waiver of Liability, understands each of its provisions, and executes it voluntarily in good faith and with full knowledge of its significance. The undersigned customer hereby acknowledges and agrees that Revx ATV Rentals is a separate and distinct business entity and has no association, either actual or implied.</p><p>Signed by " . $fname . " " . $lname . " on " . date('Y-m-d h:i A') . ".</p></body></html>";
				$from_email  = "info@revxapp.com";
				$to_email    = $email;
				//Load email library 
				$this->load->library('email');
				$this->email->set_mailtype("html");

				$this->email->from($from_email, 'Revx');
				$this->email->to($to_email);
				$this->email->subject('Revx');
				$this->email->message($email_body1);
				if ($this->email->send()) {
					$this->session->set_flashdata('info_message_success', 'Thanks for confirmation.');
					redirect(base_url('home'));
				} else {
					$this->session->set_flashdata('info_message_success', 'Something went wrong');
					redirect(base_url() . 'checkout/' . $orderId);
				}

				//redirect(base_url('home'));
			} else {
				$this->session->set_flashdata('info_message_success', 'Something went wrong.');
				redirect(base_url('home'));
			}
		} else {
			$fname = trim($this->input->post('fname'));
			$lname = trim($this->input->post('lname'));
			$lnumber = trim($this->input->post('lnumber'));
			$lstate = trim($this->input->post('lstate'));
			$dob = trim($this->input->post('dob'));
			$address = trim($this->input->post('address'));
			$data = array(
				'fname' => $fname,
				'lname' => $lname,
				'lnumber' => $lnumber,
				'lstate' => $lstate,
				'dob' => $dob,
				'address' => $address
			);
			$this->form_validation->set_error_delimiters('<div >', '</div>');
			$this->session->set_flashdata('info_message', validation_errors());
			redirect(base_url('home'));
		}
	}
}
