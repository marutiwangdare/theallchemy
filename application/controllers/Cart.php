<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
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
	    $data['title']="Cart | The Allchemy";
		$data['description']="The Allchemy";
		$data['keyword']="The Allchemy";
		$data['select_category']=$this->Home_model->select_category();
		$data['select_contact_info']=$this->Home_model->select_contact_info();
		$data['select_cart_data']=$this->Cart_model->select_cart_data('tbl_cart',$this->mg['userID'],$this->mg['ip']);
		$data['cart_count']=$this->Cart_model->cart_count('tbl_cart',$this->mg['userID'],$this->mg['ip']);
	    $data['select_sum_data']=$this->Cart_model->select_sum_data('tbl_cart',$this->mg['userID'],$this->mg['ip']);

		$this->load->view('cart',$data);
	}
	
// 	cart table 
public function cupon(){
        $data['title']="Cart - The Allchemy";
		$data['description']="Allchemy";
		$data['keyword']="Allchemy";
    	$data['select_cupon']=$this->Home_model->select_cupon();
    	$data['select_category']=$this->Home_model->select_category();
		$data['select_contact_info']=$this->Home_model->select_contact_info();
		$data['select_cart_data']=$this->Cart_model->select_cart_data('tbl_cart',$this->mg['userID'],$this->mg['ip']);
		$data['cart_count']=$this->Cart_model->cart_count('tbl_cart',$this->mg['userID'],$this->mg['ip']);
	    $data['select_sum_data']=$this->Cart_model->select_sum_data('tbl_cart',$this->mg['userID'],$this->mg['ip']);
       $data['select_categorysh']=$this->Home_model->select_categorysh();

       $cuponcode = $this->input->post('cupon');
       //echo $cuponcode;
    	$data['select_new_cupon']=$this->Home_model->select_new_cupon($cuponcode);
    //	echo $data['select_new_cupon'];
    	if ($data['select_new_cupon']){
    	 $this->session->set_flashdata('info_message_success', 'Cupon Applied.');
				$this->load->view('checkout',$data);

			
    	}
    	else {
      $this->session->set_flashdata('info_message', 'Invalid Cupon.');
				$this->load->view('checkout',$data);

    	}
        
        
    }

	
// 	cart table 

public function cart_process(){
        $data['title']="Cart - Revx";
		$data['description']="Revx";
		$data['keyword']="Revx";
		$productID = $this->input->post('productid');
			$find = $this->db->query('SELECT * FROM `tbl_cart` where productID ='.$productID.' and userID='.$_SESSION['userID'])->row_array();
			if($find) {
			$data = array(
					'userID'=>$this->input->post('userid'),
					'categoryID'=>$this->input->post('categoryid'),
					 'productID'=>$this->input->post('productid'),
					 'productTitle'=>$this->input->post('title'),
					 'productImage'=>$this->input->post('image'),
					 'productMRP'=>$this->input->post('price'),
					 'productQuantity'=>$this->input->post('quantity')+$find['productQuantity'],
					 'cartIP'=>$this->mg['ip'],
					'cartStatus'=>'1'
				);

			$this->db->where('cartID',$find['cartID']);
			$this->db->update('tbl_cart',$this->security->xss_clean($data));
			$insert=1;	
			} else {
				$data = array(
					'userID'=>$this->input->post('userid'),
					'categoryID'=>$this->input->post('categoryid'),
					 'productID'=>$this->input->post('productid'),
					 'productTitle'=>$this->input->post('title'),
					 'productImage'=>$this->input->post('image'),
					 'productMRP'=>$this->input->post('price'),
					 'productQuantity'=>$this->input->post('quantity'),
					 'cartIP'=>$this->mg['ip'],
					'cartStatus'=>'1'
				);
				 $insert=$this->Cart_model->cartInsert('tbl_cart',$this->security->xss_clean($data));	
			
			}
		   if(isset($insert))
			{
				
				$this->session->set_flashdata('info_message_success', 'Product has been added to cart.');
				redirect(base_url().'cart');
			}
			else
			{
				$this->session->set_flashdata('info_message', 'Something went wrong.');
				redirect(base_url().'home');
			}
}

	
	public function cartinsert()
	{
	    $data['title']="Cart - The Allchemy";
		$data['description']="The Allchemy";
		$data['keyword']="The Allchemy";
		/*$total_size = count($this->input->post('productid'));
        $categoryID = $this->input->post('categoryid');
	    $productID = $this->input->post('productid');
	    $productTitle = $this->input->post('title');
	    $productImage = $this->input->post('image');
	    $productP = $this->input->post('price');
     	$productMRP = count($this->input->post('productMRP'));
		$orderID=mt_rand(0000000,9999999);
			
        	for($i=0;$i<$total_size;$i++){
        	  //  $total_price = 1*$productMRP[$i];
			$insert=$this->db->insert('tbl_orders',array(
			    'orderID'=>trim($orderID),
			    'userID'=>$_SESSION['userID'],
			    'productID'=>$productID[$i],
			    'productTitle'=>$productTitle[$i],
			    'productMRP'=>$productP[$i],
			    'categoryID'=>$categoryID[$i],
			    'productImage'=>$productImage[$i],
              // 'cartIP'=>$this->mg['ip'],
			    'orderStatus'=>'0'
			    ));
        	}
        	
			if(isset($insert))
			{
				$confirm_order_id=urlencode(base64_encode($orderID));
					
					redirect(base_url().'checkout/'.$confirm_order_id); 
				
			}
			else
			{
				$this->session->set_flashdata('info_message', 'Something went wrong.');
				redirect(base_url().'home');
			}
			
			*/
			
					redirect(base_url().'checkout'); 
			
	
	}

	public function cartdelete($cartID=0)
	{
		$cartId=base64_decode(urldecode($cartID));
		$data=array(
			'cartStatus' => '0',
		);
		$cartDelete=$this->Cart_model->cartDelete('tbl_cart',$data,$cartId);
		if($cartDelete)
		{
			$this->session->set_flashdata('info_message_success', 'Product has been removed from cart.');
			redirect(base_url().'cart');
		}
		else
		{
			$this->session->set_flashdata('info_message', 'Something went wrong.');
			redirect(base_url().'cart');
		}
	}
	public function cartupdate()
	{
		$cartID = trim($this->input->post('cartID'));
		$productQuantity = trim($this->input->post('productQuantity')); 
		$productPrice = trim($this->input->post('productPrice'));
		if($productQuantity==0)
		{
			$productQty=1;
		}
		else
		{
			$productQty=$productQuantity;
		}
		$totalPrice=$productQty*$productPrice;
		$data=array(
			'productQuantity' => $productQty,
			'cartPrice' => $totalPrice
		);
		echo $cartUpdateQty=$this->Cart_model->cartUpdateQty('tbl_cart',$data,$cartID);
		// $this->session->set_flashdata('info_message_success', 'Product quantity has been updated to cart.');
	}
	
	
// 	empty cart 


}
