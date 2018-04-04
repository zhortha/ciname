<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutme extends CI_Controller {

	public function index()
	{
		$data['content']='aboutme.php';
		$data['menu']='menu.php';
		$this->load->view('home',$data);
	}
}
