<?php

class Userguide_model extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    public function get_guide_platforms($type = 'result') {
        $columns = ['id', 'id', 'platform', 'id'];
        $keyword = $this->input->get('search');
        $this->db->select('id, logo, platform, is_active');
        if (!empty($keyword['value'])) {
            $this->db->where('(platform LIKE "%' . $keyword['value'] . '%")');
        }
        $this->db->order_by($columns[$this->input->get('order')[0]['column']], $this->input->get('order')[0]['dir']);
        $this->db->where('is_active', 1);
        if ($type == 'count') {
            $query = $this->db->get('guide_platforms');
            return $query->num_rows();
        } else {
            $this->db->limit($this->input->get('length'), $this->input->get('start'));
            $query = $this->db->get('guide_platforms');
            return $query->result_array();
        }
    }

    public function insert($table, $array) {
        if ($this->db->insert($table, $array)) {
            return $this->db->insert_id();
        } else {
            return 0;
        }
    }

    public function update_record($table, $condition, $user_array) {
        $this->db->where($condition);
        if ($this->db->update($table, $user_array)) {
            return 1;
        } else {
            return 0;
        }
    }

    public function check_row($where, $table) {
        $this->db->select('*');
        $this->db->where($where, FALSE);
        $query = $this->db->get($table);
        return $query->row_array();
    }

    public function get_steps($type = 'result', $id) {
        $columns = ['id', 'id', 'platform', 'id'];
        $keyword = $this->input->get('search');
        $this->db->select('id, title, step, is_active');
        if (!empty($keyword['value'])) {
            $this->db->where('(title LIKE "%' . $keyword['value'] . '%" OR step LIKE "%' . $keyword['value'] . '%")');
        }
        $this->db->order_by($columns[$this->input->get('order')[0]['column']], $this->input->get('order')[0]['dir']);
        $this->db->where('is_active', 1);
        $this->db->where('guide_platform_id', $id);
        if ($type == 'count') {
            $query = $this->db->get('guide_platforms_steps');
            return $query->num_rows();
        } else {
            $this->db->limit($this->input->get('length'), $this->input->get('start'));
            $query = $this->db->get('guide_platforms_steps');
            return $query->result_array();
        }
    }
}
