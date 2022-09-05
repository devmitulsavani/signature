<?php

/**
 * MY_Controller is called by default before every controller.
 * */
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        $UserCookieData = $this->input->cookie("cookie_user_id");

        if ($UserCookieData != '') {
            $condition = array('id' => base64_decode($UserCookieData));
            $checkUser = $this->my_model->get_all_details(TBL_USERS, $condition);
            if ($checkUser->num_rows() == 1) {
                $userdata = array(
                    'session_user_id' => $checkUser->row()->id,
                    'session_user_name' => $checkUser->row()->nickname,
                    'session_user_email' => $checkUser->row()->email,
                    'session_user_confirm' => $checkUser->row()->is_verified,
                    'login_user_type' => $checkUser->row()->login_user_type
                );
                $this->session->set_userdata($userdata);
            }
        } else {
            $userdata = [
                'session_user_id',
                'session_user_name',
                'session_user_email',
                'session_user_confirm',
                'login_user_type'
            ];
            $this->session->unset_userdata($userdata);
        }
        
        $user_id = isset($this->session->userdata('htmlsig_user')['id']) ? $this->session->userdata('htmlsig_user')['id'] : "";//$_SESSION['htmlsig_user']['id'];//
        // echo "<pre>";
        // print_r($user_id);
        // exit;
        if ($user_id != '') {
            $this->load->model('user/authority_model');
            $this->allow_perm = $this->authority_model->check_permission($user_id);

            if($this->session->userdata('htmlsig_user')['type'] == 2) {
                $option = array(
                        'join' => array(
                            array(
                                'table' => TBL_GENERATORS.' g',
                                'condition' => 'g.id = ep.generator_id'
                            )
                        ),
                        'group_by' => 'ep.generator_id'
                    );
                $where = array('where' => array('is_assigned_user' => $this->session->userdata('htmlsig_user')['id']));
                $this->generators = $this->common_model->sql_select(TBL_EMPLOYEES_PASSCODES. ' ep', 'g.name, g.id AS generator_id', $where, $option);
            }
        }
    }

    public function checkLogin($type = '') {
        if ($type == 'ID') {
            return $this->session->userdata('session_user_id');
        } else if ($type == 'N') {
            return $this->session->userdata('session_user_name');
        } else if ($type == 'E') {
            return $this->session->userdata('session_user_email');
        } else if ($type == 'C') {
            return $this->session->userdata('session_user_confirm');
        } else if ($type == 'T') {
            return $this->session->userdata('login_user_type');
        }
    }

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */