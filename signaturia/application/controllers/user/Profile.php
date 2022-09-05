<?php

/**
 * Users Controller - Manage Users
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('user/profile_model', 'admin/users_model'));
    }

    public function index() {
        $data['title'] = 'Signaturia | User Profile';
        $logged_in = $this->session->userdata('htmlsig_user');
        $data['profile'] = $this->profile_model->get_user($logged_in);
        if (!$data['profile']) {
            show_404();
        }
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
            $data['current_package_data']['id'] = @$ar[0];
        } else {
            $data['current_package_data'] = $this->profile_model->get_package($data['profile']['id']);
        }
        // p($data['current_package'], 1);
        $data['packages'] = $this->profile_model->get_active_packages($data['current_package_data']);
        // p($data['packages'], 1);
        $data['payment_settings'] = $this->profile_model->get_settings();
        // p($data['package_data'], 1);
        if($this->input->post('change_password_btn') != ''){
            $this->form_validation->set_rules('old_password', 'old password', 'trim|required|callback_check_password');
            $this->form_validation->set_rules('new_password', 'new password', 'trim|required');
            $this->form_validation->set_rules('confirm_password', 'confirm password', 'trim|required|matches[new_password]');
            if ($this->form_validation->run() == FALSE) {
                $this->form_validation->set_error_delimiters('<div class="alert bg-danger alert-styled-left bootstrap_alert"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
            } else {
                $insert_data = array(
                    'password' => md5($this->input->post('new_password')),
                );
                $this->session->set_flashdata('success_password', 'Your password updated successfully!');
                $this->profile_model->update_record('users', array('id' => $data['profile']['id']), $insert_data);
            }
        } else {
            if (isset($_FILES['profile_pic'])) {
                if ($_FILES['profile_pic']['name'] = '') {
                    $this->form_validation->set_rules('profile_pic', 'profile pic', 'trim|required');
                }
            }
            $this->form_validation->set_rules('firstname', 'firstname', 'trim|required');
            $this->form_validation->set_rules('lastname', 'lastname', 'trim|required');
    //        $this->form_validation->set_rules('name', 'name', 'trim|required');
            $this->form_validation->set_rules('company', 'company', 'trim|required');
            $this->form_validation->set_rules('title', 'title', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required');
    //        $this->form_validation->set_rules('website', 'confirm password', 'trim|required');
    //        $this->form_validation->set_rules('phone_number', 'phone_number', 'trim|required');
    //        $this->form_validation->set_rules('fax', 'fax', 'trim|required');
    //        $this->form_validation->set_rules('address', 'address', 'trim|required');
    //        $this->form_validation->set_rules('address_line2', 'address_line2', 'trim');
            if ($this->form_validation->run() == FALSE) {
                $this->form_validation->set_error_delimiters('<div class="alert bg-danger alert-styled-left bootstrap_alert"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
            } else {
                if (!empty($_FILES['profile_pic']['type'])) {
                    $image_name = upload_image_new('profile_pic', PROFILE_IMAGES);
                } else {
                    $image_name = $data['profile']['profile_pic'];
                }

                extract($this->input->post(null));
                $insert_data = array(
                    'fullname' => $this->input->post('firstname') . ' ' . $this->input->post('lastname'),
                    'company' => $this->input->post('company'),
                    'title' => $this->input->post('title'),
                    'email' => $this->input->post('email'),
                );
                $this->profile_model->update_record('users', array('id' => $data['profile']['id']), $insert_data);
                
                  if ($data['profile']['contact_detail_id'] != '') {
                    $insert_data = array(
                    // 'mobile_number' => $mobile_number,
                    // 'website' => $website,
                    'profile_pic' => $image_name,
                    // 'phone_number' => $phone_number,
                    // 'fax' => $fax,
                    // 'address' => $address,
                    // 'address_line2' => $address_line2
                    );
                  $this->profile_model->update_record('users_contact_details', array('user_id' => $data['profile']['id']), $insert_data);
                  unlink(PROFILE_IMAGES . '/' . $data['profile']['profile_pic']);
                  } else {
                  $insert_data = array(
                  'user_id' => $data['profile']['id'],
                  // 'mobile_number' => $mobile_number,
                  // 'website' => $website,
                  'profile_pic' => $image_name,
                  // 'phone_number' => $phone_number,
                  // 'fax' => $fax,
                  // 'address' => $address,
                  // 'address_line2' => $address_line2,
                  'created' => date('Y-m-d H:i:s')
                  );
                  $this->profile_model->insert('users_contact_details', $insert_data);
                  } 
                $this->session->set_flashdata('success_profile', 'Your profile updated successfully!');
                $user = $this->profile_model->get_user($logged_in);
                $this->session->set_userdata('htmlsig_user', $user);
                redirect(site_url('profile'));
            }
        }
        $this->template->load('userside', 'user/profile-view', $data);
    }

    /**
     * Check email address entered in email_id of account profile page is unique or not
     * Called throught ajax
     * @author Kirti
     */
    public function checkUniqueEmail() {
        $requested_email = trim($this->input->get('email'));
        $user_email = $this->session->userdata('htmlsig_user')['email'];
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

    public function change_password(){
        $data['title'] = 'Signaturia | Change Password';
        $this->form_validation->set_rules('old_password', 'old password', 'trim|required|callback_check_password');
        $this->form_validation->set_rules('new_password', 'new password', 'trim|required');
        $this->form_validation->set_rules('confirm_password', 'confirm password', 'trim|required|matches[password]');
        if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_error_delimiters('<div class="alert bg-danger alert-styled-left bootstrap_alert"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
        } else {

        }
        $this->template->load('userside', 'user/profile-view', $data);
    }

    public function delete_account(){
        $this->form_validation->set_rules('description', 'description', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_error_delimiters('<div class="alert bg-danger alert-styled-left bootstrap_alert"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
        } else {
            $userdata = $this->session->userdata('htmlsig_user');
            $this->load->model(array('user/profile_model', 'admin/users_model'));
            $current = $this->profile_model->get_package_user($userdata['id']);
            $insert_data = array(
                    'user_id' => $userdata['id'],
                    'description' => $this->input->post('description')
                );
            $this->common_model->insert('removed_accounts', $insert_data);
            $update_data = array(
                'is_delete' => 2,
            );
            $this->common_model->update(TBL_USERS, array('id' => $userdata['id']), $update_data);
            if($current['type'] != 1) {
                $this->load->model('user/charge_model');
                $data['payment_settings'] = $this->charge_model->get_settings();
                $where = array(
                        'where' => array(
                            'user_id' => $userdata['id']
                        )
                    );
                $get_sub = $this->common_model->sql_select('stripe_subsribers_users', '*', $where, array('single' => true));
                require_once APPPATH."third_party/stripe/init.php";
            
                \Stripe\Stripe::setApiKey($data['payment_settings']['secret_key']);

                $subscription = \Stripe\Subscription::retrieve($get_sub['stripe_customer_id']);
                $subscription->cancel();

            }
            $userdata = [
                'htmlsig_user'
            ];
            $this->session->unset_userdata($userdata);
            delete_cookie("htmlsig_user");
            $this->session->set_flashdata('success', 'Your account is removed! Thank you for used our services.');   
            redirect('login');
        }
        $this->index();
    }

    public function check_password() {
        $requested_email = trim($this->input->post('old_password'));
        $user = $this->profile_model->check_password($requested_email);
        if ($user) {
            return TRUE;
        } else {
            $this->form_validation->set_message('check_password', 'Invalid old password!');
            return FALSE;
        }
    }
}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */