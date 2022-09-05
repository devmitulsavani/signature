<?php

/**
 * Users Controller - Manage Userguide
 * @author KAMLESH
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class User_guide extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/userguide_model');
    }

    public function index() {
        $data['title'] = 'Signaturia | Userguide';
        $this->template->load('admin', 'admin/userguide/index', $data);
    }

    public function get_guide_platforms() {
        $final['recordsTotal'] = $this->userguide_model->get_guide_platforms('count');
        $final['redraw'] = 1;
        $final['recordsFiltered'] = $final['recordsTotal'];
        $users = $this->userguide_model->get_guide_platforms();
        $start = $this->input->get('start') + 1;
        foreach ($users as $key => $val) {
            $users[$key] = $val;
            $users[$key]['sr_no'] = $start++;
        }
        $final['data'] = $users;
        echo json_encode($final);
    }

    public function add_platform($id = null) {
        if (is_numeric($id)) {
            $where = array('id' => $id);
            $data['platform_info'] = $user = $this->userguide_model->check_row($where, 'guide_platforms');
            if($data['platform_info']) {
                $data['title'] = 'Signaturia | Edit platform';
                $data['heading'] = 'Edit platform';
                $package_img = $data['platform_info']['logo'];
            } else {
                show_404();
            }
         } else {
            $package_img = '';
            $data['title'] = 'Signaturia | Add platform';
            $data['heading'] = 'Add platform';
            if($this->input->post(null)) {
                if ($_FILES['logo']['name'] == '') {
                    $this->form_validation->set_rules('logo', 'logo', 'trim|required');
                }
            }
        }
        $this->form_validation->set_rules('platform', 'platform', 'trim|required|callback_check_platform');
        if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_error_delimiters('<div class="alert bg-danger alert-styled-left bootstrap_alert"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
        } else {
            $post_data = $this->input->post(null);
            $flag = 0;
            if ($_FILES['logo']['name'] != '') {
                $img_array = array('png', 'jpeg', 'jpg', 'PNG', 'JPEG', 'JPG');
                $exts = explode(".", $_FILES['logo']['name']);
                $name = $exts[0] . time() . "." . end($exts);
                $config['upload_path'] = PLATFORM_LOGOS;
                $config['allowed_types'] = implode("|", $img_array);
                $config['max_size'] = '2048';
                $config['file_name'] = $name;
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('logo')) {
                    $flag = 1;
                    $data['package_img_validation'] = $this->upload->display_errors();
                } else {
                    $file_info = $this->upload->data();
                    if (is_numeric($id)) {
                        //-- If icon is bieng edited then remove previous uploaded icon
                        unlink(PLATFORM_LOGOS . $package_img);
                    }
                    $package_img = $file_info['file_name'];
                    $post_data['logo'] = $package_img;
                }
            }
            if ($flag != 1) {
                if (is_numeric($id)) {
                    $this->userguide_model->update_record('guide_platforms', 'id = ' . $id, $post_data);
                    $this->session->set_flashdata('success', 'Platform successfully updated!');
                } else {
                    $this->userguide_model->insert('guide_platforms', $post_data);
                    $this->session->set_flashdata('success', 'Platform successfully added!');
                }
                redirect('admin/user_guide');
            }
        }
        $this->template->load('admin', 'admin/userguide/manage', $data);
    }

    public function check_platform(){
        $platform = trim($this->input->post('platform'));
        $id = $this->uri->segment(4);
        if(is_numeric($id)) {
            $where = array('id != ' => $id, 'platform' => $this->input->post('platform'));
        } else {
            $where = array('platform' => $this->input->post('platform'));
        }
        $user = $this->userguide_model->check_row($where, 'guide_platforms');
        if ($user) {
            $this->form_validation->set_message('check_platform', 'Platform already exist!');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function delete($id = null) {
        $post_data['is_active'] = 0;
        $this->userguide_model->update_record('guide_platforms', 'id = ' . $id, $post_data);
        $this->session->set_flashdata('success', 'Platform successfully deleted!');
        redirect('admin/user_guide');
    }

    public function steps($id) {
        $where = array('id' => $id);
        $data['platform_info'] = $this->userguide_model->check_row($where, 'guide_platforms');
        if ($data['platform_info']) {
            $data['title'] = 'Signaturia | '.$data['platform_info']['platform'].' steps';
            $this->template->load('admin', 'admin/userguide/steps', $data);
        } else {
            show_404();
        }
    }

    public function get_steps($id) {
        $final['recordsTotal'] = $this->userguide_model->get_steps('count', $id);
        $final['redraw'] = 1;
        $final['recordsFiltered'] = $final['recordsTotal'];
        $users = $this->userguide_model->get_steps('result', $id);
        $start = $this->input->get('start') + 1;
        foreach ($users as $key => $val) {
            $users[$key] = $val;
            $users[$key]['sr_no'] = $start++;
        }
        $final['data'] = $users;
        echo json_encode($final);
    }

    public function add_steps($id, $step_id = null) {
        $where = array('id' => $id);
        $data['platform_info'] = $this->userguide_model->check_row($where, 'guide_platforms');
        if ($data['platform_info']) {
            if($data['platform_info']) {
                $data['title'] = 'Signaturia | Add steps for '.$data['platform_info']['platform'];
                $data['heading'] = 'Add steps for '.$data['platform_info']['platform'];
                $where = array('id' => $step_id);
                $data['step_info'] = $this->userguide_model->check_row($where, 'guide_platforms_steps');
                $package_img = $data['step_info']['file'];
            } else {
                show_404();
            }
         } else {
            $package_img = '';
            $data['title'] = 'Signaturia | Add platform';
            $data['heading'] = 'Add platform';
        }
        $this->form_validation->set_rules('title', 'platform', 'trim|required');
        $this->form_validation->set_rules('description', 'platform', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_error_delimiters('<div class="alert bg-danger alert-styled-left bootstrap_alert"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
        } else {
            $post_data = $this->input->post(null);
            $post_data['step'] = $post_data['description'];
            $post_data['link'] = $post_data['youtube_link'];
            $post_data['guide_platform_id'] = $id;
            unset($post_data['description']);
            unset($post_data['youtube_link']);
            $flag = 0;
            if ($_FILES['file']['name'] != '') {
                $img_array = array('png', 'jpeg', 'jpg', 'PNG', 'JPEG', 'JPG', 'MP4', 'mp4');
                $exts = explode(".", $_FILES['file']['name']);
                $name = $exts[0] . time() . "." . end($exts);
                $config['upload_path'] = PLATFORM_LOGOS;
                $config['allowed_types'] = implode("|", $img_array);
                $config['max_size'] = '1000000';
                $config['file_name'] = $name;
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('file')) {
                    $flag = 1;
                    $data['package_img_validation'] = $this->upload->display_errors();
                } else {
                    $file_info = $this->upload->data();
                    if (is_numeric($id)) {
                        //-- If icon is bieng edited then remove previous uploaded icon
                        @unlink(PLATFORM_LOGOS . $package_img);
                    }
                    $package_img = $file_info['file_name'];
                    $post_data['file'] = $package_img;
                }
            }
            if ($flag != 1) {
                if (is_numeric($step_id)) {
                    $this->userguide_model->update_record('guide_platforms_steps', 'id = ' . $step_id, $post_data);
                    $this->session->set_flashdata('success', 'Step successfully updated!');
                } else {
                    $this->userguide_model->insert('guide_platforms_steps', $post_data);
                    $this->session->set_flashdata('success', 'Step successfully added!');
                }

                redirect('admin/user_guide/steps/'.$id);
            }
        }
        $this->template->load('admin', 'admin/userguide/manage_steps', $data);
    }

    public function delete_step($platform_id, $id = null) {
        $post_data['is_active'] = 0;
        $this->userguide_model->update_record('guide_platforms_steps', 'id = ' . $id, $post_data);
        $this->session->set_flashdata('success', 'Step successfully deleted!');
        redirect('admin/user_guide/steps/'.$platform_id);
    }
}