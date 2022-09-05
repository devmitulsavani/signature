<?php

/**
 * Users Controller - Manage Users
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class upgrade extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('user/profile_model', 'admin/users_model'));
    }

    public function index() {
        $data['title'] = 'Signaturia | Upgrade Plan';
        $logged_in = $this->session->userdata('htmlsig_user');
        $data['profile'] = $this->profile_model->get_user($logged_in);
        if (!$data['profile']) {
            show_404();
        }
        
        $data['coupon'] = $this->profile_model->get_coupon($data['profile']['id']);
        if(isset($_GET['package'])) {
            $ar = explode('-', $_GET['package']);
            if(count($ar) > 1) {
                $data['package_data'] = $this->profile_model->get_package_single($ar[0]);
                $data['package_data']['package_type'] = ($ar[1] == 'yearly') ? 1 : 2;
                if(empty($data['package_data'])) {
                    show_404();
                }
            } 
        }
        $data['current_package'] = $this->profile_model->get_package_user($data['profile']['id']);

        if($data['current_package']['type'] == 1){
            $data['current_package_data'] = $data['current_package'];
            $data['current_package_data']['paid_type'] = 0;
            // $data['current_package_data']['package_type'] = 0;
            $data['current_package_data']['id'] = isset($ar[0]) ? $ar[0] : $data['current_package']['package_id'];
            // $data['package_data'] = array();
            // $data['package_data']['package_type'] = array();
            $data['current_package']['package_type'] = 0;
        } else {
            $data['current_package_data'] = $this->profile_model->get_package($data['profile']['id']);
        }
        // p( $data['current_package_data']);
        $data['packages'] = $this->profile_model->get_active_packages($data['current_package_data']);
        // p($data['packages']);
        $data['payment_settings'] = $this->profile_model->get_settings();
        $this->template->load('userside', 'user/upgrade-view', $data);
    }

    public function apply_coupon(){
        $user_id = $this->session->userdata('htmlsig_user')['id'];
        if($user_id) {
            $coupon_code = $this->input->post('coupon_code');
            $package_id = $this->input->post('package_id');
            
            #--- Check coupon is exist or not
            $check_coupon = $this->profile_model->check_coupon($user_id, $coupon_code);

            if($check_coupon['coupon_code'] == $coupon_code) {
                if($check_coupon['coupon_applied'] != '') {
                    echo '402';
                } else {
                    if($check_coupon['package_id'] == '' || $check_coupon['package_id'] == 0) {
                        $insert_data = array(
                                'user_id' => $user_id,
                                'coupon_id' => $check_coupon['coupon_id'],
                                'coupon_code' => $coupon_code
                            );
                        $this->profile_model->insert('applied_coupon', $insert_data);
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
                            $this->profile_model->insert('applied_coupon', $insert_data);
                            $this->session->set_flashdata('success', 'Coupon code applied! Please pay now.');       
                            echo '202';
                        } else {
                            echo '1';
                        }
                    }
                }
            } else {
                if($check_coupon['coupon_code'] != $coupon_code) {
                    echo '0';
                } else {
                    echo '1';
                }
            }
        } else {
        }
    }
}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */