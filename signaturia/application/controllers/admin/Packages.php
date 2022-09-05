<?php

/**
 * Packages Controller - Manage packages
 * @author Kamlesh pokiya
 */
defined('BASEPATH') or exit('No direct script access allowed');

class Packages extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/packages_model');
    }

    public function index()
    {
        $data['title'] = 'Signaturia | Packages';
        $this->template->load('admin', 'admin/packages/index', $data);
    }

    public function list_packages()
    {
        $select = 'id, @a:=@a+1 AS test_id, title, monthly_price, yearly_price';
        $final['recordsTotal'] = $this->packages_model->get_result('count');
        $keyword = $this->input->get('search');
        $final['redraw'] = 1;
        $final['recordsFiltered'] = $final['recordsTotal'];
        $final['data'] = $this->packages_model->get_result('result');
        echo json_encode($final);
    }

    public function add($id = null)
    {
        if (is_numeric($id)) {
            $data['title'] = 'Signaturia | Edit packages';
            $data['heading'] = 'Edit package';
            $data['package_data'] = $this->packages_model->get_row($id);
            $package_img = $data['package_data']['image'];
            if ($data['package_data']['title'] != $this->input->post('title')) {
                $this->form_validation->set_rules('title', 'title', 'trim|required|is_unique[packages.title]', array('is_unique' => 'Package already exist! Please try with another.'));
            } else {
                $this->form_validation->set_rules('title', 'title', 'trim|required');
            }
        } else {
            $package_img = '';
            $data['title'] = 'Signaturia | Add packages';
            $data['heading'] = 'Add package';
            $this->form_validation->set_rules('title', 'title', 'trim|required|is_unique[packages.title]', array('is_unique' => 'Package already exist! Please try with another.'));
        }
        if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_error_delimiters('<div class="alert bg-danger alert-styled-left bootstrap_alert"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
        } else {
            $post_data = $this->input->post(null);

            require_once APPPATH . "third_party/stripe/init.php";
            $this->load->model('admin/charge_model');
            $data['payment_settings'] = $this->charge_model->get_settings();
            $flag = 0;
            if ($_FILES['image']['name'] != '') {
                $img_array = array('png', 'jpeg', 'jpg', 'PNG', 'JPEG', 'JPG');
                $exts = explode(".", $_FILES['image']['name']);
                $name = $exts[0] . time() . "." . end($exts);

                $config['upload_path'] = PACKAGE_IMAGES;
                $config['allowed_types'] = implode("|", $img_array);
                $config['max_size'] = '2048';
                $config['file_name'] = $name;

                $this->upload->initialize($config);

                if (!$this->upload->do_upload('image')) {
                    $flag = 1;
                    $data['package_img_validation'] = $this->upload->display_errors();
                } else {
                    $file_info = $this->upload->data();
                    if (is_numeric($id)) {

                        #--- If icon is bieng edited then remove previous uploaded icon
                        unlink(PACKAGE_IMAGES . $package_img);
                    }
                    $package_img = $file_info['file_name'];
                }
            }
            if ($flag != 1) {
                $post_data['image'] = $package_img;
                $new_price_with_discount_yearly = $new_price_with_discount_monthly = 0;
                if ($post_data['hidden'] == 1) {
                    $post_data['monthly_price'] = 0;
                    $post_data['yearly_price'] = 0;
                    $post_data['type'] = 1;
                } else {
                    $post_data['type'] = 0;
                }

                if ($post_data['hidden_discount'] != 1) {
                    $post_data['discount'] = 0;
                    $post_data['monthly_discount_price'] = 0;
                    $post_data['yearly_discount_price'] = 0;
                } else {
                    if ($post_data['monthly_discount_price'] <= 0 && $post_data['yearly_discount_price'] <= 0) {
                        $post_data['monthly_discount_price'] = 0;
                        $post_data['yearly_discount_price'] = 0;
                        $post_data['discount'] = 0;
                    } else {
                        $post_data['discount'] = 1;
                        $new_price_with_discount_yearly = $post_data['yearly_price'] - ($post_data['yearly_price'] * $post_data['yearly_discount_price']) / 100;
                        $new_price_with_discount_monthly = $post_data['monthly_price'] - ($post_data['monthly_price'] * $post_data['monthly_discount_price']) / 100;
                    }
                }

                $yearly_price = ($new_price_with_discount_yearly == 0) ? $post_data['monthly_price'] : $new_price_with_discount_yearly;
                $monthly_price = ($new_price_with_discount_monthly == 0) ? $post_data['monthly_price'] : $new_price_with_discount_monthly;

                unset($post_data['is_free']);
                unset($post_data['have_discount']);
                unset($post_data['hidden']);
                unset($post_data['hidden_discount']);

                if (is_numeric($id)) {
                    $this->packages_model->update_record('packages', 'id = ' . $id, $post_data);
                    $this->session->set_flashdata('success', 'Package successfully updated!');
                    \Stripe\Stripe::setApiKey($data['payment_settings']['secret_key']); //Replace with your Secret Key

                    $plan = \Stripe\Plan::retrieve($id . '-monthly');
                    $plan->delete();
                    $plan = \Stripe\Plan::retrieve($id . '-yearly');
                    $plan->delete();

                    \Stripe\Stripe::setApiKey($data['payment_settings']['secret_key']); //Replace with your Secret Key
                    $charge = \Stripe\Plan::create(array(
                        "name" => $post_data['title'],
                        "id" => $id . "-monthly",
                        "interval" => "month",
                        "currency" => "usd",
                        "amount" => $monthly_price * 100,
                    ));

                    $charge = \Stripe\Plan::create(array(
                        "name" => $post_data['title'],
                        "id" => $id . "-yearly",
                        "interval" => "year",
                        "currency" => "usd",
                        "amount" => $yearly_price * 100,
                    ));
                } else {
                    unset($post_data['hidden']);

                    $post_data['created'] = @date('Y-m-d H:i:s');
                    $this->packages_model->insert('packages', $post_data);
                    $insert_id = $this->db->insert_id();
                    $this->session->set_flashdata('success', 'Package successfully added!');

                    \Stripe\Stripe::setApiKey($data['payment_settings']['secret_key']); //Replace with your Secret Key
                    $charge = \Stripe\Plan::create(array(
                        "name" => $post_data['title'],
                        "id" => $insert_id . "-monthly",
                        "interval" => "month",
                        "currency" => "usd",
                        "amount" => $monthly_price * 100,
                    ));

                    $charge = \Stripe\Plan::create(array(
                        "name" => $post_data['title'],
                        "id" => $insert_id . "-yearly",
                        "interval" => "year",
                        "currency" => "usd",
                        "amount" => $yearly_price * 100,
                    ));
                }
                redirect('admin/packages');
            }
        }
        $this->template->load('admin', 'admin/packages/manage', $data);
    }

    public function delete($id = null)
    {
        $post_data['is_delete'] = 1;
        $this->packages_model->update_record('packages', 'id = ' . $id, $post_data);
        $this->session->set_flashdata('success', 'Package successfully deleted!');
        redirect('admin/packages');
    }

    public function settings($id)
    {
        $data['package_data'] = $this->packages_model->get_package_setting_row($id);
        if ($data['package_data']) {
            $data['settings'] = $data['package_data']['settings'];
            $data['title'] = 'Signaturia | Edit ' . $data['package_data']['title'] . ' package setting';
            $data['heading'] = 'Edit ' . $data['package_data']['title'] . ' package setting';
            $this->form_validation->set_rules('tabs[]', 'tabs', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                $this->form_validation->set_error_delimiters('<div class="alert bg-danger alert-styled-left bootstrap_alert"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
            } else {
                $stat = ($this->input->post('allow_stat') == 1) ? 1 : 0;
                $generator = ($this->input->post('allow_generator') == 1) ? 1 : 0;
                $custom_signature = ($this->input->post('allow_custom_signature') == 1) ? 1 : 0;
                $signatures = $this->input->post('signatures');
                $comma = implode(',', $this->input->post('tabs'));
                $query = 'INSERT INTO packages_settings (package_id, settings, stat, generator, signatures,custom_signature, created) VALUES(' . $data['package_data']['id'] . ', "' . $comma . '",' . $stat . ',' . $generator . ',' . $custom_signature . ',' . $signatures . ', NOW()) ON DUPLICATE KEY UPDATE settings = "' . $comma . '", stat=' . $stat . ', generator =' . $generator . ',custom_signature =' . $custom_signature . ', signatures =' . $signatures;
                $this->packages_model->custom_query($query);
                $this->session->set_flashdata('success', 'Tabs successfully updated!');
                redirect('admin/packages/settings/' . $data['package_data']['id']);
            }
            $this->template->load('admin', 'admin/packages/settings', $data);
        } else {
            show_404();
        }
    }
}

/* End of file Packages.php */
/* Location: ./application/controllers/admin/Packages.php */