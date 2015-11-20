<?php
	
	class M_supplier extends CI_model{
		
	function display(){
	
	$query = $this->db->query("SELECT * FROM smm02supplier");
	return $query;
	
	}

	function detailsupplier($id) {

	$query = $this->db->query("select * from smm02supplier where supplier_id = '$id'");	

	return $query;

	}

	function moreDetail(){

		$query = $this->db->query("select * from smr01supdetail inner JOIN smd01detail on fk_detail_id = detail_id");
		return $query;
	}

	function addSupplier(){

	
	
		

	}

	function editSupplier($id){

	}

	function deleteSupplier($id){

	}

	function classparent(){
		$query = $this->db->query("SELECT * from smm01class where lvl='0'");
		/*$rows=$query->row();
		return $rows;*/
		return $query;
	}

	function classchild1(){
		$query = $this->db->query("SELECT * from smm01class where lvl='1'");
		return $query;
	}

	function classchild2(){
		$query = $this->db->query("SELECT * from smm01class where lvl='2'");
		return $query;
	}

	function classchild3(){
		$query = $this->db->query("SELECT * from smm01class where lvl='3'");
		return $query;
	}

	function classchild4(){
		$query = $this->db->query("SELECT * from smm01class where lvl='4'");
		return $query;
	}


}

	

?>