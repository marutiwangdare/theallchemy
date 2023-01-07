<?php
class Checkout_model extends CI_Model
{
    public function __construct()
    {
       $this->load->database();
    }

    public function addressInsert($table,$data)
    {
        $this->db->insert($table,$data);
        // echo $this->db->last_query();
        return $this->db->insert_id();
    }

    public function insertOrder($table,$data)
    {
        $query=$this->db->insert($table,$data);
        return $query;
    }

    public function getOrderId($table,$userID)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('userID',$userID);
        $this->db->where('orderStatus','0');
        $this->db->order_by('ordersID','desc');
        $this->db->group_by('orderID');
        $result = $this->db->get()->row_array();
        return $result;
    }

    public function removeCartData($table,$userID)
    {
        $this->db->where('userID', $userID);
        $this->db->delete($table);
    }

    public function updateOrder($table,$data,$ordersId)
    {
        $this->db->where('orderID', $ordersId);
        $updateResult=$this->db->update($table,$data);
        // echo $this->db->last_query();
        return $updateResult;
    }
    public function userupdateOrder($table,$data,$ordersId)
    {
        $this->db->where('orderID', $ordersId);
        $updateResult=$this->db->update($table,$data);
        // echo $this->db->last_query();
        return $updateResult;
    }

    public function updateStock($table,$productID,$productQuantity)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('productID',$productID);
        $this->db->where('status','1');
        $result = $this->db->get()->row_array();

        $stock_data=$result['stock']-$productQuantity;

        $data = array(
            'stock' => $stock_data
        );

        $this->db->where('productID', $productID);
        $updateResult=$this->db->update($table,$data);
        return $updateResult;
    }

}