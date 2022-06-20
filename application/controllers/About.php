<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = "About Us";
        $this->load->view('bunga-header', $data);
        $this->load->view('bunga-about', $data);
        $this->load->view('bunga-footer', $data);
    }
}
