<?php 

class M_daftarSIR extends CI_Model{	
		
	function daftarSIR($data,$table){
		$this->db->insert($table,$data);
	}



}