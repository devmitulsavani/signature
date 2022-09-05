<?php

/**
 * Users model - Operations related to users table
 * @author Kirti
 */
class Payments_model extends MY_Model {

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
        $columns = ['u.id',  'u.fullname', 'u.email', 'p.title', 'pt.payment_id', 'pt.paid_type', 'pt.paid_for_plan', 'pt.created'];
        $keyword = $this->input->get('search');
        $this->db->select('u.*,p.title, pt.payment_id, pt.created AS paid_date, pt.paid_type, pt.paid_for_plan');

        if (!empty($keyword['value'])) {
            $this->db->where('(fullname LIKE "%' . $keyword['value'] . '%" OR email LIKE "%' . $keyword['value'] . '%")');
        }
        $this->db->where('user_role', 2);
        $this->db->join('payment_transactions pt', 'pt.user_id = u.id', 'LEFT');
        // $this->db->join(TBL_USER_PACKAGES . ' up', 'u.id=up.user_id', 'left');
        $this->db->join(TBL_PACKAGES . ' p', 'pt.package_id = p.id', 'left');
        $this->db->order_by($columns[$this->input->get('order')[0]['column']], $this->input->get('order')[0]['dir']);
        $this->db->where('u.is_delete', 0);
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

}
