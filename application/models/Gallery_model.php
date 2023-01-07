<?php
class Gallery_model extends CI_Model
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
    public function select_gallery($table,$galleryID)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('galleryID',$galleryID);
        $this->db->where('status',1);
        $result = $this->db->get();
        return $result->row_array();
    }
    public function delete_gallery($table,$galleryID)
    {
        $this->db-> where('galleryID', $galleryID);
        $result=$this->db-> delete($table);
        return $result;
    }
    public function update_gallery($table,$data,$galleryID)
    {
        $this->db->where('galleryID', $galleryID);
        $result=$this->db->update($table,$data);
        return $result;
    }
    

}