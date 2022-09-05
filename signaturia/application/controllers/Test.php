<?php

class Test extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->model('users_model');
        $this->load->library('facebook');
        $this->load->helper('date');
        $this->load->model('charge_model');
    }

    function index() {
        require_once APPPATH . "third_party/stripe/init.php";
        $data['payment_settings'] = $this->charge_model->get_settings();

        \Stripe\Stripe::setApiKey($data['payment_settings']['secret_key']);

        // $subscription = \Stripe\Subscription::StripeObject(array(
        //     "id" => 'sub_BozmEutiEMW3ux'
        // ));
        $subscription = \Stripe\Subscription::retrieve("sub_BcMjqVzkQB781z");
        echo '<pre>';
        print_r($subscription->status);
        if($subscription->status=='active')
            echo 'yes';
        else
            echo 'no';
        die;
    }

    function send_email() {
        $mail_data = array();
        echo $msg = $this->load->view('email_templates/test_email', $mail_data, true);
        die;
        $sent_email = send_mail_front('kamleshpokiya1993@gmail.com', EMAIL_FROM, 'Video testing email | Signaturia', $msg);
    }

    public function test() {
        $msg = 'test';
        send_mail_front('ki2.k.uchadiya@gmail.com', EMAIL_FROM, 'Welcome to Signaturia', $msg);
    }

}
