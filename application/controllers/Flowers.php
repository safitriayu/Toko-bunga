<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Flowers extends CI_Controller{

    function __construct(){
        parent::__construct();
    }
    public function flowers(){
      $data['judul'] = "Flowers";
      $this->load->view('views/bunga-header',$data);
      $this->load->view('views/bunga-flowers',$data);
      $this->load->view('views/bunga-footer',$data);
  }
}