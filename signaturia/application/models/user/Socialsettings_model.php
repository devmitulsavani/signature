<?php

class Socialsettings_model extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    /**
     * @method insert
     * @uses insert user record into table
     * @param @table = table name, @array = array of insert
     * @return insert_id else 0
     * @author Kirti
     */
    public function insert($table, $array) {
        if ($this->db->insert($table, $array)) {
            return $this->db->insert_id();
        } else {
            return 0;
        }
    }

    public function update_record($table, $condition, $data) {
        $this->db->where($condition);
        if ($this->db->update($table, $data)) {
            return 1;
        } else {
            return 0;
        }
    }

    public function delete_record($table, $condition) {
        $this->db->where($condition);
        if ($this->db->delete($table)) {
            return 1;
        } else {
            return 0;
        }
    }

    public function insert_batch($table, $array) {
        if ($this->db->insert_batch($table, $array)) {
            return $this->db->insert_id();
        } else {
            return 0;
        }
    }

}
