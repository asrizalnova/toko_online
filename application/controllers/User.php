<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function detail_user()
    {
        $data['customer'] = $this->db->post_where('customer', ['nama' =>
        $this->session->userdata('username')])->row_array();
        echo 'Selamat datang' . $data['nama']['name'];
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('customer',$data);
        $this->load->view('templates/footer');
    }
}
