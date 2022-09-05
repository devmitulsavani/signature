<?php

/**
 * Login Controller for User Login
 * @author Kirti 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Pricing extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('pricing_model');
    }

    /**
     * Display login page for Business user login
     */
    public function index() {
        $data['title'] = 'Signaturia | Pricing';
        $data['packages'] = $this->pricing_model->get_all_packages();
        $this->template->load('frontend', 'pricing-view', $data);
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}