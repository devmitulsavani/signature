<?php

/**
 * Dashboard Controller - Manage dashboard of user
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('user/dashboard_model', 'admin/socialicons_model', 'user/authority_model'));
        $this->user_id = $this->session->userdata('htmlsig_user')['id'];
        $permission = $this->authority_model->check_permission($this->user_id);
        $settings = explode(",", $permission['settings']);
        $this->allowed_signs = $permission['signatures'];
        $this->permission = $settings;
        $this->load->library('my_encryption');
    }

    public function index() {
        $data['title'] = 'Signaturia | Dashboard';
        $data['social_icons'] = $this->socialicons_model->get_all_social_icons();
        if ($this->session->userdata('htmlsig_user')['type'] == 2) {


            $this->template->load('userside', 'user/generators-users-dashboard-view', $data);
        } else {
            $this->template->load('userside', 'user/dashboard-view', $data);
        }
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

    public function ajax_load_signatures() {
        $keyword = trim($this->input->post('keyword'));
        $user_id = $this->session->userdata('htmlsig_user')['id'];
        $final = $this->dashboard_model->get_signatures($user_id, $keyword);
        echo json_encode($final);
    }

    public function ajax_get_signature($id = NULL) {
        if ($id == NULL) {
            $id = trim($this->input->post('id'));
        }
        $user_id = $this->session->userdata('htmlsig_user')['id'];
//        $final = $this->dashboard_model->get_signature_by_id($id);
//        $social_icons = $this->dashboard_model->get_signature_social_icons($id);
//        $data = array(
//            'signature' => $final,
//            'social_icons' => $social_icons);
//        echo json_encode($data);
        //-- Get signature and its social icons
        $data['social_icons'] = $this->socialicons_model->get_all_social_icons();
        $data['signature'] = $this->dashboard_model->get_signature_by_id($id);
        if($data['signature']['is_custom'] == 1){
                $custom_signature = $this->dashboard_model->get_custom_signature_by_id($id);
                $view = file_get_contents(base_url().CUSTOM_SIGNATURE_IMAGES."/".$custom_signature['user_id']."/".$custom_signature['id'].".html");        
        }else{
            $signature_socials = $this->dashboard_model->get_signature_social_icons($id);
            $new_array = [];
            foreach ($signature_socials as $social_icon) {
                $new_array[$social_icon['social_icons_id']] = $social_icon;
            }
            $data['signature_socials'] = $new_array;    
            $view = $this->load->view('signature_preview', $data, TRUE);
        }
        echo $view;
    }

    /**
     * Create/Edit signature  
     * @author Kirti
     * @param int $id
     */
    public function create_signature($id = NULL) {
        $user_id = $this->session->userdata('htmlsig_user')['id'];
        $package = $this->dashboard_model->get_package($user_id);
        $data['social_icons'] = $this->socialicons_model->get_all_social_icons();
        if ($id != NULL) {
            $data['title'] = 'Edit Signature';
            $data['signature'] = $this->dashboard_model->get_signature_by_id($id);
            /*
              if ((strtotime($data['signature']['sign_created']) < strtotime("+1 month")) && ($package['id'] == 1)) {
              $this->session->set_flashdata('error','You can not edit your signature! Editime is expired');
              redirect('dashboard');
              } */
            $signature_socials = $this->dashboard_model->get_signature_social_icons($id);
            $new_array = [];
            foreach ($signature_socials as $social_icon) {
                $new_array[$social_icon['social_icons_id']] = $social_icon;
            }
            $data['signature_socials'] = $new_array;

            $signature_logo = @$data['signature']['logo'];
            $signature_banner_img = @$data['signature']['banner'];
        } else {
            //-- permission to check allowed signatures
            if ($this->allowed_signs != 0) {
                $total_signs = $this->dashboard_model->get_signature_count($user_id);
                if ($total_signs > $this->allowed_signs) {
                    $this->session->set_flashdata('error', 'You are only allowed to create <b>' . $this->allowed_signs . '</b> signatures');
                    redirect('dashboard');
                }
            }
            $data['title'] = 'Create Signature';
            $signature_logo = '';
            $signature_banner_img = '';
        }
        if ($this->input->post()) {
            $flag1 = 0;
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
                }
            }
            $flag2 = 0;
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
                        unlink(SIGNATURE_UPLOADS_BANNER . $signature_banner_img);
                    }
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
                    'latest_tweet' => $this->input->post('latest_tweet_val'),
                    'youtube_video' => $this->input->post('youtube_video_link')
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

                if ($id != NULL) {

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
                    if ($signature_banner_img != '') {
                        $signature_banner['banner'] = 'banner_' . $id . '.jpg';
                        rename(SIGNATURE_UPLOADS_BANNER . $signature_banner_img, SIGNATURE_UPLOADS_BANNER . 'banner_' . $id . '.jpg');
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
                    $this->session->set_flashdata('success', 'Signature updated successfully');
                } else {
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

                    $this->session->set_flashdata('success', 'Signature created successfully');
                }
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
                $filename = 'signature-' . $id . '.png';
                unlink(@SIGNATURE_IMAGES . $filename);
                list($type, $data) = explode(';', $this->input->post('hidden_sign_image'));
                list(, $data) = explode(',', $this->input->post('hidden_sign_image'));
                $data = base64_decode($data);

                file_put_contents(SIGNATURE_IMAGES . $filename, $data);
                if ($this->input->post('hidden_sign_type') == 1) {
                    redirect('dashboard');
                } else {
                    redirect('install_sign/' . $id);
                }
            }
        }

        $this->template->load('userside', 'user/signature', $data);
    }

    /**
     * Copy Email signature
     * @author Kirti
     * @param int $id
     */
    public function copy($id = NULL) {
        if (is_numeric($id)) {
            $user_id = $this->session->userdata('htmlsig_user')['id'];
            $signature_arr = array('user_id' => $user_id, 'created' => date('Y-m-d H:i:s'));
            $new_id = $this->dashboard_model->insert('signatures', $signature_arr);
            $insert_query = 'INSERT INTO signature_main (signature_id, name, job_title, email, mobile_number, company_name, website, logo, office_phone, fax, address, address_line2, latest_tweet,youtube_video,created)
SELECT ' . $new_id . ', name, job_title, email, mobile_number, company_name, website, logo, office_phone, fax, address, address_line2,latest_tweet,youtube_video, created FROM signature_main WHERE signature_id = ' . $id;
            $this->dashboard_model->customQuery($insert_query);

            $insert_query1 = 'INSERT INTO signature_socials (signature_id, social_icons_id, url, created)
SELECT ' . $new_id . ', social_icons_id, url, created FROM signature_socials WHERE signature_id = ' . $id;
            $this->dashboard_model->customQuery($insert_query1);

            $insert_query2 = 'INSERT INTO signatures_banners (signature_id, show_banner, banner , banner_url, created)
SELECT ' . $new_id . ', show_banner, banner , banner_url, created FROM signatures_banners WHERE signature_id = ' . $id;
            $this->dashboard_model->customQuery($insert_query2);

            $insert_query3 = 'INSERT INTO signatures_disclaimers (signature_id, show_disclaimer, disclaimer , created)
SELECT ' . $new_id . ', show_disclaimer, disclaimer , created FROM signatures_disclaimers WHERE signature_id = ' . $id;
            $this->dashboard_model->customQuery($insert_query3);

            $insert_query4 = 'INSERT INTO signature_style (signature_id, theme_id, text_color, p_text_color, link_color, font_style,fontsize,	social_icon_set_id, iconsize, created)
SELECT ' . $new_id . ',  theme_id, text_color, p_text_color, link_color, font_style,fontsize,	social_icon_set_id, iconsize, created FROM signature_style WHERE signature_id = ' . $id;
            $this->dashboard_model->customQuery($insert_query4);

            $insert_query5 = 'INSERT INTO signature_apps (signature_id, appstore_link, googleplaytore_link, amazon_link, created)
SELECT ' . $new_id . ', appstore_link, googleplaytore_link, amazon_link, created FROM signature_apps WHERE signature_id = ' . $id;
            $this->dashboard_model->customQuery($insert_query5);
            $filename = 'signature-' . $new_id . '.png';
            copy(SIGNATURE_IMAGES . 'signature-' . $id . '.png', SIGNATURE_IMAGES . $filename);
            $this->session->set_flashdata('success', 'Signature copied successfully');
            redirect('user/dashboard');
        } else {
            show_404();
        }
    }

    /**
     * Copy Custom Email signature
     * @author Rahul
     * @param int $id
     */
    public function copy_custom($id = NULL) {
        if (is_numeric($id)) {
            $user_id = $this->session->userdata('htmlsig_user')['id'];
            $signature_arr = array('user_id' => $user_id, 'created' => date('Y-m-d H:i:s'));
            $new_id = $this->dashboard_model->insert('signatures', $signature_arr);
            $insert_query = 'INSERT INTO signature_main (signature_id, name, job_title, email, mobile_number, company_name, website, logo, office_phone, fax, address, address_line2,latest_tweet,youtube_video, is_custom, created)
SELECT ' . $new_id . ', name, job_title, email, mobile_number, company_name, website, logo, office_phone, fax, address, address_line2,latest_tweet,youtube_video, is_custom, created FROM signature_main WHERE signature_id = ' . $id;
            $this->dashboard_model->customQuery($insert_query);


            $filename = '-' . $new_id . '.png';
            copy(CUSTOM_SIGNATURE_IMAGES . "/" . $user_id . "/" . $id . '.png', CUSTOM_SIGNATURE_IMAGES . "/" . $user_id . "/" . $new_id . '.png');
            copy(CUSTOM_SIGNATURE_IMAGES . "/" . $user_id . "/" . $id . '.html', CUSTOM_SIGNATURE_IMAGES . "/" . $user_id . "/" . $new_id . '.html');
            copy(CUSTOM_SIGNATURE_IMAGES . "/" . $user_id . "/" . $id . '_full.html', CUSTOM_SIGNATURE_IMAGES . "/" . $user_id . "/" . $new_id . '_full.html');
            $this->session->set_flashdata('success', 'Signature copied successfully');
            redirect('user/dashboard');
        } else {
            show_404();
        }
    }

    /**
     * Downlaod sign
     * @author Kirti
     * @param int $id
     */
    public function download($id = NULL) {
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
            $newcontent .= $this->load->view('signature_preview', $data, TRUE);
            $newcontent .= '</body></html>';

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
     * Downlaod Custom sign
     * @author Rahul
     * @param int $id
     */
    public function download_custom($id = NULL) {
        if (is_numeric($id)) {
            $custom_signature = $this->dashboard_model->get_custom_signature_by_id($id);
            if($custom_signature['user_id'] == ''){
                $custom_signature['user_id'] = $this->session->userdata('htmlsig_user')['id'];
            }
            $content = file_get_contents(base_url() . CUSTOM_SIGNATURE_IMAGES . "/" . $custom_signature['user_id'] . "/" . $custom_signature['id'] . ".html");


            $newcontent = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html><body>';
            $newcontent .= $content;
            $newcontent .= '</body></html>';

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
     * Delete signature
     * @param int $id
     */
    public function delete($id) {
        $this->dashboard_model->common_insert_update('update', "signatures", array('is_delete' => 1), array('id' => $id));
        $this->session->set_flashdata('success', 'Signature deleted successfully');
        redirect('user/dashboard');
    }

    /**
     * Install signature
     * @author Kirti
     * @param int $id
     */
    public function install_sign($id = NULL) {
        if (is_numeric($id)) {
            $data['social_icons'] = $this->socialicons_model->get_all_social_icons();
            $data['signature'] = $this->dashboard_model->get_signature_by_id($id);
            if ($data['signature']['is_custom'] == 1) {
                $data['custom_signature'] = $this->dashboard_model->get_custom_signature_by_id($id);
            }
            $signature_socials = $this->dashboard_model->get_signature_social_icons($id);
            $new_array = [];
            foreach ($signature_socials as $social_icon) {
                $new_array[$social_icon['social_icons_id']] = $social_icon;
            }
            $data['signature_socials'] = $new_array;
            $data['title'] = 'Install Signature';

            $steps = $this->dashboard_model->get_steps();

            $data['platforms'] = $data['steps'] = array();
            foreach ($steps as $key => $value) {
                if (!array_key_exists($value['guide_platform_id'], $data['platforms'])) {
                    $data['platforms'][$value['guide_platform_id']]['platform'] = $value['platform'];
                    $data['platforms'][$value['guide_platform_id']]['logo'] = $value['logo'];
                }
                if (!array_key_exists($value['guide_platform_id'], $data['steps'])) {
                    $data['steps'][$value['guide_platform_id']][] = $value;
                } else {
                    $data['steps'][$value['guide_platform_id']][] = $value;
                }
            }
            // p($data['steps'], 1);
            $this->template->load('userside', 'user/install-sign', $data);
        } else {
            show_404();
        }
    }

    /**
     * Check twitter is exist or not
     */
    function check_twitter() {
        $twitter_author = $this->common_model->sql_select('usersocial_profiles', 'id', ['where' => ['user_id' => $this->user_id, 'type' => 1, 'is_delete' => 0]]);
        if (!empty($twitter_author)) {
            echo 1;
        } else {
            echo 0;
        }
        exit;
    }

}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */