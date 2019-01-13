<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    //connect with database
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function registration($data) {
        $r = $this->db->insert('users', $data);
        return $r;
    }

    public function get_data_from_table($email) {
        $this->db->where('email',$email);
        $query = $this->db->get('users');
        return $query->result();
    }

}
