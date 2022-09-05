<?php

/**
 * Packages Controller - Manage packages
 * @author Kamlesh pokiya
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_templates extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/packages_model');
    }

    public function index() {
        $data['title'] = 'Signaturia | Email Templates';
        $this->template->load('admin', 'admin/email_templates/index', $data);
    }

    public function edit($type) {
        $data['type'] = $type;
        $data['title'] = 'Signaturia | Edit Email Templates';
        $array = array('coupon', 'welcome', 're-verification', 'share-generator', 'without-share-generator');
        if(in_array($type, $array)) {
            $where = array('where' => array('type' => $type));
            $data['template'] = $this->common_model->sql_select('email_templates', '*', $where, array('single' => true));
            $this->form_validation->set_rules('description', 'template content', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                $this->form_validation->set_error_delimiters('<div class="alert bg-danger alert-styled-left bootstrap_alert"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
                $this->template->load('admin', 'admin/email_templates/manage', $data);
            } else {
                $post_data = $this->input->post(null);
                $array = array(
                        'email_template' => $post_data['description']
                    );
                $this->common_model->update('email_templates', array('type' => $type), $array);
                $this->session->set_flashdata('success', 'Email template updated!');
                redirect('admin/email_templates/edit/'.$type);
            }
        }
    }
}

/* End of file Packages.php */
/* Location: ./application/controllers/admin/Packages.php */