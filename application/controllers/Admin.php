<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('modelKonfigurasi');
	}
	public function index()
	{
		$data['main']	= 'admin/dash/index';
		$this->load->view('template/template', $data);
	}

	public function konfigurasi()
	{
		$data['konfigurasi']	= $this->modelKonfigurasi->getData();
		$data['main']	= 'admin/konfigurasi/index';
		$this->load->view('template/template', $data);
	}

	public function editKonfigurasi($id=null)
	{
		$data['konfigurasi'] = $this->modelKonfigurasi->getDataById($id);
		$data['main'] = 'admin/konfigurasi/edit';
		$this->load->view('template/template', $data);
		if ($id==null) {
		$this->session->set_flashdata('Info', 'Id Kosong');
		redirect('admin/konfigurasi','refresh');
		}

		if ($this->input->post('submit')==true) {
			$this->form_validation->set_rules('namaweb', 'Nama web', 'trim|required');
			if ($this->form_validation->run() == TRUE) {
				$data = array(
					'namaweb'		=> $this->input->post('namaweb'),
					'alamat'		=> $this->input->post('alamat'),
					'email'			=> $this->input->post('email'),
					'nomor'			=> $this->input->post('nomor'),
					'facebook'		=> $this->input->post('facebook'),
					'instagram'		=> $this->input->post('instagram'),
					'keywords'		=> $this->input->post('keywords'),
					'keterangan'	=> $this->input->post('keterangan'),
					'meta'			=> $this->input->post('meta'),
				);

				$sql = $this->modelKonfigurasi->updateData($id,$data);
				if ($sql) {
					$this->session->set_flashdata('info', 'Berhasil Di update');
					redirect('admin/konfigurasi','refresh');
				} else{
					$this->session->set_flashdata('info', 'Data Gagal Di update');
					redirect('admin/editKonfigurasi'.$id,'refresh');
				}
			}
		}

	}

	
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */