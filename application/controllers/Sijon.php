<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sijon extends CI_Controller {

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
		$this->load->view('profil', $data);
	}

	public function explorasi_soal()
	{
		$status = $this->session->userdata('status');
        if ($status != 'user') {
            redirect(site_url('login'));
		}
		$data['soal'] = $this->db->query("SELECT * from explorasi WHERE id='TI'")->result();
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
		$this->db->set('skor_pertama', $jml_skor, FALSE);
		$this->db->where('username', $username);
		$this->db->update('profil');
		redirect(site_url('profil'));
	}
}