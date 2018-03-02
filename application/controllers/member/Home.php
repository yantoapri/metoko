<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		// $us=$this->session->userdata('id_us');
		// if($us==""){
		// 	redirect('login');
		// }
	}
	function index()
	{
		$data['link']="home";
		$data['title']='Home';
		$this->load->view('member/index.php',$data);
	}
}
?>