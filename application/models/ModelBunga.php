<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelBunga extends CI_Model
{

    public function getBunga()
    {
        return $this->db->get('bunga');
    }

    public function bungaWhere($where)
    {
        return $this->db->get_where('bunga', array('id' => $where));
    }

    public function simpanBunga($data = null)
    {
        $this->db->insert('bunga', $data);
    }

    public function updateBunga($data = null, $where = null)
    {
        // $this->db->update('bunga', $data, $where);
        $this->db->where('id', $where);
        $this->db->update('bunga', $data);
    }

    public function hapusBunga($where = null)
    {
        $this->db->delete('bunga', $where);
    }
     //manajemen kategori
     public function getKategori(){
        return $this->db->get('kategori');
    }
}
    