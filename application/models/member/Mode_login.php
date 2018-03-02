<?php 
/**
* 
*/
class Model_login extends CI_Model
{
	function getLogin($us,$ps){
		$this->db->where($us,'username');
		$this->db->where($ps,'password');
		$q=$this->db->get('user');
		return $q->first_row();
	}
}
 ?>