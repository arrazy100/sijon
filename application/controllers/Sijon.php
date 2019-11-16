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
		$this->load->view('explorasi');
	}
}
