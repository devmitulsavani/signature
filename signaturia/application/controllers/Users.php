<?php

/**
 * Users Controller - Manage Users
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->model('users_model');
        $GLOBALS['unique_uname'] = $GLOBALS['unique_email'] = '';
    }

    public function index() {
        
    }

    /**
     * This function used to user's registration at front end side. 
     * */
    public function user_register() {
        $data['title'] = 'Signaturia';
        if ($this->reg_users_validate()) {
            $verification_code = rand(100000, 999999);
            $username = $this->input->post('txt_username');
            $email = $this->input->post('txt_email');
            $pass = $this->input->post('txt_pass');
            $dataArr = array(
                'role_id' => 2,
                'nickname' => $username,
                'email' => $email,
                'password' => md5($pass),
                'status' => 'active',
                'verification_code' => $verification_code,
                'last_login_date' => date('Y-m-d h:i:s'),
                'last_login_ip' => $this->input->ip_address()
            );
            $this->users_model->common_insert_update('insert', TBL_USERS, $dataArr);
            $checkUser = $this->users_model->get_all_details(TBL_USERS, array('email' => $email));
            $userdata = array(
                'session_user_id' => $checkUser->row()->id,
                'session_user_name' => $checkUser->row()->nickname,
                'session_user_email' => $checkUser->row()->email,
                'session_user_confirm' => $checkUser->row()->is_verified,
                'login_user_type' => $checkUser->row()->login_user_type
            );
            $this->session->set_userdata($userdata);
            $CookieVal = array('name' => 'cookie_user_id', 'value' => base64_encode($this->session->userdata('session_user_id')), 'expire' => 1800);
            $this->input->set_cookie($CookieVal);
            $href = base_url() . 'activate/' . urlencode(base64_encode($email)) . '/' . base64_encode($verification_code);
            $msg = "<a href='" . $href . "'>Click here</a> for verify your account";
            $email_array = array(
                'mail_type' => 'html',
                'from_mail_id' => $this->config->item('smtp_user'),
                'from_mail_name' => '',
                'to_mail_id' => $email,
                'cc_mail_id' => '',
                'subject_message' => 'Signaturia | Account Verification',
                'body_messages' => $msg
            );
            $this->users_model->common_email_send($email_array);
            $this->session->set_flashdata('success', 'New User has been added successfully.');
            redirect('home');
        }else{
               redirect('home');
            //$this->template->load('frontend', 'home', $data);
        }
    }

    /**
     * This function used to validate users data athe time of registration
     * */
    public function reg_users_validate() {
        $this->form_validation->set_rules('txt_username', 'Username', 'trim|required|min_length[5]|is_unique[users.nickname]');
        $this->form_validation->set_rules('txt_email', 'Email', 'trim|required|is_unique[users.email]');
        $this->form_validation->set_rules('txt_pass', 'Password', 'trim|required|min_length[6]|max_length[12]');
        if($this->form_validation->run()){
            return true;
        }else{
            return false;
        }
    }

    /**
     * This function used validate user's name by ajax at the time of registration
     * */
    public function username_validation() {
        $uname = $this->input->post('uname');
        $num_rows = $this->users_model->get_all_details(TBL_USERS, array('nickname' => $uname))->num_rows();
        if ($num_rows > 0) {
            $status = 0;
        } else {
            $status = 1;
        }
        echo json_encode($status);
    }

    /**
     * This function used validate user's email by ajax at the time of registration
     * */
    public function email_validation() {
        $email = $this->input->post('email');
        $num_rows = $this->users_model->get_all_details(TBL_USERS, array('email' => $email))->num_rows();
        if ($num_rows > 0) {
            $status = 0;
        } else {
            $status = 1;
        }
        echo json_encode($status);
    }

    public function user_login() {
        $data['title'] = 'Signaturia | Login';
        if ($this->login_users_validate()) {
            $username = $this->input->post('txt_login_username');
            $pass = md5($this->input->post('txt_login_pass'));
            $stay_logged_in = $this->input->post('txt_stay_logged_in');
            $result = $this->users_model->check_login_validation($username, $pass);
            //echo $this->db->last_query();
            $num_rows = $result->num_rows();
            //echo $num_rows; die;
            if ($num_rows == 1) {
                $newdata = array(
                    'last_login_date' => date('Y-m-d h:i:s'),
                    'last_login_ip' => $this->input->ip_address()
                );
                $this->users_model->common_insert_update('update', TBL_USERS, $newdata, ['id' => $result->row()->id]);
                $userdata = array(
                    'session_user_id' => $result->row()->id,
                    'session_user_name' => $result->row()->nickname,
                    'session_user_email' => $result->row()->email,
                    'session_user_confirm' => $result->row()->is_verified,
                    'login_user_type' => $result->row()->login_user_type
                );
                $this->session->set_userdata($userdata);
                if ($stay_logged_in == "on") {
                    $CookieVal = array('name' => 'cookie_user_id', 'value' => base64_encode($this->session->userdata('session_user_id')), 'expire' => 3600 * 24 * 7);
                    $this->input->set_cookie($CookieVal);
                    //$this->session->set_tempdata($userdata,'',1800);
                } else {
                    $CookieVal = array('name' => 'cookie_user_id', 'value' => base64_encode($this->session->userdata('session_user_id')), 'expire' => 1800);
                    $this->input->set_cookie($CookieVal);
                }

                $this->session->set_flashdata('success', 'You have successfully logged in');
                redirect('home');
            } else {
                $this->session->set_flashdata('error', 'Login details are Invalid.');
                redirect('home');
            }
        }
    }

    public function login_users_validate() {
        $this->form_validation->set_rules('txt_login_username', 'Username', 'trim|required');
        $this->form_validation->set_rules('txt_login_pass', 'Password', 'trim|required');
        return $this->form_validation->run();
    }

    public function user_logout() {
        $this->users_model->common_insert_update('update', TBL_USERS, ['last_logout_date' => date("Y-m-d h:i:s")], ['id' => $this->checkLogin('ID')]);
        $userdata = [
            'session_user_id',
            'session_user_name',
            'session_user_email',
            'session_user_confirm',
            'login_user_type'
        ];
        $this->session->unset_userdata($userdata);
        delete_cookie("cookie_user_id");
        $this->session->set_flashdata('success', 'Successfully logout from your account');
        redirect('home');
    }

    /**
     * This function used validate user's name by ajax at the time of registration
     * @author KU
     * */
    public function usernameemail_validate() {
        $uname = $this->input->post('uname');
        $where = "nickname='" . $uname . "' OR email='" . $uname . "' AND status != 'deleted'";
        $num_rows = $user_result = $this->users_model->get_all_details(TBL_USERS, $where);
        if ($num_rows->num_rows() > 0) {
            $user_result->row_array()['id'];
            $status = $user_result->row_array()['id'];
            if($user_result->row_array()['status'] == 'inactive'){
                $status = 'inactive';
            }
        } else {
            $status = 0;
        }
        echo json_encode($status);
    }

    /**
     * Send email to user on forgot password
     * @author KU
     */
    public function forgot_pwd() {
        $cstrong = '';
        $password = bin2hex(openssl_random_pseudo_bytes(10, $cstrong));
        $user_id = $this->input->post('user_id');
        $user = $this->users_model->get_all_details(TBL_USERS, array('id' => $user_id))->row_array();
        $dataArr = array(
            'password' => md5($password),
        );
        $this->users_model->common_insert_update('update', TBL_USERS, $dataArr, array('id' => $user_id));
        $msg = "Hi You have requested for forgot password! Here is your new password : <b>" . $password . "</b>";
        $email_array = array(
            'mail_type' => 'html',
            'from_mail_id' => $this->config->item('smtp_user'),
            'from_mail_name' => '',
            'to_mail_id' => $user['email'],
            'cc_mail_id' => '',
            'subject_message' => 'Signaturia | Forgot Password',
            'body_messages' => $msg
        );
        $result = $this->users_model->common_email_send($email_array);
        echo json_encode($result);
    }

    /**
     * If user requests for delete account
     * @author KU
     */
    public function delete_request() {
        $user_id = $this->checkLogin('ID');
        //-- If user is logged in then only send request for delete account
        if ($user_id) {
            $user_email = $this->checkLogin('E');
            $update_array = array(
                'delete_request' => 1,
                'deleted_on' => date('Y-m-d H:i:s'),
                'status' => 'deleted');
            //-- Updates users table
            $this->users_model->common_insert_update('update', TBL_USERS, $update_array, array('id' => $user_id));

            //-- Send email to user for account restore 
            $msg = "Hi You have requested to delete your account! Your account is deleted. If you want to restore your account please click on below link. Please note that this link will be active only for 72 Hours<br/>";
            $href = site_url() . 'users/restore_account?id=' . urlencode($this->encrypt->encode($user_id));
            $msg.= "<a href='" . $href . "'>Click here</a> to restore your account";
            $email_array = array(
                'mail_type' => 'html',
                'from_mail_id' => $this->config->item('smtp_user'),
                'from_mail_name' => '',
                'to_mail_id' => $user_email,
                'cc_mail_id' => '',
                'subject_message' => 'Signaturia | Delete Account',
                'body_messages' => $msg
            );
            $this->users_model->common_email_send($email_array);

            //-- Updates users last login status and logout user from system
            $this->users_model->common_insert_update('update', TBL_USERS, ['last_logout_date' => date("Y-m-d h:i:s")], ['id' => $this->checkLogin('ID')]);
            $userdata = [
                'session_user_id',
                'session_user_name',
                'session_user_email',
                'session_user_confirm',
                'login_user_type'
            ];
            $this->session->unset_userdata($userdata);
            delete_cookie("cookie_user_id");
            $this->session->set_flashdata('success', 'Your account is deleted! If you want to restore your account then please check your email.');
            redirect('/');
        } else {
            show_404();
        }
    }

    /**
     * Restore user account if request is made for delete account
     * @author KU
     */
    public function restore_account() {
        $user_id = $this->input->get('id');
        $user_id = urlencode($this->encrypt->decode($user_id));
        $data = $this->users_model->get_all_details(TBL_USERS, array('id' => $user_id))->row_array();
        //-- if user is exist in database 
        if ($data && $data['delete_request'] == 1) {
            $deleted_on = $data['deleted_on'];
            $check_diff = 259200;
            $diff = strtotime(date('Y-m-d h:m:i')) - strtotime($deleted_on);
            if ($diff < $check_diff) {
                $update_array = array(
                    'delete_request' => 0,
                    'status' => 'active');
                $this->users_model->common_insert_update('update', TBL_USERS, $update_array, ['id' => $user_id]);
                $this->session->set_flashdata('success', 'Your account is restored successfully!');
            } else {
                $this->session->set_flashdata('error', 'Sorry! Your time for restore account is expired');
            }
            redirect('/');
        } else {
            show_404();
        }
    }

    public function general_settings() {
        $data['title'] = 'Htmlsig';
        $data['user_session_id'] = $this->checkLogin('ID');
        if ($this->change_email_validate()) {
            $pass = md5($this->input->post('txt_current_password_email'));
            $email = $this->input->post('txt_new_email');
            $condition = array(
                'id' => $this->checkLogin('ID'),
                'password' => $pass
            );
            $num_rows = $this->users_model->get_all_details(TBL_USERS, $condition);
            if ($num_rows->num_rows() > 0) {
                $dataArr = array(
                    'email' => $email,
                    'modified' => date("Y-m-d h:i:s")
                );
                $condition = array(
                    'id' => $this->checkLogin('ID')
                );
                $this->users_model->common_insert_update('update', TBL_USERS, $dataArr, $condition);
                $this->session->set_flashdata('success', 'Your Email ID has been successfully updated. Please Logged it again.');
                $this->users_model->common_insert_update('update', TBL_USERS, ['last_logout_date' => date("Y-m-d h:i:s")], ['id' => $this->checkLogin('ID')]);
                $userdata = [
                    'session_user_id',
                    'session_user_name',
                    'session_user_email',
                    'session_user_confirm',
                    'login_user_type'
                ];
                $this->session->unset_userdata($userdata);
                delete_cookie("cookie_user_id");
            } else {
                $this->session->set_flashdata('error', 'Password you entered did not match, please enter valid password');
            }
            redirect('home');
        }
        $this->template->load('frontend', 'settings/general_settings', $data);
    }

    /**
     * This function used to validate change email form
     * */
    public function change_email_validate() {
        $this->form_validation->set_rules('txt_current_password_email', 'Current Password', 'trim|required');
        $this->form_validation->set_rules('txt_new_email', 'Email', 'trim|required');
        return $this->form_validation->run();
    }

    public function change_password() {
        $data['title'] = 'Htmlsig';
        $data['user_session_id'] = $this->checkLogin('ID');
        if ($this->change_password_validate()) {
            $pass = md5($this->input->post('txt_current_password_pass'));
            $new_pass = $this->input->post('txt_new_password');
            $condition = array(
                'id' => $this->checkLogin('ID'),
                'password' => $pass
            );
            $num_rows = $this->users_model->get_all_details(TBL_USERS, $condition);
            if ($num_rows->num_rows() > 0) {
                $dataArr = array(
                    'password' => md5($new_pass),
                    'modified' => date("Y-m-d h:i:s")
                );
                $condition = array(
                    'id' => $this->checkLogin('ID')
                );
                $this->users_model->common_insert_update('update', TBL_USERS, $dataArr, $condition);
                $this->session->set_flashdata('success', 'Your Email ID has been successfully updated. Please Logged it again.');
                $this->users_model->common_insert_update('update', TBL_USERS, ['last_logout_date' => date("Y-m-d h:i:s")], ['id' => $this->checkLogin('ID')]);
                $userdata = [
                    'session_user_id',
                    'session_user_name',
                    'session_user_email',
                    'session_user_confirm',
                    'login_user_type'
                ];
                $this->session->unset_userdata($userdata);
                delete_cookie("cookie_user_id");
            } else {
                $this->session->set_flashdata('error', 'Password you entered did not match, please enter valid password');
            }
            redirect('home');
        }
        $this->template->load('frontend', 'settings/general_settings', $data);
    }

    /**
     * This function used to validate change password form
     * */
    public function change_password_validate() {
        $this->form_validation->set_rules('txt_current_password_pass', 'Current Password', 'trim|required');
        $this->form_validation->set_rules('txt_new_password', 'New Password', 'trim|required');
        $this->form_validation->set_rules('txt_new_re_password', 'RenterPassword', 'trim|required|matches[txt_new_password]');
        return $this->form_validation->run();
    }

    /**
     * Check email address entered in email_id of account profile page is unique or not
     * Called throught ajax
     * @author KU
     */
    public function checkUniqueEmail() {
        $requested_email = trim($this->input->get('txt_new_email'));
        $user_email = $this->checkLogin('E');
        if ($requested_email != $user_email) {
            $user = $this->users_model->check_unique_email($requested_email);
            if ($user) {
                echo "false";
            } else {
                echo "true";
            }
        } else {
            echo "true";
        }
        exit;
    }

}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */