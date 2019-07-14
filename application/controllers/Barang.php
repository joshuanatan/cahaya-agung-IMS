<?php 

    class Barang extends CI_Controller {

        public function index(){

            $this->load->view('templates/header');
            $this->load->view('Barang/barang');
            $this->load->view('templates/footer');

        }



    }