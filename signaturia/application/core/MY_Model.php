<?php

/**
 * MY_Model is called by default before every model.
 * @author Kirti
 * */
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /**
     * This function used to add or update records in particular table based on condition. 
     * @param String $mode
     * @param String $table
     * @param Array $dataArr        	
     * @param Array $condition
     * @return Integer $affected_row
     * */
    public function common_insert_update($mode = '', $table = '', $dataArr = '', $condition = '') {
        if ($mode == 'insert') {
            $this->db->insert($table, $dataArr);
        } else if ($mode == 'update') {
            $this->db->where($condition);
            $this->db->update($table, $dataArr);
        }
        $affected_row = $this->db->affected_rows();
        return $affected_row;
    }

    /**
     * This function returns the table contents based on data. 
     * @param String $table
     * @param Array $condition        	
     * @param Array $sortArr
     * @return Array
     * */
    public function get_all_details($table = '', $condition = '', $select = NULL, $sortArr = '', $limitArr = '') {
        if ($select != '') {
            $this->db->select($select);
        }
        if ($sortArr != '' && is_array($sortArr)) {
            foreach ($sortArr as $sortRow) {
                if (is_array($sortRow)) {
                    $this->db->order_by($sortRow ['field'], $sortRow ['type']);
                }
            }
        }
        if ($limitArr != '') {
            return $this->db->get_where($table, $condition, $limitArr['l1'], $limitArr['l2']);
        } else {
            return $this->db->get_where($table, $condition);
        }
    }

    /**
     * Check name exist or not in table 
     * @param string $condition 
     * @return array
     */
    public function check_unique_name($table, $condition) {
        $this->db->where($condition);
        $this->db->where('is_delete', 0);
        $query = $this->db->get($table);
        return $query->row_array();
    }

    /**
     * Custom Query
     * $option = 1 if return a row
     * $option = 2 if return an array
     */
    public function customQuery($query, $option = NULL) {
        $result = $this->db->query($query);
        if ($option == 1) {
            return $result->row();
        } else if ($option == 2) {
            return $result->result();
        } else if ($option == 3) {
            return $result->result_array();
        } else {
            return $result;
        }
    }

}

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */