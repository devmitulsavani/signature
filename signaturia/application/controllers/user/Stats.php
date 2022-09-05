<?php

/**
 * Users Controller - Manage Users
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Stats extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user/stat_model');
    }

    public function index($stat_id = 0) {
        $data['title'] = 'Signaturia | Stats';
        $data['personal_stat'] = $this->stat_model->get_personal_stat($stat_id);
        $data['personal_socials'] = $this->stat_model->get_personal_socials($stat_id);
        $ar = array();
        foreach ($data['personal_socials'] as $key => $value) {
            $ar[] = array($value['name'], (int) $value['click_count']);
        }
        $data['personal_socials'] = $ar;
        $this->template->load('userside', 'user/stats-view', $data);
    }

    public function load_signatures() {
        $select = 'id, @a:=@a+1 AS test_id, name, job_title, company_name, email';
        $final['recordsTotal'] = $this->dashboard_model->get_result('count');
        $keyword = $this->input->get('search');
        $final['redraw'] = 1;
        $final['recordsFiltered'] = $final['recordsTotal'];
        $final['data'] = $this->dashboard_model->get_result('result');
        echo json_encode($final);
    }

}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */