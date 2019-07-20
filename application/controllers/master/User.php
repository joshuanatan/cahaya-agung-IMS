<?php
class User extends CI_Controller{

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
        $result = selectRow("user",$where);
        $field = array(
            "id_submit_user","username","role_user","status_aktif_user"
        );
        $data["user"] = foreachMultipleResult($result,$field,$field);
        $this->req();
        $this->load->view("req/content-open");
        $this->load->view("master/user/category-header");
        $this->load->view("master/user/category-body",$data);
        $this->load->view("req/content-close");
        $this->close();
    }

    public function insert(){
        $data = array( 
            'username' => $this->input->post('username') ,
            'password' => $this->input->post('password') ,
            'role_user' => $this->input->post('role_user') 
        );

        insertRow('user', $data);
        redirect('master/user');
    }
    public function update(){
        $where = array(
            "id_submit_user" => $this->input->post("id_submit_user")
        );
        $data = array();
        if($this->input->post("password") == ""){
            $data = array(
                'username' => $this->input->post('username'),
                'role_user' => $this->input->post('role_user') 
            );
        } 
        else{
            $data = array( 
                'username' => $this->input->post('username') ,
                'password' => $this->input->post('password') ,
                'role_user' => $this->input->post('role_user') 
            );
        }
        updateRow("user",$data,$where);
        redirect('master/user');
    }
}
?>