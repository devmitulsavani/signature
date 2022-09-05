<?php

/**
 * Generators Controller - Manage Generators
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Share_generator extends MY_Controller {

    public function __construct() {

        parent::__construct();
    }

    public function index($generator_id = null) {
        $data['title'] = 'Signaturia | Share Generator';
        $where = array('where' => array('user_id' => $this->session->userdata('htmlsig_user')['id'], 'is_delete' => 0));
        $generators = $this->common_model->sql_select(TBL_GENERATORS, '*', $where, null);
        $ids = array_map(array($this, 'myarraymap'), $generators);
        if ($generator_id != null) {

            #--- check generator is valid or not
            if (!in_array($generator_id, $ids)) {
                show_404();
            }
        }
        $data['generators'] = $generators;
        $data['generator_id'] = $generator_id;

        $data['employees'] = $this->common_model->sql_select(TBL_EMPLOYEES, '*', $where, null);

        $this->template->load('userside', 'user/share-generator-view', $data);
    }

    function myarraymap($item) {
        return $item['id'];
    }

    function myarraymap1($item) {
        return $item['employee_id'];
    }

    public function share() {
        extract($this->input->post(null));
        $where = array('where' => array('id' => $generator));
        $option = array('single' => TRUE);
        $check_generator = $this->common_model->sql_select(TBL_GENERATORS, '*', $where, $option);
        if ($check_generator) {
            $this->load->library('my_encryption');
            $where = array('where_in' => array('id' => $emails), 'where' => array('is_delete' => 0));
            $get_users = $this->common_model->sql_select(TBL_EMPLOYEES, '*', $where, null);
            if ($get_users) {
                $ids = array_map(array($this, 'myarraymap'), $get_users);
                $where = array('where_in' => array('employee_id' => $ids));
                $get_employees = $this->common_model->sql_select(TBL_EMPLOYEES_PASSCODES, '*', $where, null);
                $employeed_ids = array_map(array($this, 'myarraymap1'), $get_employees);
                $insert_data = array();
                foreach ($get_users as $key => $value) {
                    $passcode = create_passcode();
                    $generator_name = $check_generator['name'];

                    if (in_array($value['id'], $employeed_ids)) {
                        $where = array('where' => array('employee_id' => $value['id']));
                        $get_employee = $this->common_model->sql_select(TBL_EMPLOYEES_PASSCODES, '*', $where, array('single' => TRUE));

                        $insert_data[] = array(
                            'employee_id' => $value['id'],
                            'generator_id' => $check_generator['id'],
                            'passcode' => $passcode,
                            'is_assigned_user' => $get_employee['is_assigned_user'],
                            'is_used' => 1
                        );
                        $url = site_url('login');
                        $mail_data = array(
                            'heading' => $generator_name . ' generator is shared for you!',
                            'message' => 'Please login with your account.',
                            'button_link' => $url,
                            'sub_message' => 'Click on below link to access and edit Signaturia.',
                        );
                        // $msg = $this->load->view('email_templates/share_generator', $mail_data, true);

                        $where = array('where' => array('type' => 'without-share-generator'));
                        $string = $this->common_model->sql_select('email_templates', '*', $where, array('single' => true));
                        $string = $string['email_template'];
                        $string = str_replace('{generator_name}', $generator_name, $string);
                        $msg = $string;
                        $sent_email = send_mail_front($value['email'], EMAIL_FROM, 'Congratulations! Generator was shared for you | Signaturia', $msg);
                    } else {
                        $activate_key = $this->my_encryption->safe_b64encode($check_generator['id'] . '::' . KEY . '::' . $value['id']);
                        $url = site_url('manage_signature?token=' . $activate_key);
                        $mail_data = array(
                            'heading' => $generator_name . ' generator is shared for you!',
                            'message' => 'Please use below passcode for register with Signaturia.',
                            'button_link' => $url,
                            'sub_message' => 'Click on below link to access and edit Signaturia. Note that above passcode is valid for only one user.',
                            'passcode' => $passcode
                        );
                        // $msg = $this->load->view('email_templates/share_generator', $mail_data, true);

                        $where = array('where' => array('type' => 'share-generator'));
                        $string = $this->common_model->sql_select('email_templates', '*', $where, array('single' => true));
                        $string = $string['email_template'];
                        $string = str_replace('{button_link}', $url, $string);
                        $string = str_replace('{generator_name}', $generator_name, $string);
                        $string = str_replace('{passcode}', $passcode, $string);
                        $msg = $string;
                        $sent_email = send_mail_front($value['email'], EMAIL_FROM, 'Congratulations! Generator was shared for you | Signaturia', $msg);

                        $insert_data[] = array(
                            'employee_id' => $value['id'],
                            'generator_id' => $check_generator['id'],
                            'passcode' => $passcode
                        );
                    }
                }
                $this->common_model->insert_batch(TBL_EMPLOYEES_PASSCODES, $insert_data);
                $this->session->set_flashdata('success', 'Your generator was shared.');
                if (is_numeric($shared_id)) {
                    redirect('share-generator/' . $shared_id);
                } else {
                    redirect('share-generator');
                }
            }
        }
    }
}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */