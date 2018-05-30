<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_blog');
		$this->load->model('m_users');
	}
	public function index()
	{
		$data['header']='header.php';
		$this->load->view('v_login',$data);
	}
		public function index1()
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
		$cat_name=$this->input->post('cat_name'); 
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
				'cat_id' => $cat_name,
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
		$data['key'] = $this->m_blog->getByID($id);
		$this->load->helper('form');
		$this->load->view('blog/v_editblog.php ', $data);
	}

	public function edit($id)
	{
		
		$author=$this->input->post('author'); 
		$date=$this->input->post('date'); 
		$tittle=$this->input->post('tittle'); 
		$content=$this->input->post('content'); 
		$cat_name=$this->input->post('cat_name'); 
		$image_file=$_FILES['image_file']['name'];

			$data = array(
				'tittle' => $tittle,
				'author' =>$author,
				'date' => $date,
				'content' => $content,
				'cat_id' => $cat_name,
				'image_file'=>$image_file);

			$this->m_blog->getupdate($data);
			unlink('assets/path/'.$image_file);
			redirect('home/m_blog');
			
	}

		public function registerpage(){
		if (isset($_POST['submit'])) {
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');
			
			if ($this->form_validation->run() == TRUE) {
				$nama = $this->input->post('nama');
				$kodepos = $this->input->post('kodepos');
				$email = $this->input->post('email');
				$username = $this->input->post('username');
				$password = md5($this->input->post('password'));
			}
			
			$data = array(
				'nama' => $nama,
				'kodepos' => $kodepos,
				'email' => $email,
				'username' => $username,
				'password' => $password,
			);

			$register_date = $this->db->set('register_date','NOW()',FALSE);
			$this->db->insert('users',$data);
			$this->session->set_userdata($data);
			$this->session->set_flashdata("success","Your account has been registered");
            redirect("home/registerpage","refresh");
		}
		$this->load->view('v_registrasi'); 
	}
	
		public function loginpage()
	{

			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');
				
			if ($this->form_validation->run() === FALSE) 
			{
				$this->load->view('v_login');
			}
				else 
			{
				$username = $this->input->post('username');
				$password = $this->input->post('password');

				$user_id = $this->m_users->login($username, $password);
				if($user_id)

				{
					
					$user_data = array(
						'user_id' => $user_id,
						'username' => $username,
						'logged_in' => true
					);
					
					$this->session->set_userdata($user_data);

					// Set message
					$this->session->set_flashdata('user_loggedin', 'You are now logged in');
					// var_dump($user_data);
					redirect("home/index1","Refresh");
				}
				else
				{
					$this->session->set_flashdata('login_failed', 'Login is invalid');

					redirect("home/m_blog","Refresh");
				}
			}
	}
	public function logout()
	{
		// Unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');

        // Set message
        $this->session->set_flashdata('user_loggedout', 'Anda sudah log out');

        redirect('home/loginpage');

	}
}
