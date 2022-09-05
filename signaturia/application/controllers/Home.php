
<?php

/**
 * Home Controller - Landing Page of Htmlsig
 * @author Kirti
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/socialicons_model');
    }

    /**
     * Display Landing page of Htmlsig
     */
    public function index() {
        $data['title'] = 'Email Signature Creator and HTML Signature Generator || Signaturia - The Email Signature Generator';
        $data['user_session_id'] = $this->checkLogin('ID');
        $data['social_icons'] = $this->socialicons_model->get_all_social_icons();
        $this->template->load('frontend', 'home', $data);
    }

    public function test() {
        $email_values ['mail_type'] = "html";
        $email_values ['subject_message'] = "test";
        $email_values ['to_mail_id'] = 'kamleshpokiya1993@gmail.com';
        $email_values ['from_mail_id'] = 'kirtiu_13@yahoo.com';
        $email_values ['from_mail_name'] = 'kirti';
        $email_values ['body_messages'] = 'mail_body';
        $email_values['cc_mail_id'] = '';
        common_email_send($email_values);
    }

    /**
     * Display Signature templates
     */
    public function templates() {
        $data['title'] = 'Email Signature Creator and HTML Signature Generator | Signaturia - The Email Signature Generator';
        $this->template->load('frontend', 'signature_templates', $data);
    }

}
