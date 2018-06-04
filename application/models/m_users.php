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
        
}