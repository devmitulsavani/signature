<?php

require APPPATH . 'vendor/Facebook/autoload.php';

class Fb extends My_Controller {

    private $fb_secret = [
        'app_id' => '1804396313107006',
        'app_secret' => '0fba39cb967816eac1b694fc4bb0d2ef',
        'default_graph_version' => 'v2.7',
    ];
//    private $fb_secret = [
//        'app_id' => '683046148540242',
//        'app_secret' => '09c69a0bbadb7c74cf3705ccdc1fa309',
//        'default_graph_version' => 'v2.8',
//    ];



    private $callback_url = '';
    private $facebook = NULL;

    public function __construct() {

        parent::__construct();

        if (!$this->is_loggedin)
            redirect();

        $this->load->model('social_media_model');
        $this->callback_url = base_url('facebook/callback');
        $this->facebook = new Facebook\Facebook($this->fb_secret);
    }

    public function connect() {
        $helper = $this->facebook->getRedirectLoginHelper();

        $scope = [
            'business_management',
            'email',
            'user_likes',
            'public_profile',
            'user_friends',
            'manage_pages',
            'publish_pages',
            'publish_actions',
            'user_photos',
            'user_managed_groups'
        ];

        $url = $helper->getLoginUrl($this->callback_url, $scope);

        redirect($url);
    }

    public function callback() {

        $helper = $this->facebook->getRedirectLoginHelper();

        try {
            $accessToken = $helper->getAccessToken();
        } catch (Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch (Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        if (!isset($accessToken)) {
            if ($helper->getError()) {
                header('HTTP/1.0 401 Unauthorized');
                echo "Error: " . $helper->getError() . "\n";
                echo "Error Code: " . $helper->getErrorCode() . "\n";
                echo "Error Reason: " . $helper->getErrorReason() . "\n";
                echo "Error Description: " . $helper->getErrorDescription() . "\n";
            } else {
                header('HTTP/1.0 400 Bad Request');
                echo 'Bad request';
            }
            exit;
        }

        $oAuth2Client = $this->facebook->getOAuth2Client();
        $tokenMetadata = $oAuth2Client->debugToken($accessToken);

        $tokenMetadata->validateAppId($this->fb_secret['app_id']);

        $tokenMetadata->validateExpiration();

        if (!$accessToken->isLongLived()) {

            try {
                $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken, $this->fb_secret);
            } catch (Facebook\Exceptions\FacebookSDKException $e) {
                echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
                exit;
            }
        }

        $token = $accessToken->getValue();
        $expiry_time = $accessToken->getExpiresAt();

        if (!empty($expiry_time)) {
            $expiry_time = $expiry_time->format('Y-m-d H:i:00');
        }

        try {
            $response = $this->facebook->get('/me?fields=id,name,email,first_name,last_name,birthday,education,gender,location,picture.type(large)', $token);
        } catch (Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch (Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        $user = $response->getGraphUser();

        $data = [
            'user_id' => $this->session->userdata('id'),
            'account_name' => $user->getFirstName() . ' ' . $user->getLastName(),
            'image_url' => $user->getPicture()->getUrl(),
            'social_id' => $user->getId(),
            'type' => 1,
            'access_token' => $token,
            'access_token_timeout' => "'" . $expiry_time . "'",
        ];

        $this->social_media_model->manage_network($data, false);
    }

    public function get_pages($encoded_network_id = '') {

        $network_id = decode($encoded_network_id);

        $network = $this->query->select('connect_network', NULL, ['where' => ['id' => $network_id]], 1);

        if (empty($network))
            show_404();

        $response = $this->facebook->get('/' . $network['social_id'] . '/accounts', $network['access_token']);
        $response = $response->getBody();
        $response = json_decode($response, true);
        $this->data['network'] = $network;
        $this->data['pages'] = $response['data'];

        $this->load->view('front_end/settings/ajax_load_facebook_page', $this->data);
    }

    public function get_groups($encoded_network_id = '') {

        $network_id = decode($encoded_network_id);

        $network = $this->query->select('connect_network', NULL, ['where' => ['id' => $network_id]], 1);

        if (empty($network))
            show_404();

        $response = $this->facebook->get('/' . $network['social_id'] . '/groups', $network['access_token']);
        $response = $response->getBody();
        $response = json_decode($response, true);

        $this->data['network'] = $network;
        $this->data['groups'] = $response['data'];

        $this->load->view('front_end/settings/ajax_load_facebook_group', $this->data);
    }

    public function change_group() {

        $this->output->set_content_type('json');

        $network_id = decode($this->input->post('network_id'));
        $id = $this->input->post('id');
        $name = $this->input->post('name');

        $this->db->where('id', $network_id);

        $this->db->set('board_or_group', $name);
        $this->db->set('board_or_group_id', $id);

        $this->db->set('page_name', '');
        $this->db->set('page_id', '');
        $this->db->set('page_token', '');

        $this->db->update('connect_network');

        echo json_encode(['status' => 1, 'name' => $name, 'network_id' => $network_id]);
    }

    public function change_page() {
        $this->output->set_content_type('json');

        $network_id = decode($this->input->post('network_id'));

        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $token = $this->input->post('token');

        $this->db->where('id', $network_id);

        $this->db->set('page_name', $name);
        $this->db->set('page_id', $id);
        $this->db->set('page_token', $token);

        $this->db->set('board_or_group', '');
        $this->db->set('board_or_group_id', '');

        $this->db->update('connect_network');

        echo json_encode(['status' => 1, 'name' => $name, 'page_id' => $id, 'page_token' => $token, 'network_id' => $network_id]);
    }

    /**
     * Disconnect facebook group or page
     * @author KU
     */
    public function disconnect_fb() {
        $connect_newtowrd_id = $this->input->post('network_id');
        $type = $this->input->post('type');
        $network_details = $this->get_connet_network($connect_newtowrd_id);
        if ($network_details) {
            if ($type == 1) {
                $update_arr = ['page_name' => NULL, 'page_id' => NULL, 'page_token' => NULL];
            } else {
                $update_arr = ['board_or_group' => '', 'board_or_group_id' => ''];
            }
            $this->db->where(['id' => $connect_newtowrd_id]);
            $this->db->update('connect_network', $update_arr);
            echo json_encode(['status' => 1]);
        } else {
            echo json_encode(['status' => 0]);
        }
    }

    /**
     * Return connected social network by its id
     * @param int $id
     * @author KU
     */
    private function get_connet_network($id) {
        $this->db->where(['id' => $id, 'is_deleted' => 0]);
        $query = $this->db->get('connect_network');
        return $query->row_array();
    }

}
