<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sijon extends CI_Controller {

	public function index()
	{
		$this->load->view('sijon');
	}

	public function blog()
	{
		$this->load->model('blog_model');
		$this->load->helper('text');
		$data['artikel'] = $this->blog_model->getAll();
		$this->load->view('blog', $data);
	}

	public function explorasi()
	{
		$status = $this->session->userdata('status');
        if ($status != 'user') {
            redirect(site_url('login'));
        }
		$this->load->view('explorasi');
	}

	public function explorasi_soal()
	{
		$status = $this->session->userdata('status');
        if ($status != 'user') {
            redirect(site_url('login'));
        }
		$this->load->view('explorasi_soal');
	}
}
