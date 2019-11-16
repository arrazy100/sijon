<?php

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user");
    }

    public function index() {
        $this->load->view('halaman_login');
    }

    public function proses_login() {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');

        $login = $this->user->cek_user($user, $pass);

        if (!empty($login)) {
            // login berhasil
            $this->session->set_userdata($login);
            if ($login['status'] == 'admin') redirect(site_url('admin'));
            else redirect(site_url('home'));
        } else {
            // login gagal
            $this->session->set_flashdata('gagal', 'Username atau Password Salah!');
            redirect(site_url('login'));
        }
    }
}
?>