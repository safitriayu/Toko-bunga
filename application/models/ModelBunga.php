<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelBunga extends CI_Model{
    
    public function getBunga(){
        return $this->db->get('buku');
    }

    public function bukuWhere($where){
        return $this->db->get_where('buku', $where);
    }

    public function simpanBuku($data = null){
        $this->db->insert('buku',$data);
    }

    public function updateBuku($data = null, $where = null){
        $this->db->update('buku', $data, $where);
    }

    public function hapusBuku($where = null){
        $this->db->delete('buku', $where);
    }

    public function total($field, $where){
        $this->db->select_sum($field);
        if(!empty($where) && count($where) > 0){
            $this->db->where($where);
        }
        $this->db->from('buku');
        return $this->db->get()->row($field);
    }