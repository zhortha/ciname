<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_biodata extends CI_Model {

	public function getBiodataBuilderArray()
	{
		$query = $this->db->get("biodata");
		return $query->result_array();
	}

	public function getBiodataBuilderObject($value='')
	{
		$query = $this->db->get("biodata");
		return $query->result();
	}

	public function getBiodataQueryArray()
	{
		$query = $this->db->get("biodata");
		return $query->result_array();
	}

		public function getBiodataQueryObject($value='')
	{
		$query = $this->db->get("biodata");
		return $query->result();
	}
}
