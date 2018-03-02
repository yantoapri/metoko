<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_produk extends CI_Model {

	public function get_id($id){
		$this->db->where("id",$id);
		$q=$this->db->get("produk");
		return $q->first_row();
	}
	public function allcount(){
		$q=$this->db->count_all_results("produk");
		return $q;
	}
	public function get_kategori(){
		$q=$this->db->get("kategori");
		return $q->result();
	}
	public function get_produk($str,$end){
		$q=$this->db->query("select produk.id,produk.produk,produk.harga,produk.view,produk.like,produk.download,kategori.kategori from
		produk join kategori on kategori.id=produk.id_kat order by tgl_simpan DESC limit $str,$end ");
		return $q->result();
	}

	public function insert_produk($data){
		$this->db->insert("produk",$data);
	}
	public function update_produk($data,$id){
		$this->db->where("id",$id);
		$this->db->update("produk",$data);
	}
	public function hapus($id){
		$this->db->where("id",$id);
		$this->db->delete("produk");
	}

}
?>