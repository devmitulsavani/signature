<?php

class Employees_model extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    /**
     * Get all users' employees from database
     * @param int $user_id
     * @return type
     */
    public function get_all_employees($user_id = NULL) {
        if (!is_null($user_id)) {
            $this->db->where('user_id', $user_id);
        }
        $this->db->where('is_delete', 0);
        $query = $this->db->get('employees');
        return $query->result_array();
    }

    public function get_employees($id, $user_id) {
        $this->db->where('id', $id);
        $this->db->where('user_id', $user_id);
        $this->db->where('is_delete', 0);
        $query = $this->db->get('employees');
        return $query->row_array();
    }

    /**
     * Check employee email exist or not
     * @param string $email
     * @param int $id
     */
    public function check_unique_email($email, $id, $user_id) {
        if (!is_null($id)) {
            $this->db->where('id!=' . $id);
        }
        $this->db->where(['email' => $email, 'is_delete' => 0, 'user_id' => $user_id]);
        $query = $this->db->get('employees');
        return $query->row_array();
    }

}
