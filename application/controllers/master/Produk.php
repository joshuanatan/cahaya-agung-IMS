<?php
class Produk extends CI_Controller{
    
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
        $result = selectRow("barang",$where);
        $field = array(
            "id_submit_barang","nama_barang","stok","satuan_barang","harga_jual_barang","tgl_masuk_barang","status_aktif_barang"
        );
        $data["barang"] = foreachMultipleResult($result,$field,$field);
        $this->req();
        $this->load->view("req/content-open");
        $this->load->view("master/produk/category-header");
        $this->load->view("master/produk/category-body",$data);
        $this->load->view("req/content-close");
        $this->close();
    }

    public function insert(){
        $data = array(
            "nama_barang" => $this->input->post('nama_barang'),
            "stok" => $this->input->post('stok'),
            "satuan_barang" => $this->input->post('satuan_barang'),
            "harga_jual_barang" => $this->input->post('harga_jual_barang'),
            "status_aktif_barang" => 1,
            "id_user_add" =>  0
        );
        insertRow("barang", $data);
        redirect("master/produk");
    }
    public function update(){
        $where = array(
            "id_submit_barang" => $this->input->post("id_submit_barang")
        );
        $data = array(
            "nama_barang" => $this->input->post('nama_barang'),
            "stok" => $this->input->post('stok'),
            "satuan_barang" => $this->input->post('satuan_barang'),
            "harga_jual_barang" => $this->input->post('harga_jual_barang'),
            "tgl_masuk_barang" => $this->input->post('tgl_masuk_barang'),
        );
        updateRow("barang",$data,$where);
        redirect("master/produk");
    }
}
?>