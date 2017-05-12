<?php
class Record_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_list($offset = 1, $limit = 10)
    {
        $query = $this->db->get('record');
        return $query->result_array();
    }
}