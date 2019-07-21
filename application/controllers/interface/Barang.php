<?php
class Barang extends CI_Controller{
    public function getHargaSatuan(){
        $where = array(
            "id_submit_barang" => $this->input->post("id_submit_barang")
        );
        $result = get1Value("barang","harga_jual_barang",$where);
        echo json_encode($result);
    }
    public function getSatuan(){
        $where = array(
            "id_submit_barang" => $this->input->post("id_submit_barang")
        );
        $result = get1Value("barang","satuan_barang",$where);
        echo json_encode($result);
    }
}
?>