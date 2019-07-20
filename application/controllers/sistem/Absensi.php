<?php
class Absensi extends CI_Controller{

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
            "status_aktif_karyawan" => 1
        );
        $result = selectRow("karyawan",$where);
        $field = array(
            "id_submit_karyawan","nama_karyawan"
        );
        $data["karyawan"] = foreachMultipleResult($result,$field,$field);

        $where = array(

        );
        $this->load->model("Mdabsen");
        $result = $this->Mdabsen->selectAbsenThisMonth($where);
        $field = array(
            "tgl_absen"
        );
        $data["absen"] = foreachMultipleResult($result,$field,$field);
        for($a = 0; $a<count($data["absen"]); $a++){
            $data["absen"][$a]["jumlah_masuk"] = getAmount("absen","id_submit_absen",array("tgl_absen" => $data["absen"][$a]["tgl_absen"]));
            $result = selectRow("absen",array("tgl_absen" => $data["absen"][$a]["tgl_absen"]));
            $field = array(
                "id_submit_karyawan"
            );
            $data["absen"][$a]["karyawan"] = foreachMultipleResult($result,$field,$field);
            for($b = 0; $b<count($data["absen"][$a]["karyawan"]); $b++){
                $data["absen"][$a]["karyawan"][$b]["nama_karyawan"] = get1Value("karyawan","nama_karyawan",array("id_submit_karyawan" => $data["absen"][$a]["karyawan"][$b]["id_submit_karyawan"]));
            }
        }
        $this->req();
        $this->load->view("req/content-open");
        $this->load->view("sistem/absen/category-header");
        $this->load->view("sistem/absen/category-body",$data);
        $this->load->view("req/content-close");
        $this->close();
    }

    public function insert(){
        $hadir = $this->input->post('id_submit_karyawan');
        
        foreach($hadir as $a){
            $data = array(
                "tgl_absen" => $this->input->post("tgl_absen"),
                'id_submit_karyawan'=>$a
            );
            
            insertRow("absen", $data);
        }
        $data['id_user_add'] = 0;

        
        redirect('sistem/absensi');
    }
    public function updateKaryawanHadir(){
        $where = array(
            "tgl_absen" => $this->input->post("tgl_absen")
        );
        deleteRow("absen",$where);
        $hadir = $this->input->post('id_submit_karyawan');
        
        foreach($hadir as $a){
            $data = array(
                "tgl_absen" => $this->input->post("tgl_absen"),
                'id_submit_karyawan'=>$a
            );
            
            insertRow("absen", $data);
        }
        redirect('sistem/absensi');
    }
}
?>