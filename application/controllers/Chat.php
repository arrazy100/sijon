<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('chat_model');

        $status = $this->session->userdata('status');
        if (empty($status)) {
            redirect(site_url('login'));
        }
    }

    public function index()
    {
        $username = $this->session->userdata('username');
        if (isset($_GET['with'])) {
            $send_to = $_GET['with'];
            $query = "SELECT username, message, date FROM chat "
                        ."WHERE (username='$username' AND send_to='$send_to') "
                        ."OR (username='$send_to' AND send_to='$username') GROUP BY date  ";
            $data['chat'] = $this->db->query($query)->result();
            $data['penerima'] = $this->db->query("SELECT Image FROM user WHERE username='$send_to'")->result();
        } else {
            $data['chat'] = "";
        }
        $data['pengirim'] = $this->db->query("SELECT Image FROM user WHERE username='$username'")->result();
        $data['contact'] = $this->db->query("SELECT * FROM user WHERE status='admin'")->result();
        $data['user'] = $this->db->query("SELECT * FROM user WHERE status='user'")->result();
        $this->load->view("chat", $data);
    }

    public function refresh_chat()
    {
        $username = $this->session->userdata('username');
        if (isset($_GET['with'])) {
            $send_to = $_GET['with'];
            $query = "SELECT username, message, date FROM chat "
                        ."WHERE (username='$username' AND send_to='$send_to') "
                        ."OR (username='$send_to' AND send_to='$username') GROUP BY date  ";
            $data['chat'] = $this->db->query($query)->result();
            $data['penerima'] = $this->db->query("SELECT Image FROM user WHERE username='$send_to'")->result();
        } else {
            $data['chat'] = "";
        }
        $data['pengirim'] = $this->db->query("SELECT Image FROM user WHERE username='$username'")->result();
        $data['contact'] = $this->db->query("SELECT * FROM user WHERE status='admin'")->result();
        $data['user'] = $this->db->query("SELECT * FROM user WHERE status='user'")->result();
        $this->load->view("refresh_chat", $data);
    }

    public function add()
    {
        $this->chat_model->save();
        redirect(site_url('chat/?with='.$_GET['with']));
    }
}