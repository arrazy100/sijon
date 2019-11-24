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

        $register = $this->register_model;
        $validation = $this->form_validation;
        $validation->set_rules($register->rules());

        if ($validation->run()) {
            $register->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('login'));
        }
        $data['jurusan'] = $this->db->query("SELECT jurusan from explorasi GROUP BY id")->result();
        $this->load->view("register", $data);
    }

    public function update()
    {
        $register = $this->register_model;
        $validation = $this->form_validation;
        $validation->set_rules($register->update_rules());

        $username = $this->session->userdata("username");

        if ($validation->run()) {
            $register->update($username);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('profil'));
        }
        $data['user'] = $this->db->query("SELECT nama_lengkap, Image from user WHERE username='".$username."'")->result();
        $data['profil'] = $this->db->query("SELECT * FROM profil WHERE username='".$username."'")->result();

        $this->load->view("profil", $data);
    }

    public function not_match($x, $y) {
        if ($x != $this->input->post($y)) {
            return true;
        }
        $this->form_validation->set_message('not_match', '{field} must have different value with {param}');
        return false;
    }
}