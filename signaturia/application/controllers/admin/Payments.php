<?php

/**
 * Users Controller - Manage Users
 * @author Kirti
 */
defined('BASEPATH') or exit('No direct script access allowed');

class Payments extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Payments_model');
    }

    public function index()
    {
        $data['title'] = 'Signaturia | Users';
        $this->template->load('admin', 'admin/payments/index', $data);
    }

    /**
     * Get all users for datatable
     */
    public function get_users()
    {
        $final['recordsTotal'] = $this->Payments_model->get_all_users('count');
        $final['redraw'] = 1;
        $final['recordsFiltered'] = $final['recordsTotal'];
        $users = $this->Payments_model->get_all_users();
        $start = $this->input->get('start') + 1;

        foreach ($users as $key => $val) {
            $users[$key] = $val;
            $users[$key]['sr_no'] = $start++;
            $users[$key]['created'] = date('d M Y', strtotime($val['created']));
        }

        $final['data'] = $users;
        echo json_encode($final);
    }

    /**
     * Add/edit user details
     * @param Integer $id
     * */
    public function add($id = '')
    {
        $user_id = $id;
        if (is_numeric($user_id)) {
            $userdata = $this->users_model->get_user_by_id($user_id);
            if ($userdata) {
                $data['userdata'] = $userdata;
                $data['title'] = 'Signaturia | Edit User';
            } else {
                show_404();
            }
        } else {
            $data['title'] = 'Signaturia | Add User';
        }
        $data['packages'] = $this->users_model->get_all_details(TBL_PACKAGES, array('is_delete' => 0, 'type' => 1))->result_array();
        if ($this->add_users_validate()) {
            $dataArr = array(
                'role_id' => 2,
                //                'firstname' => $this->input->post('firstname'),
                //                'lastname' => $this->input->post('lastname'),
                'fullname' => $this->input->post('firstname') . ' ' . $this->input->post('lastname'),
                'email' => $this->input->post('email'),
            );

            if (is_numeric($user_id)) {
                $this->users_model->delete_user_package($user_id);
                $condition = array('id' => $user_id);
                $this->users_model->common_insert_update('update', TBL_USERS, $dataArr, $condition);
                $this->session->set_flashdata('success', 'User\'s data has been updated successfully.');
            } else {
                $dataArr['password'] = md5($this->input->post('password'));
                $dataArr['is_verified'] = 1;
                $dataArr['is_active'] = 1;
                $dataArr['created'] = date('Y-m-d H:i:s');
                $this->users_model->common_insert_update('insert', TBL_USERS, $dataArr);
                $this->session->set_flashdata('success', 'New User has been added successfully.');
            }
            $user_package = array('user_id' => $user_id, 'package_id' => $this->input->post('package'));
            $this->users_model->common_insert_update('insert', TBL_USER_PACKAGES, $dataArr);
            redirect('admin/users');
        }
        $this->template->load('admin', 'admin/users/add_users', $data);
    }

    /**
     * This function used to edit user's data at admin side. 
     * @param Integer $id
     * */
    public function edit($user_id)
    {
        $this->add($user_id);
    }

    /**
     * This function used to check validation of add / edit user's form. 
     * @return Bollean
     * */
    public function add_users_validate()
    {
        $this->form_validation->set_rules('package', 'Package', 'trim|required');
        $this->form_validation->set_rules('firstname', 'Firstname', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        //        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_is_uniquemail');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        return $this->form_validation->run();
    }

    /**
     * This function used to block/unblock user
     * @param Integer $user_id
     * */
    public function block($user_id)
    {
        $user_data = $this->users_model->get_user_by_id($user_id);
        if ($user_data) {
            if ($user_data['is_active'] == 1) {
                $update_array = array(
                    'is_active' => 0
                );
                $block = "blocked";
            } else {
                $update_array = array(
                    'is_active' => 1
                );
                $block = "unblocked";
            }
            $condition = array('id' => $user_id);
            $this->users_model->common_insert_update('update', TBL_USERS, $update_array, $condition);
            $this->session->set_flashdata('success', $user_data['firstname'] . ' ' . $user_data['lastname'] . ' User has been ' . $block . ' successfully!');
        } else {
            $this->session->set_flashdata('error', 'Invalid request. Please try again!');
        }
        redirect('admin/users');
    }

    /**
     * This function used to delete user's data at admin side. 
     * @param Integer $user_id
     * */
    public function delete($user_id)
    {
        $user_data = $this->users_model->get_user_by_id($user_id);
        if ($user_data) {
            $update_array = array(
                'is_delete' => 1
            );
            $condition = array('id' => $user_id);
            $this->users_model->common_insert_update('update', TBL_USERS, $update_array, $condition);
            $this->session->set_flashdata('success', 'User\'s data has been deleted successfully!');
        } else {
            $this->session->set_flashdata('error', 'Invalid request. Please try again!');
        }
        redirect('admin/users');
    }

    /**
     * This function used to check Unique email at the time of user's add at admin side
     * @param Integer $id
     * */
    public function checkUniqueEmail($id = NULL)
    {
        $email = trim($this->input->get_post('email'));
        $condition = 'email="' . $email . '"';
        if ($id != '') {
            $condition .= " AND id!=" . $id;
        }
        $result = $this->users_model->check_unique_name(TBL_USERS, $condition);
        if ($result) {
            echo "false";
        } else {
            echo "true";
        }
        exit;
    }

    /**
     * Callback function to check email validation - Email is unique or not
     * @param string $str
     * @return boolean
     */
    public function is_uniquemail()
    {
        $email = trim($this->input->post('email'));
        $user = $this->users_model->check_unique_email($email);
        if ($user) {
            $this->form_validation->set_message('is_uniquemail', 'Email address is already in use!');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}

/* End of file Users.php */
/* Location: ./application/controllers/admin/Users.php */