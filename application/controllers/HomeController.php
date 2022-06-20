<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = "Home";
        $this->load->view('bunga-header', $data);
        $this->load->view('bunga-home', $data);
        $this->load->view('bunga-footer', $data);
    }
    public function menu()
    {
        $data['judul'] = "Flowers";
        $this->load->view('bunga-header', $data);
        $this->load->view('bunga-flowers', $data);
        $this->load->view('bunga-footer', $data);
    }
    public function about()
    {
        $data['judul'] = "About Us";
        $this->load->view('bunga-header', $data);
        $this->load->view('bunga-about', $data);
        $this->load->view('bunga-footer', $data);
    }
    public function order()
    {
        $data['judul'] = "Order";
        $this->load->view('bunga-header', $data);
        $this->load->view('bunga-order', $data);
        $this->load->view('bunga-footer', $data);
    }
}
