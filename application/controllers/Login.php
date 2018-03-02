<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("member/model_login");
	}
	public function index()
	{
		$data["link"]="login";
		if(count($_GET)>0) $data['e']='Username Atau Password Yang Anda Masukan Salah'; else $data['e']='';
		$this->load->view('index',$data);
	}
	
	public function in(){
		$us=htmlspecialchars($this->input->post('username'));
		$ps=htmlspecialchars($this->input->post('password'));
		$check=$this->model_login->getLogin($us,$ps);
		if($check->username==""){
			redirect('login/?e=1');
		}else
		{
			$data=array(
				'username'=>$check->username,
				'foto'=>$check->foto,
				'id_us'=>$check->id
			);
			$this->session->setuserdata($data);
			redirect('welcome/member/');
		}
	}
	public function out(){

	}
}
