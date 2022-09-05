<?php

class Charge_model extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    public function insert($table,$array){
        if ($this->db->insert($table, $array)) {
            return $this->db->insert_id();
        } else {
            return 0;
        }
    }

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

    public function get_settings() {
        $this->db->select('*');
        $query = $this->db->get('payment_settings');
        return $query->row_array();
    }

    public function get_users_package_detail($user_id){
        $this->db->select('up.*, p.*, up.id AS selected_id, u.email, us.stripe_customer_id');
        $this->db->join('packages p', 'p.id = up.package_id', 'LEFT');
        $this->db->join('users u', 'u.id = up.user_id', 'LEFT');
        $this->db->join('stripe_subsribers_users us', 'u.id = us.user_id', 'LEFT');
        $this->db->where('up.user_id', $user_id);
        $query = $this->db->get('users_packages up');
        return $query->row_array();
    }

    public function get_coupon($user_id){
        $this->db->select('*');
        $this->db->where('up.user_id', $user_id);
        $this->db->where('up.coupon_applied', 0);
        $query = $this->db->get('applied_coupon up');
        return $query->row_array();
    }
}