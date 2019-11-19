<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("blog_model");
        $this->load->library('form_validation');
        $this->load->helper('text');

        $status = $this->session->userdata('status');
        if ($status != 'admin') {
            redirect(site_url('login'));
        }
    }

    public function index()
    {
        $data["blogs"] = $this->blog_model->getAll();
        $this->load->view("admin/blog/list", $data);
    }

    public function add()
    {
        $blog = $this->blog_model;
        $validation = $this->form_validation;
        $validation->set_rules($blog->rules());

        if ($validation->run()) {
            $blog->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/blog/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/blogs');

        $blog = $this->blog_model;
        $validation = $this->form_validation;
        $validation->set_rules($blog->rules());

        if ($validation->run()) {
            $blog->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["blog"] = $blog->getById($id);
        if (!$data["blog"]) show_404();

        $this->load->view("admin/blog/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->blog_model->delete($id)) {
            redirect(site_url('admin/blogs'));
        }
    }
}