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
            'rules' => 'required'],

            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'],

            ['field' => 'jurusan_pertama',
            'label' => 'Jurusan_Pertama',
            'rules' => 'required'],

            ['field' => 'jurusan_kedua',
            'label' => 'Jurusan_Kedua',
            'rules' => 'required'],

            ['field' => 'kampus_pertama',
            'label' => 'Kampus_Pertama',
            'rules' => 'required'],

            ['field' => 'kampus_kedua',
            'label' => 'Kampus_Kedua',
            'rules' => 'required']
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
