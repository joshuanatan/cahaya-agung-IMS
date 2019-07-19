<?php 

    class Karyawan extends CI_Controller {

        public function index(){

            $data['judul'] = "Karyawan";
            $this->load->view('templates/header', $data);
            $this->load->view('templates/head');
            $this->load->view('templates/left');
            $this->load->view('Karyawan/karyawan');
            $this->load->view('templates/footer');

        }



    }