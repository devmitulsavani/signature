<?php

/**
 * Login Controller for Admin Login
 * @author KU 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/login_model');
    }

    /**
     * Display login page for Super admin/Business user login
     */
    public function index() {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|callback_admin_validation');
        $this->form_validation->set_rules('password', 'Password', 'trim');
        if ($this->form_validation->run() == FALSE) {
            $data['error'] = validation_errors();
        } else {
            //-- If redirect is set in URL then redirect user back to that page
            if ($this->input->get('redirect')) {
                redirect(base64_decode($this->input->get('redirect')));
            } else {
                redirect('admin/home');
            }
        }
        $this->load->view('admin/login', $data);
    }

    /**
     * Callback Validate function to check Super Admin/Business User 
     * @return boolean
     */
    public function admin_validation() {
        $result = $this->login_model->get_admin($this->input->post('email'), $this->input->post('password'));
        if ($result) {
            $this->session->set_userdata('htmlsig_admin', $result);
            return TRUE;
        } else {
            $this->form_validation->set_message('admin_validation', 'Invalid Email/Password.');
            return FALSE;
        }
    }

    /**
     * Clears the session and log out Admin
     */
    public function logout() {
        $this->session->sess_destroy();
        redirect('admin/login');
    }

}
