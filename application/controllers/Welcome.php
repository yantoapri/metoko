<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data["link"]="home";
		$this->load->view('index',$data);
	}
	public function member(){
		$us=$this->session->userdata('id_us');
		if($us==""){
			redirect('login');
		}else{
			redirect('member/home');
		}
	}
}
