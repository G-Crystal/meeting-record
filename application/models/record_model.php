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

    public function insert_record()
    {
        $data = array(
            'user_name' => is_null($this->input->post('user_name')) ? '' : $this->input->post('user_name'),
            'task_name' => is_null($this->input->post('task_name')) ? '' : $this->input->post('task_name'),
            'client_name' => is_null($this->input->post('client_name')) ? '' : $this->input->post('client_name'),
            'gender' => is_null($this->input->post('gender')) ? 1 : $this->input->post('gender'),
            'country' => is_null($this->input->post('country')) ? '' : $this->input->post('country'),
            'dtime' => is_null($this->input->post('dtime')) ? date('Y-m-d H:i:s') : $this->input->post('dtime'),
            'contents' => is_null($this->input->post('contents')) ? '' : $this->input->post('contents'),
            'note' => is_null($this->input->post('note')) ? '' : $this->input->post('note')
        );

        return $this->db->insert('record', $data);
    }
}