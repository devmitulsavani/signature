<?php

/**
 * Dashboard Controller - Manage dashboard of user
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Customsignature extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('user/customsignature_model', 'user/authority_model','user/dashboard_model','user/generator_model'));
        $this->user_id = $this->session->userdata('htmlsig_user')['id'];
        $permission = $this->authority_model->check_permission($this->user_id);
        $settings = explode(",", $permission['settings']);
        $this->allowed_signs = $permission['signatures'];
        $this->permission = $settings;
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
            $data['html']  = file_get_contents(base_url().CUSTOM_SIGNATURE_IMAGES."/".$user_id."/".$id."_full.html");        
            $data['signature_id'] = $id;
            $data['generator_id'] = '';
            $data['share_generator'] = '';
            $data['custom_generator'] = '';
        } else {
            //-- permission to check allowed signatures
            $data['title'] = 'Create Signature';
            $data['signature_id'] = '';
            $data['generator_id'] = '';
            $data['share_generator'] = '';
            $data['custom_generator'] = '';
            $data['html'] = '';
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
     * Upload User Media
     * @author Rahul
     */
    public function UploadUserMedia() {
        // echo "<pre>";
        // print_r($_FILES);die;
        //$directory = getcwd().'/uploads/users/'.$user_id."/";
        $user_id = $this->session->userdata('htmlsig_user')['id'];
        $dirname = $user_id;
        $filename =  getcwd().'/uploads/users/'.$user_id."/";

        if (!file_exists($filename)) {
            mkdir(getcwd().'/uploads/users/'. $dirname, 0777);
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
        $directory = getcwd().'/uploads/users/'.$user_id."/";
        $files = glob($directory.'/*.*');
         $sorted_files=array();
        foreach ($files as $file)      
        {
            $sorted_files[$file]=filemtime($file);
        }       
        arsort($sorted_files);
        foreach($sorted_files as $key => $file_data) {
            
            $explode = explode("/", $key);
            $file_name = $explode[count($explode) - 1];
            $images['images'][] = "uploads/users/".$user_id."/".$file_name;
            $images['images_name'][] = $explode[count($explode) - 1];
        }
        if(sizeof($images) > 0){
            $html = '<div class="row">';
            $i = 0;
            foreach($images['images'] as $key => $files){ 
                     $html .='<div class="col-sm-4">
                        <div class="up-block">
                        <div class="up-img flex-box">
                            <img src="'.$files.'" alt="" />
                        </div>
                        <div class="up-overlay">
                            <span class="image-name" style="font-size:11px">'.$images['images_name'][$key].'</span>
                            <a href="javascript:void(0);" onclick="inserisci(this);" class="insert-image insert-img" data-image="'.base_url().$files.'"><i class="fa fa-check-square-o"></i></a>
                            <a href="javascript:void(0);" onclick="deleteimages(this);" class="insert-image delete-img" data-image="'.$files.'"><i class="fa fa-trash-o"></i></a>
                        </div>
                     </div>
                     </div>';
            }
            $html .='</div>';
            echo $html;
        }
    }

    /**
     * Remove User Media
     * @author Rahul
     */
    public function RemoveImages() {
        $user_id = $this->session->userdata('htmlsig_user')['id'];
        $directory = getcwd().'/'.$this->input->post('image');
        unlink($directory);
    }

    /**
     * Get User Media
     * @author Rahul
     */
    public function SaveCustomSignature() {
        // echo "<pre>";
        // print_r($_FILES);die;
        //$directory = getcwd().'/uploads/users/'.$user_id."/";
        $fullhtml =  $this->input->post('html');
        $html =  $this->input->post('email_html');
        $user_id = $this->session->userdata('htmlsig_user')['id'];
        $signature_type =  $this->input->post('signature_type');
        if($this->input->post('signature_id') == ''){
            if($signature_type != 'download-generator'){
                $signature_arr = array('user_id' => $user_id, 'created' => date('Y-m-d H:i:s'));    
                $id = $this->dashboard_model->insert('signatures', $signature_arr);   
                $signature_main['signature_id'] = $id;
                $signature_main['is_custom'] = 1;
                $signature_main['created'] = date('Y-m-d H:i:s');
                $this->dashboard_model->insert('signature_main', $signature_main); 
            }else{
                $signature_arr = array('user_id' => NULL, 'created' => date('Y-m-d H:i:s'));
                $id = $this->dashboard_model->insert('signatures', $signature_arr);    
            }
            
        }else{
            $id = $this->input->post('signature_id');
        }
        

        

        $dirname = $user_id;
        $filename =  getcwd().'/uploads/custom_signatures/'.$user_id."/";
        $signature_name = $id;
        if (!file_exists($filename)) {
            mkdir(getcwd().'/uploads/custom_signatures/'. $dirname, 0777);
        }
        
        $find = array("signature_id=");
        $replace   = array("signature_id=".$id);
        $updated_html = str_replace($find, $replace, $html);

        $myfile = fopen(getcwd()."/uploads/custom_signatures/".$dirname."/".$signature_name."_full.html", "w") or die("Unable to open file!");
        fwrite($myfile, $fullhtml);
        fclose($myfile);




        $myfile = fopen(getcwd()."/uploads/custom_signatures/".$dirname."/".$signature_name.".html", "w") or die("Unable to open file!");
        fwrite($myfile, $updated_html);
        fclose($myfile);

        list($type, $data) = explode(';', $this->input->post('image_data'));
        list(, $data) = explode(',', $this->input->post('image_data'));
        $data = base64_decode($data);
        $image_filename = $signature_name .'.png';
        file_put_contents($filename . $image_filename, $data); 
        echo $id;
    }
     /**
     * Create/Edit custom signature  Generator
     * @author Rahul
     * @param int $id
     */
    public function custom_generator($id = NULL) {
        $user_id = $this->session->userdata('htmlsig_user')['id'];
        if ($id != NULL) {
            $data['title'] = 'Edit Generator';
            $result = $this->generator_model->get_sign_id($id);
            $sig_id = $result['signature_id'];
            $data['html']  = file_get_contents(base_url().CUSTOM_SIGNATURE_IMAGES."/".$user_id."/".$sig_id."_full.html");        
            $data['signature_id'] = $sig_id;
            $data['generator_id'] = $id;
            $data['share_generator'] = '';
            $data['custom_generator'] = '1';

        } else {
            //-- permission to check allowed signatures
            $data['title'] = 'Create Generator';
            $data['signature_id'] = '';
            $data['html'] = '';
            $data['generator_id'] = '';
            $data['share_generator'] = '';
            $data['custom_generator'] = '1';
        }
        //$data['social_icons'] = $this->socialicons_model->get_social_icons();
        $this->template->load('userside', 'user/custom_signature', $data);
    }

    /**
     * Downlaod sign
     * @author Kirti
     * @param int $id
     */
    public function download_generator($gid = NULL) {
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
}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */