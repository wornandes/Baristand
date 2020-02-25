<?php 
class M_homeBendahara extends CI_Model{
	function tampilAcara(){
		return $this->db->query("SELECT * FROM permohonan ORDER BY id_input DESC");
	}

}

 ?>