<?php

require_once APPPATH . "third_party/stripe/init.php";
/**
 * Users Controller - Manage Users
 * @author Kirti
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/users_model');
        $this->load->model('charge_model');
    }

    public function index() {
        $data['title'] = 'Signaturia | Users';
        $this->template->load('admin', 'admin/users/index', $data);
    }

    /**
     * Get all users for datatable
     */
    public function get_users() {
        $final['recordsTotal'] = $this->users_model->get_all_users('count');
        $final['redraw'] = 1;
        $final['recordsFiltered'] = $final['recordsTotal'];
        $users = $this->users_model->get_all_users();
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
    public function add($id = '') {
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
     * Add/edit user details
     * @param Integer $id
     * */
    public function add_admin($id = '') {
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
            $data['title'] = 'Signaturia | Add admin';
        }
        // $data['packages'] = $this->users_model->get_all_details(TBL_PACKAGES, array('is_delete' => 0, 'type' => 1))->result_array();
        if ($this->add_users_validate_admin()) {
            $dataArr = array(
                'user_role' => 1,
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
                $this->session->set_flashdata('success', 'New admin has been added successfully.');
            }
            // $user_package = array('user_id' => $user_id, 'package_id' => $this->input->post('package'));
            // $this->users_model->common_insert_update('insert', TBL_USER_PACKAGES, $dataArr);
            redirect('admin/users/add_admin');
        }
        $this->template->load('admin', 'admin/users/add_admin', $data);
    }

    /**
     * This function used to edit user's data at admin side. 
     * @param Integer $id
     * */
    public function edit($user_id) {
        $this->add($user_id);
    }

    /**
     * This function used to check validation of add / edit user's form. 
     * @return Bollean
     * */
    public function add_users_validate_admin() {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        return $this->form_validation->run();
    }

    /**
     * This function used to check validation of add / edit user's form. 
     * @return Bollean
     * */
    public function add_users_validate() {
        $this->form_validation->set_rules('package', 'Package', 'trim|required');
        $this->form_validation->set_rules('firstname', 'Firstname', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        return $this->form_validation->run();
    }

    /**
     * This function used to block/unblock user
     * @param Integer $user_id
     * */
    public function block($user_id) {
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
    public function delete($user_id) {
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
     * This function used to verify user's data at admin side. 
     * @param Integer $user_id
     * */
    public function verify($user_id) {
        $user_data = $this->users_model->get_user_by_id($user_id);
        if ($user_data) {
            $update_array = array(
                'is_verified' => 2, 'is_active' => 1
            );
            $condition = array('id' => $user_id);
            $this->users_model->common_insert_update('update', TBL_USERS, $update_array, $condition);
            $this->session->set_flashdata('success', 'User has been verified successfully!');
        } else {
            $this->session->set_flashdata('error', 'Invalid request. Please try again!');
        }
        redirect('admin/users');
    }

    /**
     * This function used to check Unique email at the time of user's add at admin side
     * @param Integer $id
     * */
    public function checkUniqueEmail($id = NULL) {
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
    public function is_uniquemail() {
        $email = trim($this->input->post('email'));
        $user = $this->users_model->check_unique_email($email);
        if ($user) {
            $this->form_validation->set_message('is_uniquemail', 'Email address is already in use!');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    /**
     * load view of apply coupon for users
     * @param int $user_id
     */
    public function add_coupon($user_id, $coupon_id = null) {
        $user_data = $this->users_model->get_user_by_id($user_id);
        $data['payment_settings'] = $this->charge_model->get_settings();
        if ($user_data) {
            $data['packages'] = $this->users_model->get_all_details(TBL_PACKAGES, array('is_delete' => 0, 'type' => 0))->result_array();
            if (is_numeric($coupon_id)) {
                $data['coupon_data'] = $this->users_model->get_coupon_by_id($coupon_id);
            }
            $data['title'] = 'Signaturia | Add coupon';
            $data['userdata'] = $user_data;

            $this->form_validation->set_rules('coupon_price', 'coupon price', 'trim|required|callback_check_valid_price');
            $this->form_validation->set_rules('coupon_schedule', 'coupon schedule', 'trim|required|callback_check_schedule');
            if ($this->form_validation->run() == FALSE) {
                $this->form_validation->set_error_delimiters('<div class="alert bg-danger alert-styled-left bootstrap_alert"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
            } else {

                $post_data = $this->input->post(null);
                extract($post_data);
                $explode = explode(' - ', $coupon_schedule);
                $insert_data = array(
                    'coupon_price' => $coupon_price,
                    'start_datetime' => $explode[0],
                    'end_datetime' => $explode[1],
                    'coupon_type' => 2,
                    'coupon_price' => $coupon_price,
                    'is_active' => (isset($is_active) && $is_active == 1) ? 1 : 0,
                    'package_id' => ($package != '') ? $package : 0
                );
                if ($coupon_id != 0) {
                    $coupon_id = $this->users_model->update_record_(TBL_COUPONS, array('id' => $coupon_id), $insert_data);
                    $this->session->set_flashdata('success', 'coupon updated successfully.');
                    try {
                        \Stripe\Stripe::setApiKey($data['payment_settings']['secret_key']);

                        $cpn = \Stripe\Coupon::retrieve($data['coupon_data']['coupon_code']);
                        $cpn->delete();

                        \Stripe\Coupon::create(array(
                            "id" => $data['coupon_data']['coupon_code'],
                            "duration" => "once",
                            "percent_off" => $coupon_price,
                        ));
                    } catch (Stripe_CardError $e) {
                        echo $e;
                    } catch (Stripe_InvalidRequestError $e) {
                        echo $e;
                    } catch (Stripe_AuthenticationError $e) {
                        echo $e;
                    } catch (Stripe_ApiConnectionError $e) {
                        echo $e;
                    } catch (Stripe_Error $e) {
                        echo $e;
                    } catch (Exception $e) {
                        echo $e;
                    }
                    redirect('admin/users/view_coupons/' . $user_id);
                } else {
                    $insert_data['coupon_code'] = create_coupon();
                    $coupon_code = $insert_data['coupon_code'];
                    $coupon_id = $this->users_model->insert_coupon_records($insert_data, TBL_COUPONS);
                    $insert_data = array(
                        'user_id' => $user_id,
                        'coupon_id' => $coupon_id
                    );
                    $this->users_model->insert_coupon_records($insert_data, TBL_USERS_COUPONS);
                    $this->session->set_flashdata('success', 'coupon added successfully.');
                    try {
                        \Stripe\Stripe::setApiKey($data['payment_settings']['secret_key']);
                        \Stripe\Coupon::create(array(
                            "id" => $coupon_code,
                            "duration" => "once",
                            "percent_off" => $coupon_price,
                        ));
                    } catch (Stripe_CardError $e) {
                        echo $e;
                    } catch (Stripe_InvalidRequestError $e) {
                        echo $e;
                    } catch (Stripe_AuthenticationError $e) {
                        echo $e;
                    } catch (Stripe_ApiConnectionError $e) {
                        echo $e;
                    } catch (Stripe_Error $e) {
                        echo $e;
                    } catch (Exception $e) {
                        echo $e;
                    }

                    if ((isset($is_email) && $is_email == 1)) {
                        $button_link = site_url() . "upgrade";
                        $mail_data = array(
                            'heading' => 'Congratulations!',
                            'message' => 'New coupon added on your profile, Please upgrade your package now and get ' . $coupon_price . '% discount.',
                            'button_link' => $button_link,
                            'from_date' => $explode[0],
                            'to_date' => $explode[1],
                            'coupon_code' => $coupon_code
                        );
                        // $msg = $this->load->view('email_templates/coupon_code', $mail_data, true);

                        $where = array('where' => array('type' => 'coupon'));
                        $string = $this->common_model->sql_select('email_templates', '*', $where, array('single' => true));
                        $string = $string['email_template'];
                        $string = str_replace('{discount}', $coupon_price, $string);
                        $string = str_replace('{from_datetime}', $explode[0], $string);
                        $string = str_replace('{to_datetime}', $explode[1], $string);
                        $string = str_replace('{coupon_code}', $coupon_code, $string);
                        $msg = $string;

                        $sent_email = send_mail_front($user_data['email'], EMAIL_FROM, 'Congratulations! Coupon was added for you. | Signaturia', $msg);
                    }
                    redirect('admin/users/view_coupons/' . $user_id);
                }
            }
            $this->template->load('admin', 'admin/users/add_coupon', $data);
        } else {
            $this->session->set_flashdata('error', 'Invalid request. Please try again!');
            redirect('admin/users');
        }
    }

    public function check_valid_price($valid_price) {
        $check_valid_price = $this->users_model->check_coupon_price($valid_price);
        if ($check_valid_price == TRUE) {
            return TRUE;
        } else {
            $this->form_validation->set_message('check_valid_price', 'Invalid price! coupon price is not allowed more then packages prices.');
            return FALSE;
        }
    }

    public function check_schedule($coupon_schedule) {
        $explode = explode(' - ', $coupon_schedule);
        $user_id = $this->uri->segment(4);
        $coupon_id = $this->uri->segment(5);
        $this->db->select('c.*');
        $this->db->join(TBL_COUPONS . ' c', 'c.id = uc.coupon_id', 'LEFT');
        $this->db->where('uc.user_id', $user_id);
        $this->db->where('date("' . $explode[0] . '") BETWEEN date(c.start_datetime) AND date(c.end_datetime)', NULL, FALSE);
        $this->db->where('c.is_delete', 0);
        if (is_numeric($coupon_id)) {
            $this->db->where('c.id != ', $coupon_id);
        }
        $result = $this->db->get(TBL_USERS_COUPONS . ' uc');
        if ($result->result_array()) {
            $this->form_validation->set_message('check_schedule', 'Invalid schedule! This coupon shedule is already used for this user.');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function view_coupons($user_id) {
        $user_data = $this->users_model->get_user_by_id($user_id);
        if ($user_data) {
            $data['user_data'] = $user_data;
            $data['title'] = 'Signaturia | Coupons';
            $this->template->load('admin', 'admin/users/coupons', $data);
        } else {
            show_404();
        }
    }

    public function load_coupons() {
        $final['recordsTotal'] = $this->users_model->get_users_coupens('count');
        $final['redraw'] = 1;
        $final['recordsFiltered'] = $final['recordsTotal'];
        $users = $this->users_model->get_users_coupens();
        $start = $this->input->get('start') + 1;
        foreach ($users as $key => $val) {
            $users[$key] = $val;
            $users[$key]['sr_no'] = $start++;
        }

        $final['data'] = $users;
        echo json_encode($final);
    }

    /**
     * This function used to active/inactive user coupon 
     * @param Integer $coupon_id
     * */
    public function active_coupon($coupon_id, $user_id) {
        $coupon_data = $this->users_model->get_coupon_by_id($coupon_id);
        if ($coupon_data) {
            if ($coupon_data['is_active'] == 1) {
                $update_array = array(
                    'is_active' => 0
                );
                $block = "in-activated";
            } else {
                $update_array = array(
                    'is_active' => 1
                );
                $block = "activated";
            }
            $condition = array('id' => $coupon_id);
            $this->users_model->common_insert_update('update', TBL_COUPONS, $update_array, $condition);
            $this->session->set_flashdata('success', ' Coupon ' . $block . ' successfully!');
        } else {
            $this->session->set_flashdata('error', 'Invalid request. Please try again!');
        }
        redirect('admin/users/view_coupons/' . $user_id);
    }

    /**
     * This function used to delete coupon. 
     * @param Integer $coupon_id, $user_id
     * */
    public function delete_coupon($coupon_id, $user_id) {
        $coupon_data = $this->users_model->get_coupon_by_id($coupon_id);
        $data['payment_settings'] = $this->charge_model->get_settings();
        if ($coupon_data) {
            $update_array = array(
                'is_delete' => 1
            );
            $condition = array('id' => $coupon_id);
            $this->users_model->common_insert_update('update', TBL_COUPONS, $update_array, $condition);
            $this->session->set_flashdata('success', 'Coupon has been deleted successfully!');
            try {
                \Stripe\Stripe::setApiKey($data['payment_settings']['secret_key']);

                $cpn = \Stripe\Coupon::retrieve($coupon_data['coupon_code']);
                $cpn->delete();
            } catch (Stripe_CardError $e) {
                echo $e;
            } catch (Stripe_InvalidRequestError $e) {
                echo $e;
            } catch (Stripe_AuthenticationError $e) {
                echo $e;
            } catch (Stripe_ApiConnectionError $e) {
                echo $e;
            } catch (Stripe_Error $e) {
                echo $e;
            } catch (Exception $e) {
                echo $e;
            }
        } else {
            $this->session->set_flashdata('error', 'Invalid request. Please try again!');
        }
        redirect('admin/users/view_coupons/' . $user_id);
    }

}

/* End of file Users.php */
/* Location: ./application/controllers/admin/Users.php */