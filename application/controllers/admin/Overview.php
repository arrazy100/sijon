<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();

		$status = $this->session->userdata('status');
        if ($status != 'admin') {
            redirect(site_url('login'));
        }
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("admin/overview");
	}
}