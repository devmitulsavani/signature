<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Displays 404 error page when 404 error encountered either in frontend or in admin
 * @author KU
 */

class Pagenotfound extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        echo 'here';
        exit;
        $this->output->set_status_header('404'); // setting header to 404
        $controller = array();
        $controller = explode('/', uri_string());

        if ($controller[0] == 'admin')
            $this->load->view('admin/layouts/error404');
        else
            $this->load->view('errors/html/error_404');
    }

}

?> 