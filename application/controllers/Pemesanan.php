<?php 

    class Pemesanan extends CI_Controller {

        public function index(){

            $this->load->view('templates/header');
            $this->load->view('templates/head');
            $this->load->view('templates/left')
            $this->load->view('Pemesanan/pemesanan');
            $this->load->view('templates/footer');

        }



    }