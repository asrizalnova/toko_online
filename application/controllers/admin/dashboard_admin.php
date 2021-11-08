<?php

class Dashboard_admin extends CI_Controller
{
    public function index()
    {
        $data['product'] = $this->Models_product->tampil_data()->result();
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates_admin/footer');
    }
}
