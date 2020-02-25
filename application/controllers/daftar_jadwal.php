<?php 

class Daftar_jadwal extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_permohonan');
	}

	function index(){
		$x['dataJadwal']=$this->m_permohonan->tampilDaftarJadwal();
		$this->load->view('v_daftar_jadwal',$x);
	}
}