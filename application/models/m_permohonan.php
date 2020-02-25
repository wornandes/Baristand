<?php 
class M_permohonan extends CI_Model{
	function tampilPermohonan($id){
		return $this->db->query("SELECT * FROM permohonan WHERE $id = id_input");
	}

	function tambahPermohonan($data,$table){
		$this->db->insert($table,$data);
	} 
	
	function hapusPermohonan($id){
		return $this->db->query("DELETE FROM `permohonan` WHERE `id_input`='$_GET[id_input]'");
	}

	function editPermohonan($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function registrasi($data,$table){
		$this->db->insert($table,$data);
	}

	function Upload_Billing($data,$table){
		$this->db->insert($table,$data);
	}

	function tampilDaftar(){
		$this->db->select('
        permohonan.*,  data_perusahaan.id_perusahaan, data_perusahaan.nama_perusahaan, data_perusahaan.alamat_kantor, data_perusahaan.nama_penanggung , data_perusahaan.tipe_jenis ,data_perusahaan.sertifikat_merek
        ');
        $this->db->join('data_perusahaan', 'permohonan.id_perusahaan = data_perusahaan.id_perusahaan');
        $this->db->from('permohonan');
        $query = $this->db->get();
        return $query->result();
	}


	function tampilDataPerusahaan(){
		$hasil=$this->db->query("SELECT * FROM data_perusahaan");
        return $hasil;
	}
	function tampilDaftarJadwal(){
		$hasil=$this->db->query("SELECT * FROM jadwal");
        return $hasil;
	}

}


 ?>