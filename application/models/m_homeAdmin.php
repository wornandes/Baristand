<?php 
class M_homeAdmin extends CI_Model{
	function tampilAcara(){
		return $this->db->query("SELECT * FROM permohonan ORDER BY id_input DESC");
	}

}

 ?>