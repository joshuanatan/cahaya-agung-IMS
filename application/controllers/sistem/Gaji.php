<?php
class Gaji extends CI_Controller{

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
        $data["karyawan"] = array();
        $this->req();
        $this->load->view("req/content-open");
        $this->load->view("sistem/gaji/category-header");
        $this->load->view("sistem/gaji/category-body",$data);
        $this->load->view("req/content-close");
        $this->close();
    }
    public function check(){
        $tahun = $this->input->post("tahun");
        $bulan = $this->input->post("bulan");
        $where = array(
            "status_aktif_karyawan" => 1
        );
        $result = selectRow("karyawan",$where);
        $field = array(
            "id_submit_karyawan","nama_karyawan","gaji_perjam"
        );
        $data["karyawan"] = foreachMultipleResult($result,$field,$field);

        for($a = 0; $a<count($data["karyawan"]); $a++){
            $where = array(
                "id_submit_karyawan" => $data["karyawan"][$a]["id_submit_karyawan"],
                "month(tgl_absen)" => $bulan,
                "year(tgl_absen)" => $tahun
            );
            $data["karyawan"][$a]["jumlah_masuk"] = getAmount("absen","id_submit_absen",$where);
            $data["karyawan"][$a]["gaji"] = $data["karyawan"][$a]["jumlah_masuk"] * $data["karyawan"][$a]["gaji_perjam"];
            $where = array(
                "id_submit_karyawan" => $data["karyawan"][$a]["id_submit_karyawan"],
                "bulan_gaji" => $bulan,
                "tahun_gaji" => $tahun
            ); 
            $data["karyawan"][$a]["status_bayar"] = isExistsInTable("gaji",$where);
        }
        $data["bulan"] = $bulan;
        $data["tahun"] = $tahun;
        $this->req();
        $this->load->view("req/content-open");
        $this->load->view("sistem/gaji/category-header");
        $this->load->view("sistem/gaji/category-body",$data);
        $this->load->view("req/content-close");
        $this->close();
    }
}
?>