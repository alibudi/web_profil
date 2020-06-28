<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('passowrd', 'Password', 'required');

		if ($this->form_validation->run()) 
		{
			$username = $this->input->post('username');
			$passwrod = $this->input->post('password');
			$this->simpel_login->login($username,$password);
		}	
		$this->load->view('login');	
	}

	public function logout()
	{
		$this->simpel_login->logout();
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */