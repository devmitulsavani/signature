<?php

class Payment_model extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    public function get_active_packages() {
        $this->db->select('p.*');
        $this->db->where('is_delete', 0);
        $query = $this->db->get('packages p');
        return $query->result_array();
    }

     /**
     * @method : insert
     * @uses : Insert user record into table
     * @param : @table = table name, @array = array of insert
     * @return : insert_id else 0
     * @author : KAP
     */
    public function insert($table,$array){
        if ($this->db->insert($table, $array)) {
            return $this->db->insert_id();
        } else {
            return 0;
        }
    }

    /**
     * @method : get_row()
     * @uses : this function is used to get row based on id
     * @param : int @id id of table
     * @author : KAP
     */ 
    public function get_row($id) {
        $this->db->select('*');
        $this->db->where('id',$id);
        $query = $this->db->get('packages');
        return $query->row_array();
    }

    /**
     * check_valid_email()
     * @uses check entered email is valid or not
     * @param string @email email of user
     * @author KAMLESH POKIYA 
     **/
    public function check_valid_email($where){
        $this->db->select('*');
        $this->db->where($where, FALSE);
        $this->db->where('user_role', 2);
        $result = $this->db->get('users');
        if($result->result_array()){
            return $result->row_array();
        } else {
            return FALSE;
        }
    }

    /**
     * @method : get_row()
     * @uses : this function is used to get row based on id
     * @param : int @id id of table
     * @author : KAP
     */ 
    public function check_row($where, $table) {
        $this->db->select('*');
        $this->db->where($where, FALSE);
        $query = $this->db->get($table);
        return $query->row_array();
    }

    /**
     * @method : get_valid_user_with_package()
     * @uses : this function used get user package detatil
     * @param : int @id id of table
     * @author : KAP
     */ 
    public function get_valid_user_with_package($user_id) {
        $this->db->select('up.*, p.*, up.id AS selected_id, u.email');
        $this->db->join('packages p', 'p.id = up.package_id', 'LEFT');
        $this->db->join('users u', 'u.id = up.user_id', 'LEFT');
        $this->db->where('up.user_id', $user_id);
        $query = $this->db->get('users_packages up');
        return $query->row_array();
    }

     /**
     * @method : update_record
     * @uses : This function is used to update record
     * @param : @table, @user_id, @user_array = array of update  
     * @author : KAP
     */
    public function update_record($table, $condition, $user_array) {
        $this->db->where($condition);
        if ($this->db->update($table, $user_array)) {
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * @method : insert
     * @uses : Insert user record into table
     * @param : @table = table name, @array = array of insert
     * @return : insert_id else 0
     * @author : KAP
     */
    public function insert_batch($table,$array){
        if ($this->db->insert_batch($table, $array)) {
            return $this->db->insert_id();
        } else {
            return 0;
        }
    }

    public function check_last_payment($user_id){
        $this->db->select('12 * (YEAR(CURDATE()) - YEAR(created)) + (MONTH(CURDATE()) - MONTH(created)) AS months');
        $this->db->where('user_id', $user_id);
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $result = $this->db->get('payment_transactions');
        return $result->row_array();
    }

    public function get_settings() {
        $this->db->select('*');
        $query = $this->db->get('payment_settings');
        return $query->row_array();
    }
}
