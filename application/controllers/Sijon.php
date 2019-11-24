<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sijon extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("register_model");
		$this->load->library('form_validation');
    }

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
		$status = $this->session->userdata('status');
        if ($status != 'user') {
            redirect(site_url('login'));
        }
		$this->load->view('explorasi');
	}

	public function profil()
	{
		$status = $this->session->userdata('status');
		$username = $this->session->userdata('username');
        if ($status != 'user') {
            redirect(site_url('login'));
		}
		$data['user'] = $this->db->query("SELECT nama_lengkap, Image from user WHERE username='".$username."'")->result();
		$data['profil'] = $this->db->query("SELECT * FROM profil WHERE username='".$username."'")->result();
		$data['jurusan'] = $this->db->query("SELECT jurusan FROM explorasi GROUP BY id")->result();

		$register = $this->register_model;
        $validation = $this->form_validation;
        $validation->set_rules($register->rules());

        if ($validation->run()) {
            $register->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('profil'));
        }
		$this->load->view('profil', $data);
	}

	public function explorasi_jurusan()
	{
		$status = $this->session->userdata('status');
		$username = $this->session->userdata('username');
        if ($status != 'user') {
            redirect(site_url('login'));
		}
		$data['jurusan'] = $this->db->query("SELECT jurusan_pertama, jurusan_kedua from profil WHERE username='".$username."'")->result();
		$data['pertama'] = $this->db->query("SELECT id from explorasi WHERE jurusan='".$data['jurusan'][0]->jurusan_pertama."'")->result();
		$data['kedua'] = $this->db->query("SELECT id from explorasi WHERE jurusan='".$data['jurusan'][0]->jurusan_kedua."'")->result();
		$this->load->view('explorasi_pilih', $data);
	}

	public function explorasi_soal()
	{
		$status = $this->session->userdata('status');
		$username = $this->session->userdata('username');
        if ($status != 'user') {
            redirect(site_url('login'));
		}
		$soal = explode(',', $_GET['soal']);
		$data['soal'] = $this->db->query("SELECT * FROM explorasi WHERE id='".$soal[0]."'")->result();
		$data['id_skor'] = $soal[1];
		$this->load->view('explorasi_soal', $data);
	}

	public function hitung_skor()
	{
		$soal = $this->db->query("SELECT * from explorasi WHERE id='TI'")->result();
		$jml_skor = 0;
		foreach ($soal as $s) {
			if(isset($_POST['radio'.$s->nomor]))
			{
				$skor = explode(',', $s->poin);
				switch($_POST['radio'.$s->nomor]) {
					case 'a': $jml_skor += $skor[0]; break;
					case 'b': $jml_skor += $skor[1]; break;
					case 'c': $jml_skor += $skor[2]; break;
					case 'd': $jml_skor += $skor[3]; break;
				}
			} else {
				$jml_skor += 0;
			}
		}
		$username = $this->session->userdata('username');
		if ($_GET['jurusan'] == '1') {
			$this->db->set('skor_pertama', $jml_skor, FALSE);
		} else if ($_GET['jurusan'] == '2') {
			$this->db->set('skor_kedua', $jml_skor, FALSE);
		} else {
			show_404();
		}
		$this->db->where('username', $username);
		$this->db->update('profil');
		redirect(site_url('profil'));
	}
}