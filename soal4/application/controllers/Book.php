<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class Book extends CI_Controller {
    function index(){
        $data['data_book'] = $this->Model_Book->getDataDetail()->result();
        $this->load->view('main',$data);
    }

    function detail($id){
        print_r($id);
    }
}