<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class register extends CI_Controller {


	function __construct(){
			parent::__construct();
			session_start();
			$this->load->model('m_register','',TRUE);

			$this->load->helper('form');

		
			
		}
	

	

	public function add(){
		
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username','trim|required|min_length[8]|max_length[255]|is_unique[umm01user.username]||xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[20]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is.unique[umm01user.username]|xss_clean');
		
		if ($this->form_validation->run() == FALSE){

			$this->load->view('login/v_register');
		}else {


		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$this->m_register->addusermitra();
		
		
		redirect('login/verifikasi');
		}


	}

	public function verifieduser(){
		$user = $this->uri->segment(4);
		$is_verified = $this->uri->segment(3);
		$this->m_register->isverified($is_verified,$user);
		redirect('login/newmitra');
	}
/*	public function log(){



	}*/

	

	

}