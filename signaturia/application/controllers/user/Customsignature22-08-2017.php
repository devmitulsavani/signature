<?php

/**
 * Dashboard Controller - Manage dashboard of user
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Customsignature extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('user/customsignature_model'));
        $this->user_id = $this->session->userdata('htmlsig_user')['id'];
        // $permission = $this->authority_model->check_permission($this->user_id);
        // $settings = explode(",", $permission['settings']);
        // $this->allowed_signs = $permission['signatures'];
        // $this->permission = $settings;
    }

    /**
     * Create/Edit custom signature  
     * @author Rahul
     * @param int $id
     */
    public function custom_signature($id = NULL) {
        $user_id = $this->session->userdata('htmlsig_user')['id'];
        if ($id != NULL) {
            $data['title'] = 'Edit Signature';
        } else {
            //-- permission to check allowed signatures
            $data['title'] = 'Create Signature';
        }
        //$data['social_icons'] = $this->socialicons_model->get_social_icons();
        $this->template->load('userside', 'user/custom_signature', $data);
    }

    public function custom_signature_new($id = NULL) {
        $user_id = $this->session->userdata('htmlsig_user')['id'];
        if ($id != NULL) {
            $data['title'] = 'Edit Signature';
        } else {
            //-- permission to check allowed signatures
            $data['title'] = 'Create Signature';
        }
        //$data['social_icons'] = $this->socialicons_model->get_social_icons();
        $this->template->load('userside', 'user/custom_signature', $data);
    }
    
    /**
     * Get Social Icons
     * @author Rahul
     * @param int $id
     */
    public function GetSocialIcons($id = NULL) {
        $social_icons = $this->customsignature_model->get_social_icons($this->input->post('set'));
        echo json_encode($social_icons);
    }

    /**
     * Get User Media
     * @author Rahul
     */
    public function UploadUserMedia() {
        // echo "<pre>";
        // print_r($_FILES);die;
        //$directory = getcwd().'/uploads/users/'.$user_id."/";
        $user_id = $this->session->userdata('htmlsig_user')['id'];
        $dirname = $user_id;
        $filename = getcwd() . '/uploads/users/' . $user_id . "/";

        if (!file_exists($filename)) {
            mkdir(getcwd() . '/uploads/users/' . $dirname, 0777);
            echo "The directory $dirname was successfully created.";
            exit;
        } else {
            echo "The directory $dirname exists.";
        }
        $img_array = array('png', 'jpeg', 'jpg', 'PNG', 'JPEG', 'JPG');
        $exts = explode(".", $_FILES['nomefile']['name']);
        $name = $exts[0] . time() . "." . end($exts);
        $config['upload_path'] = $filename;
        $config['allowed_types'] = implode("|", $img_array);
        $config['max_size'] = '2048';
        $config['file_name'] = $name;
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('nomefile')) {
            $flag1 = 1;
            $data['my_logo_validation'] = $this->upload->display_errors();
        } else {
            $file_info = $this->upload->data();
            $signature_logo = $file_info['file_name'];
        }
    }

    /**
     * Get User Media
     * @author Rahul
     */
    public function GetUserMedia() {
        $images = array();
        $user_id = $this->session->userdata('htmlsig_user')['id'];
        $directory = getcwd() . '/uploads/users/' . $user_id . "/";
        foreach (glob($directory . '/*.*') as $file) {
            $explode = explode("/", $file);
            $file_name = $explode[count($explode) - 1];
            $images['images'][] = "uploads/users/" . $user_id . "/" . $file_name;
            $images['images_name'][] = $explode[count($explode) - 1];
        }
        if (sizeof($images) > 0) {
            $html = '<table class="table table-bordered" width="100%">';
            $i = 0;
            foreach ($images['images'] as $key => $files) {
                if ($i == 0) {
                    $html .= '<tr>';
                }
                $html .= '<td style="background:#ffffff;margin:5px">
                        <center>
                        <img src="' . $files . '" width="100" height="100" border=0 >
                        </center>

                        <span style="font-size:11px">' . $images['images_name'][$key] . '</span>
                        <br>
                        <a href="javascript:void(0);" onclick="inserisci(this);" class="insert-image" data-image="' . base_url().$files . '"><span class="glyphicon glyphicon-download"></span></a>
                        <a href="javascript:void(0);" onclick="deleteimages(this);" class="insert-image" data-image="' . base_url().$files . '"><span class="glyphicon glyphicon-remove"></span></a>
                        <br>

                     </td>';
                if ($i == 3) {
                    $i = 0;
                    $html .= '</tr>';
                }
                $i++;
            }
            $html .= '</table>';
            echo $html;
        }
    }

    /**
     * Remove User Media
     * @author Rahul
     */
    public function RemoveImages() {
        $user_id = $this->session->userdata('htmlsig_user')['id'];
        $directory = getcwd() . '/' . $this->input->post('image');
        unlink($directory);
    }

}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */