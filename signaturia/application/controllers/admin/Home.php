<?php

/**
 * Home Controller - Manage dashboard of Super Admin
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/users_model');
    }

    /**
     * Dashboard page
     */
    public function index() {
        $data['title'] = 'Signaturia | Dashboard';
        $this->template->load('admin', 'admin/home/index', $data);
    }

    /**
     * Change password of Admin
     */
    public function change_password() {
        $data = array();
        $data['title'] = 'Change Password';
        $data['heading'] = 'Change Password';
        $this->form_validation->set_rules('old_password', 'Old Password', 'required|callback_old_pwd_validation');
        $this->form_validation->set_rules('new_password', 'Password', 'required|min_length[5]|max_length[15]|matches[confirm_password]', array('required' => 'Please enter Password',
            'min_length' => 'Password should be of minimum 5 characters long',
            'max_length' => 'Password should be of maximum 15 characters long',
            'matches' => 'Password should match with Confirm Password'
                )
        );
        $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required', array('required' => 'Please enter Confirm Password'));

        if ($this->form_validation->run() == TRUE) {
            $admin = $this->session->userdata('htmlsig_admin');

            $update_data = array('password' => md5($this->input->post('new_password')));
            $this->users_model->update_record('id =' . $admin['id'], $update_data);
            $this->session->set_flashdata('success', 'Password has been changed successfully!');
            redirect('admin/change_password');
        }

        $this->template->load('admin', 'admin/home/change_password', $data);
    }

    /**
     * Checks entered old password matches with saved database password
     * @return boolean
     */
    public function old_pwd_validation() {
        $admin = $this->session->userdata('htmlsig_admin');
        $admin_data = $this->users_model->get_admin($admin['id']);
        if (md5($this->input->post('old_password')) != $admin_data['password']) {
            $this->form_validation->set_message('old_pwd_validation', 'Please enter correct old passoword. It does not match');
            return FALSE;
        } else {
            return TRUE;
        }
    }

}
