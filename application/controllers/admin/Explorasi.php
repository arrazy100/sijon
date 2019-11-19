<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Explorasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("explorasi_model");
        $this->load->library('form_validation');
        $this->load->helper('text');

        $status = $this->session->userdata('status');
        if ($status != 'admin') {
            redirect(site_url('login'));
        }
    }

    public function index()
    {
        $data["data"] = $this->explorasi_model->getAll();
        $this->load->view("admin/explorasi/list", $data);
    }

    public function add()
    {
        $explorasi = $this->explorasi_model;
        $validation = $this->form_validation;
        $validation->set_rules($explorasi->rules());

        if ($validation->run()) {
            $explorasi->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/explorasi/new_form");
    }

    public function view($id = null)
    {
        if (!isset($id)) redirect('admin/explorasi');

        $explorasi = $this->explorasi_model;

        $data["soal"] = $explorasi->getById($id);
        if (!$data["soal"]) show_404();

        $this->load->view("admin/explorasi/view_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->explorasi_model->delete($id)) {
            redirect(site_url('admin/explorasi'));
        }
    }
}