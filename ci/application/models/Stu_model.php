<?php
class Stu_model extends CI_Model 
{
	/*Insert*/
	/*Insert*/
	function saverecords($data)
	{
          $this->db->insert('profile',$data);
          return $this->db->insert_id();
	}
	
}