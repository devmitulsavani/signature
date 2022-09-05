<?php

class Click_model extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    public function get_signature_detail($signature_id) {
        $this->db->select('s.id');
        $this->db->where('s.id', $signature_id);
        $query = $this->db->get('signatures s');
        return $query->row_array();
    }

    /**
     * This function is used to update record
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

    /**
     * custom_query
     * @uses : This function is used to fire custom query with database
     * @param : string @query
     * @author : KAP
     */
    public function custom_query($query) {
        $this->db->query($query);
    }

    public function check_valid_social($social_id, $signature_id) {
        $this->db->select('s.id, s.url');
        $this->db->where('s.signature_id', $signature_id);
        $this->db->where('s.social_icons_id', $social_id);
        $query = $this->db->get('signature_socials s');
        return $query->row_array();
    }

    public function check_valid_personal($signature_id) {
        $this->db->select('sm.id,sm.website');
        $this->db->where('sm.signature_id', $signature_id);
        $query = $this->db->get('signature_main sm');
        return $query->row_array();
    }

    public function check_valid_banner($signature_id) {
        $this->db->select('s.id, banner_url');
        $this->db->where('s.signature_id', $signature_id);
        $query = $this->db->get('signatures_banners s');
        return $query->row_array();
    }

    public function check_valid_app($type, $signature_id) {
        $this->db->select('s.id, s.'.$type.'_link');
        $this->db->where('s.signature_id', $signature_id);
        $query = $this->db->get('signature_apps s');
        return $query->row_array();
    }

}
