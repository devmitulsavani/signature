<?php

/**
 * Generators Controller - Manage Generators
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Generators extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('user/dashboard_model', 'user/generator_model', 'admin/socialicons_model', 'user/authority_model'));
        $this->user_id = $this->session->userdata('htmlsig_user')['id'];
        $permission = $this->authority_model->check_permission($this->user_id);
        $settings = explode(",", $permission['settings']);
        $this->permission = $settings;
    }

    public function index() {
        $data['title'] = 'Signaturia | Generators';
        $this->template->load('userside', 'user/generators-view', $data);
    }

    /**
     * Add Generator 
     * @author Kirti
     */
    public function add() {
        $user_id = $this->session->userdata('htmlsig_user')['id'];
        $data['social_icons'] = $this->socialicons_model->get_all_social_icons();
        if ($this->input->post()) {
            $flag1 = $flag2 = 0;
            $signature_logo = $signature_banner_img = '';
            if ($_FILES['my_logo']['name'] != '') {
                $img_array = array('png', 'jpeg', 'jpg', 'PNG', 'JPEG', 'JPG');
                $exts = explode(".", $_FILES['my_logo']['name']);
                $name = $exts[0] . time() . "." . end($exts);
                $config['upload_path'] = SIGNATURE_UPLOADS_LOGO;
                $config['allowed_types'] = implode("|", $img_array);
                $config['max_size'] = '2048';
                $config['file_name'] = $name;
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('my_logo')) {
                    $flag1 = 1;
                    $data['my_logo_validation'] = $this->upload->display_errors();
                } else {
                    $file_info = $this->upload->data();
                    $signature_logo = $file_info['file_name'];
                }
            }

            if ($_FILES['signature_banner']['name'] != '') {
                $img_array = array('png', 'jpeg', 'jpg', 'PNG', 'JPEG', 'JPG');
                $exts = explode(".", $_FILES['signature_banner']['name']);
                $name = $exts[0] . time() . "." . end($exts);
                $config['upload_path'] = SIGNATURE_UPLOADS_BANNER;
                $config['allowed_types'] = implode("|", $img_array);
                $config['max_size'] = '2048';
                $config['file_name'] = $name;
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('signature_banner')) {
                    $flag2 = 1;
                    $data['signature_banner_validation'] = $this->upload->display_errors();
                } else {
                    $file_info = $this->upload->data();
                    $signature_banner_img = $file_info['file_name'];
                }
            }
            if ($flag1 != 1 && $flag2 != 1) {
                $signature_main = array('name' => $this->input->post('signature_name'),
                    'job_title' => $this->input->post('signature_jobtitle'),
                    'email' => $this->input->post('signature_email'),
                    'mobile_number' => $this->input->post('signature_mobilephone'),
                    'company_name' => $this->input->post('signature_companyname'),
                    'website' => $this->input->post('signature_website'),
                    'logo' => $signature_logo,
//                    'office_phone' => $this->input->post('signature_officephone'),
                    'fax' => $this->input->post('signature_fax'),
                    'address' => $this->input->post('signature_address'),
                    'address_line2' => $this->input->post('signature_address2'),
                );
                $signature_disclaimer = array('show_disclaimer' => $this->input->post('signature_disclaimer_show'),
                    'disclaimer' => $this->input->post('signature_disclaimer'));
                $signature_style = array(
                    'theme_id' => $this->input->post('signature_theme_id'),
                    'text_color' => $this->input->post('signature_text_color'),
                    'p_text_color' => $this->input->post('signature_p_text_color'),
                    'link_color' => $this->input->post('signature_link_color'),
                    'font_style' => $this->input->post('signature_font_style'),
                    'fontsize' => $this->input->post('signature_fontsize'),
                    'social_icon_set_id' => $this->input->post('signature_social_icon_set_id'),
                    'iconsize' => $this->input->post('signature_iconsize'),
                );
                $signature_banner = array('show_banner' => $this->input->post('signature_show_banner'),
                    'banner' => $signature_banner_img,
                    'banner_url' => $this->input->post('signature_banner_url'));
                $signature_app = array('appstore_link' => $this->input->post('signature_apple_app_store_link'),
                    'googleplaytore_link' => $this->input->post('signature_google_play_link'),
                    'amazon_link' => $this->input->post('signature_amazon_app_store_link'));


                $signature_arr = array('user_id' => $user_id, 'created' => date('Y-m-d H:i:s'));
                $id = $this->dashboard_model->insert('signatures', $signature_arr);
                $signature_main['signature_id'] = $id;
                $signature_main['created'] = date('Y-m-d H:i:s');
                $this->dashboard_model->insert('signature_main', $signature_main);

                $signature_disclaimer["signature_id"] = $id;
                $signature_disclaimer['created'] = date('Y-m-d H:i:s');
                $this->dashboard_model->insert('signatures_disclaimers', $signature_disclaimer);

                $signature_style['signature_id'] = $id;
                $signature_style['created'] = date('Y-m-d H:i:s');
                $this->dashboard_model->insert('signature_style', $signature_style);

                if ($signature_banner_img != '') {
                    $signature_banner['banner'] = 'banner_' . $id . '.jpg';
                    rename(SIGNATURE_UPLOADS_BANNER . $signature_banner_img, SIGNATURE_UPLOADS_BANNER . 'banner_' . $id . '.jpg');
                }
                $signature_banner['signature_id'] = $id;
                $signature_banner['created'] = date('Y-m-d H:i:s');
                $this->dashboard_model->insert('signatures_banners', $signature_banner);


                $signature_app['signature_id'] = $id;
                $signature_app['created'] = date('Y-m-d H:i:s');
                $this->dashboard_model->insert('signature_apps', $signature_app);

                $this->session->set_flashdata('success', 'Please select fields to allow for generator');

                $signature_social = array();
                foreach ($data['social_icons'] as $social) {
                    if ($this->input->post('signature_social_' . $social['id']) != '') {
                        $arr = array('signature_id' => $id,
                            'social_icons_id' => $social['id'],
                            'url' => $this->input->post('signature_social_' . $social['id']),
                            'created' => date('Y-m-d H:i:s'));
                        $signature_social[] = $arr;
                    }
                }
                if ($signature_social) {
                    $this->dashboard_model->insert_batch('signature_socials', $signature_social);
                }
                //-- Save signature as image
                list($type, $data) = explode(';', $this->input->post('hidden_sign_image'));
                list(, $data) = explode(',', $this->input->post('hidden_sign_image'));
                $data = base64_decode($data);
                $filename = 'signature-' . $id . '.png';
                file_put_contents(SIGNATURE_IMAGES . $filename, $data);

                redirect('generators/create_generator/' . $id);
            }
        }
        $data['title'] = 'Signaturia | Create Generator';
        $this->template->load('userside', 'user/generators-add-sign', $data);
    }

    /**
     * Edit Generator
     */
    public function edit($gid) {
        $result = $this->generator_model->get_sign_id($gid);
        $id = $result['signature_id'];
        $user_id = $this->session->userdata('htmlsig_user')['id'];
        $data['social_icons'] = $this->socialicons_model->get_all_social_icons();
        $data['signature'] = $this->dashboard_model->get_signature_by_id($id);
        $signature_socials = $this->dashboard_model->get_signature_social_icons($id);
        $new_array = [];
        foreach ($signature_socials as $social_icon) {
            $new_array[$social_icon['social_icons_id']] = $social_icon;
        }
        $data['signature_socials'] = $new_array;

        $signature_logo = @$data['signature']['logo'];
        $signature_banner = @$data['signature']['banner'];
        if ($this->input->post()) {
            $flag1 = $flag2 = 0;
            if ($_FILES['my_logo']['name'] != '') {
                $img_array = array('png', 'jpeg', 'jpg', 'PNG', 'JPEG', 'JPG');
                $exts = explode(".", $_FILES['my_logo']['name']);
                $name = $exts[0] . time() . "." . end($exts);
                $config['upload_path'] = SIGNATURE_UPLOADS_LOGO;
                $config['allowed_types'] = implode("|", $img_array);
                $config['max_size'] = '2048';
                $config['file_name'] = $name;
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('my_logo')) {
                    $flag1 = 1;
                    $data['my_logo_validation'] = $this->upload->display_errors();
                } else {
                    $file_info = $this->upload->data();
                    $signature_logo = $file_info['file_name'];
                }
            }

            if ($_FILES['signature_banner']['name'] != '') {
                $img_array = array('png', 'jpeg', 'jpg', 'PNG', 'JPEG', 'JPG');
                $exts = explode(".", $_FILES['signature_banner']['name']);
                $name = 'banner_' . $id . '.jpg';
                $config['upload_path'] = SIGNATURE_UPLOADS_BANNER;
                $config['allowed_types'] = implode("|", $img_array);
                $config['max_size'] = '2048';
                $config['file_name'] = $name;
                $this->upload->initialize($config);
                @unlink(SIGNATURE_UPLOADS_BANNER . 'banner_' . $id . '.jpg');
                if (!$this->upload->do_upload('signature_banner')) {
                    $flag2 = 1;
                    $data['signature_banner_validation'] = $this->upload->display_errors();
                } else {
                    $file_info = $this->upload->data();
                    $signature_banner = $file_info['file_name'];
                }
            }
            if ($flag1 != 1 && $flag2 != 1) {
                $signature_main = array('name' => $this->input->post('signature_name'),
                    'job_title' => $this->input->post('signature_jobtitle'),
                    'email' => $this->input->post('signature_email'),
                    'mobile_number' => $this->input->post('signature_mobilephone'),
                    'company_name' => $this->input->post('signature_companyname'),
                    'website' => $this->input->post('signature_website'),
                    'logo' => $signature_logo,
//                    'office_phone' => $this->input->post('signature_officephone'),
                    'fax' => $this->input->post('signature_fax'),
                    'address' => $this->input->post('signature_address'),
                    'address_line2' => $this->input->post('signature_address2'),
                );
                $signature_disclaimer = array('show_disclaimer' => $this->input->post('signature_disclaimer_show'),
                    'disclaimer' => $this->input->post('signature_disclaimer'));
                $signature_style = array(
                    'theme_id' => $this->input->post('signature_theme_id'),
                    'text_color' => $this->input->post('signature_text_color'),
                    'p_text_color' => $this->input->post('signature_p_text_color'),
                    'link_color' => $this->input->post('signature_link_color'),
                    'font_style' => $this->input->post('signature_font_style'),
                    'fontsize' => $this->input->post('signature_fontsize'),
                    'social_icon_set_id' => $this->input->post('signature_social_icon_set_id'),
                    'iconsize' => $this->input->post('signature_iconsize'),
                );
                $signature_banner = array('show_banner' => $this->input->post('signature_show_banner'),
                    'banner' => $signature_banner,
                    'banner_url' => $this->input->post('signature_banner_url'));
                $signature_app = array('appstore_link' => $this->input->post('signature_apple_app_store_link'),
                    'googleplaytore_link' => $this->input->post('signature_google_play_link'),
                    'amazon_link' => $this->input->post('signature_amazon_app_store_link'));


                $this->dashboard_model->update_record('signature_main', array('signature_id' => $id), $signature_main);
                $check_disclaimer = $this->dashboard_model->check_data_exists('signatures_disclaimers', array('signature_id' => $id));
                if ($check_disclaimer > 0) {
                    $this->dashboard_model->update_record('signatures_disclaimers', array('signature_id' => $id), $signature_disclaimer);
                } else {
                    $signature_disclaimer["signature_id"] = $id;
                    $signature_disclaimer['created'] = date('Y-m-d H:i:s');
                    $this->dashboard_model->insert('signatures_disclaimers', $signature_disclaimer);
                }
                $check_signature_style = $this->dashboard_model->check_data_exists('signature_style', array('signature_id' => $id));
                if ($check_signature_style > 0) {
                    $this->dashboard_model->update_record('signature_style', array('signature_id' => $id), $signature_style);
                } else {
                    $signature_style['signature_id'] = $id;
                    $signature_style['created'] = date('Y-m-d H:i:s');
                    $this->dashboard_model->insert('signature_style', $signature_style);
                }
                $check_signature_banner = $this->dashboard_model->check_data_exists('signatures_banners', array('signature_id' => $id));
                if ($check_signature_banner > 0) {
                    $this->dashboard_model->update_record('signatures_banners', array('signature_id' => $id), $signature_banner);
                } else {

                    $signature_banner['signature_id'] = $id;
                    $signature_banner['created'] = date('Y-m-d H:i:s');
                    $this->dashboard_model->insert('signatures_banners', $signature_banner);
                }
                $check_signature_app = $this->dashboard_model->check_data_exists('signature_apps', array('signature_id' => $id));
                if ($check_signature_app > 0) {
                    $this->dashboard_model->update_record('signature_apps', array('signature_id' => $id), $signature_app);
                } else {

                    $signature_app['signature_id'] = $id;
                    $signature_app['created'] = date('Y-m-d H:i:s');
                    $this->dashboard_model->insert('signature_apps', $signature_app);
                }

                $this->dashboard_model->delete_record('signature_socials', array('signature_id' => $id));
                $signature_social = array();
                foreach ($data['social_icons'] as $social) {
                    if ($this->input->post('signature_social_' . $social['id']) != '') {
                        $arr = array('signature_id' => $id,
                            'social_icons_id' => $social['id'],
                            'url' => $this->input->post('signature_social_' . $social['id']),
                            'created' => date('Y-m-d H:i:s'));
                        $signature_social[] = $arr;
                    }
                }
                if ($signature_social) {
                    $this->dashboard_model->insert_batch('signature_socials', $signature_social);
                }
                //-- Save signature as image
                list($type, $data) = explode(';', $this->input->post('hidden_sign_image'));
                list(, $data) = explode(',', $this->input->post('hidden_sign_image'));
                $data = base64_decode($data);
                $filename = 'signature-' . $id . '.png';
                file_put_contents(SIGNATURE_IMAGES . $filename, $data);

                $this->session->set_flashdata('success', 'Please select fields to allow for generator');
                redirect('generators/edit_generator/' . $gid . '/' . $id);
            }
        }
        $data['title'] = 'Signaturia | Edit Generator';
        $this->template->load('userside', 'user/generators-add-sign', $data);
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

    public function ajax_load_generators() {
        $keyword = trim($this->input->post('keyword'));
        $user_id = $this->session->userdata('htmlsig_user')['id'];
        $final = $this->generator_model->get_generators($user_id, $keyword);
        echo json_encode($final);
    }

    public function create_generator($signature_id) {
        $data['title'] = 'Signaturia | Create Generator';
        $data['signature_main'] = $this->generator_model->get_data_main($signature_id);
        $data['signature_social'] = $this->generator_model->get_data_social($signature_id);
        $data['signature_declaimer'] = $this->generator_model->get_data_declaimer($signature_id);
        $data['signature_banner'] = $this->generator_model->get_data_banner($signature_id);
        $data['signature_apps'] = $this->generator_model->get_data_apps($signature_id);
        $this->form_validation->set_rules('generator', 'generator', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_error_delimiters('<div class="alert bg-danger alert-styled-left bootstrap_alert"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
        } else {
            $post_data = $this->input->post(null);
            $new_data = array();
            $new_data_array = array();
            if ($post_data != '') {
                foreach ($post_data as $key => $value_data) {
                    $explode = explode('_', $key);
                    if (count($explode) >= 2) {
                        $new_data[] = $explode[0];
                    }
                }
                foreach ($post_data as $key => $value_data) {
                    $explode = explode('_', $key);
                    if (count($explode) >= 2) {
                        foreach ($new_data as $key => $value) {
                            if ($value == $explode[0]) {
                                if (@!in_array($value_data, $new_data_array[$value])) {
                                    $new_data_array[$value][] = $value_data;
                                }
                            }
                        }
                    }
                }
            }
            $encoded_date = json_encode($new_data_array);
            $generator_id = $this->generator_model->insert('generators', array('name' => $post_data['generator'], 'created' => date('Y-m-d H:i:s'), 'user_id' => $this->session->userdata('htmlsig_user')['id']));
            $this->generator_model->insert('enable_fields_generators', array('generator_id' => $generator_id, 'signature_id' => $signature_id, 'created' => date('Y-m-d H:i:s'), 'enable_fields' => $encoded_date));
            // echo $generator_id = 4;
            $this->load->library('my_encryption');
            $activate_key = $this->my_encryption->safe_b64encode($generator_id . '::' . KEY);
            $url = site_url('manage_signature?token=' . $activate_key);
            $this->session->set_flashdata('success', 'Your generator created successfully! Please <a href="share-generator/'.$generator_id.'">click here</a> for your share generator.');
            redirect('generators');
            // echo $activate_key = $this->my_encryption->safe_b64decode($activate_key);
            // die;
        }
        $this->template->load('userside', 'user/generators-add-view', $data);
    }

    public function edit_generator($gid, $signature_id) {
        $data['title'] = 'Signaturia | Edit Generator';
        $data['signature_main'] = $this->generator_model->get_data_main($signature_id);
        $data['signature_social'] = $this->generator_model->get_data_social($signature_id);
        $data['signature_declaimer'] = $this->generator_model->get_data_declaimer($signature_id);
        $data['signature_banner'] = $this->generator_model->get_data_banner($signature_id);
        $data['signature_apps'] = $this->generator_model->get_data_apps($signature_id);
        $data['generator'] = $this->generator_model->get_generator_detail($gid, $this->user_id);

        $this->form_validation->set_rules('generator', 'generator', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_error_delimiters('<div class="alert bg-danger alert-styled-left bootstrap_alert"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
        } else {
            $post_data = $this->input->post(null);
            $new_data = array();
            $new_data_array = array();
            if ($post_data != '') {
                foreach ($post_data as $key => $value_data) {
                    $explode = explode('_', $key);
                    if (count($explode) >= 2) {
                        $new_data[] = $explode[0];
                    }
                }
                foreach ($post_data as $key => $value_data) {
                    $explode = explode('_', $key);
                    if (count($explode) >= 2) {
                        foreach ($new_data as $key => $value) {
                            if ($value == $explode[0]) {
                                if (@!in_array($value_data, $new_data_array[$value])) {
                                    $new_data_array[$value][] = $value_data;
                                }
                            }
                        }
                    }
                }
            }
            $encoded_date = json_encode($new_data_array);
            $this->dashboard_model->update_record('generators', array('id' => $gid), array('name' => $post_data['generator']));
            $this->dashboard_model->update_record('enable_fields_generators', array('generator_id' => $gid, 'signature_id' => $signature_id), array('enable_fields' => $encoded_date));
            $this->load->library('my_encryption');
            $activate_key = $this->my_encryption->safe_b64encode($gid . '::' . KEY);
            $url = site_url('manage_signature?token=' . $activate_key);
            $this->session->set_flashdata('success', 'Your generator updated successfully! Please share below link to users.<br><b>' . $url . '</b>');
            redirect('generators');
        }
        $this->template->load('userside', 'user/generators-add-view', $data);
    }

    /**
     * Downlaod sign
     * @author Kirti
     * @param int $id
     */
    public function download($gid = NULL) {
        $result = $this->generator_model->get_sign_id($gid);
        $id = $result['signature_id'];
        if (is_numeric($id)) {
            $data['social_icons'] = $this->socialicons_model->get_all_social_icons();
            $data['signature'] = $this->dashboard_model->get_signature_by_id($id);
            $signature_socials = $this->dashboard_model->get_signature_social_icons($id);
            $new_array = [];
            foreach ($signature_socials as $social_icon) {
                $new_array[$social_icon['social_icons_id']] = $social_icon;
            }
            $data['signature_socials'] = $new_array;
            $newcontent = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html><body>';
            $newcontent.= $this->load->view('signature_preview', $data, TRUE);
            $newcontent.='</body></html>';

            $handle = fopen("uploads/signatures/signature.html", 'w+');
            fwrite($handle, $newcontent);
            fclose($handle);

            $filename = 'uploads/signatures/signature.html';
            header('Pragma: public');
            header('Expires: 0');
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Cache-Control: private', false); // required for certain browsers 
            header('Content-Type: application/html');

            header('Content-Disposition: attachment; filename="' . basename($filename) . '";');
            header('Content-Transfer-Encoding: binary');
            header('Content-Length: ' . filesize($filename));

            readfile($filename);
        } else {
            show_404();
        }
    }

    /**
     * Delete Generator
     * @param int $gid
     */
    public function delete($gid) {
        $this->dashboard_model->common_insert_update('update', "generators", array('is_delete' => 1), array('id' => $gid));
        $this->session->set_flashdata('success', 'Generator deleted successfully');
        redirect('user/generators');
    }

    /**
     * Get generator URL
     * @author Kirti
     */
    public function ajax_get_url() {
        $generator_id = $this->input->post('id');
        $this->load->library('my_encryption');
        $activate_key = $this->my_encryption->safe_b64encode($generator_id . '::' . KEY);
        $url = site_url('manage_signature?token=' . $activate_key);
        echo $url;
        exit;
    }

    /**
     * Display all signatures generated by generators' link
     */
    public function view_signatures($id = NULL) {
        if (is_numeric($id)) {
            $generator = $this->generator_model->get_generator_detail($id, $this->user_id);
            if ($generator) {
                $data['generator'] = $generator;
                $data['title'] = 'Signaturia | Generators\' Signatures';
                $this->template->load('userside', 'user/generators-signatures', $data);
            } else {
                show_404();
            }
        } else {
            show_404();
        }
    }

    public function ajax_load_signatures($id) {
        $keyword = trim($this->input->post('keyword'));
        $final = $this->generator_model->get_signatures($id, $keyword);
        echo json_encode($final);
    }

}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */