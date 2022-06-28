<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => "Dashboard Admin",
            'page' => 'pages/admin/v_dashboard'
        ];
        $this->load->view('layouts/admin/v_main', $data);
    }

    public function bunga()
    {
        $data = [
            'title' => "Semua Bunga",
            'page' => 'pages/admin/v_bunga',
            'data' => $this->ModelBunga->getBunga()->result_array()
        ];
        $this->load->view('layouts/admin/v_main', $data);
    }

    public function tambahBunga()
    {
        $data = [
            'title' => "Tambah Bunga",
            'page' => 'pages/admin/v-tambah-bunga',
            'data' => $this->ModelBunga->getKategori()->result()
        ];

        $this->load->view('layouts/admin/v_main', $data);
    }

    public function tambahBungaAction()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama', 'Username', 'required');
        $this->form_validation->set_rules('stok', 'Username', 'required');
        $this->form_validation->set_rules('terjual', 'Username', 'required');
        $this->form_validation->set_rules('category_id', 'Username', 'required');

        if ($this->form_validation->run() == TRUE) {
            $nama = $this->input->post('nama');
            $stok = $this->input->post('stok');
            $terjual = $this->input->post('terjual');
            $categori_id = $this->input->post('category_id');

            $data = array(
                'nama_bunga' => $nama,
                'stok' => $stok,
                'terjual' => $terjual,
                'id_kategori' => $categori_id,
            );
            $this->ModelBunga->simpanBunga($data);
            $this->bunga();
        } else {
            $this->tambahBunga();
        }
    }

    public function hapusBunga($id)
    {

        $where = ['id' => $this->uri->segment(3)];
        $delete = $this->ModelBunga->hapusBunga($where);
        // var_dump($delete);
        // die;
        redirect('admin/bunga');
    }

    public function updateBunga($id)
    {
        $data = [
            'title' => "Tambah Bunga",
            'page' => 'pages/admin/v-edit-bunga',
            'kategori' => $this->ModelBunga->getKategori()->result(), //data kategori
            'data' => $this->ModelBunga->bungaWhere($id)->row() //data bunga yang akan di edit
        ];

        $this->load->view('layouts/admin/v_main', $data);
    }

    public function updateBungaAction($id)
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama', 'Username', 'required');
        $this->form_validation->set_rules('stok', 'Username', 'required');
        $this->form_validation->set_rules('terjual', 'Username', 'required');
        $this->form_validation->set_rules('category_id', 'Username', 'required');

        if ($this->form_validation->run() == TRUE) {
            $nama = $this->input->post('nama');
            $stok = $this->input->post('stok');
            $terjual = $this->input->post('terjual');
            $categori_id = $this->input->post('category_id');

            $data = array(
                'nama_bunga' => $nama,
                'stok' => $stok,
                'terjual' => $terjual,
                'id_kategori' => $categori_id,
            );
            // update bung
            $this->ModelBunga->updateBunga($data, $id);
            // redirect ke halaman daftar bung
            $this->bunga();
        } else {
            // redirect ke halaman edit bunga
            $this->updateBunga($id);
        }
    }

    public function user()
    {
        $data = [
            'title' => "Users",
            'page' => 'pages/admin/v_user',
            'data' =>  $this->ModelUser->getUserLimit()->result_array()
        ];
        $this->load->view('layouts/admin/v_main', $data);
    }
}
