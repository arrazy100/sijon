<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Chat_model extends CI_Model
{
    private $_table = "chat";

    public function save()
    {
        $cur_date = date('Y-m-d H:i:s');
        $username = $this->session->userdata('username');

        $post = $this->input->post();
        $message = str_replace("\r\n", "<br>", $post['message']);

        $chat = array(
            'username' => $username,
            'send_to' => $_GET['with'],
            'date' => $cur_date,
            'message' => $message
        );

        $this->db->insert($this->_table, $chat);
    }
}
