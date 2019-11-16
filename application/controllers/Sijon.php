<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sijon extends CI_Controller {

	public function index()
	{
		$this->load->view('sijon');
	}

	public function blog()
	{
		$this->load->view('blog');
	}

	public function explorasi()
	{
		$this->load->view('explorasi');
	}
}
