<?php

/**
 * Employees Controller - Manage Employees
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('user/employees_model'));
        $this->load->library('Contact_Vcard_Parse');
        $this->user_id = $this->session->userdata('htmlsig_user')['id'];
        if ($this->user_id != '') {
            $permission = $this->authority_model->check_permission($this->user_id);
            $settings = explode(",", $permission['settings']);
            $this->permission = $settings;
        }
    }

    public function index() {
        $data['title'] = 'Signaturia | Employees';
        $data['employess'] = $this->employees_model->get_all_employees($this->user_id);
        $this->template->load('userside', 'user/employees-view', $data);
    }

    /**
     * Add/Edit Employee 
     * @author Kirti
     */
    public function add() {
        $user_id = $this->session->userdata('htmlsig_user')['id'];
        $id = $this->uri->segment(3);
        if (is_numeric($id)) {
            $data['title'] = 'Signaturia | Edit Employee';
            $data['employee'] = $this->employees_model->get_employees($id, $user_id);
        } else {
            $data['title'] = 'Signaturia | Add Employee';
        }
        if ($this->input->post()) {
            $employee_detail = array(
                'user_id' => $user_id,
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'email' => $this->input->post('email'),
            );
            if (is_numeric($id)) {
                $this->common_model->update('employees', $id, $employee_detail);
                $this->session->set_flashdata('success', 'Employee updated successfully!');
            } else {
                $this->common_model->insert('employees', $employee_detail);
                $this->session->set_flashdata('success', 'Employee added successfully!');
            }
            redirect('employees');
        }
        $this->template->load('userside', 'user/employees-form', $data);
    }

    /**
     * Edit Employee detail
     */
    public function edit($id) {
        $this->add($id);
    }

    /**
     * Delete Employee
     * @param int $id
     */
    public function delete($id) {
        $this->common_model->update('employees', $id, array('is_delete' => 1));
        $this->session->set_flashdata('success', 'Employee deleted successfully');
        redirect('employees');
    }

    /**
     * Check email address entered in email_id of account profile page is unique or not
     * Called through ajax
     * @author Kirti
     */
    public function checkUniqueEmail($id = null) {
        $requested_email = trim($this->input->get('email'));
        $user = $this->employees_model->check_unique_email($requested_email, $id, $this->user_id);
        if ($user) {
            echo "false";
        } else {
            echo "true";
        }

        exit;
    }

    /**
     * Import vCard/CSV file functionality
     */
    public function import() {
        $user_id = $this->session->userdata('htmlsig_user')['id'];
        if ($this->input->post()) {
            $this->load->library('contact_vcard_parse');
            $parse = new Contact_Vcard_Parse();
            if ($_FILES['import_file']['name'] != '') {
                $ext = pathinfo($_FILES["import_file"]["name"], PATHINFO_EXTENSION);
                //-- If uploaded file is vcard file then
                if ($ext == 'vcf') {
                    $data = $parse->fromFile($_FILES["import_file"]["tmp_name"]);
                    $employee_arr = [];
                    foreach ($data as $val) {
                        $new_arr = [];
                        if (isset($val['EMAIL'])) {
                            $new_arr['email'] = $val['EMAIL'][0]['value'][0][0];
                            $new_arr['user_id'] = $user_id;
                            if (isset($val['FN'])) {
                                $name = $val['FN'][0]['value'][0][0];
                                $names = explode(' ', $name);
                                $new_arr['firstname'] = @$names[0];
                                $new_arr['lastname'] = @$names[1];
                            }
                        }
                        if (!empty($new_arr)) {
                            $employee_arr[] = $new_arr;
                        }
                    }
                    $count = 0;
                    foreach ($employee_arr as $employee) {
                        $is_email = $this->employees_model->check_unique_email($employee['email'], NULL, $user_id);
                        if (empty($is_email)) {
                            $this->employees_model->common_insert_update('insert', 'employees', $employee);
                            $count++;
                        }
                    }
                    $this->session->set_flashdata('success', $count . ' Records imported successfully');
                    redirect('employees');
                } else {

                    //validate whether uploaded file is a csv file
                    $csvMimes = array('application/vnd.ms-excel', 'text/plain', 'text/csv', 'text/tsv', 'application/octet-stream');

                    if (!empty($_FILES['import_file']['name']) && in_array($_FILES['import_file']['type'], $csvMimes)) {
                        if (is_uploaded_file($_FILES['import_file']['tmp_name'])) {

                            //open uploaded csv file with read only mode
                            $csvFile = fopen($_FILES['import_file']['tmp_name'], 'r');

                            //-- Get first row from csv file
                            $first_col = fgetcsv($csvFile);

                            //-- Covert first column values to lower case
                            $first_col = array_map('strtolower', $first_col);

                            //-- Get key value of column name
                            $firstname_key = array_search('firstname', $first_col);
                            $lastname_key = array_search('lastname', $first_col);
                            $email_key = array_search('email', $first_col);
                            if (is_numeric($firstname_key) && is_numeric($lastname_key) && is_numeric($email_key)) {
                                $employee_arr = [];
                                //parse data from csv file line by line
                                while (($line = fgetcsv($csvFile)) !== FALSE) {
                                    $new_arr = [];
                                    if ($line[$email_key] != '') {
                                        $new_arr['email'] = $line[$email_key];
                                        $new_arr['user_id'] = $user_id;
                                        $new_arr['firstname'] = $line[$firstname_key];
                                        $new_arr['lastname'] = $line[$lastname_key];
                                        $employee_arr[] = $new_arr;
                                    }
                                }
                                //close opened csv file
                                fclose($csvFile);
                                $count = 0;
                                foreach ($employee_arr as $employee) {
                                    $is_email = $this->employees_model->check_unique_email($employee['email'], NULL, $user_id);
                                    if (empty($is_email)) {
                                        $this->employees_model->common_insert_update('insert', 'employees', $employee);
                                        $count++;
                                    }
                                }
                                $this->session->set_flashdata('success', $count . ' Records imported successfully');
                            } else {
                                $this->session->set_flashdata('error', 'Your CSV file format is not valid! Please make sure to include firstname,lastname and email in firstline.');
                            }
                        } else {
                            $this->session->set_flashdata('error', 'Something wnet wrong! Please try again later');
                        }
                    } else {
                        $this->session->set_flashdata('error', 'You have uploaded invalid file');
                    }
                    redirect('employees');
                }
            }
        } else {
            $data['title'] = 'Signaturia | Import File';
            $this->template->load('userside', 'user/import_employee', $data);
        }
    }

}

/* End of file Employees.php */
    /* Location: ./application/controllers/Employees.php */    