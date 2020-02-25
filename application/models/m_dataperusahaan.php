<?php 

class M_login extends CI_Model{	

	function dataperusahaan($data,$table){
		$this->db->insert($table,$data);
	}

}