<?php

/**
 * Manage Users related stuff
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Packages_model extends MY_Model {

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
        $columns = ['id', 'image', 'title', 'id', 'monthly_price', 'yearly_price', 'created'];
        $this->db->select('id, @a:=@a+1 AS test_id, IF(type = 1, \'Free\', \'Paid\') AS type, title, monthly_price, yearly_price, created,image', FALSE);
        $keyword = $this->input->get('search');
        if (!empty($keyword['value'])) {
            $this->db->having('title LIKE "%' . $this->db->escape_like_str($keyword['value']) . '%" OR monthly_price LIKE "%' . $this->db->escape_like_str($keyword['value']) . '%" OR yearly_price LIKE "%' . $this->db->escape_like_str($keyword['value']) . '%" OR type LIKE "%' . $this->db->escape_like_str($keyword['value']) . '%"', NULL);
        }
        $this->db->where('is_delete', 0);
        $this->db->order_by($columns[$this->input->get('order')[0]['column']], $this->input->get('order')[0]['dir']);
        if ($type == 'count') {
            $query = $this->db->get('packages,(SELECT @a:= ' . $start . ') AS a');
            return $query->num_rows();
        } else {
            $this->db->limit($this->input->get('length'), $this->input->get('start'));
            $query = $this->db->get('packages,(SELECT @a:= ' . $start . ') AS a');
            return $query->result_array();
        }
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
     * @method : get_row()
     * @uses : this function is used to get row based on id
     * @param : int @id id of table
     * @author : KAP
     */
    public function get_row($id) {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('packages');
        return $query->row_array();
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

    public function get_package_setting_row($id) {
        $this->db->select('p.id, p.title, ps.settings, ps.stat, ps.generator, ps.signatures,ps.custom_signature');
        $this->db->where('p.id', $id);
        $this->db->join('packages_settings ps', 'p.id = ps.package_id', 'LEFT');
        $query = $this->db->get('packages p');
        return $query->row_array();
    }

}

/* End of file Packages_model.php */
/* Location: ./application/models/admin/Packages_model.php */