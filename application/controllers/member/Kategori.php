<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("member/model_kategori");
	}
	public function index()
	{
		$data["data"]=$this->model_kategori->get_kategori();
		$data["link"]="kategori";
		$this->load->view('member/index',$data);
	}
	public function edit($id){
		$data["title"]="Edit Kategori";
		$data["aksi"]="update_kategori/".$id;
		$data["link"]="form_kategori";
		$data["data"]=$this->model_kategori->get_id($id);
		$this->load->view('member/index',$data);
	}
	public function delete($id){
		$this->model_kategori->hapus($id);
		redirect("kategori");
	}
	public function add(){
		$data["data"]=null;
		$data["title"]="Tambah Kategori";
		$data["aksi"]="simpan_kategori";
		$data["link"]="form_kategori";
		$this->load->view('member/index',$data);
	}
	public function simpan(){
		$data["kategori"]=$this->input->post("kategori");
		$data["keterangan"]=$this->input->post("keterangan");
		$check=$this->model_kategori->find($data['kategori']);
		if(count($check)>0){
			echo '<script>alert("Kategori Sudah Ada"); window.location=("'.site_url().'/kategori");</script>';
		}
		$this->model_kategori->save($data);
		redirect("kategori");
	}
	public function update($id){
		$data["kategori"]=$this->input->post("kategori");
		$data["keterangan"]=$this->input->post("keterangan");
		$this->model_kategori->perbarui($data,$id);
		redirect("kategori");
	}
	
}
