<?php

class Charge_model extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    public function insert($table,$array){
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

    public function custom_query($query) {
        $this->db->query($query);
    }

    public function get_settings() {
        $this->db->select('*');
        $query = $this->db->get('payment_settings');
        return $query->row_array();
    }
}