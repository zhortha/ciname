 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 
 class User extends CI_Controller{
     function __construct(){
         parent::__construct();
         $this->load->model('blog');
         $this->load->model('user_model');
     }
 
     public function adduser()
 	{
         $this->load->helper('form');
         $this->load->view('header');
 		$this->load->view('user_create');
     }
 
     public function adduserdb()
 	{
         $user_id = $this->input->post('user_id');
 		$nama = $this->input->post('nama');
 		$kodepos = $this->input->post('kodepos');
 		$email = $this->input->post('email');
         $username = $this->input->post('username');
         $password = $this->input->post('password');
         $level = $this->input->post('level');
         
         $data = array(
             'user_id' => $user_id,
             'nama' => $nama,
             'kodepos' =>$kodepos,
             'email' => $email,
             'username' => $username,
             'password'=>$password,
             'level'=>$level
         );
 
         $this->user_model->adduser($data,"users");
 		redirect('user/viewuser');
         
     }
     public function viewuser()
 	{
         $data['dataUser'] = $this->user_model->selectuser();
         $this->load->view('header');
 		$this->load->view('user_view', $data);
     }
 
     public function deleteuser()
 	{
 		$user_id = $this->input->post('delete');
 		$nama = $this->input->post('nama');
 		$this->user_model->deleteuser($user_id, $nama);
 		redirect('user/viewuser');
     }
     
     public function toedituser()
 	{
 		$this->load->helper('form');
 		$user_id = $this->input->post('edit');
         $data['detailUser'] = $this->user_model->getuserbyid($id);
         $this->load->view('header');
 		$this->load->view('user_edit', $data);
     }
 }