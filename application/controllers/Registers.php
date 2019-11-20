<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registers extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("register_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $status = $this->session->userdata('status');
        if (!empty($status)) {
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('status');
            $this->session->sess_destroy();
		}
        $this->load->view("register");
    }

    public function add()
    {
        $register = $this->register_model;
        $validation = $this->form_validation;
        $validation->set_rules($register->rules());

        if ($validation->run()) {
            $register->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('login'));
        }
        redirect(site_url('register'));
    }
}