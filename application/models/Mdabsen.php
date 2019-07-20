<?php
class Mdabsen extends CI_Model{
    public function selectAbsenThisMonth($where){
        $this->db->where("month(tgl_absen)",date("m"));
        $this->db->group_by("tgl_absen");
        return $this->db->get_where("absen",$where);
    }
}