<?php

/**
 * Social icons model - Operations related to social icons
 * @author Kirti
 */
class Socialicons_model extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    /**
     * Get result based on datatable in icon list page
     * @param string $type - Count or result
     * @return array
     */
    public function get_all_icons($type = 'result') {
        $columns = ['s.id', 's.icon', 's.name', 'u.fullname', 's.created', 's.is_delete'];
        $keyword = $this->input->get('search');
        $this->db->select('s.*,u.fullname,u.user_role');

        $this->db->where('s.is_delete', 0);
        if (!empty($keyword['value'])) {
            $this->db->where('(u.fullname LIKE "%' . $keyword['value'] . '%" OR s.name LIKE "%' . $keyword['value'] . '%")');
        }

        $this->db->join(TBL_USERS . ' u', 's.user_id=u.id', 'left');
        $this->db->order_by($columns[$this->input->get('order')[0]['column']], $this->input->get('order')[0]['dir']);
        // $this->db->where('s.social_set_id', $this->input->get('social_set_id'));
        if ($type == 'count') {
            $query = $this->db->get(TBL_SOCIAL_ICONS . ' s');
            return $query->num_rows();
        } else {
            $this->db->limit($this->input->get('length'), $this->input->get('start'));
            $query = $this->db->get(TBL_SOCIAL_ICONS . ' s');
            return $query->result_array();
        }
    }

    /**
     * Get social icon details by its id
     * @param type $social_icon_id
     */
    public function get_social_icon_by_id($social_icon_id) {
        $this->db->where('id', $social_icon_id);
        $query = $this->db->get(TBL_SOCIAL_ICONS);
        return $query->row_array();
    }

    /**
     * Get result from the table based on condition
     * @param type $condition - Condition to be checked
     * @return array - Table record
     */
    public function get_result($condition = null) {
        $this->db->select('*');
        if (!is_null($condition)) {
            $this->db->where($condition);
        }
        $this->db->where('is_delete', 0);

        $query = $this->db->get(TBL_SOCIAL_ICONS);
        return $query->result_array();
    }

    /**
     * Insert Social icon details into table
     * @param array $data - Data to be stored
     * @return int - Inserted Id on successful insert or 0
     */
    public function insert($data) {
        if ($this->db->insert(TBL_SOCIAL_ICONS, $data)) {
            return $this->db->insert_id();
        } else {
            return 0;
        }
    }

    /**
     * Update record
     * @param string $condition - Condition to be checked
     * @param array $user_array - Array to be updated
     * @return int
     */
    public function update_record($condition, $data) {
        $this->db->where($condition);
        if ($this->db->update(TBL_SOCIAL_ICONS, $data)) {
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * Get all social icons
     */
    public function get_all_social_icons() {
        $this->db->where('is_delete', 0);
        $query = $this->db->get(TBL_SOCIAL_ICONS);
        return $query->result_array();
    }

    /**
     * Check social color name is unique or not
     * @param array/string $where
     */
    public function is_unique_socialicon($where) {
        //-- Where condition
        $this->db->where($where);
        $this->db->where('is_delete', 0);
        //-- Where condition over
        $query = $this->db->get(TBL_SOCIAL_ICONS);
        return $query->num_rows();
    }

     public function get_all_sets($type = 'result') {
        $columns = ['s.id', 's.set_name', 's.created', 's.is_delete'];
        $keyword = $this->input->get('search');
        $this->db->select('s.*');
        // $this->db->where('s.is_delete', 0);
        if (!empty($keyword['value'])) {
            $this->db->where('(set_name LIKE "%' . $keyword['value'] . '%")');
        }

        $this->db->order_by($columns[$this->input->get('order')[0]['column']], $this->input->get('order')[0]['dir']);

        if ($type == 'count') {
            $query = $this->db->get('social_icon_set' . ' s');
            return $query->num_rows();
        } else {
            $this->db->limit($this->input->get('length'), $this->input->get('start'));
            $query = $this->db->get('social_icon_set' . ' s');
            return $query->result_array();
        }
    }

    public function set_update_record($table, $condition, $user_array) {
        $this->db->where($condition);
        if ($this->db->update($table, $user_array)) {
            return 1;
        } else {
            return 0;
        }
    }

    public function set_insert($table, $array) {
        if ($this->db->insert($table, $array)) {
            return $this->db->insert_id();
        } else {
            return 0;
        }
    }

    public function get_social_icon_set_by_id($social_icon_id) {
        $this->db->where('id', $social_icon_id);
        $query = $this->db->get('social_icon_set');
        return $query->row_array();
    }
}
