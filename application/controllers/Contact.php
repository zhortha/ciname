<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Contact extends CI_Controller {
	
		public function index()
		{
			$data = array(
				'nama' => "Tri Nanda Satrio Purnomo",
				'alamat' => "Malang",
				'email' => "trinsp11@gmail.com",
				'nim' => "1741723001",
				 );
			$this->load->view('contact', $data);
		}

		function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
		}
	
	}
	
	/* End of file Contact.php */
	/* Location: ./application/controllers/Contact.php */