<?php 
class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
		$this->load->library('session');	
	}

	function index(){
		$this->load->view('v_login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if (empty($username) || empty($password)){
			echo "<script>alert('username atau password belum diisi')
			window.location='http://localhost/Siamang/login';</script>";
		}
		else{
			$_SESSION['username']=$username;
			if($_SESSION['username']=='admin1'){
				$cekAdmin = $this->m_login->cekAdmin("user",$where)->num_rows();
				if($cekAdmin > 0){
					$where = array(
					'username' => $username,
					'password' => $password
					);
					$cek = $this->m_login->cek_login("user",$where)->num_rows();
					if($cek > 0){

						$row =$this->m_login->getData('user',$where)->row();
						$_SESSION['noTelp'] = $row->noTelp;
						$_SESSION['id_user'] = $row->id_user;
						$_SESSION['username'] = $username;
						$_SESSION['noHP'] = $row->noHP;
						$_SESSION['telegram'] = $row->telegram;
						echo "<script>
						alert('Login as Admin Success')
						</script>";
						redirect(base_url("homeAdmin"));
					}
					else{
					echo "<script>alert('username atau password salah')
					window.location='http://localhost/Siamang/login';</script>";
					}
				}else {
					echo "<script>alert('username atau password salah')
					window.location='http://localhost/Siamang/login';</script>";
				}

			}else if($_SESSION['username']=='bendahara'){
				$cekBendahara= $this->m_login->cekBendahara("user",$where)->num_rows();
				if($cekBendahara > 0){
					$where = array(
					'username' => $username,
					'password' => $password
					);
					$cek = $this->m_login->cek_login("user",$where)->num_rows();
					if($cek > 0){
						$row =$this->m_login->getData('user',$where)->row();
						$_SESSION['noTelp'] = $row->noTelp;
						$_SESSION['id_user'] = $row->id_user;
						$_SESSION['username'] = $username;
						$_SESSION['noHP'] = $row->noHP;
						$_SESSION['telegram'] = $row->telegram;
						echo "<script>
						alert('Login as Bendahara Success')
						</script>";
						redirect(base_url("homeBendahara"));
					}
					else{
					echo "<script>alert('username atau password salah')
					window.location='http://localhost/Siamang/login';</script>";
					}
				}else {
					echo "<script>alert('username atau password salah')
					window.location='http://localhost/Siamang/login';</script>";
				}

			}else if($_SESSION['username']=='manager'){
				$cekManagerOperational = $this->m_login->cekManagerOperational("user",$where)->num_rows();
				if($cekManagerOperational > 0){
					$where = array(
					'username' => $username,
					'password' => $password
					);
					$cek = $this->m_login->cek_login("user",$where)->num_rows();
					if($cek > 0){
						$row =$this->m_login->getData('user',$where)->row();
						$_SESSION['noTelp'] = $row->noTelp;
						$_SESSION['id_user'] = $row->id_user;
						$_SESSION['username'] = $username;
						$_SESSION['noHP'] = $row->noHP;
						$_SESSION['telegram'] = $row->telegram;
						echo "<script>
						alert('Login as Manager Operational Success')
						</script>";
						redirect(base_url("homeManagerOperational"));
					}
					else{
					echo "<script>alert('username atau password salah')
					window.location='http://localhost/Siamang/login';</script>";
					}
				}else {
					echo "<script>alert('username atau password salah')
					window.location='http://localhost/Siamang/login';</script>";
				}
			}else{
				$where = array(
				'username' => $username,
				'password' => $password
				);
				$cek = $this->m_login->cek_login("user",$where)->num_rows();
				if($cek > 0){
					$row =$this->m_login->getData('user',$where)->row();
					$_SESSION['noTelp'] = $row->noTelp;
					$_SESSION['id_user'] = $row->id_user;
					$_SESSION['username'] = $username;
					$_SESSION['noHP'] = $row->noHP;
					$_SESSION['telegram'] = $row->telegram;
					
					$sess_data['id_user']   = $row->id_user;
					$sess_data['username']  = $row->username;
					$sess_data['noTelp']    = $row->noTelp;
					$sess_data['noHP']      = $row->noHP;
					$sess_data['telegram']  = $row->telegram;
					$this->session->set_userdata($sess_data);   


					echo "<script>
					alert('Login as User Success')	
					</script>";
					redirect(base_url("homeUser"));
				}
				else{
				echo "<script>alert('username atau password salah')
				window.location='http://localhost/Siamang/login';</script>";
				}
			}
			
		}
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
		$this->session->set_flashdata('data_name', $email);
		$this->m_login->registrasi($data,'user');
		redirect('import');
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}