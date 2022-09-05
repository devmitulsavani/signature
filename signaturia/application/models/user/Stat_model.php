<?php

class Stat_model extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    public function get_personal_stat($stat_id) {
        $this->db->select('sum(sp.email_count) AS email_count, sum(sp.website_count) AS website_count,sum(sp.appstore_count) AS appstore_count,sum(sp.googleplaytore_count) AS googleplaystore_count,sum(sp.amazon_count) AS amazon_count,sum(sb.click_count) as banner_count');
        $this->db->join('stats_personal sp', 'sp.signature_id = s.id', 'LEFT');
        $this->db->join('stats_banners sb', 'sb.signature_id = s.id', 'LEFT');
        if ($stat_id != 0) {
            if (is_numeric($stat_id)) {
                $this->db->where('s.id', $stat_id);
            }
        }
        $this->db->where('s.user_id', $this->session->userdata('htmlsig_user')['id']);
        $query = $this->db->get('signatures s');
        return $query->row_array();
    }

    public function get_personal_socials($stat_id) {
        $this->db->select('si.name, SUM(ss.click_count) AS click_count');
        $this->db->join('stats_socials ss', 'ss.signature_id = s.id', 'LEFT');
        $this->db->join('social_icons si', 'si.id = ss.social_id', 'LEFT');
        if ($stat_id != 0) {
            if (is_numeric($stat_id)) {
                $this->db->where('s.id', $stat_id);
            }
        }
        $this->db->where('s.user_id', $this->session->userdata('htmlsig_user')['id']);
        $this->db->where('ss.click_count IS NOT NULL');
        $this->db->group_by('ss.social_id');
        $query = $this->db->get('signatures s');
        return $query->result_array();
    }

    public function check_valid_email($email) {
        $result = $this->db->select('*')->where('email', $email)->where('user_role', 2)->get('users');
        if ($result->result_array()) {
            return $result->result_array();
        } else {
            return FALSE;
        }
    }

    /**
     * Insert user record into table
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

}
