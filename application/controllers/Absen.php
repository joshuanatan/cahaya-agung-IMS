<?php 

    class Absen extends CI_Controller {

        public function index(){

            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('templates/left');
            $this->load->view('Absen/Absen');
            $this->load->view('templates/footer');

        }



    }