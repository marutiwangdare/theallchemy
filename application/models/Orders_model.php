<?php
class Orders_model extends CI_Model
{
    public function __construct()
    {
       $this->load->database();
    }

    public function my_orders($table,$userID)
    {
        $this->db->where('userID',$userID);
        $this->db->where('orderStatus!=','0');
        $this->db->group_by('orderID');
		$result = $this->db->get($table); 
        return $result->result_array();
    }

    public function get_order($table,$orderID)
    {
        // $this->db->group_by('orderID');
        $this->db->where('orderID',$orderID);
        $this->db->where('orderStatus','0');
        $result = $this->db->get($table); 
        return $result->row_array();
    }
    
    // driver details
    
    public function driver_details($orderID){
        
       
    }

     public function get_orders($table,$orderID)
    {
        $this->db->where('orderID',$orderID);
        $this->db->where('orderStatus','0');
        $result = $this->db->get($table); 
        return $result->result_array();
    }


    public function fetch_order($table,$orderID)
    {
        $this->db->group_by('orderID');
        $this->db->where('orderID',$orderID);
        $this->db->where('orderStatus!=','0');
        $result = $this->db->get($table); 
        return $result->row_array();
    }

    public function fetch_orders($table,$orderID)
    {
        $this->db->where('orderID',$orderID);
        $this->db->where('orderStatus!=','0');
        $result = $this->db->get($table); 
        return $result->result_array();
    }

    public function received_order($table)
    {
        $this->db->where('orderStatus!=','2');
        $this->db->order_by('ordersID','desc');
        // $this->db->group_by('orderID');
        $result = $this->db->get($table); 
        return $result->result_array();
    }

    public function delivered_order($table)
    {
        $this->db->where('orderStatus','1');
        $this->db->where('paymentStatus','1');
        $this->db->group_by('orderID');
        $result = $this->db->get($table); 
        return $result->result_array();
    }

    public function view_order_detail($table,$orderid)
    {
        $this->db->where('orderID',$orderid);
        $result = $this->db->get($table); 
        return $result->result_array();
    }

    public function view_order_user($table,$orderid)
    {
        $this->db->where('orderID',$orderid);
        $this->db->group_by('orderID');
        $result = $this->db->get($table); 
        return $result->row_array();
    }

    public function updateorder($table,$orderID,$data)
    {
        $this->db->where('ordersID', $orderID);
        $result=$this->db->update($table,$data);
        return $result;
    }
    
    public function deleteorder($table,$orderid){
        $this->db->where('ordersID', $orderid);
        $result = $this->db->delete($table);
        return $result;
    }
    
    
    public function view_all_order($table)
    {
        $this->db->where('paymentStatus','1');
        $this->db->group_by('orderID');
        $this->db->order_by('ordersID','DESC');
        $result = $this->db->get($table); 
        return $result->result_array();
    }
    
}