<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_blog');
	}
	public function index()
	{
		$this->load->model('M_biodata');
		$data['header']='header.php';
		$data['biodata_array']=$this->M_biodata->getBiodataQueryArray();
		$data['biodata_object']=$this->M_biodata->getBiodataQueryObject();
		$data['biodatabuilder_array']=$this->M_biodata->getBiodataBuilderArray();
		$data['biodatabuilder_object']=$this->M_biodata->getBiodataBuilderObject();
		$this->load->view('v_home',$data);
	}

	public function about()
	{
		$data['header']='header.php';
		$this->load->view('about_view');
	}

	public function m_blog()
	{
		$data['blog_load']= $this->m_blog->getBlogQueryArray();
		$data['header']='header.php';
		$this->load->view('blog/v_blog',$data);
	}

	public function detail()
	{
		$data['header']='header.php';
		$cek = $this->input->post('id');
		$data['naruto'] = $this->m_blog->getByID($cek);
		$this->load->view('blog/v_blog_details',$data);
	}

	public function tes()
	{
		$data['header']='header.php';
		$this->load->view('blog/blog_details');
	}

	// 	public function tambah()
	// {	
	// 	$this->load->view('v_tambahdata.php',$data);
	// }

	// public function simpan()
	// {
	// 	$id=$this->input->post('id');
	// 	$author=$this->input->post('author'); 
	// 	$date=$this->input->post('date'); 
	// 	$tittle=$this->input->post('tittle'); 
	// 	$content=$this->input->post('content'); 
	// 	$image_file=$this->input->post('image_file'); 
	// 	$cek=$this->m_blog->getdataartikel($id);
	// 	if($cek->num_rows()>0){ 				
	// 		redirect('blog/tambah');
	// 	}else { 								
	// 		$info=array(
	// 			'id'=>$id,
	// 			'artikel'=>$artikel,
	// 			'date'=>$date,
	// 			'tittle'=>$tittle,
	// 			'content'=>$content,
	// 			'image_file'=>$image_file,
	// 		);
	// 		$this->m_blog->getinsert($info);
	// 		redirect('blog');
	// 	}
	// }
}
