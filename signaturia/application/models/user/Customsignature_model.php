<?php

class Customsignature_model extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    /**
     * Get Social icons of signature        
     * @author Kirti
     * @param int $id
     */
    public function get_social_icons($icon) {
        $select = $icon.',name,id';
        $this->db->select($select, FALSE);
        $query = $this->db->get(TBL_SOCIAL_ICONS);
        return $query->result_array();
    }
    public function check_valid_social($social_id) {
        $this->db->where('s.id', $social_id);
        $query = $this->db->get('social_icons s');
        return $query->row_array();
    }

}
