<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
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

		public function tampil()
	{
		$data['header']='header.php';
		$data['data']  =$this->db->get('blog');
		$this->load->view('blog/v_listblog',$data);
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

		public function tambah()
	{	
		$this->load->helper('form');
		$this->load->view('blog/v_tambahdata.php');
	}

	public function simpan()
	{
		$id=$this->input->post('id');
		$author=$this->input->post('author'); 
		$date=$this->input->post('date'); 
		$tittle=$this->input->post('tittle'); 
		$content=$this->input->post('content'); 
		$image_file=$_FILES['image_file']['name'];
		
		if($image_file=''){}else {
			$config['upload_path'] = './assets/path';
			$config['allowed_types'] = 'gif|jpg|png';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('image_file')){
				$error = array('error' => $this->upload->display_errors());
			}
			else{
				$image_file = $this->upload->data('file_name');
			}

			$data = array(
				'id' => $id,
				'author' =>$author,
				'date' => $date,
				'tittle' => $tittle,
				'content' => $content,
				'image_file'=>$image_file);

			$this->m_blog->getinsert($data, 'blog');
			redirect('home/m_blog');
		}
	}
		public function hapus()
	{
		$image_file = $this->input->post('image_file');
		$id = $this->input->post('id');
		unlink('assets/path/'.$image_file);
		$this->m_blog->hapus($id);
		redirect('home/m_blog');
	}
	// public function Hapus($id)
	// {	
	// 	$data['header']		='header.php';
	// 	$data['data']		=$this->m_blog->cekid($id)->row_array();
	// 	$this->load->view('blog/v_hapusblog.php',$data);
	// }
	// public function hapusproses($id)
	// {
	// 		$this->m_blog->hapus($id);
	// 		redirect('blog');
	
	// }
	public function formEdit(){
		$id = $this->input->post('id');
		$data['key'] = $this->blog->getByID($id);
		$this->load->helper('form');
		$this->load->view('blog/v_editblog', $data);
	}

	public function edit()
	{
		$id = $this->input->post('id');
		$tittle = $this->input->post('tittle');
		$author = $this->input->post('author');
		$date = $this->input->post('date');
		$content = $this->input->post('content');
		$image_file = $_FILES['image_file']['name'];

			$data = array(
				'id' => $id,
				'tittle' => $tittle,
				'author' =>$author,
				'date' => $date,
				'content' => $content,
				'image_file'=>$image_file);

			$this->blog->update($data);
			unlink('assets/path/'.$image_file);
			redirect('home/m_blog');
	}
	
}
