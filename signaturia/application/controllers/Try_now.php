<?php

/**
 * Login Controller for User Login
 * @author Kirti 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Try_now extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    /**
     * Display login page for Business user login
     */
    public function index() {
        $data['title'] = 'Signaturia | Try now for free';
        $this->template->load('frontend', 'try-now', $data);
    }
}