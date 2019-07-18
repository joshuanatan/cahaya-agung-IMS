<?php 

    class Barang extends CI_Controller {

        public function index()
        {
            $data['judul'] = "Stok Barang";
            $data['brg'] = $this->Barang_model->getAllBarang();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/nav', );
            $this->load->view('templates/left');
            $this->load->view('Barang/barang', $data;
            $this->load->view('templates/footer');

        }

        public function tambah()
        {
            
        }

    }