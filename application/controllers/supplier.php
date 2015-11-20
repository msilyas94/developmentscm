<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class supplier extends CI_Controller {

	
	function __construct(){
			parent::__construct();
			session_start();
			$this->load->model('m_supplier','',TRUE);
			$this->load->helper('form');
		
			
		}	


	
	public function index(){


		if(!isset($_SESSION['username'])){
			redirect('login');
		}else{
	
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$data['bc'] = "Data Supplier";
		$data['supplier'] = $this->m_supplier->display();
		$this->load->view('adminsite/v_listsupplier',$data);

		$this->load->view('template/footer');
	}

	
	}

	public function exportExcel(){
		$this->load->helper('download');
		$this->load->dbutil();
		$query = $this->db->query("SELECT * FROM smm02supplier");
		$delimiter = ",";
		$newline = "\r\n";
		$enclosure = '"';

		$data =  $this->dbutil->csv_from_result($query, $delimiter, $newline, $enclosure);
		$name = 'report_mitra.csv';
		force_download($name, $data);
	 

	}
	public function viewAdd(){

		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('adminsite/v_addsupplier');
		$this->load->view('template/footer');
	}


	public function addSupplier(){
		
	
	}

	public function deleteSupplier(){
		// echo "a";
	}



	public function viewDetail(){

		$id = $this->uri->segment(3);
		$data['detail'] = $this->m_supplier->detailsupplier($id);
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('adminsite/v_supplierdetail',$data);
		$this->load->view('template/footer');

	}

	public function supClass(){

		$data['parent'] = $this->m_supplier->classparent();
		$data['child1'] = $this->m_supplier->classchild1();
		$data['child2'] = $this->m_supplier->classchild2();
		$data['child3'] = $this->m_supplier->classchild3();		
		$data['child4'] = $this->m_supplier->classchild4();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('adminsite/v_klasifikasi_mitra',$data);
		
	}

	public function doAssessment(){

		
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('adminsite/v_form_assessment');
		$this->load->view('template/footer');


	}

	public function selectAssessment(){
		$sel = $this->input->post('jenis_assessment');
		$this->load->view('template/header');
		$this->load->view('template/navbar');
	
		
		switch ($sel) {
			case 'osp':
				$this->load->view('adminsite/v_form_osp');
				break;
			
			case 'forwarding':
				$this->load->view('adminsite/v_form_forwarding');
				break;

			case 'prod_and_trade':
				$this->load->view('adminsite/v_form_production_and_trading');
				break;
		}



		$this->load->view('template/footer');



	}
}