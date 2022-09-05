<?php

class Login_model extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    /**
     * Used to check Super admin/Business user login credentials is correct or wrong
     * @param string $email Email id of Super admin/Business user
     * @param string $password Password 
     * @return result of array if success else retrun false
     * */
    public function get_admin($email, $password) {
        $this->db->select('u.*');
        $this->db->where('email', $email);
        $this->db->where('user_role', 1);
        $this->db->where('is_delete', 0);
        $this->db->where('is_active', 1);
        $this->db->where('password', md5($password));
        $query = $this->db->get('users u');
        return $query->row_array();
    }

}
