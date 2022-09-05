<?php

class Twitter extends My_Controller {

    private $twitter = [
//        'consumer_key' => 'hRhqLjiJfwOgm9mk4s1oJolsr',
//        'consumer_secret' => '4Ccuy2j60I3xzgKQLeGybn1VmwTHlEIgdA6joi2Hj7TBxoIlUT',
        'consumer_key' => 'd0u89pn9Deq75xWjsy6SKst8T',
        'consumer_secret' => 'PxbEqzHxwPdTMUaPuZ1wIQYOqyMSt41rsigf4vbN5SeXzoImbx'
    ];

    public function __construct() {
        parent::__construct();
        $this->twitter['oauth_callback'] = site_url('twitter/callback');
        $this->user_id = $this->session->userdata('htmlsig_user')['id'];
        $this->load->library('twconnect', $this->twitter);
        $this->load->model('social_media_model');
    }

    public function connect() {
        $this->twconnect->twredirect();
    }

    public function callback() {

        $this->twconnect->twprocess_callback();
        $this->twconnect->twaccount_verify_credentials();

        if (empty($this->twconnect->tw_access_token)) {
            header('HTTP/1.0 400 Bad Request');
            echo 'Bad request';
            exit(0);
        }

        $data = [
            'user_id' => $this->user_id,
            'account_name' => $this->twconnect->tw_user_info->name,
            'image_url' => $this->twconnect->tw_user_info->profile_image_url_https,
            'social_id' => $this->twconnect->tw_user_info->id,
            'type' => 1,
            'access_token' => $this->twconnect->tw_access_token['oauth_token'],
            'secret' => $this->twconnect->tw_access_token['oauth_token_secret'],
        ];

        $this->social_media_model->manage_network($data);
    }

    public function get_latest_tweet() {
        header('Access-Control-Allow-Origin: *');
        $html = '';
        if ($this->input->get('id') != '') {
            $user_id = base64_decode($this->input->get('id'));
            $user = $this->social_media_model->get_social_settings($user_id, 1);
            $this->load->library('twconnect', $this->twitter);
            $this->twconnect->tw_access_token['oauth_token'] = $user['access_token'];
            $this->twconnect->tw_access_token['oauth_token_secret'] = $user['secret'];
            $this->twconnect->tw_access_token['oauth_token'] = '866699712413392896-PSD5R7aVliCoB5lrrker1wSvqFWdNW3';
            $this->twconnect->tw_access_token['oauth_token_secret'] = 'LeM0v0GPFSmj2XD65kwy98eyUEiewFNzZLyF1MNbdm5Dg';
            $twitteruser = 'htmlsignature';
            $this->twconnect->tw_status = 'verified';
            $tweets = $this->twconnect->tw_get("statuses/user_timeline.json?screen_name=" . $twitteruser . "&count=1");
            $html = '';
            if (!empty($tweets)) {
                $tweets = $tweets[0];
                $tweets = (array) $tweets;
                $html = '<img src="' . base_url() . 'assets/images/twitter.png" style="float: left; margin-right: 5px; margin-top: 3px;"> '
                        . '<a href="https://twitter.com/' . $twitteruser . '" target="_blank" style="text-decoration:none;color:#55acee;font-size:14px;font-family:Arial, Helvetica, sans-serif;">Latest Tweet:</a> <span style="color:#a0a0a0;font-size:14px;font-family:Arial;font-weight:normal">' . $tweets['text'] . '</span>';
            }
        }
        echo $html;
    }

}
