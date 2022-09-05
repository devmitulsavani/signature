<?php

class Authority_model extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    public function check_permission($user_id) {
        $this->db->select('*');
        $this->db->where('up.user_id', $user_id);
        $this->db->join('packages_settings ps', 'ps.package_id = up.package_id');
        $result = $this->db->get('users_packages up');
        return $result->row_array();
    }

    public function user_package($user_id) {
        $this->db->select('p.type');
        $this->db->where('up.user_id', $user_id);
        $this->db->where('up.is_delete', 0);
        $this->db->join('packages p', 'up.package_id = p.id');
        $result = $this->db->get('users_packages up');
        return $result->row_array();
    }

    public function stripe_subscriber_user($user_id) {
        $this->db->select('stripe_customer_id');
        $this->db->where('user_id', $user_id);
        $this->db->order_by('id', 'DESC');

        $result = $this->db->get('stripe_subsribers_users');
        return $result->row_array();
    }

}
