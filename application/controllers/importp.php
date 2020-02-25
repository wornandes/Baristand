<?php 
class importp extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index(){
		$id_user = $_GET['id_user'];
		$data['id_user']=$id_user;
		$this->load->view('v_importp',$data);
	}
}
			