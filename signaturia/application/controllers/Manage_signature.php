<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Create signature from generator
 * @author KU
 */
class Manage_signature extends My_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('manage_signature_model');
    }

    public function index() {
        if($this->session->userdata('htmlsig_user')['id'] != '') {
            redirect('dashboard');
        } else {
            $this->load->library('my_encryption');
            $activate_key = $this->my_encryption->safe_b64decode($this->input->get('token'));
            $get_data = explode('::', $activate_key);
            $where = array(
                'where' => array(
                    'g.id' => $get_data[0],
                    'e.id' => $get_data[2]
                )
            );
            $option = array(
                    'join' => array(
                        array(
                            'table' => TBL_EMPLOYEES.' e',
                            'condition' => 'e.user_id = g.user_id'
                        ),
                        array(
                            'table' => TBL_EMPLOYEES_PASSCODES.' ep',
                            'condition' => 'e.id = ep.employee_id'
                        )
                    ),
                    'single' => true
                );
            $check_valid = $this->common_model->sql_select(TBL_GENERATORS.' g', '*, ep.id AS passcode_id', $where, $option);
            if($check_valid) {

                if($check_valid['is_used'] == 1 && $check_valid['is_assigned_user'] != '') {
                    $this->session->set_flashdata('error', 'Invalid request! Your token was already used.');
                    redirect('sign-up');
                } 
                $data['title'] = 'Signaturia | Sign-up';
                $this->form_validation->set_rules('email', 'email', 'trim|required|callback_is_uniquemail');
                $this->form_validation->set_rules('privacy_policy', 'privacy_policy', 'trim|required');
                $this->form_validation->set_rules('password', 'password', 'trim|required');
                $this->form_validation->set_rules('confirm_password', 'confirm password', 'trim|required|matches[password]');
                $this->form_validation->set_rules('passcode', 'passcode', 'trim|required|callback_is_validpasscode');
                if ($this->form_validation->run() == FALSE) {
                    $this->form_validation->set_error_delimiters('<div class="alert bg-danger alert-styled-left bootstrap_alert"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
                } else {
                    extract($this->input->post(null));
                    $insert_data = array(
                        'email' => $email,
                        'password' => md5($password),
                        'created' => date('Y-m-d H:i:s'),
                        'user_role' => 2,
                        'type' => 2,
                        'is_verified' => 0,
                        'is_active' => 0
                    );
                    $user_id = $this->signup_model->insert('users', $insert_data);
                    $this->load->library('my_encryption');
                    $activate_key = $this->my_encryption->safe_b64encode(md5($password));
                    $button_link = site_url() . "verify_account?ident=" . $user_id . "&activate=" . $activate_key;
                    $mail_data = array(
                        'heading' => 'Welcome to signaturia!',
                        'message' => 'Please click on below link for verify account!',
                        'button_link' => $button_link,
                    );
                    $msg = $this->load->view('email_templates/forgot_password', $mail_data, true);
                    $sent_email = send_mail_front($email, EMAIL_FROM, 'Verify your account | Signaturia', $msg);

                    $activate_key = $this->my_encryption->safe_b64decode($this->input->get('token'));
                    $get_data = explode('::', $activate_key);

                    $this->common_model->update(TBL_EMPLOYEES_PASSCODES, $check_valid['passcode_id'], array('is_used' => 1, 'is_assigned_user' => $user_id));

                    $this->session->set_flashdata('success', 'You are registered successfully! Please verify link from your email account.');
                    redirect(site_url('login'));
                }
                $data['key'] = $this->input->get('token');
                $this->template->load('frontend', 'check-passcode', $data);
            }  else {
                show_404();
            }
        }
    }

    public function is_uniquemail() {
        $this->load->model('signup_model');
        $email = trim($this->input->post('email'));
        $user = $this->signup_model->check_unique_email($email);
        if ($user) {
            $this->form_validation->set_message('is_uniquemail', 'Email address is already in use!');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function is_validpasscode() {
        $this->load->library('my_encryption');
        $activate_key = $this->my_encryption->safe_b64decode($this->input->get('token'));
        $get_data = explode('::', $activate_key);
        $where = array(
            'where' => array(
                'g.id' => $get_data[0],
                'e.id' => $get_data[2],
                'ep.passcode' => $this->input->post('passcode'),
                'ep.is_used' => 0
            )
        );
        $option = array(
                'join' => array(
                    array(
                        'table' => TBL_EMPLOYEES.' e',
                        'condition' => 'e.user_id = g.user_id'
                    ),
                    array(
                        'table' => TBL_EMPLOYEES_PASSCODES.' ep',
                        'condition' => 'ep.employee_id = e.id'
                    )
                ),
                'single' => true
            );
        $check_valid = $this->common_model->sql_select(TBL_GENERATORS.' g', '*', $where, $option);
        if ($check_valid) {
            return TRUE;
        } else {
            $this->form_validation->set_message('is_validpasscode', 'Invalid passcode! Please verify with your email and try again.');
            return FALSE;
        }
    }

    public function create_signature() {
        $data['title'] = 'Signaturia | Manage signature';
        $this->load->library('my_encryption');
        $activate_key = $this->my_encryption->safe_b64decode($this->input->get('token'));
        $generator_id = explode('::', $activate_key);
        $result = $this->manage_signature_model->get_row($generator_id[0]);
        if ($result) {
            $data['enable_fields'] = $this->manage_signature_model->check_row(array('generator_id' => $generator_id[0]), 'enable_fields_generators');
            $data['fields'] = json_decode($data['enable_fields']['enable_fields']);
            $data['signature'] = $this->manage_signature_model->get_signature_by_id($data['enable_fields']['signature_id']);
            if($data['signature']['is_custom'] == 1){
                redirect('manage_signature/custom_signature?token='.$this->input->get('token'));
            }
            $data['signature_social_data'] = $this->manage_signature_model->get_signature_social_icons($data['enable_fields']['signature_id']);
            $data['social_icons'] = $this->manage_signature_model->get_all_social_icons();

            //-- if form is posted successfully 
            if ($this->input->post()) {
                $id = $data['enable_fields']['signature_id'];
                $signature_arr = array('user_id' => NULL, 'created' => date('Y-m-d H:i:s'));
                $new_id = $this->manage_signature_model->insert('signatures', $signature_arr);

                $insert_query = 'INSERT INTO signature_main (signature_id, name, job_title, email, mobile_number, company_name, website, logo, office_phone, fax, address, address_line2, created)
SELECT ' . $new_id . ', name, job_title, email, mobile_number, company_name, website, logo, office_phone, fax, address, address_line2, created FROM signature_main WHERE signature_id = ' . $id;
                $this->manage_signature_model->customQuery($insert_query);

                $insert_query2 = 'INSERT INTO signatures_banners (signature_id, show_banner, banner , banner_url, created)
SELECT ' . $new_id . ', show_banner, banner , banner_url, created FROM signatures_banners WHERE signature_id = ' . $id;
                $this->manage_signature_model->customQuery($insert_query2);

                $insert_query3 = 'INSERT INTO signatures_disclaimers (signature_id, show_disclaimer, disclaimer , created)
SELECT ' . $new_id . ', show_disclaimer, disclaimer , created FROM signatures_disclaimers WHERE signature_id = ' . $id;
                $this->manage_signature_model->customQuery($insert_query3);

                $insert_query4 = 'INSERT INTO signature_style (signature_id, theme_id, text_color, p_text_color, link_color, font_style,fontsize,	social_icon_set_id, iconsize, created)
SELECT ' . $new_id . ',  theme_id, text_color, p_text_color, link_color, font_style,fontsize,	social_icon_set_id, iconsize, created FROM signature_style WHERE signature_id = ' . $id;
                $this->manage_signature_model->customQuery($insert_query4);

                $insert_query5 = 'INSERT INTO signature_apps (signature_id, appstore_link, googleplaytore_link, amazon_link, created)
SELECT ' . $new_id . ', appstore_link, googleplaytore_link, amazon_link, created FROM signature_apps WHERE signature_id = ' . $id;
                $this->manage_signature_model->customQuery($insert_query5);

                $signature_logo = $data['signature']['logo'];
                $signature_banner = $data['signature']['banner'];
                $flag1 = $flag2 = 0;
                $signature_main = $signature_disclaimer = $signature_style = $signature_banner = $signature_app = $signature_social = array();
                if (@$_FILES['my_logo']['name'] != '') {
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
                        if (is_numeric($id)) {
                            //-- If icon is bieng edited then remove previous uploaded icon
//                        unlink(SIGNATURE_UPLOADS_LOGO . $signature_logo);
                        }
                        $signature_logo = $file_info['file_name'];
                        $signature_main['logo'] = $signature_logo;
                    }
                }
                if (@$_FILES['signature_banner']['name'] != '') {
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
                        if (is_numeric($id)) {
                            //-- If icon is bieng edited then remove previous uploaded icon
//                        unlink(SIGNATURE_UPLOADS_BANNER . $signature_banner);
                        }
                        $signature_banner = $file_info['file_name'];
                        $signature_banner['banner'] = $signature_banner;
                    }
                }
                if ($flag1 != 1 && $flag2 != 1) {
                    if ($this->input->post('signature_name'))
                        $signature_main['name'] = $this->input->post('signature_name');

                    if ($this->input->post('signature_jobtitle'))
                        $signature_main['job_title'] = $this->input->post('signature_jobtitle');
                    if ($this->input->post('signature_email'))
                        $signature_main['email'] = $this->input->post('signature_email');
                    if ($this->input->post('signature_mobilephone'))
                        $signature_main['mobile_number'] = $this->input->post('signature_mobilephone');
                    if ($this->input->post('signature_companyname'))
                        $signature_main['company_name'] = $this->input->post('signature_companyname');
                    if ($this->input->post('signature_website'))
                        $signature_main['website'] = $this->input->post('signature_website');
                    if ($this->input->post('signature_fax'))
                        $signature_main['fax'] = $this->input->post('signature_fax');
                    if ($this->input->post('signature_address'))
                        $signature_main['address'] = $this->input->post('signature_address');
                    if ($this->input->post('signature_address2'))
                        $signature_main['address_line2'] = $this->input->post('signature_address2');

                    if ($this->input->post('signature_disclaimer_show'))
                        $signature_disclaimer['show_disclaimer'] = $this->input->post('signature_disclaimer_show');
                    if ($this->input->post('signature_disclaimer'))
                        $signature_disclaimer['disclaimer'] = $this->input->post('signature_disclaimer');

                    if ($this->input->post('signature_theme_id'))
                        $signature_style['theme_id'] = $this->input->post('signature_theme_id');
                    if ($this->input->post('signature_text_color'))
                        $signature_style['text_color'] = $this->input->post('signature_text_color');
                    if ($this->input->post('signature_p_text_color'))
                        $signature_style['p_text_color'] = $this->input->post('signature_p_text_color');
                    if ($this->input->post('signature_link_color'))
                        $signature_style['link_color'] = $this->input->post('signature_link_color');
                    if ($this->input->post('signature_font_style'))
                        $signature_style['font_style'] = $this->input->post('signature_font_style');
                    if ($this->input->post('signature_fontsize'))
                        $signature_style['fontsize'] = $this->input->post('signature_fontsize');
                    if ($this->input->post('signature_social_icon_set_id'))
                        $signature_style['social_icon_set_id'] = $this->input->post('signature_social_icon_set_id');
                    if ($this->input->post('signature_iconsize'))
                        $signature_style['iconsize'] = $this->input->post('signature_iconsize');

                    if ($this->input->post('signature_show_banner'))
                        $signature_banner['show_banner'] = $this->input->post('signature_show_banner');
                    if ($this->input->post('signature_banner_url'))
                        $signature_banner['banner_url'] = $this->input->post('signature_banner_url');

                    if ($this->input->post('signature_apple_app_store_link'))
                        $signature_app['appstore_link'] = $this->input->post('signature_apple_app_store_link');
                    if ($this->input->post('signature_google_play_link'))
                        $signature_app['googleplaytore_link'] = $this->input->post('signature_google_play_link');
                    if ($this->input->post('signature_amazon_app_store_link'))
                        $signature_app['amazon_link'] = $this->input->post('signature_amazon_app_store_link');


//                    $signature_main['signature_id'] = $id;
//                    $signature_main['created'] = date('Y-m-d H:i:s');
                    if ($signature_main)
                        $this->manage_signature_model->update_record('signature_main', array('signature_id' => $new_id), $signature_main);

//                    $signature_disclaimer["signature_id"] = $id;
//                    $signature_disclaimer['created'] = date('Y-m-d H:i:s');
                    if ($signature_disclaimer)
                        $this->manage_signature_model->update_record('signatures_disclaimers', array('signature_id' => $new_id), $signature_disclaimer);

//                    $signature_style['signature_id'] = $id;
//                    $signature_style['created'] = date('Y-m-d H:i:s');
                    if ($signature_style)
                        $this->manage_signature_model->update_record('signature_style', array('signature_id' => $new_id), $signature_style);

//                    $signature_banner['signature_id'] = $id;
//                    $signature_banner['created'] = date('Y-m-d H:i:s');
                    if ($signature_banner)
                        $this->manage_signature_model->update_record('signatures_banners', array('signature_id' => $new_id), $signature_banner);


//                    $signature_app['signature_id'] = $id;
//                    $signature_app['created'] = date('Y-m-d H:i:s');
                    if ($signature_app)
                        $this->manage_signature_model->update_record('signature_apps', array('signature_id' => $new_id), $signature_app);

//                    $this->session->set_flashdata('success', 'Signature created successfully');

                    $signature_social = array();
                    foreach ($data['social_icons'] as $social) {
                        if ($this->input->post('signature_social_' . $social['id']) != '') {
                            $arr = array('signature_id' => $new_id,
                                'social_icons_id' => $social['id'],
                                'url' => $this->input->post('signature_social_' . $social['id']),
//                                'created' => date('Y-m-d H:i:s')
                            );
                            $signature_social[] = $arr;
                        }
                    }
                    if ($signature_social) {
                        $this->manage_signature_model->insertbatch('signature_socials', $signature_social);
                    }
                    $generator_data = array('generator_id' => $generator_id[0], 'signature_id' => $new_id, 'created' => date('Y-m-d'));
                    $this->manage_signature_model->insert('created_signatures_generators', $generator_data);
                    $this->session->set_flashdata('success', 'Your signature created successfully!');
                    //-- Save signature as image
                    list($type, $data) = explode(';', $this->input->post('hidden_sign_image'));
                    list(, $data) = explode(',', $this->input->post('hidden_sign_image'));
                    $data = base64_decode($data);
                    $filename = 'signature-' . $new_id . '.png';
                    file_put_contents(SIGNATURE_IMAGES . $filename, $data);
                    $this->download($new_id);
                }
            }
            $this->template->load('userside', 'signature', $data);
        } else {
            show_404();
        }
    }
    public function custom_signature() { 
        $data['title'] = 'Signaturia | Manage signature';
        $this->load->library('my_encryption');
        $activate_key = $this->my_encryption->safe_b64decode($this->input->get('token'));
        $generator_id = explode('::', $activate_key);
        $result = $this->manage_signature_model->get_row($generator_id[0]);
        if ($result) {
            $fields = $this->manage_signature_model->check_row(array('generator_id' => $generator_id[0]), 'enable_fields_generators');
            $data['html']  = file_get_contents(base_url().CUSTOM_SIGNATURE_IMAGES."/".$result['user_id']."/".$fields['signature_id']."_full.html");        
            $data['signature_id'] = $fields['signature_id'];
            $data['generator_id'] = '';
            $data['share_generator'] = '1';
            $data['custom_generator'] = '';
            $this->template->load('userside', 'user/custom_signature', $data);

        }else {
            show_404();
        }
    }

    public function download($id = NULL) {
        if (is_numeric($id)) {
            $data['social_icons'] = $this->manage_signature_model->get_all_social_icons();
            $data['signature'] = $this->manage_signature_model->get_signature_by_id($id);
            $signature_socials = $this->manage_signature_model->get_signature_social_icons($id);

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

}

?> 