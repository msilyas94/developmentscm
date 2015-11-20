<?php
	
	class M_login extends CI_model{
	
		
		public function cek_userpass($username, $password){
			
			$query=$this->db->where('username', $username)
							->where('password', md5($password))
							//->where('type', '2') nanti buat fungsi pengecekan terhadapa statusnya. kalo 1 dari mitra
												   //kalo 1 mitra kalo 2 bukan
							->limit(1)->get('umm01user');
			
			if($query->num_rows() == 1){

				return $query->row_array();
				return TRUE;
			}
			else{
				return FALSE;
			}

		}

		


	}
?>