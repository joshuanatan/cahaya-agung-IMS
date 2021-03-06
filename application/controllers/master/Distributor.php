<?php
class Distributor extends CI_Controller{

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
            "delete_row" => 1
        );
        $result =  selectRow("distributor",$where);
        $field = array(
            "id_submit_distributor","nama_distributor","alamat_distributor","notelp_distributor","nama_pic","nohp_pic","status_aktif_distributor","tgl_tambah_distributor"
        );
        $data = array(
            "distributor" => foreachMultipleResult($result,$field,$field)
        );
        $this->req();
        $this->load->view("req/content-open");
        $this->load->view("master/distributor/category-header");
        $this->load->view("master/distributor/category-body",$data);
        $this->load->view("req/content-close");
        $this->close();
    }
    public function insert(){
        $data = array(
            "nama_distributor" => $this->input->post("nama_distributor"),
            "alamat_distributor" => $this->input->post("alamat_distributor"),
            "notelp_distributor" => $this->input->post("notelp_distributor"),
            "nama_pic" => $this->input->post("nama_pic"),
            "nohp_pic" => $this->input->post("nohp_pic"),
            "status_aktif_distributor" => 1,
            "id_user_add" => 0
        );
        insertRow("distributor",$data);
        redirect("master/distributor");
    }
    public function update(){
        $where = array(
            "id_submit_distributor" => $this->input->post("id_submit_distributor")
        );
        $data = array(
            "nama_distributor" => $this->input->post("nama_distributor"),
            "alamat_distributor" => $this->input->post("alamat_distributor"),
            "notelp_distributor" => $this->input->post("notelp_distributor"),
            "tgl_tambah_distributor" => $this->input->post("tgl_tambah_distributor"),
            "nama_pic" => $this->input->post("nama_pic"),
            "nohp_pic" => $this->input->post("nohp_pic"),
        );
        updateRow("distributor",$data,$where);
        redirect("master/distributor");
    }
    
    public function activate($id_submit_distributor){
        $where = array(
            "id_submit_distributor" => $id_submit_distributor
        );
        $data = array(
            "status_aktif_distributor" => 1
        );
        updateRow("distributor",$data,$where);
        redirect("master/distributor");

    }
    public function deactive($id_submit_distributor){
        $where = array(
            "id_submit_distributor" => $id_submit_distributor
        );
        $data = array(
            "status_aktif_distributor" => 0
        );
        updateRow("distributor",$data,$where);
        redirect("master/distributor");
    }
    public function delete($id_submit_distributor){
        $where = array(
            "id_submit_distributor" => $id_submit_distributor
        );
        $data = array(
            "delete_row" => 0,
            "status_aktif_distributor" => 0
        );
        updateRow("distributor",$data,$where);
        redirect("master/distributor");
    }
}
?>