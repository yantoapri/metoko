<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pesan extends CI_Model {

	public function get_id($id){
		$this->db->where("id",$id);
		$q=$this->db->get("pesan");
		return $q->first_row();
	}
	public function allcount(){
		$q=$this->db->count_all_results("pesan");
		return $q;
	}

	public function get_pesan($id, $str, $end){
		$q=$this->db->query("select pesan.id,user.username,user.nama,pesan.tgl_kirim,pesan.isi from
		pesan join user on user.id=pesan.penerima where pesan.pengirim=$id  or pesan.penerima=$id order by tgl_kirim DESC limit $str,$end ");
		return $q->result();
	}

	public function insert_pesan($data){
		$this->db->insert("pesan",$data);
	}
	public function update_pesan($data,$id){
		$this->db->where("id",$id);
		$this->db->update("pesan",$data);
	}
	public function hapus($id){
		$this->db->where("id",$id);
		$this->db->delete("pesan");
	}

}
?>