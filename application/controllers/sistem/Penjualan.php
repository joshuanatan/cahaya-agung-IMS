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
        $this->load->view("req/body-close");
        $this->load->view("req/html-close");
    }
    public function index(){
        $this->req();
        $this->load->view("req/content-open");
        $this->load->view("sistem/penjualan/category-header");
        $this->load->view("sistem/penjualan/category-body");
        $this->load->view("req/content-close");
        $this->close();
    }

    public function insert(){
        $data = array(
           'jumlah_item_terjual' => $this->input->post('jumlah_item_terjual'),
           'jumlah_uang_masuk' => $this->input->post('jumlah_uang_masuk'),
           'id_user_add' => 0
        );

        $result = insertRow("penjualan", $data);
        $data2 = array(
            'id_barang' => $this->input->post('id_barang') , 
            'jumlah_terjual' => $this->input->post('jumlah_item_terjual') , 
            'harga_jual' => $this->input->post('jumlah_uang_masuk') , 
            'id_submit_penjualan' => $result , 
            'id_user_add' => 0
        );
        insertRow('item_penjualan', $data2);
        
        $count = $data2['id_barang'];
        foreach($count as $a) {
            $where = array(
                'id_submit_barang' => $a, 
            );

            $stok_brg = get1Value("barang","stok", $where);
            /*
            $stok_update = array(
                'stok' => ($stok_brg - $data['jumlah_item_terjual'])
            );*/
            //updateRow("barang", $stok_update, $where); 
            
        }
        
        
        
        
        
    }

}
?>