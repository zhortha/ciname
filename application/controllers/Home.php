<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('M_biodata');
		$data['biodata_array']=$this->M_biodata->getBiodataQueryArray();
		$data['biodata_object']=$this->M_biodata->getBiodataQueryObject();
		$data['biodatabuilder_array']=$this->M_biodata->getBiodataBuilderArray();
		$data['biodatabuilder_object']=$this->M_biodata->getBiodataBuilderObject();
		$this->load->view('v_home',$data);
	}

	public function about()
	{
		$this->load->view('about_view');
	}

/*	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}*/
}
