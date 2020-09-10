<?php

class downloader_model extends CI_model
{
    public function get()
	{
		$hasil = $this->db->get('camaba')->row_array();
		return $hasil;
    }
    
    // ini bentuk array
	// public function read()
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('camaba');
	// 	$query = $this->db->get();
	// 	$hasil = $query->result_array();
	// 	return $hasil;
    // }
    
    // ini object
    public function read()
	{
		$this->db->select('*');
		$this->db->from('camaba');
		$query = $this->db->get();
		$hasil = $query->result();
		return $hasil;
    }
    public function read_single($id_camaba)
	{
		$this->db->select('*');
		$this->db->from('camaba');
		$this->db->where('id_camaba',$id_camaba);
		$query = $this->db->get();
		$hasil = $query->row_array();
		return $hasil;
	}
}
