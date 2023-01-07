<?php
class Slider_model extends CI_Model
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
    public function select_slider($table,$sliderID)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('sliderID',$sliderID);
        $this->db->where('status',1);
        $result = $this->db->get();
        return $result->row_array();
    }
    public function select_slider_ins($table,$slider)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('heading',$slider);
        $this->db->where('status',1);
        $result = $this->db->get();
        return $result->row_array();
    }

    public function select_slider_edit($table,$slider,$sliderID)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('heading',$slider);
        $this->db->where('sliderID!=',$sliderID);
        $this->db->where('status',1);
        $result = $this->db->get();
        return $result->row_array();
    }

    public function delete_slider($table,$sliderID)
    {
        $this->db->where('sliderID', $sliderID);
        $result=$this->db->delete($table);
        return $result;
    }
    public function update_slider($table,$data,$sliderID)
    {
        $this->db->where('sliderID', $sliderID);
        $result=$this->db->update($table,$data);
        return $result;
    }
    

}