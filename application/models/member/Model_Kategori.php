<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kategori extends CI_Model {

	public function get_id($id){
		$this->db->where("id",$id);
		$q=$this->db->get("kategori");
		return $q->first_row();
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
		$this->db->delete("kategori");
	}
	public function find($data){
		$this->db->like('kategori', 'match', 'before');    // Produces: WHERE `title` LIKE '%match' ESCAPE '!'
		$this->db->or_like('kategori', 'match', 'after');     // Produces: WHERE `title` LIKE 'match%' ESCAPE '!'
		$this->db->or_like('kategori', 'match', 'both');
		$q=$this->db->get("kategori");
		return $q->result();
	}

}
?>