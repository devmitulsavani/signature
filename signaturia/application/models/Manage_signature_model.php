<?php

class Manage_signature_model extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    /**
     * @method : get_row()
     * @uses : this function is used to get row based on id
     * @param : int @id id of table
     * @author : KAP
     */
    public function get_row($id) {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('generators');
        return $query->row_array();
    }

    /**
     * check_valid_email()
     * @uses check entered email is valid or not
     * @param string @email email of user
     * @author KAMLESH POKIYA 
     * */
    public function check_valid_email($where) {
        $this->db->select('*');
        $this->db->where($where, FALSE);
        $this->db->where('user_role', 2);
        $result = $this->db->get('users');
        if ($result->result_array()) {
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
        $this->db->select('up.*, p.*');
        $this->db->join('packages p', 'p.id = up.package_id', 'LEFT');
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
    public function insert_batch($table, $array) {
        if ($this->db->insert_batch($table, $array)) {
            return $this->db->insert_id();
        } else {
            return 0;
        }
    }

    /**
     * Get signature by id
     * @author Kirti
     * @param int $user_id
     * @param int $id
     */
    public function get_signature_by_id($id = NULL) {
        $this->db->where(array('sm.signature_id' => $id));
        $select = 'sm.*,sb.*,sd.*,st.*,sa.*';
        $this->db->select($select, FALSE);

        $this->db->join('signatures_disclaimers sd', 'sd.signature_id = sm.signature_id', 'LEFT');
        $this->db->join('signatures_banners sb', 'sb.signature_id = sm.signature_id', 'LEFT');
        $this->db->join('signature_style st', 'st.signature_id = sm.signature_id', 'LEFT');
        $this->db->join('signature_apps sa', 'st.signature_id = sa.signature_id', 'LEFT');
        $query = $this->db->get('signature_main sm');
        return $query->row_array();
    }

    /**
     * Get Social icons of signature        
     * @author Kirti
     * @param int $id
     */
    public function get_signature_social_icons($id = NULL) {
        $this->db->where(array('ss.signature_id' => $id));
        $select = 'ss.*,si.icon1,si.icon2,si.icon3,si.icon4,si.name';
        $this->db->select($select, FALSE);

        $this->db->join(TBL_SOCIAL_ICONS . ' si', 'ss.social_icons_id = si.id', 'LEFT');
        $query = $this->db->get(TBL_SIGNATURE_SOCIALS . ' ss');
        return $query->result_array();
    }

    public function get_all_social_icons() {
        $this->db->where('is_delete', 0);
        $query = $this->db->get(TBL_SOCIAL_ICONS);
        return $query->result_array();
    }

    /**
     * @method insert
     * @uses insert user record into table
     * @param @table = table name, @array = array of insert
     * @return insert_id else 0
     * @author Kirti
     */
    public function insert($table, $array) {
        if ($this->db->insert($table, $array)) {
            return $this->db->insert_id();
        } else {
            return 0;
        }
    }

    public function insertbatch($table, $array) {
        if ($this->db->insert_batch($table, $array)) {
            return $this->db->insert_id();
        } else {
            return 0;
        }
    }

}
