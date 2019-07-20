<?php
class Karyawan extends CI_Controller{

    private function req(){
        $this->load->view("req/head");
        $this->load->view("plugin/datatable/datatable-css");
        $this->load->view("plugin/breadcrumb/breadcrumb-css");
        $this->load->view("plugin/modal/modal-css");
        $this->load->view("plugin/form/form-css");
        $this->load->view("req/head-close");
        $this->load->view("req/body-open");
        $this->load->view("req/top-navbar");
        $this->load->view("req/navbar");
    }
    public function close(){
        $this->load->view("req/script");
        $this->load->view("plugin/datatable/page-datatable-js");
        $this->load->view("plugin/form/form-js");
        $this->load->view("plugin/tabs/tabs-js");
        $this->load->view("req/body-close");
        $this->load->view("req/html-close");
    }
    public function index(){
        $where = array(
        );
        $data["karyawan"] = selectRow("karyawan",$where);
        
        $this->req();
        $this->load->view("req/content-open");
        $this->load->view("master/karyawan/category-header");
        $this->load->view("master/karyawan/category-body",$data);
        $this->load->view("req/content-close");
        $this->close();
    }

    public function insert(){
        $data = array(
            "nama_karyawan" => $this->input->post('nama_karyawan'),
            "tgl_masuk_karyawan" => $this->input->post('tgl_masuk_karyawan'),
            "gaji_perjam" => $this->input->post('gaji_perjam'),
            "status_aktif_karyawan" => 1,
            "nohp_karyawan" => $this->input->post('nohp_karyawan'),
            "id_user_add" => 0
        );

        insertRow("karyawan", $data);
        redirect('master/karyawan');

    }
}
?>