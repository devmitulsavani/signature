<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class payment extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('payment_model');
    }

    public function index() {
        $data['title'] = 'Signaturia | Payment';
        $this->load->library('my_encryption');
        $data['packages'] = $this->payment_model->get_active_packages();
        $data['payment_settings'] = $this->payment_model->get_settings();
        $activate_key = $this->my_encryption->safe_b64decode($this->input->get('key'));
        $ar = explode('::', $activate_key);
        $check_valid_user = $this->payment_model->get_valid_user_with_package($ar[0]);

        if($check_valid_user) {
            $data['package_data'] = $check_valid_user;
            if($this->input->post(null)) {
                $package_data = explode('-',$this->input->post('package'));
                $update_data = array(
                    'package_id' => $package_data[0],
                    'package_type' => ($package_data[1] == 'monthly') ? 2 : 1,
                );
                $this->payment_model->update_record('users_packages', array('id' => $check_valid_user['selected_id'], 'user_id' => $check_valid_user['user_id']), $update_data);
                $this->session->set_flashdata('success', 'Your plan changed! Please pay for your selected plan.');
                redirect('payment?key='.$this->input->get('key'));
            }
            $result = $this->payment_model->check_last_payment($check_valid_user['user_id']);
            if($result) {
                if($result['months'] <= 12) {
                    $this->session->set_flashdata('success', 'Your already paid! Please login with your account.');
                    redirect('login');
                }
            }
            $this->template->load('frontend', 'payment-view', $data);
        } else {
            show_404();
        }
    }
}
