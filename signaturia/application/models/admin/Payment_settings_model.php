<?php

/**
 * Manage Users related stuff
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_settings_model extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    /**
     * @method : insert
     * @uses : Insert user record into table
     * @param : @table = table name, @array = array of insert
     * @return : insert_id else 0
     * @author : KAP
     */
    public function insert($table, $array) {
        if ($this->db->insert($table, $array)) {
            return $this->db->insert_id();
        } else {
            return 0;
        }
    }

    /**
     * @method : update_record
     * @uses : This function is used to update record
     * @param : @table, @user_id, @user_array = array of update  
     * @author : KAP
     */
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

/* End of file Packages_model.php */
/* Location: ./application/models/admin/Packages_model.php */