<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Writter extends CI_Model{
    function getData(){
        return $this->db->get('writter_tb');
    }

    function insertData($data){
        $this->db->insert('writter_tb',$data);
    }

    function getId($id){
        $this->db->where('id',$id);
        $this->db->select("*");
        $this->db->from('writter_tb');
        return $this->db->get()->result();
    }

    function updateData($data, $param){
        $this->db->where($param);
        $this->db->update('writter_tb',$data);
    }

    function deleteData($id){
        $this->db->where('id',$id);
        $this->db->delete('writter_tb');
    }
}