<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("member/model_pesan");
	}
	public function index()
	{
		$data["data"]=$this->model_kategori->get_pesan();
		$data["link"]="pesan";
		$this->load->view('member/index',$data);
	}
	public function edit($id){
		$data["title"]="Edit Pesan";
		$data["aksi"]="update_pesan/".$id;
		$data["link"]="form_pesan";
		$data["data"]=$this->model_pesan->get_id($id);
		$this->load->view('member/index',$data);
	}
	public function delete($id){
		$this->model_pesan->hapus($id);
		redirect("pesan");
	}
	public function add(){
		$data["data"]=null;
		$data["title"]="Tambah Pesan";
		$data["aksi"]="simpan_pesan";
		$data["link"]="form_pesan";
		$this->load->view('member/index',$data);
	}
	public function simpan($id){
		$data["isi"]=$this->input->post("isi");
		$data["pengirim"]=$this->session->userdata('id_us');
		$data['penerima']=$id;
		$data['tgl_kirim']=date('Y-m-d H:i:s');
		$this->model_pesan->save($data);
		redirect("pesan");
	}
	
	
}
