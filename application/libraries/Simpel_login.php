<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login 
{

	protected $CI;

	public function __construct()
		{
			$this->CI =& $CI =& get_instance();
			$this->CI->load->model('ModelUsers');
		}	

		// fungsi login
		public function login($username,$password)
		{
			$check = $this->CI->ModelUsers->login($username,$password);
			if ($check) {
				$id 		= $check->id;
				$username 	= $username;
				// create session
				$this->CI->session->set_userdata('id',$id);
				$this->CI->session->set_userdata('username',$username);
				// redirect ke halamana proteksi
				redirect(base_url('admin'),'refresh');			
		} else {
			$this->CI->session->set_flashdata('Warning','Username atau password salah');
			redirect(base_url('login'),'refresh');
		}
	}

	public function cek_login()
	{
		// ini adalah untuk memeriksa session sudah masuk apa belum
		if ($this->CI->session->userdata('username') == "") {
			$this->CI->session->set_flashdata('warning', 'Anda belum login');
			redirect('login','refresh')
		}
	}

	public function logout()
	{
		$this->CI->session->unset_userdata('id',$id);
		$this->CI->session->unset_userdata('username',$username);
		$this->CI->session->set_flashdata('sukses', 'Anda berhasil logout');
				// redirect ke halamana proteksi
		redirect(base_url('login'),'refresh');			
	}

}

/* End of file ModelUsers.php */
/* Location: ./application/models/ModelUsers.php */