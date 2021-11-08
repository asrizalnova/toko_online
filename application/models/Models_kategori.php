<?php

class Models_kategori extends CI_Model
{
    public function data_by_LEA_GLORIA()
    {
        return $this->db->get_where("product",array('kategori' => 'by LEA GLORIA'));
    } 
    
    public function data_by_OH_MY_SKIN()
    {
        return $this->db->get_where("product",array('kategori' => 'by OH MY SKIN'));
    }    
}