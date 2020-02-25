<?php 

class Daftar_permohonan_bendahara extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_permohonan');
	}

	function index(){
		$data['dataPermohonan']=$this->m_permohonan->tampilDaftar();
		$this->load->view('v_daftar_permohonan_bendahara',$data);
	}

	
}