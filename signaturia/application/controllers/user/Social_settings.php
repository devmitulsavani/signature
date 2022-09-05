<?php

/**
 * Social Settings Controller - Manage Social networks
 */
class Social_settings extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('user/socialsettings_model'));
        $this->user_id = $this->session->userdata('htmlsig_user')['id'];
        if ($this->user_id != '') {
            $permission = $this->authority_model->check_permission($this->user_id);
            $settings = explode(",", $permission['settings']);
            $this->permission = $settings;
        }
    }

    public function index($encoded_network_id = NULL) {
        $data['title'] = 'Connect Social Networks';
        $networks = $this->get_social_network_by_user($this->user_id);
        if (!empty($encoded_network_id)) {
            $all_network_id = array_column($networks, 'id');
            $network_id = $encoded_network_id;

            if (in_array($network_id, $all_network_id)) {
                $this->socialsettings_model->update_record('usersocial_profiles', ['user_id' => $this->user_id, 'id' => $network_id], ['is_delete' => '1']);
                $this->session->set_flashdata('success', ' Social network successfully removed.');
            } else {
                $this->session->set_flashdata('error', 'Unable to remove social network. Please try later.');
            }
            redirect('social_settings/');
        }
        $data['networks'] = [];
        foreach ($networks as $k => $v)
            $data['networks'][$v['type']] = $v;


        ksort($data['networks']);
        $this->template->load('userside', 'user/social-settings', $data);
    }

    private function get_social_network_by_user($user_id) {
        $this->db->select('*');
        $this->db->from('usersocial_profiles');
        $this->db->where('user_id', $user_id);
        $this->db->where('is_delete', '0');
        return $this->db->get()->result_array();
    }

    public function connect($network) {
        $all_network = ['google', 'facebook', 'twitter', 'linkedin', 'instagram', 'pinterest'];
        if (!in_array($network, $all_network))
            show_404();

        $this->session->set_userdata('assign_network_to_project', ['network' => $network]);
        redirect($network . '/connect');
    }

    public function remove($encoded_network_id) {
        $network_id = decode($encoded_network_id);
    }

}
