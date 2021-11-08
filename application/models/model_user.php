<?php

class model_user extends CI_Model{
  public function detail_user(){
    return $this->db->get('customer');
  }
}

