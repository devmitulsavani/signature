<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charge extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user/charge_model');
    }

    public function index() {
        
        $data['title'] = 'Welcome to Signaturia';
        $data['payment_settings'] = $this->charge_model->get_settings();
        $users_package_detail = $this->charge_model->get_users_package_detail($_POST['user_id']);
        $get_coupon = $this->charge_model->get_coupon($_POST['user_id']);        
        try {
            require_once APPPATH."third_party/stripe/init.php";
            
            \Stripe\Stripe::setApiKey($data['payment_settings']['secret_key']); //Replace with your Secret Key
            $token = $_POST['stripeToken'];
            $plan = ($_POST['package_type'] == 2) ? $_POST['package_id'].'-monthly' : $_POST['package_id'].'-yearly';

            #--- Check plan 
            if($users_package_detail['type'] == 1) {
                $customer = \Stripe\Customer::create(array(
                    "email" => $users_package_detail['email'],
                    "source" => $token,
                ));
                $subscription = \Stripe\Subscription::create(array(
                    "customer" => $customer->id,
                    "plan" => $plan,
                ));
                $subscription = $subscription->id;
            } else {

                #--- Check coupon exist or not, if exist then change plan with coupon
                if($get_coupon['coupon_code'] != '') {
                    $subscription = $users_package_detail['stripe_customer_id'];
                    $subscription = \Stripe\Subscription::retrieve($subscription);
                    $subscription->plan = $plan;
                    $subscription->coupon = $get_coupon['coupon_code'];
                    $subscription->save();
                } else {
                    $subscription = $users_package_detail['stripe_customer_id'];
                    $subscription = \Stripe\Subscription::retrieve($subscription);
                    $subscription->plan = $plan;
                    $subscription->save();
                }
            } 

            // $charge = \Stripe\Charge::create(array(
            //     "amount" => $_POST['package_price'] * 100,
            //     "currency" => "usd",
            //     "card" => $_POST['stripeToken'],
            //     "description" => $_POST['desc'],
            //     "customer" => $customer_id
            // ));

            $charge_id = 'Not Applicable for subscription';
            $payment_data = array(
                'payment_id' => $charge_id,
                'package_id' => $_POST['package_id'],
                'package_type' => 1,
                'user_id' => $_POST['user_id'],
                'paid_type' => $_POST['package_type'],
                'paid_for_plan' => $_POST['package_price']
            );
            $this->charge_model->insert('payment_transactions', $payment_data);

            $update_data = array(
                'package_id' => $this->input->post('package_id'),
                'package_type' => $this->input->post('package_type'),
            );
            $this->charge_model->update_record('users_packages', array('user_id' => $this->session->userdata('htmlsig_user')['id']), $update_data);

            if($users_package_detail['type'] == 1) {
                $payment_data = array(
                    'user_id' => $_POST['user_id'],
                    'stripe_customer_id' => $subscription,
                );
                $this->charge_model->insert('stripe_subsribers_users', $payment_data);
            }

            #--- Send email when user update plan
            $mail_data = array(
                'heading' => '$'.$_POST['package_price'].' at Signaturia',
                'message' => 'Please view below details!',
                'description' => $_POST['desc'],
                'amount' => $_POST['package_price']
            );
            $msg = $this->load->view('email_templates/notification', $mail_data, true);
            $sent_email = send_mail_front($users_package_detail['email'], EMAIL_FROM, 'Thank you for payment | Signaturia', $msg);

            #--- Update applied coupon status
            if($get_coupon['coupon_code'] != '') {
                $update_data = array(
                    'coupon_applied' => 1
                );
                $this->charge_model->update_record('applied_coupon', array('coupon_applied' => $_POST['coupon_applied_id']), $update_data);
            }

            $this->session->set_flashdata('success', 'Your plan changed! Please access your new features.');
            redirect('upgrade');
        } catch(Stripe_CardError $e) {
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