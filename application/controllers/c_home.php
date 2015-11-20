<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_home extends CI_Controller {


	function __construct(){
			parent::__construct();
			session_start();
			$this->load->model('m_login','',TRUE);
			$this->load->helper('form');
		
			
		}
	

	
	public function index()
	{
			
		if(!isset($_SESSION['username'])){
			redirect('c_login');
		}else{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('v_home');
		$this->load->view('template/footer');

		}

	}


	

}