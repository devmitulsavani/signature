<?php

class Social_media_model extends CI_Model {

    private $type = [
        1 => 'twitter',
        2 => 'facebook',
        3 => 'pinterest',
        4 => 'linkedin',
        5 => 'instagram',
        6 => 'google',
    ];

    public function is_network_exist($type, $social_id, $user_id) {
        $this->db->select('*');
        $this->db->from('usersocial_profiles');
        $this->db->where('type', $type);
        $this->db->where('social_id', $social_id);
        $this->db->where('is_delete', '0');
        if ($user_id)
            $this->db->where('user_id', $user_id);
        $this->db->limit(1);
        $result = $this->db->get()->row_array();
        if (empty($result))
            return false;
        return $result;
    }

    public function save_network($value, $escape) {
        if (!$escape) {
            $escaped_value = $this->db->escape($value);
            if (isset($value['token_timeout']))
                $escaped_value['token_timeout'] = $value['token_timeout'];
            $value = $escaped_value;
        }

        $this->db->insert('usersocial_profiles', $value, $escape);
        return $this->db->insert_id();
    }

    public function update_network($data, $escape) {
        $user_id = NULL;
        $social_id = NULL;
        if (isset($data['user_id'])) {
            $user_id = $data['user_id'];
            $this->db->where('user_id', $data['user_id']);
            unset($data['user_id']);
        }

        if (isset($data['social_id'])) {
            $social_id = $data['social_id'];
            $this->db->where('social_id', $data['social_id']);
            unset($data['user_id']);
            if (!$escape) {
                foreach ($data as $k => $v) {
                    if ($k == 'access_token_timeout')
                        $this->db->set($k, $v, false);
                    else
                        $this->db->set($k, $v);
                }
            }else {
                $this->db->set($data);
            }

            $this->db->update('usersocial_profiles');

            if (!empty($user_id) && !empty($social_id)) {
                $this->db->select('*');
                $this->db->from('usersocial_profiles');
                $this->db->where('user_id', $user_id);
                $this->db->where('social_id', $social_id);
                $result = $this->db->get()->row_array();

                if (!empty($result['id']))
                    return $result['id'];
            }
        }

        return false;
    }

    /* Save or update usersocial_profiles data */

    public function manage_network($data, $escape = true) {

        $this->db->trans_begin();

        $project_network = $this->session->userdata('assign_network_to_project');
        $this->session->unset_userdata('assign_network_to_project');

        $network = $this->is_network_exist($data['type'], $data['social_id'], $data['user_id']);

        # If network already exist update it.
        if (!empty($network)) {

            $this->update_network($data, $escape);

            $this->session->set_flashdata('success', 'Your existing ' . $this->type[$data['type']] . ' account detail has been updated.');

            if (!empty($project_network) && !empty($project_network['network']))
                redirect('social_settings/' . $project_network['project_id']);

            redirect('social_settings/');
        } else {

            $this->save_network($data, $escape);

            $this->session->set_flashdata('success', 'Your ' . $this->type[$data['type']] . ' account has been successfully connected.');

            $redirect_to_connect = false;

            if (!empty($project_network) && !empty($project_network['network'])) {
                $this->session->set_flashdata('success', 'The ' . $project_network['network'] . ' account has successfully been connected to this project.');
                $redirect_to_connect = true;
            }

            $redirect = 'social_settings';

            if ($redirect_to_connect)
                $redirect = 'social_settings/';

            $this->db->trans_complete();

            if ($this->db->trans_status() === TRUE) {
                $this->db->trans_commit();
            } else {
                $this->db->trans_rollback();
                $this->session->set_flashdata('error', 'Unable to add connection. Please try later.');
            }

            redirect($redirect);
        }
    }

    public function curl($request = []) {

        $responce = ['status_code' => 0, 'error' => '', 'header' => [], 'body' => []];

        if (empty($request['url'])) {
            $responce['error'] = 'Invalid URL';
            return $responce;
        }

        if (empty($request['method']))
            $request['method'] = 'GET';

        $params = '';
        if (!empty($request['get_params']) && is_array($request['get_params']))
            $params = '?' . http_build_query($request['get_params']);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $request['url'] . $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        if (!empty($request['header']) && is_array($request['header']))
            curl_setopt($ch, CURLOPT_HTTPHEADER, $request['header']);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_HEADER, true);

        if ($request['method'] == 'POST')
            curl_setopt($ch, CURLOPT_POST, true);

        if (!empty($request['post_params'])) {
            if (is_array($request['post_params']))
                $request['post_params'] = http_build_query($request['post_params']);

            curl_setopt($ch, CURLOPT_POSTFIELDS, $request['post_params']);
        }

        if (!empty($request['request_body']))
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($request['request_body']));


        $output = curl_exec($ch);

        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $responce['status_code'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $responce['header'] = substr($output, 0, $header_size);
        $header = explode("\r\n", $responce['header']);
        $keyed_header = [];

        foreach ($header as $v) {
            $parts = explode(':', $v, 2);
            if (
                    isset($parts[1]))
                $keyed_header[strtolower(trim($parts[0]))] = trim($parts[1]);
        }

        $responce['header'] = $keyed_header;
        $responce['body'] = substr($output, $header_size);

        curl_close($ch);

        return $responce;
    }

    public function get_all_networks() {
        $this->db->select('*');
        $this->db->from('usersocial_profiles');
        $this->db->where('user_id', $this->session->userdata('id'));
        $this->db->where('is_delete', '0');
        return $this->db->get()->result_array();
    }

    /**
     * Return social settings saved by user
     * @param int $user_id
     * @param int $type
     */
    public function get_social_settings($user_id, $type) {
        $this->db->where(['user_id' => $user_id, 'type' => $type, 'is_delete' => 0]);
        return $this->db->get('usersocial_profiles')->row_array();
    }

}
