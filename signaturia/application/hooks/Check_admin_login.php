<?php

/**
 * Check_admin_login Hook Class to check Admin/User is logged in or not on every page 
 * @author KU
 */
class Check_admin_login {

    /**
     * initialize function
     * Checks admin/business user is loggedin or not if not loggedin then redirect to login page
     * @return void
     * */
    function initialize() {
        $CI = & get_instance();
        $admin = $CI->session->userdata('htmlsig_admin');
        $directory = $CI->router->fetch_directory();
        $controller = $CI->router->fetch_class();
        $controller = strtolower($controller);
        $action = $CI->router->fetch_method();
        $CI->load->helper('cookie');
        $CI->input->cookie('htmlsig_user');
        $CI->load->model('user/authority_model');
        $CI->load->model('charge_model');
        $result = $CI->authority_model->check_permission(isset($CI->session->userdata('htmlsig_user')['id']) ? $CI->session->userdata('htmlsig_user')['id'] : "");
        // echo "<pre>";
        // print_r($result);
        // exit;
        if ($controller == 'stats') {
            if ($result['stat'] == 0) {
                $CI->session->set_flashdata('error', 'Your package have not permission for access this feature.');
                redirect('dashboard');
            }
        }

        if ($controller == 'generators' || $controller == 'employees') {
            if ($result['generator'] == 0) {
                $CI->session->set_flashdata('error', 'Your package have not permission for access this feature.');
                redirect('dashboard');
            }
        }
        if ($controller == 'customsignature') {
            if ($result['custom_signature'] == 0) {
                $CI->session->set_flashdata('error', 'Your package have not permission for access this feature.');
                redirect('dashboard');
            }
        }


        //-- Get directory to check admin/business directory
        if (!empty($directory)) {
            $directory = explode('/', $directory);
            $directory = $directory[0];
        }

        if (!(empty($directory))) {
            if ($directory == 'admin') {
                //-- If admin is not logged in then redirect to login page with agent referrer set
                if (empty($admin) && $controller != 'login') {

                    $redirect = site_url(uri_string());
                    redirect('admin?redirect=' . base64_encode($redirect));
                }

                //-- If admin is already logged in and access the login page then redirect to home page 
                if (!empty($admin) && $controller == 'login' && $action != 'logout') {
                    //-- If Admin is logged in then
                    redirect('admin/home');
                }
            } else {
                // if($controller != 'dashboard'){
                // redirect('dashboard');
                // }
                $is_user_login = $CI->session->userdata('htmlsig_user');
                if (!$is_user_login) {
                    redirect('login');
                } else {
                    $package_type = $CI->authority_model->user_package($CI->session->userdata('htmlsig_user')['id']);
                    // if package is not free then check subscribed user's sibscription status
                    if ($package_type['type'] == 0) {
                        if ($controller == 'stats' || $controller == 'generators' || $controller == 'employees' || $controller == 'customsignature') {
                            $subscribe_user = $CI->authority_model->stripe_subscriber_user($CI->session->userdata('htmlsig_user')['id']);
                            if (!empty($subscribe_user)) {
                                require_once APPPATH . "third_party/stripe/init.php";
                                $data['payment_settings'] = $CI->charge_model->get_settings();

                                \Stripe\Stripe::setApiKey($data['payment_settings']['secret_key']);

                                try {
                                    $subscription = \Stripe\Subscription::retrieve($subscribe_user['stripe_customer_id']);

                                    if (!empty($subscription) && $subscription->status != 'active') {
                                        $CI->session->set_flashdata('error', 'You have cancelled your subscription or you have not paid subsribption amount.You have not permission to access this feature.');
                                        redirect('dashboard');
                                    }
                                } catch (Exception $exc) {
                                    
                                }
                            }
                        }
                    }
                }
            }
        } else {
            $is_user_login = $CI->session->userdata('htmlsig_user');
            if (!$is_user_login) {
                if (!in_array($controller, array('upate_profile'))) {
                    
                }
            } else {
                if (in_array($controller, array('signup', 'login', 'profile', 'home')) && $action != 'user_logout' && $action != 'templates') {
                    redirect('dashboard');
                }
            }
        }
    }

}

?>