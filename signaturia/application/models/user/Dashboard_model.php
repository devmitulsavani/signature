<?php

class Dashboard_model extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    /**
     * @method : get_amenities_result
     * @uses : this function is used to get result based on datatable in user list page
     * @param : @table 
     * @author : KAP
     */
    public function get_result($type) {
        $start = $this->input->get('start');
        $columns = ['s.id', 'sm.name', 'sm.job_title', 'sm.company_name', 'sm.email', 's.id'];
        $select = 's.id, @a:=@a+1 AS test_id, sm.name, sm.job_title, sm.company_name, sm.email';
        $this->db->select($select, FALSE);
        $keyword = $this->input->get('search');
        if (!empty($keyword['value'])) {
            $this->db->having('sm.name LIKE "%' . $this->db->escape_like_str($keyword['value']) . '%" OR sm.job_title LIKE "%' . $this->db->escape_like_str($keyword['value']) . '%" OR sm.company_name LIKE "%' . $this->db->escape_like_str($keyword['value']) . '%" OR sm.email LIKE "%' . $this->db->escape_like_str($keyword['value']) . '%"', NULL);
        }
        $this->db->join('signature_main sm', 'sm.signature_id = s.id', 'LEFT');
        $this->db->where('s.is_delete', 0);
        $this->db->order_by($columns[$this->input->get('order')[0]['column']], $this->input->get('order')[0]['dir']);
        if ($type == 'count') {
            $query = $this->db->get('signatures s,(SELECT @a:= ' . $start . ') AS a');
            return $query->num_rows();
        } else {
            $this->db->limit($this->input->get('length'), $this->input->get('start'));
            $query = $this->db->get('signatures s,(SELECT @a:= ' . $start . ') AS a');
            return $query->result_array();
        }
    }

    /**
     * Get all users' signatures from database
     * @param int $user_id
     * @param string $keyword
     * @return type
     */
    public function get_signatures($user_id = NULL, $keyword = NULL) {
        if (!is_null($user_id)) {
            $this->db->where('user_id', $user_id);
        }
        if (!is_null($keyword) && $keyword !='') {
            $this->db->where('(sm.name LIKE "%' . $this->db->escape_like_str($keyword) . '%" OR sm.job_title LIKE "%' . $this->db->escape_like_str($keyword) . '%" OR sm.company_name LIKE "%' . $this->db->escape_like_str($keyword) . '%" OR sm.email LIKE "%' . $this->db->escape_like_str($keyword) . '%")');
        }
        $select = 's.id, sm.name, sm.job_title, sm.company_name, sm.email,sm.logo,sm.is_custom,s.user_id';
        $this->db->select($select, FALSE);

        $this->db->join('signature_main sm', 'sm.signature_id = s.id', 'LEFT');
        $this->db->join('enable_fields_generators e', 's.id = e.signature_id', 'LEFT');
        $this->db->where('e.id IS NULL');
        $this->db->where('s.is_delete', 0);
        $query = $this->db->get('signatures s');
        return $query->result_array();
    }

    /**
     * Get signature by id
     * @author Kirti
     * @param int $user_id
     * @param int $id
     */
    public function get_signature_by_id($id = NULL) {
        $this->db->where(array('sm.signature_id' => $id));
        $select = 'sm.*,sb.*,sd.*,st.*,sa.*,sm.created as sign_created';
        $this->db->select($select, FALSE);

        $this->db->join('signatures_disclaimers sd', 'sd.signature_id = sm.signature_id', 'LEFT');
        $this->db->join('signatures_banners sb', 'sb.signature_id = sm.signature_id', 'LEFT');
        $this->db->join('signature_style st', 'st.signature_id = sm.signature_id', 'LEFT');
        $this->db->join('signature_apps sa', 'st.signature_id = sa.signature_id', 'LEFT');
        $query = $this->db->get('signature_main sm');
        return $query->row_array();
    }

    /**
     * Get signature by id
     * @author Rahul
     * @param int $id
     */
    public function get_custom_signature_by_id($id = NULL) {
        $this->db->where(array('id' => $id));
        $query = $this->db->get(TBL_SIGNATURES);
        return $query->row_array();
    }
    
    /**
     * Get Social icons of signature        
     * @author Kirti
     * @param int $id
     */
    public function get_signature_social_icons($id = NULL) {
        $this->db->where(array('ss.signature_id' => $id));
        $select = 'ss.*,si.icon1,si.icon2,si.icon3,si.icon4,si.name';
        $this->db->select($select, FALSE);

        $this->db->join(TBL_SOCIAL_ICONS . ' si', 'ss.social_icons_id = si.id', 'LEFT');
        $query = $this->db->get(TBL_SIGNATURE_SOCIALS . ' ss');
        return $query->result_array();
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

    public function check_data_exists($table, $where) {
        $this->db->select('id');
        $this->db->where($where);
        $query = $this->db->get($table);
        return $query->num_rows();
    }

    public function get_package($user_id) {
        $this->db->select('p.id,p.monthly_price');
        $this->db->where(array('up.user_id' => $user_id));
        $this->db->join('packages p', 'up.package_id=p.id');
        $query = $this->db->get('users_packages up');
        return $query->row_array();
    }

    public function get_steps() {
        $this->db->select('*');
        $this->db->join('guide_platforms gp', 'gp.id = gps.guide_platform_id');
        $this->db->where('gp.is_active', 1);
        $this->db->where('gps.is_active', 1);
        $query = $this->db->get('guide_platforms_steps gps');
        return $query->result_array();
    }

    public function get_signature_count($user_id = NULL) {
        if (!is_null($user_id)) {
            $this->db->where('user_id', $user_id);
        }
        $select = 's.id';
        $this->db->select($select, FALSE);
        $this->db->join('signature_main sm', 'sm.signature_id = s.id', 'LEFT');
        $this->db->join('enable_fields_generators e', 's.id = e.signature_id', 'LEFT');
        $this->db->where('e.id IS NULL');
        $this->db->where('s.is_delete', 0);
        $query = $this->db->get('signatures s');
        return $query->num_rows();
    }

}
