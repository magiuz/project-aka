<?php
class M_jalur extends CI_Model{

	function get_all_jalur(){
		$hsl=$this->db->query("SELECT * FROM tbl_jalur");
		return $hsl;
	}

}