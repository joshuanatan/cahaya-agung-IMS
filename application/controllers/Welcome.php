<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index(){
		$this->session->sess_destroy();
		$this->load->view('login/index');
	}
	public function login(){
		$where = array(
			"username" => $this->input->post("username"),
			"password" => md5($this->input->post("password")),
			"status_aktif_user" => 1
		);
		$result = selectRow("user",$where);
		$field = array(
			"username","id_submit_user","role_user"
		);
		if($result->num_rows() > 0){
			$data = foreachResult($result,$field,$field);
			$this->session->id_user = $data["id_submit_user"];
			$this->session->username = $data["username"];
			$this->session->role = $data["role_user"];
			if($this->session->role == "USER"){
				redirect("user");
			}
			else{
				redirect("admin");
			}
		}
	}
	public function logout(){
		redirect("welcome");
	}
}
