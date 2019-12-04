<?php defined('BASEPATH') OR exit('No direct script access allowed');

include "SimpleXLSX.php";

class Explorasi_model extends CI_Model
{
    private $_table = "explorasi";

    public $id;
    public $jurusan;
    public $nomor;
    public $soal;
    public $jawaban_a;
    public $jawaban_b;
    public $jawaban_c;
    public $jawaban_d;
    public $poin;

    public function rules()
    {
        return [
            ['field' => 'id',
            'label' => 'Id',
            'rules' => 'required|is_unique[explorasi.id]'],

            ['field' => 'jurusan',
            'label' => 'Jurusan',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        $query = $this->db->query("SELECT id, jurusan from explorasi GROUP BY id");
        return $query->result();
    }

    public function getById($id)
    {
        return $this->db->query("SELECT * from explorasi WHERE id='$id'")->result();
    }

    public function save()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $file = $_FILES['dokumen']['tmp_name'];
            $post = $this->input->post();
            $i = 0;
            if ($xlsx = SimpleXLSX::parse($file)) {
                foreach($xlsx->rows(0) as $soal) {
                    if ($i == 0) {
                        $i++; continue;
                    }

                    if (!empty($soal[0]) && !empty($soal[1]) && !empty($soal[2]) && !empty($soal[3]) && !empty($soal[4])) {
                        $this->id = $post['id'];
                        $this->jurusan = $post['jurusan'];
                        $this->nomor = $i;
                        $this->soal = htmlentities($soal[0]);
                        $this->jawaban_a = htmlentities($soal[1]);
                        $this->jawaban_b = htmlentities($soal[2]);
                        $this->jawaban_c = htmlentities($soal[3]);
                        $this->jawaban_d = htmlentities($soal[4]);
                        $this->poin = $soal[5];
                        $this->db->insert($this->_table, $this);
                        $i++;
                    } else {
                        echo "Format excel salah";
                    }
                }
            } else {
                echo SimpleXLSX::parseError();
            }
        } else show_404('illegal execution');
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
