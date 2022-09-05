<?php

/**
 * Social_icons Controller - Manage Social Icons
 * @author Kirti
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Social_icons extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/socialicons_model');
    }

    public function index() {
        $data['title'] = 'Signaturia | Social Icons';
        $this->template->load('admin', 'admin/socialicons/index', $data);
    }

    public function icons($id) {
        $social_icon = $this->socialicons_model->get_social_icon_set_by_id($id);
        if ($social_icon) {
            $data['social_icon'] = $social_icon;
        } else {
            show_404();
        }
        $data['title'] = 'Signaturia | Social Icons';
        $this->template->load('admin', 'admin/socialicons/index', $data);
    }

    /**
     * Get all social icons for datatable
     */
    public function get_social_icons() {
        $final['recordsTotal'] = $this->socialicons_model->get_all_icons('count');
        $final['redraw'] = 1;
        $final['recordsFiltered'] = $final['recordsTotal'];
        $social_icons = $this->socialicons_model->get_all_icons();
        $start = $this->input->get('start') + 1;

        foreach ($social_icons as $key => $val) {
            $social_icons[$key] = $val;
            $social_icons[$key]['sr_no'] = $start++;
            $social_icons[$key]['created'] = date('d M Y', strtotime($val['created']));
        }

        $final['data'] = $social_icons;
        echo json_encode($final);
    }

    /**
     * Add/edit Social Icon details
     * @param Integer $id
     * */
    public function add($id = '') {
        $social_icon_id = $id;
        $social_icon_img = '';
        if (is_numeric($social_icon_id)) {
            $social_icon = $this->socialicons_model->get_social_icon_by_id($social_icon_id);
            if ($social_icon) {
                $data['social_icon'] = $social_icon;
                $social_icon_img1 = $social_icon['icon1'];
                $social_icon_img2 = $social_icon['icon2'];
                $social_icon_img3 = $social_icon['icon3'];
                $social_icon_img4 = $social_icon['icon4'];
                $data['title'] = 'Signaturia | Edit Socail Icon';
            } else {
                show_404();
            }
        } else {
            $data['title'] = 'Signaturia | Add Social Icon';
        }

        if ($this->validate()) {
            $flag = 0;
            if ($_FILES['icon1']['name'] != '') {
                $img_array = array('png', 'jpeg', 'jpg', 'PNG', 'JPEG', 'JPG');
                $exts = explode(".", $_FILES['icon1']['name']);
                $name = $exts[0] . time() . "." . end($exts);
                $config['upload_path'] = SOCIAL_ICONS_SET_1;
                $config['allowed_types'] = implode("|", $img_array);
                $config['max_size'] = '2048';
                $config['file_name'] = $name;
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('icon1')) {
                    $flag = 1;
                    $data['social_icon_validation1'] = $this->upload->display_errors();
                } else {
                    $file_info = $this->upload->data();
                    if (is_numeric($social_icon_id)) {

                        //-- If icon is bieng edited then remove previous uploaded icon
                        // unlink(SOCIAL_ICONS_SET_1 . $social_icon_img);
                    }
                    $social_icon_img1 = $file_info['file_name'];
                }
            }
            if ($_FILES['icon2']['name'] != '') {
                $img_array = array('png', 'jpeg', 'jpg', 'PNG', 'JPEG', 'JPG');
                $exts = explode(".", $_FILES['icon2']['name']);
                $name = $exts[0] . time() . "." . end($exts);
                $config['upload_path'] = SOCIAL_ICONS_SET_2;
                $config['allowed_types'] = implode("|", $img_array);
                $config['max_size'] = '2048';
                $config['file_name'] = $name;
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('icon2')) {
                    $flag = 1;
                    $data['social_icon_validation2'] = $this->upload->display_errors();
                } else {
                    $file_info = $this->upload->data();
                    if (is_numeric($social_icon_id)) {
                        //-- If icon is bieng edited then remove previous uploaded icon
                        // unlink(SOCIAL_ICONS_SET_2 . $social_icon_img);
                    }
                    $social_icon_img2 = $file_info['file_name'];
                }
            }
            if ($_FILES['icon3']['name'] != '') {
                $img_array = array('png', 'jpeg', 'jpg', 'PNG', 'JPEG', 'JPG');
                $exts = explode(".", $_FILES['icon3']['name']);
                $name = $exts[0] . time() . "." . end($exts);
                $config['upload_path'] = SOCIAL_ICONS_SET_3;
                $config['allowed_types'] = implode("|", $img_array);
                $config['max_size'] = '2048';
                $config['file_name'] = $name;
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('icon3')) {
                    $flag = 1;
                    $data['social_icon_validation3'] = $this->upload->display_errors();
                } else {
                    $file_info = $this->upload->data();
                    if (is_numeric($social_icon_id)) {
                        //-- If icon is bieng edited then remove previous uploaded icon
                        // unlink(SOCIAL_ICONS_SET_3 . $social_icon_img);
                    }
                    $social_icon_img3 = $file_info['file_name'];
                }
            }
            if ($_FILES['icon4']['name'] != '') {
                $img_array = array('png', 'jpeg', 'jpg', 'PNG', 'JPEG', 'JPG');
                $exts = explode(".", $_FILES['icon4']['name']);
                $name = $exts[0] . time() . "." . end($exts);
                $config['upload_path'] = SOCIAL_ICONS_SET_4;
                $config['allowed_types'] = implode("|", $img_array);
                $config['max_size'] = '2048';
                $config['file_name'] = $name;
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('icon4')) {
                    $flag = 1;
                    $data['social_icon_validation4'] = $this->upload->display_errors();
                } else {
                    $file_info = $this->upload->data();
                    if (is_numeric($social_icon_id)) {
                        //-- If icon is bieng edited then remove previous uploaded icon
                        // unlink(SOCIAL_ICONS_SET_4 . $social_icon_img);
                    }
                    $social_icon_img4 = $file_info['file_name'];
                }
            }
            if ($flag != 1) {
                $dataArr = array(
                    'icon1' => $social_icon_img1,
                    'icon2' => $social_icon_img2,
                    'icon3' => $social_icon_img3,
                    'icon4' => $social_icon_img4,
                    'name' => $this->input->post('name')
                );
                if (is_numeric($social_icon_id)) {
                    $this->socialicons_model->update_record(array('id' => $social_icon_id), $dataArr);
                    $this->session->set_flashdata('success', 'Social Icon updated successfully.');
                } else {
                    $dataArr['user_id'] = $this->session->userdata('htmlsig_admin')['id'];
                    $dataArr['created'] = date('Y-m-d H:i:s');
                    $this->socialicons_model->insert($dataArr);
                    $this->session->set_flashdata('success', 'Social Icon has been added successfully.');
                }
                redirect('admin/social_icons/');
            }
        }
        $this->template->load('admin', 'admin/socialicons/form', $data);
    }

    /**
     * This function used to edit social icon's data
     * @param Integer $id
     * */
    public function edit($social_icon_id) {
        $this->add($social_icon_id);
    }

    /**
     * This function used to check validation of add / edit social icon's form. 
     * @return Bollean
     * */
    public function validate() {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        return $this->form_validation->run();
    }

    /**
     * This function used to delete social icon
     * @param Integer $social_icon_id
     * */
    public function delete($set_id, $social_icon_id) {
        $social_icon = $this->socialicons_model->get_social_icon_by_id($social_icon_id);
        if ($social_icon) {
            $update_array = array(
                'is_delete' => 1
            );
            $this->socialicons_model->update_record(array('id' => $social_icon_id), $update_array);
            $this->session->set_flashdata('success', $social_icon['name'] . 'Social Icons has been deleted successfully!');
        } else {
            $this->session->set_flashdata('error', 'Invalid request. Please try again!');
        }
//        redirect('admin/social_icons/icons/'.$set_id);
        redirect('admin/social_icons/');
    }

    /**
     * Check social icon is unique or not
     * @return boolean
     */
    public function is_unique_socialicon($id = NULL) {
        $social_icon = trim($this->input->get_post('name'));
        $data = array('name' => $social_icon);
        if (!is_null($id)) {
            $data = array_merge($data, array('id!=' => $id));
        }
        $social_icon = $this->socialicons_model->is_unique_socialicon($data);
        if ($social_icon > 0) {
            echo "false";
        } else {
            echo "true";
        }
        exit;
    }

    public function get_social_set() {
        $final['recordsTotal'] = $this->socialicons_model->get_all_sets('count');
        $final['redraw'] = 1;
        $final['recordsFiltered'] = $final['recordsTotal'];
        $social_icons = $this->socialicons_model->get_all_sets();
        $start = $this->input->get('start') + 1;
        foreach ($social_icons as $key => $val) {
            $social_icons[$key] = $val;
            $social_icons[$key]['sr_no'] = $start++;
            $social_icons[$key]['created'] = date('d M Y', strtotime($val['created']));
        }

        $final['data'] = $social_icons;
        echo json_encode($final);
    }

    /**
     * Add/edit Social Icon details
     * @param Integer $id
     * */
    public function add_set($id = '') {
        $social_icon_id = $id;
        if (is_numeric($social_icon_id)) {
            $social_icon = $this->socialicons_model->get_social_icon_set_by_id($social_icon_id);
            if ($social_icon) {
                $data['social_icon'] = $social_icon;
                $data['title'] = 'Signaturia | Edit Socail Icon';
                if ($data['social_icon']['set_name'] != $this->input->post('name')) {
                    $this->form_validation->set_rules('name', 'name', 'trim|required|is_unique[social_icon_set.set_name]', array('is_unique' => 'Social icon set already exist! Please try with another.'));
                } else {
                    $this->form_validation->set_rules('name', 'name', 'trim|required');
                }
            } else {
                show_404();
            }
        } else {
            $data['title'] = 'Signaturia | Add Social Icon Set';
            $this->form_validation->set_rules('name', 'name', 'trim|required|is_unique[social_icon_set.set_name]', array('is_unique' => 'Social icon set already exist! Please try with another.'));
        }
        if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_error_delimiters('<div class="alert bg-danger alert-styled-left bootstrap_alert"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
        } else {
            $dataArr = array(
                'set_name' => $this->input->post('name'),
            );
            if (is_numeric($social_icon_id)) {
                $this->socialicons_model->set_update_record('social_icon_set', array('id' => $social_icon_id), $dataArr);
                $this->session->set_flashdata('success', 'Social Icon Set updated successfully.');
            } else {
                $dataArr['created'] = date('Y-m-d H:i:s');
                $this->socialicons_model->set_insert('social_icon_set', $dataArr);
                $this->session->set_flashdata('success', 'Social Icon Set has been added successfully.');
            }
            redirect('admin/social_icons');
        }
        $this->template->load('admin', 'admin/socialicons/set_form', $data);
    }

    /**
     * This function used to edit social icon's data
     * @param Integer $id
     * */
    public function edit_set($social_icon_id) {
        $this->add_set($social_icon_id);
    }

    public function delete_set($social_icon_id) {
        $social_icon = $this->socialicons_model->get_social_icon_set_by_id($social_icon_id);
        if ($social_icon) {
            $update_array = array(
                'is_delete' => 1
            );
            $this->socialicons_model->set_update_record('social_icon_set', array('id' => $social_icon_id), $update_array);
            $this->session->set_flashdata('success', $social_icon['name'] . 'Social Icons set has been deleted successfully!');
        } else {
            $this->session->set_flashdata('error', 'Invalid request. Please try again!');
        }
        redirect('admin/social_icons');
    }

    public function active_set($social_icon_id) {
        $social_icon = $this->socialicons_model->get_social_icon_set_by_id($social_icon_id);
        if ($social_icon) {
            $update_array = array(
                'is_delete' => 0
            );
            $this->socialicons_model->set_update_record('social_icon_set', array('id' => $social_icon_id), $update_array);
            $this->session->set_flashdata('success', $social_icon['name'] . 'Social Icons set has been deleted successfully!');
        } else {
            $this->session->set_flashdata('error', 'Invalid request. Please try again!');
        }
        redirect('admin/social_icons');
    }

}

/* End of file Social_icons.php */
/* Location: ./application/controllers/admin/Users.php */