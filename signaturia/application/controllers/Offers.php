<?php

/**
 * Login Controller for User Login
 * @author Kirti 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Offers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('common_model');
    }

    /**
     * Display login page for Business user login
     */
    public function index() {
        $data['title'] = 'Signaturia | Offers';
        $data['offers'] = check_offers();
        $this->template->load('frontend', 'offers-view', $data);
    }

    #--- Apply coupon
    public function apply_coupon(){
        $coupon_code = $this->input->post('coupon_code');
        $package_id = $this->input->post('package_id');
        $user_id = $this->input->post('user_id');
        
        #--- Check coupon is exist or not
        $select = 'c.*, p.*, o.*, ac.id AS coupon_applied';
        $where = '(now() >= c.start_datetime AND now() <= c.end_datetime) AND c.is_delete = 0 AND c.coupon_code ='.$this->db->escape($coupon_code);
        $option = array(
                'join' => array(
                    array(
                        'table' => TBL_COUPONS.' c',
                        'condition' => 'c.id = o.coupon_id'
                    ),
                    array(
                        'table' => TBL_PACKAGES.' p',
                        'condition' => 'c.package_id = p.id'
                    ),
                    array(
                        'table' => 'applied_coupon ac',
                        'condition' => 'ac.coupon_id = o.coupon_id AND coupon_applied = 0 AND user_id ='.$user_id
                    ),
                ),
                'single' => TRUE
            );
        $check_coupon = $this->common_model->sql_select(TBL_OFFERS.' o', $select, $where, $option);
        //print_r($check_coupon);die('stop');
        if($check_coupon['coupon_applied'] != '') {
            $this->session->set_userdata('is_offer', 1);            
            $this->session->set_userdata('package_id', $check_coupon['package_id']); 
            $this->session->set_userdata('package_type', $check_coupon['coupon_type']); 
            $this->session->set_userdata('coupon_price', $check_coupon['coupon_price']);            
            $this->session->set_flashdata('success', 'Your coupon already applied please pay now.');
            echo '2';
        } elseif($check_coupon['coupon_code'] == $coupon_code) {
            if($check_coupon['package_id'] == '' || $check_coupon['package_id'] == 0) {
                $insert_data = array(
                        'user_id' => $user_id,
                        'coupon_id' => $check_coupon['coupon_id'],
                        'coupon_code' => $coupon_code
                    );
                $this->common_model->insert('applied_coupon', $insert_data);                
                $this->session->set_userdata('is_offer', 1);
                $this->session->set_userdata('package_id', $check_coupon['package_id']);
                $this->session->set_userdata('package_type', $check_coupon['coupon_type']); 
                $this->session->set_userdata('coupon_price', $check_coupon['coupon_price']); 
                $this->session->set_flashdata('success', 'Coupon code applied! Please pay now.');
                echo '202';
            } 
            if($check_coupon['package_id'] != '' && $check_coupon['package_id'] != 0) {
                if($package_id == $check_coupon['package_id']) {
                    $insert_data = array(
                        'user_id' => $user_id,
                        'coupon_id' => $check_coupon['coupon_id'],
                        'coupon_code' => $coupon_code
                    );
                    $this->common_model->insert('applied_coupon', $insert_data);
                    $this->session->set_userdata('is_offer', 1);
                    $this->session->set_userdata('package_id', $check_coupon['package_id']); 
                    $this->session->set_userdata('package_type', $check_coupon['coupon_type']); 
                    $this->session->set_userdata('coupon_price', $check_coupon['coupon_price']); 
                    $this->session->set_flashdata('success', 'Coupon code applied! Please pay now.');       
                    echo '202';
                } else {
                    $array_items = array('is_offer','package_id','coupon_price','package_type');
                    $this->session->unset_userdata($array_items);
                    echo '1';
                }
            }
        } else {
            $array_items = array('is_offer','package_id','coupon_price','package_type');
            $this->session->unset_userdata($array_items);
            if($check_coupon['coupon_code'] != $coupon_code) {
                echo '0';
            } else {
                echo '1';
            }
        }
    }
}