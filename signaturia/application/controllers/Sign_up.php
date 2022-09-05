<?php

/**
 * Home Controller - Landing Page of Htmlsig
 * @author Kirti
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class sign_up extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('signup_model');
    }

    /**
     * Display Landing page of Htmlsig
     */
    public function index() {
        $data['title'] = 'Signaturia | Sign-up';
        $data['packages'] = $this->signup_model->get_active_packages();

        $created_signature = $this->session->userdata('user_signature');
        $this->form_validation->set_rules('email', 'email', 'trim|required|callback_is_uniquemail', array('is_unique' => 'Email already exist! Please try with another.'));
        $this->form_validation->set_rules('privacy_policy', 'privacy_policy', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        $this->form_validation->set_rules('package', 'package', 'trim|required');
        $this->form_validation->set_rules('confirm_password', 'confirm password', 'trim|required|matches[password]');
        if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_error_delimiters('<div class="alert bg-danger alert-styled-left bootstrap_alert"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
        } else {
            extract($this->input->post(null));
            $package_data = explode('-', $package);
            $check_valid_package = $this->signup_model->get_row($package_data[0]);
            if ($check_valid_package) {
                $insert_data = array(
                    'fullname' => $firstname . ' ' . $lastname,
                    'email' => $email,
                    'password' => md5($password),
                    'company' => $company,
                    'title' => $title,
                    'created' => date('Y-m-d H:i:s'),
                    'user_role' => 2,
                    'is_verified' => 0,
                    'is_active' => 0
                );
                $this->signup_model->insert('users', $insert_data);
                $user_id = $this->db->insert_id();
                $insert_data = array(
                    'user_id' => $user_id,
                    'package_id' => $package_data[0],
                    'package_type' => ($package_data[1] == 'monthly') ? 2 : 1,
                    'created' => date('Y-m-d H:i:s'),
                );
                $this->signup_model->insert('users_packages', $insert_data);
                $this->signup_model->insert('signatures', array('user_id' => $user_id, 'created' => date('Y-m-d H:i:s')));
                $signature_id = $this->db->insert_id();
                if (isset($created_signature)) {
                    $insert_socials = array();
                    $insert_main = array();
                    $insert_value = array();
                    foreach ($created_signature['post'] as $key => $value) {
                        $is_array = explode('_', $key);
                        // for signature socials
                        if (count($is_array) > 2) {
                            if ($value != '') {
                                $data_for_insert['signature_id'] = $signature_id;
                                $data_for_insert['social_icons_id'] = $is_array[2];
                                $data_for_insert['url'] = $value;
                                $data_for_insert['created'] = date('Y-m-d H:i:s');
                                $insert_socials[] = $data_for_insert;
                            }
                        }
                        // for signature socials
                        elseif (count($is_array) > 1) {
                            if ($value != '') {
                                if ($is_array[1] == 'name') {
                                    $insert_value['name'] = $value;
                                } elseif ($is_array[1] == 'jobtitle') {
                                    $insert_value['job_title'] = $value;
                                } elseif ($is_array[1] == 'email') {
                                    $insert_value['email'] = $value;
                                } elseif ($is_array[1] == 'companyname') {
                                    $insert_value['company_name'] = $value;
                                } elseif ($is_array[1] == 'website') {
                                    $insert_value['website'] = $value;
                                } elseif ($is_array[1] == 'officephone') {
                                    $insert_value['office_phone'] = $value;
                                } elseif ($is_array[1] == 'fax') {
                                    $insert_value['fax'] = $value;
                                } elseif ($is_array[1] == 'address') {
                                    $insert_value['address'] = $value;
                                } elseif ($is_array[1] == 'address2') {
                                    $insert_value['address_line2'] = $value;
                                } elseif ($is_array[1] == 'mobilenumber') {
                                    $insert_value['mobile_number'] = $value;
                                }
                            }
                        }
                    }
                    $insert_value['created'] = date('Y-m-d H:i:s');
                    if ($created_signature['file'] != '') {
                        list($type, $data) = explode(';', $created_signature['file']);
                        list(, $data) = explode(',', $created_signature['file']);
                        $data = base64_decode($data);
                        $filename = 'siganture-logo-' . $signature_id . '.png';
                        file_put_contents('uploads/sigantures_uploads/logos/' . $filename, $data);
                        $insert_value['logo'] = $filename;
                    }
                    $this->signup_model->insert('signature_main', $insert_value);
                    if($insert_socials) {
                        $this->signup_model->insert_batch('signature_socials', $insert_socials);
                    }
                }
                $this->load->library('my_encryption');
                $activate_key = $this->my_encryption->safe_b64encode(md5($password));
                $button_link = site_url() . "verify_account?ident=" . $user_id . "&activate=" . $activate_key;
                $mail_data = array(
                    'heading' => 'Welcome to signaturia!',
                    'message' => 'Please click on below link for verify account!',
                    'button_link' => $button_link,
                );

                if ($check_valid_package['monthly_price'] == 0 && $check_valid_package['yearly_price'] == 0) {
                    $where = array('where' => array('type' => 'welcome'));
                    $string = $this->common_model->sql_select('email_templates', '*', $where, array('single' => true));
                    $string = $string['email_template'];
                    $string = str_replace('{button_link}', $button_link, $string);
                    $msg = $string;

                    // $msg = $this->load->view('email_templates/forgot_password', $mail_data, true);
                    $sent_email = send_mail_front($email, EMAIL_FROM, 'Verify your account | Signaturia', $msg);
                } else {
                    $this->load->library('my_encryption');
                    $activate_key = $this->my_encryption->safe_b64encode($user_id . '::' . KEY);
                    redirect('payment?key=' . $activate_key);
//                    redirect($button_link);
                }

//                $this->session->set_flashdata('success', 'You are registered successfully! Please verify link from your email account.');
                redirect('thank_you?key=' . base64_encode($user_id));
//                redirect(site_url('login'));
            } else {
                $this->session->set_flashdata('error', 'Invalid request! Please try again later.');
                redirect(site_url('sign-up'));
            }
        }
        $this->template->load('frontend', 'signup-view', $data);
    }

    public function verify_account() {
        $this->load->library('my_encryption');
        extract($this->input->get(null));
        $activate_key = $this->my_encryption->safe_b64decode($activate);
        $result = $this->signup_model->check_valid_email(array('password' => $activate_key, 'id' => $ident));
        if ($result) {
            $package = $this->signup_model->get_valid_user_with_package($result['id']);

//            if ($package['type'] == 1) {
            $insert_data = array(
                'is_verified' => 2,
                'is_active' => 1
            );
            $this->signup_model->update_record('users', array('id' => $result['id']), $insert_data);
            $this->session->set_flashdata('success', 'You are verified! Please login with your account.');

            //-- Send welcome email
            $msg = $this->load->view('email_templates/welcome', array(), true);
            $sent_email = send_mail_front($result['email'], EMAIL_FROM, 'Welcome to Signaturia', $msg);
            redirect('login');
//            } else {
//                $this->load->library('my_encryption');
//                $activate_key = $this->my_encryption->safe_b64encode($package['user_id'] . '::' . KEY);
//                redirect('payment?key=' . $activate_key);
//            }
        }
    }

    public function signature() {
        $array['post'] = $this->input->post();
        $path = $_FILES['my_logo']['tmp_name'];
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = @file_get_contents($path);
        $array['file'] = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $this->session->set_userdata('user_signature', $array);
        $this->session->set_flashdata('success', 'Please signup with Signaturia');
        redirect('sign-up');
    }

    /**
     * Callback function to check email validation - Email is unique or not
     * @param string $str
     * @return boolean
     */
    public function is_uniquemail() {
        $email = trim($this->input->post('email'));
        $user = $this->signup_model->check_unique_email($email);
        if ($user) {
            $this->form_validation->set_message('is_uniquemail', 'Email address is already in use!');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    /**
     * Redirect to thank you page
     */
    public function thank_you() {
        $data['title'] = 'Signaturia | Thank You';
        $data['user_id'] = $this->input->get('key');
        $this->template->load('frontend', 'thankyou-view', $data);
    }

    public function resend_verification() {
        $this->load->library('my_encryption');
        $user_id = $this->input->get('key');
        $user_id = base64_decode($user_id);
        $user = $this->signup_model->check_row('id=' . $user_id, TBL_USERS);
        $activate_key = $this->my_encryption->safe_b64encode($user['password']);
        $button_link = site_url() . "verify_account?ident=" . $user_id . "&activate=" . $activate_key;
        $mail_data = array(
            'heading' => 'Welcome to signaturia!',
            'message' => 'Please click on below link for verify account!',
            'button_link' => $button_link,
        );
        // $msg = $this->load->view('email_templates/forgot_password', $mail_data, true);
        $where = array('where' => array('type' => 're-verification'));
        $string = $this->common_model->sql_select('email_templates', '*', $where, array('single' => true));
        $string = $string['email_template'];
        $string = str_replace('{button_link}', $button_link, $string);
        $msg = $string;

        $sent_email = send_mail_front($user['email'], EMAIL_FROM, 'Verify your account | Signaturia', $msg);
        $this->session->set_flashdata('success', 'Verification Email has been resend successfully');
        redirect('thank_you?key=' . base64_encode($user_id));
    }

}
