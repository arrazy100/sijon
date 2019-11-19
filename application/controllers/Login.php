<?php

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user");
        $this->load->library('session');

        $status = $this->session->userdata('status');
        if (!empty($status)) {
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('status');
            $this->session->sess_destroy();
        }
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
            $log_sess = array(
                'username' => $login['username'],
                'status' => $login['status']
            );
            $this->session->set_userdata($log_sess);

            if ($login['status'] == 'admin') redirect(site_url('admin'));
            else redirect(site_url('home'));
        } else {
            // login gagal
            $this->session->set_flashdata('gagal', 'Username atau Password Salah!');
            redirect(site_url('login'));
        }
    }

    public function logout() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('status');
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }
}
?>