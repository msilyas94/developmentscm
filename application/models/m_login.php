<?php
	
	class M_login extends CI_model{
	
		
		public function cek_userpass($username, $password){
			
			$query=$this->db->where('username', $username)
							->where('password', md5($password))
							//->where('type', '2')
							->limit(1)->get('umm01user');
			
			if($query->num_rows() == 1){

				return $query->row_array();
				return TRUE;
			}
			else{
				return FALSE;
			}

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
		$query = $this->db->query("INSERT INTO UMR05LogUser(loginid, username, loginat, logoutat, ipaddress) VALUES('$counter + 1','$username','$getdate',NULL,'$ipaddress')");
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