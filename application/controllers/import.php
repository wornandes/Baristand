<?php 



class import extends CI_Controller{
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');	
		$this->load->library('session');	
	}

	function index(){
		$username_value = $this->session->flashdata('data_name');
		$data['dataID']=$this->m_login->getDataUser($username_value)->result();
		$this->load->view('v_import',$data);
	}


}
			