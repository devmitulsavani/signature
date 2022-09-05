<?php

class Offers_model extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    public function get_all_offers($type = 'result') {
        $columns = ['o.id', 'c.coupon_id', 'o.start_date', 'o.end_date', 'o.id', 'o.created_date'];
        $keyword = $this->input->get('search');
        $this->db->select('o.*,p.title, c.coupon_code, c.start_datetime, c.end_datetime');
        if (!empty($keyword['value'])) {
            $this->db->where('(coupon_code LIKE "%' . $keyword['value'] . '%" OR start_datetime LIKE "%' . $keyword['value'] . '%" OR end_datetime LIKE "%' . $keyword['value'] . '%" OR title LIKE "%' . $keyword['value'] . '%")');
        }
        // $this->db->where('user_role', 2);
        $this->db->join(TBL_COUPONS . ' c', 'c.id = o.coupon_id', 'LEFT');
        $this->db->join(TBL_PACKAGES . ' p', 'c.package_id = p.id', 'LEFT');
        $this->db->order_by($columns[$this->input->get('order')[0]['column']], $this->input->get('order')[0]['dir']);
        $this->db->where('o.is_delete', 0);
        $this->db->where('c.is_delete', 0);
        if ($type == 'count') {
            $query = $this->db->get(TBL_OFFERS . ' o');
            return $query->num_rows();
        } else {
            $this->db->limit($this->input->get('length'), $this->input->get('start'));
            $query = $this->db->get(TBL_OFFERS . ' o');
            return $query->result_array();
        }
    }

    /**
     * Insert coupon record into table
     * @param array $data - Data to be stored
     * @param array $table - name of table
     * @return int - Inserted Id on successful insert or 0
     */
    public function insert_coupon_records($data, $table) {
        if ($this->db->insert($table, $data)) {
            return $this->db->insert_id();
        } else {
            return 0;
        }
    }
}