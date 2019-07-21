<?php
class Penjualan extends CI_Controller{

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
        $this->load->view("sistem/penjualan/penjualan-js");
        $this->load->view("req/body-close");
        $this->load->view("req/html-close");
    }
    public function index(){
        $where = array(
            "status_aktif_barang" => 1
        );
        $result = selectRow("barang",$where);
        $field = array(
            "id_submit_barang","nama_barang"
        );
        $data["barang"] = foreachMultipleResult($result,$field, $field);

        $where = array(
            "status_aktif_penjualan" => 1
        );
        $result = selectRow("penjualan",$where);
        $field = array(
            "id_submit_penjualan","tgl_penjualan","jumlah_item_terjual","jumlah_uang_masuk"
        );
        $data["penjualan"] = foreachMultipleResult($result,$field,$field);
        for($a = 0; $a<count($data["penjualan"]);$a++){
            $where = array(
                "id_submit_penjualan" => $data["penjualan"][$a]["id_submit_penjualan"]
            );
            $field = array(
                "id_barang","jumlah_terjual","harga_jual"
            );
            $result = selectRow("item_penjualan",$where);
            $data["penjualan"][$a]["item_penjualan"] = foreachMultipleResult($result,$field,$field);
            for($b = 0; $b<count($data["penjualan"][$a]["item_penjualan"]); $b++){
                $data["penjualan"][$a]["item_penjualan"][$b]["nama_barang"] = get1Value("barang","nama_barang",array("id_submit_barang" => $data["penjualan"][$a]["item_penjualan"][$b]["id_barang"]));
                $data["penjualan"][$a]["item_penjualan"][$b]["satuan_barang"] = get1Value("barang","satuan_barang",array("id_submit_barang" => $data["penjualan"][$a]["item_penjualan"][$b]["id_barang"]));
            }
        }
        $this->req();
        $this->load->view("req/content-open");
        $this->load->view("sistem/penjualan/category-header");
        $this->load->view("sistem/penjualan/category-body",$data);
        $this->load->view("req/content-close");
        $this->close();
    }

    public function insert(){
        $where = array(
            "status_aktif_penjualan" => 1
        );
        $max_id = getMaxId("penjualan","id_submit_penjualan",$where);
        $checks = $this->input->post("checks");
        $jumlah = 0;
        foreach($checks as $checked){
            $data = array(
                "id_barang" => $this->input->post("id_barang".$checked),
                "jumlah_terjual" => $this->input->post("jumlah_item_terjual".$checked),
                "harga_jual" => splitterMoney($this->input->post("harga_satuan_awal".$checked),","),
                "id_submit_penjualan" => $max_id,
                "id_user_add" => $this->session->id_user
            );
            insertRow("item_penjualan",$data);
            $jumlah += $data["harga_jual"]*$data["jumlah_terjual"];
            $stok = get1Value("barang","stok",array("id_submit_barang" => $data["id_barang"]));
            $where = array(
                "id_submit_barang" => $data["id_barang"]
            );
            $data = array(
                "stok" => $stok-$data["jumlah_terjual"] //ngurangin stok
            );
            updateRow("barang",$data,$where);
        }
        $data = array(
            "jumlah_item_terjual" => count($checks),
            "jumlah_uang_masuk" => $jumlah,
            "id_user_add" => $this->session->id_user,
            "status_aktif_penjualan" => 1
        );
        insertRow("penjualan", $data);
        redirect("sistem/penjualan");
    }

}
?>