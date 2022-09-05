<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Click extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('click_model');
    }

    public function index() {
        $data['title'] = 'Welcome to Signaturia';
        $signature_id = $this->input->get_post('signature_id');
        $ident = $this->input->get_post('ident');
        $clickable = $this->input->get_post('clickable');
        // $this->template->load('frontend', 'click-view', $data);
        extract($this->input->get(null));
        $result = $this->click_model->get_signature_detail($signature_id);
        if ($result) {
            if ($clickable == 'social') {
                $result_valid_social = $this->click_model->check_valid_social($ident, $signature_id);
                if ($result_valid_social) {
                    $query = 'INSERT INTO stats_socials (signature_id, social_id, click_count) VALUES(' . $signature_id . ', ' . $ident . ', 1) ON DUPLICATE KEY UPDATE click_count = click_count + 1';
                    $this->click_model->custom_query($query);
                    redirect($result_valid_social['url']);
                } else {
                    show_404();
                }
            } elseif ($clickable == 'personal') {
                if (in_array($ident, array('website', 'banner', 'email'))) {
                    $result_valid_social = $this->click_model->check_valid_personal($signature_id);
                    if ($result_valid_social) {
                        if ($ident == 'website') {
                            $query = 'INSERT INTO stats_personal (signature_id, website_count) VALUES(' . $signature_id . ', 1) ON DUPLICATE KEY UPDATE website_count = website_count + 1';
                            $this->click_model->custom_query($query);
                            redirect($result_valid_social['website']);
                        } elseif ($ident == 'email') {
                            $query = 'INSERT INTO stats_personal (signature_id, email_count) VALUES(' . $signature_id . ', 1) ON DUPLICATE KEY UPDATE email_count = email_count + 1';
                            $this->click_model->custom_query($query);
                            header("Location: mailto:" . $result_valid_social['email']);
                        } elseif ($ident == 'banner') {
                            
                        }
                    }
                } else {
                    show_404();
                }
            } elseif ($clickable == 'banner') {
                $result_valid_banner = $this->click_model->check_valid_banner($signature_id);
                if ($result_valid_banner) {
                    $query = 'INSERT INTO stats_banners (signature_id, banner_id, click_count) VALUES(' . $signature_id . ', ' . $result_valid_banner['id'] . ', 1) ON DUPLICATE KEY UPDATE click_count = click_count + 1';
                    $this->click_model->custom_query($query);
                    redirect($result_valid_banner['banner_url']);
                } else {
                    show_404();
                }
            } elseif ($clickable == 'app') {
                $result_valid_app = $this->click_model->check_valid_app($ident, $signature_id);
                if ($result_valid_app) {
                    $query = 'INSERT INTO stats_personal (signature_id, ' . $ident . '_count) VALUES(' . $signature_id . ', 1) ON DUPLICATE KEY UPDATE ' . $ident . '_count = ' . $ident . '_count + 1';
                    $this->click_model->custom_query($query);
                    redirect($result_valid_app[$ident . '_link'], 'refresh');
                } else {
                    show_404();
                }
            }
        }
    }
}
