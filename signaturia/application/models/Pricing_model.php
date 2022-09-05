<?php

class Pricing_model extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    /**
     * Get all active packages 
     * */
    public function get_all_packages() {
        $this->db->where('is_delete', 0);
        $query = $this->db->get(TBL_PACKAGES);
        return $query->result_array();
    }
}
