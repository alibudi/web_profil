<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelKonfigurasi extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function getData()
	{
		$sql = $this->db->get('tbl_konfigurasi');
		return $sql->result();
	}

	public function getDataById($id)
	{
		$this->db->where('id', $id);
		$data = $this->db->get('tbl_konfigurasi')->row();
		return $data;
	}
	
	public function updateData($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update('tbl_konfigurasi', $data);
		$cek = $this->db->affected_rows();
		return $cek > 0 ? true : false;
	}
}

/* End of file ModelKonfigurasi.php */
/* Location: ./application/models/ModelKonfigurasi.php */