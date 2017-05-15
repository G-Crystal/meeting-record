<?php
class Record_model extends CI_Model {

    private $offset = 0;
    private $limit = 10;
    private $pagenum = 1;

    public function __construct()
    {
        $this->load->database();
    }

    public function get_count($param)
    {
        $this->db->select('id');
        $this->db->from('record');
        if(isset($param['search_key']) && ($param['search_key'] != ''))
        {
            $this->db->where('user_name LIKE \'%'.$param['search_key'].'%\'');
            $this->db->or_where('task_name LIKE \'%'.$param['search_key'].'%\'');
            $this->db->or_where('client_name LIKE \'%'.$param['search_key'].'%\'');
            $this->db->or_where('contents LIKE \'%'.$param['search_key'].'%\'');
            $this->db->or_where('note LIKE \'%'.$param['search_key'].'%\'');
        }
        $query = $this->db->get();

        return $query->num_rows();
    }

    public function get_list($param)
    {
        $this->limit = isset($param['limit']) ? $param['limit'] : $this->limit;
        $this->pagenum = isset($param['pagenum']) ? $param['pagenum'] : $this->pagenum;
        $this->offset = ($this->pagenum - 1) * $this->limit;

        $this->db->select('*');
        $this->db->from('record');
        if(isset($param['search_key']) && ($param['search_key'] != ''))
        {
            $this->db->where('user_name LIKE \'%'.$param['search_key'].'%\'');
            $this->db->or_where('task_name LIKE \'%'.$param['search_key'].'%\'');
            $this->db->or_where('client_name LIKE \'%'.$param['search_key'].'%\'');
            $this->db->or_where('contents LIKE \'%'.$param['search_key'].'%\'');
            $this->db->or_where('note LIKE \'%'.$param['search_key'].'%\'');
        }
        $this->db->limit($this->limit);
        $this->db->offset($this->offset);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function get_record($param)
    {
        $this->db->select('*');
        $this->db->from('record');
        if(isset($param['ref_index']) && ($param['ref_index'] != ''))
        {
            $this->db->where('id', $param['ref_index']);
        }
        $query = $this->db->get();

        return $query->row();
    }

    public function insert_record($param)
    {
        return $this->db->insert('record', $param);
    }

    public function edit_record($param, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('record', $param);
    }
}