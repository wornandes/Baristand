<?php 

class M_tambah_tim extends CI_Model{	
	function tambah_tim($data,$table){
		$this->db->insert($table,$data);
	}
}