<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model
{
    private $_table = "profil";

    public $username;
    public $first_name;
    public $last_name;
    public $jenis_kelamin;
    public $email;
    public $password;
    public $sekolah;
    public $jurusan_pertama;
    public $jurusan_kedua;
    public $kampus_pertama;
    public $kampus_kedua;
    public $skor_pertama = 0;
    public $skor_kedua = 0;
    public $bio = "ini adalah bio";

    public function rules()
    {
        return [
            ['field' => 'first_name',
            'label' => 'Firstname',
            'rules' => 'required'],

            ['field' => 'last_name',
            'label' => 'Lastname',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required|is_unique[profil.email]|is_unique[user.email]'],

            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required|is_unique[profil.username]|is_unique[user.username]'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'],

            ['field' => 'jurusan_pertama',
            'label' => 'Jurusan Pertama',
            'rules' => 'required'],

            ['field' => 'jurusan_kedua',
            'label' => 'Jurusan Kedua',
            'rules' => 'required|callback_not_match[jurusan_pertama]'],

            ['field' => 'kampus_pertama',
            'label' => 'Kampus Pertama',
            'rules' => 'required'],

            ['field' => 'kampus_kedua',
            'label' => 'Kampus Kedua',
            'rules' => 'required|callback_not_match[kampus_pertama]']
        ];
    }

    public function update_rules()
    {
        return [
            ['field' => 'jurusan_pertama',
            'label' => 'Jurusan Pertama',
            'rules' => 'required'],

            ['field' => 'jurusan_kedua',
            'label' => 'Jurusan Kedua',
            'rules' => 'required|callback_not_match[jurusan_pertama]'],

            ['field' => 'kampus_pertama',
            'label' => 'Kampus Pertama',
            'rules' => 'required'],

            ['field' => 'kampus_kedua',
            'label' => 'Kampus Kedua',
            'rules' => 'required|callback_not_match[kampus_pertama]']
        ];
    }

    public function save()
    {
        $post = $this->input->post();
        $this->first_name = $post["first_name"];
        $this->last_name = $post["last_name"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->username = $post["username"];
        $this->email = $post["email"];
        $this->password = md5($post["password"]);
        $this->sekolah = $post["sekolah"];
        $this->jurusan_pertama = $post["jurusan_pertama"];
        $this->jurusan_kedua = $post["jurusan_kedua"];
        $this->kampus_pertama = $post["kampus_pertama"];
        $this->kampus_kedua = $post["kampus_kedua"];
        $this->db->insert($this->_table, $this);

        $user = array(
            'email' => $this->email,
            'username' => $this->username,
            'nama_lengkap' => $this->first_name.' '.$this->last_name,
            'password' => $this->password,
            'status' => 'user',
            'Image' => $this->_uploadImage()
        );
        $this->db->insert('user', $user);
    }

    public function update($username)
    {
        $post = $this->input->post();
        $this->username = $username;

        $pertama = $this->db->query("SELECT * FROM profil WHERE username='".$username."'"."AND jurusan_pertama='".$post["jurusan_pertama"]."'");
        if (empty($pertama->result())) {
            $this->skor_pertama = 0;
        } else {
            $this->skor_pertama = $pertama->result()[0]->skor_pertama;
        }

        $kedua = $this->db->query("SELECT * FROM profil WHERE username='".$username."'"."AND jurusan_kedua='".$post["jurusan_kedua"]."'");
        if (empty($kedua->result())) {
            $this->skor_kedua = 0;
        } else {
            $this->skor_kedua = $kedua->result()[0]->skor_kedua;
        }

        $up = array(
            'jurusan_pertama' => $post['jurusan_pertama'],
            'jurusan_kedua' => $post['jurusan_kedua'],
            'kampus_pertama' => $post['kampus_pertama'],
            'kampus_kedua' => $post['kampus_kedua'],
            'skor_pertama' => $this->skor_pertama,
            'skor_kedua' => $this->skor_kedua,
            'bio' => $post['bio']
        );

        $this->db->update($this->_table, $up, array('username' => $username));

        $new_gambar = "";
        if (!empty($_FILES["gambar"]["name"])) {
            $new_gambar = $this->_uploadImage();
        } else {
            $new_gambar = $post["old_image"];
        }

        $user = array(
            'email' => $post['email'],
            'Image' => $new_gambar
        );

        $this->db->update('user', $user, array('username' => $username));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/user/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->username;
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());

        return "default.jpg";
    }
}
