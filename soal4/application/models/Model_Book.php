<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Book extends CI_Model{
    function getData(){
        return $this->db->get('book_tb');
    }

    function getDataDetail(){
        return $this->db->query('select book_tb.id as id, book_tb.name as name, category_tb.name as category, writter_tb.name as writter, book_tb.publication_year as publication_year, book_tb.img as img 
        from book_tb, category_tb, writter_tb 
        where book_tb.category_id = category_tb.id AND book_tb.writter_id = writter_tb.id;');
    }

    function insertData($data){
        $this->db->insert('book_tb',$data);
    }

    function getId($id){
        $this->db->where('id',$id);
        $this->db->select("*");
        $this->db->from('book_tb');
        return $this->db->get()->result();
    }

    function updateData($data, $param){
        $this->db->where($param);
        $this->db->update('book_tb',$data);
    }

    function deleteData($id){
        $this->db->where('id',$id);
        $this->db->delete('book_tb');
    }
}