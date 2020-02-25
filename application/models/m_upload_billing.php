<?php
class M_upload_billing extends CI_Model{
 
    function simpanData($data){
            $this->db->insert('data_billing', $data); 
    }
	function tampilDataBilling(){
		$hasil=$this->db->query("SELECT * FROM data_billing");
        return $hasil->result();
	}
     
}