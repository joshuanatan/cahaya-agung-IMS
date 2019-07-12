<?php 

class Home extends CI_Controller {
    public function index(){
        
        $data['judul'] = "Inventory Management System";
        $this->load->view('Home/header-home', $data);
        $this->load->view('Home/index');
        $this->load->view('Home/footer-home');
    }




}