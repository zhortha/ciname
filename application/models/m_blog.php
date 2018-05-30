<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Blog extends CI_Model 
{
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
		return $this->db->query(" SELECT a.author, a.tittle, a.content, a.image_file, b.cat_name, b.cat_description from blog AS a join categories AS b on a.cat_id = b.cat_id where id='".$id."'")->row();
	}

	public function cekid($id)
 	{
 	$k=$this->db->query("select*from blog where id ='$id'");
 	return $k;
 	}

 	public function getinsert($data, $tabel)
	{
 		$this->db->insert("blog",$data);
 	}
 	// public function getupdate($info, $id){
  //       $this->db->where($this->primary, $id);
		// $this->db->update($this->table, $info);
  //   }
	public function hapus($id)
	{
		$this->db->query("DELETE from blog where id =".$id);
	}

		public function update($data)
		{
		$this->db->query("update blog set 
			author='".$data['author']."', date=".$data['date'].",
			tittle='".$data['tittle']."', content='".$data['content']."',
			image_file='".$data['image_file']."' where id = '".$data['id']."'");
		}
}

