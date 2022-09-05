<?php
require_once APPPATH . "third_party/stripe/init.php";

defined('BASEPATH') OR exit('No direct script access allowed');

class Offers extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model(array('admin/offers_model', 'charge_model'));
	}

	public function index() {
		$data['title'] = 'Signaturia | Offers';
		$this->template->load('admin', 'admin/offers/index', $data);
	}

	public function get_offers() {
		$final['recordsTotal'] = $this->offers_model->get_all_offers('count');
		$final['redraw'] = 1;
		$final['recordsFiltered'] = $final['recordsTotal'];
		$users = $this->offers_model->get_all_offers();
		$start = $this->input->get('start') + 1;

		foreach ($users as $key => $val) {
			$users[$key] = $val;
			$users[$key]['sr_no'] = $start++;
			$users[$key]['created'] = date('d M Y', strtotime($val['created_date']));
		}

		$final['data'] = $users;
		echo json_encode($final);
	}

	public function add($id = null) {
		if(is_numeric($id)) {
			$where = array('where' => 
				array(
					'o.id' => $id
				)
			);
			$option = array(
				'single' => TRUE,
				'join' => array(
					array(
						'table' => TBL_COUPONS.' c',
						'condition' => 'c.id = o.coupon_id'
					)
				)
			);
			$data['offer_data'] = $this->common_model->sql_select(TBL_OFFERS.' o', 'o.*, c.start_datetime, c.end_datetime, c.coupon_price, c.id AS coupon_id, c.coupon_code', $where, $option);

			$data['title'] = 'Signaturia | Edit Offer';
		} else {
			$data['title'] = 'Signaturia | Add Offer';	
		}

		$data['packages'] = $this->offers_model->get_all_details(TBL_PACKAGES, array('is_delete' => 0, 'type' => 0))->result_array();
		$this->form_validation->set_rules('coupon_price', 'coupon price', 'trim|required');
		$this->form_validation->set_rules('coupon_schedule', 'coupon schedule', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_error_delimiters('<div class="alert bg-danger alert-styled-left bootstrap_alert"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
        } else {
        	$data['payment_settings'] = $this->charge_model->get_settings();
        	$post_data = $this->input->post(null);
        	extract($post_data);
			$explode = explode(' - ', $coupon_schedule);
			$insert_data = array(
				'coupon_price' => $coupon_price,
				'start_datetime' => $explode[0],
				'end_datetime' => $explode[1],
				'coupon_type' => 1,
				'coupon_price' => $coupon_price,
				'is_active' => (isset($is_active) && $is_active == 1) ? 1 : 0,
				'package_id' => ($package != '') ? $package  : 0  				
			);

			$image_name = '';
            if ($_FILES['image']['name'] != '') {
                $img_array = array('png', 'jpeg', 'jpg', 'PNG', 'JPEG', 'JPG');
                $exts = explode(".", $_FILES['image']['name']);
                $name = $exts[0] . time() . "." . end($exts);

                $config['upload_path'] = OFFERS_IMAGES;
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
                        @unlink(OFFERS_IMAGES . $data['offer_data']['image']);
                    }
                    $image_name = $file_info['file_name'];
                }
            }
            
			if(is_numeric($id)) {
				$this->common_model->update(TBL_COUPONS, $data['offer_data']['coupon_id'], $insert_data);
				$insert_data_for_offer = array(
					'show_on_offer_page' => (isset($show_on_offer_page) && $show_on_offer_page == 1) ? 1 : 0,
					'is_active' => (isset($is_active) && $is_active == 1) ? 1 : 0,
					'description' => $description,
					
				);
				if ($image_name != '') {
					$insert_data_for_offer['image'] = $image_name;
				} 
				$this->common_model->update(TBL_OFFERS, $data['offer_data']['id'], $insert_data_for_offer);	
				$this->session->set_flashdata('success', 'Offer successfully updated!');

				\Stripe\Stripe::setApiKey($data['payment_settings']['secret_key']);
				$cpn = \Stripe\Coupon::retrieve($data['offer_data']['coupon_code']);
				$cpn->delete();
				\Stripe\Coupon::create(array(
				  	"id" => $data['offer_data']['coupon_code'],
				  	"duration" => "once",
				  	"percent_off" => $coupon_price,
				));

			} else {
				$insert_data['coupon_code'] = create_coupon();				
				$coupon_id  = $this->common_model->insert(TBL_COUPONS, $insert_data);
				$insert_data_for_offer = array(
					'coupon_id' => $coupon_id,
					'show_on_offer_page' => (isset($show_on_offer_page) && $show_on_offer_page == 1) ? 1 : 0,
					'is_active' => (isset($is_active) && $is_active == 1) ? 1 : 0,
					'description' => $description,
					'image' => ($image_name != '') ? $image_name : null
				);
				$this->common_model->insert(TBL_OFFERS, $insert_data_for_offer);	
				$this->session->set_flashdata('success', 'Offer successfully inserted!');

				\Stripe\Stripe::setApiKey($data['payment_settings']['secret_key']);
				\Stripe\Coupon::create(array(
				  	"id" => $insert_data['coupon_code'],
				  	"duration" => "once",
				  	"percent_off" => $coupon_price,
				));
			}
        	redirect('admin/offers');
        }
		$this->template->load('admin', 'admin/offers/add_offer', $data);
	}

	public function delete($id = null) {

		$where = array('where' => 
			array(
				'o.id' => $id
			)
		);
		$option = array(
			'single' => TRUE,
			'join' => array(
				array(
					'table' => TBL_COUPONS.' c',
					'condition' => 'c.id = o.coupon_id'
				)
			)
		);
		$data['offer_data'] = $this->common_model->sql_select(TBL_OFFERS.' o', 'o.*, c.start_datetime, c.end_datetime, c.coupon_price, c.id AS coupon_id, c.coupon_code', $where, $option);
		if($data['offer_data']) {
			$post_data['is_delete'] = 1;
	        $this->common_model->update(TBL_OFFERS, $id, $post_data);
	        $this->session->set_flashdata('success', 'Offer successfully deleted!');
	        redirect('admin/Offers');
		}
        
    }

    public function activate($id = null) {
		$post_data['is_active'] = 1;
        $this->common_model->update(TBL_OFFERS, $id, $post_data);
        $this->session->set_flashdata('success', 'Offer successfully activated!');
	    redirect('admin/Offers');
    }

    public function deactivate($id = null) {
		$post_data['is_active'] = 0;
        $this->common_model->update(TBL_OFFERS, $id, $post_data);
        $this->session->set_flashdata('success', 'Offer successfully de-activated!');
	    redirect('admin/Offers');
    }
}