<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelUsers extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function login($username,$password)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where(array('username' => $username,
								'password' => SHA1($password)));
		$this->db->order_by('id', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file ModelUsers.php */
/* Location: ./application/models/ModelUsers.php */