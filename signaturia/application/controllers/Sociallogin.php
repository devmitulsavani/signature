<?php

class Sociallogin extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->library('facebook');
        $this->load->helper('date');
    }

    public function fb_redirect() {
        $d = $this->facebook->get_login_url();
        redirect($d);
    }

    public function facebook_callback() {
        $user = $this->facebook->get_user();
        if (!empty($user) && !empty($user['email'])) {
            $result = $this->check_user(['email' => $user['email'] ]);
            if (!empty($result)) {
                if (!empty($result['login_access_token']) && $result['login_User_type'] == 'facebook') {
                    if ($result['status'] != 'active') {
                        $this->session->set_flashdata('error', 'Your Account is In-active');
                        redirect('home');
                    }
                    $this->login_user($user['email']);
                } else {
                    $this->session->set_flashdata('error', 'Account with ' . $user['email'] . ' already exist and it\'s not belongs to Facebook!');
                    redirect('home');
                }
            } else {
                $save_result = [
                    'email'             => $user['email'],
                    'login_user_type'   => 'facebook',
                    'login_access_token'=> $user['id'],
                    'nickname'          => $user['email'],
                    'is_verified'       => 1,
                    'status'            => 'active'
                ];
                $id = $this->db->insert(TBL_USERS, $save_result);
                if ($id) {
                    $checkUser = $this->users_model->get_all_details(TBL_USERS, array('email' => $user['email']));
                    //$this->send_confirm_mail($checkUser);
                    $this->login_user($user['email']);
                }
            }

            $this->session->set_flashdata('error', 'Insufficient detail to Login. Please try again.');
            redirect('home');
        } else {
            $this->session->set_flashdata('error', 'Insufficient detail to Login. Please try again.');
            redirect('home');
        }
    }

    private function check_user($con) {
        $this->db->select('*');
        $this->db->from(TBL_USERS);
        $this->db->where($con);
        $this->db->limit(1);
        $query = $this->db->get();
        $result = $query->result_array();
        if (empty($result)) {
            return false;
        }
        return $result[0];
    }

    private function login_user($email) {
        $stay_signed_in = '';
        $condition = 'email = \'' . addslashes($email) . '\'';
        $checkUser1 = $this->users_model->get_all_details(TBL_USERS, $condition);
        $userdata = array(
            'session_user_id'       => $checkUser1->row()->id,
            'session_user_name'     => $checkUser1->row()->nickname,
            'session_user_email'    => $checkUser1->row()->email,
            'session_user_confirm'  => $checkUser1->row()->is_verified,
            'login_user_type'       => $checkUser1->row()->login_user_type
        );
        $this->session->set_userdata($userdata);
        $CookieVal = array('name' => 'cookie_user_id', 'value' => base64_encode($this->session->userdata('session_user_id')), 'expire' => 3600 * 24 * 7);
        $this->input->set_cookie($CookieVal);
        $newdata = array(
            'last_login_date' => date('Y-m-d h:i:s'),
            'last_login_ip' => $this->input->ip_address()
        );

        $condition = array('id' => $checkUser1->row()->id);
        $this->users_model->common_insert_update('update',TBL_USERS, $newdata, $condition);
        $this->session->set_flashdata('success','You have successfully Logged In!');
        redirect('home');
    }

    /**
     * 
     * Resend the confirmation mail to user
     * param String $userDetails
     * 
     */
    public function send_confirm_mail($userDetails = '') {

        $uid = $userDetails->row()->id;
        $email = $userDetails->row()->email;
        $name = $userDetails->row()->full_name;

        $randStr = $this->get_rand_str('10');
        $condition = array('id' => $uid);
        $dataArr = array('verify_code' => $randStr);
        $this->user_model->update_details(USERS, $dataArr, $condition);
        $newsid = '3';
        $template_values = $this->user_model->get_newsletter_template_details($newsid);

        $cfmurl = base_url() . 'site/user/confirm_register/' . $uid . "/" . $randStr . "/confirmation";
        #echo $cfmurl;
        $subject = 'From: ' . $this->config->item('email_title') . ' - ' . $template_values['news_subject'];
        $adminnewstemplateArr = array('email_title' => $this->config->item('email_title'), 'logo' => $this->data['logo'], 'footer_content' => $this->config->item('footer_content'));
        extract($adminnewstemplateArr);
        //$ddd =htmlentities($template_values['news_descrip'],null,'UTF-8');
        $header .="Content-Type: text/plain; charset=ISO-8859-1\r\n";

        $message .= '<!DOCTYPE HTML>
			<html>
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<meta name="viewport" content="width=device-width"/><body>';
        include('./newsletter/registeration' . $newsid . '.php');

        $message .= '</body>
			</html>';

        if ($template_values['sender_name'] == '' && $template_values['sender_email'] == '') {
            $sender_email = $this->data['siteContactMail'];
            $sender_name = $this->data['siteTitle'];
        } else {
            $sender_name = $template_values['sender_name'];
            $sender_email = $template_values['sender_email'];
        }

        $email_values = array('mail_type' => 'html',
            'from_mail_id' => $sender_email,
            'mail_name' => $sender_name,
            'to_mail_id' => $email,
            'subject_message' => $template_values['news_subject'],
            'body_messages' => $message
        );
        $email_send_to_common = $this->user_model->common_email_send($email_values);
    }

}
