<?php

/**
 * Users Controller - Manage Users
 * @author Kirti
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_settings extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Payment_settings_model');
    }

    public function index() {
        $data['title'] = 'HTML signature | Users';
        $data['payment_settings'] = $this->Payment_settings_model->get_settings();
        $this->form_validation->set_rules('secret_key', 'tabs', 'trim|required');
        $this->form_validation->set_rules('publishable_key', 'tabs', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
           $this->form_validation->set_error_delimiters('<div class="alert bg-danger alert-styled-left bootstrap_alert"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
        } else {
            if($data['payment_settings']) {
                $insert_data = array(
                    'secret_key' => $this->input->post('secret_key'),
                    'publishable_key' => $this->input->post('publishable_key')
                );
                $this->Payment_settings_model->update_record('payment_settings', 'id = '.$data['payment_settings']['id'], $insert_data);    
            } else {
                $insert_data = array(
                    'secret_key' => $this->input->post('secret_key'),
                    'publishable_key' => $this->input->post('publishable_key')
                );
                $this->Payment_settings_model->insert('payment_settings', $insert_data);    
            }
            $this->session->set_flashdata('success', 'Setting updated successfully!');
            redirect('admin/payment_settings');
        }
        $this->template->load('admin', 'admin/payments/settings', $data);
    }
}

/* End of file Users.php */
/* Location: ./application/controllers/admin/Users.php */