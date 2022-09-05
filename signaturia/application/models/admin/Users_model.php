<?php

/**
 * Users model - Operations related to users table
 * @author Kirti
 */
class Users_model extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    /**
     * Get admin details by id
     * @param int $id 
     */
    public function get_admin($id) {
        $this->db->select('*');
        $this->db->where('id', $id);
        $this->db->where('user_role=1');
        $query = $this->db->get(TBL_USERS);
        return $query->row_array();
    }

    /**
     * Get result based on datatable in user list page
     * @param string $type - Count or result
     * @return array
     */
    public function get_all_users($type = 'result') {
        $columns = ['u.id', 'u.fullname', 'u.email', 'p.title', 'u.created', 'u.created'];
        $keyword = $this->input->get('search');
        $this->db->select('u.*,p.title, p.type, pm.id AS trans_id');

        if (!empty($keyword['value'])) {
            $this->db->where('(fullname LIKE "%' . $keyword['value'] . '%" OR email LIKE "%' . $keyword['value'] . '%")');
        }

        $this->db->where('user_role', 2);
        $this->db->join(TBL_USER_PACKAGES . ' up', 'u.id=up.user_id', 'left');
        $this->db->join(TBL_PACKAGES . ' p', 'up.package_id=p.id', 'left');
        $this->db->join('payment_transactions pm', 'pm.user_id=u.id', 'left');


        $this->db->order_by($columns[$this->input->get('order')[0]['column']], $this->input->get('order')[0]['dir']);
        $this->db->where('u.is_delete', 0);
        $this->db->group_by('u.id');
        if ($type == 'count') {
            $query = $this->db->get(TBL_USERS . ' u');
            return $query->num_rows();
        } else {
            $this->db->limit($this->input->get('length'), $this->input->get('start'));
            $query = $this->db->get(TBL_USERS . ' u');
            return $query->result_array();
        }
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
        $this->db->where('user_role', 2);

        $query = $this->db->get(TBL_USERS);
        return $query->result_array();
    }

    /**
     * Get user details by its id
     * @param int $user_id
     */
    public function get_user_by_id($user_id) {
        $this->db->select('u.*,p.title as packages,up.package_id');
        $this->db->where(array('u.id' => $user_id, 'u.is_delete' => 0, 'u.user_role' => 2));
        $this->db->join(TBL_USER_PACKAGES . ' up', 'u.id=up.user_id', 'left');
        $this->db->join(TBL_PACKAGES . ' p', 'up.package_id=p.id', 'left');
        $query = $this->db->get(TBL_USERS . ' u');
        return $query->row_array();
    }

    /**
     * Insert user record into table
     * @param array $data - Data to be stored
     * @return int - Inserted Id on successful insert or 0
     */
    public function insert($data) {
        if ($this->db->insert(TBL_USERS, $data)) {
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
    public function update_record($condition, $user_array) {
        $this->db->where($condition);
        if ($this->db->update(TBL_USERS, $user_array)) {
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * Check email exist or not for unique email
     * @param string $email
     * @return array
     */
    public function check_unique_email($email) {
        $this->db->where('email', $email);
        $this->db->where('is_delete', 0);
        $query = $this->db->get(TBL_USERS);
        return $query->row_array();
    }

    /**
     * Check email exist or not for Forgot password
     * @param string $email
     * @return array
     */
    public function check_email($email) {
        $this->db->where('email', $email);
        $this->db->where('user_role', 2);
        $this->db->where('is_delete', 0);
        $query = $this->db->get(TBL_USERS);
        return $query->row_array();
    }

    /**
     * Delete user package
     * @param int $user_id
     */
    public function delete_user_package($user_id) {
        $this->db->where(array('user_id' => $user_id));
        $this->db->delete(TBL_USER_PACKAGES);
    }

    /**
     * check coupon code is exist or not in datatable
     * @param string $coupon_code
     */
    public function check_coupon_code($coupon_code) {
        $this->db->select('id');
        $this->db->where('coupon_code', $coupon_code);
        $query = $this->db->get('coupons');
        if($query->num_rows() > 0) {
            return $query->row_array();       
        } else {
            return FALSE;
        }
    }

    /**
     * Insert coupon record into table
     * @param array $data - Data to be stored
     * @param array $table - name of table
     * @return int - Inserted Id on successful insert or 0
     */
    public function insert_coupon_records($data, $table) {
        if ($this->db->insert($table, $data)) {
            return $this->db->insert_id();
        } else {
            return 0;
        }
    }

    public function update_record_($table, $condition, $user_array) {
        $this->db->where($condition);
        if ($this->db->update($table, $user_array)) {
            return 1;
        } else {
            return 0;
        }
    }

    public function check_coupon_price($price){
        $this->db->select('id');
        $this->db->where('(monthly_price > '.$this->db->escape($price).' OR yearly_price > '.$this->db->escape($price).')');
        $this->db->where('is_delete', 0);
        $result = $this->db->get(TBL_PACKAGES);
        if($result->result_array()){
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * Get result based on datatable in user list page
     * @param string $type - Count or result
     * @return array
     */
    public function get_users_coupens($type = 'result') {
        $columns = ['c.id', 'c.coupon_code', 'c.coupon_price', 'p.title', 'c.created_date', 'c.start_datetime', 'c.end_datetime'];
        $keyword = $this->input->get('search');
        $this->db->select('c.*, p.title');

        if (!empty($keyword['value'])) {
            $this->db->where('(coupon_code LIKE "%' . $keyword['value'] . '%" OR coupon_price LIKE "%' . $keyword['value'] . '%" OR title LIKE "%' . $keyword['value'] . '%")');
        }

        $this->db->join(TBL_COUPONS. ' c', 'uc.coupon_id = c.id', 'LEFT');
        $this->db->join(TBL_PACKAGES. ' p', 'c.package_id = p.id', 'LEFT');

        $this->db->order_by($columns[$this->input->get('order')[0]['column']], $this->input->get('order')[0]['dir']);
        $this->db->where('uc.user_id', $this->input->get_post('user_id'));
        $this->db->where('c.is_delete', 0);

        if ($type == 'count') {
            $query = $this->db->get(TBL_USERS_COUPONS . ' uc');
            return $query->num_rows();
        } else {
            $this->db->limit($this->input->get('length'), $this->input->get('start'));
            $query = $this->db->get(TBL_USERS_COUPONS . ' uc');
            return $query->result_array();
        }
    }

    public function get_coupon_by_id($coupon_id) {
        $query = $this->db->select('*, id AS coupon_id')->where('id', $coupon_id)->get(TBL_COUPONS);
        return $query->row_array();
    }
}