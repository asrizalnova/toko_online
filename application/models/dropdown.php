<?php

class dropdown extends CI_Model
{
    function _construct()
    {
        parent::_construct();
    }

    public function ambil_data($code)
    {
        $q = $this->db_>query("select * from jumlah where parent_jumlah=$code");
        return $q;
    }
}