<?php
	
	class M_register extends CI_model{
		
	
		function addusermitra(){


			
			$querycount = $this->db->query('select count(user_id) as counter from umm01user');
			$row = $querycount->row();
			$counter =  $row->counter;
			
			$username = $this->input->post('username');


		  $username1 = strtoupper($username);
		  $usernamefix = explode(" ", $username1);

			$f1 = $usernamefix[0]{0};
			$f2 = $usernamefix[0]{1};
			$f3 = $usernamefix[1]{0};
			$f4 = $usernamefix[2]{0};
			$f5 = $usernamefix[3]{0};
			$f6 = $usernamefix[4]{0};


			$user = "$f1$f2$f3$f4$f5$f6";
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$pass = MD5($password);
			$id = 'user'.$counter;
			$em = MD5($email);
			
			
			$_SESSION['emreg'] = $email;


			$query = $this->db->query("INSERT INTO umm01user(user_id,username,email,password,type) values('$id','VTA$user','$em','$pass','0')");
			return $query;	

		}

	 function isverified($em,$us){

	 

	 	$query = $this->db->query("UPDATE umm01user set type='1' where email = '$em' AND username ='$us'");
	 	return $query;

	 }


	/*function getuserdata($username){

		$query = $this->db->query("select * from UMM01user where username = '$username'");
		$rows=$query->row();
		return $rows;

		}*/


	/*function addloguser($username){
	
		
		$querycount = $this->db->query('select count(loginid) as counter from UMR05LogUser');
		$row = $querycount->row();
		$counter =  $row->counter;
		$_SESSION['loginid'] = $counter;
		$getdate = date("Y-m-d H:i:s");
		$ipaddress = $this->input->ip_address();
		$query = $this->db->query("INSERT INTO UMR05LogUser(loginid, username, loginat, logoutat, ipaddress) 
		VALUES('$counter + 1','$username','$getdate',NULL,'$ipaddress')");
		return $querycount;
		}*/


	
/*
	function lo($loginid){
		
		$getdate = date("Y-m-d H:i:s");
		$query = $this->db->query("UPDATE UMR05LogUser SET logoutat = '$getdate' WHERE loginid = '$loginid'");	
		}

*/
		

		


	}
?>