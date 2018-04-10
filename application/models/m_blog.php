<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Blog extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function getBlogQueryArray()
	{
		$query = $this->db->query("SELECT * from blog");
		return $query->result_array();
	}

	public function getByID($id)
	{
		return $this->db->query(" SELECT * from blog where id='".$id."'")->row();
	}

	// public function cekid($id)
 // 	{
 // 	$k=$this->db->query("select*from blog where id ='$id'");
 // 	return $k;
 // 	}

 // 	public function getinsert($data)
	// {
 // 		$this->db->insert('blog',$data);
 // 	}
}