<?php 

class M_daftarImport extends CI_Model{	
		
	function daftarImport($data,$table){
		$this->db->insert($table,$data);
	}



}