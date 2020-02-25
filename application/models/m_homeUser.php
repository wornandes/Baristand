<?php 
class M_homeUser extends CI_Model{
	function tampilPermohonan($id){
		return $this->db->query("SELECT * FROM permohonan WHERE id_perusahaan='$id'");
	}
	function tampilIDPerusahaan($id){
		$query = $this->db->query("SELECT id_perusahaan FROM data_perusahaan WHERE id_user='$id'");

		if (empty($query->row()->id_perusahaan)){
		return;
		}
		else{
		return $query->row()->id_perusahaan;
		}
	}
}
?>