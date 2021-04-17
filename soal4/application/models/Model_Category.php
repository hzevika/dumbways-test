<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Category extends CI_Model{
    function getData(){
        return $this->db->get('category_tb');
    }

    function insertData($data){
        $this->db->insert('category_tb',$data);
    }

    function getId($id){
        $this->db->where('id',$id);
        $this->db->select("*");
        $this->db->from('category_tb');
        return $this->db->get()->result();
    }

    function updateData($data, $param){
        $this->db->where($param);
        $this->db->update('category_tb',$data);
    }

    function deleteData($id){
        $this->db->where('id',$id);
        $this->db->delete('category_tb');
    }
}