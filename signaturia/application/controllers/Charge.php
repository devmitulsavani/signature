<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Charge extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('charge_model');
    }

    public function index() {
        $data['title'] = 'Welcome to Signaturia';
        require_once APPPATH . "third_party/stripe/init.php";
        $data['payment_settings'] = $this->charge_model->get_settings();

        $where = array(
            'where' => array(
                'up.user_id' => $_POST['user_id'],
                'up.coupon_applied' => 0
            )
        );
        $option = array('single' => TRUE);
        $get_coupon = $this->common_model->sql_select('applied_coupon up', '*', $where, $option);
        try {
            \Stripe\Stripe::setApiKey($data['payment_settings']['secret_key']); //Replace with your Secret Key
            $token = $_POST['stripeToken'];
            $customer = \Stripe\Customer::create(array(
                        "email" => $_POST['user_email'],
                        "source" => $token,
            ));

            // $charge = \Stripe\Charge::create(array(
            //     "amount" => $_POST['package_price'] * 100,
            //     "currency" => "usd",
            //     // "card" => $_POST['stripeToken'],
            //     "description" => $_POST['desc'],
            //     "customer" => $customer->id
            // ));

            $plan = ($_POST['package_type'] == 2) ? $_POST['package_id'] . '-monthly' : $_POST['package_id'] . '-yearly';


            if ($get_coupon['coupon_code'] != '') {
                $subscription = \Stripe\Subscription::create(array(
                            "customer" => $customer->id,
                            "coupon" => $get_coupon['coupon_code'],
                            "plan" => $plan
                ));
            } else {
                $subscription = \Stripe\Subscription::create(array(
                            "customer" => $customer->id,
                            "plan" => $plan,
                ));
            }

            $charge_id = 'Not Applicable for subscription';
            $payment_data = array(
                'payment_id' => $charge_id,
                'package_id' => $_POST['package_id'],
                'package_type' => 1,
                'user_id' => $_POST['user_id'],
                'paid_type' => $_POST['package_type'],
                'paid_for_plan' => $_POST['package_price'],
            );
            $this->charge_model->insert('payment_transactions', $payment_data);
            $payment_data = array(
                'user_id' => $_POST['user_id'],
                'stripe_customer_id' => $subscription->id,
            );
            $this->charge_model->insert('stripe_subsribers_users', $payment_data);
            $mail_data = array(
                'heading' => '$' . $_POST['package_price'] . ' at Signaturia',
                'message' => 'Please view below details!',
                'description' => $_POST['desc'],
                'amount' => $_POST['package_price']
            );
            $msg = $this->load->view('email_templates/notification', $mail_data, true);
            $sent_email = send_mail_front($_POST['user_email'], EMAIL_FROM, 'Thank you for payment | Signaturia', $msg);

            $user_details = $this->charge_model->get_user_details($_POST['user_id']);
            $this->load->library('my_encryption');
            $activate_key = $this->my_encryption->safe_b64encode($user_details['password']);
            $button_link = site_url() . "verify_account?ident=" . $_POST['user_id'] . "&activate=" . $activate_key;
            $mail_data = array(
                'heading' => 'Welcome to signaturia!',
                'message' => 'Please click on below link for verify account!',
                'button_link' => $button_link,
            );
            // $msg = $this->load->view('email_templates/forgot_password', $mail_data, true);

            $where = array('where' => array('type' => 'welcome'));
            $string = $this->common_model->sql_select('email_templates', '*', $where, array('single' => true));
            $string = $string['email_template'];
            $string = str_replace('{button_link}', $button_link, $string);
            $msg = $string;


            $sent_email = send_mail_front($user_details['email'], EMAIL_FROM, 'Verify your account | Signaturia', $msg);
            /*
              $msg1 = $this->load->view('email_templates/welcome', array(), true);
              $sent_email = send_mail_front($result['email'], EMAIL_FROM, 'Welcome to Signaturia', $msg1);
             */
            $insert_data = array(
                'is_verified' => 1
            );
            $this->charge_model->update_record('users', array('id' => $_POST['user_id']), $insert_data);

//            $this->session->set_flashdata('success', 'You have successfully paid! Please verify your email to continue.');
            redirect('thank_you?key=' . base64_encode($_POST['user_id']));
//            redirect('login');
        } catch (Stripe_CardError $e) {
            echo $e;
        } catch (Stripe_InvalidRequestError $e) {
            echo $e;
        } catch (Stripe_AuthenticationError $e) {
            echo $e;
        } catch (Stripe_ApiConnectionError $e) {
            echo $e;
        } catch (Stripe_Error $e) {
            echo $e;
        } catch (Exception $e) {
            echo $e;
        }
    }

}
