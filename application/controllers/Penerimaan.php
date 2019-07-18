<?php 

    class Penerimaan extends CI_Controller {

        public function index(){

            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('templates/left');
            $this->load->view('Penerimaan/penerimaan');
            $this->load->view('templates/footer');

        }



    }