<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->load->model('m_kategori');
        
    }

	public function index()
	{
		$data['header']='header.php';
		$data['data']  =$this->db->get('categories');
		$this->load->view('kategori/v_datakategori',$data);
	}
	public function tambah()
	{	
		$data['menu']		='menu.php';
		$data['content']	='kategori/v_tambahkategori.php';
		$this->load->view('kategori/v_tambahkategori.php',$data);
	}

	public function edit($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='kategori/v_editkategori.php';
		$data['data']		=$this->m_kategori->cekid($id)->row_array();
		$this->load->view('kategori/v_editkategori.php',$data);

	}

	public function editproses($id)
	{
		$cat_id=$this->input->post('cat_id');
		$cat_name=$this->input->post('cat_name');
		$cat_description=$this->input->post('cat_description'); 
		$date_created=$this->input->post('date_created'); 
							
			$info=array(
				'cat_id'=>$cat_id,
				'cat_name'=>$cat_name,
				'cat_description'=>$cat_description,
				'date_created'=>$date_created,
			);
			$this->m_kategori->getupdate($info,$id);
			redirect('kategori');
	}

	public function simpan()
	{
		$cat_id=$this->input->post('cat_id');
		$cat_name=$this->input->post('cat_name');
		$cat_description=$this->input->post('cat_description'); 
		$date_created=$this->input->post('date_created'); 
		$cek=$this->m_kategori->getdatakategori($cat_id);
		if($cek->num_rows()>0){ 				
			redirect('kategori/tambah');
		}else { 								
			$info=array(
				'cat_id'=>$cat_id,
				'cat_name'=>$cat_name,
				'cat_description'=>$cat_description,
				'date_created'=>$date_created,
			);
			$this->m_kategori->getinsert($info);
			redirect('kategori');
		}
	}


public function Hapus($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='kategori/v_hapuskategori.php';
		$data['data']		=$this->m_kategori->cekid($id)->row_array();
		$this->load->view('kategori/v_hapuskategori.php',$data);

	}
	public function hapusproses($id)
	{
			$this->m_kategori->hapus($id);
			redirect('kategori');
	
	}
 }