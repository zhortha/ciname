<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_users extends CI_Model{
    
    public function login($username, $password){

        // Validasi
        
        $this->db->where('username', $username);
        
        $this->db->where('password', $password);
        
        $result = $this->db->get('users');
        
        if($result->num_rows() == 1){
        
            return $result->result_array();
        
        } else {
        
            return false;
        
        }
        
    }
    public function adduser($data,$table){
         $this->db->insert("users", $data);
     }
 
    public function selectuser(){
         $allUser = $this->db->query("select * from users");
        return $allUser->result_array();
     }
 
    public function deleteuser($user_id, $nama)
     {
        $this->db->query("DELETE from users where user_id = ".$user_id);
     }
 
    public function getuserbyid($user_id){
         $query = $this->db->query("SELECT * from users where user_id ='$user_id'");
         return $query->result_array();
    }
}