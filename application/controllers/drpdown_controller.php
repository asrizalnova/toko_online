<?php

class dropdown_controller extends CI_Controller {
    function _construct()
    {
        parent::_construct();
        $this->load->helper(array('url'));
        $this->load->database();
        $this->load->model(array('dropdown'));
    }
    function index()
    {
        $data['jumlah'] = $this->dropdown->ambil_data(0);
        $this->load->view('dropdown/home_dropdown', $data);
    }
    
}