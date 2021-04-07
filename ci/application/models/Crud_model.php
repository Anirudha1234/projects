<?php
class Crud_model extends CI_Model 
{
   /*View*/
	function display_records()
	{
	$query=$this->db->query("select * from profile");
	return $query->result();
	}
	
} 