<?php

class Kategori extends CI_Controller{
    public function by_LEA_GLORIA()
    {
        $data['by_LEA_GLORIA'] = $this->Models_kategori->
        data_by_LEA_GLORIA()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('by_LEA_GLORIA',$data);
        $this->load->view('templates/footer');
    }

    public function by_OH_MY_SKIN()
    {
        $data['by_OH_MY_SKIN'] = $this->Models_kategori->
        data_by_OH_MY_SKIN()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('by_OH_MY_SKIN',$data);
        $this->load->view('templates/footer');
    }
}
