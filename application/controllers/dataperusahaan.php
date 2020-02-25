<?php 
class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index(){
		$this->load->view('v_login');
	}

	function registrasi(){
		$email = $this->input->post('username');
		$noTelp = $this->input->post('noTelp');
		$noHP = $this->input->post('noHP');
		$telegram = $this->input->post('telegram');
		$password = $this->input->post('password');

		
		$data=array(
			'username'=>$email,
			'noTelp' => $noTelp,
			'noHP' => $noHP,
			'telegram' => $telegram,
			'password' => $password
		);
		$this->m_login->registrasi($data,'user');
		redirect('coba');
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}