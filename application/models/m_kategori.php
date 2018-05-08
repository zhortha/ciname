<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_model {
	private $table="categories";
	private $primary="cat_id";

public function __construct()
{
	parent::__construct();
}

public function getkategorilist($limit, $start){
        $query = $this->db->get('categories', $limit, $start);
        return $query;
    }
public function getdatakategori($key)
 {
 	$k=$this->db->query("select*from categories where cat_id ='$key'");
 	return $k;
 }

 public function getinsert($data)
 {
 	$this->db->insert('categories',$data);
 }

public function cekid($id)
 {
 	$k=$this->db->query("select*from categories where cat_id ='$id'");
 	return $k;
 	
 }
public function getupdate($info, $id){
        $this->db->where($this->primary, $id);
		$this->db->update($this->table, $info);
    }
public function hapus($id){
        $this->db->where($this->primary, $id);
		$this->db->delete($this->table);
    }

}