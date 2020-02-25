<?php 

class M_daftarLain extends CI_Model{	
		
	function daftarLain($data,$table){
		$this->db->insert($table,$data);
	}



}