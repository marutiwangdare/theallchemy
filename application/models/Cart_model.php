<?php
class Cart_model extends CI_Model
{
    public function __construct()
    {
       $this->load->database();
    }

    public function check_cart_data($table,$productID,$subcategoryID,$categoryID,$userID,$ip)
    {
        if($userID>0)
        {
            $this->db->where('userID',$userID);
        }
        else
        {
            $this->db->where('userID','0');
            $this->db->where('cartIP',$ip);
        }
        $this->db->where('categoryID',$categoryID);
        $this->db->where('subcategoryID',$subcategoryID);
        $this->db->where('productID',$productID);
        $this->db->where('cartStatus',1);
        $result = $this->db->get('tbl_cart');
        // echo $this->db->last_query(); 
        return $result;
    }

    public function select_product($table,$productID)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('rentalID',$productID);
        $this->db->where('status',1);
        $result = $this->db->get(); 
        return $result->row_array();
    }

    public function select_price($table,$priceID)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('priceID',$priceID);
        $this->db->where('status',1);
        $result = $this->db->get(); 
        return $result->row_array();
    }

    public function cartInsert($table,$data)
    {
        $query=$this->db->insert($table,$data);
        return $query;
    }

    public function select_cart_data($table,$userID,$ip)
    {
        if($userID>0)
        {
            $this->db->where('userID',$userID);
        }
        else
        {
            $this->db->where('userID','0');
            $this->db->where('cartIP',$ip);
        }
        $this->db->where('cartStatus',1);
        $result = $this->db->get($table); 
        return $result->result_array();
    }

    public function cart_count($table,$userID,$ip)
    {
        if($userID>0)
        {
            $this->db->where('userID',$userID);
        }
        else
        {
            $this->db->where('userID','0');
            $this->db->where('cartIP',$ip);
        }
        $this->db->where('cartStatus',1);
        $result = $this->db->get('tbl_cart');
        return $result->num_rows();
    }

    public function cartDelete($table,$data,$cartID)
    {
        $this->db->where('cartID', $cartID);
        $result=$this->db->delete($table);
        return $result;
    }
    public function cartUpdate($table,$data,$cartID)
    {
        $this->db->where('cartID', $cartID);
        $result=$this->db->update($table,$data);
        return $result;
    }

    public function cartUpdateQty($table,$data,$cartID)
    {
        $this->db->where('cartID', $cartID);
        $this->db->update($table,$data);
        $query=$this->db->query("select * from tbl_cart where cartID='$cartID'");
        $select_query=$query->row_array();
        return $select_query['cartPrice'];
    }
	
		public function select_sum_data($table,$userID,$ip)
    {
        if($userID>0)
        {
            $this->db->where('userID',$userID);
        }
        else
        {
            $this->db->where('userID','0');
            $this->db->where('cartIP',$ip);
        }
        $this->db->where('cartStatus',1);
		$this->db->select('sum(productMRP*productQuantity) as sum_product');
        $result = $this->db->get($table); 
        return $result->result_array();
    }

    public function updateCartUserData($table,$ip,$data)
    {
        $this->db->where('cartIP', $ip);
        $this->db->where('userID', '0');
        $this->db->where('cartStatus', '1');
        $result=$this->db->update($table,$data);
        return $result;
    }

    public function selectCartData($table,$userID)
    {
        $this->db->where('userID',$userID);
        $this->db->where('cartStatus',1);
        $result = $this->db->get($table); 
        return $result;
    }

    public function update_order($orderID,$data)
    {
        $this->db->where('orderID',$orderID);
        $result=$this->db->update('tbl_orders',$data); //Set your table name
        return $result;
    }

    function delete_ordercart($userid)
    {
        $this->db->where('userID', $userid);
        $this->db->delete('tbl_cart'); 
    }

}