<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("member/model_produk");
	}
	public function index()
	{
		$this->load->library("pagination");
        $config["base_url"]=site_url()."/produk";
        $config["total_rows"]=$this->model_produk->allcount();
        $config["per_page"]=10;
        $config["uri_segment"]=3;
        $this->pagination->initialize($config);
        $page=($this->uri->segment(3))? $this->uri->segment(3):0;
		$data["data"]=$this->model_produk->get_produk($page,$config["per_page"]);
		$data["link"]="produk";
		$this->load->view('member/index',$data);
	}
	
	//------------------------------------------------------
	public function add()
	{
		$data["data"]=null;
		$data["title"]="Tambah Produk";
		$data["aksi"]="simpan_produk";
		$data["link"]="form_produk";
		$data["kategori"]=$this->model_produk->get_kategori();
		$this->load->view('member/index',$data);
	}
	public function edit($id)
	{
		$data["title"]="Edit Produk";
		$data["aksi"]="update_produk/".$id;
		$data["link"]="form_produk";
		$data["data"]=$this->model_kategori->get_id($id);
		$this->load->view('member/index',$data);
	}
	public function delete($id)
	{
		$this->model_produk->hapus($id);
		redirect("produk");
	}
	public function simpan()
	{
		$data["produk"]=$this->input->post("produk");
		$data["jenis"]=$this->input->post("jsnis");
		$data["id_kat"]=$this->input->post("kat");
		$data["harga"]=$this->input->post("harga");
		$data["demo"]=$this->input->post("demo");
		$data["link"]=$this->input->post("produk");
		$data["detail"]=$this->input->post("detail");

		$config['upload_path']          = './upload/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;

        $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('file'))
                {
                        $error = array('error' => $this->upload->display_errors());
                }
                else
                {
                		$img=$this->upload->data();
                        $data = array('img' => $img['file_name']);
                        $this->model_produk->insert_produk($data);
                        redirect('member/produk');
                }
		$this->model_produk->save($data);
		redirect("produk");
	}
	public function update($id)
	{
		$data["produk"]=$this->input->post("produk");
		$data["jenis"]=$this->input->post("jsnis");
		$data["id_kat"]=$this->input->post("kat");
		$data["harga"]=$this->input->post("harga");
		$data["demo"]=$this->input->post("demo");
		$data["link"]=$this->input->post("produk");
		$data["detail"]=$this->input->post("detail");
		$this->model_produk->perbarui($data,$id);
		$config['upload_path']          = './upload/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;

        $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('file'))
                {       
      				$this->model_produk->update_produk($data);
                    redirect('member/produk');
                }
                else
                {
                	$img=$this->upload->data();
                    $data = array('img' => $img['file_name']);
                    $this->model_produk->update_produk($data);
                    redirect('member/produk');
                }
		$this->model_produk->save($data);
		redirect("produk");
	}
}
