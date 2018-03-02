<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_programer extends CI_Model {

	public function get_id($id,$tb){
		$this->db->where("id",$id);
		$q=$this->db->get($tb);
		return $q->first_row();
	}
	public function allcount($tb){
		$q=$this->db->count_all_resutl($tb);
		return $q;
	}
	public function get_kategori(){
		$q=$this->db->get("kategori");
		return $q->result();
	}
	public function insert_kategori($data){
		$this->db->insert("kategori",$data);
	}
	public function perbarui_kategori($data,$id){
		$this->db->where("id",$id);
		$this->db->update("kategori",$data);
	}
	public function hapus($id,$tb){
		$this->db->where("id",$id);
		$this->db->delete($tb);
	}

}
?>