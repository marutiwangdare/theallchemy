<?php
class Payment_model extends CI_Model
{
    public function __construct()
    {
       $this->load->database();
    }

    public function insertPayment($table,$data)
    {
        $query=$this->db->insert($table,$data);
        return $query;
    }

    public function updatePayment($table,$data,$ordersId)
    {
        $this->db->where('id', $ordersId);
        $updateResult=$this->db->update($table,$data);
        // echo $this->db->last_query();
        return $updateResult;
    }

}