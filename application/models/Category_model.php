<?php
class Category_model extends CI_Model
{
    public function __construct()
    {
	   $this->load->database();
    }
    public function select_all($table)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('status',1);
        $result = $this->db->get();
        return $result->result_array();
    }
    public function select_category($table,$categoryID)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('categoryID',$categoryID);
        $this->db->where('status',1);
        $result = $this->db->get();
        return $result->row_array();
    }
    
    public function select_cupon($table,$cuponID)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('cuponID',$cuponID);
        $this->db->where('status',1);
        $result = $this->db->get();
        return $result->row_array();
      
    }
    public function select_cate_ins($table,$category)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('category',$category);
        $this->db->where('status',1);
        $result = $this->db->get()->num_rows();
        return $result;
    }
    public function select_cate_edit($table,$category,$categoryID)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('category',$category);
        $this->db->where('categoryID!=',$categoryID);
        $this->db->where('status',1);
        $result = $this->db->get()->num_rows();
        return $result;
    }
    public function delete_category($table,$categoryID)
    {
        $this->db->where('categoryID', $categoryID);
        $this->db->set('status','0');
        $result=$this->db->update($table);
        return $result;
    }
    
    public function delete_cupon($table,$cuponID)
    {
        $this->db->where('cuponID', $cuponID);
        $this->db->set('status','0');
        $result=$this->db->update($table);
        return $result;
    }
    public function update_category($table,$data,$categoryID)
    {
        $this->db->where('categoryID', $categoryID);
        $result=$this->db->update($table,$data);
        return $result;
    }
    

}