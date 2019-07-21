<?php
class Admin extends CI_Controller{

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
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        /*load item dlu*/
        $where = array(
            "status_aktif_barang" => 1
        );
        $result = selectRow("barang",$where);
        $field = array(
            "id_submit_barang","nama_barang","stok","satuan_barang","harga_jual_barang"
        );
        $data["barang"] = foreachMultipleResult($result,$field,$field);
        $this->load->model("Mdpenjualan");
        for($a = 0; $a<count($data["barang"]);$a++){
            /*cek penjualan bulan ini totalnya*/
            $where = array(
                "id_barang" => $data["barang"][$a]["id_submit_barang"],
                "month(tgl_penjualan)" => date("m"),
                "year(tgl_penjualan)" => date("Y"),
                "status_aktif_penjualan" => 1
            );
            $data["barang"][$a]["terjual"] = $this->Mdpenjualan->getItemAmountOrder($where);
        }
        $where = array(
            "month(tgl_penjualan)" => date("m"),
            "year(tgl_penjualan)" => date("Y"),
            "day(tgl_penjualan)" => date("d"),
            "status_aktif_penjualan" => 1
        );
        $data["jumlah_penjualan_harian"] = getAmount("penjualan","id_submit_penjualan",$where);
        $data["jumlah_pemasukan_harian"] = getTotal("penjualan","jumlah_uang_masuk",$where);
        $where = array(
            "month(tgl_penjualan)" => date("m"),
            "year(tgl_penjualan)" => date("Y"),
            "status_aktif_penjualan" => 1
        );
        $data["jumlah_penjualan_bulanan"] = getAmount("penjualan","id_submit_penjualan",$where);
        $data["jumlah_pemasukan_bulanan"] = getTotal("penjualan","jumlah_uang_masuk",$where);
        $this->req();
        $this->load->view("req/content-open");
        $this->load->view("dashboard/category-body",$data);
        $this->load->view("req/content-close");
        $this->close();
    }
}