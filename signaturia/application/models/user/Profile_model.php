<?php

class Profile_model extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    public function get_user($data) {
        $this->db->select('u.*, uc.mobile_number, uc.website, uc.profile_pic, uc.phone_number, uc.fax, uc.address, uc.address_line2, uc.profile_pic, u.company, u.title, uc.id AS contact_detail_id');
        $this->db->where('u.id', $data['id']);
        $this->db->join('users_contact_details uc', 'uc.user_id = u.id', 'LEFT');
        $this->db->where('u.email', $data['email']);
        $query = $this->db->get('users u');
        return $query->row_array();
    }

    public function check_valid_email($email){
        $result = $this->db->select('*')->where('email', $email)->where('user_role', 2)->get('users');
        if($result->result_array()){
            return $result->result_array();
        } else {
            return FALSE;
        }
    }

    /**
     * @method : insert
     * @uses : Insert user record into table
     * @param : @table = table name, @array = array of insert
     * @return : insert_id else 0
     * @author : KAP
     */
    public function insert($table,$array){
        if ($this->db->insert($table, $array)) {
            return $this->db->insert_id();
        } else {
            return 0;
        }
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

    public function check_password($email){
        $result = $this->db->select('*')->where('password', md5($email))->where('id', $this->session->userdata('htmlsig_user')['id'])->where('user_role', 2)->get('users');
        if($result->result_array()){
            return $result->result_array();
        } else {
            return FALSE;
        }
    }

    public function get_package($user_id){
        $this->db->select('*, pt.created AS last_payment_date, datediff(IF(paid_type = 1, DATE_ADD(pt.created,INTERVAL 365 DAY), DATE_ADD(pt.created,INTERVAL 30 DAY)), curdate()) AS remaining_days, curdate()');
        $this->db->join('packages p', 'pt.package_id = p.id', 'LEFT');
        $this->db->where('pt.user_id', $user_id);
        $this->db->order_by('pt.id', 'DESC');
        $this->db->limit(1);
        $result = $this->db->get('payment_transactions pt');
        return $result->row_array();
    }

    public function get_active_packages($current_package) {
        $this->db->select('p.*');
        $this->db->where('is_delete', 0);
        // if($current_package['paid_type'] == 1) {
            // $this->db->where('yearly_price >=', $current_package['yearly_price']);
            // $this->db->where('monthly_price >=', $current_package['yearly_price']);
        // } else {
            // $this->db->where('monthly_price >= ', $current_package['monthly_price']);
            // $this->db->where('yearly_price >= ', $current_package['monthly_price']);
        // }
        $query = $this->db->get('packages p');
        return $query->result_array();
    }

    public function get_settings() {
        $this->db->select('*');
        $query = $this->db->get('payment_settings');
        return $query->row_array();
    }

    public function get_package_single($package_id){
        $this->db->select('*');
        $this->db->where('p.id', $package_id);
        $result = $this->db->get('packages p');
        return $result->row_array();
    }

    public function get_package_user($user_id){
        $this->db->select('p.*, pt.*, pt.package_id AS id');
        $this->db->join('packages p', 'pt.package_id = p.id', 'LEFT');
        $this->db->where('pt.user_id', $user_id);
        $result = $this->db->get('users_packages pt');
        return $result->row_array();
    }

    public function get_coupon($user_id){
        $this->db->select('c.*, p.*, ac.id AS coupon_applied');
        $this->db->join(TBL_COUPONS.' c', 'c.id = uc.coupon_id', 'LEFT');
        $this->db->join(TBL_PACKAGES.' p', 'c.package_id = p.id', 'LEFT');
        $this->db->join('applied_coupon ac', 'ac.coupon_id = uc.coupon_id', 'LEFT');
        $this->db->where('(ac.coupon_applied = 0 OR ac.coupon_applied = "" OR ac.coupon_applied IS NULL)', NULL, FALSE);
        $this->db->where('uc.user_id', $user_id);
        $this->db->where('(now() >= c.start_datetime AND now() <= c.end_datetime)', NULL, FALSE);
        $this->db->where('c.is_delete', 0);
        $result = $this->db->get(TBL_USERS_COUPONS.' uc');
        return $result->row_array();   
    }

    public function check_coupon($user_id, $coupon_code){
        $this->db->select('c.*, p.*, ac.id AS coupon_applied, c.id AS coupon_id');
        $this->db->join(TBL_COUPONS.' c', 'c.id = uc.coupon_id', 'LEFT');
        $this->db->join(TBL_PACKAGES.' p', 'c.package_id = p.id', 'LEFT');
        $this->db->join('applied_coupon ac', 'ac.coupon_id = uc.coupon_id AND coupon_applied = 0', 'LEFT');
        $this->db->where('uc.user_id', $user_id);
        $this->db->where('(now() >= c.start_datetime AND now() <= c.end_datetime)', NULL, FALSE);
        $this->db->where('c.coupon_code', $coupon_code);
        $result = $this->db->get(TBL_USERS_COUPONS.' uc');
        return $result->row_array();   
    }
}
