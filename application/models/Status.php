<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Status extends CI_Model {

        public function __construct() {
            parent::__construct();
            $this->load->database();
        }
        public function fetch_all_statuses() {
            $this->db->select('statuses.status,statuses.date_time,users.name');
            $this->db->from('statuses');
            $this->db->join('users','statuses.user_id=users.id');
            $this->db->order_by('statuses.date_time', 'DESC');
            $query = $this->db->get();

            return $query->result_array();
        }
        
    }
?>        
