<?php

/**
 * Login Controller for User Login
 * @author Kirti 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
    }

    /**
     * Display login page for Business user login
     */
    public function index() {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|callback_user_validation');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_error_delimiters('<div class="alert bg-danger alert-styled-left bootstrap_alert"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
        } else {
            //-- If redirect is set in URL then redirect user back to that page
            if ($this->input->get('redirect')) {
                redirect(base64_decode($this->input->get('redirect')));
            } else {
                redirect('home');
            }
        }
        $data['title'] = 'Signaturia | Login';
        $this->template->load('frontend', 'login-view', $data);
    }

    /**
     * Callback Validate function to check Super Admin
     * @return boolean
     */
    public function user_validation() {
        $result = $this->login_model->get_user($this->input->post('email'), $this->input->post('password'));
        if ($result) {
            if ($result['is_verified'] == 0 || $result['is_active'] == 0) {
                $this->form_validation->set_message('user_validation', 'You have not verified your email yet! Please verify it first. To resend verfication email <a href="' . site_url('resend_verification?key=' . base64_encode($result['id'])) . '">click here</a>');
                return FALSE;
            } else {
                $this->load->helper('cookie');
                if ($this->input->post('remember_me') == 1) {
                    $email = $this->input->post('email');
                    setcookie("htmlsig_user", $email . '_' . $result['id'], time() + 31556926, '/');
                }
                $this->session->set_userdata('htmlsig_user', $result);
                return TRUE;
            }
        } else {
            $this->form_validation->set_message('user_validation', 'Invalid Email/Password.');
            return FALSE;
        }
    }

    /**
     * Clears the session and log out Super admin
     */
    public function user_logout() {
        $this->session->sess_destroy();
        $userdata = [
            'htmlsig_user'
        ];
        $this->session->unset_userdata($userdata);
        delete_cookie("htmlsig_user");
        $this->session->userdata('htmlsig_user');
        redirect('login');
    }

    public function forgot_password() {
        $result = $this->login_model->check_valid_email(array('email' => $this->input->post('email')));
        if ($result != FALSE) {
            $this->load->library('my_encryption');
            $activate_key = $this->my_encryption->safe_b64encode($result['password']);
            $button_link = site_url() . "reset_password?ident=" . $result['id'] . "&activate=" . $activate_key;
            $mail_data = array(
                'heading' => 'Forgot password?',
                'message' => 'Please click on below link for update password!',
                'button_link' => $button_link,
            );
            $msg = $this->load->view('email_templates/forgot_password', $mail_data, true);
            // $sent_email = send_mail_front($this->input->post('email'),'info@htmlsig.com','Forgot password? | Signaturia',$msg);
            $sent_email = send_mail_front(trim($this->input->post('email')), EMAIL_FROM, 'Forgot password? | Signaturia', $msg);
            if ($sent_email) {
                echo 1;
            } else {
                echo 2;
            }
        } else {
            echo 3;
        }
    }

    public function reset_password() {
        $this->load->library('my_encryption');
        extract($this->input->get(null));
        $activate_key = $this->my_encryption->safe_b64decode($activate);
        $result = $this->login_model->check_valid_email(array('password' => $activate_key, 'id' => $ident));
        if ($result) {
            $this->form_validation->set_rules('password', 'password', 'trim|required');
            $this->form_validation->set_rules('confirm_password', 'confirm password', 'trim|required|matches[password]');
            if ($this->form_validation->run() == FALSE) {
                $this->form_validation->set_error_delimiters('<div class="alert bg-danger alert-styled-left bootstrap_alert"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
            } else {
                extract($this->input->post(null));
                if (md5($password) == $activate_key) {
                    $this->session->set_flashdata('error', 'Do not use previous password!');
                    redirect(site_url('login'));
                } else {
                    $insert_data = array(
                        'password' => md5($password)
                    );
                    $this->login_model->update_record('users', array('id' => $result['id']), $insert_data);
                    $this->session->set_flashdata('success', 'Your password changed successfully!');
                    redirect(site_url('login'));
                }
            }
            $data['title'] = 'Signaturia | Reset - password';
            $this->template->load('frontend', 'reset-password-view', $data);
        } else {
            $this->session->set_flashdata('error', 'Invalid link or password already changed!');
            redirect(site_url('login'));
        }
    }

}
