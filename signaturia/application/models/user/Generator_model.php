<?php

class Generator_model extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    /**
     * Get all users' generators from database
     * @param int $user_id
     * @param string $keyword
     * @return type
     */
    public function get_generators($user_id = NULL, $keyword = NULL) {
        if (!is_null($user_id)) {
            $this->db->where('g.user_id', $user_id);
        }
        // if (!is_null($keyword)) {
        //     $this->db->where('sm.name LIKE "%' . $this->db->escape_like_str($keyword) . '%" OR sm.job_title LIKE "%' . $this->db->escape_like_str($keyword) . '%" OR sm.company_name LIKE "%' . $this->db->escape_like_str($keyword) . '%" OR sm.email LIKE "%' . $this->db->escape_like_str($keyword) . '%"');
        // }
        $select = 'g.id, g.name, sm.logo,sm.is_custom,s.user_id,cg.signature_id';
        $this->db->select($select, FALSE);
        $this->db->where('g.is_delete', 0);
        $this->db->join('enable_fields_generators cg', 'cg.generator_id = g.id', 'LEFT');
        $this->db->join('signatures s', 's.id = cg.signature_id', 'LEFT');
        $this->db->join('signature_main sm', 'sm.signature_id = s.id', 'LEFT');
        $query = $this->db->get('generators g');
        return $query->result_array();
    }

    public function get_data_main($id) {
        $this->db->select('name , job_title, email, mobile_number, company_name, website, logo, office_phone, fax, address, address_line2,is_custom');
        $this->db->where('signature_id', $id);
        $query = $this->db->get('signature_main');
        return $query->row_array();
    }

    public function get_data_social($id) {
        $this->db->select('s.id, si.name');
        $this->db->join('social_icons si', 'si.id = s.social_icons_id', 'LEFT');
        $this->db->where('s.signature_id', $id);
        $query = $this->db->get('signature_socials s');
        // p($query->result_array(), 1);
        return $query->result_array();
    }

    public function get_data_declaimer($id) {
        $this->db->select('s.id, s.disclaimer');
        $this->db->where('s.signature_id', $id);
        $query = $this->db->get('signatures_disclaimers s');
        // p($query->result_array(), 1);
        return $query->row_array();
    }

    public function get_data_banner($id) {
        $this->db->select('s.id');
        $this->db->where('s.signature_id', $id);
        $query = $this->db->get('signatures_banners s');
        // p($query->result_array(), 1);
        return $query->row_array();
    }

    public function get_data_apps($id) {
        $this->db->select('s.appstore_link, s.googleplaytore_link, s.amazon_link');
        $this->db->where('s.signature_id', $id);
        $query = $this->db->get('signature_apps s');
        // p($query->result_array(), 1);
        return $query->row_array();
    }

    public function insert($table, $array) {
        if ($this->db->insert($table, $array)) {
            return $this->db->insert_id();
        } else {
            return 0;
        }
    }

    public function get_sign_id($gid) {
        $this->db->where('generator_id', $gid);
        $query = $this->db->get('enable_fields_generators');
        return $query->row_array();
    }

    public function get_generator_detail($id, $user_id) {
        $select = 'select count(id) from ' . TBL_CREATED_SIGN_GENERATORS . ' where generator_id=' . $id;
        $this->db->select('id,name,(' . $select . ') as signs');
        $this->db->where(array('id' => $id, 'user_id' => $user_id, 'is_delete' => 0));
        $query = $this->db->get(TBL_GENERATORS);
        return $query->row_array();
    }

    /**
     * Get all signatures generated from generator link
     * @param int $id - Generator id
     * @param string $keyword
     * @return type
     */
    public function get_signatures($id = NULL, $keyword = NULL) {
        if (!is_null($id)) {
            $this->db->where('csg.generator_id', $id);
        }
        if (!is_null($keyword)) {
            $this->db->where('(sm.name LIKE "%' . $this->db->escape_like_str($keyword) . '%" OR sm.job_title LIKE "%' . $this->db->escape_like_str($keyword) . '%" OR sm.company_name LIKE "%' . $this->db->escape_like_str($keyword) . '%" OR sm.email LIKE "%' . $this->db->escape_like_str($keyword) . '%")');
        }
        $select = 's.id, sm.name, sm.job_title, sm.company_name, sm.email,sm.logo';
        $this->db->select($select, FALSE);

        $this->db->join('signature_main sm', 'sm.signature_id = s.id', 'LEFT');
        $this->db->join(TBL_CREATED_SIGN_GENERATORS.' csg', 'csg.signature_id = s.id', 'LEFT');
        $this->db->where('s.is_delete', 0);
        $query = $this->db->get('signatures s');
        return $query->result_array();
    }

}
