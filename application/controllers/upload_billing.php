<?php 

class Upload_billing extends CI_Controller{

	function __construct(){
        parent::__construct();
		$this->CI = & get_instance();
        $this->load->database();
        $this->load->model('m_upload_billing');
		$this->load->model('m_permohonan');
		$this->load->helper(array('form', 'url'));
         
    }
 
    function index(){
        $this->load->view('v_daftar_permohonan_bendahara');    
    }
 
 
    function upload_file(){



			//load library
			$this->load->library('upload');

			//Set the config
			$config['upload_path'] = './assets/file/billing'; //Use relative or absolute path
			$config['allowed_types'] = 'gif|jpg|png|pdf'; 
			$config['max_size'] = '1000000';
			$config['max_width'] = '1024';
			$config['max_height'] = '768';
			$config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number appended

			//Initialize
			$this->upload->initialize($config);

			//Upload file
			if( ! $this->upload->do_upload("billing")){

				//echo the errors
				echo $this->upload->display_errors();
			}


			//If the upload success
			
				
			$file_name = $this->upload->file_name;
			$link_file = ($config['upload_path'].$_FILES['billing']['name']);
			//Save the file name into the db
            $data = array(
                 'nama_file'  => $file_name,
                 'link_file' => $link_file
            );
            $this->m_upload_billing->simpanData($data);
			$data['dataPermohonan']=$this->m_permohonan->tampilDaftar();
			$this->load->view('v_daftar_permohonan_bendahara', $data);

    }

}