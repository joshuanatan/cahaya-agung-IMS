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
            "status_aktif_pemesanan" => 1
        );
        $result = selectRow("pemesanan_barang",$where);
        $field = array(
            "id_submit_pemesanan","tgl_pemesanan"
        );
        $data["pemesanan"] = foreachMultipleResult($result,$field,$field);
        for($a = 0; $a<count($data["pemesanan"]); $a++){ //muterin list pemesanan barang
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
                }
            }
            /*END LOOP*/
            $result = selectRow("item_pemesanan_barang",$where);
            $field = array(
                "id_barang","jumlah_item_pemesanan"
            );
            $data["pemesanan"][$a]["pemesanan"] = foreachMultipleResult($result,$field,$field);
            for($b = 0; $b<count($data["pemesanan"][$a]["pemesanan"]); $b++){
                $$data["pemesanan"][$a]["pemesanan"][$b]["nama_barang"] = get1Value("barang","nama_barang", array("id_submit_barang" => $data["pemesanan"][$a]["pemesanan"][$b]["id_barang"]));
                $data_barang = $data["pemesanan"][$a]["pemesanan"][$b]["id_barang"]);
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
            'tgl_pemesanan' => date('Y-m-d',strtotime($this->input->post('tgl_pemesanan'))), 
            'status_aktif_pemesanan' => 1, 
            'is_done_pemesanan' => 0, 
            'id_user_add' => 0, 
        );
        $result= insertRow("pemesanan_barang", $data);
        $data2 = array(
            'id_barang' => $this->input->post('id_barang'), 
            'id_submit_pemesanan' => $result, 
            'harga_item_pemesanan' => $this->input->post('harga_item_pemesanan'), 
            'jumlah_item_pemesanan' => $this->input->post('jumlah_item_pemesanan'), 
            'id_user_add' => 0, 
        );
        insertRow("item_pemesanan_barang", $data2);
        redirect('sistem/restok');
    }
}
?>