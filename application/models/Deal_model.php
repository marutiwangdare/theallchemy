<?php
class Deal_model extends CI_Model
{
    public function __construct()
    {
       $this->load->database();
    }
    public function select_all_record($table)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('status',1);
        $this->db->order_by('productID','desc');
        $result = $this->db->get();
        return $result->result_array();
        
        
        
    }

    public function select_products($table,$productID)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('productID',$productID);
        $this->db->where('status',1);
        $result = $this->db->get();
        return $result->row_array();
    }
    public function select_product_ins($table,$product,$categoryID)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('title',$product);
        $this->db->where('categoryID',$categoryID);
        $this->db->where('status',1);
        $result = $this->db->get()->num_rows();
        return $result;
    }
    public function select_product_edit($table,$product,$productID,$categoryID)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('title',$product);
        $this->db->where('categoryID',$categoryID);
        $this->db->where('productID!=',$productID);
        $this->db->where('status',1);
        $result = $this->db->get()->num_rows();
        return $result;
    }
    public function delete_product($table,$productID)
    {
        $this->db->where('productID', $productID);
        $this->db->set('status','0');
        $result=$this->db->update($table);
        return $result;
    }
    public function update_product($table,$data,$productID)
    {
        $this->db->where('productID', $productID);
        $result=$this->db->update($table,$data);
        return $result;
    }
    public function status_update($table,$productID,$data)
    {
        $this->db->where('productID', $productID);
        $result=$this->db->update($table,$data);
        return $result;
    }

}