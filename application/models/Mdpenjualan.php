<?php 

class Mdpenjualan extends CI_Model{
    public function getItemAmountOrder($where){
        $this->db->select("count('id_submit_item_penjualan') as 'amount'");
        $this->db->group_by('id_submit_item_penjualan');
        $this->db->join("penjualan","penjualan.id_submit_penjualan = item_penjualan.id_submit_penjualan","inner");
        $result = $this->db->get_where("item_penjualan",$where);
        return $result->num_rows();
    }
}

?>