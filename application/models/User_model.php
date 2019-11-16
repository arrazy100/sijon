<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "user";

    public $username;
    public $email;
    public $password;
    public $nama_lengkap;
    public $status;
    public $Image = "default.jpg";

    public function rules()
    {
        return [
            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'],

            ['field' => 'nama_lengkap',
            'label' => 'Nama Lengkap',
            'rules' => 'required'],

            ['field' => 'status',
            'label' => 'Status',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["username" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->username = $post["username"];
        $this->email = $post["email"];
        $this->password = md5($post["password"]);
        $this->nama_lengkap = $post["nama_lengkap"];
        $this->status = $post["status"];
        $this->Image = $this->_uploadImage();
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->username = $post["username"];
        $this->email = $post["email"];
        $this->password = $post["password"];
        $this->nama_lengkap = $post["nama_lengkap"];
        $this->status = $post["status"];

        if (!empty($_FILES["Image"]["name"])) {
            $this->Image = $this->_uploadImage();
        } else {
            $this->Image = $post["old_image"];
        }

        $this->db->update($this->_table, $this, array('username' => $post['username']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("username" => $id));
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

        if ($this->upload->do_upload('Image')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());

        return "default.jpg";
    }

    private function _deleteImage($id)
    {
        $user = $this->getById($id);
        if ($user->Image != "default.jpg") {
	        $filename = explode(".", $user->Image)[0];
		    return array_map('unlink', glob(FCPATH."upload/user/$filename.*"));
        }
    }
}
