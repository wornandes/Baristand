<?php 

class M_daftarAMDK extends CI_Model{	
		
	function daftarAMDK($data,$table){
		$this->db->insert($table,$data);
	}



}