<?php
	class login extends CI_Controller{
		

		function __construct(){
			parent::__construct();
			session_start();
			$this->load->model('m_login','',TRUE);
			$this->load->helper('form');
			$this->load->helper('url');
		
			
		}
		
		function index(){

			
			if(isset($_SESSION['username'])){
				redirect('home');
			}
			else{

				$this->load->view('login/header_login');
				$this->load->view('login/admin/v_loginadmin');//login semua bukan hanya admin
				$this->load->view('login/footer_login');
			}
			
		}

		function login_process(){ // Processing Username and ID

			$result=$this->m_login->cek_userpass(
				$this->input->post('username'),
				$this->input->post('password')
				);
				
			if($result == TRUE ){

				$_SESSION['username']=$this->input->post('username');
				$username = $_SESSION['username'];	
				redirect('home');				

			}
			else if($result == FALSE){
			
               
				redirect('login');	
				
	
			}
		}

		function newSupplier(){

				$this->load->view('login/header_login');
				echo "<script>alert('User anda telah terverifikasi, Silahkan login :)');</script>";
				$this->load->view('login/admin/v_loginadmin');
				$this->load->view('login/footer_login');
		}

		function register(){

			
			$this->load->view('login/v_register');
			
		}
		 
	

		function user_verification(){
			
		//kalo bener, kirim email link verifikasi sambil rubah statnya jadi 1
		$config = Array(
		    'protocol' => 'smtp',
		   	'smtp_host' => 'ssl://smtp.googlemail.com',
  			'smtp_port' => 465,
		    'smtp_user' => 'vendormanagement.scm',
		    'smtp_pass' => 'ptta@2013',
		    'mailtype'  => 'html', 
		    'charset'   => 'iso-8859-1',
		    'wordwrap' => TRUE
		);

		  $username = $_SESSION['username'];
		  $password = $_SESSION['password'];
		  $emailregi = $_SESSION['emreg'];
		  $emailreg = md5($emailregi);

		  $username1 = strtoupper($username);
		  $usernamefix = explode(" ", $username1);

		  
			$f1 = $usernamefix[0]{0};
			$f2 = $usernamefix[0]{1};
			$f3 = $usernamefix[1]{0};
			$f4 = $usernamefix[2]{0};
			$f5 = $usernamefix[3]{0};
			$f6 = $usernamefix[4]{0};



			$user = "$f1$f2$f3$f4$f5$f6";
		 
		  $this->load->library('email',$config);
		  $this->email->set_newline("\r\n");
		  $this->email->from('vendormanagement.scm@gmail.com', "Admin Vendor Management Team");
		  $this->email->to("$emailregi");
		  $this->email->subject("Verifikasi Akun Anda di MyTA");
		  $messages = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
						"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
						<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
						</head><body>';
		  $messages .= '<p>Dear Mitra,</p>';
		  $messages .= 'Terima kasih telah mendaftar menjadi Mitra Telkom Akses ';
		  $messages .= 'Silahkan Melakukan Aktivasi Account anda :<br>';
		  $messages .= '<a href="'.base_url().'index.php/c_register/verifieduser/'.$emailreg.'/VTA'.$user .'">Klik Disini</a>';	
		  $messages .= '<p>Username =  <b>VTA'.$user .'</b></p>';
		  $messages .= '<p>Password =  <b>'.$password .'</b></p>';
		  $messages .= '</body></html>';	
		  $this->email->message($messages);
		   
		 
		  
		  if($this->email->send()){     
		   
		   	$data['message'] = "Email Telah dikirimkan ke email anda";   
		  }else {
		   show_error($this->email->print_debugger()); 
		  } 

		  
		  // forward to index page
		  $this->load->view('login/v_verifikasi_email', $data);  
		  header( "refresh:5;url=index" );
		  unset($_SESSION['emreg']);
		   unset($_SESSION['username']);
		  unset($_SESSION['password']);      
		}
		
		
		function logout(){

/*			$loginid = $_SESSION['loginid'];*/
			/*$this->m_login->lo($loginid);*/
			session_destroy();
			redirect('login');
		}



	}
?>