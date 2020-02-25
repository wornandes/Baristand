<?php 

class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	function getData($table,$where){
		return $this->db->get_where($table,$where);
	}

	public function cekAdmin($table,$where){
		return $this->db->get_where($table,$where);
	}
	public function cekBendahara($table,$where){
		return $this->db->get_where($table,$where);
	}
	public function cekManagerOperational($table,$where){
		return $this->db->get_where($table,$where);
	}
	function registrasi($data,$table){
		$this->db->insert($table,$data);
	}
	function getDataUser($username){
		return $this->db->query("SELECT * FROM user WHERE username='$username'");
	}


}