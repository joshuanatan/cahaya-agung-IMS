<?php
class Restok extends CI_Controller{

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
            "status_aktif_distributor" => 1,
        );
        $result = selectRow("distributor",$where);
        $field = array(
            "id_submit_distributor","nama_distributor"
        );
        $data["distributor"] = foreachMultipleResult($result,$field,$field);
        /************************************ */
        $where = array(
            "status_aktif_barang" => 1
        );
        $result = selectRow("barang",$where);
        $field = array(
            "id_submit_barang","nama_barang"
        );
        $data["barang"] = foreachMultipleResult($result,$field,$field);
        /*********************************** */

        $where = array(
            "status_aktif_pemesanan" => 1,
        );
        $result = selectRow("pemesanan_barang",$where);
        $field = array(
            "id_submit_pemesanan","tgl_pemesanan","id_submit_distributor","status_aktif_pemesanan","is_done_pemesanan"
        );
        $data["pemesanan"] = foreachMultipleResult($result,$field,$field);

        for($a = 0; $a<count($data["pemesanan"]); $a++){ //muterin list pemesanan barang
            $data["pemesanan"][$a]["nama_distributor"] = get1Value("distributor","nama_distributor",array("id_submit_distributor" => $data["pemesanan"][$a]["id_submit_distributor"]));
            $where = array(
                "id_submit_pemesanan" => $data["pemesanan"][$a]["id_submit_pemesanan"]
            );
            $result = selectRow("penerimaan_barang",$where);
            $field = array(
                "id_submit_penerimaan","tgl_penerimaan"
            );
            $data["pemesanan"][$a]["penerimaan"] = foreachMultipleResult($result,$field,$field);
            /*LOOP U/ ITEM PENERIMAAN BARANG*/
            for($b = 0; $b<count($data["pemesanan"][$a]["penerimaan"]); $b++){
                $where = array(
                    "id_submit_penerimaan" => $data["pemesanan"][$a]["penerimaan"][$b]["id_submit_penerimaan"]
                );
                $result = selectRow("item_penerimaan_barang",$where);
                $field = array(
                    "jumlah_terima","id_submit_item_pemesanan"
                );
                $data["pemesanan"][$a]["penerimaan"][$b]["item_penerimaan"] = foreachMultipleResult($result,$field,$field);
                for($c = 0; $c<count($data["pemesanan"][$a]["penerimaan"][$b]["item_penerimaan"]); $c++){
                    $id_barang = get1Value("item_pemesanan_barang","id_barang", array("id_submit_item_pemesanan" => $data["pemesanan"][$a]["penerimaan"][$b]["item_penerimaan"][$c]["id_submit_item_pemesanan"]));

                    $data["pemesanan"][$a]["penerimaan"][$b]["item_penerimaan"][$c]["nama_penerimaan"] = get1Value("barang","nama_barang",array("id_submit_barang" => $id_barang));
                    $data["pemesanan"][$a]["penerimaan"][$b]["item_penerimaan"][$c]["satuan_penerimaan"] = get1Value("barang","satuan_barang",array("id_submit_barang" => $id_barang));
                }
            }
            /*END LOOP*/
            $where = array(
                "id_submit_pemesanan" => $data["pemesanan"][$a]["id_submit_pemesanan"]
            );
            $result = selectRow("item_pemesanan_barang",$where);
            $field = array(
                "id_barang","jumlah_item_pemesanan","harga_item_pemesanan","id_submit_item_pemesanan"
            );
            $data["pemesanan"][$a]["item_pemesanan"] = foreachMultipleResult($result,$field,$field);
            for($b = 0; $b<count($data["pemesanan"][$a]["item_pemesanan"]); $b++){

                $data["pemesanan"][$a]["item_pemesanan"][$b]["nama_barang"] = get1Value("barang","nama_barang", array("id_submit_barang" => $data["pemesanan"][$a]["item_pemesanan"][$b]["id_barang"]));
                
                $data["pemesanan"][$a]["item_pemesanan"][$b]["satuan_barang"] = get1Value("barang","satuan_barang", array("id_submit_barang" => $data["pemesanan"][$a]["item_pemesanan"][$b]["id_barang"]));
            }
        }
        
        $this->req();
        $this->load->view("req/content-open");
        $this->load->view("sistem/pemesanan/category-header");
        $this->load->view("sistem/pemesanan/category-body", $data);
        $this->load->view("req/content-close");
        $this->close();
    }
    public function insert(){
        $data = array(
            'id_submit_distributor' => $this->input->post('id_submit_distributor'), 
            'tgl_pemesanan' => $this->input->post('tgl_pemesanan'), 
            'status_aktif_pemesanan' => 1, 
            'is_done_pemesanan' => 0, 
            'id_user_add' => 0, 
        );
        $id_submit_pemesanan = insertRow("pemesanan_barang", $data);
        
        $checks = $this->input->post("checks");
        foreach($checks as $a){
            $data = array(
                "id_barang" => $this->input->post("id_barang".$a),
                "id_submit_pemesanan" => $id_submit_pemesanan,
                "harga_item_pemesanan" => $this->input->post("harga_item_pemesanan".$a),
                "jumlah_item_pemesanan" => $this->input->post("jumlah_item_pemesanan".$a),
                "id_user_add" => 0
            );
            insertRow("item_pemesanan_barang",$data);
        }
        redirect('sistem/restok');
    }
    public function insertPenerimaan(){
        $data = array(
            "tgl_penerimaan" => $this->input->post("tgl_penerimaan"),
            "id_submit_pemesanan" => $this->input->post("id_submit_pemesanan"),
            "id_user_add" => 0
        );
        $id_submit_penerimaan = insertRow("penerimaan_barang",$data);
        $checks = $this->input->post("checks");
        foreach($checks as $a){
            $data = array(
                "id_submit_penerimaan" => $id_submit_penerimaan,
                "id_submit_item_pemesanan" => $this->input->post("id_submit_item_pemesanan".$a),
                "jumlah_terima" => $this->input->post("jumlah_terima".$a),
                "id_user_add" => 0
            );
            insertRow("item_penerimaan_barang",$data);
        }
        redirect("sistem/restok");
    }
}
?>