<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model
{
    private $_table = "blog";

    public $thumbnail = "default.jpg";
    public $kategori;
    public $judul;
    public $slug;
    public $tanggal_rilis;
    public $isi_artikel;
    public $penulis;

    public function rules()
    {
        return [
            ['field' => 'kategori',
            'label' => 'Kategori',
            'rules' => 'required'],

            ['field' => 'judul',
            'label' => 'Judul',
            'rules' => 'required|callback_not_exists[judul]'],

            ['field' => 'isi_artikel',
            'label' => 'Isi Artikel',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function create_slug($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
        // trim
        $text = trim($text, '-');
        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        // lowercase
        $text = strtolower($text);
        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
        if (empty($text))
        {
            return 'n-a';
        }
        return $text;
    }

    public function save()
    {
        $cur_date = new DateTime();

        $post = $this->input->post();
        $this->kategori = $post["kategori"];
        $this->judul = $post["judul"];
        $this->slug = $this->create_slug($this->judul);
        $this->tanggal_rilis = $cur_date->format('Y-m-d');
        $this->isi_artikel = $post["isi_artikel"];
        $this->penulis = "John Doe";
        $this->thumbnail = $this->_uploadImage();
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $cur_date = new DateTime();

        $post = $this->input->post();
        $this->kategori = $post["kategori"];
        $this->judul = $post["judul"];
        $this->slug = $this->create_slug($this->judul);
        $this->tanggal_rilis = $cur_date->format('Y-m-d');
        $this->isi_artikel = $post["isi_artikel"];
        $this->penulis = "John Doe";

        if (!empty($_FILES["thumbnail"]["name"])) {
            $this->thumbnail = $this->_uploadImage();
        } else {
            $this->thumbnail = $post["old_image"];
        }

        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/blog/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->slug;
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('thumbnail')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());

        return "default.jpg";
    }

    private function _deleteImage($id)
    {
        $artikel = $this->getById($id);
        if ($artikel->thumbnail != "default.jpg") {
	        $filename = explode(".", $artikel->thumbnail)[0];
		    return array_map('unlink', glob(FCPATH."upload/blog/$filename.*"));
        }
    }
}
